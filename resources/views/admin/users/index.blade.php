@extends('layouts.app')

@section('title', 'users')

@section('content')
    <!-- Content Header (Page header) -->
    <div class="content-header">
        <div class="container-fluid">
          <div class="row mb-2">
            <div class="col-sm-6">
              <h1 class="m-0 dashboard-card-text">users</h1>
            </div><!-- /.col -->
            <div class="col-sm-6">
              <a href="#" class="btn float-sm-right">Add user</a>
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
                  <h3 class="card-title">All users</h3>
                </div>
                
                <!-- /.card-header -->
                <div class="card-body table-responsive">
                  @if ($users->isEmpty())
                  <div class="text-center">
                    <p class="lead"> There is no users</p>
                    <a href="#" class="btn">Add user</a>
                  </div>
                  
                  @else

                  <table id="example1" class="table table-sm table-hover mb-2">
                    <thead>
                    <tr>
                      <th>Name</th>
                      <th>Email</th>
                      <th>Created_at</th>
                      <th>updated_at</th>

                    </tr>
                    </thead>
                    <tbody>
                        @foreach ($users as $user)
                        <tr> 
                            <td>{{ $user->name }}</td>
                            <td>{{ $user->email }}</td> 
                            <td>{{ $user->created_at }}</td>
                            <td>{{ $user->updated_at }}</td>  
                        </tr>  
                        @endforeach
                  </table>
                  {!! $users->links() !!}
                  @endif

                </div>
                <!-- /.card-body -->
              </div>
            </div>
          </div>
        </div>
    </section>
@endsection