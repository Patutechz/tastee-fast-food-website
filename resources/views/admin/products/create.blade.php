@extends('layouts.app')

@section('title', 'Create Product')

@section('content')
    <!-- Content Header (Page header) -->
    <div class="content-header">
        <div class="container-fluid">
          <div class="row mb-2">
            <div class="col-sm-6">
              <h1 class="m-0 dashboard-card-text">Add Product</h1>
            </div><!-- /.col -->
            <div class="col-sm-6">
              <ol class="breadcrumb float-sm-right">
                <li class="breadcrumb-item"><a href="/admin"><i class="fas fa-home"></i></a></li>
                <li class="breadcrumb-item active">Create Product</li>
              </ol>
            </div><!-- /.col -->
          </div><!-- /.row -->
        </div><!-- /.container-fluid -->
      </div>
      <!-- /.content-header -->

    <!-- Main content -->
    <section class="content">
        <div class="container-fluid">
            <div class="row justify-content-center">
                <!-- left column -->
                <div class="col-md-12 ">
                    <x-alert />
                 
                  <div class="card">
                    <div class="card-header">
                      <h3 class="card-title">Add Product</h3>
                    </div>
                    <!-- /.card-header -->
                    <!-- form start -->
                    <div class="row justify-content-center">
                <!-- left column -->
                <div class="col-md-8">
                    <form action="{{ route('admin.products.store') }}" method="POST" enctype="multipart/form-data">
                        @csrf
                        
                      <div class="card-body">
                        <div class="form-group">
                          <p class="mb-1 label">Name</p>
                          <input type="text" name="name" class="form-control"  placeholder="">
                        </div>

                        <div class="form-group">
                          <p class="mb-1 label">Description</p>
                            <textarea  name="description" class="form-control"  placeholder="" rows="3"></textarea>
                        </div>

                        <div class="form-group">
                          <p class="mb-1 label">Price</p>
                            <input type="number" name="price" class="form-control"  placeholder="">
                        </div>

                        <div class="form-group">
                          <p class="mb-1 label">Image</p>
                            <input type="file" name="image" class="form-control" />
                        </div>
                        
                      </div>
                      <!-- /.card-body -->
                      <div class="card-footer">
                        <button type="submit" class="btn">Submit</button>
                      </div>
                    </form>
                    </div>
                    </div>
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
    </section>
@endsection