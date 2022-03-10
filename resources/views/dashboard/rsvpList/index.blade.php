@extends('dashboard.layouts.main')
@section('rsvpHistory')
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
    Rsvp's List
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
                                                <th>Email</th>
                                                <th>Phone</th>
                                                <th>Created Date</th>
                                                <th>Action</th>
                                            </tr>
                                            </thead>
                                            <tbody>
                                            @php $count=1; @endphp
                                            @foreach($rsvp as $rsvps)

                                                <tr>
                                                    <td>{{$count++}}</td>
                                                    <td>{{$rsvps->f_name.' '. $rsvps->l_name}}</td>
                                                    <td>{{$rsvps->email}}</td>
                                                    <td>{{$rsvps->phone}}</td>
                                                    <td>{{$rsvps->updated_at}}</td>
                                                    <td>

                                                        <a href="{{url('admin/rsvp/view/list/'.$rsvps->id.'')}}">  <i style="color: blueviolet" class="fa fa-database"></i></a>
                                                        <a href="{{url('admin/rsvp/delete/'.$rsvps->id.'')}}">  <i style="color: red" class="fa fa-trash"></i></a>
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
