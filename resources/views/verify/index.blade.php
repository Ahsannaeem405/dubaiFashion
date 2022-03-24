@extends('layouts.main')


@section('content')


    <body>


    <div class="container">

        <div class="row m-0">

            <div class="col-lg-6 my-5" style="margin-top:10% !important;%;border: 1px solid #d2d2f8;margin: auto;box-shadow: 2px 2px 2px 5px rgba(159,155,155,0.2);border-radius: 5px">


                <div class="row text-center d-block">
                    <div class="col-lg-12 mt-5 mb-2 ">
                        <h4>Thank you for choosing to register to attend the
                            Women’s Arab Fashion Week for FW22/23 </h4>

                    </div>
                </div>


                <div class="row text-center d-block my-3">
                    <div class="col-lg-12 mt-5 mb-2 ">
                        <h2>STEP 1/5 </h2>

                    </div>
                </div>



                <div class="row text-center d-block">
                    <div class="col-lg-12 mt-5 mb-2 ">
                        <h4>To start the process please enter your phone number for
                            verification reasons, you will receive an OTP code by SMS.</h4>

                    </div>
                </div>

                <form action="{{url('send/sms/code')}}" method="post">
                    @csrf
                    <div class="row ">


                        <div class="col-lg-12 mt-2">

                            <div class="input-group mb-2">
                                <div class="input-group-prepend " style="height: 38px">

                                </div>
                                <input id="phone"  name="phone" style="height: 38px;"  value="" id="inlineFormInputGroup" class="form-control" type="tel" required>
                                <input id="phonecode"  name="phonecode" style="height: 38px;"  value="" id="inlineFormInputGroup" class="form-control" type="hidden" required>
                            </div>
                        </div>






                    </div>


                    <div class="row">



                        <div class="col-lg-12  mb-3 text-right">

                            <button type="submit" class="btn btn-success w-100 " style="border:none;background-color: black">Submit</button>


                        </div>
                    </div>
                </form>
            </div>

        </div>
    </div>

    </body>

    <script>
        $(document).ready(function(){


            setTimeout(function() {
                var countryCode = $('.selected-dial-code').text();
                $("#phonecode").val(countryCode);
            }, 2000);
        });
    </script>

@endsection
