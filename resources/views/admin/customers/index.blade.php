@extends('layouts.app')

@section('title', 'Customers')

@section('content')
    <!-- Content Header (Page header) -->
    <div class="content-header">
        <div class="container-fluid">
          <div class="row mb-2">
            <div class="col-sm-6">
              <h1 class="m-0 dashboard-card-text">Customers</h1>
            </div><!-- /.col -->
            <div class="col-sm-6">
              <a href="{{ route('admin.customers.create')}}" class="btn float-sm-right">Add Customer</a>
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
                  <h3 class="card-title">All customers</h3>
                </div>
                
                <!-- /.card-header -->
                <div class="card-body table-responsive">
                  @if ($customers->isEmpty())
                  <div class="text-center">
                    <p class="lead"> There is no customers</p>
                    <a href="{{ route('admin.customers.create')}}" class="btn">Add Customer</a>
                  </div>
                  
                  @else

                  <table id="example1" class="table table-sm table-hover mb-2">
                    <thead>
                    <tr>
                      <th>Name</th>
                      <th>Email</th>
                      <th>Avatar</th>
                      <th>Address</th>
                      <th>Actions</th>
                    </tr>
                    </thead>
                    <tbody>
                        @foreach ($customers as $customer)
                        <tr>
                            
                            <td>{{ $customer->firstname }} {{ $customer->lastname }}</td>
                            <td>{{ $customer->email }}</td>
                            <td><img src="{{asset('/storage/images/'.$customer->avatar)}}" alt="avatar" class="img-size-50"  /></td>
                            <td>{{ $customer->address }}</td>
                            <td>
                              <div class="dropdown">
                                  <button class="btn dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                    Action
                                  </button>
                                  <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
              
                            
                              
                                  <a class="dropdown-item" onclick="event.preventDefault();
                                      if(confirm('Are you sure you want to delete')){
                                          document.getElementById('form-delete-{{ $customer->id }}').submit()
                                      }">Delete
                                  </a>
              
                                  <a class="dropdown-item" href="{{ route('admin.customers.edit',$customer->id) }}">Edit</a>
              
                                  </div>
                              </div>
              
                              <form style="display:none" id="{{ 'form-delete-'.$customer->id }}" action="{{ route('admin.customers.destroy',$customer->id) }}" method="POST">
                                  @csrf
                                  @method('DELETE')
                              </form>
                          </td>
                        </tr>  
                        @endforeach
                  </table>
                  {!! $customers->links() !!}
                  @endif

                </div>
                <!-- /.card-body -->
              </div>
            </div>
          </div>
        </div>
    </section>
@endsection