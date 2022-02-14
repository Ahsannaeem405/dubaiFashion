<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="{{asset('css/style.css')}}">
    <link rel="stylesheet" href="{{asset('css/style2.css')}}">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/intl-tel-input/11.0.9/css/intlTelInput.css" rel="stylesheet" media="screen">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/intl-tel-input/11.0.9/js/intlTelInput.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/intl-tel-input/11.0.9/js/intlTelInput.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/intl-tel-input/11.0.9/js/utils.js"></script>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.0/css/all.min.css" rel="stylesheet">

    <title>Home</title>
    <style>
        .separate-dial-code{
            width: 100%;
        }
    </style>
</head>

<body>
@include('layouts.component.partial')
<header>
    <nav class="navbar navbar-expand-lg navbar-dark">
        <a class="navbar-brand ml-md-5" href="#"><img src="{{asset('image/ARAB-FASHION-WEEK-X-D3-LOGO_white-150x150.png')}}" class="img_header" alt=""></a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav ml-auto">
                {{--                <li class="nav-item p-2 active">--}}
                {{--                    <a class="nav-link" href="#">LOG IN</a>--}}
                {{--                </li>--}}
                {{--                <li class="nav-item p-2">--}}
                {{--                    <a class="nav-link" href="#">REGISTER</a>--}}
                {{--                </li>--}}

{{--                </li>--}}

            </ul>

        </div>
    </nav>
</header>


@yield('content')


<footer>
    <div class="container-fluid bg-black pt-3">

        <div class="container pt-4 pb-4">
            <div class="row">

                <div class="col-md-3 col-12 pt-2 text-center">
                    <h3>KEEP IN TOUCH</h3>
                    <form action="#" class="hr pb-3" method="post">
                        <input type="text" class="form-control mt-4" placeholder="*NAME">
                        <input type="text" class="form-control mt-4" placeholder="*EMAIL">
                        <button class="btn btn-dark btn_footer mt-4">SUBSCRIBE</button>
                    </form>
                    <ul class="ul pl-0 pt-3">
                        <li>
                            <i class="fab fa-instagram"></i>
                        </li>
                        <li>
                            <i class="fab fa-facebook-f"></i>
                        </li>
                        <li>
                            <i class="fab fa-twitter"></i>
                        </li>
                        <li><i class="fab fa-youtube"></i></li>
                        <li><i class="fab fa-linkedin-in"></i></li>

                    </ul>
                </div>
                <div class="col-md-3 col-12 pt-2 text-center">
                    <div class="footera pt-md-3 mt-md-5">

                        <ul class="list-unstyled">
                            <li class="mt-2">
                                <a href="#!">About</a>
                            </li>
                            <li class="mt-2">
                                <a href="#!">Contact</a>
                            </li>

                        </ul>

                    </div>


                </div>
                <div class="col-md-3 col-12 pt-2 text-center">
                    <div class="footera pt-md-3 mt-md-5">

                        <ul class="list-unstyled text-md-left">
                            <li class="mt-2">
                                <a href="#!">Buyer & Press</a>
                            </li>
                            <li class="mt-2">
                                <a href="#!">Partners</a>
                            </li>
                            <li class="mt-2">
                                <a href="#!">Sponsers Application</a>
                            </li>
                            <li class="mt-2">
                                <a href="#!">Designer Application</a>
                            </li>

                        </ul>

                    </div>


                </div>
                <div class="col-md-3 col-12 pt-2 text-center">
                    <div class="footera pt-md-3 mt-md-5">

                        <ul class="list-unstyled text-md-left">
                            <li class="mt-2">
                                <a href="#!">Privacy Policy</a>
                            </li>
                            <li class="mt-2">
                                <a href="#!">Terms & Conditions</a>
                            </li>
                            <li class="mt-5">
                                <a href="#!">Powered by GoDaddy</a>
                            </li>
                            <li class="mt-5">
                                <a href="#!">
                                    © Arab Fashion Week 2022</a>
                            </li>

                        </ul>

                    </div>


                </div>
            </div>
        </div>

    </div>
</footer>
<script>
    var telInput = $("#phone"),
        errorMsg = $("#error-msg"),
        validMsg = $("#valid-msg");

    // initialise plugin
    telInput.intlTelInput({

        allowExtensions: true,
        formatOnDisplay: true,
        autoFormat: true,
        autoHideDialCode: true,
        autoPlaceholder: true,
        defaultCountry: "auto",
        ipinfoToken: "yolo",

        nationalMode: false,
        numberType: "MOBILE",
        //onlyCountries: ['us', 'gb', 'ch', 'ca', 'do'],
        preferredCountries: ['sa', 'ae', 'qa', 'om', 'bh', 'kw', 'ma'],
        preventInvalidNumbers: true,
        separateDialCode: true,
        initialCountry: "auto",
        geoIpLookup: function(callback) {
            $.get("http://ipinfo.io", function() {}, "jsonp").always(function(resp) {
                var countryCode = (resp && resp.country) ? resp.country : "";
                callback(countryCode);
            });
        },
        utilsScript: "https://cdnjs.cloudflare.com/ajax/libs/intl-tel-input/11.0.9/js/utils.js"
    });

    var reset = function() {
        telInput.removeClass("error");
        errorMsg.addClass("hide");
        validMsg.addClass("hide");
    };

    // on blur: validate
    telInput.blur(function() {
        reset();
        if ($.trim(telInput.val())) {
            if (telInput.intlTelInput("isValidNumber")) {
                validMsg.removeClass("hide");
            } else {
                telInput.addClass("error");
                errorMsg.removeClass("hide");
            }
        }
    });

    // on keyup / change flag: reset
    telInput.on("keyup change", reset);
</script>

<script>
    $(document).ready(function() {

        $(document).on('click','.country',function() {

            setTimeout(function() {
                var countryCode = $('.selected-dial-code').text();
            $('#phone').val("");

            $('#phone').val( countryCode +' ');
            }, 100);
        });
    });
</script>
<!-- Optional JavaScript -->
<!-- jQuery first, then Popper.js, then Bootstrap JS -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>

<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
</body>

</html>
