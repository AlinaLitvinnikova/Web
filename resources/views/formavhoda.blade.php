@section('content')
@extends('layouts.header')
<div id="range">
<div class="outer">
<div class="middle">
<div class="inner">
<div class="login-wr">
<h2>Вход</h2>     
<div class="form">
<input type="text" placeholder="Пользователь">
<input type="password" placeholder="Пароль">
<button> Авторизация </button>
<a href="reg.html"> <p> У вас нет аккаунта? Регистрация </p></a>
</div>
</div>
</div>
</div>
</div>
</div>
@endsection('content')
</body>
</html>