@extends('layouts.app')
@section('content')
	@include('posts.partials.header', ['description' => __("Modifier le post")])   

	<div class="container-fluid mt--7">
		<div class="row">
			<div class="col-xl-12 order-xl-1">
				<div class="card bg-secondary shadow">
					<div class="card-header bg-white border-0">
						<div class="row align-items-center">
							<div class="col-8">
							</div>
							<div class="col-4 text-right">
								<a href="{{ route('post.index') }}" class="btn btn-sm btn-primary">{{ __('Liste de blog') }}</a>
							</div>
						</div>
					</div>
					<div class="card-body">
						<form method="post" action="{{ route('post.update',$post) }}" autocomplete="off">
							@method('put')
							 @csrf
							<div class="pl-lg-4">
								<div class="form-group{{ $errors->has('title') ? ' has-danger' : '' }}">
									<label class="form-control-label" for="input-title">Titre</label>
									<input type="text" name="title" id="input-title" class="form-control form-control-alternative{{ $errors->has('title') ? ' is-invalid' : '' }}" placeholder="{{ __('Titre') }}" value="{{ old('title', $post->title) }}" required autofocus>
									@if ($errors->has('title'))
										<span class="invalid-feedback" role="alert">
											<strong>{{ $errors->first('title') }}</strong>
										</span>
									@endif
								</div>
								<div class="form-group{{ $errors->has('contenu') ? ' has-danger' : '' }}">
									<label class="form-control-label" for="input-contenu">A modifier</label>
									<input type="text" name="contenu" id="input-contenu" class="form-control form-control-alternative{{ $errors->has('contenu') ? ' is-invalid' : '' }}" placeholder="{{ __('Contenu à modififier') }}" value="{{ old('contenu', $post->contenu) }}" required>

									@if ($errors->has('contenu'))
										<span class="invalid-feedback" role="alert">
											<strong>{{ $errors->first('contenu') }}</strong>
										</span>
									@endif
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
