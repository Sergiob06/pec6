@extends('plantilla')

@section('title', 'Listado Post')

@section('contenido')
    <div class="container mt-5">

        <h1 class="mb-4 text-center">
            Listado de Posts
        </h1>

        <div class="card shadow">
            <div class="card-body">

                <div class="alert alert-info text-center">
                    Aquí se mostrará el listado de posts
                </div>

                @forelse ($posts as $post)
                    <div class="d-flex justify-content-center">
                        <button class="btn btn-primary">
                            {{ $post->titol }}({{$post->Usuari->login}})
                        </button>
                        <a href="{{ route('posts.show', $post->id) }}">Ver Post</a>
                        <form action="{{ route('posts.destroy', $post) }}" method="POST">
                            @method('DELETE')
                            @csrf
                            <button>Borrar</button>
                        </form>
                    </div>
                @empty
                    No se han encontrado posts
                @endforelse
            </div>
        </div>

    </div>
@endsection
