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
                    <h3 class="card-title">Employee Leave</h3>
                    </div>
                    <div class="col-lg-4 col-md-4"></div>
                    <div class="col-lg-4 col-md-4 text-center">
                        <a href="{{route('employee.leave.add')}}" style="float:right" class="btn btn-block btn-primary btn-sm">Add Employee Leave</a>
    
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
                  <th>ID No</th>
                  <th>Purpose</th>
                  <th>Start Date</th>
                  <th>End Date</th>
                  <th>Action</th>
                
                </tr>
                </thead>
                <tbody>
                    @foreach ($allData as $key=>$leave)     
                <tr>
                  <td>{{$key+1}}</td>
                  <td>{{$leave['user']['name']}}</td>
                  <td>{{$leave['user']['id_no']}}</td>
                  <td>{{$leave['purpose']['name']}}</td>
                  <td>{{$leave->start_date}}</td>
                  <td>{{$leave->end_date}}</td>
                  <td>
                    <a href="{{route('employee.leave.edit',$leave->id)}}" class="btn btn-info">Edit</a>
                    <a href="{{route('employee.leave.delete',$leave->id)}}" class="btn btn-danger" id="delete">Delete</a>
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

  