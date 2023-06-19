@extends('layout.Home')

@section('content')

@foreach ($category->products() as $product)
    

<div class="row mt-1 ms-1"style='width:15rem;'> 
<div class='card-body'>

{{-- <h2><a href={{ route('shop',['id'=>$category->id]) }}>go to shop</h2> --}}
   <h5 class='card-title'> {{ $product->name }}</h5>
   <h5 class='card-title'> {{ $product->price }}</h5>

</a>



 
</p>
</div> 

</div>
@endforeach




@endsection