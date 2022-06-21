@extends('layouts.app')

@section('content')

    @if($otherInfo)
        @include('otherInfo.form.edit')
    @else
        @include('otherInfo.form.create')
    @endif
@endsection
