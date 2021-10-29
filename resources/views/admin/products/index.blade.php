@extends('layouts.app')

@section('title', 'Products')

@section('content')
    <!-- Content Header (Page header) -->
    <div class="content-header">
        <div class="container-fluid">
          <div class="row mb-2">
            <div class="col-sm-6">
              <h1 class="m-0 dashboard-card-text">Products</h1>
            </div><!-- /.col -->
            <div class="col-sm-6">
              <a href="{{ route('admin.products.create')}}" class="float-sm-right btn">Add Product</a>
            </div><!-- /.col -->
          </div><!-- /.row -->
        </div><!-- /.container-fluid -->
      </div>
      <!-- /.content-header -->

      <!-- Main content -->
    <section class="content">
        <div class="container-fluid">
            
        <div class="row">
            <div class="col-12">
              <x-alert />
              <div class="card">
                <div class="card-header">
                  <h3 class="card-title">All Products</h3>
                </div>
                
                <!-- /.card-header -->
                <div class="card-body table-responsive">
                  @if ($products->isEmpty())
                  <div class="text-center">
                    <p class="lead"> There is no products.</p>
                    <a href="{{ route('admin.products.create')}}" class="btn">Add Product</a>
                  </div>
                  
                  @else

                  <table id="example1" class="table table-sm table-hover mb-2">
                    <thead>
                    <tr>
                      <th>Name</th>
                      <th>Description</th>
                      <th>image</th>
                      <th>price</th>
                      <th>actions</th>
                    </tr>
                    </thead>
                    <tbody>
                        @foreach ($products as $product)
                        <tr>
                            
                            <td>{{ $product->name }}</td>
                            <td>{{ $product->description }}</td>
                            <td><img src="{{asset('/storage/images/'.$product->image)}}" alt="avatar" class="img-size-50" /></td>
                            <td>N{{ number_format($product->price,2) }}</td>
                            <td>
                              <div class="dropdown">
                                  <button class="btn dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                    Action
                                  </button>
                                  <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
              
                            
                              
                                  <a class="dropdown-item" onclick="event.preventDefault();
                                      if(confirm('Are you sure you want to delete')){
                                          document.getElementById('form-delete-{{ $product->id }}').submit()
                                      }">Delete
                                  </a>
              
                                  <a class="dropdown-item" href="{{ route('admin.products.edit',$product->id) }}">Edit</a>
              
                                  </div>
                              </div>
              
                              <form style="display:none" id="{{ 'form-delete-'.$product->id }}" action="{{ route('admin.products.destroy',$product->id) }}" method="POST">
                                  @csrf
                                  @method('DELETE')
                              </form>
                          </td>
                        </tr>  
                        @endforeach
                  </table>
                  {!! $products->links() !!}
                  @endif

                </div>
                <!-- /.card-body -->
              </div>
            </div>
          </div>
        </div>
    </section>
@endsection