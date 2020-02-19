@extends('layouts.app')
@section('content')
    @include('posts.Partials.header', [
        'title' => __('Salut! ') . ' '. auth()->user()->name,
        'description' => __("Voici la liste de vos posts"),
        'class' => 'col-md-7'
    ])   
    <div class="container-fluid mt--7">
        <div class="row">
            <div class="col">
                <div class="card shadow">
                    <div class="card-header border-0">
                        <div class="row align-items-center">
                            <div class="col-8"></div>
                            <div class="col-4 text-right">
                                <a href="{{ route('post.create') }}" class="btn btn-sm btn-primary">{{ __('Créer un post') }}</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-12">
                        @if (session('status'))
                            <div class="alert alert-success alert-dismissible fade show" role="alert">
                                {{ session('status') }}
                                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                </button>
                            </div>
                        @endif
                    </div>

                    <div class="table-responsive">
                        <table class="table align-items-center table-flush">
                            <thead class="thead-light">
                                <tr>
                                <th scope="col">N°</th>
                                    <th scope="col">Titre</th>
                                    <th scope="col">Content</th>
                                    <th scope="col">Date de création</th>
                                    <th scope="col">Etat</th>
                                    <th scope="col"></th>
                                    <th scope="col"></th>
                                </tr>
                            </thead>
                            <tbody>
                                
                                @foreach ($posts as $post)
                                    <tr>
                                        <td>{{ $post->id }}</td>
                                        <td>{{substr ($post->title,0,15) }}</td>
                                        <td>{{substr ($post->contenu,0,25) }}</td>
                                        <td>{{ $post->created_at->format('d/m/Y H:i') }}</td>
                                        <td></td>
                                        <td class="text-right">
                                            <div class="dropdown">
                                                <a class="btn btn-sm btn-icon-only text-light" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                    <i class="fas fa-ellipsis-v"></i>
                                                </a>
                                                <div class="dropdown-menu dropdown-menu-right dropdown-menu-arrow">
                                                    {{-- @if ($post->id != auth()->id()) --}}
                                                        <form action="{{ route('user.destroy', $post) }}" method="post">
                                                            @csrf
                                                            @method('delete')
                                                            <a class="dropdown-item" href="{{ route('post.edit', $post) }}">Modifier</a>
                                                            
                                                            <button type="button" class="dropdown-item" onclick="confirm('{{ __("Êtes-vous sûr de vouloir supprimer cet utilisateur ?") }}') ? this.parentElement.submit() : ''">Supprimer</button>
                                                        </form>    
                                                    {{-- @else --}}
                                                        {{-- <a class="dropdown-item" href="{{ route('profile.edit') }}">{{ __('Edit') }}</a> --}}
                                                    {{-- @endif --}}
                                                </div>
                                            </div>
                                        </td>
                                        
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                    <div class="card-footer py-4">
                        <nav class="d-flex justify-content-end" aria-label="...">
                            {{ $posts->links() }}
                        </nav>
                    </div>
                </div>
            </div>
        </div>
    </div>
    
@endsection