<form action="{{route('skills.store')}}" method="post">
    @csrf
    <!-- Large Modal -->
    <div class="col-lg-12 col-md-12">
        <div class="card">
            <div class="card-header" style="background-color: rgb(238, 241, 248)">
                <div class="row text-center">
                    <span class="col-12 text-center font-weight-bold">Skills</span>
                </div>

                <div class="card-options ">
                    <a href="#" class="card-options-collapse" data-toggle="card-collapse"><i class="fe fe-chevron-up"></i></a>
                </div>
            </div>

            <div class="card-body">
                <div class="row">
                    <div class="col-md-3">
                        <div class="form-group ">
                            {!! Form::label('skill_category_id', __("Category"),['class'=>'form-label','required_asterik']) !!}
                            {!! Form::select('skill_category_id', $categories, null, ['class' =>'form-control select2-show-vacancy', 'placeholder' => __('label.select') , 'aria-describedby' => '', 'required']) !!}
                            {!! $errors->first('skill_category_id', '<span class="badge badge-danger">:message</span>') !!}
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group ">
                            {!! Form::label('skill_id', __("Skill"),['class'=>'form-label','required_asterik']) !!}
                            {!! Form::select('skill_id', [], null, ['class' =>'form-control select2-show-vacancy', 'data-placeholder' => __('label.select') , 'aria-describedby' => '','disabled', 'id' =>'skills']) !!}
                            {!! $errors->first('skill_id', '<span class="badge badge-danger">:message</span>') !!}
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="form-group ">
                            {!! Form::label('skill_level_cv_id', __("Skill Level"),['class'=>'form-label','required_asterik']) !!}
                            {!! Form::select('skill_level_cv_id', $skill_levels, null, ['class' =>'form-control select2-show-vacancy', 'placeholder' => __('label.select') , 'aria-describedby' => '', 'required']) !!}
                            {!! $errors->first('skill_level_cv_id', '<span class="badge badge-danger">:message</span>') !!}
                        </div>
                    </div>
                </div>
                &nbsp;
                <div class="row">
                    <div class="col-md-12">
                        <div class="form-group">
                            {!! Form::label('remarks', __("Remarks"),['class'=>'form-label','required_asterik']) !!}
                            {!! Form::textArea('remarks',null, ['class' => 'form-control','rows' => 3, 'placeholder' => 'ie. 0712311311','required']) !!}
                            {!! $errors->first('remarks', '<span class="badge badge-danger">:message</span>') !!}
                        </div>
                    </div>
                </div>
                &nbsp;
                <div class="row">

                    <div class="col-12">
                        <div style="text-align: center;">
                            <button type="submit" class="btn btn-azure"> Add Skills</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</form>
