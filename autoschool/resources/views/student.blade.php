@extends('app')

@section('title')
    {{$student->name}} {{$student->lastname}}
@endsection

@section('page-content')
    <div class="container content">
        <h1>{{$student->name}} {{$student->lastname}}</h1>
        <div class="d-flex flex-column justify-content-start">
            <p>ID: {{$student->id}}</p>
            <p>Викладач:
                <a href="/teachers/{{$teacher->id}}">{{$teacher->name}} {{$teacher->lastname}}</a>
            </p>
            <p>Категорії:
                @foreach($cars as $i)
                    <a href="/categories/{{$i->name}}">{{$i->name}}</a>
                @endforeach
            </p>
        </div>
    </div>
@endsection
