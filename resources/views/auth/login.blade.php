<!DOCTYPE html>
<html lang="en">
<head>
    <title>Arabian Fashion</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!--===============================================================================================-->
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="{{asset('userSite/login/vendor/bootstrap/css/bootstrap.min.css')}}">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css"
          href="{{asset('userSite/login/fonts/font-awesome-4.7.0/css/font-awesome.min.css')}}">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css"
          href="{{asset('userSite/login/fonts/iconic/css/material-design-iconic-font.min.css')}}">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="{{asset('userSite/login/vendor/animate/animate.css')}}">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="{{asset('userSite/login/vendor/css-hamburgers/hamburgers.min.css')}}">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="{{asset('userSite/login/vendor/animsition/css/animsition.min.css')}}">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="{{asset('userSite/login/vendor/select2/select2.min.css')}}">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css"
          href="{{asset('userSite/login/vendor/daterangepicker/daterangepicker.css')}}">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="{{asset('userSite/login/css/util.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('userSite/login/css/main.css')}}">
    <!--===============================================================================================-->
</head>
<body>

<div class="limiter">
    <div class="container-login100">
        <div class="wrap-login100">
            <form class="login100-form validate-form" method="post" action="{{route('login')}}">
                @csrf
                <span class="login100-form-title p-b-48">

                  LOGIN
					</span>

                <div class="wrap-input100 validate-input" data-validate="Valid email is: a@b.c">
                    <input class="input100" type="text" value="{{old('email')}}" name="email">
                    <span class="focus-input100" data-placeholder="Email"></span>
                </div>

                @if($errors->has('email'))

                    <span style="color: red">
                                        <strong>{{$errors->first('email')}}</strong>
                                    </span>
                @endif

                <div class="wrap-input100 validate-input" data-validate="Enter password">
						<span class="btn-show-pass">
							<i class="zmdi zmdi-eye"></i>
						</span>
                    <input class="input100" type="password" name="password">
                    <span class="focus-input100" data-placeholder="Password"></span>
                </div>

                @if($errors->has('Password'))

                    <span style="color: red">
                                        <strong>{{$errors->first('Password')}}</strong>
                                    </span>
                @endif

                <div class="container-login100-form-btn">
                    <div class="wrap-login100-form-btn">
                        <div class="login100-form-bgbtn"></div>
                        <button class="login100-form-btn">
                            Login
                        </button>
                    </div>
                </div>

                <div class="text-center p-t-115">
                {{--						<span class="txt1">--}}
                {{--							Don’t have an account?--}}
                {{--						</span>--}}

                {{--                    <a class="txt2" href="{{url('register')}}">--}}
                {{--                        Sign Up--}}
                {{--                    </a>--}}
                {{--                </div>--}}
            </form>
        </div>
    </div>
</div>


<div id="dropDownSelect1"></div>

<!--===============================================================================================-->
<script src="{{asset('userSite/login/vendor/jquery/jquery-3.2.1.min.js')}}"></script>
<!--===============================================================================================-->
<script src="{{asset('userSite/login/vendor/animsition/js/animsition.min.js')}}"></script>
<!--===============================================================================================-->
<script src="{{asset('userSite/login/vendor/bootstrap/js/popper.js')}}"></script>
<script src="{{asset('userSite/login/vendor/bootstrap/js/bootstrap.min.js')}}"></script>
<!--===============================================================================================-->
<script src="{{asset('userSite/login/vendor/select2/select2.min.js')}}"></script>
<!--===============================================================================================-->
<script src="{{asset('userSite/login/vendor/daterangepicker/moment.min.js')}}"></script>
<script src="{{asset('userSite/login/vendor/daterangepicker/daterangepicker.js')}}"></script>
<!--===============================================================================================-->
<script src="{{asset('userSite/login/vendor/countdowntime/countdowntime.js')}}"></script>
<!--===============================================================================================-->
<script src="{{asset('userSite/login/js/main.js')}}"></script>

</body>
</html>
