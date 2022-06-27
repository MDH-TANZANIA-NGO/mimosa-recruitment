@extends('layouts.app')
@section('content')
    <div class="align-content-center" style="background-color: rgb(238, 241, 248); height: 40px;">
        <div class="row text-center" style="font-size: large">
            <span class="col-12 text-center font-weight-bold" style="margin-top: 10px"><b>Job Description </b></span>
        </div>
    </div>
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header d-flex justify-content-between">
                    <h3 class="card-title"> {{ $_advertisement->title }} </h3>
                    <div class="card-title">
                        Number: <span> {{ $_advertisement->number }} </span>
                    </div>
                </div>
                <div class="card-body">
                    <ul class="demo-accordion accordionjs m-0" data-active-index="false">
                        Department: <span> {!! $_advertisement->description !!} </span>
                    </ul>
                    <div>
                        {!! Form::open(['route' => 'vacancy.store', 'enctype'=>"multipart/form-data", 'method' => 'put',]) !!}
                        <!-- Large Modal -->
                        <div class="col-lg-12 col-md-12">
                            <div class="card">
                                <div class="card-header" style="background-color: rgb(238, 241, 248)">
                                    <div class="row text-center">
                                        <span class="col-12 text-center font-weight-bold">Upload CV and cover letter to apply for this job</span>
                                    </div>

                                    <div class="card-options ">
                                        <a href="#" class="card-options-collapse" data-toggle="card-collapse"><i class="fe fe-chevron-up"></i></a>
                                    </div>
                                </div>

                                <div class="card-body">
                                    <div class="row">
                                        <div class="col-md-6" >
                                            <label class="form-label">Select Document Type</label>
                                            <select name="document_type_cv_id" id="select-level" class="form-control custom-select">
                                                <option value=""  disabled selected hidden>Select Level</option>
                                                @foreach($documents as $document)
                                                    <option value="{{ $document->id }}">{{$document->name}}</option>
                                                @endforeach
                                            </select>
                                            @error('document_type_cv_id')
                                            <span class="invalid-feedback" role="alert"><strong>{{ $message }}</strong> </span>
                                            @enderror
                                        </div>

                                        <div class="col-md-6" >
                                            <label class="form-label">Upload Certificate</label>
                                            <input type="file" class="form-control" name="certificate" placeholder="Enter the course you study" required></input>
                                            @error('certificate')
                                            <span class="invalid-feedback" role="alert"><strong>{{ $message }}</strong> </span>
                                            @enderror
                                        </div>
                                    </div>
                                    </div>
                                    &nbsp;

                                    </div>

                                    </div>
                                    &nbsp;

                                    <div class="row">
                                        <div class="col-12">
                                            <div style="text-align: center;">
                                                <button type="submit" class="btn btn-azure"> Apply</button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        {!! Form::close() !!}
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
