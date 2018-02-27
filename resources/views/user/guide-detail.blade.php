@extends("layouts/app")

@section("content")
<div class="title-page">
	<div class="container"><h1>UNIVERSITY GUIDE</h1></div>
</div>

<div class="container" id="guide-detail">
	<div class="row">
		<div class="col-md-4 hidden-sm hidden-xs" id="content-fixed">
			<div class="left-guide-detail">
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

				<div class="sidebar-nav-fixed">
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
				</div><!-- /.sidebar-nav-fixed -->
			</div><!-- /.left-guide-detail -->
		</div><!-- ./col-md-4 -->

		<div class="col-md-8">
			<div class="guide-detail-header">
				<span class="category">
                <a href="/guide">Guide</a> <i class="fa fa-caret-right" aria-hidden="true"></i> <a href="/guide/category/about-therightu">About theRightU</a>
            </span>

            <div class="fblike hidden-sm hidden-xs">
            	<img src="/img/facebook.png" alt="">
            </div>
			</div><!-- /.guide-detail-header -->

			<div class="content-guide-detail">
				<h1>
					<i class="fa fa-check-circle" aria-hidden="true"></i>
					<span>{!! $title !!}</span>
				</h1>

				<div class="faq-answer">
					{!! $answer !!}
				</div><!-- /.faq-answer -->

				<div class="author" id="author">
					<div class="row">
						<div class="col-lg-2 col-md-12 col-sm-12 col-xs-12 col-no-pad-right-lg text-center-xs">
							<img src="https://therightustorage.blob.core.windows.net/assets/img/web/team/KL.jpg" alt="Dr Chan Khai Leok">
						</div>

						<div class="col-lg-10 col-md-12 col-sm-12 col-xs-12">
							<div class="content">
								<div class="name">Dr Chan Khai Leok, <br class="visible-xs">Chief Consultant, <br class="visible-xs">theRightU</div>
								<div>Are you a student in Southeast asia thinking of pursuing an undergraduate or postgraduate course abroad? Free consultation is available!</div>
								<div class="martop10">
                          <button class="btn btn btn-blue openchat">
                              Ask me a question
                          </button>
                      </div>
							</div>
						</div>
					</div>
				</div><!-- /.author -->
			</div><!-- /.content-guide-detail -->

			<div class="guide-detail-header bottom visible-xs visible-sm">
				<span class="category">
                <a href="/guide">Guide</a> <i class="fa fa-caret-right" aria-hidden="true"></i> <a href="/guide/category/using-therightu">About theRightU</a>
            </span>

            <div class="fblike hidden-sm hidden-xs">
            	<img src="/img/facebook.png" alt="">
            </div>
			</div><!-- /.guide-detail-header -->
		</div><!-- /.col-md-8 -->
	</div>
	
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
