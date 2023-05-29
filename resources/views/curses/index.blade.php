@extends('layouts.template')

@section('title', 'Curse')

@section('content')
    <h1>Bienvenido a la página cursos</h1>
    <a href="{{route('cursos.create')}}">Crear curso</a>
    <ul>
        @foreach ($curses as $curse)
            <li>
                <a href="{{route('cursos.show', $curse->id)}}">{{$curse->name}}</a>
                
            </li>
        @endforeach
    </ul>

    {{$curses->links()}}

@endsection