@extends('layouts.app')
@section('content')
    @include('categories.partials.header', [
        'description' => __("Categories"),
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
                                <a href="{{ route('categorie.create') }}" class="btn btn-sm btn-primary">{{ __('Créer une catégorie') }}</a>
                            </div>
                        </div>
                    </div>
                    <div class="table-responsive">
                            <table class="table align-items-center table-flush">
                            <thead class="thead-light">
                                <tr>
                                <th scope="col">N°</th>
                                    <th scope="col">Nom</th>
                                    <th scope="col">Date de création</th>
                                    <th scope="col"></th>
                                    <th scope="col"></th>
                                </tr>
                            </thead>
                            <tbody>
                                
                                @foreach ($categories as $categorie)
                                    <tr>
                                        <td>{{ $categorie->id }}</td>
                                        <td>{{ $categorie->name }}</td>
                                        <td>{{ $categorie->created_at->format('d/m/Y H:i') }}</td>
                                        <td></td>
                                        <td class="text-right">
                                            <div class="dropdown">
                                                <a class="btn btn-sm btn-icon-only text-light" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                    <i class="fas fa-ellipsis-v"></i>
                                                </a>
                                                <div class="dropdown-menu dropdown-menu-right dropdown-menu-arrow">
                                                    {{-- @if ($post->id != auth()->id()) --}}
                                                        <form action="{{ route('categorie.destroy', $categorie) }}" method="post">
                                                            @csrf
                                                            @method('delete')
                                                            <a class="dropdown-item" href="{{ route('categorie.edit', $categorie) }}">Modifier</a>
                                                            
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
                            {{ $categories->links() }}
                        </nav>
                    </div>
                </div>
            </div>
        </div>
    </div>
    
@endsection