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

    <div class="sectionnr nopadding wb">
        <div class="container">
            <form class="submit-form customform">
                <div class="row">
                    <div class="col-md-3 col-sm-6 col-xs-12">
                        <div class="input-group">
                            <div class="input-group-prepend">
                                <span class="input-group-text" id="search"><i class="fa fa-search"></i></span>
                            </div>
                            <input type="text" class="form-control" placeholder="search" aria-label="search" aria-describedby="search">
                        </div>
                    </div><!-- end col -->

                    <div class="col-md-3 col-sm-6 col-xs-12">
                        <div class="input-group">
                            <span class="input-group-addon" id="basic-addon1"><i class="fa fa-map-o"></i></span>
                            <input type="text" class="form-control" placeholder="All Locations" aria-describedby="basic-addon1">
                        </div>
                    </div><!-- end col -->

                    <div class="col-md-3 col-sm-6 col-xs-12">
                        <select class="form-control">
                            <option value="1">Looking SEO Expert</option>
                            <option>Looking Web Designer</option>
                        </select>
                    </div><!-- end col -->

                    <div class="col-md-3 col-sm-6 col-xs-12">
                        <button class="btn btn-primary btn-block">Search Freelancer</button>
                    </div><!-- end col -->
                </div><!-- end row -->

                <div class="row listcheckbox">
                    <div class="col-md-9">
                        <ul class="list-inline">
                            <li class="checkbox checkbox-primary">
                                <input id="checkbox_qu_01" type="checkbox" class="styled">
                                <label for="checkbox_qu_01"><small>Freelancer</small>
                                </label>
                            </li>
                            <li class="checkbox checkbox-primary">
                                <input id="checkbox_qu_02" type="checkbox" class="styled">
                                <label for="checkbox_qu_02"><small>Part Time</small>
                                </label>
                            </li>
                            <li class="checkbox checkbox-primary">
                                <input id="checkbox_qu_03" type="checkbox" class="styled">
                                <label for="checkbox_qu_03"><small>Full Time</small>
                                </label>
                            </li>
                            <li class="checkbox checkbox-primary">
                                <input id="checkbox_qu_04" type="checkbox" class="styled">
                                <label for="checkbox_qu_04"><small>Temporary</small>
                                </label>
                            </li>
                            <li class="checkbox checkbox-primary">
                                <input id="checkbox_qu_05" type="checkbox" class="styled">
                                <label for="checkbox_qu_05"><small>Partnership</small>
                                </label>
                            </li>
                        </ul>
                    </div>
                    <div class="col-md-3 text-right">
                        <a href="#" class="readmore">View All</a>
                    </div>
                </div><!-- end row -->
            </form>
        </div><!-- end container -->
    </div>

    <div class="section lb pb-6">
        <div class="container">
            <div class="section-title text-center clearfix mb-4">
                <h4>Trouver un stage</h4>
            </div>
            <div class="col">
                @include('suisse', ['jobs' => $jobs])
            </div>
        </div>
    </div>

    <div id="wrapper_listing"></div>

@stop