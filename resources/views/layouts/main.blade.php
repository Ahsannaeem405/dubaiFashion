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
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
{{--    <script src="https://cdnjs.cloudflare.com/ajax/libs/intl-tel-input/11.0.9/js/intlTelInput.js"></script>--}}
    <script src="https://cdnjs.cloudflare.com/ajax/libs/intl-tel-input/11.0.9/js/intlTelInput.min.js"></script>
{{--    <script src="https://cdnjs.cloudflare.com/ajax/libs/intl-tel-input/11.0.9/js/utils.js"></script>--}}
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.0/css/all.min.css" rel="stylesheet">
    <!-- Owl Carousel -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css" integrity="sha512-tS3S5qG0BlhnQROyJXvNjeEM4UpMXHrQfTGmbQ1gKmelCxlSEBUaxhRBj/EFTzpbP4RVSrpEikbmdJobCvhE3g==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.theme.default.min.css" integrity="sha512-sMXtMNL1zRzolHYKEujM2AqCLUR9F2C4/05cdbxjjLSRvMQIciEPCQZo++nk7go3BtSuK9kfa/s+a4f4i5pLkw==" crossorigin="anonymous" referrerpolicy="no-referrer" />

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
        <a class="navbar-brand ml-md-5" href="https://arabfashionweek.org/"><img src="{{asset('image/ARAB-FASHION-WEEK-X-D3-LOGO_white-150x150.png')}}" class="img_header" alt=""></a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav mr-auto">
                                <li class="nav-item p-0 active">
                                    <a class="nav-link" href="https://arabfashionweek.org/">HOME <span class="ml-2">|</span></a>
                                </li>


                <li class="nav-item p-0 active">
                    <a class="nav-link" href="https://arabfashionweek.org/official-calendar/">CALENDAR</a>
                </li>



                @if(Auth::check())


                                <li class="nav-item p-0 active">
                                    <a class="nav-link" href="{{url('logout')}}">Logout</a>
                                </li>

                @endif

{{--                </li>--}}

            </ul>

        </div>
    </nav>
</header>


@yield('content')


<footer style="margin-top: 8rem">
    <div class="container-fluid bg-black pt-3">

        <div class="container pt-1 pb-4">
            <div class="row">


                <div class="col-lg-12">

                    <div>
                        <div class="owl-carousel owl-carousel2 owl-theme">
                            <div class="item"><img src="{{asset('image/logo1.png')}}"/></div>
                            <div class="item"><img src="{{asset('image/logo2.png')}}"/></div>
                            <div class="item"><img src="{{asset('image/logo3.png')}}"/></div>
                            <div class="item"><img src="{{asset('image/logo4.png')}}"/></div>
                            <div class="item"><img src="{{asset('image/logo5.png')}}"/></div>
                            <div class="item"><img src="{{asset('image/logo6.png')}}"/></div>
                            <div class="item"><img src="{{asset('image/logo7.png')}}"/></div>
                            <div class="item"><img src="{{asset('image/logo8.png')}}"/></div>
                            <div class="item"><img src="{{asset('image/logo9.png')}}"/></div>
                            <div class="item"><img src="{{asset('image/logo10.png')}}"/></div>
                            <div class="item"><img src="{{asset('image/logo11.png')}}"/></div>
                            <div class="item"><img src="{{asset('image/logo12.png')}}"/></div>
                            <div class="item"><img src="{{asset('image/logo13.png')}}"/></div>
                            <div class="item"><img src="{{asset('image/logo14.png')}}"/></div>
                            <div class="item"><img src="{{asset('image/logo15.png')}}"/></div>
                            <div class="item"><img src="{{asset('image/logo16.png')}}"/></div>

                        </div>
                    </div>


                </div>

                <br>
                <br>
                <br>
                <br>
                <div class="col-md-6   text-left">

                    <ul class="ul pl-0 pt-3">
                        <li>
                            <a style="color: white" href="https://www.instagram.com/arabfashionweek/">   <i class="fab fa-instagram"></i>
                            </a>
                        </li>
                        <li>
                            <a style="color: white" href="https://www.facebook.com/ArabFashionWeek/">   <i class="fab fa-facebook-f"></i>
                            </a>
                        </li>
                        <li>
                            <a style="color: white" href="https://twitter.com/arabfashionweek">  <i class="fab fa-twitter"></i>
                            </a>
                        </li>
                        <li><a style="color: white" href="https://www.youtube.com/c/ArabfashionweekOrg"><i class="fab fa-youtube"></i>
                            </a>
                        </li>
                        <li><a style="color: white" href="https://www.linkedin.com/company/arab-fashion-week/"><i class="fab fa-linkedin-in"></i></a></li>

                    </ul>
                </div>
                <div class="col-md-6  pt-2 text-center">
                    <div class="footera ">



                             <P class="m-0">© Arab Fashion Week 2022</P>
                             <P class="m-0">Powered by OHVU</P>
                            </li>







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
            $.get("https://ipinfo.io", function() {}, "jsonp").always(function(resp) {
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
{{--<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>--}}

{{--<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>--}}
{{--<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>--}}
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
</body>



<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js" integrity="sha512-894YE6QWD5I59HgZOGReFYm4dnWc1Qt5NtvYSaNcOP+u1T9qYdvdihz0PPSiiqn/+/3e7Jo4EaG7TubfWGUrMQ==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>

<script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js" integrity="sha512-bPs7Ae6pVvhOSiIcyUClR7/q2OAsRiovw4vAkX+zJbw3ShAeeqezq50RIIcIURq7Oa20rW2n2q+fyXBNcU9lrw==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>

<script>
    $('.owl-carousel2').owlCarousel({

        stagePadding: 0,
        loop:true,
        margin:10,
        dots: false,
        nav: false,
        autoplay: true,
        slideTransition: 'linear',
        autoplayTimeout: 2000,
        autoplaySpeed: 2000,
        autoplayHoverPause: true,
        responsive:{

            1000:{
                items:10
            }
        }
    })
</script>

<script>
    $('.owl-carousel').owlCarousel({

        nav:false,
        items:4,
        loop:true,
        margin:10,
        autoplay:true,
        autoplayTimeout:2000,
        autoplayHoverPause:true,
        dots:false,

    });
</script>

</html>
