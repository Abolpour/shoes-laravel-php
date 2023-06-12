@extends('layouts.app')

@section('content')

<div  class="row">
    @foreach ($shops as $shop)
    

    <div class="row mt-1 ms-1"style='width:15rem;'> 
    <div class='card-body'>
  
<h2><a href={{ route('shop',['id'=>$shop->id]) }}>go to shop</h2>
       <h5 class='card-title'> {{ $shop->name }}</h5>
    </a>
    <img src="{{ asset('img/'.$shop->img) }}" width="200" height="100" alt="">
    
    <p class="card-text">
    {{$shop->address}}
     
    </p>
    </div> 
    
   </div>
   @endforeach
    
</div>


@endsection