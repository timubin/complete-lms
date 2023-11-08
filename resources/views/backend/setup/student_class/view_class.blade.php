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
                    <h3 class="card-title">Student Class List</h3>
                    </div>
                    <div class="col-lg-4 col-md-4"></div>
                    <div class="col-lg-4 col-md-4 text-center">
                        <a href="{{route('student.class.add')}}" style="float:right" class="btn btn-block btn-primary btn-sm">Add Student Class</a>
    
                    </div>
            </div>
              
            </div>
            <!-- /.card-header -->
            <div class="card-body">
              <table id="example1" class="table table-bordered table-striped">
                <thead>
                <tr>
                  <th style="width:5%">SL</th>
                  <th>Name</th>
                  <th style="width:20%">Action</th>
                
                </tr>
                </thead>
                <tbody>
                    @foreach ($allData as $key=>$student)     
                <tr>
                  <td>{{$key+1}}</td>
                  <td>{{$student->name}}</td>
                  <td>
                    <a href="{{route('student.class.edit',$student->id)}}" class="btn btn-info">Edit</a>
                    <a href="{{route('student.class.delete',$student->id)}}" class="btn btn-danger" id="delete">Delete</a>
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

  