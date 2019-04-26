<?php foreach ($courses as $key => $course): ?>
<?php
$university = \App\Models\University::where('id', '=', $course->university_id)->first();
?>
<div class="row item similar-item">
        <div class="uni-logo-col col-lg-1 col-md-1 col-sm-2 col-xs-3 col-no-pad-right">
            <div class="uni-logo">
                @if (count($university->logo)>0 && $university->logo != '')
                <img src="/{{ $university->logo }}" alt=""/>
                @else
                <img src="/img/B085_bathspa_logo.jpg" alt=""/>
                @endif
            </div>
        </div>
        <div class="col-lg-11 col-md-11 col-sm-10 col-xs-9">
            <div class="row">
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
                        <div class="uni-name-sec">
                            <a class="university_name"
                               href="/university/{{ $course->university->slug }}">{{ $course->university->name }}</a>
                        </div>
                        <div class="visible-sm visible-xs">
                            <span class="inline-block-sm margin-right10-sm">{{ $course->yearTuitionFee() }}
                                triệu / năm</span>
                            <span class="inline-block-sm margin-right10-sm">{!! $course_info->duration !!}
                                years</span>
                            <span class="inline-block-sm">{{ $course_requi->level }}</span>
                        </div>
                    </div><!-- /.uni-name -->
                </div>

                <div class="course-stats col-lg-8 col-md-8 col-sm-5 col-xs-12">
                    <div class="pull-right">
                        <div class="cell hidden-sm hidden-xs">
                            <span class="tip display-block" data-toggle="tooltip" title=""
                                  data-html="true" data-placement="top"
                                  data-original-title="Tuition fees excluding living expenses">{{ $course->yearTuitionFee() }}
                                triệu</span>
                            <span class="sub-tip display-block">/ năm</span>
                        </div>

                        <div class="cell hidden-sm hidden-xs">
                            <span class="tip display-block" data-toggle="tooltip" title=""
                                  data-html="true" data-placement="top"
                                  data-original-title="Chat with us for a free advance standing assessment.">{!! $course_info->duration !!}</span>
                            <span class="sub-tip display-block">years</span>
                        </div>

                        <div class="cell hidden-sm hidden-xs">
                             <span rel="a_levels" class="tip display-block" title=""
                                   data-toggle="tooltip" title="" data-html="true" data-placement="top"
                                   data-original-title="Click to toggle between entry requirements for different qualifications">
                                {{ $course_requi->level }}
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
                                <i class="fa fa-arrow-up" onclick="showPathway(this)"></i>
                                <span class="sub-tip display-block">{{ $pathways->count() }}
                                    pathways</span>
                            </div>
                        </div>

                        <div class="cell_1">
                            <div class="compare" title="Add to compare">
                                <div class="compare-btn">
                                    <input id="compare_{{ $course->id }}"
                                           data-courseid="{{ $course->id }}" type="checkbox"
                                           class="compare-btn compareCheckbox"
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
                            <div id="selected_{{ $course->id }}"
                                 class="btn btn-green apply-add-btn hide"
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
                                                                     aria-hidden="true"></i> Which
                                                pathway should I choose?</a>
                                            <div id="faq-list" class="martop10">
                                                <ul>
                                                    <li>
                                                        <a href="/guide/pathways-to-university-what-is-foundation-program"
                                                           target="_blank">What is Foundation
                                                            Program?</a>
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
        </div>
</div><!-- /.item -->
<?php endforeach ?>