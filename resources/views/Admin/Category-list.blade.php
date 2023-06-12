@extends('layout.Admin')

@section('content')

<section class="content">
  <div class="container-fluid">
    <div class="row">
      <div class="col-12">
       
        <!-- /.card -->

        <div class="card">
          <div class="card-header">
            <h3 class="card-title">DataTable with default features</h3>
          </div>
          <!-- /.card-header -->
          <div class="card-body">
            
          <a href="{{ route('Category-Create') }}" type="button" class="btn  btn-warning btn-lg">Create</a>
         
          <table id="example1" class="table table-bordered table-striped">
              <thead>
              <tr>

                <th>ID</th>
                <th>Name</th>
                <th>Description</th>
                <th>Edit</th>
                <th>Delete</th>
              </tr>
              </thead>
              <tbody>
              @foreach ($categories as $category)
                <tr>
                
                <td>{{ $category->id }}</td>
                <td>{{ $category->name }}</td>
                <td>{{ $category->description }}</td>
                <td><a href="{{ route('Category-Edit',['id'=>$category->id ]) }}">Edit</a></td>
                <td><a href="{{ route('Category-Delete',['id'=>$category->id ]) }}">Delete</td>
              </tr>
              @endforeach
                   
              
              <thead>
              <tr>
                <th>ID</th>
                <th>Name</th>
                <th>Address</th>
                <th>Edit</th>
                <th>Delete</th>
              </tr>
              </thead>
             
            
              </tfoot>
              
            </table>
          </div>
          <!-- /.card-body -->
        </div>
        <!-- /.card -->
      </div>
      <!-- /.col -->
    </div>
    <!-- /.row -->
  </div>
  <!-- /.container-fluid -->
</section>

@endsection