@extends("layouts.template")

@section("content")

<div class="panel">
    <ul class="panel__menu" id="menu">
    <hr/>
    <li id="signIn"><a href="#">Iniciar sesión</a></li>
    <li id="signUp"><a href="#">Registrarte</a></li>
    </ul>
    <div class="panel__wrap">
        <div class="panel__box active" id="signInBox">
            <form action="{{route('login')}}" method="POST">
            {{csrf_field()}}
            <label>Email
                <input type="email" name="email" placeholder="email">
            </label>
            <label>Contraseña
                <input type="password" name="password" placeholder="contraseña">
            </label>
            <input type="submit"/>
            <a href="{{ url('auth/google') }}" class="btn btn-primary">Entrar con Google</a>
            </form>
        </div>
        <div class="panel__box" id="signUpBox">
            <form method="POST" action="/userRegister" >
                {{csrf_field()}}
                <label>Nombre
                    <input type="text" name="name" placeholder="nombre">
                </label>
                <label>Apellido
                    <input type="text" name="last_name" placeholder="apellido">
                </label>
                <label>Email
                    <input type="email" name="email" placeholder="mail">
                </label>
                <label>Contraseña
                    <input type="password" name="password" placeholder="contraseña">
                </label>
                <label>Confirme la contraseña
                    <input type="password" name="password_confirmation" placeholder="contraseña confirmar">
                </label>
                <input type="submit"/>
                <a href="{{ url('auth/google') }}" class="btn btn-primary">Registrate con Google</a>
            </form>
        </div>
    </div>
</div>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
@endsection