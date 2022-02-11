@extends('dashboard.layouts.main')
@section('event')
    active
@endsection
@section('css')

    <style>

        ul {
            list-style: none;
        }

        input[type=radio] {
            height: 20px;
            width: 20px;
            vertical-align: middle;
        }

    </style>



@endsection


@section('heading')
    Events List
@endsection

@section('title')
    Arabian Fashion
@endsection

@section('content')

    <button data-toggle="modal" data-target="#exampleModal" class="btn btn-outline-primary mb-2"><i class="fa fa-plus"></i> Add Event</button>

    <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Add event</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <form method="post" action="{{url('admin/add/event')}}" enctype="multipart/form-data">
                        @csrf
                        <div class="row">

                            <div class="col-lg-12 mt-2">
                                <lable class="label">Event Image</lable>
                                <input type="file" class="form-control" name="image" required>
                            </div>
                            <div class="col-lg-12 mt-2">
                                <lable class="label">Event name</lable>
                                <input type="text" class="form-control" name="name" required>
                            </div>

                            <div class="col-lg-12 mt-2">
                                <lable class="label">Event start date</lable>
                                <input type="date" class="form-control" name="start" required>
                            </div>

                            <div class="col-lg-12 mt-2">
                                <lable class="label">Event start time</lable>
                                <input type="time" class="form-control" name="starttime" required>
                            </div>

                            <div class="col-lg-12 mt-2">
                                <lable class="label">Event end time</lable>
                                <input type="time" class="form-control" name="endtime" required>
                            </div>

                            <div class="col-lg-12 mt-2">
                                <lable class="label">Description</lable>
                                <textarea  class="form-control" name="desc" required></textarea>
                            </div>

                        </div>


                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                    <button type="submit" class="btn btn-primary">Save</button>
                    </form>
                </div>
            </div>
        </div>
    </div>

    <main>
        <div class="content-body">
            <section id="column-selectors">
                <div class="row">
                    <div class="col-12">
                        <div class="card">
                            <div class="card-header">

                            </div>

                            <div class="card-content">
                                <div class="card-body card-dashboard">

                                    <div class="table-responsive">
                                        <table class="table table-striped dataex-html5-selectors">
                                            <thead>
                                            <tr>
                                                <th>#</th>
                                                <th>Image</th>
                                                <th>Name</th>
                                                <th>Event date</th>
                                                <th>Event Time</th>
                                                <th>Description</th>
                                                <th>Action</th>
                                            </tr>
                                            </thead>
                                            <tbody>
                                            @php $count=1; @endphp
                                            @foreach($events as $event)

                                                <tr>
                                                    <td>{{$count++}}</td>
                                                    <td><img src="{{asset('uploads/appsetting/'.$event->image.'')}}" alt="image" style="width: 100px;height: 100px"></td>
                                                    <td>{{$event->name}}</td>
                                                    <td>{{$event->start}}</td>
                                                    <td>{{Carbon\Carbon::parse($event->starttime)->format('h:i a')}} {{' - '}} {{Carbon\Carbon::parse($event->endtime)->format('h:i a')}}</td>
                                                    <td>{{$event->desc}}</td>

                                                    <td>
                                                        <a href="{{url("admin/seats/$event->id")}}">
                                                            <i style="color: skyblue;font-size: 20px" class="fa fa-chain p-1"></i></a>
                                                        <a onclick="return confirm('Are you sure you want to Remove?');"
                                                           href="{{url("admin/event/del/$event->id")}}">
                                                            <i style="color: red;font-size: 20px" class="fa fa-trash p-1"></i></a>
                                                       <i style="color: blue;font-size: 20px;cursor: pointer" class="fa fa-edit p-1" data-toggle="modal" data-target="#exampleModal{{$event->id}}" ></i>

                                                    </td>
                                                </tr>


                                                <div class="modal fade" id="exampleModal{{$event->id}}" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                                    <div class="modal-dialog" role="document">
                                                        <div class="modal-content">
                                                            <div class="modal-header">
                                                                <h5 class="modal-title" id="exampleModalLabel">update event</h5>
                                                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                                    <span aria-hidden="true">&times;</span>
                                                                </button>
                                                            </div>
                                                            <div class="modal-body">
                                                                <form method="post" action="{{url('admin/update/event/'.$event->id.'')}}" enctype="multipart/form-data">
                                                                    @csrf
                                                                    <div class="row">

                                                                        <div class="col-lg-12 text-center">

                                                                            <img class="mb-1" src="{{asset('uploads/appsetting/'.$event->image.'')}}" style="width: 100px;height: 100px" alt="">

                                                                            <input type="file" class="form-control" name="image" >

                                                                        </div>
                                                                        <div class="col-lg-12 mt-2">
                                                                            <lable class="label">Event name</lable>
                                                                            <input type="text" class="form-control" value="{{$event->name}}" name="name" required>
                                                                        </div>

                                                                        <div class="col-lg-12 mt-2">
                                                                            <lable class="label">Event start date</lable>
                                                                            <input type="date" class="form-control" value="{{$event->start}}" name="start" required>
                                                                        </div>

                                                                        <div class="col-lg-12 mt-2">
                                                                            <lable class="label">Event start time</lable>
                                                                            <input type="time" class="form-control" value="{{$event->starttime}}" name="starttime" required>
                                                                        </div>


                                                                        <div class="col-lg-12 mt-2">
                                                                            <lable class="label">Event end time</lable>
                                                                            <input type="time" class="form-control" value="{{$event->endtime}}" name="endtime" required>
                                                                        </div>

                                                                        <div class="col-lg-12 mt-2">
                                                                            <lable class="label">Description</lable>
                                                                            <textarea  class="form-control" name="desc" required>{{$event->desc}}</textarea>
                                                                        </div>

                                                                    </div>


                                                            </div>
                                                            <div class="modal-footer">
                                                                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                                                <button type="submit" class="btn btn-primary">Save</button>
                                                                </form>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>


                                            @endforeach


                                            </tbody>

                                        </table>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
        </div>
    </main>


@endsection
