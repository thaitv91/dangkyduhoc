<?php foreach ($messages as $key => $value): ?>
	@if ($value->send_from == 'admin')
	<li class="to" title='sent on {{ date("M j Y g:i a", (integer)$value->time) }}'>{{ $value->content }}</li>
	@else
	<li class="from" title='sent on {{ date("M j Y g:i a", (integer)$value->time) }}'>{{ $value->content }}</li>
	@endif
<?php endforeach ?>