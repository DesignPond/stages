@extends('layouts.master')
@section('content')

<div class="container">
    <div class="row justify-content-center mb-4">
        <div class="content col-md-8 mt-1 mb-4">

                <div class="post-padding mt-4">

                    <h4 class="fw-500 my-2 mb-4">Inscription</h4>
                    <form method="POST" action="{{ route('register') }}">@csrf

                        <div class="row">
                            <div class="col-md-6 col-sm-12">
                                <label class="control-label">Nom de l'entreprise</label>
                                <input type="text" class="form-control{{ $errors->has('name') ? ' is-invalid' : '' }}" name="name" required value="{{ old('name') }}">
                                @if ($errors->has('name'))
                                    <span class="invalid-feedback" role="alert"><strong>{{ $errors->first('name') }}</strong></span>
                                @endif
                            </div>

                            <div class="col-md-6 col-sm-12">
                                <label class="control-label">Email</label>
                                <input type="text" name="email{{ $errors->has('name') ? ' is-invalid' : '' }}" class="form-control" required value="{{ old('email') }}">
                                @if ($errors->has('email'))
                                    <span class="invalid-feedback" role="alert"><strong>{{ $errors->first('email') }}</strong></span>
                                @endif
                            </div>
                        </div>

                        <hr class="invis">

                        <div class="row">
                            <div class="col-md-6 col-sm-12">
                                <label class="control-label">Adresse</label>
                                <input type="text" class="form-control{{ $errors->has('rue') ? ' is-invalid' : '' }}" required value="{{ old('rue') }}" name="rue">
                                @if ($errors->has('rue'))
                                    <span class="invalid-feedback" role="alert"><strong>{{ $errors->first('rue') }}</strong></span>
                                @endif
                            </div>
                            <div class="col-md-6 col-sm-12">
                                <label class="control-label">NPA</label>
                                <input type="text" class="form-control{{ $errors->has('npa') ? ' is-invalid' : '' }}" required value="{{ old('npa') }}" name="npa">
                                @if ($errors->has('npa'))
                                    <span class="invalid-feedback" role="alert"><strong>{{ $errors->first('npa') }}</strong></span>
                                @endif
                            </div>
                        </div><!-- end row -->

                        <hr class="invis">

                        <div class="row">
                            <div class="col-md-6 col-sm-12">
                                <label class="control-label">Complément d'adresse</label>
                                <input type="text" name="complement" class="form-control" value="{{ old('complement') }}">
                            </div>
                            <div class="col-md-6 col-sm-12">
                                <label class="control-label">CP</label>
                                <input type="text" name="cp" class="form-control" value="{{ old('cp') }}">
                            </div>
                        </div><!-- end row -->

                        <hr class="invis">

                        <div class="row">
                            <div class="col-md-6 col-sm-12">
                                <label class="control-label">Téléphone</label>
                                <input type="text" name="telephone" class="form-control" required value="{{ old('telephone') }}">
                            </div>
                            <div class="col-md-6 col-sm-12">
                                <label class="control-label">Fax</label>
                                <input type="text" name="fax" class="form-control" value="{{ old('fax') }}">
                            </div>
                        </div><!-- end row -->

                        <hr class="invis">

                        <div class="row">
                            <div class="col-md-12 col-sm-12">
                                <label class="control-label">Votre entreprise est présent sur les média sociaux</label>
                                <textarea name="social" class="form-control">{{ old('social') }}</textarea>
                            </div>
                        </div><!-- end row -->

                        <hr class="invis">

                        <div class="row">
                            <div class="col-md-12 col-sm-12">
                                <label class="control-label">Site internet</label>
                                <input type="text" class="form-control" name="website" value="{{ old('website') }}">
                            </div>
                        </div><!-- end row -->

                        <div class="row">
                            <div class="col-md-12 col-sm-12">
                                <label class="control-label">Mot de passe</label>
                                <input id="password" type="password" class="form-control{{ $errors->has('password') ? ' is-invalid' : '' }}" name="password" required>
                                @if ($errors->has('password'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div><!-- end row -->

                        <div class="row">
                            <div class="col-md-12 col-sm-12">
                                <label class="control-label">Confirmer le mot de passe</label>
                                <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required>
                            </div>
                        </div><!-- end row -->

                        <hr class="invis">
                        <hr>
                        <div class="row mt-4">
                            <div class="col-md-12 text-right">
                                <button type="submit" class="btn btn-primary btn-block">Inscription </button>
                            </div>
                        </div>

                    </form>
                </div>

        </div>
    </div>
</div>
@endsection
