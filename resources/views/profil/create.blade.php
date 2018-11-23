@extends('profil.index')
@section('profil')
    @parent

    <form id="submit" class="submit-form">

        <div class="row">
            <div class="col-md-12 col-sm-12">
                <h3 class="mb-4">Ajouter une annonce</h3>
            </div>
        </div><!-- end row -->

        <div class="row">
            <div class="col-md-12 col-sm-12">
                <label class="control-label">Titre</label>
                <input type="text" name="title" class="form-control" placeholder="">
            </div>
        </div><!-- end row -->

        <hr class="invis">

        <div class="row">
            <div class="col-md-12 col-sm-12">
                <label class="control-label">Description></label>
                <textarea class="form-control" name="description" placeholder=""></textarea>
            </div>
        </div><!-- end row -->

        <hr class="invis">

        <div class="row">
            <div class="col-md-6 col-sm-12">
                <label class="control-label">Type de stage</label>
                <select class="select form-control" title="Ville" name="ville" data-live-search="true">
                    <option>Freelancer</option>
                </select>
            </div>
            <div class="col-md-6 col-sm-12">
                <label class="control-label">Périodicité</label>
                <select class="select form-control" title="Ville" name="ville" data-live-search="true">
                    <option>Freelancer</option>
                </select>
            </div>
        </div><!-- end row -->

        <hr class="invis">

        <div class="row">
            <div class="col-md-12 col-sm-12">
                <label class="control-label">Thumbnail <small>Please add a thumbnail for the project (800x800)</small></label>
                <div class="fileupload fileupload-new" data-provides="fileupload">
                    <div class="fileupload-preview thumbnail"></div>
                    <br>
                    <span class="btn btn-default btn-file">
                        <span class="fileupload-new">Select Thumbnail</span>
                        <span class="fileupload-exists">Change</span>
                        <input type="file">
                    </span>
                    <a href="#" class="btn btn-default fileupload-exists" data-dismiss="fileupload"><i class="fa fa-close"></i></a>
                </div>
            </div>
        </div><!-- end row -->
        <hr>
        <button class="btn btn-primary btn-block">Submit Form</button>
    </form>

@endsection