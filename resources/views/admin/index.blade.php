@extends('layouts.app')

@section('title', 'Dashboard')

@section('content')
<!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0 dashboard-card-text tt-text-sm tt-font-semibold tt-leading-tight">Dashboard</h1>
          </div><!-- /.col -->
          <div class="col-sm-6 d-none">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#"><i class="fas fa-home"></i></a></li>
              <li class="breadcrumb-item active">Dashboard</li>
            </ol>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->
    
    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
        <!-- Small boxes (Stat box) -->
        <div class="row">
          <div class="col-lg-3 col-6">
            <!-- small box -->
            <div class="small-box bg-white">
              <div class="inner">
                <h3 class="dashboard-card-text">{{ $order }}</h3>

                <p class="dashboard-card-text">Total Orders</p>
              </div>
              <div class="icon">
                <i class="fas fa-edit tt-text-color" style="font-size: 30px;"></i>
              </div>
              <a href="/admin/orders" class="small-box-footer tt-light-gray">View More <i class="fas fa-arrow-circle-right"></i></a>
            </div>
          </div>
          <!-- ./col -->
          <div class="col-lg-3 col-6">
            <!-- small box -->
            <div class="small-box bg-white">
              <div class="inner">
                <h3 class="dashboard-card-text">{{ $customer }}</h3>

                <p class="dashboard-card-text">Total Customers</p>
              </div>
              <div class="icon">
                <i class="fas fa-users tt-text-color" style="font-size: 30px;"></i>
              </div>
              <a href="/admin/customers" class="small-box-footer">View More <i class="fas fa-arrow-circle-right"></i></a>
            </div>
          </div>
          <!-- ./col -->
          <div class="col-lg-3 col-6">
            <!-- small box -->
            <div class="small-box bg-white">
              <div class="inner">
                <h3 class="dashboard-card-text">{{ $product }}</h3>

                <p class="dashboard-card-text">Total Products</p>
              </div>
              <div class="icon">
                <i class="fas fa-utensils tt-text-color" style="font-size: 30px;"></i>
              </div>
              <a href="/admin/products" class="small-box-footer">View More <i class="fas fa-arrow-circle-right"></i></a>
            </div>
          </div>
          <!-- ./col -->
          <div class="col-lg-3 col-6">
            <!-- small box -->
            <div class="small-box bg-white">
              <div class="inner">
                <h3 class="dashboard-card-text">{{ $user }}</h3>

                <p class="dashboard-card-text">Total users</p>
              </div>
              <div class="icon">
                <i class="fas fa-user tt-text-color" style="font-size: 30px;"></i>
              </div>
              <a href="/admin/users" class="small-box-footer">View More <i class="fas fa-arrow-circle-right"></i></a>
            </div>
          </div>
          <!-- ./col -->
        </div>




        <div class="row">
          <!-- left column -->
          <div class="col-md-6">
            <!-- general form elements -->
            <div class="card">
              <div class="card-header">
                <h3 class="card-title">Quick Product</h3>
              </div>
              <!-- /.card-header -->
              <!-- form start -->
              <form action="{{ route('admin.products.store') }}" method="POST" enctype="multipart/form-data">
                        @csrf
                        
                      <div class="card-body">
                        <div class="form-group">
                          <p class="mb-1 label">Name</p>
                          <input type="text" name="name" class="form-control"  placeholder="Enter Product Name">
                        </div>

                        <div class="form-group">
                            <p class="mb-1 label">Description</p>
                            <textarea  name="description" class="form-control"  placeholder="Product Description" rows="3"></textarea>
                        </div>

                        <div class="form-group">
                            <p class="mb-1 label">Price</p>
                            <input type="number" name="price" class="form-control"  placeholder="Price">
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
            <!-- /.card -->
          </div>
          <!--/.col (left) -->


          <!-- right column -->
          <div class="col-md-6">
                      <!-- PRODUCT LIST -->
                      <div class="card">
                        <div class="card-header">
                          <h3 class="card-title">Recently Added Products</h3>
                        </div>
                        <!-- /.card-header -->
                        @if ($products->isEmpty())
                        <div class="text-center">
                          <p class="lead"> There is no products</p>

                        </div>
                        
                        @else
                        <div class="card-body p-0">
                          <ul class="products-list product-list-in-card pl-2 pr-2">
                            @foreach ($products as $product)
                            <li class="item">
                              <div class="product-img">
                                <img src="{{asset('/storage/images/'.$product->image)}}" alt="Product Image" class="rounded-circle img-size-50">
                              </div>
                              <div class="product-info">
                                <a href="javascript:void(0)" class="product-title label">{{ $product->name }}
                                  <span class="float-right label">N{{ number_format($product->price,2) }}</span></a>
                                <span class="product-description">
                                  {{ $product->description }}
                                </span>
                              </div>
                            </li>
                            <!-- /.item -->
                            @endforeach
                          </ul>
                        </div>
                        <!-- /.card-body -->
                        <div class="card-footer text-center">
                          <a href="/admin/products" class="uppercase" style="color : #FD514F;">View All Products</a>
                        </div>
                        <!-- /.card-footer -->
                        @endif
                      </div>
                      <!-- /.card -->
          </div>
          <!--/.col (right) -->
        </div>

       <div class="row">
            <div class="col-12">
              <div class="card">
                <div class="card-header">
                  <h3 class="card-title">All Orders</h3>
                </div>
                
                <!-- /.card-header -->
                <div class="card-body table-responsive">
                  @if ($orders->isEmpty())
                  <div class="text-center">
                    <p class="lead"> There is no orders yet.</p>
                    
                  </div>
                  
                  @else

                  <table id="example1" class="table table-sm table-hover mb-2">
                    <thead>
                    <tr>
                      <th>Customer Name</th>
                      <th>Customer Address</th>
                      <th>Customer Number</th>
                      <th>Order name</th>
                      <th>Status</th>
                    </tr>
                    </thead>
                    
                    <tbody>
                        @foreach ($orders as $order)
                        <tr>
                            
                            <td>{{ $order->customer_name }}</td>
                            <td>{{ $order->customer_address }}</td>
                            <td>{{ $order->customer_number }}</td>
                            <td>{{ $order->product }}</td>
                            <td>{{ $order->status }}</td>
                        </tr>  
                        @endforeach
                  </table>
                  @endif

                </div>
                <!-- /.card-body -->
              </div>
            </div>
          </div>

        </div>
      </section>
@endsection

