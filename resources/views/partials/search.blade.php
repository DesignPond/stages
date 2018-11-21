<div class="sectionnr nopadding wb border-top">
    <div class="container">
        <form class="submit-form customform" action="search" method="POST">
            {!! csrf_field() !!}
            <div class="row">
                <div class="col-md-3 col-sm-6 col-xs-12">
                    <div class="input-group">
                        <div class="input-group-prepend">
                            <span class="input-group-text" id="name"><i class="fa fa-search"></i></span>
                        </div>
                        <input type="text" name="name" class="form-control" placeholder="Nom de l'étude" aria-label="name" aria-describedby="name">
                    </div>
                </div><!-- end col -->

                <div class="col-md-3 col-sm-6 col-xs-12">
                    <select class="select form-control" title="Ville" name="ville" data-live-search="true">
                        @if(!$villes->isEmpty())
                            @foreach($villes as $ville)
                                <option value="{{ $ville }}">{{ $ville }}</option>
                            @endforeach
                        @endif
                    </select>
                </div>

                <div class="col-md-3 col-sm-6 col-xs-12">
                    <select class="select form-control" title="Type de stage" name="type_id" data-live-search="true">
                        @if(!$types->isEmpty())
                            @foreach($types as $type)
                                <option value="{{ $type->id }}">{{ $type->semaines.' - '.$type->periode }}</option>
                            @endforeach
                        @endif
                    </select>
                </div>

                <div class="col-md-3 col-sm-6 col-xs-12">
                    <button class="btn btn-primary btn-block">Rechercher</button>
                </div><!-- end col -->
            </div><!-- end row -->

        </form>
    </div><!-- end container -->
</div>
