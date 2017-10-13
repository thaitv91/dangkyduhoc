@extends("layouts/app")

@section("content")
<div class="title-page">
	<div class="container"><h1>
			@if($locale == 'en')
				{{ $guide_category->name_en }}
			@else
				{{ $guide_category->name }}
			@endif
		</h1>
	</div>
</div>

<div class="container guide-list-page">
	<div class="search-general">
		<div class="form">
			<form action="" method="GET">
			<input type="text" class="form-control ui-autocomplete-input" name="search_en" id="search_en" placeholder="Search Guide" autocomplete="off"><span role="status" aria-live="polite" class="ui-helper-hidden-accessible"></span>
			<button><i class="sprite-search-2"></i></button>
			</form>
		</div>
	</div><!-- /.search-general -->

	<div class="choose-list-guide">
		<select class="form-control">
			@foreach($guide_list as $category)
                <option value="/guide/category/{{ $category->slug }}">
                    @if($locale == 'en')
                        {{ $category->name_en }}
                    @else
                        {{ $category->name }}
                    @endif
                </option>
			@endforeach
		</select>
	</div><!-- /.choose-list-guide -->

	@foreach($topics as $topic)
		<div class="box-category-guide">
			<h3>
				@if($locale == 'en')
					{{ $topic->title_en }}
				@else
					{{ $topic->title }}
				@endif
			</h3>
			<?php
				$questions = \App\Models\GuideQuestion::where('topic_id', '=', $topic->id)->get();
			?>
			<ul>
				@foreach($questions as $question)
					<li>
						<a href="/guide/{{ $question->slug }}">
							@if($locale == 'en')
								{{ $question->question_en }}
							@else
								{{ $question->question }}
							@endif
						</a>
					</li>
				@endforeach
			</ul>
		</div><!-- /.box-category-guide -->
	@endforeach
</div>




@endsection
@section('scripts')
{{-- <script type="text/javascript" src="//ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>   
<script type="text/javascript" src="//codeorigin.jquery.com/ui/1.10.2/jquery-ui.min.js"></script> --}}
<script type="text/javascript">
	$(document).ready(function(){
		$("#search_en").autocomplete({
			source: "/search/autocomplete",
			focus: function( event, ui ) {
				return false;
			},
			select: function( event, ui ) {
				window.location.href = ui.item.slug;
			}
		}).data( "ui-autocomplete" )._renderItem = function( ul, item ) {
			var inner_html = '<a href="/guide/' + item.slug + '" ><h6>' + item.value + '</h6>';
			return $( "<li></li>" )
					.data( "item.autocomplete", item )
					.append(inner_html)
					.appendTo( ul );
		};
	});
</script>
@endsection
