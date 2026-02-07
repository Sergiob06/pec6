@extends('plantilla')

@section('contenido')
<h1>Editar post</h1>

<form action="{{ route('posts.update', $post->id) }}" method="POST">
    @csrf
    @method('PUT')

    <div>
        <label for="titol">Título:</label>
        <input
            type="text"
            name="titol"
            id="titol"
            value="{{ old('titol', $post->titol) }}"
        >
        @error('titol')
            <small class="text-danger">{{ $message }}</small>
        @enderror
    </div>

    <div>
        <label for="contingut">Contenido:</label>
        <textarea
            name="contingut"
            id="contingut"
            cols="30"
            rows="10"
        >{{ old('contingut', $post->contingut) }}</textarea>
        @error('contingut')
            <small class="text-danger">{{ $message }}</small>
        @enderror
    </div>

    <input type="submit" value="Actualizar">
</form>
@endsection
