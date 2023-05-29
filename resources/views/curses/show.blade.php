@extends('layouts.template')

@section('title', 'Curse' . $curse->name)

@section('content')
    <h1>Bienvenido a el curso {{$curse->name}}</h1>
    <a href="{{route('cursos.index')}}">Volver a cursos</a>
    <br>
    <a href="{{route('cursos.edit', $curse)}}">Editar Curso</a>
    <p><strong>Categoria: </strong>{{$curse->category}}</p>
    <p>{{$curse->description}}</p>
@endsection
