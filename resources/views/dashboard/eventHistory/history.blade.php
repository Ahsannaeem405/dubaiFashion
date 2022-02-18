@extends('dashboard.layouts.main')
@section('eventHistory')
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
    Event {{$event->name}}
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
                                                <th>User Name</th>
                                                <th>User Email</th>
                                                <th>User Phone</th>
                                                <th>Event date</th>
                                                <th>Event Time</th>
                                                <th>Status</th>

                                            </tr>
                                            </thead>
                                            <tbody>
                                            @php $count=1; @endphp
                                            @foreach($event->booking as $event)
@if(isset($event->user->f_name))
                                                <tr>
                                                    <td>{{$count++}}</td>
                                                    <td>{{$event->user->f_name}}</td>
                                                    <td>{{$event->user->email}}</td>
                                                    <td>{{$event->user->phone}}</td>
                                                    <td>{{$event->event->start}}</td>
                                                    <td>{{Carbon\Carbon::parse($event->event->starttime)->format('h:i a')}} {{' - '}} {{Carbon\Carbon::parse($event->event->endtime)->format('h:i a')}}</td>
                                                    <td>


                                                        @if($event->join==1)
                                                            <button class="btn btn-success">JOINED</button>
                                                            @else
                                                            <button class="btn btn-danger">JOIN</button>
                                                        @endif
                                                    </td>

                                                </tr>
@endif




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
