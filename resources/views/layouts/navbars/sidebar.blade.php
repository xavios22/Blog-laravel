<nav class="navbar navbar-vertical fixed-left navbar-expand-md navbar-light bg-white" id="sidenav-main">
	<div class="container-fluid">
		<!-- Toggler -->
		<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#sidenav-collapse-main" aria-controls="sidenav-main" aria-expanded="false" aria-label="Toggle navigation">
			<span class="navbar-toggler-icon"></span>
		</button>
		<!-- Brand -->
		<a class="navbar-brand pt-0" href="{{ route('home') }}">
			<img src="{{ asset('argon') }}/img/brain.png" class="navbar-brand-img" alt="...">
			{{-- <span>{{ __('Mon Bl') }}</span> --}}
		</a>
		<!-- User -->
		<ul class="nav align-items-center d-md-none">
			<li class="nav-item dropdown">
				<a class="nav-link" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
					<div class="media align-items-center">
					<span class="avatar avatar-sm rounded-circle">
						<img alt="Image placeholder" src="{{ asset('argon') }}/img/theme/favicon.png">
						</span>
					</div>
				</a>
				<div class="dropdown-menu dropdown-menu-arrow dropdown-menu-right">
					<div class=" dropdown-header noti-title">
						<h6 class="text-overflow m-0">{{ __('Bienvenue') }}</h6>
					</div>
					<a href="{{ route('profile.edit') }}" class="dropdown-item">
						<i class="ni ni-single-02"></i>
						<span>{{ __('Mon profil') }}</span>
					</a>
					<div class="dropdown-divider"></div>
					<a href="{{ route('logout') }}" class="dropdown-item" onclick="event.preventDefault();
					document.getElementById('logout-form').submit();">
						<i class="ni ni-user-run"></i>
						<span>{{ __('Fermer session') }}</span>
					</a>
				</div>
			</li>
		</ul>
		<!-- Collapse -->
		<div class="collapse navbar-collapse" id="sidenav-collapse-main">
			<!-- Collapse header -->
			<div class="navbar-collapse-header d-md-none">
				<div class="row">
					<div class="col-6 collapse-brand">
						<a href="{{ route('home') }}">
							<img src="{{ asset('argon') }}/img/brain.png">
						</a>
					</div>
					<div class="col-6 collapse-close">
						<button type="button" class="navbar-toggler" data-toggle="collapse" data-target="#sidenav-collapse-main" aria-controls="sidenav-main" aria-expanded="false" aria-label="Toggle sidenav">
							<span></span>
							<span></span>
						</button>
					</div>
				</div>
			</div>
			<!-- Navigation -->
			<ul class="navbar-nav">
				<li class="nav-item">
					<a class="nav-link" href="{{ route('home') }}">
						<i class="fas fa-home"></i> {{ __('Accueil Blog') }}
						
					</a>
				</li>
				 <li class="nav-item">
					<a class="nav-link" href="{{ route('dashboard') }}">
						<i class="ni ni-tv-2 text-primary"></i> {{ __('Dashboard') }}
					</a>
				</li>
				<li class="nav-item">
					<a class="nav-link active" href="#navbar-examples" data-toggle="collapse" role="button" aria-expanded="true" aria-controls="navbar-examples">
						<i class="fa fa-users" style="color: #f4645f;"></i>
						<span class="nav-link-text" style="color: #f4645f;">{{ __('Utilisateurs') }}</span>
					</a>

					<div class="collapse show" id="navbar-examples">
						<ul class="nav nav-sm flex-column">
							
							<li class="nav-item">
								<a class="nav-link" href="{{ route('profile.edit') }}">
								<i class="fa fa-user"></i>
									{{ __('Mon profil') }}
								</a>
							</li>
							<li class="nav-item">
								<a class="nav-link" href="{{ route('user.index') }}">
								<i class="fas  fa-users-cog"></i>
									{{ __('Gérer utilisateurs') }}
								</a>
							</li>
						</ul>
						<li class="nav-item">
							<a class="nav-link" href="{{ route('post.index') }}">
								<i class="fas fa-align-justify"></i>
									{{ __('Mes post') }}
							</a>
						</li>
						<li class="nav-item">
							<a class="nav-link" href="{{ route('categorie.index') }}">
								<i class="fas fa-tags"></i>
									{{ __('Mes Categories') }}
							</a>
						</li>
						
					</div>
				</li>
				
			</ul>
		</div>
	</div>
</nav>