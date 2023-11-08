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
                    <h3 class="card-title"> Assign Subject  Details</h3>
                    </div>
                    <div class="col-lg-4 col-md-4"></div>
                    <div class="col-lg-4 col-md-4 text-center">
                        <a href="{{route('assign.subject.add')}}" style="float:right" class="btn btn-block btn-primary btn-sm">Add Assign Subject </a>
    
                    </div>
            </div>
              
            </div>
            <!-- /.card-header -->
            <div class="card-body">
                <h4>Assign Subject : <strong class="text-primary">{{$detailsData['0']['student_class']['name']}}</strong></h4>
                <table id="example1" class="table table-bordered table-striped">
                <thead>
                <tr>
                  <th>SL</th>
                  <th>Subject</th>
                  <th>Full Mark</th>
                  <th>Pass Mark</th>
                  <th>Subjective Mark</th>
                
                </tr>
                </thead>
                <tbody>
                    @foreach ($detailsData as $key=>$detail)     
                <tr>
                  <td>{{$key+1}}</td>
                  <td>{{$detail['school_subject']['name']}}</td>
                  <td>{{$detail->full_mark}}</td>
                  <td>{{$detail->pass_mark}}</td>
                  <td>{{$detail->subjective_mark}}</td>
                 

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

  