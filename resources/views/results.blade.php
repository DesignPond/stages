@extends('layouts.master')
@section('content')

    @if(\Request::is('search'))
        @include('partials.search')
    @endif

    @include('listing')

@stop