@extends('app')

@section('title')
    Наші викладачі
@endsection

@section('page-content')
    <div class="container content">
        <h1>Наші викладачі</h1>
        <div class="d-flex flex-column justify-content-start">
            @foreach($teachers as $obj)
                @include('inc.teach_usr', ['usr' => $obj])
            @endforeach
        </div>
    </div>
@endsection
