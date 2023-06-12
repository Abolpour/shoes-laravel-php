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
                <form action={{ route('Shops-Update') }} method="post" id="quickForm" novalidate="novalidate" enctype="multipart/form-data">
                     @csrf
                     <input type="hidden" name="id" value="{{ $shope->id }}">;
                  <div class="card-body">
                    <div class="form-group">
                      <label for="title">Name</label>
                      <input type="text" name="title" class="form-control" value="{{ $shope->title }}" id="title" placeholder="Name">
                    </div>
                    <div class="form-group">
                        <label for="img">image</label>
                        <input type="file" name="img" class="form-control" value= {{  $shope->img}}  id="img" placeholder="image">
                      </div>
                    <div class="form-group">
                      <label for="address"> ADDRESS </label>
                      <textarea name="address" id="address" class="form-control"  rows="3" placeholder="ADDRESS ...">{{ $shope->address }}</textarea> 
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