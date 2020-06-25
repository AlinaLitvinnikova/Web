<!DOCTYPE html>
<html lang="ru">
<head>
<meta charset="UTF-8">
<title>
FIFIONA - интернет-магазин
</title>
<link rel="stylesheet" href="style.css">
<link href="https://fonts.googleapis.com/css?family=PT+Sans:400,700&d.." rel="stylesheet">
<link rel="stylesheet" href="fontawesome-free/css/all.min.css">


</head>

<body>
<div class="navigation">
<div class="logo">
<img src="logotype.png" alt="" class="logotype">
</div>

<div class="nav-menu">
<ul class="menu">
<li class="nav-item"><a href="/" class="nav-link">Главная</a></li>
<li class="nav-item"><a href="/index1" class="nav-link">Каталог</a></li>
<li class="nav-item"><a href="/index2" class="nav-link">Оплата</a></li>
<li class="nav-item"><a href="/index3" class="nav-link">Доставка</a></li>
<li class="nav-item"><a href="/index4" class="nav-link">Контакты</a></li>
</ul>
</div>

<div class="search-block">
<div class="searsh">
<input type="text" class="search-form" placeholder="Поиск по товарам">
<a href="/search" class="search-btn"><i class="fas fa-search"></i></a>
</div>
</div>

<div class="personal-item">
<div class="auth">
<div class="login">
<a href="formavhoda.html" class="auth-link"><i class="fas fa-user-circle"></i>Войти</a>
</div>
<div class="car">
<a href="#" class="auth-link"><i class="fas fa-shopping-cart"></i>Корзина</a>
</div>
</div>
</div>
</div>
@yield('content')
</body>
</html>