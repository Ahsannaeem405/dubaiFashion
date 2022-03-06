@extends('layouts.main')
@section('content')
    <style>
        .error{
            border: 1px solid red;
        }
    </style>

    <section class="mt-1 mb-5 pt-5">
        <div class="container con_shadow p-5 pt-1">
            <div class="row text-center d-block mt-1">
                <div class="col-lg-12 mt-1 mb-2 ">
                    <h2>STEP 4/5 </h2>

                </div>
            </div>

            <div class="row text-center d-block">
                <div class="col-lg-12 my-5 mb-2 ">
                    <h4>Please help us identify your profile by filling up the form below.
                        Kindly note that filling inaccurate information will result in
                        declining your reservation.</h4>


                </div>
            </div>





            {{--            <h3 class="text-center">{{$heading->heading}}</h3>--}}

            <form action="{{url('submit/data')}}" id="myForm" method="post">
                @csrf
                <div id="userform" class="row pt-3">
                    <div class="col-md-6 col-12 pt-3">
                        <label for=""><b><span class="text-danger">*</span>&nbsp; First Name</b></label>
                        <input type="text" class="mt-2 form-control required" name="fname[]" >

                    </div>
                    <div class="col-md-6 col-12 pt-3">
                        <label for=""><b><span class="text-danger">*</span>&nbsp; Last Name</b></label>
                        <input type="text" class="mt-2 form-control  required" name="lname[]" >

                    </div>
                    <div class="col-md-12 col-12 pt-3">
                        <label for=""><b><span class="text-danger">*</span>&nbsp;Email</b></label>
                        <input type="text" class="mt-2 form-control required" name="email[]" >

                    </div>
                    <div class="col-md-12 col-12 pt-3">
                        <label for=""><b><span class="text-danger">*</span>&nbsp;Phone</b></label><br>
                        <input id="phone2" value="{{$num}}" name="phone[]" class="form-control required" type="tel" >
                        <span id="valid-msg" class="hide">Valid</span>
                        <span id="error-msg" class="hide">Invalid number</span>

                    </div>
                    <div class="col-md-12 col-12 pt-3">
                        <label for=""><b>Instagram</b></label>
                        <input type="text" class="form-control insta" name="insta[]" >
                    </div>
                    <div class="col-md-12 col-12 pt-3">
                        <label for=""><b>linkedin</b></label>
                        <input type="text" class="form-control linkedin" name="linkedin[]" >
                    </div>
                    <div class="col-md-12 col-12 pt-3">
                        <label for=""><b><span class="text-danger">*</span>&nbsp;Profile Category</b></label>
                        <select name="cat[]" class="form-control required" id=""  >
                            <option value="">Select</option>

                            <option value="Press">Press</option>
                            <option value="Photographer">Photographer</option>
                            <option value="Celebrity">Celebrity or Influencer</option>
                            <option value="Press">Guest</option>

                        </select><br>

                        <div class="col-md-12 col-12 p-0">
                            <label for=""><b>Invite code(Optional)</b></label>
                            <input type="text" class="form-control" name="code[]" >
                        </div>



                    </div>
                </div>

                <div id="append" class="w-100 row m-0"></div>

                <div class="col-md-12 col-12 pt-3" style="text-align: center">
                    <button class="btn btn-secondary w-100" type="button" id="someone">Add more guests</button>
                </div>
                <div class="col-md-12 col-12 pt-3 text-right">
                    <a> <button type="submit" id="submitdata" class="btn btn-dark pl-3 pr-3 w-100" style="background-color: black"><b>Next</b> </button></a>
                </div>



            </form>
        </div>

    </section>


    <script>
        $(document).ready(function(){
            var i=1;
            $("#someone").click(function () {
                var html=$("#userform").html();

                var html = '<div class="row w-100 guest'+i+'">';
                html += '<div class="col-lg-12 w-100 text-center my-4 d-flex justify-content-between">' +
                    '<h3 class="m-auto" >Guest Details</h3>' +
                    '<i class="fa fa-trash del" del="'+i+'" style="color: red;cursor: pointer"></i>'+
                    '</div>';
                html += $('#userform').html();
                html += '</div>';

                $("#append").append(html);
                i++;

            });
            $(document).on('click','.del',function () {

                var id=$(this).attr('del');
                $('.guest'+id).remove();
            });

            $("#submitdata").click(function () {
                var valid = true;
                $.each($(".required"), function (index, value) {
                    // alert($(this).val());
                    if(!$(this).val()){
                        valid = false;

                        $(this).addClass('error');
                    }
                    else  {
                        $(this).removeClass('error');
                    }
                });

                var insta = $(".insta");
                var linkedin = $(".linkedin");

                for(var i = 0; i < insta.length; i++){
                    var val1=  $(insta[i]).val();
                    var val2=  $(linkedin[i]).val();

                    if(val1=='' && val2=='')
                    {
                        swal("Please provide atleast one social link of each user", "", "error", {
                            button: "Close",
                        });
                        valid=false;
                    }
                }

                if(valid==false){
                    event.preventDefault();
                }





            });
        });

    </script>

@endsection

