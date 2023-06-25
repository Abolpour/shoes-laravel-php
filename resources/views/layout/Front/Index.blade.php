@extends('layouts.app')

@section('content')

<div  class="video">
  <video width="100%" height="150%" loop autoplay muted>
    <source src="{{ asset('img/shop.mp4') }}" type="video/mp4">
    </div>
      </video>


@foreach ($slidershops as $slider)
<div id="carouselExampleCaptions" class="carousel slide">
  <div class="carousel-indicators">
    <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
    <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1" aria-label="Slide 2"></button>
    <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2" aria-label="Slide 3"></button>
  </div>
  @php
    $counter=0;
  @endphp
  <div class="carousel-inner">
    <div class="carousel-item {{ $counter==0 ? 'active' : '' }}" >
      <img src="{{ asset('img/'.$slider->img) }}" class="d-block w-100" style="height: 500px" alt="ExampleCaptions...">
      <div class="carousel-caption d-none d-md-block">
        <h5 style="color:black">{{ $slider->title }}</h5>
        <p style="color:black">{{ $slider->address }}</p>
      </div>
    </div>
    @endforeach
    @php
       $counter++;
    @endphp
    <div class="carousel-item " >
      <img src="{{ asset('img/2.png') }}" class="d-block w-100" style="height: 500px" alt="ExampleCaptions...">
      <div class="carousel-caption d-none d-md-block">
        <h5 style="color:black">Second slide label</h5>
        <p style="color:black">Some representative placeholder content for the second slide.</p>
      </div>
    </div>
    <div class="carousel-item">
      <img src="{{ asset('img/3.png') }}" class="d-block w-100" style="height: 500px"alt="ExampleCaptions...">
      <div class="carousel-caption d-none d-md-block">
        <h5 style="color:black">Third slide label</h5>
        <p style="color:black">>Some representative placeholder content for the third slide.</p>
      </div>
    </div>
  </div>
  <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Previous</span>
  </button>
  <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Next</span>
  </button>
</div>




<div  class="row" style="margin: 15%">
    <h2>all shoes</h2>
    <hr>
    @foreach ($shops as $shop)
    

    <div class="row mt-1 ms-1"style='width:15rem;'> 
    <div class='card-body'>
  
<h2><a href={{ route('shop',['id'=>$shop->id]) }}>go to shop</h2>
       <h5 class='card-title'> {{ $shop->title }}</h5>
    </a>
    <img src="{{ asset('img/'.$shop->img) }}" width="200" height="100" alt="">
    
    <p class="card-text">
    {{$shop->address}}
     
    </p>
    </div> 
    
   </div>
   @endforeach
    <div class="row" style="margin-left:35% " >
        
{{ $shops->links() }}
    </div>
</div>

<div  class="row" style="margin: 15%">
    <h2>newest shoes</h2>
    <hr>
    @foreach ($shops as $shop)
    

    <div class="row mt-1 ms-1"style='width:15rem;'> 
    <div class='card-body'>
  
<h2><a href={{ route('shop',['id'=>$shop->id]) }}>go to shop</h2>
       <h5 class='card-title'> {{ $shop->title }}</h5>
    </a>
    <img src="{{ asset('img/'.$shop->img) }}" width="200" height="100" alt="">
    
    <p class="card-text">
    {{$shop->address}}
     
    </p>
    </div> 
    
   </div>
   @endforeach
    

    </div>

    <div  class="row" style="margin: 15%">
        <h2>best shoes</h2>
        <hr>
        @foreach ($bestshops as $shop)
        
    
        <div class="row mt-1 ms-1"style='width:15rem;'> 
        <div class='card-body'>
      
    <h2><a href={{ route('shop',['id'=>$shop->id]) }}>go to shop</h2>
           <h5 class='card-title'> {{ $shop->title }}</h5>
        </a>
        <img src="{{ asset('img/'.$shop->img) }}" width="200" height="100" alt="">
        
        <p class="card-text">
        {{$shop->address}}
         
        </p>
        </div> 
        
       </div>
       @endforeach
        
    
        </div>
    
        <div  class="row" style="margin: 15%">
            <h2> shoes model tags</h2>
            <hr>
            
            @foreach ($categories as $category)
            
        
           
              
        <a href={{ route('category',['id'=>$category->id]) }}>{{ $category->name }}</a>
                    
            
             
              
           @endforeach
            
        
            </div>
            <h2> total users</h2>
            <hr>
            <div class="row mt-1 ms-1"style='width:85rem;'> 
                <p>{{ $user }}</p>



                <!-- Footer -->
<footer class="text-center text-lg-start bg-light text-muted">
    <!-- Section: Social media -->
    <section class="d-flex justify-content-center justify-content-lg-between p-4 border-bottom">
      <!-- Left -->
      <div class="mone d-lg-blocke-5 d-n">
        <span>Get connected with us on social networks:</span>
      </div>
      <!-- Left -->
  
      <!-- Right -->
      <div>
        <a href="" class="me-4 text-reset">
          <i class="fab fa-facebook-f">facebook</i>
        </a>
        <a href="" class="me-4 text-reset">
          <i class="fab fa-twitter">twitter</i>
        </a>
        <a href="" class="me-4 text-reset">
          <i class="fab fa-google">google</i>
        </a>
        <a href="" class="me-4 text-reset">
          <i class="fab fa-instagram">instagram</i>
        </a>
        <a href="" class="me-4 text-reset">
          <i class="fab fa-linkedin">linkedin</i>
        </a>
        <a href="" class="me-4 text-reset">
          <i class="fab fa-github">github</i>
        </a>
      </div>
      <!-- Right -->
    </section>
    <!-- Section: Social media -->
  
    <!-- Section: Links  -->
    <section class="">
      <div class="container text-center text-md-start mt-5">
        <!-- Grid row -->
        <div class="row mt-3">
          <!-- Grid column -->
          <div class="col-md-3 col-lg-4 col-xl-3 mx-auto mb-4">
            <!-- Content -->
            <h6 class="text-uppercase fw-bold mb-4">
              <i class="fas fa-gem me-3"></i>Company name
            </h6>
            <p>
              Here you can use rows and columns to organize your footer content. Lorem ipsum
              dolor sit amet, consectetur adipisicing elit.
            </p>
          </div>
          <!-- Grid column -->
  
          <!-- Grid column -->
          <div class="col-md-2 col-lg-2 col-xl-2 mx-auto mb-4">
            <!-- Links -->
            <h6 class="text-uppercase fw-bold mb-4">
              Products
            </h6>
            <p>
              <a href="#!" class="text-reset">Angular</a>
            </p>
            <p>
              <a href="#!" class="text-reset">React</a>
            </p>
            <p>
              <a href="#!" class="text-reset">Vue</a>
            </p>
            <p>
              <a href="#!" class="text-reset">Laravel</a>
            </p>
          </div>
          <!-- Grid column -->
  
          <!-- Grid column -->
          <div class="col-md-3 col-lg-2 col-xl-2 mx-auto mb-4">
            <!-- Links -->
            <h6 class="text-uppercase fw-bold mb-4">
              Useful links
            </h6>
            <p>
              <a href="#!" class="text-reset">Pricing</a>
            </p>
            <p>
              <a href="#!" class="text-reset">Settings</a>
            </p>
            <p>
              <a href="#!" class="text-reset">Orders</a>
            </p>
            <p>
              <a href="#!" class="text-reset">Help</a>
            </p>
          </div>
          <!-- Grid column -->
  
          <!-- Grid column -->
          <div class="col-md-4 col-lg-3 col-xl-3 mx-auto mb-md-0 mb-4">
            <!-- Links -->
            <h6 class="text-uppercase fw-bold mb-4">Contact</h6>
            <p><i class="fas fa-home me-3"></i> New York, NY 10012, US</p>
            <p>
              <i class="fas fa-envelope me-3"></i>
              info@example.com
            </p>
            <p><i class="fas fa-phone me-3"></i> + 01 234 567 88</p>
            <p><i class="fas fa-print me-3"></i> + 01 234 567 89</p>
          </div>
          <!-- Grid column -->
        </div>
        <!-- Grid row -->
      </div>
    </section>
    <!-- Section: Links  -->
  
    <!-- Copyright -->
    <div class="text-center p-4" style="background-color: rgba(0, 0, 0, 0.05);">
      © 2021 Copyright:
      <a class="text-reset fw-bold" href="https://mdbootstrap.com/">MDBootstrap.com</a>
    </div>
    <!-- Copyright -->
  </footer>
  <!-- Footer -->
@endsection

