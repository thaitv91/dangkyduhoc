@extends("layouts/app")

@section("content")
    <div class="title-page">
        <div class="container"><h1>{{ $university['name']}}</h1></div>
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
                            </div>
                        </li>
                        <li class="hidden-xs">
                            <div class="neo">
                                <span class="icon"><i class="fa fa-certificate" aria-hidden="true"></i></span><br/>
                                Triple Crown Accredited
                            </div>
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
                    @if (count($images) == 0)
                        <div class="item-img"><img src="{{ asset('img/uni-img.jpg') }}" alt=""></div>
                    @endif

                    @foreach ($images as $image)
                        <div class="item-img"><img src="{{ asset(str_replace('\\','/',$image->url)) }}" alt=""></div>
                    @endforeach
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
                    <div class="lbl">{{ trans('university.international') }}<br/> {{ trans('university.students') }}
                    </div>
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
                <a href="{{ $meta->facebook }}"><i class="sprite-facebook"></i></a>
                <a href="{{ $meta->flickr }}"><i class="sprite-google-plus"></i></a>
                <a href="{{ $meta->twitter }}"><i class="sprite-twitter"></i></a>
                <a href="{{ $meta->youtube }}"><i class="sprite-youtube"></i></a>
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
                        <a href="#" id="store-map" onclick="initMapMaker('convenience_store'); return false;"><i
                                    class="fa fa-mobile"></i> {{ trans('university.grocery_store') }}</a>
                        <a href="#" id="bank-map" onclick="initMapMaker('bank'); return false;"><i
                                    class="fa fa-credit-card"></i> {{ trans('university.bank') }}</a>
                        <a href="#" id="coffee-map" onclick="initMapMaker('cafe'); return false;"><i
                                    class="fa fa-coffee"></i>{{ trans('university.coffee_shop') }}</a>
                        <a href="#" onclick="initMapMaker('restaurant'); return false;"><i
                                    class="fa fa-cutlery"></i> {{ trans('university.restaurant') }}</a>
                        <a href="#" onclick="initMapMaker('shopping_mall'); return false;"><i
                                    class="fa fa-mobile"></i>{{ trans('university.shopping') }}</a>
                        <a href="#" onclick="initMapMaker('park'); return false;"><i
                                    class="fa fa-tree"></i>{{ trans('university.park') }}</a>
                        <a href="#" onclick="initMapMaker('pharmacy'); return false;"><i
                                    class="fa fa-medkit"></i> {{ trans('university.pharmacies') }}</a>
                        <a href="#" onclick="initMapMaker('bus_station'); return false;"><i
                                    class="fa fa-bus"></i>{{ trans('university.bus_stop') }}</a>
                        <a href="#" onclick="initMapMaker('airport'); return false;"><i
                                    class="fa fa-plane"></i>{{ trans('university.airport') }}</a>
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
                            <?php $slug_country = $list_ranking->country_slug;
                            $country = \App\Models\Country::where('slug', $slug_country)->first();
                            $name_country = $country->name;
                            ?>
                            <div class="item">
                                <div class="number">
                                    <span>{{ $list_ranking->ranking_point}}</span>@if($list_ranking->ranking_point == 1 )
                                        st @elseif($list_ranking->ranking_point == 2)
                                        nd @elseif($list_ranking->ranking_point ==3)rd @else th @endif
                                    <br/>@if ($locale == 'en') {{ $list_ranking->ranking_title_en}} @else {{ $list_ranking->ranking_title}} @endif
                                </div>
                                <div class="lbl">@if ($locale == 'en') {{ $list_ranking->ranking_subject_en}} @else{{ $list_ranking->ranking_subject }} @endif
                                    <br/>{{ $name_country }}</div>
                            </div>
                        @endforeach
                    @endif
                </div><!-- /.box-ranking -->
            </div><!-- /.col-md-6 -->

            <div class="col-md-6">
                <div class="box-ranking right" id="scholarships">
                    <h4 class="title-box">{{ trans('university.scholarships') }}</h4>
                    @foreach($scholarships as $scholarship)
                        @if($locale == 'en')
                            <div class="item">
                                <div class="number">{{ $scholarship->title_en }}</div>
                                <div class="lbl">{{ $scholarship->description_en }}
                                    <br/>{!! $scholarship->quantity_en !!}</div>
                            </div>
                        @else
                            <div class="item">
                                <div class="number">{{ $scholarship->title }}</div>
                                <div class="lbl">{{ $scholarship->description }}<br/>{!! $scholarship->quantity  !!}
                                </div>
                            </div>
                        @endif
                    @endforeach
                </div><!-- /.box-ranking -->
            </div><!-- /.col-md-6 -->
        </div>

        <div class="undergraduate-courses" id="apply-online">
            <h4 class="title-box">Courses</h4>
            <div class="tags">
                <?php $count = 0; ?>
                @foreach($subjects_slug as $subject_slug)
                    <?php
                    $subject = \App\Models\Subject::where('slug', '=', $subject_slug->subject_slug)->first();
                    if ($locale == 'en') {
                        $name = $subject['name_en'];
                    } else {
                        $name = $subject['name'];
                    }
                    $count++
                    ?>
                    @if($subject)
                        <span class="tag"><input _token="{{ csrf_token() }}" class="filter-subject" type="radio"
                                                 name="subject" value="{{ $subject_slug->subject_slug }}"
                                                 id="subject-{{ $count }}"
                                                 @if($count ==  1)
                                                 checked
                                                 @endif
                                                 subjname="{{ $name }}"><label
                                    for="subject-{{ $count }}">{{ $name }}</label></span>
                    @endif
                @endforeach
            </div><!-- /.tags -->
        </div><!-- /.undergraduate-courses -->

        <div class="filter-result">
            @if($courses)
                <h4 class="title-box">{{ $subject_first_name }}</h4>
                <div class="list-courses">
                    @foreach ($courses as $key => $course)
                        <div class="row item">
                            <div class="col-lg-4 col-md-4 col-sm-7 col-xs-12">
                                <div class="uni-name">
                                    <?php
                                    $explode = explode(', ', $course->name);
                                    $similar = $course->cost;
                                    $course_info = \App\Models\CourseInformation::where('course_id', '=', $course->id)->first();
                                    $course_requi = \App\Models\CourseRequirement::where('course_id', '=', $course->id)->first();
                                    ?>
                                    <a class="course_name" href="/course/{{ $course->slug }}">{{ $explode[0] }}</a>
                                    <div class="classification">{{ $explode[1] }}</div>
                                    <div class="visible-sm visible-xs">
                                        @if($similar)
                                            <span class="inline-block-sm margin-right10-sm">S${{ ($similar->day_drink_fees + $similar->day_food_fees + $similar->day_accommodation_fees + $similar->day_coffe_fees) * 600/1000 + $similar->year_tuition_fees }}
                                                K / year</span>
                                            <span class="inline-block-sm margin-right10-sm">{!! $course_info->duration !!}
                                                years</span>
                                            <span class="inline-block-sm">{{ $course_requi->level }}</span>
                                        @endif
                                    </div>
                                </div><!-- /.uni-name -->
                            </div>

                            <div class="course-stats col-lg-8 col-md-8 col-sm-5 col-xs-12">
                                <div class="pull-right">
                                    @if($similar)
                                        <div class="cell hidden-sm hidden-xs">
                                            <span class="tip display-block" data-toggle="tooltip" title=""
                                                  data-html="true" data-placement="top"
                                                  data-original-title="Tuition fees excluding living expenses">S${{ ($similar->day_drink_fees + $similar->day_food_fees + $similar->day_accommodation_fees + $similar->day_coffe_fees) * 600/1000 + $similar->year_tuition_fees }}
                                                K</span>
                                            <span class="sub-tip display-block">per year</span>
                                        </div>
                                    @endif
                                    <div class="cell hidden-sm hidden-xs">
                                        <span class="tip display-block" data-toggle="tooltip" title="" data-html="true"
                                              data-placement="top"
                                              data-original-title="Chat with us for a free advance standing assessment.">{!! $course_info->duration !!}</span>
                                        <span class="sub-tip display -block">years</span>
                                    </div>

                                    <div class="cell hidden-sm hidden-xs">
										<span rel="a_levels" class="tip display-block" title="" data-toggle="tooltip"
                                              title="" data-html="true" data-placement="top"
                                              data-original-title="Click to toggle between entry requirements for different qualifications">
											{!! $course_requi ? $course_requi->level : '' !!}
										</span>
                                        <span class="sub-tip display-block">grade</span>
                                    </div>

                                    <div class="cell hidden-sm hidden-xs course-progression">
                                        <?php
                                        $pathways = \App\Models\Pathway::where('main_course_slug', '=', $course->slug)->get();
                                        ?>
                                        <div class="see-pathways tip" title="" data-toggle="tooltip" title=""
                                             data-html="true" data-placement="top"
                                             data-original-title="Can't meet the minimum grades? Click to see available pathways to progress into Bangor University.">
                                            <i class="fa fa-arrow-up"></i>
                                            <span class="sub-tip display-block">{{ $pathways->count() }} pathways</span>
                                        </div>
                                    </div>

                                    <div class="cell_1">
                                        <div class="compare" title="Add to compare">
                                            <div class="compare-btn">
                                                <input id="compare_{{ $course->id }}" data-courseid="{{ $course->id }}"
                                                       type="checkbox" class="compare-btn compareCheckbox"
                                                       onclick="compare({{ $course->id }})">
                                                <label id="label_compare_{{ $course->id }}"
                                                       for="compare_{{ $course->id }}"
                                                       class="compare-label btn btn-green">Compare <i
                                                            class="fa fa-check"></i></label>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="cell_1">
                                        <div id="apply_{{ $course->id }}" class="btn btn-green apply-btn"
                                             onclick="apply('{{ $course->id }}', 'add')">
                                            APPLY
                                        </div>
                                        <div id="selected_{{ $course->id }}" class="btn btn-green apply-add-btn hide"
                                             onclick="apply('{{ $course->id }}', 'remove')"
                                             title="Remove from university application?">
                                            ADDED <i class="fa fa-check"></i>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            @if($pathways->count() > 0)
                                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                    <div id="" class="arrow-box">
                                        <div class="tree">
                                            <div class="row">
                                                <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
                                                    <div class="info">
                                                        <h1>Pathway programmes available</h1>
                                                    </div>
                                                </div>
                                                <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12 text-right">
                                                    <div class="info">
                                                        <a class="whichroute"><i class="fa fa-question-circle"
                                                                                 aria-hidden="true"></i> Which pathway
                                                            should I choose?</a>
                                                        <div id="faq-list" class="martop10">
                                                            <ul>
                                                                <li>
                                                                    <a href="/guide/pathways-to-university-what-is-foundation-program"
                                                                       target="_blank">What is Foundation Program?</a>
                                                                </li>
                                                                <li>
                                                                    <a href="/guide/pathways-to-university-what-is-diploma"
                                                                       target="_blank">What is Diploma?</a>
                                                                </li>
                                                                <li>
                                                                    <a class="openchat gtt-chat">Ask an education
                                                                        consultant</a>
                                                                </li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                </div>

                                                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                                    <div class="diagram-svg">
                                                        <div class="list-pathway">
                                                            @foreach($pathways as $pathway)
                                                                <?php
                                                                $pathway_university = \App\Models\University::where('id', '=', $pathway->university_pathway_id)->first();
                                                                $pathway_course = \App\Models\Course::where('slug', '=', $pathway->course_slug)->first();
                                                                $information = $pathway_course->information()->first();
                                                                ?>
                                                                <div class="pathway">
                                                                    <h3>
                                                                        <a href="/university/{{ $pathway_university['slug'] }}">{{ $pathway_university['name'] }}</a>
                                                                    </h3>
                                                                    <p>
                                                                        <a href="/course/{{ $pathway->course_slug }}">{{ $pathway_course['name'] }}</a>
                                                                    </p>
                                                                    @if($information)
                                                                        <p>{{ $information->duration }} months
                                                                            duration</p>
                                                                    @endif
                                                                </div><!-- /.pathway -->
                                                            @endforeach
                                                        </div><!-- /.list-pathway -->

                                                        <div class="university-pathway">
                                                            <img src="/img/THERIGHTU_U.svg">
                                                            <div class="text">
                                                                <h3>
                                                                    <a href="/university/{{ $university['slug']}}">{{ $university['name']}}</a>
                                                                </h3>
                                                                <p>
                                                                    <a href="/course/{{ $course->slug }}">{{ $explode[0] }}</a>
                                                                </p>
                                                                <p>{{ $explode[1] }}</p>
                                                            </div>
                                                        </div><!-- /.university-pathway -->
                                                    </div><!-- /.diagram-svg -->
                                                </div>
                                            </div>
                                        </div>
                                    </div><!-- /.arrow_box -->
                                </div>
                            @endif
                        </div>
                    @endforeach
                </div><!-- /.list-courses -->
            @endif
        </div><!-- /.filter-result -->
    </div>

@endsection
{{--@section('scripts')--}}
@section('scripts')
    <script type="text/javascript">
        function initialize() {
            initMapUniver();
        }

        var map;
        var infowindow;

        function initMapUniver() {
            var pyrmont = {lat:{{ $map_university['lat'] }}, lng:{{ $map_university['lng']}} };

            map = new google.maps.Map(document.getElementById('map-uni'), {
                center: pyrmont,
                zoom: 15,
                gestureHandling: 'greedy'
            });
            var image = {
                url: 'https://developers.google.com/maps/documentation/javascript/examples/full/images/beachflag.png',
                size: new google.maps.Size(20, 32),
                origin: new google.maps.Point(0, 0),
                anchor: new google.maps.Point(0, 32)
            };
            var marker = new google.maps.Marker({
                position: pyrmont,
                map: map,
            });
        }

        function initMapMaker(type) {
            var type = type;
            var pyrmont = {lat: {{ $map_university['lat'] }}, lng: {{ $map_university['lng']}} };
            map = new google.maps.Map(document.getElementById('map-uni'), {
                center: pyrmont,
                zoom: 12,
                gestureHandling: 'greedy',
            });
            infowindow = new google.maps.InfoWindow();
            var service = new google.maps.places.PlacesService(map);
            service.nearbySearch({
                location: pyrmont,
                radius: 2000,
                type: type,
            }, callback);

            function callback(results, status) {
                if (status === google.maps.places.PlacesServiceStatus.OK) {
                    for (var i = 0; i < results.length; i++) {
                        createMarker(results[i]);
                    }
                }
            }

            function createMarker(place) {
                var placeLoc = place.geometry.location;
                var marker = new google.maps.Marker({
                    map: map,
                    position: place.geometry.location
                });

                google.maps.event.addListener(marker, 'click', function () {
                    infowindow.setContent(place.name);
                    infowindow.open(map, this);
                });
            }
        }

        function compare(id) {
            $.ajax({
                url: '{{ route("user.subject.setCookie") }}',
                data: {id: id},
            }).done(function (data) {
                getCourseCount();
                if (data == 1) {
                    toastr.success('Added to comparison');
                    compare_number++;
                } else {
                    toastr.warning('Removed to comparison');
                    $('#compare_' + value + ' i').prop('checked', false);
                    compare_number--;
                }
                return false;
            });
        }

            <?php echo "var apply_course_id = " . $apply_course_id . ";" ?>
        var apply_course_number = apply_course_id.length; // Number of apply course

        $.each(apply_course_id, function (index, value) {
            $('#apply_' + value).addClass('hide');
            $('#selected_' + value).removeClass('hide');
        });

        function apply(id, type) {
            if (type == 'add') {
                $('#apply_' + id).addClass('hide');
                $('#selected_' + id).removeClass('hide');
            } else {
                $('#apply_' + id).removeClass('hide');
                $('#selected_' + id).addClass('hide');
            }

            $.ajax({
                url: "{{ route('user.subject.setCookieApplyCourse') }}",
                data: {id: id},
            }).done(function (data) {
                getCourseCount();
                if (data == 1) {
                    toastr.success('Course Added.');
                    apply_course_number++;
                } else {
                    toastr.warning('Course Unselected');
                    apply_course_number--;
                }
                return false;
            })
        }

        $('.filter-subject').click(function () {
            var slug = $(this).val();
            var _token = $(this).attr('_token');
            var subjname = $(this).attr('subjname');
            $('.filter-result .title-box').text(subjname);
            var university_id = '{{ $university->id }}';
            $.ajax({
                dataType: 'html',
                type: 'POST',
                url: '/course/filter-subject/',
                data: {slug: slug, _token: _token, university_id: university_id},

                success: function (data) {
                    $('.list-courses').html(data);
                }
            });
        });

        function showPathway(item) {
            $(item).parents('.item').find('.arrow-box').slideToggle();
        }
    </script>
@endsection