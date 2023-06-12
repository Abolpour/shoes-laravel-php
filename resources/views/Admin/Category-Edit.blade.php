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
                <form action={{ route('Category-Update') }} method="post" id="quickForm" novalidate="novalidate">
                     @csrf
                     <input type="hidden" name="id" value="{{ $category->id }}">;
                  <div class="card-body">
                    <div class="form-group">
                      <label for="name">Name</label>
                      <input type="text" name="name" class="form-control" value={{ $category->name }} id="name" placeholder="Name">
                    </div>
                  
                    <div class="form-group">
                      <label for="description"> ADDRESS </label>
                      <textarea name="description" id="description" class="form-control"  rows="3" placeholder="description ...">{{ $category->description }}</textarea> 
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