<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Styles -->
    <link href="{{ asset('bootstrap/css/bootstrap.css') }}" rel="stylesheet">
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
              <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
              </button>
              <a class="navbar-brand" href="#"><img src="/img/logo.png" alt="Đăng ký du học" /></a>
            </div>

            <!-- Collect the nav links, forms, and other content for toggling -->
              <ul class="nav navbar-nav navbar-right">
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
                <li><a href="#">Compare</a></li>
                <li><a href="#">Apply</a></li>
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
          </div><!-- /.container -->

          <div id="slide-panel" class="sub-menu">              
                <div class="slide-section" id="subject">
                  <div class="container">
                      <h1 class="text-center">See Courses by subject</h1>
                      <div class="row">
                          <div class="col-lg-3 col-md-3 col-sm-3 col-xs-3">
                            @if (Cookie::get('frequently_visited_subjects') !== null)
                            <h3>My frequently visited</h3>
                            <?php foreach (Cookie::get('frequently_visited_subjects') as $key => $value): ?>
                                @if ($key < 3)
                                <a href="{{ route('subject', $value['url']) }}">{{ $value['name'] }}</a>
                                @endif
                            <?php endforeach ?>
                            @endif
                            <div class="recent-uni-spacer"></div>
                            <a href="{{ route('subject', ['subject1']) }}">Subject 1</a>
                            <a href="{{ route('subject', ['subject2']) }}">Subject 2</a>
                            <a href="{{ route('subject', ['subject3']) }}">Subject 3</a>
                          </div>
                          <div class="col-lg-3 col-md-3 col-sm-3 col-xs-3">
                            <a href="{{ route('subject', ['subject4']) }}">Subject 4</a>
                            <a href="{{ route('subject', ['subject5']) }}">Subject 5</a>
                            <a href="{{ route('subject', ['subject6']) }}">Subject 6</a>
                            <a href="{{ route('subject', ['subject7']) }}">Subject 7</a>
                            <a href="{{ route('subject', ['subject8']) }}">Subject 8</a>
                            <a href="{{ route('subject', ['subject9']) }}">Subject 9</a>
                          </div>
                          <div class="col-lg-3 col-md-3 col-sm-3 col-xs-3">
                            <a href="{{ route('subject', ['subject10']) }}">Subject 10</a>
                            <a href="{{ route('subject', ['subject11']) }}">Subject 11</a>
                            <a href="{{ route('subject', ['subject12']) }}">Subject 12</a>
                            <a href="{{ route('subject', ['subject13']) }}">Subject 13</a>
                            <a href="{{ route('subject', ['subject14']) }}">Subject 14</a>
                            <a href="{{ route('subject', ['subject15']) }}">Subject 15</a>
                          </div>
                          <div class="col-lg-3 col-md-3 col-sm-3 col-xs-3">
                            <a href="{{ route('subject', ['subject16']) }}">Subject 16</a>
                            <a href="{{ route('subject', ['subject17']) }}">Subject 17</a>
                            <a href="{{ route('subject', ['subject18']) }}">Subject 18</a>
                            <a href="{{ route('subject', ['subject19']) }}">Subject 19</a>
                            <a href="{{ route('subject', ['subject20']) }}">Subject 20</a>
                            <a href="{{ route('subject', ['subject21']) }}">Subject 21</a>
                          </div>
                      </div>
                  </div>                
                </div><!-- /.slide-section -->

              <div class="slide-section" id="university">
                  <div class="container">
                      <h1 class="text-center">See courses by university</h1>
                      <div class="row">
                          <div class="col-lg-3 col-md-3 col-sm-3 col-xs-3">
                            <h3>My frequently visited</h3>
                            <a href="#">University 1</a>
                            <a href="#">University 2</a>
                            <div class="recent-uni-spacer"></div>
                            <h4>United Kingdom</h4>
                            <a href="#">University 1</a>
                            <a href="#">University 2</a>
                            <a href="#">University 3</a>
                          </div>
                          <div class="col-lg-3 col-md-3 col-sm-3 col-xs-3">
                            <a href="#">University 1</a>
                            <a href="#">University 2</a>
                            <a href="#">University 3</a>
                            <h4>Australia</h4>
                            <a href="#">University 1</a>
                            <a href="#">University 2</a>
                            <a href="#">University 3</a>
                          </div>
                          <div class="col-lg-3 col-md-3 col-sm-3 col-xs-3">
                            <a href="#">University 1</a>
                            <a href="#">University 2</a>
                            <a href="#">University 3</a>
                            <a href="#">University 1</a>
                            <a href="#">University 2</a>
                            <a href="#">University 3</a>
                          </div>
                          <div class="col-lg-3 col-md-3 col-sm-3 col-xs-3">
                            <a href="#">University 1</a>
                            <a href="#">University 2</a>
                            <a href="#">University 3</a>
                            <a href="#">University 1</a>
                            <a href="#">University 2</a>
                            <a href="#">University 3</a>
                          </div>
                      </div>
                  </div>
              </div><!-- /.slide-section -->


              <div class="slide-section" id="career">
                  <div class="container">
                      <h1 class="text-center">See Courses by career</h1>
                      <div class="row">
                          <div class="col-lg-3 col-md-3 col-sm-3 col-xs-3">
                            <h3>My frequently visited</h3>
                            <a href="#">Career 1</a>
                            <a href="#">Career 2</a>
                            <div class="recent-uni-spacer"></div>
                            <a href="#">Career 1</a>
                            <a href="#">Career 2</a>
                            <a href="#">Career 3</a>
                          </div>
                          <div class="col-lg-3 col-md-3 col-sm-3 col-xs-3">
                            <a href="#">Career 1</a>
                            <a href="#">Career 2</a>
                            <a href="#">Career 3</a>
                            <a href="#">Career 1</a>
                            <a href="#">Career 2</a>
                            <a href="#">Career 3</a>
                          </div>
                          <div class="col-lg-3 col-md-3 col-sm-3 col-xs-3">
                            <a href="#">Career 1</a>
                            <a href="#">Career 2</a>
                            <a href="#">Career 3</a>
                            <a href="#">Career 1</a>
                            <a href="#">Career 2</a>
                            <a href="#">Career 3</a>
                          </div>
                          <div class="col-lg-3 col-md-3 col-sm-3 col-xs-3">
                            <a href="#">Career 1</a>
                            <a href="#">Career 2</a>
                            <a href="#">Career 3</a>
                            <a href="#">Career 1</a>
                            <a href="#">Career 2</a>
                            <a href="#">Career 3</a>
                          </div>
                      </div>
                    </div>
                </div><!-- /.slide-section -->


              <div class="closepane" title="Click or scroll to hide">
                <i class="fa fa-chevron-up"></i>
            </div>
          </div><!-- /.sub-menu -->
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

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}"></script>
    <script src="{{ asset('js/slick.js') }}"></script>
    <script src="{{ asset('js/jquery.smooth-scroll.js') }}"></script>
    <script src="{{ asset('js/test.js') }}"></script>
    <script src="{{ asset('js/custom.js') }}"></script>
    <script type="text/javascript" src="{{url('js/lang.js')}} "></script>
    @yield('scripts')
</body>
</html>

