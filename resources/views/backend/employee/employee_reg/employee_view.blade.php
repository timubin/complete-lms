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
                    <h3 class="card-title">Employee List</h3>
                    </div>
                    <div class="col-lg-4 col-md-4"></div>
                    <div class="col-lg-4 col-md-4 text-center">
                        <a href="{{route('employee.registration.add')}}" style="float:right" class="btn btn-block btn-primary btn-sm">Add Employee</a>
    
                    </div>
            </div>
              
            </div>
            <!-- /.card-header -->
            <div class="card-body">
              <table id="example1" class="table table-bordered table-striped">
                <thead>
                <tr>
                  <th>SL</th>
                  <th>Name</th>
                  <th>ID NO</th>
                  <th>Mobile</th>
                  <th>Gender</th>
                  <th>Join Date</th>
                  <th>Salary</th>
                  @if(Auth::user()->role == "Admin")
                  <th>Code</th>
                  @endif
                  <th>Action</th>
                
                </tr>
                </thead>
                <tbody>
                    @foreach ($allData as $key=>$employee)     
                <tr>
                  <td>{{$key+1}}</td>
                  <td>{{$employee->name}}</td>
                  <td>{{$employee->id_no}}</td>
                  <td>{{$employee->mobile}}</td>
                  <td>{{$employee->gender}}</td>
                  <td>{{$employee->join_date}}</td>
                  <td>{{$employee->salary}}</td>
                    @if(Auth::user()->role == "Admin")
                  <td>{{$employee->code}}</td>
                    @endif
                  <td>
                    <a href="{{route('employee.registration.edit',$employee->id)}}" class="btn btn-info">Edit</a>
                    <a href="{{route('employee.registration.delete',$employee->id)}}" class="btn btn-danger">Delete</a>
                    <a href="{{route('employee.registration.details',$employee->id)}}" class="btn btn-primary">Details</a>
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

  