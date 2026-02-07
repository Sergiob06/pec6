@extends('plantilla')

@section('title', 'Listado Post')

@section('contenido')
    <div class="container mt-5">

        <h1 class="mb-4 text-center">
            Crear Post
        </h1>

        <form action="{{route('posts.store')}}" method="POST">
            @csrf
            <label for="titol">Titol: </label>
            <input type="text">
             @error('titul')
            <small class="text-danger">{{ $message }}</small>
            @enderror

            <label for="contingut">Contingut: </label>
            <textarea name="contingut" id="contingut" cols="30" rows="10"></textarea>
             @error('contingut')
            <small class="text-danger">{{ $message }}</small>
            @enderror
            <input type="submit" value="Enviar">

        </form>