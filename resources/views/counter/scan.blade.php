@extends('layouts.main')
@section('content')


    <script src="https://rawgit.com/schmich/instascan-builds/master/instascan.min.js"></script>
    <div class="container pt-5">

        <h1 class="text-center">Scan QR code for {{$event->name}}</h1>
        <div class="row w-100 my-5 m-0">
            <select name="" id="camera" class="form-control my-2">

            </select>
            <video playsinline controls="true" class="m-auto" id="preview" style="border: 1px solid red;border-radius: 25px;width: 100%"></video>
        </div>

    </div>

{{--    <button id="verifysubmit" style="">verify</button>--}}




    <script>

    </script>
    <script type="text/javascript">
        var user = 0;
        let scanner = new Instascan.Scanner({video: document.getElementById('preview'),mirror : false,facingMode : { exact: "environment" }});
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
                var html;
                for (var i=0 ; i < cameras.length;i++)
                {

                  html +=  `<option value="${i}">${cameras[i].name}</option>`;
                }
                $('#camera').append(html);
                // if (typeof cameras[1]==='undefined')
                // {
                    scanner.start(cameras[0]);
                // }
                // else{
                //     scanner.start(cameras[1]);
                // }

            } else {
                console.error('No cameras found.');
            }
        }).catch(function (e) {
            console.error(e);
        });

        let supports = navigator.mediaDevices.getSupportedConstraints();
        if (supports["facingMode"]) {

           alert('Not Support!');
        } else {
            let constraints = {
                facingMode: { exact: "environment" }
            }
            myTrack.applyConstraints(constraints);
        }

        $('#camera').change(function () {
            var val=$(this).val();
            Instascan.Camera.getCameras().then(function (cameras) {
                if (cameras.length > 0) {
                    scanner.start(cameras[val]);

                } else {
                    console.error('No cameras found.');
                }
            })

        })




    </script>




@endsection


