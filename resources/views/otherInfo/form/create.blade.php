{!! Form::open(['route' => 'other.store', 'method' => 'post',]) !!}
<!-- Large Modal -->
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
                <div class="col-md-4">
                    <div class="form-group ">
                        {!! Form::label('language1', __("First Language"),['class'=>'form-label','required_asterik']) !!}
                        {!! Form::select('language1', $languages, null, ['class' =>'form-control select2 custom-select', 'placeholder' => __('label.select') , 'aria-describedby' => '', 'required']) !!}
                        {!! $errors->first('language1', '<span class="badge badge-danger">:message</span>') !!}
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="form-group ">
                        {!! Form::label('language2', __("Second Language"),['class'=>'form-label','required_asterik']) !!}
                        {!! Form::select('language2', $languages, null, ['class' =>'form-control select2 custom-select', 'placeholder' => __('label.select') , 'aria-describedby' => '', 'required']) !!}
                        {!! $errors->first('language2', '<span class="badge badge-danger">:message</span>') !!}
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="form-group ">
                        {!! Form::label('language3', __("Third Language (Optional)"),['class'=>'form-label','required_asterik']) !!}
                        {!! Form::select('language3', $languages, null, ['class' =>'form-control select2 custom-select', 'placeholder' => __('label.select') , 'aria-describedby' => '']) !!}
                        {!! $errors->first('language3', '<span class="badge badge-danger">:message</span>') !!}
                    </div>
                </div>
            </div>
            &nbsp;
            <div class="row">
                <div class="col-md-4">
                    <div class="form-group ">
                        {!! Form::label('language4', __("Fourth Language (Optional)"),['class'=>'form-label','required_asterik']) !!}
                        {!! Form::select('language4', $languages, null, ['class' =>'form-control select2 custom-select', 'placeholder' => __('label.select') , 'aria-describedby' => '']) !!}
                        {!! $errors->first('language4', '<span class="badge badge-danger">:message</span>') !!}
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="form-group">
                        {!! Form::label('current_salary', __("Current Salary"),['class'=>'form-label','required_asterik']) !!}
                        {!! Form::text('current_salary',old('current_salary'),['class' => 'form-control', 'placeholder' => 'Please Enter your current salary']) !!}
                        {!! $errors->first('current_salary', '<span class="badge badge-danger">:message</span>') !!}
                    </div>
                </div>

                <div class="col-md-4">
                    <div class="form-group">
                        {!! Form::label('current_benefits', __("Current Benefits"),['class'=>'form-label','required_asterik']) !!}
                        {!! Form::textArea('current_benefits',old('current_benefits'),['class' => 'form-control', 'rows' => 3, 'placeholder' => 'Please Enter your current salary']) !!}
                        {!! $errors->first('current_benefits', '<span class="badge badge-danger">:message</span>') !!}
                    </div>
                </div>
            </div>
            &nbsp;
            <div class="row">
                <div class="col-md-4">
                    <div class="form-group">
                        <label class="custom-switch">
                            <input type="checkbox" name="relocation" class="custom-switch-input">
                            <span class="custom-switch-indicator"></span>
                            <span class="custom-switch-description">Willing to relocate</span>
                        </label>
                    </div>
                </div>

                <div class="col-md-4">
                    <div class="form-group">
                        <label class="custom-switch">
                            <input type="checkbox" name="travel" class="custom-switch-input">
                            <span class="custom-switch-indicator"></span>
                            <span class="custom-switch-description">Willing to travel</span>
                        </label>
                    </div>
                </div>

                <div class="col-md-4">
                    <div class="form-group">
                        {!! Form::label('availability', __("Availability in Days"),['class'=>'form-label','required_asterik']) !!}
                        {!! Form::text('availability',old('availability'),['class' => 'form-control', 'placeholder' => 'Availability in Days']) !!}
                        {!! $errors->first('availability', '<span class="badge badge-danger">:message</span>') !!}
                    </div>
                </div>
            </div>
            &nbsp
            <div class="row">
                <div class="col-12">
                    <div class="form-group">
                        {!! Form::label('professional_membership', __("Professional Membership"),['class'=>'form-label','required_asterik']) !!}
                        {!! Form::textArea('professional_membership',old('Professional Membership'),['class' => 'form-control', 'rows' => 4, 'placeholder' => 'Professional Membership (Include membership number if any)']) !!}
                        {!! $errors->first('professional_membership', '<span class="badge badge-danger">:message</span>') !!}
                    </div>
                </div>
            </div>
            &nbsp
            <div class="row">
                <div class="col-12">
                    <div style="text-align: center;">
                        <button type="submit" class="btn btn-azure">Add Other Information </button>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
{!! Form::close() !!}



