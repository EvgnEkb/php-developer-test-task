@extends('layouts.app', ['page_title' => 'Welcome!'])

@section('html_header')
    <!-- Additional header tags -->
@endsection

@section('main_content')

    <div class="container">

        <form class="form-signin">
            <div class="alert alert-danger alert-dismissable">
                <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                <strong>Ошибка!</strong> Вход в систему с указанными данными невозможен.
            </div>

            <h2 class="form-signin-heading">Авторизация</h2>

            <label for="user_login" class="sr-only">Логин</label>
            <input type="text" id="user_login" class="form-control" placeholder="Логин" required autofocus>

            <label for="user_password" class="sr-only">Пароль</label>
            <input type="password" id="user_password" class="form-control" placeholder="Пароль" required>

            <div class="checkbox">
                <label>
                    <input type="checkbox" value="remember-me" checked> Запомнить меня
                </label>
            </div>
            <button class="btn btn-lg btn-primary btn-block" type="submit">Войти</button>
        </form>

    </div>

@endsection
