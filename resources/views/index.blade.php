@extends('layouts.app', ['page_title' => 'Welcome!'])

@section('html_header')
    <!-- Additional header tags -->
@endsection

@section('main_content')

    <div class="container">
        <div class="page-header">
            <h1>Сообщения от всех пользователей</h1>
        </div>
        @if ($errors->has('deleteError'))
            <div class="alert alert-danger alert-dismissable">
                <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>

                @if($errors->has('deleteError'))
                    {{ $errors->first('deleteError') }}
                @endif
            </div>
        @endif
        @auth
            @include('components.messages.form')
        @endauth

        @foreach ($messages as $message)
            @include('components.messages.item', ['message' => $message])
        @endforeach
        {{ $messages->links('components.messages.pagination') }}
    </div>

@endsection
