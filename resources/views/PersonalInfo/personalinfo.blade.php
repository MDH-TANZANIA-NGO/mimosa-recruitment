@extends('layouts.app')

@section('content')

<form action="" method="post">

    @csrf

    <div class="col-lg-12 col-md-12">
        <div class="card">
            <div class="card-header" style="background-color: rgb(238, 241, 248)">
                <div class="row text-center">
                    <span class="col-12 text-center font-weight-bold">Personal Information</span>
                </div>

                <div class="card-options ">
                    <a href="#" class="card-options-collapse" data-toggle="card-collapse"><i class="fe fe-chevron-up"></i></a>
                </div>

            </div>

            <div class="card-body">
                <div class="row">
                    <div class="card-body">
                        <div class="row">
                            <div class="col-sm-6 col-md-4">
                                <div class="form-group">
                                    <label class="form-label">Title</label>
                                    <input type="text" class="form-control" name="name">
                                    <div class="alert-danger">{{$errors->first('name')}} </div>
                                </div>
                            </div>
                            <div class="col-sm-6 col-md-4">
                                <div class="form-group">
                                    <label class="form-label">First Name</label>
                                    <input type="text" class="form-control" name="name">
                                    <div class="alert-danger">{{$errors->first('name')}} </div>

                                </div>
                            </div>
                            <div class="col-sm-6 col-md-4">
                                <div class="form-group">
                                    <label class="form-label">Surname</label>
                                    <input type="email" class="form-control" name="email">
                                    <div class="alert-danger">{{$errors->first('email')}} </div>
                                </div>
                            </div>
                            <div class="col-sm-6 col-md-4">
                                <div class="form-group">
                                    <label class="form-label">Middle Name</label>
                                    <input type="text" class="form-control" name="name">
                                    <div class="alert-danger">{{$errors->first('name')}} </div>
                                </div>
                            </div>
                            <div class="col-sm-6 col-md-4">
                                <div class="form-group">
                                    <label class="form-label">Gender</label>
                                    <select class="form-control custom-select select2" name="district_name">
                                        <option value="Select">--Select--</option>
                                        <option value="Select">Male</option>
                                        <option value="Select">Female</option>
                                    </select>
                                    <div class="alert-danger">{{$errors->first('gender')}} </div>
                                </div>
                            </div>

                            <div class="col-sm-6 col-md-4">
                                <div class="form-group">
                                    <label class="form-label">Date of Birth</label>
                                    <input type="date" class="form-control" name="date">
                                    <div class="alert-danger">{{$errors->first('date')}} </div>
                                </div>
                            </div>

                            <div class="col-sm-6 col-md-4">
                                <div class="form-group">
                                    <label class="form-label">Mobile Number</label>
                                    <input type="number" class="form-control" name="gender">
                                    <div class="alert-danger">{{$errors->first('gender')}} </div>
                                </div>
                            </div>

                            <div class="col-sm-6 col-md-4">
                                <div class="form-group">
                                    <label class="form-label">Alternative Number</label>
                                    <input type="number" class="form-control" name="gender">
                                    <div class="alert-danger">{{$errors->first('gender')}} </div>
                                </div>
                            </div>
                            <div class="col-sm-6 col-md-4">
                                <div class="form-group">
                                    <label class="form-label">Nationality</label>
                                    <input type="text" class="form-control" name="nationality">
                                    <div class="alert-danger">{{$errors->first('nationality')}} </div>
                                </div>
                            </div>

                        </div>
                    </div>

                    <button type="submit" onclick="sweetalertclick()" class="btn btn-danger" style="margin-left:40%;">Update</button>

                </div>
            </div>
        </div>
</form>


@endsection
