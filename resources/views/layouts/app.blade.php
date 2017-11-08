<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>
        @if(isset($title))
            {{ $title }}
        @else
            {{ config('app.name', 'Laravel') }}
        @endif
    </title>
    <!-- Styles -->
    <link href="{{ asset('bootstrap/css/bootstrap.css') }}" rel="stylesheet">
    <link href="{{ asset('css/jquery.circliful.css') }}" rel="stylesheet">
    <link href="{{ asset('css/material-design-iconic-font.css') }}" rel="stylesheet">
    <link href="{{ asset('css/slick.css') }}" rel="stylesheet">
    <link href="{{ asset('css/style.css') }}" rel="stylesheet">
    <link rel="stylesheet" href="//codeorigin.jquery.com/ui/1.10.2/themes/smoothness/jquery-ui.css"/>
    <link rel="stylesheet" type="text/css" href="//cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.css">
    <link rel="stylesheet" type="text/css" href="{{url('css/multi-select/bootstrap-select.css')}}">
    @yield('styles')
    
</head>
<body>
<div id="app">
    <nav class="navbar navbar-default navbar-fixed-top">
        <!-- login, register -->
        <div id="login-partial">
            <div class="container-fluid bgr-gray" id="login_drawer" style="display: none;">
                <div class="container">
                    <div class="row text-center">
                        <div class="login_drawers" id="facebook_login">
                            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                <div class="form-group">
                                    <span class="login-header">hello!</span>
                                </div>
                            </div>
                            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                <div class="form-group">
                                    <button class="login_footer sign-up blue_button create-account-screen"
                                            data-placement="right"
                                            title="New here? Sign up with your email or login using facebook.">REGISTER
                                    </button>
                                </div>
                            </div>
                            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                <div class="form-group">
                                    <form action="/account/ExternalLogin" id="facebookLoginForm" method="post"
                                          name="facebookLoginForm">
                                        <a href="{{ url('/auth/facebook') }}">
                                            <div class="blue_button fb-button" data-placement="right"
                                                 title="Sign in using facebook to skip email verification. Recommended!">
                                                SIGN IN WITH <img alt="Facebook login" class="fb-login"
                                                                  src="https://therightustorage.blob.core.windows.net/assets/img/web/fbsmall.svg">
                                            </div>
                                        </a>
                                    </form>
                                </div>
                            </div>
                            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                <div class="form-group">
                                    <button class="login_footer sign-in-screen blue_button" data-placement="right"
                                            title="Already registered? Sign in with your email.">Sign in by Email
                                    </button>
                                </div>
                            </div>
                            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 hidden-sm hidden-xs">
                                <div class="form-group">
                                    <span style="cursor:default; font-size:14px;" class="tip" data-toggle="tooltip"
                                          title="" data-html="true" data-placement="bottom"
                                          data-original-title="<div class='whysignup'><ul class='reasons'><li>Save course comparisons</li><li>Save your university application progress</li><li>Be notified when you receive a university offer</li><li>Retrieve online consultation history on multiple devices</li></ul></div>">Why register?</span>
                                </div>
                            </div>
                        </div>
                        <div class="row login_drawers" id="email_login" style="display: none;">
                            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                <span class="login-header">Sign in</span>
                            </div>
                            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 martop10 marbot10px">
                                <form action="/login" class="login_form form-inline" id="login_form" method="post"
                                      name="login_form">
                                    {{ csrf_field() }}
                                    <div class="validation-summary-valid" data-valmsg-summary="true">
                                        <ul>
                                            <li style="display:none"></li>
                                        </ul>
                                    </div>
                                    <div class="form-group">
                                        <input class="form-control" id="email" name="email" placeholder="Your email"
                                               type="email" value="">
                                    </div>
                                    <div class="form-group">
                                        <input class="form-control" id="password" name="password"
                                               placeholder="Your password" type="password" value="">
                                    </div>
                                    <button class="btn blue-btn" id="login_button">Sign in</button>
                                </form>
                            </div>
                            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                <a class="login_footer forgot-password-screen" href="#">Forgot password?</a>
                            </div>
                        </div>
                        <div class="row login_drawers" id="create_account" style="display: none;">
                            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                <div class="form-group">
                                    <span class="login-header">Create a free account</span>
                                </div>
                            </div>
                            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 martop10 marbot10px">
                                <form action="/register" method="post" class="register_form form-inline"
                                      name="register_form">
                                    {{ csrf_field() }}
                                    <div class="form-group">
                                        <input class="form-control" id="newEmail" name="email" placeholder="Your email"
                                               type="text" value="">
                                    </div>
                                    <div class="form-group">
                                        <input class="form-control" id="txtPassword" name="password"
                                               placeholder="Your password" type="password" value=""> <input
                                                class="form-control confirm hidden" id="password-confirm"
                                                name="password_confirmation" placeholder="Confirm your password"
                                                type="password" value="">
                                    </div>
                                    <button class="btn blue-btn" id="create_account_button" type="submit">Register
                                    </button>
                                </form>
                            </div>
                            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                <a class="login_footer back-to-login" href="#">Back to Login</a>
                            </div>
                        </div>
                        <div class="login_drawers" id="create_account_success" style="display: none;">
                            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                <div class="form-group">
                                    <span class="login-header">Awesome!</span>
                                </div>
                            </div>
                            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                <div class="form-group">
                                    <span class="login_hello">We have sent an account activation link to your email.</span>
                                </div>
                            </div>
                        </div>
                        <div class="login_drawers col-lg-12 col-centered" id="forgot_password" style="display: none;">
                            <div class="col-lg-12">
                                <span class="login-header">forgot password?</span>
                            </div>
                            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 martop10 marbot10px">
                                <form action="" class="forgot_password_form form-inline" id="forgot_password_form"
                                      method="post" name="forgot_password_form">
                                    <div class="validation-summary-valid" data-valmsg-summary="true">
                                        <ul>
                                            <li style="display:none"></li>
                                        </ul>
                                    </div>
                                    <div class="form-group">
                                        <input class="form-control" name="email" placeholder="Your email" type="text"
                                               value="">
                                    </div>
                                    <button class="btn blue-btn" id="forgot_password_button" type="submit">Reset
                                    </button>
                                </form>
                            </div>
                            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                <a class="login_footer back-to-login" href="#">Back to Login</a>
                            </div>
                        </div>
                    </div>
                </div>
                <a class="login_footer cancel"><i class="fa fa-chevron-up"></i></a>
            </div>

        </div>
        <!-- e: login, register -->

        <div class="container" id="nav-main">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header">
                <button id="hamburgermenu" class="btn navbar-btn lg-navbtn hidden-lg" type="button">
                    <i class="fa fa-bars"></i>
                </button>
                <a class="navbar-brand" href="/"><img src="/img/logo.png" alt="Đăng ký du học"/></a>
            </div>

            <!-- Collect the nav links, forms, and other content for toggling -->
            <ul class="nav navbar-nav navbar-right visible-lg">
                <li class="active"><a href="{{ route('user.guide') }}">Guide</a></li>
                <li class="subjectddl slideddl"><a href="#">Subjects <i class="fa fa-caret-down" aria-hidden="true"></i></a>
                </li>
                <li class="universityddl slideddl"><a href="#">Universities <i class="fa fa-caret-down"
                                                                               aria-hidden="true"></i></a></li>
                <li class="careerddl slideddl"><a href="#">Careers <i class="fa fa-caret-down"
                                                                      aria-hidden="true"></i></a></li>
                <li><a href="{{ route('user.fair') }}">Fair</a></li>
                <li>
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-expanded="true">Contact <i
                                class="fa fa-caret-down" aria-hidden="true"></i></a>
                    <ul class="gtt-get-help dropdown-menu">
                        <li>
                            <span><a class="gtt-chat open-chat" style="display: inline;"><i class="fa fa-comment"
                                                                                            aria-hidden="true"></i>&nbsp;&nbsp;Online Consultation</a></span>
                        </li>
                        <li>
                            <span><a href="mailto:hello@therightu.com" rel="nofollow"><i
                                            class="fa fa-envelope hidden-xs"></i>&nbsp;&nbsp;hello@therightu.com</a></span>
                        </li>
                        <li>
                            <span><a href="tel:+65 6333 1300" rel="nofollow"><i class="fa fa-phone hidden-xs"></i>&nbsp;&nbsp;+65 6333 1300</a></span>
                        </li>
                    </ul>
                </li>
                <li><a href="{{ route('user.course.compare') }}">Compare <span class="top compareInfo badge"
                                                                               id="compare-count"> - </span></a></li>
                <li><a href="{{ route('user.course.apply') }}">Apply <span class="top compareInfo badge"
                                                                           id="apply-count"> - </span></a></li>
                <li class="li-search">
                    <span class="clickable open-search" id="dLabel" type="button" data-toggle="dropdown"
                          aria-haspopup="true" aria-expanded="false"><i class="sprite-search"></i></span>
                    <div class="form" aria-labelledby="dLabel">
                        <input type="text" class="form-control" placeholder="Search...">
                        <button><i class="sprite-search"></i></button>
                    </div><!-- /.form -->
                </li>
                @if(! \Illuminate\Support\Facades\Auth::check())
                    <li class="dropdown">
                        <span class="clickable open-user"><i class="sprite-user"></i></span>
                    </li>
                @else
                    <li class="dropdown dropdown-logged">
                        <span class="clickable user-logged" class="dropdown-toggle" data-toggle="dropdown"
                              aria-expanded="true"><i class="sprite-user"></i></span>
                        <ul class="gtt-get-help dropdown-menu">
                            <li>
                                <a>{{ \Illuminate\Support\Facades\Auth::user()->email }}</a>
                            </li>
                            <li>
                                <a href="{{ route('logout') }}"
                                   onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                                    Log out
                                </a>
                                <form id="logout-form" action="{{ route('logout') }}" method="POST"
                                      style="display: none;">
                                    {{ csrf_field() }}
                                </form>
                            </li>
                        </ul>
                    </li>
                @endif
            </ul>

            <ul class="nav navbar-nav navbar-right hidden-lg">
                <li class="hidden-xs">
                    <form action="/search" class="navbar-form navbar-left" id="header_search_form" method="get"
                          name="header_search_form" role="search">
                        <div class="form-group">
                            <div class="input-group">
                                <input autocomplete="off" autofocus="" class="search form-control ui-autocomplete-input"
                                       id="search" name="q" placeholder="Find courses"
                                       title="Search foundation, undergraduate and postgraduate courses and FAQ"
                                       type="search"> <span class="input-group-addon search-btn hide-mobile"
                                                            title="Search"><span
                                            class="glyphicon glyphicon-search"></span></span>
                            </div>
                        </div>
                    </form>
                </li>
                <li class="visible-xs">
                    <span class="open-getstarted clickable"><i class="glyphicon glyphicon-search"></i></span>
                </li>
            </ul>
        </div><!-- /.container -->

        <div id="slide-panel" class="sub-menu">
            <div id="closeSubNav" class="hidden-lg"><img alt="Cancel" src="/img/cancel.svg"></div>
            <div class="slide-section" id="subject">
                <div class="container">
                    <h1 class="text-center">See Courses by subject</h1>
                    @include('layouts.subject')
                </div>
            </div><!-- /.slide-section -->

            <div class="slide-section" id="university">
                @include('layouts.menu_university')
            </div><!-- /.slide-section -->


            <div class="slide-section" id="career">
                <div class="container">
                    <h1 class="text-center">See Courses by career</h1>
                    <div class="row">
                        <div class="col-lg-3 col-md-3 col-sm-3 col-xs-3">
                            <h3>My frequently visited</h3>
                            @php
                                $frequent_visited_career_ids = Cookie::get('frequent_visited_career_ids',json_encode([]));
                            @endphp
                            @foreach (json_decode($frequent_visited_career_ids) as $value)
                                @php
                                    $frequent_visited_career = App\Models\Career::where('id', $value)->get(['name', 'slug'])->first();
                                @endphp
                                <a href="{{ route('user.career.detail', $frequent_visited_career->slug) }}">{{ $frequent_visited_career->name }}</a>
                            @endforeach
                            <div class="recent-uni-spacer"></div>
                            <?php
                            $carrers = App\Models\Career::all();
                            $count = $carrers->count() + 5;
                            $one_col = round($count / 4) + 1;
                            $i = 0;
                            ?>
                            @foreach($carrers as $carrer)
                                <?php $i++; ?>
                                @if( $i <= $one_col - 5)
                                    <a href="{{ route('user.career.detail', $carrer->slug) }}">{{ $carrer->name }}</a>
                                @endif

                                @if( $i == $one_col - 5)
                        </div>
                        <div class="col-lg-3 col-md-3 col-sm-3 col-xs-3">
                            @endif

                            @if($i > $one_col - 5 && $i <= (2 * $one_col) - 5)
                                <a href="{{ route('user.career.detail', $carrer->slug) }}">{{ $carrer->name }}</a>
                            @endif

                            @if( $i == (2 * $one_col) - 5)
                        </div>
                        <div class="col-lg-3 col-md-3 col-sm-3 col-xs-3">
                            @endif

                            @if($i > (2 * $one_col) - 5 && $i <= (3 * $one_col) - 5)
                                <a href="{{ route('user.career.detail', $carrer->slug) }}">{{ $carrer->name }}</a>
                            @endif
                            @if( $i == (3 *$one_col) - 5)
                        </div>
                        <div class="col-lg-3 col-md-3 col-sm-3 col-xs-3">
                            @endif
                            @if($i > (3 * $one_col) - 5 && $i <= $count)
                                <a href="{{ route('user.career.detail', $carrer->slug) }}">{{ $carrer->name }}</a>
                            @endif

                            @endforeach
                        </div>
                    </div>
                </div>
            </div><!-- /.slide-section -->


            <div class="closepane visible-lg" title="Click or scroll to hide">
                <i class="fa fa-chevron-up"></i>
            </div>
        </div><!-- /.sub-menu -->

        <div id="right-nav" class="hidden-lg">
            <div id="right-nav-container">
                <div id="closeRightNav">
                    <img src="/img/cancel.svg">
                </div>
                <ul>
                    <li class="navlink lookingfor marbot10px">I want to...</li>
                    <li class="navlink">
                        <a class="right-nav-search">
                            <i class="fa fa-search" aria-hidden="true"></i> <span>Find courses</span>
                        </a>
                    </li>
                    <li class="navlink">
                        <a class="gtt-assessment">
                            <i class="fa fa-pencil" aria-hidden="true"></i> <span>Take education assessment</span>
                        </a>
                    </li>
                    <li class="navlink">
                        <a class="openchat">
                            <i class="fa fa-commenting-o" aria-hidden="true"></i> <span>Ask a question</span>
                        </a>
                    </li>

                    <li class="navlink">
                        <a href="/apply">
                            <i class="fa fa-paper-plane" aria-hidden="true"></i> <span>Apply to university</span>
                        </a>
                    </li>
                    <li class="navlink">
                        <a href="/guide">
                            <i class="fa fa-book" aria-hidden="true"></i> <span>Browse university guide</span>
                        </a>
                    </li>
                    <li class="navlink">
                        <a href="/fair">
                            <i class="fa fa-map-marker" aria-hidden="true"></i> <span>Attend a fair</span>
                        </a>
                    </li>
                </ul>
            </div>
        </div><!-- /.right-nav -->

        <div id="left-nav" class="hidden-lg">
            <div id="left-nav-container">
                <div id="closeLeftNav"><img alt="Cancel" src="/img/cancel.svg"></div>
                <ul>
                    <li class="navlink">
                        <a href="/" rel="nofollow"><span>Home</span></a>
                    </li>
                    <li class="navlink">
                        <a href="/guide"><span>Guide</span></a>
                    </li>
                    <li class="uni-dropdown universityddl slideddl visible-sm visible-xs navlink">
                        <a><span>Universities</span></a>
                    </li>
                    <li class="subjects-dropdown subjectddl slideddl visible-sm visible-xs navlink">
                        <a><span>Subjects</span></a>
                    </li>
                    <li class="careerddl slideddl navlink visible-lg visible-md">
                        <a><span>Careers</span></a>
                    </li>
                    <li class="careers-dropdown visible-sm visible-xs navlink">
                        <a><span>Careers</span></a>
                    </li>
                    <li class="navlink">
                        <a href="/fair" rel="nofollow">Fair</a>
                    </li>
                    <li>
                        <div class="divider"></div>
                    </li>
                    <li class="navlink">
                        <a class="compareddl"><span>Compare <span class="compareInfo badge">15</span></span></a>
                    </li>
                    <li class="navlink headerApply">
                        <a class="multiapplyddl" href="/apply" rel="nofollow"><span>Apply <span
                                        class="multiapplyInfo badge">3</span></span></a>
                    </li>
                    <li>
                        <div class="divider"></div>
                    </li>
                    <li class="navlink">
                        <a onclick="javascript: scrollTo_Normal('contact_partial'); CloseLeftNav();">Contact</a>
                    </li>
                    <li class="navlink">
                        <a href="/about" rel="nofollow"><span>About us</span></a>
                    </li>
                    <li class="navlink">
                        <a class="open-user">Sign in</a>
                    </li>
                </ul>
            </div>
        </div><!-- /#left-nav -->
    </nav>
@yield('content')

@include('layouts.footer')

<!-- chat with us -->
    <div id="chatButton" class="chatButton tip bounce open-chat" title="" data-placement="left" style="display: block;"
         data-original-title="Need the right advice? We're available to help!">
        <div class="textDiv">
            <div class="chatlogo">
                <i class="fa fa-comment gtt-chat" aria-hidden="true" data-placement="left"
                   alt="Do you have questions? Our education consultants are available to help." data-original-title=""
                   title=""></i>
            </div>
        </div>
    </div><!-- /#chatButton -->

    <div class="chatContainer">
        <div class="header connected" id="chatheader">
            <center>
                <img alt="Education consultant is online" class="consultant-img tip"
                     data-original-title="You are now receiving support from Michelle of theRightU. You may also email us your questions to hello@therightu.com"
                     data-placement="bottom"
                     src="https://therightustorage.blob.core.windows.net/assets/img/web/team/MN.jpg"
                     title="You are now receiving support from Michelle of theRightU. You may also email us your questions to hello@therightu.com">
            </center>
            <div class="loader" id="loader" style="display: none;"></div>
        </div>
        <div class="closeBtn" title="Minimise chat window">
            <i class="fa fa-angle-right"></i>
        </div>
        <div class="divChat" id="divChat" style="display: block;">
            <div class="divNoExist" id="divNoExist" style="display:none;">
                <span id="info"></span>
            </div>
            <div class="chatArea">
                <div class="messageArea" id="divMessage">
                    <div class="innerArea ps-container" data-ps-id="62c389ed-9734-8530-9bfc-aa2b41611964"
                         id="innerArea">
                        <div id="loadMore" onclick="javascript: LoadEarlier();" style="display: none;">
                            Show earlier conversations
                        </div>

                        <div class="clearBoth"></div>
                        <div class="chatrow AdminUser GreetMsg theRightU" title="Sent on 29 Sep 10:40am">
                            <div class="clearBoth"></div>
                            <div class="chatinfo fullwidth">
                                <div class="float-left">
                                    Dr Chan Khai Leok
                                </div>
                            </div>
                            <div class="chatMsg" data-timesent="29 Sep 10:40am">
                                Good morning! How can we help you?
                            </div>
                        </div>
                        <div class="clearBoth"></div>
                        <div class="chatrow User" title="Sent on 29 Sep 2:38pm">
                            <div class="clearBoth"></div>
                            <div class="chatMsg" data-timesent="29 Sep 2:38pm">hello
                            </div>
                        </div>
                        <div class="clearBoth"></div>


                        <div class="chatrow AdminUser" title="Sent on 29 Sep 2:38pm">
                            <div class="clearBoth"></div>
                            <div class="chatinfo fullwidth">
                                <div class="float-left">Kevin</div>
                            </div>
                            <div class="chatMsg" data-timesent="29 Sep 2:38pm">Hi, how may we address you?</div>
                        </div>
                        <div class="clearBoth"></div>

                        <div class="chatrow AdminUser" id="typing">
                            <div class="clearBoth"></div>
                            <div class="chatMsg loading"></div>
                        </div>
                        <div class="ps-scrollbar-x-rail" style="left: 0px; bottom: 3px;">
                            <div class="ps-scrollbar-x" style="left: 0px; width: 0px;"></div>
                        </div>
                        <div class="ps-scrollbar-y-rail" style="top: 0px; right: 3px;">
                            <div class="ps-scrollbar-y" style="top: 0px; height: 0px;"></div>
                        </div>
                    </div>
                </div>
                <div class="clearBoth"></div>
                <div class="chatInput">
                    <textarea cols="30" id="txtMsg" maxlength="1000"
                              placeholder=" &nbsp;Ask your education consultant a question." rows="4"
                              style="font-family:'Lato', FontAwesome"></textarea> <input id="btnSendMsg" type="button"
                                                                                         value="Send">
                </div>
            </div>
        </div>
    </div><!-- /.chatContainer -->
    <!-- e: chat with us -->
</div>

<!-- Scripts -->
{{-- <script src="{{ asset('js/app.js') }}"></script> --}}
<script type="text/javascript" src="//ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>

<script type="text/javascript" src="//codeorigin.jquery.com/ui/1.10.2/jquery-ui.min.js"></script>
<script src="{{ asset('js/slick.js') }}"></script>
<script src="{{ asset('js/jquery.smooth-scroll.js') }}"></script>
<!-- <script src="{{ asset('js/jquery.circliful.js') }}"></script> -->
<script src="{{ asset('js/compare.js') }}"></script>
<script src="{{ asset('js/jquery.donutchart.js') }}"></script>
<script src="{{ asset('js/custom.js') }}"></script>
<script type="text/javascript" src="{{url('js/lang.js')}} "></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"
        integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa"
        crossorigin="anonymous"></script>
<script type="text/javascript" src="//cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.js"></script>
<script src="{{ asset('js/dropzonescripts.js') }}"></script>
<script src="{{ asset('js/bootstrap-datepicker.min.js') }}"></script>
<script src="{{url('js/multi-select/bootstrap-select.js')}}" type="text/javascript"></script>
<script type="text/javascript">
    @if ( Session::has('success'))
    toastr.success('{{ session('success')}}');
    @endif
    @if ( Session::has('error'))
    toastr.error('{{ session('error')}}');
    @endif
    function initialize() {
        initMap();
        //initMapUniver();
    }

    function initMap() {
        var map = new google.maps.Map(document.getElementById('map'), {
            zoom: 13,
            center: {lat: {{ $footer_lat }}, lng: {{ $footer_long }} },
            gestureHandling: 'greedy'
        });

        setMarkers(map);
    }

    var stations = [];

            @foreach ($footer_location as $location)
    var temp = [];
    temp.push("{{ $location[0] }}");
    temp.push({{$location[1]}});
    temp.push({{$location[2]}});
    temp.push({{$location[3]}});
    stations.push(temp);

    @endforeach


    function setMarkers(map) {
        var image = {
            url: 'https://developers.google.com/maps/documentation/javascript/examples/full/images/beachflag.png',
            size: new google.maps.Size(20, 32),
            origin: new google.maps.Point(0, 0),
            anchor: new google.maps.Point(0, 32)
        };
        for (var i = 0; i < stations.length; i++) {
            var station = stations[i];
            var features = [
                {
                    position: new google.maps.LatLng(station[1], station[2]),
                },
            ];
            features.forEach(function (feature) {
                var marker = new google.maps.Marker({
                    position: feature.position,
                    map: map,
                });
                var infowindow = new google.maps.InfoWindow({
                    content: station[0],
                });
                google.maps.event.addListener(marker, 'click', (function (marker, i) {
                    return function () {
                        infowindow.setContent(stations[i][0]);
                        infowindow.open(map, marker);
                    }
                })(marker, i));
            });
        }

    }

    function getCourseCount() {
        $.ajax({
            url: "{{ route('getCourseCount') }}",
        }).done(function (data) {
            console.log(data);
            $('#compare-count').text(data.compare_count);
            $('#apply-count').text(data.apply_count);
        });
    }

    getCourseCount();
</script>
<script async defer
        src="https://maps.googleapis.com/maps/api/js?key=AIzaSyB0mK4AeH9grAllE4tl8Mm6IbM_yPIF0lg&libraries=places&callback=initialize">
</script>
@yield('scripts')
</body>
<script type="text/javascript">
    $('#subject a').on('click', function (e) {
        e.preventDefault();
        var url = $(this).attr('href');
        var slug = url.split('/');
        slug = slug[slug.length - 1];

        $.ajax({
            url: "{{ route('user.subject.setCookieFrequentlyVisitedSubjectIds') }}",
            data: {subject_slug: slug}
        }).done(function () {
            $(location).attr('href', url)
        });
    });

    $('#university a').on('click', function (e) {
        e.preventDefault();
        var url = $(this).attr('href');
        var slug = url.split('/');
        slug = slug[slug.length - 1];

        $.ajax({
            url: "{{ route('user.university.setCookieFrequentlyVisitedUniversityIds') }}",
            data: {university_slug: slug}
        }).done(function () {
            $(location).attr('href', url)
        });
    });

    $('#career a').on('click', function (e) {
        e.preventDefault();
        var url = $(this).attr('href');
        var slug = url.split('/');
        slug = slug[slug.length - 1];

        $.ajax({
            url: "{{ route('user.career.setCookieFrequentlyVisitedCareerIds') }}",
            data: {career_slug: slug}
        }).done(function () {
            $(location).attr('href', url)
        });
    });
</script>
@yield('scripts')
</html>
