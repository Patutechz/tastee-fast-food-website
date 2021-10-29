@extends('layouts.app')

@section('title', 'Create Customer')

@section('content')
    <!-- Content Header (Page header) -->
    <div class="content-header">
        <div class="container-fluid">
          <div class="row mb-2">
            <div class="col-sm-6">
              <h1 class="m-0 dashboard-card-text">Add Customer</h1>
            </div><!-- /.col -->
            <div class="col-sm-6">
              <ol class="breadcrumb float-sm-right">
                <li class="breadcrumb-item"><a href="#"><i class="fas fa-home"></i></a></li>
                <li class="breadcrumb-item active">Create Customer</li>
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
                      <h3 class="card-title">Add customer</h3>
                    </div>
                    <!-- /.card-header -->
                    <!-- form start -->
                    <div class="row justify-content-center">
                <!-- left column -->
                <div class="col-md-8">
                    <form action="{{ route('admin.customers.store') }}" method="POST" enctype="multipart/form-data">
                        @csrf
                        
                      <div class="card-body">
                        <div class="form-group">
                          <label>First Name</label>
                          <input type="text" name="firstname" class="form-control"  placeholder="First Name">
                        </div>

                        <div class="form-group">
                          <label>Last Name</label>
                          <input type="text" name="lastname" class="form-control"  placeholder="Last Name">
                        </div>

                        <div class="form-group">
                          <label>Contact</label>
                          <input type="text" name="contact" class="form-control"  placeholder="Contact">
                        </div>

                        <div class="form-group">
                          <label>Email</label>
                          <input type="text" name="email" class="form-control"  placeholder="Email">
                        </div>

                        <div class="form-group">
                            <label>Address</label>
                            <textarea  name="address" class="form-control"  placeholder="Address" rows="3"></textarea>
                        </div>

                        <div class="form-group">
                            <label>Avatar</label>
                            <input type="file" name="avatar" class="form-control" />
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