@extends('layouts.app', ['page_title' => 'Welcome!'])

@section('html_header')
    <!-- Additional header tags -->
@endsection

@section('main_content')

    <div class="container">

        <form class="form-signin" action="{{ route('login') }}" method="POST">
            @csrf
            @if ($errors->any())
                <div class="alert alert-danger alert-dismissable">
                    <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                    Вход в систему с указанными данными невозможен
                </div>
            @endif

            <h2 class="form-signin-heading">Авторизация</h2>

            <label for="user_login" class="sr-only">Логин</label>
            <input name="email" type="text" id="user_login" class="form-control" placeholder="Логин" required autofocus>

            <label for="user_password" class="sr-only">Пароль</label>
            <input name="password" type="password" id="user_password" class="form-control" placeholder="Пароль" required>

            <div class="checkbox">
                <label>
                    <input  type="checkbox" name="remember"
                            id="remember" {{ old('remember') ? 'checked' : '' }} checked>  Запомнить меня
                </label>
            </div>
            <button class="btn btn-lg btn-primary btn-block" type="submit">Войти</button>
        </form>

    </div>

@endsection
