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
                        <a href="{{route('account.salary.add')}}" style="float:right" class="btn btn-block btn-primary btn-sm"> Add / Edit Employee Salary</a>
    
                    </div>
            </div>
              
            </div>
            <!-- /.card-header -->
            <div class="card-body">
              <table id="example1" class="table table-bordered table-striped">
                <thead>
                <tr>
                  <th>SL</th>
                  <th>ID No</th>
                  <th>Name</th>
                  <th>Amount</th>
                  <th>Date</th>
        
                
                </tr>
                </thead>
                <tbody>
                    @foreach ($allData as $key=>$value)     
                <tr>
                  <td>{{$key+1}}</td>
                  <td>{{$value['user']['id_no']	}}</td>
                  <td>{{$value['user']['name']}}</td>
                  <td>{{$value->amount}}</td>
                  <td>{{date('M Y',strtotime($value->date)) }}</td>


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

  