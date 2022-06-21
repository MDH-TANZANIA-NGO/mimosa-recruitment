{!! Form::open(['route' => ['applicant.update', $applicant], 'method' => 'put',]) !!}
<!-- Large Modal -->
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
                <div class="col-md-4">
                    <div class="form-group ">
                        {!! Form::label('prefix_cv_id', __("Prefix"),['class'=>'form-label','required_asterik']) !!}
                        {!! Form::select('prefix_cv_id', $prefix, $applicant->prefix_cv_id, ['class' =>'form-control select2 custom-select', 'placeholder' => __('label.select') , 'aria-describedby' => '', 'required']) !!}
                        {!! $errors->first('prefix_cv_id', '<span class="badge badge-danger">:message</span>') !!}
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="form-group">
                        {!! Form::label('first_name', __("label.name.first"),['class'=>'form-label','required_asterik']) !!}
                        {!! Form::text('first_name',$applicant->first_name,['class' => 'form-control', 'placeholder' => 'ie. John','required']) !!}
                        {!! $errors->first('first_name', '<span class="badge badge-danger">:message</span>') !!}
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="form-group">
                        {!! Form::label('middle_name', __("label.name.middle"),['class'=>'form-label','required_asterik']) !!}
                        {!! Form::text('middle_name',$applicant->middle_name,['class' => 'form-control', 'placeholder' => 'ie. Someone','required']) !!}
                        {!! $errors->first('middle_name', '<span class="badge badge-danger">:message</span>') !!}
                    </div>
                </div>
            </div>
            &nbsp;
            <div class="row">
                <div class="col-md-4">
                    <div class="form-group">
                        {!! Form::label('last_name', __("label.name.last"),['class'=>'form-label','required_asterik']) !!}
                        {!! Form::text('last_name',$applicant->last_name,['class' => 'form-control', 'placeholder' => 'ie. Doe','required']) !!}
                        {!! $errors->first('last_name', '<span class="badge badge-danger">:message</span>') !!}
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="form-group">
                        {!! Form::label('dob', __("label.dob"),['class'=>'form-label','required_asterik']) !!}
                        {!! Form::date('dob',$applicant->dob,['class' => 'form-control', 'placeholder' => '','required', 'max'=>'2004-12-31']) !!}
                        {!! $errors->first('dob', '<span class="badge badge-danger">:message</span>') !!}
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="form-group ">
                        {!! Form::label('gender_cv_id', __("label.gender"),['class'=>'form-label','required_asterik']) !!}
                        {!! Form::select('gender_cv_id', $gender, $applicant->gender_cv_id, ['class' =>'form-control select2 custom-select', 'placeholder' => __('label.select') , 'aria-describedby' => '', 'required']) !!}
                        {!! $errors->first('gender_cv_id', '<span class="badge badge-danger">:message</span>') !!}
                    </div>
                </div>
            </div>
            &nbsp;
            <div class="row">
                <div class="col-md-4">
                    <div class="form-group ">
                        {!! Form::label('country_id', __("Country"),['class'=>'form-label','required_asterik']) !!}
                        {!! Form::select('country_id', $countries, $applicant->country_id, ['class' =>'form-control select2-show-search', 'placeholder' => __('label.select') , 'aria-describedby' => '', 'required']) !!}
                        {!! $errors->first('country_id', '<span class="badge badge-danger">:message</span>') !!}
                    </div>
                </div>

                <div class="col-md-4">
                    <div class="form-group">
                        {!! Form::label('national_id', __("National ID"),['class'=>'form-label','required_asterik']) !!}
                        {!! Form::number('national_id',$applicant->national_id,['class' => 'form-control', 'placeholder' => '19991219141010000322','required']) !!}
                        {!! $errors->first('national_id', '<span class="badge badge-danger">:message</span>') !!}
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="form-group">
                        {!! Form::label('phone', __("label.phone"),['class'=>'form-label','required_asterik']) !!}
                        {!! Form::number('phone',$applicant->phone,['class' => 'form-control', 'placeholder' => 'ie. 0712311311','required']) !!}
                        {!! $errors->first('phone', '<span class="badge badge-danger">:message</span>') !!}
                    </div>
                </div>
            </div>
            &nbsp;
            <div class="row">
                <div class="col-12">
                    <div style="text-align: center;">
                        <button type="submit" class="btn btn-azure">Update Personal Information </button>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
{!! Form::close() !!}



