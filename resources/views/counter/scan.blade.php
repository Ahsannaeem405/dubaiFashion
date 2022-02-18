@extends('layouts.main')
@section('content')


    <script src="https://rawgit.com/schmich/instascan-builds/master/instascan.min.js"></script>
    <div class="container pt-5">

        <h1 class="text-center">Scan QR code for {{$event->name}}</h1>
        <div class="row w-100 my-5 m-0">
            <video class="m-auto" id="preview" style="border: 1px solid red;border-radius: 25px;width: 100%"></video>
        </div>

    </div>

{{--    <button id="verifysubmit" style="">verify</button>--}}




    <script>

    </script>
    <script type="text/javascript">
        var user = 0;
        let scanner = new Instascan.Scanner({video: document.getElementById('preview')});
        scanner.addListener('scan', function (content) {

            var event = {{$event->id}};
            var userid = content;

            $.ajax({
                type: 'post',
                url: "{{url('counter/event/verify')}}",
                data: {'user': userid, 'event': event},
                success: function (response) {
                    if (response == true) {
                        swal("Verified", "", "success", {
                            button: "Close",

                        });

                    } else {
                        swal("Unverified", "", "error", {
                            button: "Close",

                        });
                    }
                }
            });

        });
        Instascan.Camera.getCameras().then(function (cameras) {
            if (cameras.length > 0) {
                scanner.start(cameras[0]);
            } else {
                console.error('No cameras found.');
            }
        }).catch(function (e) {
            console.error(e);
        });






    </script>




@endsection


