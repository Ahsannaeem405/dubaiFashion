@extends('layouts.main')
@section('content')

    <style>
        input[type=checkbox] {
            transform: scale(1.5);
        }
    </style>
    <form action="{{url('submit/event')}}" method="post">
        @csrf


        <div class="container pt-5">
            <div class="row ">

                @foreach($events as $event)

                    <div class="row w-100 m-0">



                        <div class="col-lg-2 p-0 pt-5 text-center pr-1" style="">


                            <h3 class="w-100 d-flex m-0">
                            <div class="m-auto d-flex"><input class="" @if(count($event->eventBook)==count($search)) checked disabled
                                        @endif   type="checkbox" value="{{$event->id}}" name="eventId[]"
                                        id="eventid{{$event->id}}">

                                <p class=" ml-2">{{$event->title}}</p></div>
                                </h3>
                            <h5 class="w-100">{{$event->start}} </h5>
                            <h5 class="w-100">{{$event->starttime}} - {{$event->endtime}} </h5>


                        </div>

                        <div class="col-lg-2 p-0 text-center "
                             style="display: flex;align-items: center;border: 2px solid black">

                            <h2 class="w-100">{{$event->name}} </h2>


                        </div>

                        @php
                            $imgs=explode(',',$event->image);
                        @endphp
                        @foreach($imgs as $img)
                            @if($img!='')
                                <div class="col-lg-2 pl-1 pr-0">


                                    <img class=""
                                         src="{{asset('uploads/appsetting/'.$img.'')}}"
                                         style="width: 100%;height:     250px"
                                         alt="">
                                </div>
                            @endif


                        @endforeach


                        <div style="height: 2px;background-color: #ccc8c8" class="w-100 my-2"></div>
                    </div>
                        @endforeach
                    </div>
            </div>



        {{--            @foreach($events as $event)--}}
        {{--                <input type="checkbox" value="{{$event->id}}" style="display: none" name="eventId[]" id="eventid{{$event->id}}">--}}
        {{--                <div class="col-xl-4 col-lg-6  col-md-8 col-sm-8 col-12">--}}
        {{--                    <div class="group-card event{{$event->id}}_div mx-0 mx-sm-0">--}}
        {{--                        <div class="group-card-img">--}}
        {{--                            <img src="{{asset('uploads/appsetting/'.$event->image.'')}}" />--}}
        {{--                      @if(count($event->eventBook)==count($search))--}}
        {{--                                <button class="rejis-btn "  style="background-color: gray;border: none" disabled  event="{{$event->id}}" status="0">--}}
        {{--                                    Join Now--}}
        {{--                                </button>--}}
        {{--                            @else--}}

        {{--                                <a class="rejis-btn event"  event="{{$event->id}}" status="0">--}}
        {{--                                    Join Now--}}
        {{--                                </a>--}}

        {{--                      @endif--}}


        {{--                        </div>--}}

        {{--                        <div class="group-card-body">--}}
        {{--                            <h4 class="event-name text-center"><img src="{{asset('image/verified-icon-png-11.jpg')}}" class="img{{$event->id}} img_none" width="30" alt=""> {{$event->name}}</h4>--}}
        {{--                            <div class="row py-2">--}}
        {{--                                <div class="col-4">--}}
        {{--                                    <p><i class="far fa-calendar-alt mx-1"></i>{{$event->start}}</p>--}}
        {{--                                </div>--}}
        {{--                                <div class="col-8 ">--}}
        {{--                                    <p class="text-end"><i class="far fa-clock mx-1"></i>{{$event->starttime}} to {{$event->endtime}}</p>--}}
        {{--                                </div>--}}
        {{--                                <p class="event-dis mb-0 text-center pr-2 pl-2">--}}
        {{--                                    {{$event->desc}}--}}
        {{--                                </p>--}}
        {{--                            </div>--}}

        {{--                        </div>--}}
        {{--                    </div>--}}
        {{--                </div>--}}
        {{--            @endforeach--}}


        <div class="col-lg-12 text-center my-5">
            <button class="btn btn-primary " type="submit" style="width: 120px;height: 70px">SUBMIT</button>
        </div>
        </div>
        </div>

    </form>

    <script>
        document.addEventListener("DOMContentLoaded", function () {
            var webpMachine = new webpHero.WebpMachine()
            webpMachine.polyfillDocument()
        });
    </script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script>
        $(".event").click(function () {
            var event = $(this).attr("event");


            var status = $(this).attr("status");
            if (status == 0) {
                $(".event" + event + "_div").addClass("border_none");
                $(this).text("Cancel");
                $(this).addClass('btn_dan');
                $(this).attr("status", 1);
                $(".img" + event).removeClass("img_none");
                $("#eventid" + event).prop('checked', true);

            } else {
                $(this).text("Join Now");
                $(this).removeClass('btn_dan');
                $(".event" + event + "_div").removeClass("border_none");
                $(this).attr("status", 0);
                $(".img" + event).addClass("img_none");
                $("#eventid" + event).prop('checked', false);


            }


        });
    </script>


@endsection


