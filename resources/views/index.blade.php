@extends('shablon')

@section('title')
    Главная страница
@endsection

@section('ul')
    <div class="navbar-collapse collapse" id="navbarsExample01" style="">
        <ul class="navbar-nav me-auto mb-2">
            <li class="nav-item">
                <a class="nav-link active" aria-current="page" href="{{route('index')}}">Главная страница</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="{{route('onepage','SyteOne')}}">Страница 1</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="{{route('onepage','SyteTwo')}}">Страница 2</a>
            </li>
        </ul>
    </div>
@endsection

@section('main')
    <h1 align="center">Выберите страницу</h1>
@endsection
