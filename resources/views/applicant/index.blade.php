@extends('layouts.app')

@section('content')

    @if($applicant)
        @include('applicant.form.edit')
    @else
    @include('applicant.form.create')
    @endif
@endsection
