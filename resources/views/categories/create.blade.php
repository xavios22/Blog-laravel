@extends('layouts.app')
@section('content')
    @include('posts.Partials.header', [
        
        'description' => __("Créer une catégorie"),
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
								<a href="{{ route('categorie.index') }}" class="btn btn-sm btn-primary">Mes catégories</a>
							</div>
						</div>
					</div>
					<div class="card-body">
						<form method="post" action="{{ route('categorie.store') }}" autocomplete="off">
							@csrf
						   
							<div class="pl-lg-4">
								<div class="form-group{{ $errors->has('name') ? ' has-danger' : '' }}">
									<label class="form-control-label" for="input-name">Titre</label>
									<input type="text" name="name" id="input-name" class="form-control form-control-alternative{{ $errors->has('name') ? ' is-invalid' : '' }}" placeholder="{{ __('Votre catégorie') }}" value="{{ old('name') }}" required autofocus>

									@if ($errors->has('name'))
										<span class="invalid-feedback" role="alert">
											<strong>{{ $errors->first('name') }}</strong>
										</span>
									@endif
								</div>
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