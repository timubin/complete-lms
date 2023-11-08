@extends('admin.admin_master')

@section('admin')
   
<section class="content-wrapper ">
    <div class="container-fluid">
      <div class="row">
        <div class="col-12">
          <div class="card">
            <div class="card-header">
            <div class="row">
              

        <div class="container-fluid">
          <h2 class="text-center display-4">Student Search</h2>
          <form method="GET" action="{{ route('student.year.class.wise') }}">
              <div class="row">
                  <div class="col-md-10 offset-md-1">
                      <div class="row">
                          <div class="col-5">
                              <div class="form-group">
                                <label for="inputName">Year</label>
                                <select name="year_id" required=""  class="form-control custom-select">
                                    <option value="" selected='' disabled=''>Select year</option>
                                    @foreach ($years as $year)
                                    <option value="{{$year->id}}"{{(@$year_id==$year->id)?"selected":""}}>{{$year->name}}</option>
                                    @endforeach
                                  </select>
                              </div>
                          </div>
                          <div class="col-5">
                              <div class="form-group">
                                <label for="inputName">Class</label>
                                <select name="class_id" required=""  class="form-control custom-select">
                                    <option value="" selected='' disabled=''>Select Class</option>
                                    @foreach ($classes as $class)
                                    <option value="{{$class->id}}" {{(@$class_id==$class->id)?"selected":""}}>{{$class->name}}</option>
                                    @endforeach
                                  </select>
                              </div>
                          </div>
                          <div class="col-2">
                            <div class="form-group pt-4">
                              <div class="input-group input-group-lg">
                                  <div class="input-group-append">
                                    <input type="submit" class="btn btn-block btn-info btn-xs" name="search" value="Search">
                                  </div>
                              </div>
                          </div>
                          </div>
                      </div>
                  </div>
              </div>
          </form>
      </div>


                <div class="col-lg-4 col-md-4">
                    <h3 class="card-title">Student List</h3>
                    </div>
                    <div class="col-lg-4 col-md-4"></div>
                    <div class="col-lg-4 col-md-4 text-center">
                        <a href="{{route('student.registration.add')}}" style="float:right" class="btn btn-block btn-primary btn-sm">Add Student</a>
    
                    </div>
            </div>
              
            </div>
            <!-- /.card-header -->
            <div class="card-body">
              
              {{-- @if(!@search)	 --}}

              @if(!defined('search'))
              <table id="example1" class="table table-bordered table-striped">
                <thead>
                <tr>
                  <th>SL</th>
                  <th>Name</th>
                  <th>ID No</th>
                  <th>Roll</th>
                  <th>Year</th>
                  <th>Class</th>
                  <th>Image</th>
                  @if (Auth::user()->role=="Admin")  
                  <th>Code</th>
                  @endif
                  <th>Action</th>
                
                </tr>
                </thead>
                <tbody>
                    @foreach ($allData as $key=>$value)  
                   
   
                <tr>
                  <td>{{$key+1}}</td>
                  <td> {{ (!empty($value['student'])) ? $value['student']['name'] : '' }}</td>
                  <td> {{ (!empty($value['student'])) ? $value['student']['id_no'] : '' }}</td>
                  <td>{{$value->roll}}</td>
                  <td>{{ (!empty($value['student_year'])) ? $value['student_year']['name'] : '' }}</td>

                  <td>{{ (!empty($value['student_class'])) ? $value['student_class']['name'] : '' }}</td>

                  <td>
                    <img src="{{(!empty($value['student']['image'])) ? url('upload/student_images/'.$value['student']['image']):url('upload/no_image.jpg')}}" alt="" width="50px"; height="50px"; >
                  </td>
                  <td>{{$value->year_id}}</td>
                  <td>{{$value->year_id}}</td>
                  <td>{{$value->year_id}}</td>
                  <td>
                    <a href="{{route('student.registration.edit',$value->student_id)}}" class="btn btn-info">Edit</a>
                    <a href="{{route('student.registration.delete',$value->student_id)}}" class="btn btn-danger" id="delete">Delete</a>
                    <a href="{{route('student.registration.promotion',$value->student_id)}}" class="btn btn-info">Promotion</a>
                    <a target="_blank" href="{{route('details.student.registration',$value->student_id)}}" class="btn btn-info">Details</a>
                  </td>
                </tr>
            
                @endforeach
                </tfoot>
              </table>

              @else 

              <table id="example1" class="table table-bordered table-striped">
                <thead>
                <tr>
                  <th>SL</th>
                  <th>Name</th>
                  <th>ID No</th>
                  <th>Roll</th>
                  <th>Year</th>
                  <th>Class</th>
                  <th>Image</th>
                  @if (Auth::user()->role=="Admin")  
                  <th>Code</th>
                  @endif
                  <th>Action</th>
                
                </tr>
                </thead>
                <tbody>
                    @foreach ($allData as $key=>$value)     
                <tr>
                  <td>{{$key+1}}</td>
                  <td>{{$value['student']['name']}}</td>
                  <td>{{$value['student']['id_no']}}</td>
                  <td>{{$value->roll}}</td>
                  <td>{{$value['student_year']['name']}}</td>
                  <td>{{$value['student_class']['name']}}</td>
                  <td>
                    <img src="{{(!empty($value['student']['image'])) ? url('upload/student_images/'.$value['student']['image']):url('upload/no_image.jpg')}}" alt="" width="50px"; height="50px"; >
                  </td>
                  <td>{{$value->year_id}}</td>
                  <td>{{$value->year_id}}</td>
                  <td>{{$value->year_id}}</td>
                  <td>
                    <a href="{{route('student.registration.edit',$value->student_id)}}" class="btn btn-info">Edit</a>
                    <a href="{{route('student.registration.delete',$value->student_id)}}" class="btn btn-danger" id="delete">Delete</a>
                    <a href="{{route('student.registration.promotion',$value->student_id)}}" class="btn btn-info">Promotion</a>
                    <a target="_blank" href="{{route('details.student.registration',$value->student_id)}}" class="btn btn-info">Details</a>
                  </td>
                </tr>
                @endforeach
                </tfoot>
              </table>

              @endif

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

  