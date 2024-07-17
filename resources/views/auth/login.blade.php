 <!doctype html>
<html class="no-js" lang="en">

<head>
		<meta charset="utf-8">
		<meta http-equiv="x-ua-compatible" content="ie=edge">
		<title>Login| Tether Elite Finance</title>
		<meta name="description" content="">
		<meta name="viewport" content="width=device-width, initial-scale=1">

		<!-- favicon -->
		@include('include.css')
	</head>
		<body>

		<!--[if lt IE 8]>
			<p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
		<![endif]-->

        <div id="preloader"></div>
        @include('include.header')
        <!-- header end -->
        <!-- Start breadcumb Area -->
        <div class="page-area">
            <div class="breadcumb-overlay"></div>
            <div class="container">
                <div class="row">
                    <div class="col-md-12 col-sm-12 col-xs-12">
                        <div class="breadcrumb text-center">
                            <div class="section-headline white-headline">
                                <h3>Login</h3>
                            </div>
                            <ul class="breadcrumb-bg">
                                <li class="home-bread">Home</li>
                                <li>Login</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- End breadcumb Area -->
        <!-- Start Slider Area -->
        <div class="login-area page-padding">
            <div class="container">
                <div class="row">
                    <div class="col-md-12 col-sm-12 col-xs-12">
                        <div class="login-page">
                            <div class="login-form">
                                <h4 class="login-title">LOGIN</h4>
                                <div class="row">
                                    <form  method="POST" action="{{ route('login') }}" class="log-form">
                                        @csrf

                                        <div class="col-md-12 col-sm-12 col-xs-12">
                                            <input id="email" class="form-control" placeholder="Email" type="email" name="email" required autofocus autocomplete="email" />
                                            <x-input-error :messages="$errors->get('email')" class="mt-2" />
                                        </div>
                                        <div class="col-md-12 col-sm-12 col-xs-12">
                                            <input id="password" class="form-control" type="password" name="password" required autocomplete="current-password" />
                                            <x-input-error :messages="$errors->get('password')" class="mt-2" />
                                        </div>
                                        <div class="col-md-12 col-sm-12 col-xs-12">
                                            <div class="check-group flexbox">
                                                <label class="check-box">
                                                    <input type="checkbox" class="check-box-input" checked>
                                                    <span class="remember-text">Remember me</span>
                                                </label>

                                                @if (Route::has('password.request'))
                                                    <a class="text-muted" href="{{ route('password.request') }}">Forgot password?</a>
                                                @endif
                                            </div>
                                        </div>
                                        <div class="col-md-12 col-sm-12 col-xs-12">
                                            <button type="submit" class="login-btn">{{ __('Log in') }}</button>
                                            <div id="msgSubmit" class="h3 text-center hidden"></div>
                                            <div class="clearfix"></div>
                                        </div>
                                        <div class="col-md-12 col-sm-12 col-xs-12">
                                            <div class="clear"></div>
                                            {{-- <div class="separetor"><span>Or with Sign</span></div> --}}
                                            <div class="sign-icon">
                                                <div class="acc-not">Don't have an account  <a href="{{ route('register') }}"> Sign up</a></div>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
             </div>
        </div>
		<!-- all js here -->
        <!-- Start Footer Area -->
        @include('include.footer')
        <!-- End Footer area -->

		<!-- all js here -->

		<!-- jquery latest version -->
		@include('include.script')
	</body>

</html>
