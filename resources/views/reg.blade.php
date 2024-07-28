@extends('layouts.app', ['page_title' => 'Welcome!'])

@section('html_header')
    <!-- Additional header tags -->
@endsection

@section('main_content')

    <div class="container">

        <form class="form-signup" method="POST" action="{{ route('register') }}">
            @csrf

            @if ($errors->any())
                <div class="alert alert-danger alert-dismissable">
                    <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                    <strong>Ошибка!</strong>
                    @foreach ($errors->all() as $error)
                        {{ $error }}
                    @endforeach
                </div>
            @endif

            <h2 class="form-signup-heading">Регистрация</h2>

            <label for="user_login" class="sr-only">Имя</label>
            <input name="name" value="{{ old('name') }}" type="text" id="user_login" class="form-control" placeholder="Имя" required autofocus>

            <label for="user_login" class="sr-only">Логин</label>
            <input name="email" value="{{ old('email') }}" type="text" id="user_login" class="form-control" placeholder="Логин" required autofocus>


            <label for="user_password" class="sr-only">Пароль</label>
            <input name="password" value="{{ old('password') }}" type="password" id="user_password" class="form-control" placeholder="Пароль" required>

            <label for="user_password_repeat" class="sr-only">Повторите пароль</label>
            <input name="password_confirmation" type="password" id="user_password_repeat" class="form-control" placeholder="Пароль (ещё раз)" required>

            <button class="btn btn-lg btn-primary btn-block" type="submit">Зарегистрироваться</button>
        </form>

    </div>

@endsection
