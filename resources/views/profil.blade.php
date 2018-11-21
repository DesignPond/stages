@extends('layouts.master')
@section('content')
    <div class="section lb">
        <div class="container">
            <div class="row">
                <div class="sidebar col-md-4">
                    <div class="post-padding clearfix">
                        <ul class="nav nav-pills nav-stacked">
                            <li class="active"><a href="employer-dashboard.html"><span class="fas fa-user"></span>  Edit Profile</a></li>
                            <li><a href="employer-manage-jobs.html"><span class="fas fa-briefcase"></span>  Manage Jobs</a></li>
                            <li><a href="employer-submit-job.html"><span class="fas fa-star"></span>  Submit a Jobs</a></li>
                            <li><a href="employer-change-password.html"><span class="fas fa-lock"></span>  Change Password</a></li>
                            <li><a href="#"><span class="fas fa-power-off"></span>  Logout</a></li>
                        </ul>
                    </div><!-- end widget -->
                </div><!-- end col -->

                <div class="content col-md-8">
                    <div class="post-padding">

                        <form id="submit" class="submit-form">

                            <div class="row">
                                <div class="col-md-6 col-sm-12">
                                    <label class="control-label">Nom de l'entreprise</label>
                                    <input type="text" class="form-control" name="name" placeholder="">
                                </div>

                                <div class="col-md-6 col-sm-12">
                                    <label class="control-label">Email</label>
                                    <input type="text" name="email" class="form-control" placeholder="">
                                </div>
                            </div>

                            <hr class="invis">

                            <div class="row">
                                <div class="col-md-6 col-sm-12">
                                    <label class="control-label">Adresse</label>
                                    <input type="text" class="form-control" placeholder="" name="rue">
                                </div>
                                <div class="col-md-6 col-sm-12">
                                    <label class="control-label">NPA</label>
                                    <input type="text" class="form-control" placeholder="" name="npa">
                                </div>
                            </div><!-- end row -->

                            <hr class="invis">

                            <div class="row">
                                <div class="col-md-6 col-sm-12">
                                    <label class="control-label">Complément d'adresse</label>
                                    <input type="text" name="complement" class="form-control" placeholder="">
                                </div>
                                <div class="col-md-6 col-sm-12">
                                    <label class="control-label">CP</label>
                                    <input type="text" name="cp" class="form-control" placeholder="">
                                </div>
                            </div><!-- end row -->

                            <hr class="invis">

                            <div class="row">
                                <div class="col-md-6 col-sm-12">
                                    <label class="control-label">Téléphone</label>
                                    <input type="text" name="telephone" class="form-control" placeholder="">
                                </div>
                                <div class="col-md-6 col-sm-12">
                                    <label class="control-label">Fax</label>
                                    <input type="text" name="fax" class="form-control" placeholder="">
                                </div>
                            </div><!-- end row -->

                            <hr class="invis">

                            <div class="row">
                                <div class="col-md-12 col-sm-12">
                                    <label class="control-label">Votre entreprise est présent sur les média sociaux</label>
                                    <textarea name="social" class="form-control" placeholder=""></textarea>
                                </div>
                            </div><!-- end row -->

                            <hr class="invis">

                            <div class="row">
                                <div class="col-md-6 col-sm-12">
                                    <label class="control-label">Site internet</label>
                                    <input type="text" class="form-control" placeholder="http://psdconverthtml.com">
                                </div>
                                <div class="col-md-6 col-sm-12">

                                </div>
                            </div><!-- end row -->

                            <hr class="invis">

                            <button class="btn btn-primary">Update Profile</button>
                        </form>
                    </div><!-- end post-padding -->

                    <div class="post-padding">

                        <div class="row">
                            <div class="col-md-12">
                                <div class="table-responsive job-table">
                                    <table id="mytable" class="table table-bordred table-striped">
                                        <thead>
                                        <tr>
                                            <th>Job Title</th>
                                            <th>Freelancer</th>
                                            <th>Price</th>
                                            <th>Action</th>
                                        </tr>
                                        </thead>
                                        <tbody>
                                        <tr>
                                            <td>
                                                <h4>
                                                    <a href="#">Hiring Online English Teachers</a><br>
                                                    <small>Expired date : 21.12.2016</small> <small>Last update : 11.12.2016</small>
                                                </h4>
                                            </td>
                                            <td><a href="#">Martin Denson</a></td>
                                            <td>$31.00</td>
                                            <td>
                                                <span data-placement="top" data-toggle="tooltip" title="" data-original-title="Approve"><button class="btn btn-success btn-xs"><i class="fa fa-check"></i></button></span>
                                                <span data-placement="top" data-toggle="tooltip" title="" data-original-title="Remove"><button class="btn btn-danger btn-xs"><i class="fa fa-trash"></i></button></span>
                                            </td>
                                        </tr>

                                        <tr>
                                            <td>
                                                <h4><a href="#">Looking blog writer for our blog</a><br>
                                                    <small>Expired date : 21.12.2016</small> <small>Last update : 11.12.2016</small>
                                                </h4>
                                            </td>
                                            <td><a href="#">John DOE</a></td>
                                            <td>$775.00</td>
                                            <td>
                                                <span data-placement="top" data-toggle="tooltip" title="" data-original-title="Approve"><button class="btn btn-success btn-xs"><i class="fa fa-check"></i></button></span>
                                                <span data-placement="top" data-toggle="tooltip" title="" data-original-title="Remove"><button class="btn btn-danger btn-xs"><i class="fa fa-trash"></i></button></span>
                                            </td>
                                        </tr>

                                        <tr>
                                            <td>
                                                <h4><a href="#">Development Team Lead (Group Wide Technology)</a><br>
                                                    <small>Expired date : 21.12.2016</small> <small>Last update : 11.12.2016</small>
                                                </h4>
                                            </td>
                                            <td><a href="#">Patrick Jane</a></td>
                                            <td>$12.00</td>
                                            <td>
                                                <span data-placement="top" data-toggle="tooltip" title="" data-original-title="Approve"><button class="btn btn-success btn-xs"><i class="fa fa-check"></i></button></span>
                                                <span data-placement="top" data-toggle="tooltip" title="" data-original-title="Remove"><button class="btn btn-danger btn-xs"><i class="fa fa-trash"></i></button></span>
                                            </td>
                                        </tr>

                                        <tr>
                                            <td>
                                                <h4><a href="#">Make my website responsive device compatible</a><br>
                                                    <small>Expired date : 21.12.2016</small> <small>Last update : 11.12.2016</small>
                                                </h4>
                                            </td>
                                            <td><a href="#">Lisbon Terrasa</a></td>
                                            <td>$441.00</td>
                                            <td>
                                                <span data-placement="top" data-toggle="tooltip" title="" data-original-title="Approve"><button class="btn btn-success btn-xs"><i class="fa fa-check"></i></button></span>
                                                <span data-placement="top" data-toggle="tooltip" title="" data-original-title="Remove"><button class="btn btn-danger btn-xs"><i class="fa fa-trash"></i></button></span>
                                            </td>
                                        </tr>

                                        <tr>
                                            <td>
                                                <h4><a href="#">Looking Graphic Designer (Logo + UI)</a><br>
                                                    <small>Expired date : 21.12.2016</small> <small>Last update : 11.12.2016</small>
                                                </h4>
                                            </td>
                                            <td><a href="#">Martin Denson</a></td>
                                            <td>$55.00</td>
                                            <td>
                                                <span data-placement="top" data-toggle="tooltip" title="" data-original-title="Approve"><button class="btn btn-success btn-xs"><i class="fa fa-check"></i></button></span>
                                                <span data-placement="top" data-toggle="tooltip" title="" data-original-title="Remove"><button class="btn btn-danger btn-xs"><i class="fa fa-trash"></i></button></span>
                                            </td>
                                        </tr>

                                        <tr>
                                            <td>
                                                <h4><a href="#">Are you Typography Expert?</a><br>
                                                    <small>Expired date : 21.12.2016</small> <small>Last update : 11.12.2016</small>
                                                </h4>
                                            </td>
                                            <td><a href="#">Jenny Martines</a></td>
                                            <td>$31.00</td>
                                            <td>
                                                <span data-placement="top" data-toggle="tooltip" title="" data-original-title="Approve"><button class="btn btn-success btn-xs"><i class="fa fa-check"></i></button></span>
                                                <span data-placement="top" data-toggle="tooltip" title="" data-original-title="Remove"><button class="btn btn-danger btn-xs"><i class="fa fa-trash"></i></button></span>
                                            </td>
                                        </tr>

                                        <tr>
                                            <td>
                                                <h4><a href="#">Looking WordPress Developer for ThemeForest</a><br>
                                                    <small>Expired date : 21.12.2016</small> <small>Last update : 11.12.2016</small>
                                                </h4>
                                            </td>
                                            <td><a href="#">Martin Denson</a></td>
                                            <td>$11.00</td>
                                            <td>
                                                <span data-placement="top" data-toggle="tooltip" title="" data-original-title="Approve"><button class="btn btn-success btn-xs"><i class="fa fa-check"></i></button></span>
                                                <span data-placement="top" data-toggle="tooltip" title="" data-original-title="Remove"><button class="btn btn-danger btn-xs"><i class="fa fa-trash"></i></button></span>
                                            </td>
                                        </tr>
                                        </tbody>
                                    </table>
                                </div><!-- end table -->
                            </div><!-- end col -->
                        </div><!-- end row -->
                    </div>
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