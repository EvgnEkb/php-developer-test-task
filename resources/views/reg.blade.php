@extends('layouts.app', ['page_title' => 'Welcome!'])

@section('html_header')
    <!-- Additional header tags -->
@endsection

@section('main_content')

    <div class="container">

        <form class="form-signup">
            <h2 class="form-signup-heading">Регистрация</h2>

            <label for="user_login" class="sr-only">Логин</label>
            <input type="text" id="user_login" class="form-control" placeholder="Логин" required autofocus>

            <label for="user_password" class="sr-only">Пароль</label>
            <input type="password" id="user_password" class="form-control" placeholder="Пароль" required>

            <label for="user_password_repeat" class="sr-only">Повторите пароль</label>
            <input type="password" id="user_password_repeat" class="form-control" placeholder="Пароль (ещё раз)" required>

            <button class="btn btn-lg btn-primary btn-block" type="submit">Зарегистрироваться</button>
        </form>

    </div>

@endsection
