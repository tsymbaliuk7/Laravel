@extends('app')

@section('title')
    Наші студенти
@endsection

@section('page-content')
    <div class="container content">
        <h1>Наші студенти</h1>
        <div class="d-flex flex-column justify-content-start">
            @foreach($students as $obj)
                @include('inc.stud_usr', ['usr' => $obj])
            @endforeach
        </div>
    </div>
@endsection
