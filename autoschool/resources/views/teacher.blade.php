@extends('app')

@section('title')
    {{$teacher->name}} {{$teacher->lastname}}
@endsection

@section('page-content')
    <div class="container content">
        <h1>{{$teacher->name}} {{$teacher->lastname}}</h1>
        <div class="d-flex flex-column justify-content-start">
            <p>ID: {{$teacher->id}}</p>
            <p>Його студенти:</p>
            @foreach($students as $obj)
                @include('inc.stud_usr', ['usr' => $obj])
            @endforeach
        </div>
    </div>
@endsection
