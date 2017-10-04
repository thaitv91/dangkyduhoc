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
	li.from, li.to {
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
		<h2>Dynamic Tabs</h2>

		<ul class="nav nav-tabs" id="tab-chat">
			<li class="active"><a data-toggle="tab" href="#home">Home</a></li>
		</ul>
		<div class="tab-content">
			<div id="home" class="tab-pane fade in active">
				<div class="panel panel-primary">
					<div class="panel panel-heading">
						<h4>CHATBOX</h4>
					</div>

					<div class="panel panel-body">
						<ul id="chat-box">
						</ul>
						<div style="float: right;" id="sending" class="sending">Sending...</div>
					</div>

					<div class="panel panel-footer"> 
						<textarea class="form-control" placeholder="Type your question..." onkeypress="if (event.keyCode==13){sendMessage(this); return false;}"></textarea>
					</div>
				</div>
			</div>
		</div>
	</div>
</body>
<!-- jQuery 2.2.3 -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.4/jquery.min.js"></script>
<script src="https://js.pusher.com/4.1/pusher.min.js"></script>
<script src="{{ asset('js/moment.js') }}"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
<script type="text/javascript">
	$.ajaxSetup({
		headers: {
			'X-CSRF-TOKEN': "{{ csrf_token() }}"
		}
	});
</script>

<script>
	var chat_list = [];
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
		if (data.send_from == 'admin') return false;//If message is wrote by admin

		//New user send message
		if (chat_list.indexOf(data.send_from) == -1) { 
			chat_list.push(data.send_from);//Save info from browser 
			
			if (data.send_from.includes('user_'))
				var li_html = $('<li><a data-toggle="tab" href="#'+data.send_from+'">'+data.send_from+'<span class="badge">New</span></a></li>');
			else
				var li_html = $('<li><a data-toggle="tab" href="#'+data.send_from+'">Guest '+chat_list.length+'<span class="badge">New</span></a></li>');
			$('#tab-chat').append(li_html);

			$('.tab-content').append($('<div id="'+data.send_from+'" class="tab-pane fade"></div>'));
			// Add new box chat
			$.ajax({
				url : '{{ route("createFormChat") }}',
				data : {
					session_id : data.send_from,
					message : data.message,
				}
			}).done(function (html) {
				$('#'+data.send_from).append(html);
				return false;
			});
		}

		var span = $('<span>').text(data.message);
		var li = $('<li></li>', {
			class : 'to',
			title : 'sent on ' + moment().format('MMM Do h:mm a'),
		}).append(span);
		$('#chat-box-'+data.send_from).append(li);

		//Create new message notice
		if ($('a[href*="'+data.send_from+'"]').find('span.badge').length == 0)
			$('a[href*="'+data.send_from+'"]').append('<span class="badge">New</span>');
	}
</script>
<script type="text/javascript">
	//Send message
	function sendMessage(txt) {
		// Check empty messages
		var messages = $(txt).val();
		if (messages == '')  {
			alert('Please input content before sending!');

			return false;
		}

		//Create html display message
		var span = $('<span>').text(messages);
		var li = $('<li>', {class : 'from', title : 'sent on ' + moment().format('MMM Do h:mm a')}).append(span);
		$('.sending').css('display','block');
		$(txt).val('');
		
		//send message
		$.ajax({
			url : '{{ route("sendMessage") }}',
			data : {
				messages : messages,
				send_from : "admin",
				send_to : $(txt).parent().parent().find('ul').attr('id').split('-')[2],
			},

		}).done(function(data) {
			$('.sending').css('display','none');
			$('#'+$(txt).parent().parent().find('ul').attr('id')).append(li);
			$('.panel-body').animate({ scrollTop: $(document).height() }, 100);//Scroll to bottom of chatbox
		});

		//Remove new message notice when send message
		$('a[href*="#'+$(txt).parent().parent().find('ul').attr('id').split('-')[2]+'"]').find('span').removeClass('badge');
		$('a[href*="#'+$(txt).parent().parent().find('ul').attr('id').split('-')[2]+'"]').find('span').text('');
	}

	//Remove notice new message when click on tab
	$('#tab-chat li').on('click', function(e) {
		$(this).find('span').removeClass('badge');
		$(this).find('span').text('');
	});

</script>
</html>