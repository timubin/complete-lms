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
                    <h3 class="card-title">Employee Salary List</h3>
                    </div>
                    <div class="col-lg-4 col-md-4"></div>
                    <div class="col-lg-4 col-md-4 text-center">
                        <a href="{{route('employee.registration.add')}}" style="float:right" class="btn btn-block btn-primary btn-sm">Add Employee Salary</a>
    
                    </div>
            </div>
              
            </div>
            <!-- /.card-header -->
            <div class="card-body">
              <table id="example2" class="table table-bordered table-hover">
                <thead>
                <tr>
                  <th>SL</th>
                  <th>Name</th>
                  <th>ID NO</th>
                  <th>Mobile</th>
                  <th>Gender</th>
                  <th>Join Date</th>
                  <th>Salary</th>
                  <th>Action</th>
                
                </tr>
                </thead>
                <tbody>
                    @foreach ($allData as $key=>$value)     
                <tr>
                  <td>{{$key+1}}</td>
                  <td>{{$value->name}}</td>
                  <td>{{$value->id_no}}</td>
                  <td>{{$value->mobile}}</td>
                  <td>{{$value->gender}}</td>
                  <td>{{ \Carbon\Carbon::parse($value->join_date)->format('d-m-Y') }}</td>
                  <td>{{$value->salary}}</td>
                  <td>
                    <a title="Increment" href="{{route('employee.salary.increment',$value->id)}}" class="btn btn-info"><i class="fa fa-plus-circle"></i></a>
                    <a title="Details" href="{{route('employee.salary.details',$value->id)}}" class="btn btn-primary"><i class="fa fa-eye"></i></a>
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

  