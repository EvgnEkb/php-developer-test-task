@extends('layouts.app', ['page_title' => 'Welcome!'])

@section('html_header')
    <!-- Additional header tags -->
@endsection

@section('main_content')

    <div class="container">
        <h1>Ура!</h1>
        <h3>Поздравляем! Вы успешно зарегистрировались.</h3>
        <p>Воспользуйтесь <a href="{{ route('login') }}">формой авторизации</a> чтобы войти на сайт под своей учетной записью</p>
    </div>

@endsection
