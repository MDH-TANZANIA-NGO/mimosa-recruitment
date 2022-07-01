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
                   @if(!$application_status)
                       <div>
                           {!! Form::open(['route' => 'application.store','enctype'=>"multipart/form-data", 'method' => 'post',]) !!}
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
                                               <label class="form-label">Upload Cover Letter</label>
                                               <input type="file" class="form-control" name="cover_letter" placeholder="Enter the course you study" required></input>
                                               @error('cover_letter')
                                               <span class="invalid-feedback" role="alert"><strong>{{ $message }}</strong> </span>
                                               @enderror
                                           </div>

                                           <div class="col-md-6">
                                               <label class="form-label">Upload Curriculum Vitae</label>
                                               <input type="file" class="form-control" name="cv" placeholder="Enter the course you study" required></input>
                                               @error('cv')
                                               <span class="invalid-feedback" role="alert"><strong>{{ $message }}</strong> </span>
                                               @enderror
                                           </div>
                                           <input type="text" name="adv_uuid" class="hidden" value="{{$_advertisement->uuid}}">
                                           <input type="text" name="hire_requisition_job_id" class="hidden" value="{{$_advertisement->hire_requisition_job_id}}">
                                       </div>
                                   </div>

                               </div>

                           </div>

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
                    @endif
                </div>
@endsection
