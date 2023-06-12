
@extends('layout.Admin')

@section('content')

<section class="content">
    <div class="container-fluid">
      <div class="row">
        <div class="col-12">
          <!-- Default box -->
         
          <div class="container-fluid">
            <div class="row">
              <!-- left column -->
              <div class="col-md-12">
                <!-- jquery validation -->
                <div class="card card-primary">
                  <div class="card-header">
                    <h3 class="card-title">PRODUCTS <small>Form</small></h3>
                  </div>
                  <!-- /.card-header -->
                  <!-- form start -->
                  <form action="{{ route('Product-insert') }}" method="post" id="quickForm" novalidate="novalidate">
                    @csrf
                    <div class="card-body">
                      <div class="form-group">
                        <label for="name">Name</label>
                        <input type="text" name="name" class="form-control" id="name" placeholder="Name" >
                      </div>
                     
                      <div class="form-group">
                        <label for="price">price</label>
                        <input type="number" name="price" class="form-control" id="price" placeholder="price" ?>
                      </div>
                     
                             
                          
                      <div class="form-Group">
                        <label>category</label>
                        <select name="category" class="form-control">
                          @foreach ($categories as $category)
                          <option value="{{ $category->id }}">{{ $category->name }}</option> 
                          @endforeach
                        
                          
                         
                          <option ></option>
                       
                        </select>
                      </div>
                      <div class="form-Group">
                        <label>shops</label>
                        <select name="shop" class="form-control">
                        @foreach ($shops as $shop)
                            
                        <option value="{{ $shop->id }}">{{ $shop->title }}</option> 
                          @endforeach
                            
                        
                        </select>
                      </div>
                          
                    <!-- /.card-body -->
                    <div class="card-footer">
                      <button type="submit" class="btn btn-primary">Submit</button>
                    </div>
                  </form>
                </div>
                <!-- /.card -->
                </div>
              <!--/.col (left) -->
              <!-- right column -->
              <div class="col-md-6">
    
              </div>
              <!--/.col (right) -->
            </div>
            <!-- /.row -->
          </div>
          <!-- /.card -->
        </div>
      </div>
    </div>
  </section>

@endsection