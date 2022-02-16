@extends('dashboard.layouts.main')
@section('rsvp')
    active
@endsection
@section('css')

    <link rel="stylesheet" href="{{asset('css/style2.css')}}">

    <style>

        ul {
            list-style: none;
        }

        input[type=radio] {
            height: 20px;
            width: 20px;
            vertical-align: middle;
        }
        .group-card:hover .rejis-btn{
           color: #00A1B5;
        }

    </style>



@endsection


@section('heading')
    Rsvs {{$rsvp->f_name}}
@endsection

@section('title')
    Arabian Fashion
@endsection

@section('content')


    <main>
        <div class="content-body">
            <section id="column-selectors">
                <div class="row">
                    <div class="col-12">
                        <div class="card p-2">
                            <div class="row">

                                <div class="col-lg-12 mb-2">
                                    <h3>Profile</h3>
                                </div>

                                <div class="col-lg-3 mb-2">

                                    <lable>Name:</lable>
                                    <lable class="font-weight-bold">{{$rsvp->f_name}}{{' '}}{{$rsvp->l_name}}</lable>
                                </div>

                                <div class="col-lg-3 mb-2">

                                    <lable>Phone:</lable>
                                    <lable class="font-weight-bold">{{$rsvp->phone}}</lable>
                                </div>

                                <div class="col-lg-3 mb-2">

                                    <lable>Email:</lable>
                                    <lable class="font-weight-bold">{{$rsvp->email}}</lable>
                                </div>

                                <div class="col-lg-3 mb-2">

                                    <lable>Category:</lable>
                                    <lable class="font-weight-bold">{{$rsvp->category}}</lable>
                                </div>

                                <div class="col-lg-12 mb-2">
                                    <h3>Social Media Link</h3>
                                </div>

                                <div class="col-lg-3 mb-2">

                                    <lable>Insta:</lable>
                                    <lable class="font-weight-bold">{{$rsvp->insta}}</lable>
                                </div>

                                <div class="col-lg-3 mb-2">

                                    <lable>LinkIn:</lable>
                                    <lable class="font-weight-bold">{{$rsvp->linkedin}}</lable>
                                </div>

                                <div class="col-lg-12 mb-2">
                                    <h3>Someone else Detail</h3>

                                    @foreach($travelling as $travelling)
                                        <a href="{{url('admin/rsvp/'.$travelling->id.'')}}">  <button class="btn btn-primary">{{$travelling->f_name}}</button>
                                        </a>
                                    @endforeach

                                    @if($parent!=null)
                                        <a href="{{url('admin/rsvp/'.$parent->id.'')}}">  <button class="btn btn-primary">{{$parent->f_name}}</button>
                                        </a>
                                        @endif
                                </div>


                            </div>
                        </div>


                        <div class="card p-2">
                            <div class="row">
                                @foreach($events as $event)
                                    <div class="col-xl-4 col-lg-6  col-md-8 col-sm-8 col-12">
                                        <div class="group-card event{{$event->event->id}}_div mx-0 mx-sm-0">
                                            <div class="group-card-img">
                                                <img src="{{asset('uploads/appsetting/'.$event->event->image.'')}}"/>

                                                <button class="rejis-btn" disabled event="{{$event->id}}" status="0">
                                                    status: {{$event->status}}
                                                </button>

                                            </div>

                                            <div class="group-card-body">
                                                @if($event->status=='pending')
                                                    <div class="row">
                                                        <div class="col-6">

                                                            <a data-toggle="modal" data-target="#exampleModal{{$event->id}}" >
                                                                <button class="btn btn-primary w-100"
                                                                    event="{{$event->id}}" status="0">
                                                                Approve
                                                            </button></a>

                                                        </div>

                                                        <div class="modal fade" id="exampleModal{{$event->id}}" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                                            <div href="{{url("admin/rsvp/$event->id/Approved")}}" class="modal-dialog" role="document">
                                                                <div class="modal-content">
                                                                    <div class="modal-header">
                                                                        <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
                                                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                                            <span aria-hidden="true">&times;</span>
                                                                        </button>
                                                                    </div>
                                                                    <div class="modal-body">

                                                                        <form action="{{url("admin/rsvp/$event->id/Approved")}}" method="post">
                                                                            @csrf

                                                                        <select name="seat"  class="form-control" id="">
                                                                            <option value="">{{'please select seat'}}</option>
                                                                            @foreach($event->event->seat as $seat)
                                                                                <option value="{{$seat->seat}}">{{$seat->seat}}</option>
                                                                            @endforeach

                                                                        </select>

                                                                       <p class="my-1" style="text-align: center">OR</p>

                                                                        <input type="text" name="seatname" class="form-control" placeholder="seat name">
                                                                    </div>
                                                                    <div class="modal-footer">
                                                                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                                                        <button type="submit" class="btn btn-primary">Save changes</button>
                                                                        </form>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>

                                                        <div class="col-6">

                                                            <a href="{{url("admin/rsvp/$event->id/Rejected")}}">

                                                                <button class="btn btn-danger w-100"
                                                                    event="{{$event->id}}" status="0">
                                                                Reject
                                                                </button></a>

                                                        </div>
                                                    </div>

                                                @endif


                                                <h4 class="event-name text-center"><img
                                                        src="{{asset('image/verified-icon-png-11.jpg')}}"
                                                        class="img{{$event->event->id}} img_none" width="30"
                                                        alt=""> {{$event->event->name}}</h4>
                                                    <h3 class="text-center"><svg style="width: 20px" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512"><!--! Font Awesome Pro 6.0.0 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) Copyright 2022 Fonticons, Inc. --><path d="M445.1 338.6l-14.77-32C425.1 295.3 413.7 288 401.2 288H46.76C34.28 288 22.94 295.3 17.7 306.6l-14.77 32c-4.563 9.906-3.766 21.47 2.109 30.66S21.09 384 31.1 384l.001 112c0 8.836 7.164 16 16 16h32c8.838 0 16-7.164 16-16V384h256v112c0 8.836 7.164 16 16 16h31.1c8.838 0 16-7.164 16-16L416 384c10.91 0 21.08-5.562 26.95-14.75S449.6 348.5 445.1 338.6zM111.1 128c0-29.48 16.2-54.1 40-68.87L151.1 256h48l.0092-208h48L247.1 256h48l.0093-196.9C319.8 73 335.1 98.52 335.1 128l-.0094 128h48.03l-.0123-128c0-70.69-57.31-128-128-128H191.1C121.3 0 63.98 57.31 63.98 128l.0158 128h47.97L111.1 128z"/></svg> {{$event->seat}}</h3>
                                                <div class="row py-2">
                                                    <div class="col-4">
                                                        <p>
                                                            <i class="far fa-calendar-alt mx-1"></i>{{$event->event->start}}
                                                        </p>
                                                    </div>
                                                    <div class="col-8 ">
                                                        <p class="text-end"><i
                                                                class="far fa-clock mx-1"></i>{{$event->event->starttime}}
                                                            to {{$event->event->endtime}}</p>
                                                    </div>
                                                    <p class="event-dis mb-0 text-center pr-2 pl-2">
                                                        {{$event->event->desc}}
                                                    </p>
                                                </div>

                                            </div>
                                        </div>
                                    </div>
                                @endforeach
                            </div>
                        </div>



                        <div class="card p-2">
                            <div class="row text-center">
                                <a class="m-auto" href="{{url("admin/send/pdf/$rsvp->id")}}">   <button class="btn btn-primary m-auto">Send Event detail Now</button>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
        </div>
    </main>


@endsection
