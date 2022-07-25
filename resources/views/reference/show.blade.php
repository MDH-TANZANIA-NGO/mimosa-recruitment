@extends('layouts.app')
@section('content')
    {!! Form::open(['route' => ['reference.update', $reference], 'enctype'=>"multipart/form-data", 'method' => 'put',]) !!}
    <!-- Large Modal -->
        <div class="col-lg-12 col-md-12">
            <div class="card">
                <div class="card-header" style="background-color: rgb(238, 241, 248)">
                    <div class="row text-center">
                        <span class="col-12 text-center font-weight-bold">Referee Details (Professional)</span>
                    </div>

                    <div class="card-options ">
                        <a href="#" class="card-options-collapse" data-toggle="card-collapse"><i class="fe fe-chevron-up"></i></a>
                    </div>
                </div>

                <div class="card-body">
                    <div class="row">
                        <div class="col-md-4" >
                            <label class="form-label">Full Name</label>
                            <input class="form-control" name="name" value="{{$reference->name}}" required></input>
                            @error('name')
                            <span class="invalid-feedback" role="alert"><strong>{{ $message }}</strong> </span>
                            @enderror
                        </div>
                        <div class="col-md-4" >
                            <label class="form-label">Position/Title</label>
                            <input class="form-control" name="position" value="{{$reference->position}}" required></input>
                            @error('position')
                            <span class="invalid-feedback" role="alert"><strong>{{ $message }}</strong> </span>
                            @enderror
                        </div>
                        <div class="col-md-4">
                            <div class="form-group ">
                                {!! Form::label('reference_type_cv_id', __("Reference Type"),['class'=>'form-label','required_asterik']) !!}
                                {!! Form::select('reference_type_cv_id', $references, $reference->reference_type_cv_id, ['class' =>'form-control select2-show-vacancy', 'placeholder' => __('label.select') , 'aria-describedby' => '', 'required']) !!}
                                {!! $errors->first('reference_type_cv_id', '<span class="badge badge-danger">:message</span>') !!}
                            </div>
                        </div>
                    </div>
                    &nbsp;
                    <div class="row">
                        <div class="col-md-4">
                            <div class="form-group ">
                                {!! Form::label('country_id', __("Country"),['class'=>'form-label','required_asterik']) !!}
                                {!! Form::select('country_id', $countries, $reference->country_id, ['class' =>'form-control select2-show-vacancy', 'placeholder' => __('label.select') , 'aria-describedby' => '', 'required']) !!}
                                {!! $errors->first('country_id', '<span class="badge badge-danger">:message</span>') !!}
                            </div>
                        </div>

                        <div class="col-md-4">
                            <div class="form-group ">
                                {!! Form::label('region_id', __("Region"),['class'=>'form-label','required_asterik']) !!}
                                {!! Form::select('region_id', $regions, $reference->region_id, ['class' =>'form-control select2-show-vacancy', 'placeholder' => __('label.select') , 'aria-describedby' => '', 'required']) !!}
                                {!! $errors->first('region_id', '<span class="badge badge-danger">:message</span>') !!}
                            </div>
                        </div>

                        <div class="col-md-4">
                            <div class="form-group ">
                                {!! Form::label('gender_cv_id', __("label.gender"),['class'=>'form-label','required_asterik']) !!}
                                {!! Form::select('gender_cv_id', $gender, $reference->gender_cv_id, ['class' =>'form-control select2 custom-select', 'placeholder' => __('label.select') , 'aria-describedby' => '', 'required']) !!}
                                {!! $errors->first('gender_cv_id', '<span class="badge badge-danger">:message</span>') !!}
                            </div>
                        </div>
                    </div>
                    &nbsp;
                    <div class="row">
                        <div class="col-md-4">
                            <div class="form-group">
                                {!! Form::label('phone', __("label.phone"),['class'=>'form-label','required_asterik']) !!}
                                {!! Form::text('phone', $reference->phone, ['class' => 'form-control', 'placeholder' => 'ie. 0712311311','required']) !!}
                                {!! $errors->first('phone', '<span class="badge badge-danger">:message</span>') !!}
                            </div>
                        </div>

                        <div class="col-md-4" >
                            <label class="form-label">Organisation/Company Name</label>
                            <input class="form-control" name="organisation_name" value="{{$reference->organisation_name}}" required></input>
                            @error('organisation_name')
                            <span class="invalid-feedback" role="alert"><strong>{{ $message }}</strong> </span>
                            @enderror
                        </div>

                        <div class="col-md-4" >
                            <label class="form-label">Address</label>
                            <textarea class="form-control" name="address" placeholder="Address" rows="2" required>{{$reference->address}}</textarea>
                            @error('address')
                            <span class="invalid-feedback" role="alert"><strong>{{ $message }}</strong> </span>
                            @enderror
                        </div>

                    </div>
                    &nbsp;
                    <div class="row">
                        <div class="col-md-4" >
                            <label class="form-label">Email</label>
                            <input class="form-control" name="email" value="{{$reference->email}}" required></input>
                            @error('email')
                            <span class="invalid-feedback" role="alert"><strong>{{ $message }}</strong> </span>
                            @enderror
                        </div>
                    </div>

                    &nbsp
                    &nbsp;
                    <div class="row">

                        <div class="col-12">
                            <div style="text-align: center;">
                                <button type="submit" class="btn btn-azure"> Update Reference Details</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    {!! Form::close() !!}
@endsection

