@extends('layouts.app')

@section('content')

<form action="" method="post">

    @csrf

    <div class="col-lg-12 col-md-12">

        <div class="card">

            <div class="card-header" style="background-color: rgb(238, 241, 248)">
                <div class="row text-center">
                    <span class="col-12 text-center font-weight-bold">Skills</span>
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
                                    <label class="form-label">Category</label>

                                    <select class="form-control custom-select select2" name="district_name">
                                        <option value="Select">--Select--</option>

                                    </select>

                                    <div class="alert-danger">{{$errors->first('name')}} </div>

                                </div>
                            </div>

                            <div class="col-sm-6 col-md-4">
                                <div class="form-group">
                                    <label class="form-label">Skill</label>
                                    <select class="form-control custom-select select2" name="district_name">
                                        <option value="Select">--Select--</option>

                                    </select>
                                    <div class="alert-danger">{{$errors->first('name')}} </div>

                                </div>
                            </div>
                            <div class="col-sm-6 col-md-4">
                                <div class="form-group">
                                    <label class="form-label">Skill Level</label>
                                    <select class="form-control custom-select select2" name="district_name">
                                        <option value="Select">--Select--</option>

                                    </select>
                                    <div class="alert-danger">{{$errors->first('email')}} </div>
                                </div>
                            </div>
                            <div class="col-sm-12 ">
                                <div class="form-group">
                                    <label class="form-label">Remarks</label>
                                    <input type="text" class="form-control" name="remarks">
                                    <div class="alert-danger">{{$errors->first('text')}} </div>
                                </div>
                            </div>


                            <div class="col-sm-6 col-md-4">
                                <div class="form-group">
                                    <label class="form-label">Other skills</label>
                                    
                                    <button class="custom-switch-indicator"></button>
                                    <div class="alert-danger">{{$errors->first('skills')}} </div>

                                </div>
                            </div>
                            <div class="col-sm-6 ">
                                <div class="form-group">
                                    <button type="submit" onclick="sweetalertclick()" class="btn btn-danger">Add Skills</button>

                                </div>
                            </div>

                        </div>
                    </div>



                </div>
            </div>

</form>




        
                    <div class="table-responsive">

                        <div class="panel-body tabs-menu-body">
                            <div class="tab-content">
                                <div class="tab-pane active" id="tab5">
                                    <div class="card-body">
                                        <div class="table-responsive">
                                            <table id="one" class="table table-striped table-bordered" style="width:100%">
                                                <thead>
                                                    <tr>
                                                        <th class="wd-15p">Skill category</th>
                                                        <th class="wd-15p">Skill</th>
                                                        <th class="wd-15p">Skill Level</th>
                                                        <th class="wd-15p">Remark</th>
                                                        <th class="wd-10p">Edit</th>
                                                        <th class="wd-25p">Delete</th>
                                                        
                                                    </tr>
                                                </thead>
                                                
                                                </tbody>
                                            </table>
                                        </div>
                                    </div>

                                </div>

                   
          

        @endsection