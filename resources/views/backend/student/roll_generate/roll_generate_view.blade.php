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
          <h2 class="text-center display-4">Student Roll Generator</h2>
          <form  method="post" action="{{ route('roll.generate.store')}}">
             @csrf
            <div class="row">
                  <div class="col-md-10 offset-md-1">
                      <div class="row">
                          <div class="col-5">
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
                          <div class="col-5">
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
                            <div class="form-group pt-4">
                              <div class="input-group input-group-lg">
                                  <div class="input-group-append">
                                    <a id="search" class="btn btn-primary" name="search"> Search</a>
                                  </div>
                              </div>
                          </div>
                          </div>
                      </div>
                  </div>
              </div>

              {{-- Roll Generate Table --}}

              <div class="row d-none" id="roll-generate">
                    <div class="col-md-12">
                      <table id="example1" class="table table-bordered table-striped">
                            <thead>
                                <tr>
                                    <th>ID No</th>
                                    <th>Student Name</th>
                                    <th>Father Name</th>
                                    <th>Gender</th>
                                    <th>Roll</th>
                                </tr>
                            </thead>
                            <tbody id="roll-generate-tr">

                            </tbody>
                        </table>
                    </div>
              </div>



              <input type="submit" class="btn btn-info" value="Roll Generator">


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



  <script type="text/javascript">
    $(document).on('click','#search',function(){
      var year_id = $('#year_id').val();
      var class_id = $('#class_id').val();
       $.ajax({
        url: "{{ route('student.registration.getstudents')}}",
        type: "GET",
        data: {'year_id':year_id,'class_id':class_id},
        success: function (data) {
          $('#roll-generate').removeClass('d-none');
          var html = '';
          $.each( data, function(key, v){
            html +=
            '<tr>'+
            '<td>'+v.student.id_no+'<input type="hidden" name="student_id[]" value="'+v.student_id+'"></td>'+
            '<td>'+v.student.name+'</td>'+
            '<td>'+v.student.fname+'</td>'+
            '<td>'+v.student.gender+'</td>'+
            '<td><input type="text" class="form-control form-control-sm" name="roll[]" value="'+v.roll+'"></td>'+
            '</tr>';
          });
          html = $('#roll-generate-tr').html(html);
        }
      });
    });
  </script>
  @endsection

  