@section('title')
@extends('layouts.header')

@endsection
@section('content')
<link rel="stylesheet" href="reg.css">
<link href="https://fonts.googleapis.com/css?family=PT+Sans:400,700&d.." rel="stylesheet">
<link rel="stylesheet" href="fontawesome-free/css/all.min.css">
</head>
<body>
<form style="width: 550px; height: 550px; margin-left: 35%; margin-top: 5%;">
<div id="range">
<div class="outer">
<div class="middle">
<div class="inner">
<div class="login-wr">
<h2>Регистрация</h2>   
<p> Пожалуйста, заполните эту форму чтобы создать учетную запись.</p>  
    <hr>
	<form method="get" action="/registration" id="registration">
    <input type="text" placeholder="Введите логин" name="login" >

    <input type="email_address" placeholder="Введите Email" name="email_address" >

    <input type="password" placeholder="Введите пароль" name="password" >
	<div class="clearfix">
    <button type="submit" class="signupbtn">Регистрация</button>
	</hr>
    </div>
    </form>
   
	
    
  </div>
</form>
@endsection('content')
</body>
</html>