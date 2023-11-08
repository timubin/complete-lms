@extends('admin.admin_master')

@section('admin')
   
<section class="content-wrapper ">
    <div class="container-fluid">
      <div class="row">
        <div class="col-12">
          <div class="card">
            <div class="card-header">
            <div class="row">
                <div class="col-lg-4 col-md-4">
                    <h3 class="card-title">User List</h3>
                    </div>
                    <div class="col-lg-4 col-md-4"></div>
                    <div class="col-lg-4 col-md-4 text-center">
                        <a href="{{route('users.add')}}" style="float:right" class="btn btn-block btn-primary btn-sm">Add User</a>
    
                    </div>
            </div>
              
            </div>
            <!-- /.card-header -->
            <div class="card-body">
              <table id="example2" class="table table-bordered table-hover">
                <thead>
                <tr>
                  <th>SL</th>
                  <th>Role</th>
                  <th>Name</th>
                  <th>Email</th>
                  <th>Code</th>
                  <th>Action</th>
                
                </tr>
                </thead>
                <tbody>
                    @foreach ($allData as $key=>$user)     
                <tr>
                  <td>{{$key+1}}</td>
                  <td>{{$user->role}}</td>
                  <td>{{$user->name}}</td>
                  <td> {{$user->email}}</td>
                  <td> {{$user->role}}</td>
                  <td>
                    <a href="{{route('users.edit',$user->id)}}" class="btn btn-info">Edit</a>
                    <a href="{{route('users.delete',$user->id)}}" class="btn btn-danger" id="delete">Delete</a>
                  </td>
                </tr>
                @endforeach
                </tfoot>
              </table>
            </div>
            <!-- /.card-body -->
          </div>
          <!-- /.card -->


          <!-- /.card -->
        </div>
        <!-- /.col -->
      </div>
      <!-- /.row -->
    </div>
    <!-- /.container-fluid -->
  </section>

  @endsection

  