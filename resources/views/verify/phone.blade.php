@extends('layouts.main')


@section('content')
<body>




<div class="container">

    <div class="row m-0">

        <div class="col-lg-6 my-5" style="margin-top:10% !important;%;border: 1px solid #d2d2f8;margin: auto;box-shadow: 2px 2px 2px 5px rgba(159,155,155,0.2);border-radius: 5px">


            <div class="row text-center d-block">
                <div class="col-lg-12 mt-5 mb-2 ">
                    <h2>Are you using the same number for WhatsApp? </h2>


                </div>
            </div>

<form action="{{url('final/step')}}" method="post">
    @csrf
            <div class="row ">
                <div class="col-lg-12 mb-2 p-4" style="">

                    <input id="phone" value="{{$num}}" name="phone" style="width: 100%" class="form-control" type="tel" required>
                </div>




            </div>


            <div class="row">
                <div class="col-lg-6 mt-5 mb-3">




                </div>


                <div class="col-lg-6 mt-5 mb-3 text-right">

                    <button type="submit" class="btn btn-success ">Next</button>


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
        $("#phone").val('{{$num}}');
        }, 1000);
    });

</script>

@endsection
