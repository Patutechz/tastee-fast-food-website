@extends('layouts.app')

@section('title', 'Employees')

@section('content')
    <!-- Content Header (Page header) -->
    <div class="content-header">
        <div class="container-fluid">
          <div class="row mb-2">
            <div class="col-sm-6">
              <h1 class="m-0 dashboard-card-text">Employees</h1>
            </div><!-- /.col -->
            <div class="col-sm-6">
              <a href="{{ route('admin.employees.create')}}" class="btn float-sm-right">Add Employee</a>
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
                  <h3 class="card-title">All employees</h3>
                </div>
                
                <!-- /.card-header -->
                <div class="card-body table-responsive">
                  @if ($employees->isEmpty())
                  <div class="text-center">
                    <p class="lead"> There is no employees</p>
                    <a href="{{ route('admin.employees.create')}}" class="btn">Add Employee</a>
                  </div>
                  @else

                  <table id="example1" class="table table-sm table-hover mb-2">
                    <thead>
                    <tr>
                      <th>Name</th>
                      <th>Position</th>
                      <th>Avatar</th>
                      <th>Salary</th>
                      <th>Actions</th>
                    </tr>
                    </thead>
                    <tbody>
                        @foreach ($employees as $employee)
                        <tr>
                            
                            <td>{{ $employee->firstname }} {{ $employee->lastname }}</td>
                            <td>{{ $employee->position }}</td>
                            <td><img src="{{asset('/storage/images/'.$employee->avatar)}}" alt="avatar" class="img-size-50"  /></td>
                            <td>N{{ number_format($employee->salary,2) }}</td>
                            <td>
                              <div class="dropdown">
                                  <button class="btn dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                    Action
                                  </button>
                                  <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
              
                            
                              
                                  <a class="dropdown-item" onclick="event.preventDefault();
                                      if(confirm('Are you sure you want to delete')){
                                          document.getElementById('form-delete-{{ $employee->id }}').submit()
                                      }">Delete
                                  </a>
              
                                  <a class="dropdown-item" href="{{ route('admin.employees.edit',$employee->id) }}">Edit</a>
              
                                  </div>
                              </div>
              
                              <form style="display:none" id="{{ 'form-delete-'.$employee->id }}" action="{{ route('admin.employees.destroy',$employee->id) }}" method="POST">
                                  @csrf
                                  @method('DELETE')
                              </form>
                          </td>
                        </tr>  
                        @endforeach
                  </table>
                  {!! $employees->links() !!}
                  @endif

                </div>
                <!-- /.card-body -->
              </div>
            </div>
          </div>
          
          
        </div>
    </section>
@endsection