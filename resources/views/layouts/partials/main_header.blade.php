<nav class="navbar navbar-default">
    <div class="container">
        <div class="navbar-header">
            <a class="navbar-brand" href="{{ url('/') }}">Avtocod | Стена сообщений</a>
        </div>
        <ul class="nav navbar-nav">
            <li class="{{ request()->is('/') ? 'active' : null }}"><a href="{{ url('/') }}">Главная</a></li>
            @guest
                <li class="{{ request()->is('/login') ? 'active' : null }}">
                    <a href="{{ url('/login') }}">Авторизация</a>
                </li>
                <li class="{{ request()->is('/register') ? 'active' : null }}">
                    <a href="{{ url('/register') }}">Регистрация</a>
                </li>
            @endguest
        </ul>
        @auth
            <ul class="nav navbar-nav navbar-right">
                <li class="navbar-text">
                    <span class="glyphicon glyphicon-user"></span>
                    {{ Auth::user()->name }}
                </li>
                <li>
                    <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                        @csrf
                    </form>
                    <a href="{{ route('logout') }}" onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();"><span class="glyphicon glyphicon-log-out"></span> Выход</a>
                </li>
            </ul>
        @endauth
    </div>
</nav>

