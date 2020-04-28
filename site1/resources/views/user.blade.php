@extends('layout.app')
@section('title')
    Сторінка | {{$obj->email}}
@endsection

@section('page-content')
    <div class="container">
        <h1>Сторінка користувача</h1>
        <p>ID: {{$obj->id}}</p>
        <p>Email: {{$obj->email}}</p>
    </div>
@endsection
