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
    Seats List
@endsection

@section('title')
    Arabian Fashion
@endsection

@section('content')

    <button data-toggle="modal" data-target="#exampleModal" class="btn btn-outline-primary mb-2"><i
            class="fa fa-plus"></i> Add Seat
    </button>

    <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
         aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Add seat</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <form method="post" action="{{url('admin/add/seat/'.$id.'')}}" enctype="multipart/form-data">
                        @csrf
                        <div class="row">


                            <div class="col-lg-12 ">
                                <lable class="label">seat name</lable>
                                <input type="text" class="form-control" name="name" required>
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

                                                <th>Name</th>
                                                <th>Creadted Date</th>

                                                <th>Action</th>
                                            </tr>
                                            </thead>
                                            <tbody>
                                            @php $count=1; @endphp
                                            @foreach($seats as $seat)

                                                <tr>
                                                    <td>{{$count++}}</td>
                                                    <td>{{$seat->seat}}</td>

                                                    <td>{{$seat->created_at}}</td>
                                                    <td>

                                                        <a onclick="return confirm('Are you sure you want to Remove?');"
                                                           href="{{url("admin/seat/del/$seat->id")}}">
                                                            <i style="color: red;font-size: 20px"
                                                               class="fa fa-trash p-1"></i></a>
                                                        <i style="color: blue;font-size: 20px;cursor: pointer"
                                                           class="fa fa-edit p-1" data-toggle="modal"
                                                           data-target="#exampleModal{{$seat->id}}"></i>

                                                    </td>
                                                </tr>


                                                <div class="modal fade" id="exampleModal{{$seat->id}}" tabindex="-1"
                                                     role="dialog" aria-labelledby="exampleModalLabel"
                                                     aria-hidden="true">
                                                    <div class="modal-dialog" role="document">
                                                        <div class="modal-content">
                                                            <div class="modal-header">
                                                                <h5 class="modal-title" id="exampleModalLabel">update
                                                                    seat</h5>
                                                                <button type="button" class="close" data-dismiss="modal"
                                                                        aria-label="Close">
                                                                    <span aria-hidden="true">&times;</span>
                                                                </button>
                                                            </div>
                                                            <div class="modal-body">
                                                                <form method="post"
                                                                      action="{{url('admin/update/seat/'.$seat->id.'')}}"
                                                                      enctype="multipart/form-data">
                                                                    @csrf
                                                                    <div class="row">


                                                                        <div class="col-lg-12 ">
                                                                            <lable class="label">Seat name</lable>
                                                                            <input type="text" class="form-control"
                                                                                   value="{{$seat->seat}}" name="name"
                                                                                   required>
                                                                        </div>


                                                                    </div>


                                                            </div>
                                                            <div class="modal-footer">
                                                                <button type="button" class="btn btn-secondary"
                                                                        data-dismiss="modal">Close
                                                                </button>
                                                                <button type="submit" class="btn btn-primary">Save
                                                                </button>
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
