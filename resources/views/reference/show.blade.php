@extends('layouts.app')
@section('content')
    {!! Form::open(['route' => ['experience.update', $experience], 'method' => 'put']) !!}        @csrf
        <!-- Large Modal -->
        <div class="col-lg-12 col-md-12">
            <div class="card">
                <div class="card-header" style="background-color: rgb(238, 241, 248)">
                    <div class="row text-center">
                        <span class="col-12 text-center font-weight-bold">Practical Experience</span>
                    </div>

                    <div class="card-options ">
                        <a href="#" class="card-options-collapse" data-toggle="card-collapse"><i class="fe fe-chevron-up"></i></a>
                    </div>

                </div>

                <div class="card-body">
                    <div class="row">
                        <div class="col-md-6" >
                            <label class="form-label">Organisation/Company Name</label>
                            <input class="form-control" name="organisation_name" value="{{$experience->organisation_name}}" required></input>
                            @error('organisation_name')
                            <span class="invalid-feedback" role="alert"><strong>{{ $message }}</strong> </span>
                            @enderror
                        </div>

                        <div class="col-md-6" >
                            <label class="form-label">Position Held</label>
                            <input class="form-control" name="position" value="{{$experience->position}}" required></input>
                            @error('position')
                            <span class="invalid-feedback" role="alert"><strong>{{ $message }}</strong> </span>
                            @enderror
                        </div>

                    </div>
                    &nbsp;
                    <div class="row">
                        <div class="col-md-6" >
                            <label class="form-label">Summary of duties performed</label>
                            <textarea class="form-control" name="responsibilities" rows="2" required>{{$experience->responsibilities}}</textarea>
                            @error('responsibilities')
                            <span class="invalid-feedback" role="alert"><strong>{{ $message }}</strong> </span>
                            @enderror
                        </div>

                        <div class="col-md-6" >
                            <label class="form-label">Reason For Leaving</label>
                            <textarea class="form-control" name="reason_for_leaving" rows="2"  required>{{$experience->reason_for_leaving}}</textarea>
                            @error('reason_for_leaving')
                            <span class="invalid-feedback" role="alert"><strong>{{ $message }}</strong> </span>
                            @enderror
                        </div>
                    </div>
                    &nbsp;
                    <div class="row">
                        <div class="col-md-4" >
                            <label class="form-label">Supervisor's Name</label>
                            <input class="form-control" name="supervisor_name" value="{{$experience->supervisor_name}}" required></input>
                            @error('supervisor_name')
                            <span class="invalid-feedback" role="alert"><strong>{{ $message }}</strong> </span>
                            @enderror
                        </div>

                        <div class="col-md-4" >
                            <label class="form-label">Supervisor's Email</label>
                            <input class="form-control" name="supervisor_email" value="{{$experience->supervisor_email}}" required></input>
                            @error('supervisor_email')
                            <span class="invalid-feedback" role="alert"><strong>{{ $message }}</strong> </span>
                            @enderror
                        </div>

                        <div class="col-md-4" >
                            <label class="form-label">Supervisor Phone</label>
                            <input class="form-control" name="supervisor_phone" value="{{$experience->supervisor_phone}}" required></input>
                            @error('supervisor_phone')
                            <span class="invalid-feedback" role="alert"><strong>{{ $message }}</strong> </span>
                            @enderror
                        </div>

                    </div>
                    &nbsp;
                    <div class="row">
                        <div class="col-md-4" >
                            <label class="form-label">Start Date</label>
                            <div class="input-group">
                                <div class="input-group-prepend">
                                    <div class="input-group-text">
                                        <i class="fa fa-calendar tx-16 lh-0 op-6"></i>
                                    </div>
                                </div><input class="form-control" name="start_year" value="{{$experience->start_year}}" type="date" required>
                            </div>
                            @error('start_year')
                            <span class="invalid-feedback" role="alert"><strong>{{ $message }}</strong> </span>
                            @enderror
                        </div>
                        <div class="col-md-4">
                            <div class="form-group" style="margin-top: 10%">
                                <label class="custom-switch">
                                    <input type="checkbox" name="is_current"  {{ $experience->is_current ? 'checked' : ''}} class="custom-switch-input" id="current" checked>
                                    <span class="custom-switch-indicator"></span>
                                    <span class="custom-switch-description">Current work?</span>
                                </label>
                            </div>
                        </div>
                        <div class="col-md-4 hidden" id="endDate" >
                            <label class="form-label">End Date</label>
                            <div class="input-group">
                                <div class="input-group-prepend">
                                    <div class="input-group-text">
                                        <i class="fa fa-calendar tx-16 lh-0 op-6"></i>
                                    </div>
                                </div><input class="form-control" name="end_year" value="{{$experience->end_year}}" type="date">
                            </div>
                            @error('end_year')
                            <span class="invalid-feedback" role="alert"><strong>{{ $message }}</strong> </span>
                            @enderror
                        </div>

                    </div>

                    &nbsp
                    &nbsp;
                    <div class="row">

                        <div class="col-12">
                            <div style="text-align: center;">
                                <button type="submit" class="btn btn-azure"> Update Practical Experience Details</button>
                            </div>
                        </div>

                    </div>

                </div>
            </div>
        </div>
    {!! Form::close() !!}
@endsection

@push('after-scripts')
    <script>
        $(document).ready(function() {
            var current = $("#current");

            current.click(function() {
                if ($(this).is(":checked")) {
                    $("#endDate").hide();
                } else {
                    $("#endDate").show();
                }
            });
        });
    </script>
@endpush
