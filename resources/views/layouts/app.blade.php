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
    <link rel="stylesheet" href="//codeorigin.jquery.com/ui/1.10.2/themes/smoothness/jquery-ui.css" />
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
                                        <button class="login_footer sign-up blue_button create-account-screen" data-placement="right" title="New here? Sign up with your email or login using facebook.">REGISTER</button>
                                    </div>
                                </div>
                                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                    <div class="form-group">
                                        <form action="/account/ExternalLogin" id="facebookLoginForm" method="post" name="facebookLoginForm">
                                            <a href="#">
                                            <div class="blue_button fb-button" data-placement="right" title="Sign in using facebook to skip email verification. Recommended!">SIGN IN WITH <img alt="Facebook login" class="fb-login" src="https://therightustorage.blob.core.windows.net/assets/img/web/fbsmall.svg"></div>
                                            </a>
                                        </form>
                                    </div>
                                </div>
                                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                    <div class="form-group">
                                        <button class="login_footer sign-in-screen blue_button" data-placement="right" title="Already registered? Sign in with your email.">Sign in by Email</button>
                                    </div>
                                </div>
                                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 hidden-sm hidden-xs">
                                    <div class="form-group">
                                        <span style="cursor:default; font-size:14px;" class="tip" data-toggle="tooltip" title="" data-html="true" data-placement="bottom" data-original-title="<div class='whysignup'><ul class='reasons'><li>Save course comparisons</li><li>Save your university application progress</li><li>Be notified when you receive a university offer</li><li>Retrieve online consultation history on multiple devices</li></ul></div>">Why register?</span>
                                    </div>
                                </div>
                            </div>
                            <div class="row login_drawers" id="email_login" style="display: none;">
                                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                    <span class="login-header">Sign in</span>
                                </div>
                                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 martop10 marbot10px">
                                    <form action="" class="login_form form-inline" id="login_form" method="post" name="login_form">
                                        <div class="validation-summary-valid" data-valmsg-summary="true">
                                            <ul>
                                                <li style="display:none"></li>
                                            </ul>
                                        </div>
                                        <div class="form-group">
                                            <input class="form-control" id="Email" name="Email" placeholder="Your email" type="text" value="">
                                        </div>
                                        <div class="form-group">
                                            <input class="form-control" id="Password" name="password" placeholder="Your password" type="password" value="">
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
                                    <form action="" class="register_form form-inline" name="register_form">
                                        <div class="form-group">
                                            <input class="form-control" id="newEmail" name="email" placeholder="Your email" type="text" value="">
                                        </div>
                                        <div class="form-group">
                                            <input class="form-control" id="txtPassword" name="password" placeholder="Your password" type="password" value=""> <input class="form-control confirm hidden" id="txtConfirmPassword" name="confirmPassword" placeholder="Confirm your password" type="password" value="">
                                        </div>
                                        <button class="btn blue-btn" id="create_account_button" type="submit">Register</button>
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
                                    <form action="" class="forgot_password_form form-inline" id="forgot_password_form" method="post" name="forgot_password_form">
                                        <div class="validation-summary-valid" data-valmsg-summary="true">
                                            <ul>
                                                <li style="display:none"></li>
                                            </ul>
                                        </div>
                                        <div class="form-group">
                                            <input class="form-control" name="email" placeholder="Your email" type="text" value="">
                                        </div>
                                        <button class="btn blue-btn" id="forgot_password_button" type="submit">Reset</button>
                                    </form>
                                </div>
                                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                    <a class="login_footer back-to-login" href="#">Back to Login</a>
                                </div>
                            </div>
                        </div>
                    </div><a class="login_footer cancel"><i class="fa fa-chevron-up"></i></a>
                </div>

            </div>
            <!-- e: login, register -->

          <div class="container" id="nav-main">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header">
                <button id="hamburgermenu" class="btn navbar-btn lg-navbtn hidden-lg" type="button">
                    <i class="fa fa-bars"></i>
                </button>
                <a class="navbar-brand" href="/"><img src="/img/logo.png" alt="Đăng ký du học" /></a>
            </div>

            <!-- Collect the nav links, forms, and other content for toggling -->
              <ul class="nav navbar-nav navbar-right visible-lg">
                <li class="active"><a href="{{ route('user.guide') }}">Guide</a></li>
                <li class="subjectddl slideddl"><a href="#">Subjects <i class="fa fa-caret-down" aria-hidden="true"></i></a></li>
                <li class="universityddl slideddl"><a href="#">Universities <i class="fa fa-caret-down" aria-hidden="true"></i></a></li>
                <li class="careerddl slideddl"><a href="#">Careers <i class="fa fa-caret-down" aria-hidden="true"></i></a></li>
                <li><a href="#">Fair</a></li>
                <li>
                    <a href="#"  class="dropdown-toggle" data-toggle="dropdown" aria-expanded="true">Contact <i class="fa fa-caret-down" aria-hidden="true"></i></a>
                    <ul class="gtt-get-help dropdown-menu">
                        <li>
                            <span><a class="gtt-chat openchat" style="display: inline;"><i class="fa fa-comment" aria-hidden="true"></i>&nbsp;&nbsp;Online Consultation</a></span>
                        </li>
                        <li>
                            <span><a href="mailto:hello@therightu.com" rel="nofollow"><i class="fa fa-envelope hidden-xs"></i>&nbsp;&nbsp;hello@therightu.com</a></span>
                        </li>
                        <li>
                            <span><a href="tel:+65 6333 1300" rel="nofollow"><i class="fa fa-phone hidden-xs"></i>&nbsp;&nbsp;+65 6333 1300</a></span>
                        </li>
                    </ul>
                </li>
                <li><a href="#">Compare <span class="top compareInfo badge">15</span></a></li>
                <li><a href="#">Apply <span class="top compareInfo badge">15</span></a></li>
                <li class="li-search">
                    <span class="clickable open-search" id="dLabel" type="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><i class="sprite-search"></i></span>
                    <div class="form" aria-labelledby="dLabel">
                        <input type="text" class="form-control" placeholder="Search...">
                        <button><i class="sprite-search"></i></button>
                    </div><!-- /.form -->
                </li>
                <li class="dropdown">
                    <span class="clickable open-user"><i class="sprite-user"></i></span>
                </li>
              </ul>

              <ul class="nav navbar-nav navbar-right hidden-lg">
                  <li class="hidden-xs">
                    <form action="/search" class="navbar-form navbar-left" id="header_search_form" method="get" name="header_search_form" role="search">
                        <div class="form-group">
                            <div class="input-group">
                                <input autocomplete="off" autofocus="" class="search form-control ui-autocomplete-input" id="search" name="q" placeholder="Find courses" title="Search foundation, undergraduate and postgraduate courses and FAQ" type="search"> <span class="input-group-addon search-btn hide-mobile" title="Search"><span class="glyphicon glyphicon-search"></span></span>
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
                            <a href="#">Career 1</a>
                            <a href="#">Career 2</a>
                            <a href="#">Career 3</a>
                            <div class="recent-uni-spacer"></div>
                            <?php
                            $carrers = App\Models\Career::all();
                            $count = $carrers->count() + 5;
                            $one_col = round($count /4) + 1;
                            $i = 0;
                            ?>
                            @foreach($carrers as $carrer)
                                <?php $i++; ?>
                                @if( $i <= $one_col - 5)
                                    <a href="{{ route('user.career.detail', $carrer->slug) }}">{{ $carrer->name }}</a>
                                @endif

                                @if( $i == $one_col - 5)
                        </div><div class="col-lg-3 col-md-3 col-sm-3 col-xs-3">
                            @endif

                            @if($i > $one_col - 5 && $i <= (2 * $one_col) - 5)
                                <a href="{{ route('user.career.detail', $carrer->slug) }}">{{ $carrer->name }}</a>
                            @endif

                            @if( $i == (2 * $one_col) - 5)
                        </div><div class="col-lg-3 col-md-3 col-sm-3 col-xs-3">
                            @endif

                            @if($i > (2 * $one_col) - 5 && $i <= (3 * $one_col) - 5)
                                <a href="{{ route('user.career.detail', $carrer->slug) }}">{{ $carrer->name }}</a>
                            @endif
                            @if( $i == (3 *$one_col) - 5)
                        </div><div class="col-lg-3 col-md-3 col-sm-3 col-xs-3">
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
                    <li class="uniddl slideddl navlink visible-lg visible-md">
                        <a><span>Universities</span></a>
                    </li>
                    <li class="uni-dropdown visible-sm visible-xs navlink">
                        <a><span>Universities</span></a>
                    </li>
                    <li class="subjectddl slideddl navlink visible-lg visible-md">
                        <a><span>Subjects</span></a>
                    </li>
                    <li class="subjects-dropdown visible-sm visible-xs navlink">
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
                        <a class="multiapplyddl" href="/apply" rel="nofollow"><span>Apply <span class="multiapplyInfo badge">3</span></span></a>
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

</div>

<!-- Scripts -->
{{-- <script src="{{ asset('js/app.js') }}"></script> --}}
<script type="text/javascript" src="//ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
<script src="{{ asset('js/slick.js') }}"></script>
<script src="{{ asset('js/jquery.smooth-scroll.js') }}"></script>
<script src="{{ asset('js/custom.js') }}"></script>
<script type="text/javascript" src="{{url('js/lang.js')}} "></script>
    @yield('scripts')
</body>
</html>

