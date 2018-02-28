@extends("layouts/app")

@section("scripts")
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
                <h2>FREE ASSESSMENT</h2>
                <div class="step-1">
                    <div class="description">
                        <p>Bạn đã hoàn thành bậc học nào?</p>
                    </div>
                    <ul>
                        <li>
                            <input type="radio" id="checkbox-1">
                            <label for="checkbox-1">Trung học cơ sở/Cấp II</label>
                        </li>
                        <li>
                            <input type="radio" id="checkbox-2">
                            <label for="checkbox-2">Trung học phổ thông/Cấp III</label>
                        </li>
                        <li>
                            <input type="radio" id="checkbox-3">
                            <label for="checkbox-3">Trung cấp/Cao Đẳng</label>
                        </li>
                        <li>
                            <input type="radio" id="checkbox-4">
                            <label for="checkbox-4">Đại học</label>
                        </li>
                        <li>
                            <input type="radio" id="checkbox-5">
                            <label for="checkbox-5">Sau đại học.</label>
                        </li>
                    </ul>
                </div><!-- /.step-1 -->

                <div class="step-2" style="display: none">
                    <div class="description">
                        <p>Điểm tổng kết Trung bình năm của bạn?</p>
                    </div>
                    <input type="range" min="1" max="10" step="0.1" value="5" class="input-range">
                </div><!-- /.step-2 -->

                <div class="step-3" style="display: none;">
                    <div class="description">
                        <p>Ngành học bạn quan tâm?</p>
                    </div>
                    <select class="form-control">
                        <option>Ngành học 1</option>
                        <option>Ngành học 2</option>
                    </select>
                </div><!-- /.step-3 -->

                <div class="step-4" style="display: none;">
                    <div class="description">
                        <p>Bạn muốn du học nước nào?</p>
                    </div>
                    <ul>
                        <li>
                            <input type="checkbox" id="country-1" checked>
                            <label for="country-1">Australia</label>
                        </li>
                        <li>
                            <input type="checkbox" id="country-2" checked>
                            <label for="country-2">Australia</label>
                        </li>
                        <li>
                            <input type="checkbox" id="country-3" checked>
                            <label for="country-3">Australia</label>
                        </li>
                    <ul>
                </div><!-- /.step-4 -->

                <div class="step-5" style="display: none;">
                    <div class="description">
                        <p>Mời bạn điền thông cá nhân để chúng tôi tư vấn?</p>
                    </div>
                    <div class="form-group">
                        <input type="text" class="form-control" placeholder="Họ và tên*" required>
                    </div>
                    <div class="form-group">
                        <input type="text" class="form-control" placeholder="Email*" required>
                    </div>
                    <div class="form-group">
                        <input type="text" class="form-control" placeholder="Điện thoại">
                    </div>
                </div><!-- /.step-5 -->
                <div class="bottom">
                    <button class="btn btn-green btn-block">Next</button>
                </div>
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