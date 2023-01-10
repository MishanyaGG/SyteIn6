@extends('shablon')

@section('title')
    Страница 1
@endsection

@section('ul')
    <div class="navbar-collapse collapse" id="navbarsExample01" style="">
        <ul class="navbar-nav me-auto mb-2">
            <li class="nav-item">
                <a class="nav-link" aria-current="page" href="{{route('index')}}">Главная страница</a>
            </li>
            <li class="nav-item">
                <a class="nav-link active" href="{{route('onepage','SyteOne')}}">Страница 1</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="{{route('onepage','SyteTwo')}}">Страница 2</a>
            </li>
        </ul>
    </div>
@endsection

@section('main')
    <h3 align="center">Страница 1</h3>
@endsection
