@extends('layouts.app')
@section('content')
<main class="container"  >

  <div class="row">
    <a href="#"class='btn btn-warning'>pay price</a>
    @foreach ($baskets as $basket)
    <h2>name:{{ $basket->product()->name }}</h2>
    <h2>count:{{ $basket->count }}</h2>
    <h2>price:{{ $basket->product()->price }}</h2>
    @endforeach
   </div>
    @foreach ($products as $product)
    <h2 class="alert alert-primary">Shoes Shop</h2>
    
    <section class="card card-blue" style="text-align:center"; >
    
      <div class="product-image">
        <img src={{ asset('img/'.$shop->img) }} alt="OFF%-Edition" draggable="false" />
      </div>
      <div class="product-info">
        <h2>{{ $shop->title }}</h2>
        
        <p>{{$shop->address}}</p>

        <div class="price">{{ $product->price }}$</div>
      </div>
      @if (Auth::user())
      
     
        <a class="buy-btn" href={{ route('shop',['id'=>$shop->id]) }}>Buy Now</a>
        <a class="fav" href={{ route('basket.add',['product_id'=>$product->id, 'shope_id'=>$shop->id]) }}>add</a>
        
     
      @endif
     
      <br>
      <p style="text-align:center;">behtarin kafsha ra az ma bekhahid</p>
    </section>
    
    @endforeach
  </main>
@endsection 
