@extends('plantilla')

@section('title', 'Ficha Post')

@section('contenido')
    <div class="container mt-5">

        <h1 class="mb-4 text-center">
            Ficha de Post
        </h1>

        <div class="card shadow">
            <div class="card-body">

                <div class="d-flex justify-content-center">
                    <button class="btn btn-primary">
                        <h1>Titulo: {{ $post->titol }}</h1>
                    </button>
                </div>

                <div class="d-flex justify-content-center">
                    <button class="btn btn-primary">
                        <h1>Contenido: {{ $post->contingut }}</h1>
                    </button>

                    <div class="d-flex justify-content-center">
                        <button class="btn btn-primary">
                            <h1>Autor del post: {{ $post->usuari->login }}</h1>
                        </button>

                        <div class="d-flex justify-content-center">
                            <button class="btn btn-primary">
                                <h1>Fecha de creación: {{ $post->created_at->format('d/m/Y') }}</h1>
                            </button>

                            @forelse ($post->comentaris as $comentari)
                                <div class="d-flex justify-content-center">
                                    <button class="btn btn-primary">
                                        <h1>Comentario: {{ $comentari->contingut }}</h1>
                                    </button>
                                @empty
                                    No hay comentarios
                            @endforelse


                        </div>
                        <a href="{{ route('posts.edit', $post->id) }}" class="btn btn-warning">
                            Editar post
                        </a>


                    </div>
                </div>

            </div>
        @endsection
