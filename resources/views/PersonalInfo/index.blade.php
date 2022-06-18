@extends('layouts.app')

@section('content')


<div class="card-body">
    <div class="panel panel-primary">


        <div class=" tab-menu-heading card-header" style="background-color: rgb(238, 241, 248)">
            <div class="tabs-menu1 ">
                <!-- Tabs -->

            </div>

            <div class="page-rightheader ml-auto d-lg-flex d-non pull-right">
                <div class="btn-group mb-0">
                    <a href="personal.create"> <i class="fa fa-plus mr-2"></i>Create Personal Details</a>
                </div>
            </div>

        </div>




    </div>


    <div class="panel-body tabs-menu-body">
        <div class="tab-content">
            <div class="tab-pane active" id="tab5">
                <div class="card-body">
                    <div class="table-responsive">
                        <table id="one" class="table table-striped table-bordered" style="width:100%">
                            <thead>
                                <tr>
                                    <th class="wd-15p">#</th>
                                    <th class="wd-15p">Title</th>
                                    <th class="wd-15p">First Name</th>
                                    <th class="wd-10p">Sur Name</th>
                                    <th class="wd-25p">Middle Name</th>
                                    <th class="wd-25p">Gender</th>
                                   
                                    <th class="wd-25p">Mobile Number</th>
                                    <th class="wd-25p">Alternative Number</th>
                                  
                                    <th class="wd-25p">Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach($personal as $data)
                                <tr>

                                    <td>{{$data->id}}</td>
                                    <td>{{$data->title}}</td>
                                    <td>{{$data->first_name}}</td>
                                    <td> {{$data->sur_name}}</td>
                                    <td> {{$data->middle_name}}</td>
                                    <td>{{$data->gender}}</td>
                                   
                                    <td>{{$data->mobile_number}}</td>
                                   
                                    <td>{{$data->nationality}}</td>


                                    <td>
                                        <a href="{{ route('personal.edit',$data->id) }}"><i class="fa fa-pencil"></i></a>
                                        &nbsp;
                                        &nbsp;
                                        &nbsp;

                                        <a onclick="return myFunction();" href="{{ route('personal.delete',$data->id) }}"><i class="fa fa-trash"></i></a>

                                    </td>

                                </tr>
                                @endforeach
                                <script>
                                    function myFunction() {
                                        if (!confirm("Are You Sure to delete this"))
                                            event.preventDefault();
                                    }
                                </script>

                            </tbody>
                        </table>
                    </div>
                </div>

            </div>



            @endsection