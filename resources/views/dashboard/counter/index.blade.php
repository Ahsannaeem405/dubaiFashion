@extends('dashboard.layouts.main')
@section('counter')
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
    Counters List
@endsection

@section('title')
   Arabian Fashion
@endsection

@section('content')

    <a href="{{url('admin/add/counter')}}"><button class="btn btn-outline-primary mb-2"><i class="fa fa-plus"></i> Add Counter</button></a>
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
                                                <th>Address</th>
                                                <th>Created Date</th>
                                                <th>Action</th>
                                            </tr>
                                            </thead>
                                            <tbody>
                                            @php $count=1; @endphp
@foreach($counter as $counters)

                                            <tr>
                                                <td>{{$count++}}</td>
                                                <td>{{$counters->f_name.' '. $counters->l_name}}</td>
                                                <td>{{$counters->email}}</td>
                                                <td>{{$counters->phone}}</td>
                                                <td>{{$counters->address}}</td>
                                                <td>{{$counters->created_at}}</td>
                                                <td>
                                                    <a onclick="return confirm('Are you sure you want to Remove?');" href="{{url("admin/counter/del/$counters->id")}}"><i style="color: red;font-size: 20px" class="fa fa-trash p-2"></i></a>
                                                    <a  href="{{url("admin/counter/edit/$counters->id")}}"><i style="color: blue;font-size: 20px" class="fa fa-edit p-2"></i></a></td>
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
