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
            
          <a href="{{ route('User-Create') }}" type="button" class="btn  btn-warning btn-lg">Create</a>
         
          <table id="example1" class="table table-bordered table-striped">
              <thead>
              <tr>
                <th>id</th>
                <th>user</th>
                <th>pass</th>
                <th>Edit</th>
                <th>Delete</th>
              </tr>
              </thead>
              <tbody>
              @foreach ($users as $user)
                <tr>
                <td>{{ $user->id }}</td>
                <td> {{ $user->user }}</td>
                <td>{{ $user->pass }}</td>
                <td><a href= {{ route('User-Edit',['id'=>$user->id ]) }} >Edit</a> </td>
                <td><a href= {{ route('User-Delete',['id'=>$user->id ]) }} >Delete</a> </td>
              </tr>
                   
              @endforeach
              <thead>
              <tr>
                <th>id</th>
                <th>user</th>
                <th>pass</th>
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