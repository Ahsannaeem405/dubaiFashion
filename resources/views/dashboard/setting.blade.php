@extends('dashboard.layouts.main')

@section('setting')
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
    Setting
@endsection

@section('title')
    Arabian Fashion
@endsection

@section('content')



    <main>
        <div class="content-body">
            <!-- Dashboard Ecommerce Starts -->
            <section id="dashboard-ecommerce">
                <div class="row">
                    <div class=" col-12">
                        <div class="card">

                            <div class="card-content p-1">

                                <form action="{{url('admin/setting/update')}}" method="post">
                                    @csrf
                                    <div class="col-lg-6">
                                        <lable class="mb-1">Register page heading</lable>
                                        <input type="text" class="form-control" name="heading" value="{{$setting->heading}}">
                                    </div>


                                    <div class="col-lg-12 my-4 text-center">

                                        <input type="submit" class="btn btn-primary"  value="{{'UPDATE'}}" >
                                    </div>



                                </form>

                            </div>
                        </div>
                    </div>

                </div>



            </section>
            <!-- Dashboard Ecommerce ends -->

        </div>
    </main>


@endsection
