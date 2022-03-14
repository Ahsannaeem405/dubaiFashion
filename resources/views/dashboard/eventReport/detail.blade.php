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
    Events Detail
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
                                                <th>category</th>

                                            </tr>
                                            </thead>
                                            <tbody>
                                            @php $count=1; @endphp
                                            @foreach($events as $event)
                                                @if(isset($event->user->f_name))
                                                <tr>
                                                    <td>{{$count++}}</td>
                                                    <td>{{$event->user->f_name}}</td>
                                                    <td>{{$event->user->email}}</td>
                                                    <td>{{$event->user->phone}}</td>
                                                    <td>{{$event->user->category}}</td>


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
