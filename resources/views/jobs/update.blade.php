@extends('profil.index')
@section('profil')
    @parent

    <form id="submit" class="submit-form" action="{{ url('job/'.$job->id) }}" method="POST">
        <input type="hidden" name="_method" value="PUT">
        {!! csrf_field() !!}

        <div class="row">
            <div class="col-md-12 col-sm-12">
                <h3 class="mb-4">Modifier une annonce</h3>
            </div>
        </div><!-- end row -->

        <div class="row">
            <div class="col-md-12 col-sm-12">
                <label class="control-label">Titre</label>
                <input type="text" name="title" class="form-control" value="{{ $job->title }}">
            </div>
        </div><!-- end row -->

        <hr class="invis">

        <div class="row">
            <div class="col-md-12 col-sm-12">
                <label class="control-label">Description</label>
                <textarea class="form-control" name="description">{{ $job->description }}</textarea>
            </div>
        </div><!-- end row -->

        <hr class="invis">

        <div class="row">
            <div class="col-md-12 col-sm-12">
                <label class="control-label">Type de stage</label>
                <select class="select form-control" name="type_id">
                    <option>Choix</option>
                    @if(!$types->isEmpty())
                        @foreach($types as $type)
                            <option {{ $job->type_id == $type->id ? 'selected' : '' }} value="{{ $type->id }}">
                                {{ $type->semaines.' - '.$type->periode.' - '.$type->pourcentage }}
                            </option>
                        @endforeach
                    @endif
                </select>
            </div>
        </div><!-- end row -->
        <hr class="invis">
        <div class="row">
            <div class="col-md-6 col-sm-12">
                <label class="control-label">Valide jusqu'au</label>
                <input type="text" class="form-control datetimepicker" name="valid_until" value="{{ $job->valid_until->format('d.m.Y') }}" />
            </div>
        </div><!-- end row -->

        <hr class="invis">
        <hr>
        <input value="{{ $job->id }}" name="id" type="hidden">
        <button class="btn btn-primary btn-block">Mettre à jour l'annonce</button>
    </form>

@endsection