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
            
          <a href="{{ route('Product-Create') }}" type="button" class="btn  btn-warning btn-lg">Create</a>
         
          <table id="example1" class="table table-bordered table-striped">
              
            <thead>
                
                <tr>
                <th>id</th>
                <th>Name</th>
                <th>Price</th>
                <th>category</th>
                <th>shop</th>
                <th>Edit</th>
                <th>Delete</th>
              </tr>
              </thead>
              <tbody>
                @foreach ($products as $product)
                
             <tr>
              <td>{{$product->id }}</td>
              <td>{{$product->name }}</td>
              <td>{{$product->price }}</td>
              <td>{{$product->category()->name}}</td>
              <td>{{$product->shop()}}</td>
              <td><a href={{route('Product-Edit',['id'=>$product->id ])}} >Edit</a></td>
              <td><a href={{route('Product-Delete',['id'=>$product->id ])}} >Delete</a></td>
              </tr>
              @endforeach
               <thead>
              <tr>
                <th>id</th>
                <th>Name</th>
                <th>Price</th>
                <th>category</th>
                <th>shop</th>
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