@extends('layouts.app', ['page_title' => 'Welcome!'])

@section('html_header')
    <!-- Additional header tags -->
@endsection

@section('main_content')

    <div class="container">
        <div class="page-header">
            <h1>Сообщения от всех пользователей</h1>
        </div>

        @auth
            @include('components.messages.form')
        @endauth

        @foreach ($messages as $message)
            @include('components.messages.item', ['message' => $message])
        @endforeach

    </div>

@endsection
