@extends('dashboard.layouts.main')
@section('eventReport')
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
    Events Report
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

                                                <th>Name</th>
                                                <th>Event date</th>
                                                <th>Event Time</th>
                                                <th>Description</th>
                                                <th>Members</th>
                                                <th>Action</th>
                                            </tr>
                                            </thead>
                                            <tbody>
                                            @php $count=1; @endphp
                                            @foreach($events as $event)

                                                <tr>
                                                    <td>{{$count++}}</td>
                                                    <td>{{$event->name}}</td>
                                                    <td>{{$event->start}}</td>
                                                    <td>{{Carbon\Carbon::parse($event->starttime)->format('h:i a')}} {{' - '}} {{Carbon\Carbon::parse($event->endtime)->format('h:i a')}}</td>
                                                    <td>{{$event->desc}}</td>
                                                    <td>{{count($event->members)}}</td>

                                                    <td>
                                                        <a href="{{url("admin/event/report/$event->id")}}">
                                                            <i style="color: skyblue;font-size: 20px" class="fa fa-eject p-1"></i></a>



                                                    </td>
                                                </tr>




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
