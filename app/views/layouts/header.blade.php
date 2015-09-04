<div class="container">
    <div class="row">
        <figure class="logo col-md-3">
            <a href="#">
                <img src="/images/logo.png"/>
            </a>
        </figure>
        <div class="col-md-6">

        </div>
        @if (Auth::check())
            <div class="auth_btns col-md-3">
                <a class="btn btn-default" href="/logout">Выйти из системы</a>
            </div>
        @else
            <div class="auth_btns  col-md-3">
                <a class="btn btn-default" href="login">Войти в систему</a>
            </div>
        @endif
    </div>
</div>