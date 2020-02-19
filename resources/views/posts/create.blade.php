@extends('layouts.app')
@section('content')
@include('posts.Partials.header', [
        'title' => __('Créer Blog '),
        // 'description' => __("Voici la liste de vos posts"),
        'class' => 'col-md-7'
    ])
     <div class="container-fluid mt--7">
        <div class="row">
            <div class="col-xl-12 order-xl-1">
                <div class="card bg-secondary shadow">
                    <div class="card-header bg-white border-0">
                        <div class="row align-items-center">
                            <div class="col-8"></div>
                            <div class="col-4 text-right">
                                <a href="{{ route('post') }}" class="btn btn-sm btn-primary">Aller aux Posts</a>
                            </div>
                        </div>
                    </div>
                    <div class="card-body">
                        <form method="post" action="{{ route('post.store') }}" autocomplete="off">
                            @csrf
                            <h6 class="heading-small text-muted mb-4">{{ __("Information de l'utilisateur") }}</h6>
                            <div class="pl-lg-4">
                                <div class="form-group{{ $errors->has('title') ? ' has-danger' : '' }}">
                                    <label class="form-control-label" for="input-title">Titre</label>
                                    <input type="text" name="title" id="input-title" class="form-control form-control-alternative{{ $errors->has('title') ? ' is-invalid' : '' }}" placeholder="{{ __('Votre Titre') }}" value="{{ old('title') }}" required autofocus>

                                    @if ($errors->has('tilte'))
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $errors->first('title') }}</strong>
                                        </span>
                                    @endif
                                </div>
                                <div class="form-group{{ $errors->has('contenu') ? ' has-danger' : '' }}">
                                    <label class="form-control-label" for="input-contenu">{{ __('Contenu') }}</label>
                                    <input type="text" name="contenu" id="input-contenu" class="form-control form-control-alternative{{ $errors->has('contenu') ? ' is-invalid' : '' }}" placeholder="{{ __('Tapez ici votre blog') }}" value="{{ old('contenu') }}" required>

                                    @if ($errors->has('contenu'))
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $errors->first('contenu') }}</strong>
                                        </span>
                                    @endif
                                </div>
                                {{-- <div class="form-group{{ $errors->has('password') ? ' has-danger' : '' }}">
                                    <label class="form-control-label" for="input-password">{{ __('Mot de passe') }}</label>
                                    <input type="password" name="password" id="input-password" class="form-control form-control-alternative{{ $errors->has('password') ? ' is-invalid' : '' }}" placeholder="{{ __('Mot de passe') }}" value="" required>
                                    
                                    @if ($errors->has('password'))
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $errors->first('password') }}</strong>
                                        </span>
                                    @endif
                                </div>
                                <div class="form-group">
                                    <label class="form-control-label" for="input-password-confirmation">{{ __('Confirmer le mot de passe') }}</label>
                                    <input type="password" name="password_confirmation" id="input-password-confirmation" class="form-control form-control-alternative" placeholder="{{ __('Confirmer le mot de passe') }}" value="" required>
                                </div> --}}

                                <div class="text-center">
                                    <button type="submit" class="btn btn-success mt-4">{{ __('Sauvegarder') }}</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection