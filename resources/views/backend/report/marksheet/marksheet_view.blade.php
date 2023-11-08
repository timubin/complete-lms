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
          <h2 class="text-center display-4">Manage MarkSheet Generate</h2>
          <form  method="GET" action="{{ route('report.marksheet.get')}}" target="_blank">
             @csrf
            <div class="row">
                  <div class="col-md-10 offset-md-1">
                      <div class="row">
                          <div class="col-3">
                              <div class="form-group">
                                <label for="inputName">Year</label>
                                <select name="year_id" id="year_id" required=""  class="form-control custom-select">
                                    <option value="" selected='' disabled=''>Select year</option>
                                    @foreach ($years as $year)
                                    <option value="{{$year->id}}">{{$year->name}}</option>
                                    @endforeach
                                  </select>
                              </div>
                          </div>
                          <div class="col-3">
                              <div class="form-group">
                                <label for="inputName">Class</label>
                                <select name="class_id" id="class_id" required=""  class="form-control custom-select">
                                    <option value="" selected='' disabled=''>Select Class</option>
                                    @foreach ($classes as $class)
                                    <option value="{{$class->id}}">{{$class->name}}</option>
                                    @endforeach
                                  </select>
                              </div>
                          </div>


                          <div class="col-2">
                            <div class="form-group">
                              <label for="inputName">Exam Types</label>
                              <select name="exam_type_id" id="exam_type_id" required=""  class="form-control custom-select">
                                  <option value="" selected='' disabled=''>Select exam types</option>
                                  @foreach ($exam_type as $exam)
                                  <option value="{{$exam->id}}">{{$exam->name}}</option>
                                  @endforeach
                                </select>
                            </div>
                        </div>

                        <div class="col-2">
                            <div class="form-group">
                                    <label for="inputName">ID NO</label>
                                    <input name="id_no" type="text" id="inputName" class="form-control">
                            </div>
                        </div>
                          
                          <div class="col-2">
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

  