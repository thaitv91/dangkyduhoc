<div class="panel panel-default">
	<div class="panel panel-heading">
		<h4>CHATBOX</h4>
	</div>

	<div class="panel panel-body">
		<div align="center"><a id="more-messages-{{ $session_id }}">Read more</a></div>
		<ul class="chat-box" id="chat-box-{{ $session_id }}"></ul>
		<div style="float: right;" id="sending" class="sending">Sending...</div>
	</div>
	<div class="panel panel-footer"> 
		<textarea class="form-control" placeholder="Type your question..." onkeypress="if (event.keyCode==13){sendMessage(this); return false;}"></textarea>
	</div>
</div>
<script type="text/javascript">
	$('#tab-chat li').on('click', function(e) {
		$(this).find('span').removeClass('badge');
		$(this).find('span').text('');
	});

	//Load old content message
	$.ajax({
		url : "{{ route('getHistoryMessageAdmin',['chat_session'=>$session_id]) }}",
	}).done(function(data) {
		
		$('#chat-box-{{ $session_id }}').append(data.view);
		$('.panel-body').animate({ scrollTop: $(document).height() }, 100);
		$('#more-messages-{{ $session_id }}').attr('href', data.next_url);
		});

	//Read more messages
	$('#more-messages-{{ $session_id }}').on('click', function(e) {
		if ($('#more-messages-{{ $session_id }}').attr('href') != null) {
			$.ajax({
				url : $('#more-messages-{{ $session_id }}').attr('href'),
			}).done(function (data) {
				$('#chat-box-{{ $session_id }}').prepend(data.view);
				$('#more-messages-{{ $session_id }}').attr('href', data.next_url);
			});
		}
		e.preventDefault();
	});
</script>