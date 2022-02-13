@extends('layouts.main')
@section('content')
    <style>
        .error{
            border: 1px solid red;
        }
    </style>

    <section class="mt-5 mb-5 pt-5">
        <div class="container con_shadow p-5">
            <p class="p1">IMPORTANT NOTE:</p>
            <p class="p1">Please fill in all the information below to help us identify your profile. We will review the application and confirm your attendance after having reviewed your data.</p>
            <p class="p1">Kindly provide true and accurate information. Our team carefully reviews each profile and wrongful applications will not be confirmed.</p>
            <form action="/" id="myForm" method="post">
                <div class="row pt-3">
                    <div class="col-md-6 col-12 pt-3">
                        <label for=""><b><span class="text-danger">*</span>&nbsp; First Name</b></label>
                        <input type="text" class="mt-2 form-control required" name="fname" >

                    </div>
                    <div class="col-md-6 col-12 pt-3">
                        <label for=""><b><span class="text-danger">*</span>&nbsp; Last Name</b></label>
                        <input type="text" class="mt-2 form-control  required" name="lname" >

                    </div>
                    <div class="col-md-12 col-12 pt-3">
                        <label for=""><b><span class="text-danger">*</span>&nbsp;Email</b></label>
                        <input type="text" class="mt-2 form-control required" name="lname" >

                    </div>
                    <div class="col-md-6 col-12 pt-3">
                        <label for=""><b><span class="text-danger">*</span>&nbsp;Phone</b></label><br>
                        <input id="phone" name="phone" class="form-control required" type="tel" >
                        <span id="valid-msg" class="hide">Valid</span>
                        <span id="error-msg" class="hide">Invalid number</span>

                    </div>
                    <div class="col-md-12 col-12 pt-3">
                        <label for=""><b>Instagram(Optional)</b></label>
                        <input type="text" class="form-control" name="insta" >
                    </div>
                    <div class="col-md-12 col-12 pt-3">
                        <label for=""><b>linkedin (Optional)</b></label>
                        <input type="text" class="form-control" name="linked" >
                    </div>
                    <div class="col-md-12 col-12 pt-3">
                        <label for=""><b><span class="text-danger">*</span>&nbsp;Profile Category</b></label>
                        <select name="cat" class="form-control" id="" >
                            <option value="">-Select</option>

                            <option value="Press">Press</option>
                            <option value="Photographer">Photographer</option>
                            <option value="Celebrity">Celebrity or Influencer</option>
                            <option value="Press">Guest</option>

                        </select><br>
                        <i class="p1">* Are you attending with someone who has already registered? Please mention their name below to ensure your seats are assigned together. Ps. If you want to attend with another guest please ask them to rsvp. Plus 1 is not accepted
                            unless the name is on the list.</i>


                    </div>
                    <div class="col-md-12 col-12 pt-3">

                    </div>
                    <div class="col-md-12 col-12 pt-3">
                        <a > <button type="button" id="submitdata" class="btn btn-dark pl-3 pr-3"><b>Next</b> </button></a>
                    </div>


                </div>
            </form>
        </div>

    </section>


    <script>
        $(document).ready(function(){
        $("#submitdata").click(function () {
            var valid = true;
            $.each($("#myForm input.required"), function (index, value) {
               // alert($(this).val());
                if(!$(this).val()){
                    valid = false;

                    $(this).addClass('error');
                }
              else  {
                    $(this).removeClass('error');
                }
            });
            if(valid){
              //  $(submitButton).attr("disabled", false);
                event.preventDefault();
            }

        });
        });

    </script>

@endsection

