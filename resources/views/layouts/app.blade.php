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
                            <span><a class="gtt-chat open-chat" style="display: inline;"><i class="fa fa-comment" aria-hidden="true"></i>&nbsp;&nbsp;Online Consultation</a></span>
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
        <div id="slide-panel" class="sub-menu">
            <div class="slide-section" id="subject">
                <div class="container">
                    <h1 class="text-center">See Courses by subject</h1>
                    @include('layouts.subject')
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
                    <li class="careers-dropdown careerddl slideddl visible-sm visible-xs navlink">
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


        <!-- footer -->
        <div class="container">
            <div class="contact-home" id="ask-us-a-question">
                <div class="row">
                    <div class="col-md-3 col-sm-6 col">
                        <div class="university-guide">
                            <h3 class="title">UNIVERSITY GUIDE</h3>
                            <ul>
                                <li>Choosing a university
                                <li>Applying to university</li>
                                <li>Accepting your offer</li>
                                <li>Finances &amp; Scholarships</li>
                                <li>Flight &amp; Accomodation</li>
                                <li>Student visa</li>
                            </ul>
                        </div><!-- /.university-guide -->
                    </div>

                    <div class="col-md-4 col-sm-6 col">
                        <div class="form-contact">
                            <h3 class="title">HAVE US CONTACT YOU</h3>
                            <div class="form-group">
                                <input class="form-control" type="text" placeholder="Name">
                            </div>
                            <div class="form-group">
                                <input class="form-control" type="text" placeholder="Email">
                            </div>
                            <div class="form-group">
                                <input class="form-control" type="text" placeholder="WhatsApp">
                            </div>
                            <div class="form-group">
                                <textarea class="form-control">Your questions for our education consultans</textarea>
                            </div>
                            <div class="bottom"><button class="btn btn-green btn-block">Contact me</button></div>
                        </div><!-- /.form-contact -->
                    </div>

                    <div class="col-md-5 col-sm-12 col">
                        <div class="maps">
                            <h3 class="title">MEET US</h3>
                            <div class="img">
                                <img src="/img/map.jpg" alt="">
                            </div>
                            <div class="info">
                                <p>Monday to Friday: <strong>10am - 8pm</strong></p>
                                <p>Saturday: <strong>10am - 1pm</strong></p>
                            </div>
                        </div><!-- /.maps -->
                    </div>
                </div>
            </div><!-- /.contact-home -->
        </div>
        <footer>
            <div class="container text-center footer-top">
                <p>
                    <strong>VIETNAM:</strong> Floor 15, TNR Tower, 115 Tran Hung Dao, Hoan Kiem, Ha Noi<br/>
                    <strong>AUSTRALIA：</strong> Shop 8, Esplanade Busport, Perth 6000<br/>
                    <strong>SINGAPORE：</strong> #12-05/06 Park Mall, 9 Penang Road, Singapore 238459<br/>
                    <strong>JAKARTA：</strong> Ruko Financial Center BA2 No 54 Gading Serpong, Tangerang 15810
                </p>
                <div class="social">
                    <a href="#"><i class="sprite-facebook"></i></a>
                    <a href="#"><i class="sprite-google-plus"></i></a>
                    <a href="#"><i class="sprite-twitter"></i></a>
                    <a href="#"><i class="sprite-youtube"></i></a>
                </div><!-- /.social -->
            </div><!-- /.footer-top -->

            <div class="footer-bottom text-center">
                <div class="container">
                    Copyright 2017 JACK Study Abroad Vietnam. 
                </div>
            </div><!-- /.footer-bottom -->
        </footer>
        <!-- e: footer -->
    </div>


    <!-- chat with us -->
    <div id="chatButton" class="chatButton tip bounce open-chat" title="" data-placement="left" style="display: block;" data-original-title="Need the right advice? We're available to help!">
        <div class="textDiv">
            <div class="chatlogo">
                <i class="fa fa-comment gtt-chat" aria-hidden="true" data-placement="left" alt="Do you have questions? Our education consultants are available to help." data-original-title="" title=""></i>
            </div>
        </div>
    </div><!-- /#chatButton -->

    <div class="chatContainer">
        <div class="header connected" id="chatheader">
            <center>
                <img alt="Education consultant is online" class="consultant-img tip" data-original-title="You are now receiving support from Michelle of theRightU. You may also email us your questions to hello@therightu.com" data-placement="bottom" src="https://therightustorage.blob.core.windows.net/assets/img/web/team/MN.jpg" title="You are now receiving support from Michelle of theRightU. You may also email us your questions to hello@therightu.com">
            </center>
            <div class="loader" id="loader" style="display: none;"></div>
        </div>
        <div class="closeBtn" onclick="javascript: closeChat();" title="Minimise chat window">
            <i class="fa fa-angle-right"></i>
        </div>
        <div class="divChat" id="divChat" style="display: block;">
            <div class="divNoExist" id="divNoExist" style="display:none;">
                <span id="info"></span>
            </div>
            <div class="chatArea">
                <div class="messageArea" id="divMessage">
                    <div class="innerArea ps-container" data-ps-id="62c389ed-9734-8530-9bfc-aa2b41611964" id="innerArea">
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
                        <div class="chatrow User" title="Sent on 29 Sep 2:38pm"><div class="clearBoth"></div><div class="chatMsg" data-timesent="29 Sep 2:38pm">hello
                        </div></div>
                        <div class="clearBoth"></div>

                        <div class="chatrow AdminUser" title="Sent on 29 Sep 2:38pm"><div class="clearBoth"></div><div class="chatinfo fullwidth"><div class="float-left">Kevin</div></div><div class="chatMsg" data-timesent="29 Sep 2:38pm">Hi, how may we address you?</div></div>
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
                    <textarea cols="30" id="txtMsg" maxlength="1000" placeholder=" &nbsp;Ask your education consultant a question." rows="4" style="font-family:'Lato', FontAwesome"></textarea> <input id="btnSendMsg" type="button" value="Send">
                </div>
            </div>
        </div>
    </div><!-- /.chatContainer -->
    <!-- e: chat with us -->

    <!-- Scripts -->
    {{-- <script src="{{ asset('js/app.js') }}"></script> --}}
    <script type="text/javascript" src="//ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
    
    <script src="{{ asset('js/jquery.smooth-scroll.js') }}"></script>
    {{-- <script src="{{ asset('js/test.js') }}"></script> --}}
    <script src="{{ asset('js/jquery.circliful.js') }}"></script>
    <script src="{{ asset('js/custom.js') }}"></script>
    <script type="text/javascript" src="{{url('js/lang.js')}} "></script>

    <script type="text/javascript" src="//codeorigin.jquery.com/ui/1.10.2/jquery-ui.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
    <script src="{{ asset('js/slick.js') }}"></script>
    @yield('scripts')
</body>
</html>

