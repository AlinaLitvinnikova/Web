@extends('layouts.header')
@section('content')

     {{$product}}
	 
	 
@foreach($product as $products)
<div class="product-item">
<img src="платье1.jpg">
<div class="product-list">
<h3>Вечернее платье SANTA&BARBARA</h3>
<span class="price">₽ 11 999</span>
<a href="#" class="button">В корзину</a>
</div>
</div>


</body>
@endforeach
@endsection('content')
</html>