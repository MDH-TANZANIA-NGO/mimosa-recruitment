@extends('layouts.app')

@section('content')
    <div class="col-lg-12 col-md-12">
        <div class="card">
            <div class="card-header" style="background-color: rgb(238, 241, 248)">
                <div class="row text-center">
                    <span class="col-12 text-center font-weight-bold">List of Practical Experiences</span>
                </div>
                <div class="card-options ">
                    <a href="#" class="card-options-collapse" data-toggle="card-collapse"><i class="fe fe-chevron-up"></i></a>
                </div>
            </div>
    <div class="card-body">
        <div class="row">

            <div class="col-12" >
                <div class="table-responsive">
                    @include('application.datatable.index')
                </div>
            </div>
        </div>
    </div>
    </div>
    </div>
@endsection
