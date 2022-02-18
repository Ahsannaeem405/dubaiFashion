@extends('layouts.main')
@section('content')


    <div class="container pt-5">
        <div class="row my-5 d-flex justify-content-center justify-content-lg-center">

            @foreach($events as $event)
                <input type="checkbox" value="{{$event->id}}" style="display: none" name="eventId[]" id="eventid{{$event->id}}">
                <div class="col-xl-4 col-lg-6  col-md-8 col-sm-8 col-12">
                    <div class="group-card event{{$event->id}}_div mx-0 mx-sm-0">
                        <div class="group-card-img">
                            <img src="{{asset('uploads/appsetting/'.$event->image.'')}}" />


                                <a class="rejis-btn event"  href="{{url('counter/scan/'.$event->id.'')}}" event="{{$event->id}}" status="0">
                                    Verify Now
                                </a>



                        </div>

                        <div class="group-card-body">
                            <h4 class="event-name text-center"><img src="{{asset('image/verified-icon-png-11.jpg')}}" class="img{{$event->id}} img_none" width="30" alt=""> {{$event->name}}</h4>
                            <div class="row py-2">
                                <div class="col-4">
                                    <p><i class="far fa-calendar-alt mx-1"></i>{{$event->start}}</p>
                                </div>
                                <div class="col-8 ">
                                    <p class="text-end"><i class="far fa-clock mx-1"></i>{{$event->starttime}} to {{$event->endtime}}</p>
                                </div>
                                <p class="event-dis mb-0 text-center pr-2 pl-2">
                                    {{$event->desc}}
                                </p>
                            </div>

                        </div>
                    </div>
                </div>
            @endforeach


        </div>
    </div>


    <script>
        document.addEventListener("DOMContentLoaded", function() {
            var webpMachine = new webpHero.WebpMachine()
            webpMachine.polyfillDocument()
        });
    </script>



@endsection


