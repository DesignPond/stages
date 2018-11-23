@extends('profil.index')
@section('profil')
    @parent

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
@endsection