@extends("layouts/app")

@section("content")
<div class="title-page">
	<div class="container"><h1>ACCOUNTING &amp; FINANCE</h1></div>
</div>

<div class="container">
	<div class="header-page">
		<div class="row">
			<div class="col-lg-4">
				<h2 class="title-header">{{ $university['name']}}</h2>
				<p class="sub-title">{{ $university->country['name']}}</p>
			</div>
			<div class="col-lg-8">
				<ul class="link-neo smoothScroll">
					<li class="hidden-xs">
						<div class="neo">
							<span class="icon"><i class="fa fa fa-flask" aria-hidden="true"></i></span><br/>
							Accredited Pharmacy
						</div>
					</li>
					<li>
						<div class="neo">
							<span class="icon"><i class="fa fa-graduation-cap" aria-hidden="true"></i></span><br/>
							TEF Gold Award
						<div class="neo">
					</li>
					<li class="hidden-xs">
						<div class="neo">
							<span class="icon"><i class="fa fa-certificate" aria-hidden="true"></i></span><br/>
							Triple Crown Accredited
						<div class="neo">
					</li>
					<li>
						<a href="#apply-online" class="neo link-scroll">
							<span class="icon"><i class="fa fa-check" aria-hidden="true"></i></span><br/>
							Apply Online
						</a>
					</li>
					<li>
						<a href="#scholarships" class="neo link-scroll">
							<span class="icon"><i class="fa fa-check" aria-hidden="true"></i></span><br/>
							Scholarships 
						</a>
					</li>
				</ul>
			</div>
		</div>
	</div><!-- /.header-page -->

	<div class="uni-info">
		<div class="img">
			<div class="slider" id="slider-img-uni">
				<div class="item-img"><img src="/img/uni-img.jpg" alt=""></div>
				<div class="item-img"><img src="/img/uni-img.jpg" alt=""></div>
				<div class="item-img"><img src="/img/uni-img.jpg" alt=""></div>
				<div class="item-img"><img src="/img/uni-img.jpg" alt=""></div>
			</div>
		</div>
		<div class="info">
			<h3>{{ trans('university.info') }}</h3>
			<div class="item">
				<div class="lbl">{{ trans('university.year') }} <br/>{{ trans('university.founded') }}</div>
				<div class="right">{{ $statistic['year_founded']}}</div>
			</div>

			<div class="item">
				<div class="lbl">{{ trans('university.student') }}<br/> {{ trans('university.population') }}</div>
				<div class="right">{{ $statistic['student_population']}}</div>
			</div>

			<div class="item">
				<div class="lbl">{{ trans('university.staff') }}<br/> {{ trans('university.population') }}</div>
				<div class="right">{{ $statistic['staff_population']}}</div>
			</div>

			<div class="item">
				<div class="lbl">{{ trans('university.male_female') }}<br/> {{ trans('university.ratio') }}</div>
				<div class="right">{{ $statistic['male_number']}} : {{ $statistic['female_number']}}</div>
			</div>

			<div class="item">
				<div class="lbl">{{ trans('university.international') }}<br/> {{ trans('university.students') }}</div>
				<div class="right">{{ $statistic['international_students']}}%</div>
			</div>

			<div class="item">
				<div class="lbl">{{ trans('university.local') }}<br/> {{ trans('university.hotline') }}</div>
				<div class="right">{{ $meta->phone}}</div>
			</div>
		</div><!-- /.info -->
	</div><!-- /.uni-info -->

	<div class="breadcrumb-page smoothScroll hidden-sm hidden-xs">
		<ul class="list">
			<li><a href="#about-us" class="link-scroll">{{ trans('university.about_us') }}</a></li>            
			<li><a href="#apply-online" class="link-scroll">{{ trans('university.courses') }}</a></li>            
			<li><a href="#rankings" class="link-scroll">{{ trans('university.rankings') }}</a></li>           
			<li><a href="#scholarships" class="link-scroll">{{ trans('university.scholarships') }}</a></li>            
			<li><a href="#campuses" class="link-scroll">{{ trans('university.campuses') }}</a></li>            
			<li><a href="#ask-us-a-question" class="link-scroll">{{ trans('university.ask_question') }}</a></li>            
			<li>{{ $meta->phone}}</li>
		</ul>

		<div class="social">
	      <a href="#"><i class="sprite-facebook"></i></a>
	      <a href="#"><i class="sprite-google-plus"></i></a>
	      <a href="#"><i class="sprite-twitter"></i></a>
	      <a href="#"><i class="sprite-youtube"></i></a>
	   </div><!-- /.social -->
	</div><!-- /.breadcrumb-page -->

	<div class="row">
		<div class="col-md-6">
			<div class="box about" id="about-us">
				<h4 class="title-box">{{ trans('university.about_university') }}</h4>
				<div class="description">
					{!! $meta->about !!}
				</div>
			</div><!-- /.about -->
		</div><!-- /.col-md-6 -->

		<div class="col-md-6">
			<div class="box our-campuses" id="campuses">
				<h4 class="title-box">{{ trans('university.our_campuses') }}</h4>
				<div class="description">
					{!! $meta->campus !!}
				</div>

				<div class="tags">
					<a href="#" id="store-map" onclick="getMarker('store'); return false;"><i class="fa fa-mobile"></i> {{ trans('university.grocery_store') }}</a>
					<a href="#" id="bank-map" onclick="getMarker('bank'); return false;"><i class="fa fa-credit-card"></i> {{ trans('university.bank') }}</a>
					<a href="#" id="coffee-map" onclick="getMarker('coffee'); return false;"><i class="fa fa-coffee"></i>{{ trans('university.coffee_shop') }}</a>
					<a href="#" onclick="getMarker('restaurant'); return false;"><i class="fa fa-cutlery" ></i> {{ trans('university.restaurant') }}</a>
					<a href="#" onclick="getMarker('shopping'); return false;"><i class="fa fa-mobile" ></i>{{ trans('university.shopping') }}</a>
					<a href="#" onclick="getMarker('park'); return false;"><i class="fa fa-tree" ></i>{{ trans('university.park') }}</a>
					<a href="#" onclick="getMarker('pharmacies'); return false;"><i class="fa fa-medkit" ></i> {{ trans('university.pharmacies') }}</a>
					<a href="#" onclick="getMarker('bus_stop'); return false;"><i class="fa fa-bus" ></i>{{ trans('university.bus_stop') }}</a>
					<a href="#" onclick="getMarker('airport'); return false;"><i class="fa fa-plane" ></i>{{ trans('university.airport') }}</a>
				</div><!-- /.tags -->
			</div><!-- /.our-campuses -->
		</div><!-- /.col-md-6 -->
	</div>

	<div class="map-uni">
		{{-- <img src="/img/map-uni.jpg" alt=""> 1200 423 --}}
		<div id="map-uni" style="width: 1200 px;height: 423px;"></div>
	</div><!-- /.map-uni -->

	<div class="row">
		<div class="col-md-6">
			<div class="box-ranking left" id="rankings">
				<h4 class="title-box">{{ trans('university.rankings') }}</h4>
				@if($ranking)
				@foreach( $ranking as $list_ranking)
				<?php $slug_country  = $list_ranking->country_slug; 
					$country = \App\Models\Country::where('slug',$slug_country)->first();
					$name_country = $country->name;
				?>
				<div class="item">
					<div class="number"><span>{{ $list_ranking->ranking_point}}</span>@if($list_ranking->ranking_point == 1 )st @elseif($list_ranking->ranking_point == 2) nd @elseif($list_ranking->ranking_point ==3)rd @else th @endif <br/>@if ($locale == 'en') {{ $list_ranking->ranking_title_en}} @else {{ $list_ranking->ranking_title}} @endif </div>
					<div class="lbl">@if ($locale == 'en') {{ $list_ranking->ranking_subject_en}} @else{{ $list_ranking->ranking_subject }} @endif <br/>{{ $name_country }}</div>
				</div>
				@endforeach
				@endif
			</div><!-- /.box-ranking -->
		</div><!-- /.col-md-6 -->

		<div class="col-md-6">
			<div class="box-ranking right" id="scholarships">
				<h4 class="title-box">{{ trans('university.scholarships') }}</h4>
				<div class="item">
					<div class="number">PhD Studentship</div>
					<div class="lbl">Up to £30000 for tuition and living<br/>3 available</div>
				</div>

				<div class="item">
					<div class="number">British Council IELTS Prize 2017</div>
					<div class="lbl">Up to $12000 for tuition<br/>6 available</div>
				</div>

				<div class="item">
					<div class="number">Postgraduate Research Schilarship</div>
					<div class="lbl">£7000 for tuition<br/>10 available</div>
				</div>

				<div class="item">
					<div class="number">Aston University 50th Anniversary<br/>Taught Postgraduate Scholarship</div>
					<div class="lbl">Up to £5000 for tuition<br/>More than 50 available</div>
				</div>

				<div class="item">
					<div class="number">Aston Business Schoold Scholarship<br/>Award Scheme 2016</div>
					<div class="lbl">£1000 for tuition<br/>Limited quantity</div>
				</div>

				<div class="item">
					<div class="number">MBA Scholarship 2015/2016</div>
					<div class="lbl">Up to £6000 for tuition<br/>Limited quantity</div>
				</div>

				<div class="item">
					<div class="number">British Chevening Scholarships</div>
					<div class="lbl">100% for tuition and living expenses<br/>Limited quantity</div>
				</div>

				<div class="item">
					<div class="number">UNESCO Fellowship Programmes</div>
					<div class="lbl">Up to 100% for tuition and living expenses<br/>Limited quantity</div>
				</div>

				<div class="item">
					<div class="number">Aston Alumni Bursaries</div>
					<div class="lbl">20% for tuition<br/>Unlimited quantity</div>
				</div>
			</div><!-- /.box-ranking -->
		</div><!-- /.col-md-6 -->
	</div>

	<div class="undergraduate-courses" id="apply-online">
		<h4 class="title-box">Undergraduate courses</h4>
		<div class="tags">
			<span class="tag"><input type="checkbox" id="checkbox-1"><label for="checkbox-1">Accounting &amp; Finance</label></span>
			<span class="tag"><input type="checkbox" id="checkbox-2"><label for="checkbox-2">Bioengineering</label></span>
			<span class="tag"><input type="checkbox" id="checkbox-3"><label for="checkbox-3">Biological Science</label></span>
			<span class="tag"><input type="checkbox" id="checkbox-4"><label for="checkbox-4">Business Studies</label></span>
			<span class="tag"><input type="checkbox" id="checkbox-5"><label for="checkbox-5">Chemical Engineering</label></span>
			<span class="tag"><input type="checkbox" id="checkbox-6"><label for="checkbox-6">Chemistry Civil</label></span>
			<span class="tag"><input type="checkbox" id="checkbox-8"><label for="checkbox-7">Engineering</label></span>
			<span class="tag"><input type="checkbox" id="checkbox-9"><label for="checkbox-8">Computer</label></span>

			<span class="tag"><input type="checkbox" id="checkbox-10"><label for="checkbox-10">Accounting &amp; Finance</label></span>
			<span class="tag"><input type="checkbox" id="checkbox-11"><label for="checkbox-11">Bioengineering</label></span>
			<span class="tag"><input type="checkbox" id="checkbox-12"><label for="checkbox-12">Biological Science</label></span>
			<span class="tag"><input type="checkbox" id="checkbox-13"><label for="checkbox-13">Business Studies</label></span>
			<span class="tag"><input type="checkbox" id="checkbox-14"><label for="checkbox-14">Chemical Engineering</label></span>
			<span class="tag"><input type="checkbox" id="checkbox-15"><label for="checkbox-15">Chemistry Civil</label></span>
			<span class="tag"><input type="checkbox" id="checkbox-16"><label for="checkbox-16">Engineering</label></span>
			<span class="tag"><input type="checkbox" id="checkbox-17"><label for="checkbox-17">Computer</label></span>
		</div><!-- /.tags -->
	</div><!-- /.undergraduate-courses -->

	<div class="filter-result">
		<h4 class="title-box">Accounting &amp; Finance</h4>
		<div class="list-courses">
			<div class="row item">
				<div class="col-lg-5 col-md-4 col-sm-7 col-xs-12">
					<div class="uni-name">
						<a class="course_name" href="#">Accounting and Finance</a>
						<div class="classification">BSc (Hons)</div>
						<div class="visible-sm visible-xs">
                        <span class="inline-block-sm margin-right10-sm">S$22.7K / year</span>
                        <span class="inline-block-sm margin-right10-sm">3 years</span>
                        <span class="inline-block-sm">BBB</span>
                  </div>
					</div><!-- /.uni-name -->
				</div>

				<div class="course-stats col-lg-7 col-md-8 col-sm-5 col-xs-12">
					<div class="pull-right">
						<div class="cell hidden-sm hidden-xs">
							<span class="tip display-block" data-toggle="tooltip" title="" data-html="true" data-placement="top" data-original-title="Tuition fees excluding living expenses">S$22.7K</span>
							<span class="sub-tip display-block">per year</span>
						</div>

						<div class="cell hidden-sm hidden-xs">
                     <span class="tip display-block" data-toggle="tooltip" title="" data-html="true" data-placement="top" data-original-title="Chat with us for a free advance standing assessment.">3</span>
                     <span class="sub-tip display-block">years</span>
                  </div>

                  <div class="cell hidden-sm hidden-xs">
                     <span rel="a_levels" class="tip display-block" title=""  data-toggle="tooltip" title="" data-html="true" data-placement="top" data-original-title="Click to toggle between entry requirements for different qualifications">	
                     	BBB
                     </span>
                     <span class="sub-tip display-block">grade</span>
                  </div>

                  <div class="cell hidden-sm hidden-xs course-progression">
			                <div class="see-pathways tip" title="" data-toggle="tooltip" title="" data-html="true" data-placement="top" data-original-title="Can't meet the minimum grades? Click to see available pathways to progress into Bangor University.">
			                    <i class="fa fa-arrow-up"></i>
			                    <span class="sub-tip display-block">5 pathways</span>
			                </div>
			        </div>

			        <div class="cell_1">
                     <div class="compare" title="Add to compare">
                         <div class="compare-btn">
                             <input id="compare_1" data-courseid="1" type="checkbox" class="compare-btn compareCheckbox">
                             <label for="compare_1" class="compare-label  btn btn-green">Compare <i class="fa fa-check"></i></label>
                         </div>
                     </div>
                 </div>

                    <div class="cell_1">
                           <div id="apply_1425" class="btn btn-green apply-btn" onclick="javascript:apply('1');">
                                APPLY
                           </div>
                           <div id="selected_1425" class="btn btn-green apply-add-btn hide" onclick="javascript:unselect('1');" title="Remove from university application?">
                                ADDED  <i class="fa fa-check"></i>
                           </div>
                    </div>
					</div>
				</div>

				<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
					<div id="" class="arrow-box">
						<div class="tree">
							<div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
                         <div class="info">
                             <h1>Pathway programmes available</h1>
                         </div>
                     </div>
                     <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12 text-right">
                         <div class="info">
                             <a class="whichroute"><i class="fa fa-question-circle" aria-hidden="true"></i> Which pathway should I choose?</a>
                             <div id="faq-list" class="martop10">
                                 <ul>
                                     <li>
                                         <a href="/guide/pathways-to-university-what-is-foundation-program" target="_blank">What is Foundation Program?</a>
                                     </li>
                                     <li>
                                         <a href="/guide/pathways-to-university-what-is-diploma" target="_blank">What is Diploma?</a>
                                     </li>
                                     <li>
                                         <a class="openchat gtt-chat">Ask an education consultant</a>
                                     </li>
                                 </ul>
                             </div>
                         </div>
                     </div>

                     <div id="diagram" class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                     	svg
                     </div>
						</div>
					</div><!-- /.arrow_box -->
				</div>
			</div><!-- /.item -->

			<div class="row item">
				<div class="col-lg-5 col-md-4 col-sm-7 col-xs-12">
					<div class="uni-name">
						<a class="course_name" href="#">Accounting and Finance</a>
						<div class="classification">BSc (Hons)</div>
						<div class="visible-sm visible-xs">
                     <span class="inline-block-sm margin-right10-sm">S$22.7K / year</span>
                     <span class="inline-block-sm margin-right10-sm">3 years</span>
                     <span class="inline-block-sm">BBB</span>
               </div>
					</div><!-- /.uni-name -->
				</div>

				<div class="course-stats col-lg-7 col-md-8 col-sm-5 col-xs-12">
					<div class="pull-right">
						<div class="cell hidden-sm hidden-xs">
							<span class="tip display-block" data-toggle="tooltip" title="" data-html="true" data-placement="top" data-original-title="Tuition fees excluding living expenses">S$22.7K</span>
							<span class="sub-tip display-block">per year</span>
						</div>

						<div class="cell hidden-sm hidden-xs">
                     <span class="tip display-block" data-toggle="tooltip" title="" data-html="true" data-placement="top" data-original-title="Chat with us for a free advance standing assessment.">3</span>
                     <span class="sub-tip display-block">years</span>
                  </div>

                  <div class="cell hidden-sm hidden-xs">
                     <span rel="a_levels" class="tip display-block" title=""  data-toggle="tooltip" title="" data-html="true" data-placement="top" data-original-title="Click to toggle between entry requirements for different qualifications">	
                     	BBB
                     </span>
                     <span class="sub-tip display-block">grade</span>
                  </div>

                  <div class="cell hidden-sm hidden-xs course-progression">
			                <div class="see-pathways tip" title="" data-toggle="tooltip" title="" data-html="true" data-placement="top" data-original-title="Can't meet the minimum grades? Click to see available pathways to progress into Bangor University.">
			                    <i class="fa fa-arrow-up"></i>
			                    <span class="sub-tip display-block">5 pathways</span>
			                </div>
			        </div>

			        <div class="cell_1">
                     <div class="compare" title="Add to compare">
                         <div class="compare-btn">
                             <input id="compare_2" data-courseid="1" type="checkbox" class="compare-btn compareCheckbox">
                             <label for="compare_2" class="compare-label  btn btn-green">Compare <i class="fa fa-check"></i></label>
                         </div>
                     </div>
                 </div>

                    <div class="cell_1">
                           <div id="apply_2" class="btn btn-green apply-btn" onclick="javascript:apply('2');">
                                APPLY
                           </div>
                           <div id="selected_1425" class="btn btn-green apply-add-btn hide" onclick="javascript:unselect('2');" title="Remove from university application?">
                                ADDED  <i class="fa fa-check"></i>
                           </div>
                    </div>
					</div>
				</div>

				<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
					<div id="" class="arrow-box">
						<div class="tree">
							<div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
                         <div class="info">
                             <h1>Pathway programmes available</h1>
                         </div>
                     </div>
                     <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12 text-right">
                         <div class="info">
                             <a class="whichroute"><i class="fa fa-question-circle" aria-hidden="true"></i> Which pathway should I choose?</a>
                             <div id="faq-list" class="martop10">
                                 <ul>
                                     <li>
                                         <a href="/guide/pathways-to-university-what-is-foundation-program" target="_blank">What is Foundation Program?</a>
                                     </li>
                                     <li>
                                         <a href="/guide/pathways-to-university-what-is-diploma" target="_blank">What is Diploma?</a>
                                     </li>
                                     <li>
                                         <a class="openchat gtt-chat">Ask an education consultant</a>
                                     </li>
                                 </ul>
                             </div>
                         </div>
                     </div>

                     <div id="diagram" class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                     	svg
                     </div>
						</div>
					</div><!-- /.arrow_box -->
				</div>
			</div><!-- /.item -->
		</div><!-- /.list-courses -->
	</div><!-- /.filter-result -->
</div>

@endsection
@section('scripts')
	<script type="text/javascript">
    var universitys = [];

    function initMapUniver() {
        var map = new google.maps.Map(document.getElementById('map-uni'), {
          zoom: 16,
          center: {lat: {{ $map_university['lat'] }}, lng: {{ $map_university['lng']}} },
          gestureHandling: 'greedy'
        });
        setMarkers2(map);
      }
      @foreach ($markers as $location)
          var temp = [];
          temp.push("{{ $location[0] }}");
          temp.push({{$location[1]}});
          temp.push({{$location[2]}});
          universitys.push(temp);
      @endforeach

      console.log(universitys);

      function setMarkers2(map) {
        var image = {
          url: 'https://developers.google.com/maps/documentation/javascript/examples/full/images/beachflag.png',
          size: new google.maps.Size(20, 32),
          origin: new google.maps.Point(0, 0),
          anchor: new google.maps.Point(0, 32)
        };
        for (var i = 0; i < universitys.length; i++) {
          var university = universitys[i];
          console.log(university[1]);
          var features = [
          {
            position: new google.maps.LatLng(university[1], university[2]), 
          },
          ];
          features.forEach(function(feature) {
          var marker = new google.maps.Marker({
            position: feature.position,
            icon: image,
            map: map,

          });
          var infowindow = new google.maps.InfoWindow({
          	content: university[0],
          });
         google.maps.event.addListener(marker, 'click', (function(marker, i) {
                return function() {
                  infowindow.setContent(universitys[i][0]);
                  infowindow.open(map, marker);
                }
              })(marker, i));
        });
      }
  	}

	function getMarker(location) {
		$.ajax({
			url : "{{ route('getMarker') }}",
			data : {location : location, university_id : "{{ $university->id }}"}
		}).done(function (data) {
			for (var i = 0; i < data.length; i++) {
				for (var j = 0; j < data[i].length; j++) {
					if(j > 0 && j != data[i].length-1){
						data[i][j] = parseFloat(data[i][j]);
					}
				}
				var universitys = data;
			}
			window.universitys = universitys;	
			console.log(universitys);
			//window.setMarkers2(map);
			window.initMapUniver();
		});
		
	}
	</script>
@endsection