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
                  <h3 class="card-title">SHOPS <small>Form</small></h3>
                </div>
                <!-- /.card-header -->
                <!-- form start -->
                <form action={{ route('Shops-insert') }} method="post" id="quickForm" novalidate="novalidate" enctype="multipart/form-data">
                     @csrf
                     
                    
                  <div class="card-body">
                    <div class="form-group">
                   @error('name')
                     <span>invalid name</span>
                   @enderror
                      <label for="title">Name</label>
                      <input type="text" name="title" class="form-control" id="title" placeholder="Name">
                    </div>
                    <div class="form-group">
                      @error('img')
                      <span>put your image</span>
                    @enderror
                        <label for="img">image</label>
                        <input type="file" name="img" class="form-control" id="img" placeholder="image">
                      </div>
                    <div class="form-group">
                      @error('address')
                        <span>invalid address</span>
                      @enderror
                      <label for="address"> ADDRESS </label>
                      <textarea name="address" id="address" class="form-control" rows="3" placeholder="ADDRESS ..."></textarea> 
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