@extends('layouts.app')

@section('title', 'Orders')

@section('content')
    <!-- Content Header (Page header) -->
    <div class="content-header">
        <div class="container-fluid">
          <div class="row mb-2">
            <div class="col-sm-6">
              <h1 class="m-0 dashboard-card-text">Orders</h1>
            </div><!-- /.col -->
            <div class="col-sm-6">
              <ol class="breadcrumb float-sm-right">
                <li class="breadcrumb-item"><a href="{{ route('dashboard')}}"><i class="fas fa-home"></i></a></li>
                <li class="breadcrumb-item active">Orders</li>
              </ol>
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
                      <th>actions</th>
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
                            <td>
                              <div class="dropdown">
                                  <button class="btn dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                    Action
                                  </button>
                                  <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
              
                                  <a class="dropdown-item" onclick="event.preventDefault();
                                      if(confirm('Are you sure you want to mark dis order as delivered?')){
                                          document.getElementById('form-deliver-{{ $order->id }}').submit()
                                      }">Deliver
                                  </a>

                                  <a class="dropdown-item" onclick="event.preventDefault();
                                      if(confirm('Are you sure you want to pend this order?')){
                                          document.getElementById('form-pend-{{ $order->id }}').submit()
                                      }">Pend
                                  </a>

                                  <a class="dropdown-item" onclick="event.preventDefault();
                                      if(confirm('Are you sure you want to cancel this order?')){
                                          document.getElementById('form-cancel-{{ $order->id }}').submit()
                                      }">Cancel
                                  </a>
                              
                                  <a class="dropdown-item" onclick="event.preventDefault();
                                      if(confirm('Are you sure you want to delete this order?')){
                                          document.getElementById('form-delete-{{ $order->id }}').submit()
                                      }">Delete
                                  </a>
              
                                  
              
                                  </div>
                              </div>

                              <form style="display:none" id="{{ 'form-deliver-'.$order->id }}" action="{{ route('admin.orders.deliver',$order->id) }}" method="POST">
                                  @csrf
                                  @method('PUT')
                              </form>

                              <form style="display:none" id="{{ 'form-pend-'.$order->id }}" action="{{ route('admin.orders.pend',$order->id) }}" method="POST">
                                  @csrf
                                  @method('PUT')
                              </form>

                              <form style="display:none" id="{{ 'form-cancel-'.$order->id }}" action="{{ route('admin.orders.cancel',$order->id) }}" method="POST">
                                  @csrf
                                  @method('PUT')
                              </form>
              
                              <form style="display:none" id="{{ 'form-delete-'.$order->id }}" action="{{ route('admin.orders.destroy',$order->id) }}" method="POST">
                                  @csrf
                                  @method('DELETE')
                              </form>
                          </td>
                        </tr>  
                        @endforeach
                  </table>
                  {!! $orders->links() !!}
                  @endif

                </div>
                <!-- /.card-body -->
              </div>
            </div>
          </div>
        </div>
    </section>
@endsection