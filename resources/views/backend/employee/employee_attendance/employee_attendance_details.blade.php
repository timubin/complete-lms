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
                    <h3 class="card-title">Employee Attendance Details</h3>
                    </div>
                    <div class="col-lg-4 col-md-4"></div>

            </div>
              
            </div>
            <!-- /.card-header -->
            <div class="card-body">
                <table id="example2" class="table table-bordered table-hover">
                    <thead>
                    <tr>
                      <th>SL</th>
                      <th>Name</th>
                      <th>ID No</th>
                      <th>Date</th>
                      <th>Attend Status</th>

                    
                    </tr>
                    </thead>
                    <tbody>
                        @foreach ($details as $key=>$value)     
                    <tr>
                      <td>{{$key+1}}</td>
                      <td>{{$value['user']['name']}}</td>
                      <td>{{$value['user']['id_no']}}</td>
                      <td>{{date('d-m-Y',strtotime($value->date))}}</td>
                      <td>{{$value->attend_sataus}}</td>
                     

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

  