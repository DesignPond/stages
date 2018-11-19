<!doctype html>
<html lang="{{ app()->getLocale() }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Job</title>

        <link href="https://fonts.googleapis.com/css?family=Poppins:100,200,300,400,500,600,700,800,900" rel="stylesheet">
        <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.5.0/css/all.css" integrity="sha384-B4dIYHKNBt8Bc12p+WXckhzcICo0wtJAoU8YZTY5qE0Id1GSseTk6S+L3BlXeVIU" crossorigin="anonymous">
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
        <link href="{{ asset('css/style.css') }}" rel="stylesheet">
        <link href="{{ asset('css/responsive.css') }}" rel="stylesheet">
        <link href="{{ asset('css/colors.css') }}" rel="stylesheet">
        <link href="{{ asset('css/suisse.css') }}" rel="stylesheet">
        <link href="{{ asset('css/jquery-jvectormap-2.0.3.css') }}" rel="stylesheet">
        <link href="{{ asset('css/jquery.fancybox.min.css') }}" rel="stylesheet">
    </head>
<body>
    <!-- START SITE -->
    <div id="wrapper">
        <header class="header">
            <div class="container">

                <nav class="navbar navbar-expand-lg">
                    <a class="navbar-brand" href="#"><h1>Stages <span>Droit</span></h1></a>
                    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                    </button>

                    <div class="collapse navbar-collapse" id="navbarSupportedContent">
                        <ul class="navbar-nav mr-auto">
                            <li class="nav-item active">
                                <a class="nav-link" href="{{ url('/') }}">Accueil</a>
                            </li>

                            @auth
                                <li class="nav-item dropdown">
                                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Votre compte</a>
                                    <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                                        <a class="dropdown-item" href="{{ url('profil') }}">Profil</a>
                                        <a class="dropdown-item" href="{{ url('') }}">Vos annonces</a>
                                        <a class="dropdown-item" href="#"><i class="fas fa-lock"></i> &nbsp;Logout</a>
                                    </div>
                                </li>
                            @endauth


                        </ul>
                        <ul class="navbar-nav">
                            @guest
                                <li class="nav-item">
                                    <a class="btn btn-primary" href="{{ url('register') }}">Créer un compte</a>
                                </li>
                            @endguest
                            @auth
                                <li><a class="btn btn-primary" title="" href="#">Créer une annonce</a></li>
                            @endauth
                        </ul>

                    </div>
                </nav>

            </div>
            <!-- end container -->
        </header>
        <!-- end header -->

        <div class="section hero">
            <div class="container">
                <div class="row">
                    <div class="col-md-6 col-sm-6 col-xs-12">
                        <div class="home-title text-center">
                            <h3>Employeur</h3>
                            <p>Vous souhaitez publier des offres de stages pour les étudiants en droit.</p>
                            <a href="freelancer-search.html" class="btn btn-primary">Créer votre annonce</a>
                        </div>
                    </div><!-- end col -->

                    <div class="col-md-6 col-sm-6 col-xs-12">
                        <div class="home-title rightside text-center">
                            <h3>Étudiant</h3>
                            <p>Vous recherchez un stage pour vos études de droit.</p>
                            <a href="job-search.html" class="btn btn-primary">Voir les offres de stages</a>
                        </div>
                    </div><!-- end col -->
                </div><!-- end row -->
            </div><!-- end container -->
        </div><!-- end section -->

        <div class="section lb">
            <div class="container">
                <div class="col">
                    <div id="map"></div>
                    {{--@include('suisse')--}}
                </div>
            </div>
        </div>
        <div class="section lb">
            <div class="container">
                <div class="section-title text-center clearfix mb-4">
                    <h4>Derniers Stages</h4>
                </div>
                <div class="all-jobs job-listing clearfix">

                    @if(!$jobs->isEmpty())
                        @foreach($jobs as $index => $job)
                            <div class="job-tab" style="display: block;">
                                <div class="row">
                                    <div class="col-md-2 col-sm-2 col-xs-12">
                                        <div class="post-media">
                                            <a href="job-single.html">
                                                <?php $illu = asset('illu/0'.array_random([1,2,3,4,5,6,7,8]).'.svg'); ?>
                                                <img src="{{ $illu }}" width="140" height="120" alt="" class="img-responsive img-thumbnail">
                                            </a>
                                        </div><!-- end media -->
                                    </div><!-- end col -->
                                    <div class="col-md-6 col-sm-6 col-xs-12">
                                        <div class="badge badge-{{ $job->badge }}">{{ $job->type->periode }} | {{ $job->type->semaines }}</div>
                                        <h3><a href="job-single.html" title="">{{ $job->title }}</a></h3>
                                        <small>
                                            <span>Publisher : <a href="#">{{ $job->user->name }}</a></span>
                                            <span>Publié : {{ $job->created_at->format('d/m/Y') }}</span>
                                        </small>
                                    </div><!-- end col -->
                                    <div class="col-md-2 col-sm-2 col-xs-12">
                                        <div class="job-meta">
                                            <p><small>{{ $job->user->ville }}</small></p>
                                        </div><!-- end meta -->
                                    </div><!-- end col -->
                                    <div class="col-md-2 col-sm-2 col-xs-12">
                                        <div class="job-meta text-center">
                                            <a data-options='{"arrows" : false}' data-fancybox="details_{{ $job->id }}" data-src="#details_{{ $job->id }}" href="javascript:;" class="btn btn-primary btn-sm btn-block mt-4">Information</a>
                                        </div>
                                    </div><!-- end col -->
                                </div><!-- end row -->

                                @include('detail', ['job' => $job, 'illu' => $illu])

                            </div><!-- end job-tab -->

                        @endforeach
                    @endif

                </div><!-- end alljobs -->
            </div><!-- end container -->
        </div><!-- end section -->

        <div id="sitefooter-wrap" class="stickyfooter">
            <div id="sitefooter" class="container">
                <div id="copyright" class="row">
                    <div class="col">
                        <p>YourJob ® is a designed and registered trademark of <a href="http://psdconverthtml.com">PSD to HTML</a> INC.</p>
                    </div>
                    <div class="col">
                        <ul class="list-inline text-right">
                            <li><a href="#">Terms of Usage</a></li>
                            <li><a href="#">Copyrights</a></li>
                            <li><a href="#">License</a></li>
                            <li><a href="#">Contact</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>

        <div class="dmtop"><i class="fa fa-angle-up"></i></div>

    </div><!-- end wrapper -->
    <!-- /END SITE -->
    <script src="https://code.jquery.com/jquery-3.3.1.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
    <script src="{{ asset('js/jquery-migrate.min.js') }}" defer></script>
    <script src="{{ asset('js/all.js') }}" defer></script>
    <script src="{{ asset('js/jquery.fancybox.min.js') }}" defer></script>
    <script src="{{ asset('js/jquery-jvectormap-2.0.3.min.js') }}" defer></script>
    <script src="{{ asset('js/jquery-jvectormap-ch-merc.js') }}" defer></script>
    <script src="{{ asset('js/custom.js') }}" defer></script>

</body>
</html>
