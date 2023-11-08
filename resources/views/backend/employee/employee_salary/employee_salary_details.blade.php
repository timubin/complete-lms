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
                    <h1 class="card-title">Employee Salary Details</h1>
                    </div>
                    <div class="col-lg-4 col-md-4 text-center">
                        <h4 class="card-title">Employee Name : <strong class="text-primary">{{$details->name }} </strong></h4>
                        
                    </div>
                    <div class="col-lg-4 col-md-4 text-center">
                        <h4 class="card-title">Employee Id No : <strong class="text-secondary">{{$details->id_no}}</strong></h4>
                    </div>

            </div>
              
            </div>
            <!-- /.card-header -->
            <div class="card-body">
              <table id="example1" class="table table-bordered table-striped">
                <thead>
                <tr>
                  <th>SL</th>
                  <th>Previous Salary</th>
                  <th>Increment Salary</th>
                  <th>Present Salary</th>
                  <th>Effected Date</th>

                
                </tr>
                </thead>
                <tbody>
                    @foreach ($salary_log as $key=>$log)     
                <tr>
                  <td>{{$key+1}}</td>
                  <td>{{$log->previous_sallary}}</td>
                  <td>{{$log->increment_sallary}}</td>
                  <td>{{$log->present_sallary}}</td>
                  <td>{{$log->effected_sallary}}</td>

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

  