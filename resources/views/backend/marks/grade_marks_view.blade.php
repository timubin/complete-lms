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
                    <h3 class="card-title">Grate Marks List</h3>
                    </div>
                    <div class="col-lg-4 col-md-4"></div>
                    <div class="col-lg-4 col-md-4 text-center">
                        <a href="{{route('marks.grade.add')}}" style="float:right" class="btn btn-block btn-primary btn-sm">Add Grate Marks</a>
    
                    </div>
            </div>
              
            </div>
            <!-- /.card-header -->
            <div class="card-body">
              <table id="example1" class="table table-bordered table-striped">
                <thead>
                <tr>
                  <th>SL</th>
                  <th>Grade Name</th>
                  <th>Grade Point</th>
                  <th>Start Marks</th>
                  <th>End Marks</th>
                  <th>Point Range</th>
                  <th>Remarks</th>
                  <th width='15%'>Action</th>
                
                </tr>
                </thead>
                <tbody>
                    @foreach ($allData as $key=>$value)     
                <tr>
                  <td>{{$key+1}}</td>
                  <td>{{$value->grade_name	}}</td>
                  <td>{{ number_format((float)$value->grade_point,2) }}</td>
                  <td>{{$value->start_marks}}</td>
                  <td>{{$value->end_marks}}</td>
                  <td>{{$value->start_point}}-{{$value->end_point}}</td>
                  <td>{{$value->remarks}}</td>
                    
                  <td>
                    <a href="{{route('marks.grate.edit',$value->id)}}" class="btn btn-info">Edit</a>
                    <a href="{{route('marks.grate.delete',$value->id)}}"id="delete" class="btn btn-danger">Delete</a>

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

  