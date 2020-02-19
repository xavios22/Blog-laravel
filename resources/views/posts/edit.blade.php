@extends('layouts.app')
@section('content')
    @include('posts.partials.header', ['title' => __("Modifier Votre Blog")])   

    <div class="container-fluid mt--7">
        <div class="row">
            <div class="col-xl-12 order-xl-1">
                <div class="card bg-secondary shadow">
                    <div class="card-header bg-white border-0">
                        <div class="row align-items-center">
                            <div class="col-8">
                            </div>
                            <div class="col-4 text-right">
                                <a href="{{ route('post') }}" class="btn btn-sm btn-primary">{{ __('Liste de blog') }}</a>
                            </div>
                        </div>
                    </div>
                    <div class="card-body">
                        <form method="POST" action="{{ route('post.update', $id ?? '') }}" autocomplete="off">
                            @csrf
                            @method('PUT')

                            <h6 class="heading-small text-muted mb-4">{{ __('User information') }}</h6>
                            <div class="pl-lg-4">
                                <div class="form-group{{ $errors->has('title') ? ' has-danger' : '' }}">
                                    <label class="form-control-label" for="input-title">{{ __('titre') }}</label>
                                    <input type="text" name="title" id="input-title" class="form-control form-control-alternative{{ $errors->has('title') ? ' is-invalid' : '' }}" placeholder="{{ __('Titre') }}"  required autofocus>

                                    {{-- @if ($errors->has('name'))
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $errors->first('name') }}</strong>
                                        </span>
                                    @endif --}}
                                </div>
                                <div class="form-group{{ $errors->has('contenu') ? ' has-danger' : '' }}">
                                    <label class="form-control-label" for="input-contenu">{{ __('Votre Post') }}</label>
                                    <input type="text" name="contenu" id="input-contenu" class="form-control form-control-alternative{{ $errors->has('contenu') ? ' is-invalid' : '' }}" placeholder="{{ __('Post') }}" required>

                                    {{-- @if ($errors->has('email'))
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $errors->first('email') }}</strong>
                                        </span>
                                    @endif --}}
                                </div>
                                

                                <div class="text-center">
                                    <button type="submit" class="btn btn-success mt-4">{{ __('Sauvergarder') }}</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
        
    </div>
@endsection
