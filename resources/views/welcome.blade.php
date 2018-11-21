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
                {{--
                <div class="col-md-6 col-sm-6 col-xs-12">
                     <div class="home-title text-center">
                      <h3>Employeur</h3>
                         <p>Vous souhaitez publier des offres de stages pour les étudiants en droit.</p>
                         <a href="freelancer-search.html" class="btn btn-primary">Créer votre annonce</a>
                    </div>
                </div>
                      <div class="col-md-6 col-sm-6 col-xs-12">
                          <div class="home-title rightside text-center">
                          <h3>Étudiant</h3>
                              <p>Vous recherchez un stage pour vos études de droit.</p>
                              <a href="job-search.html" class="btn btn-primary">Voir les offres de stages</a>
                          </div>
                      </div>
                --}}
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