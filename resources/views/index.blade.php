@extends('layouts.header')
@section('title')

@endsection
@section('content')
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
<li class="nav-item"><a href="index.html" class="nav-link">Главная</a></li>
<li class="nav-item"><a href="index1.html" class="nav-link">Каталог</a></li>
<li class="nav-item"><a href="index2.html" class="nav-link">Оплата</a></li>
<li class="nav-item"><a href="index3.html" class="nav-link">Доставка</a></li>
<li class="nav-item"><a href="index4.html" class="nav-link">Контакты</a></li>
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

<div class="main-information">
<div class="text-inform">
<h1><strong>#Оставайтесьдома</strong></h1>
<p class="tagline">Эксклюзивные платья оптом и в розницу от производитeля</p>
<div class="inform-link">
<div class="inform-btn read">Читать далее</div>
<div class="inform-btn shop">Купить сейчас</div>
</div>
</div>

<div class="photo-model">
<img src="платье.jpg" alt="">
</div>
</div>

<div class="social">
<div class="find">
<a href="#"><i class="fas fa-map-marker-alt"></i>Найти магазин</a>
</div>

<div class="social-menu">
<h4 class="connect">оставайся на связи</h4>

<ul class="social-icon">
<li><a href="#" class="social-link"><i class="fab fa-facebook"></i></a></li>
<li><a href="#" class="social-link"><i class="fab fa-twitter"></i></a></li>
<li><a href="#" class="social-link"><i class="fab fa-pinterest"></i></a></li>
<li><a href="#" class="social-link"><i class="fab fa-youtube"></i></a></li>
<li><a href="#" class="social-link"><i class="fab fa-instagram"></i></a></li>
</ul>
</div>
</div>

</body>
@endsection('content')
</html>