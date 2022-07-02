@extends('layouts.app')

@section('content')
{{--    <div class="progress-bar progress-bar-striped progress-bar-animated bg-green" style="width: 10%">40%</div>--}}
    <br>

    <div class="row">

        <div class="card">
            <div class="card-header">
                <h3 class="card-title">MDH Recruitment Portal</h3>
                <div class="card-options ">

                </div>
            </div>
            <div class="card-body">
                <div class="row">
                    <div class="col-md-8">
                        <span class=" mb-1">Hi {{ $applicant->first_name.' '.$applicant->last_name }}, Welcome to MDH Recruitment Portal</span>
                        <hr>
{{--                        <h3 class="mb-3">About MDH</h3>--}}
                        <p class="mb-0 fs-12">
                            MDH is an indigenous-Tanzanian non-Governmental
                            Organisation with   principal place of business in Tanzania. MDH's central office is located at  Mikocheni B, along Mwai Kibaki road in Dar es Salaam.</p>
                        <hr>
                        {{--                        <h3 class="mb-3">About MDH</h3>--}}
                        <p class="mb-0 fs-12">
                            MDH’s work is primarily in public health service and research in Tanzania and the world at large. MDH seeks to mobilize and engage a team of skilled, experienced and motivated Tanzanian professionals to work in collaboration with the government and  with other local and international experts to address public health priorities through evidence based interventions.

                    </div>
                    <div class="col-md-4 mt-4 mt-sm-0">
                        <div class="chart-circle overflow-hiddene  mt-sm-0 mb-0 text-left" data-value="0.75" data-thickness="8" data-color="#2d66f7"><canvas width="256" height="256" style="height: 128px; width: 128px;"></canvas>
                            <div class="chart-circle-value text-center "><h1 class="mb-0">75%</h1><small>Your Account Details</small></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>
@endsection
