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
            
          <a href="{{ route('Shops-Create') }}" type="button" class="btn  btn-warning btn-lg">Create</a>
         
          <table id="example1" class="table table-bordered table-striped">
              <thead>
              <tr>

              
                <th>id</th>
                <th>name</th>
                <th>address</th>
                <th>image</th>
                <th>Edit</th>
                <th>Delete</th>
              </tr>
              </thead>
              <tbody>
              @foreach ($shops as $shop)
                <tr>
                <td>{{ $shop->id }}</td>
                <td>{{ $shop->title }}</td>
                <td>{{ $shop->address }}</td>
               
                <td><img src="{{ asset('img/'.$shop->img) }}" width="60" height="60" alt=""></td>
                <td><a href="{{ route('Shops-Edit',['id'=>$shop->id ]) }}">Edit</a></td>
                <td><a href="{{ route('Shops-Delete',['id'=>$shop->id ]) }}">Delete</a></td>
                </tr>
              @endforeach
                 <thead>
                 <tr>
                  <th>id</th>
                  <th>name</th>
                  <th>address</th>
                  <th>image</th>
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