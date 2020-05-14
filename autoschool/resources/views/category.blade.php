@extends('app')

@section('title')
    Категорія {{$category->name}}
@endsection

@section('page-content')
    <div class="container content">
        <h1>Категорія {{$category->name}}</h1>
        <p>Студенти, що відкривають категорію {{$category->name}}</p>
        <div class="d-flex flex-column justify-content-start">
            @foreach($students as $obj)
                @include('inc.stud_usr', ['usr' => $obj])
            @endforeach
        </div>
    </div>
@endsection
