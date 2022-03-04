@extends('layouts.main')


@section('content')
<body>




<div class="container">

    <div class="row m-0">

        <div class="col-lg-6 my-5" style="margin-top:10% !important;%;border: 1px solid #d2d2f8;margin: auto;box-shadow: 2px 2px 2px 5px rgba(159,155,155,0.2);border-radius: 5px">


            <div class="row text-center d-block">
                <div class="col-lg-12 mt-5 mb-2 ">
                    <h4>Thank you for choosing to register to attend the
                        Women’s Arab Fashion Week for FW22/23</h4>


                </div>
            </div>


            <div class="row text-center d-block my-3">
                <div class="col-lg-12 mt-5 mb-2 ">
                    <h2>STEP 3/5 </h2>

                </div>
            </div>

<form action="{{url('final/step')}}" method="post">
    @csrf
            <div class="row ">
                <div class="col-lg-12 text-center">
                    <lable >Is your WhatsApp number the same as your mobile number?</lable>
                </div>
                <div class="col-lg-12" id="nobtn" style="display: none">
                    <button type="button"  class="btn btn-secondary select3 w-100 mb-2  text-black" select="yes" style="background-color: #d0cccc;border: none;">NO</button>
<p>If the answer is No, please insert below your WhatsApp number</p>
                </div>

                <div class="col-lg-12 mt-2" style="display: none" >

                    <div class="input-group mb-2">
                        <div class="input-group-prepend " style="height: 38px">
                            <div class="input-group-text">UAE</div>

                        </div>
                        <input  name="phone" style="height: 38px;"  value="{{$num}}" id="inlineFormInputGroup" class="form-control" type="tel" required>
                    </div>
                </div>


                <div class="col-lg-12 mt-2" style="display: none" id="no">

                    <div class="input-group mb-2">
                        <div class="input-group-prepend " style="height: 38px">
                            <div class="input-group-text">UAE</div>
                        </div>
                        <input  name="phone2" style="height: 38px;"  value="+971" id="inlineFormInputGroup" class="form-control" type="tel" required>
                    </div>
                </div>




            </div>

    <input type="hidden" name="types" value="yes" id="types">


            <div class="row">


                <div class="col-lg-12 mt-2 mb-3 text-right">

                    <button type="button"  class="btn btn-success w-100 mb-2 select" select="no" style="background-color: black;border: none">NO</button>
                    <button type="submit" class="btn btn-success w-100 select submit" select="yes" style="background-color: black;border: none">YES</button>
                    <button type="submit" class="btn btn-success w-100 select2 submit" select="yes" style="display:none;background-color: black;border: none">SUBMIT</button>


                </div>
            </div>
</form>
        </div>

    </div>
</div>

</body>

<script>
    $(document).ready(function(){
$('.select').click(function () {

  var sel=  $(this).attr('select');

  if(sel=='no')
  {
      $('#no').show();
      $('.select').hide();
      $('#nobtn').show();
      $('.select2').show();
      $('#types').val(sel);
  }

});


        $('.select3').click(function () {

                $('#no').hide();
                $('#nobtn').hide();
            $('.select2').hide();
            $('.select').show();
                $('#types').val('yes');

        })
    });

</script>

@endsection
