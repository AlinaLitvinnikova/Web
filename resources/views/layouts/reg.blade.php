@section('content')
@extends('layouts.header')
<form style="width: 550px; height: 550px; margin-left: 35%;">
  <div class="container">
    <h1>Регистрация</h1>
    <p>Пожалуйста, заполните эту форму чтобы создать учетную запись.</p>
    <hr>
    <input type="text" placeholder="Введите Email" name="email" required>

    <input type="password" placeholder="Введите пароль" name="psw" required>

    <input type="password" placeholder="Повторите пароль" name="psw-repeat" required>

    <label>
      <input type="checkbox" checked="checked" name="remember" style="margin-bottom:15px"> Запонить меня</label>
	
    <div class="clearfix">
      <button type="button" class="cancelbtn">Отменить</button>
      <button type="submit" class="signupbtn">Регистрация</button>
    </div>
  </div>
</form>
@endsection('content')
</body>
</html>