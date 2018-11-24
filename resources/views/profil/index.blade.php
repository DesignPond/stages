@extends('layouts.master')
@section('content')

    <div class="section lb">
        <div class="container">
            <div class="row">
                <div class="sidebar col-md-4">
                    <div class="post-padding clearfix">
                        <ul class="nav nav-pills nav-stacked profile-menu">
                            <li class="{{ Request::is('profil') ? 'active':'' }}"><a href="{{ url('profil') }}"><span class="fas fa-user"></span>  Vos informations</a></li>
                            <li class="{{ Request::is('profil/jobs') ? 'active':'' }}"><a href="{{ url('profil/jobs') }}"><span class="fas fa-briefcase"></span>  Vos annonces</a></li>
                            <li class="{{ Request::is('profil/create') ? 'active':'' }}"><a href="{{ url('job/create') }}"><span class="fas fa-star"></span>  Créer un annonce</a></li>
                            <li><a href="{{ url('password/reset  ') }}"><span class="fas fa-lock"></span>  Changer le mot de passe</a></li>
                            <li>
                                <form action="{{ url('logout') }}" method="POST">{{ csrf_field() }}
                                    <button class="btn btn-link btn-xs" type="submit"><span class="fas fa-power-off"></span>  &nbsp;&nbsp;Logout</button>
                                </form>
                            </li>
                        </ul>
                    </div><!-- end widget -->
                </div><!-- end col -->

                <div class="content col-md-8">
                    <div class="post-padding">

                        <!-- Contenu -->
                        @yield('profil')
                        <!-- Fin contenu -->

                    </div><!-- end post-padding -->
                </div><!-- end col -->
            </div><!-- end row -->
        </div><!-- end container -->
    </div>

@stop