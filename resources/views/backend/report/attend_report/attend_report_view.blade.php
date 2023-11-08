@extends('admin.admin_master')
@section('admin')
  
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

<section class="content-wrapper ">
    <div class="container-fluid">
      <div class="row">
        <div class="col-12">
          <div class="card">
            <div class="card-header">
            <div class="row">
              

        <div class="container-fluid">
          <h2 class="text-center display-4">Manage Employee Attendance Report</h2>
          <form  method="GET" action="{{ route('report.attendance.get')}}" target="_blank">
             @csrf
            <div class="row">
                  <div class="col-md-10 offset-md-1">
                      <div class="row">
                          <div class="col-4">
                              <div class="form-group">
                                <label for="inputName">Employee Name</label>
                                <select name="employee_id" id="employee_id" required=""  class="form-control custom-select">
                                    <option value="" selected='' disabled=''>Select Employee</option>
                                    @foreach ($employees as $employee)
                                    <option value="{{$employee->id}}">{{$employee->name}}</option>
                                    @endforeach
                                  </select>
                              </div>
                          </div>


                        <div class="col-4">
                            <div class="form-group">
                                    <label for="inputName">Date</label>
                                    <input name="date" type="date" id="inputName" class="form-control">
                            </div>
                        </div>
                          
                          <div class="col-4">
                            <div class="form-group pt-4">
                              <div class="input-group input-group-lg">
                                  <div class="input-group-append">
                                    <input class="btn btn-rounded btn-primary" name="" type="submit" value="Search">
                                  </div>
                              </div>
                          </div>
                          </div>
                      </div>
                  </div>
              </div>
          </form>
      </div>



       

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

  