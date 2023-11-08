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
                    <h3 class="card-title"> Fee Amount Details</h3>
                    </div>
                    <div class="col-lg-4 col-md-4"></div>
                    <div class="col-lg-4 col-md-4 text-center">
                        <a href="{{route('fee.amount.add')}}" style="float:right" class="btn btn-block btn-primary btn-sm">Add Fee Amount</a>
    
                    </div>
            </div>
              
            </div>
            <!-- /.card-header -->
            <div class="card-body">
                <h4>Fee Category : <strong class="text-primary">{{$detailsData['0']['fee_category']['name']}}</strong></h4>
              <table id="example" class="table table-bordered table-hover">
                <thead>
                <tr>
                  <th>SL</th>
                  <th>Class Name</th>
                  <th>Amount</th>
                
                </tr>
                </thead>
                <tbody>
                    @foreach ($detailsData as $key=>$detail)     
                <tr>
                  <td>{{$key+1}}</td>
                  <td>{{$detail['student_class']['name']}}</td>
                  <td>{{$detail->amount}}</td>

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

  