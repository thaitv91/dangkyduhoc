@extends("layouts/app")

@section('styles')
<link rel="stylesheet" type="text/css" href="{{ asset('css/select2.min.css') }}">
@endsection

@section("content")
    @if (Session::has('error'))
        <div class="alert alert-danger alert-dismissible top-alert">
            <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
            <h4><i class="icon fa fa-warning"></i> {{ Session::get('error') }} </h4>
        </div>
    @endif
    @if (Session::has('success'))
        <div class="alert alert-success alert-dismissible top-alert">
            <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
            <h4><i class="icon fa fa-check"></i> {{ Session::get('success') }}</h4>
        </div>
    @endif
    <input type="hidden" name="_token" value="{{ csrf_token() }}">
    <div class="banner-home" style="background-image:url( {{  $data_field['header-banner'] }})">
        <div class="container">
            <div class="text">
                <h1>{!! $data_field['header-slogan1']!!}</h1>
                <div class="description">
                    {!! $data_field['header-slogan2'] !!}
                </div>
                <div class="btn-mobile visible-sm visible-xs">
                    <button class="btn btn-blue open-getstarted">Get Started</button>
                </div>
            </div>

            <div class="free-assessment hidden-sm hidden-xs">
                <form id="assessment-form">
                    <h2>FREE ASSESSMENT</h2>
                    <div class="step-1" id="assessment-step-1">
                        <div class="description">
                            <p>{{ isset($data_field['assessment-step-1-question']) ? 
                                    $data_field['assessment-step-1-question'] : 
                                    'Bạn đã hoàn thành bậc học nào?'}}</p>
                        </div>
                        <ul>
                            <li>
                                <input type="radio" id="checkbox-1" name="assessment_course_completed" value="{{ $data_field['assessment-step-1-option-1'] }}" checked>
                                <label for="checkbox-1">
                                    {{ isset($data_field['assessment-step-1-option-1']) ? 
                                        $data_field['assessment-step-1-option-1'] : 
                                        'Trung học cơ sở/Cấp II'}}
                                </label>
                            </li>
                            <li>
                                <input type="radio" id="checkbox-2" name="assessment_course_completed" value="{{ $data_field['assessment-step-1-option-2'] }}">
                                <label for="checkbox-2">
                                    {{ isset($data_field['assessment-step-1-option-2']) ? 
                                        $data_field['assessment-step-1-option-2'] :
                                        'Trung học phổ thông/Cấp III' }}
                                </label>
                            </li>
                            <li>
                                <input type="radio" id="checkbox-3" name="assessment_course_completed" value="{{ $data_field['assessment-step-1-option-3'] }}">
                                <label for="checkbox-3">
                                    {{ isset($data_field['assessment-step-1-option-3']) ? 
                                        $data_field['assessment-step-1-option-3'] : 
                                        'Trung cấp/Cao Đẳng' }}
                                </label>
                            </li>
                            <li>
                                <input type="radio" id="checkbox-4" name="assessment_course_completed" value="{{ $data_field['assessment-step-1-option-4'] }}">
                                <label for="checkbox-4">
                                    {{ isset($data_field['assessment-step-1-option-4']) ? 
                                        $data_field['assessment-step-1-option-4'] : 
                                        'Đại học' }}
                                </label>
                            </li>
                            <li>
                                <input type="radio" id="checkbox-5" name="assessment_course_completed" value="{{ $data_field['assessment-step-1-option-5'] }}">
                                <label for="checkbox-5">
                                    {{ isset($data_field['assessment-step-1-option-5']) ?
                                        $data_field['assessment-step-1-option-5'] : 
                                        'Sau đại học' }}
                                </label>
                            </li>
                        </ul>
                    </div><!-- /.step-1 -->

                    <div class="step-2" id="assessment-step-2" style="display: none">
                        <div class="description">
                            <p>
                                {{ isset($data_field['assessment-step-2-content']) ? 
                                    $data_field['assessment-step-2-content'] : 
                                    'Điểm tổng kết Trung bình năm của bạn :' }}
                                <span id="assessment-avg-score"> 5 </span>
                            </p>
                        </div>
                        <input type="range" min="1" max="10" step="0.1" value="5" class="input-range" name="assessment_avg_score" onchange="$('#assessment-avg-score').text(' '+$(this).val());">
                    </div><!-- /.step-2 -->

                    <div class="step-3" id="assessment-step-3" style="display: none;">
                        <div class="description">
                            <p>
                                {{ isset($data_field['assessment-step-3-content']) ? 
                                    $data_field['assessment-step-3-content'] : 
                                    'Ngành học mà bạn quan tâm' }}
                            </p>
                        </div>
                        <select class="form-control" id="assessment-course-interest" name="assessment_course_interest[]" multiple>
                            @foreach ($subjects as $key => $subject)
                            <option value="{{ $subject->name }}">{{ $subject->name }}</option>
                            @endforeach
                        </select>
                    </div><!-- /.step-3 -->

                    <div class="step-4" id="assessment-step-4" style="display: none;">
                        <div class="description">
                            <p>
                                {{ isset($data_field['assessment-step-4-content']) ?
                                    $data_field['assessment-step-4-content'] : 
                                    'Bạn muốn du học nước nào?' }}
                            </p>
                        </div>
                        <ul>
                            @foreach ($countries as $key => $country)
                            <li>
                                <input type="checkbox" id="country-{{ $key+1 }}" checked value="{{ $country->name }}" name="assessment_countries[]">
                                <label for="country-{{ $key+1 }}">{{ $country->name }}</label>
                            </li>
                            @endforeach
                        <ul>
                    </div><!-- /.step-4 -->

                    <div class="step-5" id="assessment-step-5" style="display: none;">
                        <div class="description">
                            <p>
                                {{ isset($data_field['assessment-step-5-content']) ? 
                                    $data_field['assessment-step-5-content'] : 
                                    'Mời bạn điền thông tin cá nhân để chúng tôi tư vấn.' }}
                            </p>
                        </div>
                        <div class="form-group">
                            <input type="text" class="form-control" placeholder="Họ và tên*" required name="assessment_name">
                        </div>
                        <div class="form-group">
                            <input type="text" class="form-control" placeholder="Email*" required name="assessment_email">
                        </div>
                        <div class="form-group">
                            <input type="text" class="form-control" placeholder="Điện thoại" required name="assessment_phone">
                        </div>
                    </div><!-- /.step-5 -->

                    <div class="step-6" id="assessment-step-6" style="display: none;">
                        <div class="description">
                            <?php 
                                echo isset($data_field['assessment-step-6-content']) ? 
                                    $data_field['assessment-step-6-content'] :
                                    '<p>Cảm ơn!</p><p>Chuyên gia du học sẽ liên lạc với bạn trong vòng 24 giờ.</p>';  
                            ?>
                        </div>
                    </div><!-- /.step-5 -->
                    <div class="bottom">
                        <button class="btn btn-green btn-block" onclick="nextStep(this); return false;" data-next-step="2">Next</button>
                    </div>
                </form>
            </div><!-- /.free-assessment -->
        </div>
    </div><!-- /.banner-home -->

    <div class="steps-guide">
        <div class="container">
            <div class="step step-1">
                <div class="step-icon">
                    <div class="icon-box">
                        <div class="icon"><span><i class="sprite-search-white"></i></span></div>
                    </div>
                </div>
                <div class="step-number">
                    {{ trans('home.step') }}
                    <span>01</span>
                </div>
                <div class="step-text">
                    <div class="text-box">
                        {!! $data_field['content-discover'] !!}
                    </div>
                </div>
            </div><!-- /.step -->

            <div class="step step-2">
                <div class="step-icon">
                    <div class="icon-box">
                        <div class="icon"><span><i class="sprite-chart"></i></span></div>
                    </div>
                </div>
                <div class="step-number">
                    {{ trans('home.step') }}
                    <span>02</span>
                </div>
                <div class="step-text">
                    <div class="text-box">
                        {!! $data_field['content-compare'] !!}
                    </div>
                </div>
            </div><!-- /.step -->

            <div class="step step-3">
                <div class="step-icon">
                    <div class="icon-box">
                        <div class="icon"><span><i class="sprite-comment"></i></span></div>
                    </div>
                </div>
                <div class="step-number">
                    {{ trans('home.step') }}
                    <span>03</span>
                </div>
                <div class="step-text">
                    <div class="text-box">
                        {!! $data_field['content-consult'] !!}
                    </div>
                </div>
            </div><!-- /.step -->

            <div class="step step-4">
                <div class="step-icon">
                    <div class="icon-box">
                        <div class="icon"><span><i class="sprite-letter"></i></span></div>
                    </div>
                </div>
                <div class="step-number">
                    {{ trans('home.step') }}
                    <span>04</span>
                </div>
                <div class="step-text">
                    <div class="text-box">
                        {!! $data_field['content-apply'] !!}
                    </div>
                </div>
            </div><!-- /.step -->
        </div>
    </div><!-- /.steps-guide -->

    <div class="blog-home">
        <div class="container">
            <div class="row">
                <div class="col-md-4">
                    <div class="blog-item">
                        <div class="header-blog">
                            <h2 class="title">{!! $data_field['blog-percent'] !!}</h2>
                            <p class="title">{!! $data_field['blog-percent-off'] !!}</p>
                        </div>
                        <div class="description">
                            <p>{!! $data_field['blog-percent-content'] !!}</p>
                        </div>
                        <div class="bottom">
                            <a href="#"
                               class="btn btn-blue btn-block hidden-xs hidden-sm">{{ trans('home.get_started') }}</a>
                            <span class="btn btn-blue btn-block open-getstarted visible-xs visible-sm clickable">{{ trans('home.get_started') }}</span>
                        </div>
                    </div><!-- /.blog-item -->
                </div>

                <div class="col-md-4">
                    <div class="blog-item">
                        <div class="header-blog">
                            <h2 class="title">{!! $data_field['blog-scholarships'] !!}</h2>
                            <p class="title">{!! $data_field['blog-scholarships-title'] !!}</p>
                        </div>
                        <div class="description">
                            <p>{!! $data_field['blog-scholarships-content'] !!}</p>
                        </div>
                        <div class="bottom">
                            <span class="btn btn-blue btn-block open-chat clickable">{{ trans('home.chat_us') }}</span>
                        </div>
                    </div><!-- /.blog-item -->
                </div>

                <div class="col-md-4">
                    <div class="blog-item">
                        <div class="header-blog">
                            <h2 class="title">{!! $data_field['blog-satisfaction'] !!}</h2>
                            <p class="title">{!! $data_field['blog-satisfaction-title'] !!}</p>
                        </div>
                        <div class="description">
                            <p>{!! $data_field['blog-satisfaction-content'] !!}</p>
                        </div>
                        <div class="bottom">
                            <a href="#" class="btn btn-blue btn-block">{{ trans('home.facebook_review') }}</a>
                        </div>
                    </div><!-- /.blog-item -->
                </div>
            </div>
        </div>
    </div><!-- /.blog-home -->

    <div class="reviews">
        <div class="container">
            <div class="slider">
                @foreach($rating as $key => $list)
                    <div class="review-item <?php $class = ($key % 2 == 0) ? 'right' : ''; echo $class; ?>">
                        <div class="avatar-rating">
                            <div class="avatar">
                                <img src="{{ $list['avatar'] }}" alt="">
                            </div>
                            <div class="rating">
                                <?php for ($i = $list['rating']  ; $i--; $i > 0) {?>
                                <i class="fa fa-star"></i>
                                <?php } ?>
                                <?php for ($i = 5 - $list['rating']; $i--; $i > 0) {?>
                                <i class="fa fa-star-o"></i>
                                <?php } ?>
                            </div>
                        </div>
                        <div class="text">
                            @if($locale=='en')
                                {!! $list['content_en'] !!}
                            @else
                                {!! $list['content'] !!}
                            @endif
                        </div>
                    </div><!-- /.review-item -->
                @endforeach
            </div>
        </div>
    </div><!-- /.reviews -->

    <div class="let-started text-center">
        <div class="container">
            <div class="wrap">
                <img src="{{ $data_field['image-right-tools'] }}" alt="">
                <h2 class="title">{!! $data_field['let-started-title'] !!}</h2>
                <div class="description">
                    <p>{!! $data_field['let-started-content'] !!}</p>
                </div>
                <a href="#" class="btn btn-green">{{ trans('home.get_started') }}</a>
            </div>
        </div>
    </div><!-- /.let-started -->
@endsection

@section('scripts')
<script type="text/javascript" src="https://cdn.jsdelivr.net/npm/jquery-validation@1.17.0/dist/jquery.validate.js"></script>
<script type="text/javascript" src="{{ asset('js/select2.min.js') }}"></script>
<script type="text/javascript">
    $('#assessment-course-interest').select2({
        placeholder : "Nhập môn học bạn quan tâm..."
    });

    $('#assessment-form').validate({
        messages: {
            assessment_name : {
                required : 'Tên không được để trống'  
            } ,
            assessment_email : {
                required : 'Email không được để trống',
                email : 'Email không hợp lệ'
            },
            assessment_phone : {
                required : 'Số điện thoại không được để trống'
            }
        }
    });

    function nextStep(button) {
        var next_step = $(button).data('next-step');

        if (next_step == 6) {
            if (!$('#assessment-form').valid()) {
                return false;
            } else {
                $('#assessment-form').submit();
                $(button).remove();
            }
        }

        $(button).data('next-step', next_step + 1);
        $('#assessment-step-'+(next_step - 1)).css('display', 'none');
        $('#assessment-step-'+next_step).css('display', 'block');
    }

    $('#assessment-form').on('submit', function(e) {
        e.preventDefault();
        var data = $('#assessment-form').serialize();
        $('#assessment-form')[0].reset();
        $.ajax({
            url : "{{ route('assessment.store') }}",
            data : data,
        });
    });
</script>
@endsection