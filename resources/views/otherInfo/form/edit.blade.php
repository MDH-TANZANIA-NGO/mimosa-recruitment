{!! Form::open(['route' => 'otherInfo.store', 'method' => 'post',]) !!}
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
                        {!! Form::label('language1', __("Language1"),['class'=>'form-label','required_asterik']) !!}
                        {!! Form::select('language1', $languages, $otherInfo->language1, ['class' =>'form-control select2 custom-select', 'placeholder' => __('label.select') , 'aria-describedby' => '', 'required']) !!}
                        {!! $errors->first('language1', '<span class="badge badge-danger">:message</span>') !!}
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="form-group ">
                        {!! Form::label('language2', __("Language2"),['class'=>'form-label','required_asterik']) !!}
                        {!! Form::select('language2', $languages, $otherInfo->language2, ['class' =>'form-control select2 custom-select', 'placeholder' => __('label.select') , 'aria-describedby' => '', 'required']) !!}
                        {!! $errors->first('language2', '<span class="badge badge-danger">:message</span>') !!}
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="form-group ">
                        {!! Form::label('language3', __("Language3"),['class'=>'form-label','required_asterik']) !!}
                        {!! Form::select('language3', $languages, $otherInfo->language3, ['class' =>'form-control select2 custom-select', 'placeholder' => __('label.select') , 'aria-describedby' => '']) !!}
                        {!! $errors->first('language3', '<span class="badge badge-danger">:message</span>') !!}
                    </div>
                </div>
            </div>
            &nbsp;
            <div class="row">
                <div class="col-md-4">
                    <div class="form-group ">
                        {!! Form::label('language4', __("Language4"),['class'=>'form-label','required_asterik']) !!}
                        {!! Form::select('language4', $languages, $otherInfo->language4, ['class' =>'form-control select2 custom-select', 'placeholder' => __('label.select') , 'aria-describedby' => '']) !!}
                        {!! $errors->first('language4', '<span class="badge badge-danger">:message</span>') !!}
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="form-group">
                        {!! Form::label('current_salary', __("Current Salary"),['class'=>'form-label','required_asterik']) !!}
                        {!! Form::text('current_salary',$otherInfo->current_salary,['class' => 'form-control', 'placeholder' => 'Please Enter your current salary']) !!}
                        {!! $errors->first('current_salary', '<span class="badge badge-danger">:message</span>') !!}
                    </div>
                </div>

                <div class="col-md-4">
                    <div class="form-group">
                        {!! Form::label('current_benefits', __("Current Benefits"),['class'=>'form-label','required_asterik']) !!}
                        {!! Form::textArea('current_benefits',$otherInfo->current_benefits,['class' => 'form-control', 'rows' => 3, 'placeholder' => 'Please Enter your current salary']) !!}
                        {!! $errors->first('current_benefits', '<span class="badge badge-danger">:message</span>') !!}
                    </div>
                </div>
            </div>
            &nbsp;
            <div class="row">
                <div class="col-md-4">
                    <div class="form-group">
                        <label class="custom-switch">
                            <input type="checkbox" name="relocation" {{ $otherInfo->relocation ? 'checked' : ''}} class="custom-switch-input">
                            <span class="custom-switch-indicator"></span>
                            <span class="custom-switch-description">Willing to relocate</span>
                        </label>
                    </div>
                </div>

                <div class="col-md-4">
                    <div class="form-group">
                        <label class="custom-switch">
                            <input type="checkbox" name="travel"  {{ $otherInfo->travel ? 'checked' : ''}} class="custom-switch-input">
                            <span class="custom-switch-indicator"></span>
                            <span class="custom-switch-description">Willing to travel</span>
                        </label>
                    </div>
                </div>

                <div class="col-md-4">
                    <div class="form-group">
                        {!! Form::label('availability', __("Availability in Days"),['class'=>'form-label','required_asterik']) !!}
                        {!! Form::text('availability',$otherInfo->availability,['class' => 'form-control', 'placeholder' => 'Availability in Days']) !!}
                        {!! $errors->first('availability', '<span class="badge badge-danger">:message</span>') !!}
                    </div>
                </div>
            </div>
            &nbsp
            <div class="row">
                <div class="col-12">
                    <div class="form-group">
                        {!! Form::label('professional_membership', __("Professional Membership"),['class'=>'form-label','required_asterik']) !!}
                        {!! Form::textArea('professional_membership',$otherInfo->professional_membership,['class' => 'form-control', 'rows' => 4, 'placeholder' => 'Professional Membership (Include membership number if any)']) !!}
                        {!! $errors->first('professional_membership', '<span class="badge badge-danger">:message</span>') !!}
                    </div>
                </div>
            </div>
            &nbsp
            <div class="row">
                <div class="col-12">
                    <div style="text-align: center;">
                        <button type="submit" class="btn btn-azure">Update Other Information </button>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
{!! Form::close() !!}



