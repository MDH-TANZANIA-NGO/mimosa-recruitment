@extends('layouts.app')

@section('content')
    <div class="progress-bar progress-bar-striped progress-bar-animated bg-green" style="width: 10%">40%</div>
    <br>

    <div class="row">
        <div class="col-4 col-sm-4 col-lg-3">
            <a href="{{route('address.index')}}">
                <div class="card">
                    <div class="card-body text-center">
                        <div class="h2 m-0"><i class="mdi mdi-account-card-details multiple-outline text-primary"></i></div>
                        <div class="text-muted mb-0">Personal Details</div>
                    </div>
                </div>
            </a>

        </div>

        <div class="col-4 col-sm-4 col-lg-3">
            <a href="{{route('education.index')}}">
                <div class="card">
                    <div class="card-body text-center">
                        <div class="h2 m-0"><i class="zmdi zmdi-graduation-cap multiple-outline text-primary"></i></div>
                        <div class="text-muted mb-0">Education</div>
                    </div>
                </div>
            </a>

        </div>
        <div class="col-4 col-sm-4 col-lg-3">
            <a href="{{route('experience.index')}}">
                <div class="card">
                    <div class="card-body text-center">
                        <div class="h2 m-0"><i class="mdi mdi-account-network multiple-outline text-primary"></i></div>
                        <div class="text-muted mb-0">Working experience</div>
                    </div>
                </div>
            </a>

        </div>

        <div class="col-4 col-sm-4 col-lg-3">
            <a href="#">
                <div class="card">
                    <div class="card-body text-center">
                        <div class="h2 m-0"><i class="mdi mdi-attachment multiple-outline text-primary"></i></div>
                        <div class="text-muted mb-0">Attachments</div>
                    </div>
                </div>
            </a>

        </div>
    </div>
@endsection
