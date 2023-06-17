@extends('layouts.app')
@section('content')
<main class="container"  >
  
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
      
      <div class="btn">
     
        <button class="buy-btn" onclick="document.location.href={{ route('shop',['id'=>$shop->id]) }}">Buy Now</button>
        <button class="fav">
          
          <svg class="svg" id="i-star" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 30 30" stroke="#000" stroke-linecap="round" stroke-linejoin="round" stroke-width="2">
            <path d="M16 2 L20 12 30 12 22 19 25 30 16 23 7 30 10 19 2 12 12 12 Z" />
          </svg>
        </button>
        
      </div>
      <br>
      <p style="text-align:center;">behtarin kafsha ra az ma bekhahid</p>
    </section>
    
    @endforeach
  </main>
@endsection 
