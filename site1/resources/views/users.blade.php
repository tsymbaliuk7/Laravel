@extends('layout.app')

@section('title')
    Наші користувачі
@endsection

@section('page-content')
    <div class="container content">
        <h1>Наші користувачі</h1>
        <div class = 'user-list row flex-column justify-content-center align-items-center'>
            @foreach($data as $i)
                <div class="user-small col-7">
                    <p>ID: {{$i->id}}</p>
                    <div class="d-flex justify-content-between align-items-center">
                        <p>Email: {{$i->email}}</p>
                        <a href="/users/{{$i->id}}">Перейти</a>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
@endsection
