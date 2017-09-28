<!DOCTYPE html>
<html>
<head>
	<title>Demo Chat app</title>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
	<!-- Font Awesome -->
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.5.0/css/font-awesome.min.css">
	<!-- Ionicons -->
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/ionicons/2.0.1/css/ionicons.min.css">

    <style type="text/css">
	    .panel-body{
	    	height:300px;
	    	overflow-y:scroll;
	    	width:100%;
	    }

    	ul {
    		clear: both;
    	}
    	/*Fixed*/
    	li {
    		margin-left: -40px;
    		margin-bottom: 10px;
    		display: block;
    	}

    	li.from {
    		display: block;
    		text-align: right;
    	}

    	li.to > span {
    		background: lavenderblush;
    		padding: 5px 10px 5px 10px;
    		border-radius: 0px 5px 5px 5px;
    	}

    	li.from > span {
    		background: lightcyan;
    		padding: 5px 10px 5px 10px;
    		border-radius: 5px 0px 5px 5px;
    	}

    	#sending {
    		display: none;
    	}
    </style>

</head>
<body>
	<div class="container">
		<div class="panel panel-primary">
			<div class="panel panel-heading">
				<h4>CHATBOX</h4>
			</div>

			<div class="panel panel-body">
				<div align="center"><a id="more-messages" href="#">Read more</a></div>
				<ul id="chat-box">
				</ul>
				<div style="float: right;" id="sending">Sending...</div>
			</div>

			<div class="panel panel-footer"> 
				<textarea class="form-control" placeholder="Type your question..." onkeypress="if (event.keyCode==13){sendMessage(this); return false;}"></textarea>
			</div>
		</div>
	</div>
	<input type="hidden" name="" value="">
</body>
<!-- jQuery 2.2.3 -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.4/jquery.min.js"></script>
<script src="https://js.pusher.com/4.1/pusher.min.js"></script>
<script src="{{ asset('js/moment.js') }}"></script>
<script type="text/javascript">
	$.ajaxSetup({
		headers: {
            'X-CSRF-TOKEN': "{{ csrf_token() }}"
        }
	});
</script>
<script>
	Pusher.logToConsole = true;
	// Pusher.key;
	//instantiate a Pusher object with our Credential's key
	var pusher = new Pusher("{{env('PUSHER_APP_KEY')}}", {
		cluster: 'ap1',
		encrypted: true
	});

	//Subscribe to the channel we specified in our Laravel Event
	var channel = pusher.subscribe('my-channel');

	//Bind a function to a Event (the full Laravel class)
	channel.bind('App\\Events\\SendMessage', addMessage);

	function addMessage(data) {
		if (data.send_from != 'admin' || data.send_to != "{{ Auth::check()?'user_'.Auth::user()->id:Cookie::get('chat_session', Session::getId()) }}") return false;
		var span = $('<span>').text(data.message);
		var li = $('<li></li>', {
			class : 'to',
			title : 'sent on ' + moment().format('MMM Do h:mm a'),
		}).append(span);
		$('#chat-box').append(li);
		$('.panel-body').animate({ scrollTop: $(document).height() }, 100);//Scroll to bottom of chatbox
	}
</script>
<script type="text/javascript">
	//Load old content message
	$.ajax({
		url : "{{ route('getHistoryMessage') }}",
	}).done(function(data) {
		$('#chat-box').append(data.view);
		$('.panel-body').animate({ scrollTop: $('.panel-body').height() }, 100);
		$('#more-messages').attr('href', data.next_url);
		});

	//Send message
	function sendMessage(txt) {
		var messages = $(txt).val();
		if (messages == '')  {
			alert('Please input content before sending!');

			return false;
		}

		// Create tag to present message
		var span = $('<span>').text(messages);
		var li = $('<li>', {class : 'from', title : 'sent on ' + moment().format('MMM Do h:mm a')}).append(span);
		$('#sending').css('display','block');
		
		$(txt).val('');

		//Send message
		$.ajax({
			url : '{{ route("sendMessage") }}',
			data : {
				time : "{{ time() }}",
				messages : messages,
				send_from : "{{ Auth::check()?'user_'.Auth::user()->id:Cookie::get('chat_session', Session::getId()) }}",
				send_to : 'admin',
			},
			// type : 'POST',
		}).done(function(data) {
			$('#sending').css('display','none');
			$('#chat-box').append(li);
			$('.panel-body').animate({ scrollTop: $(document).height() }, 100);//Scroll to bottom of chatbox
		});
	}

	$('#more-messages').on('click', function(e) {
		if ($('#more-messages').attr('href') != null) {
			$.ajax({
				url : $('#more-messages').attr('href'),
			}).done(function (data) {
				$('#chat-box').prepend(data.view);
				$('#more-messages').attr('href', data.next_url);
			});
		}
		e.preventDefault();
	});

</script>
</html>