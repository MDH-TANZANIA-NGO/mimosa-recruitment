@extends('layouts.app')

@section('content')

<form action="" method="post">

    @csrf

    <div class="col-lg-12 col-md-12">

        <div class="card">

            <div class="card-header" style="background-color: rgb(238, 241, 248)">
                <div class="row text-center">
                    <span class="col-12 text-center font-weight-bold">Other Information</span>
                </div>

                <div class="card-options ">
                    <a href="#" class="card-options-collapse" data-toggle="card-collapse"><i class="fe fe-chevron-up"></i></a>
                </div>

            </div>

            <div class="card-body">
                <div class="row">


                    <div class="card-body">
                        <div class="row">

                            <div class="col-md-4">
                                <div class="form-group">
                                    <label class="form-label">Language1:</label>
                                    <select class="form-control custom-select select2" name="language">
                                        <option value="Select">--Select--</option>

                                    </select>
                                    <div class="alert-danger">{{$errors->first('language')}} </div>

                                </div>
                            </div>

                            <div class="col-md-4">
                                <div class="form-group">
                                    <label class="form-label">Language2:</label>
                                    <select class="form-control custom-select select2" name="language">
                                        <option value="Select">--Select--</option>

                                    </select>
                                    <div class="alert-danger">{{$errors->first('language')}} </div>

                                </div>
                            </div>

                            <div class="col-md-4">
                                <div class="form-group">
                                    <label class="form-label">Language3:</label>
                                    <select class="form-control custom-select select2" name="language">
                                        <option value="Select">--Select--</option>

                                    </select>
                                    <div class="alert-danger">{{$errors->first('language')}} </div>

                                </div>
                            </div>

                            <div class="col-md-4">
                                <div class="form-group">
                                    <label class="form-label">Language4:</label>
                                    <select class="form-control custom-select select2" name="language">
                                        <option value="Select">--Select--</option>

                                    </select>
                                    <div class="alert-danger">{{$errors->first('language')}} </div>

                                </div>
                            </div>



                            <div class="col-md-5">
                                <div class="form-group">
                                    <label class="form-label">Current Gross Salary:</label>
                                    <input type="number" class="form-control" placeholder="0.00" name="title">
                                    <div class="alert-danger">{{$errors->first('title')}}
                                    </div>

                                </div>
                            </div>

                            <div class="col-md-5">
                                <div class="form-group">
                                    <label class="form-label">Currency:</label>
                                    <select class="form-control custom-select select2" name="language">
                                        <option value="Select">--Select--</option>

                                    </select>
                                    <div class="alert-danger">{{$errors->first('title')}} </div>

                                </div>
                            </div>




                            <div class="col-sm-6 col-md-3">
                                <div class="form-group">
                                    <label class="form-label">current Benefits: </label>
                                    <input type="text" class="form-control" placeholder="Work Place" name="work_place">
                                    <div class="alert-danger">{{$errors->first('work_place')}} </div>
                                </div>
                            </div>



                            <div class="col-sm-6 col-md-4">
                                <div class="form-group">
                                    <label class="form-label">Willing to Relocate</label>

                                    <button class="custom-switch-indicator"></button>
                                    <div class="alert-danger">{{$errors->first('skills')}} </div>

                                </div>
                            </div>
                            <div class="col-sm-6 col-md-4">
                                <div class="form-group">
                                    <label class="form-label">Willing to Travel</label>

                                    <button class="custom-switch-indicator"></button>
                                    <div class="alert-danger">{{$errors->first('skills')}} </div>

                                </div>
                            </div>


                            <div class="col-md-5">
                                <div class="form-group">
                                    <label class="form-label">Notice Period(in Days):</label>
                                    <input type="number" class="form-control" placeholder="0" name="title">
                                    <div class="alert-danger">{{$errors->first('title')}} </div>

                                </div>
                            </div>


                            <div class="col-md-5">
                                <div class="form-group">
                                    <label class="form-label">Professional Memberships(Include Membership No.)</label>
                                    <input type="text" class="form-control" placeholder="Title" name="title">
                                    <div class="alert-danger">{{$errors->first('title')}} </div>

                                </div>
                            </div>

                        </div>
                    </div>

                    <button type="submit" onclick="sweetalertclick()" class="btn btn-danger" style="margin-left:40%;">Update</button>

                </div>
            </div>

</form>


@endsection