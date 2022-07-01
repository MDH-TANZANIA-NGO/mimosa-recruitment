@extends('layouts.app')

@section('content')

    @if($other)
        @include('otherInfo.form.edit')
    @else
        @include('otherInfo.form.create')
    @endif
@endsection
