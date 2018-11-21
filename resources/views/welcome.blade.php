@extends('layouts.master')
@section('content')

    <div class="section hero">
        <div class="container">
            <div class="row">
                <div class="col">
                    <div class="home-title text-center">
                        <h3>Offres de  stages  pratiques dans le cursus de Master of Law de la Faculté de droit de l’Université de Neuchâtel.</h3>
                    </div>
                </div><!-- end col -->
            </div><!-- end row -->
        </div><!-- end container -->
    </div><!-- end section -->

    @include('partials.search')

    <div class="section lb pb-6">
        <div class="container">
            <div class="section-title text-center clearfix mb-2">
                <h4>Trouver un stage par canton</h4>
            </div>
            <div class="col">
                @include('suisse', ['jobs' => $jobs])
                <div id="loading"><img src="{{ asset('images/loading.svg') }}"></div>
            </div>
        </div>
    </div>
    <div id="wrapper_listing"></div>

@stop