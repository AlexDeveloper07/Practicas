@extends('layouts.template')

@section('title', 'Cursos edit')

@section('content')
    <h1>En esta página podrás editar un curso</h1>
    <form action=" {{route('cursos.update', $curse)}}" method="post">

        @csrf

        @method('put')

        <label>
            Nombre:
            <br>
            <input type="text" name="name" value="{{old('name', $curse->name)}}">
        </label>

        @error('name')
            <br>
            <small>*{{$message}}</small>
            <br>
        @enderror

        <br>
        <label>
            Descripción:
            <br>
            <textarea name="description" rows="5">{{old('description', $curse->description)}}
            </textarea>
        </label>

        @error('description')
            <br>
            <small>*{{$message}}</small>
            <br>
        @enderror

        <br>
        <label>
            Categoría:
            <br>
            <input type="text" name="category" value="{{old('category', $curse->category)}}">
        </label>

        @error('category')
        <br>
        <small>*{{$message}}</small>
        <br>
        @enderror

        <br>
        <button type="submit">Actializar formulario</button>
    </form>
@endsection