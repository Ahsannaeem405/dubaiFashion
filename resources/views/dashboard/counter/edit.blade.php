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
   Edit Counters
@endsection

@section('title')
    Arabian Fashion
@endsection

@section('content')

    <section id="validation">
        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-header">
                        <h4 class="card-title">Edit Counter </h4>
                    </div>
                    <div class="card-content">
                        <div class="card-body">
                            <form action="{{url('admin/counter/update/'.$counter->id.'')}}" method="post" >

                            @csrf


                                    <div class="row">


                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label for="lastName3">
                                                  First  Name
                                                </label>
                                                <input type="text" class="form-control " value="{{$counter->f_name}}" required id="lastName3" name="f_name">
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label for="lastName3">
                                                    Last  Name
                                                </label>
                                                <input type="text" class="form-control " value="{{$counter->l_name}}" required id="lastName3" name="l_name">
                                            </div>
                                        </div>



                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label for="emailAddress5">
                                                    Email
                                                </label>
                                                <input type="email" class="form-control " value="{{$counter->email}}"  required id="emailAddress5" name="email">
                                            </div>
                                        </div>



                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label for="emailAddress67">
                                                    phone
                                                </label>
                                                <input type="number" class="form-control " value="{{$counter->phone}}" required id="emailAddress67" name="phone">
                                            </div>
                                        </div>


                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label for="emailAddress67">
                                                    address
                                                </label>
                                                <input type="text" class="form-control " value="{{$counter->address}}" required id="emailAddress67" name="address">
                                            </div>
                                        </div>


                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label for="age">
                                                    password
                                                </label>
                                                <input type="password" class="form-control "  id="age" name="password">
                                            </div>
                                        </div>

                                        <div class="col-md-12">
                                            <div class="form-group">
                                                <label for="emailAddress67">
                                                    About
                                                </label>
                                                <textarea  class="form-control " required id="emailAddress67" name="about">{{$counter->about}}</textarea>
                                            </div>
                                        </div>


                                        <div class="col-lg-12 ">

                                            <button style="float: right" class="btn btn-primary" type="submit">update</button>

                                        </div>

                                    </div>




                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>


@endsection
