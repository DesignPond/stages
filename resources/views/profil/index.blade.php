@extends('layouts.master')
@section('content')

    <div class="section lb">
        <div class="container">
            <div class="row">
                <div class="sidebar col-md-4">
                    <div class="post-padding clearfix">
                        <ul class="nav nav-pills nav-stacked">
                            <li class="{{ Request::is('profil') ? 'active':'' }}"><a href="{{ url('profil') }}"><span class="fas fa-user"></span>  Edit Profile</a></li>
                            <li class="{{ Request::is('profil/jobs') ? 'active':'' }}"><a href="{{ url('profil/jobs') }}"><span class="fas fa-briefcase"></span>  Manage Jobs</a></li>
                            <li class="{{ Request::is('profil/create') ? 'active':'' }}"><a href="{{ url('profil/create') }}"><span class="fas fa-star"></span>  Submit a Jobs</a></li>
                            <li><a href="{{ url('password/reset  ') }}"><span class="fas fa-lock"></span>  Change Password</a></li>
                            <li><a href="#"><span class="fas fa-power-off"></span>  Logout</a></li>
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
    <div class="job-tab" style="display: block;">
        <div class="row">
            <div class="col text-center">
                <?php
                echo '<pre>';
                print_r( \Auth::user()->jobs);
                echo '</pre>';
                ?>
            </div>
        </div>
    </div>

@stop