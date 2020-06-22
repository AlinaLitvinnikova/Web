@extends('layouts.header')
@section('content')
<div id="range">
<div class="outer">
<div class="middle">
<div class="inner">
<div class="login-wr">
@if (!Auth::check())
<h2>Вход</h2>     
<div class="form">
<form method="get" action="/auth" id="login">
<input type="text" name="login" placeholder="Пользователь">
<input type="password" name="password" placeholder="Пароль">
<button> Авторизация </button>
<a href="reg.html"> <p> У вас нет аккаунта? Регистрация </p></a>
</form>
@else
   <a href="/logout">выход</a>
@endif
</div>
</div>
</div>
</div>
</div>
</div>
@endsection('content')
</body>
</html>