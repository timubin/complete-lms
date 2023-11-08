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
          <h2 class="text-center display-4">Edit Marks Entry</h2>
          <form  method="post" action="{{ route('marks.entry.update')}}">
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
                                <label for="inputName">Subject</label>
                                <select name="assign_subject_id" id="assign_subject_id" required=""  class="form-control custom-select">
                                    <option selected=''>Select Subject</option>
                                  </select>
                              </div>
                          </div>

                          <div class="col-2">
                            <div class="form-group">
                              <label for="inputName">Exam Types</label>
                              <select name="exam_type_id" id="exam_type_id" required=""  class="form-control custom-select">
                                  <option value="" selected='' disabled=''>Select exam types</option>
                                  @foreach ($exam_types as $exam)
                                  <option value="{{$exam->id}}">{{$exam->name}}</option>
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

              {{-- Mark Entry Table --}}

              <div class="row d-none" id="marks-entry">
                    <div class="col-md-12">
                        <table  id="example2" class="table table-bordered table-hover">
                            <thead>
                                <tr>
                                    <th>ID No</th>
                                    <th>Student Name</th>
                                    <th>Father Name</th>
                                    <th>Gender</th>
                                    <th>Marks</th>
                                </tr>
                            </thead>
                            <tbody id="marks-entry-tr">

                            </tbody>
                        </table>
                        <input class="btn btn-rounded btn-primary" name="" type="submit" value="Update">
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



  <script type="text/javascript">
    $(document).on('click','#search',function(){
      var year_id = $('#year_id').val();
      var class_id = $('#class_id').val();
      var assign_subject_id = $('#assign_subject_id').val();
      var exam_type_id = $('#exam_type_id').val();
       $.ajax({
        url: "{{ route('student.edit.getstudents')}}",
        type: "GET",
        data: {'year_id':year_id,'class_id':class_id,'assign_subject_id':assign_subject_id,'exam_type_id':exam_type_id},
        success: function (data) {
          $('#marks-entry').removeClass('d-none');
          var html = '';
          $.each( data, function(key, v){
            html +=
            '<tr>'+
            '<td>'+v.student.id_no+'<input type="hidden" name="student_id[]" value="'+v.student_id+'"> <input type="hidden" name="id_no[]" value="'+v.student.id_no+'"> </td>'+
            '<td>'+v.student.name+'</td>'+
            '<td>'+v.student.fname+'</td>'+
            '<td>'+v.student.gender+'</td>'+
            '<td><input value="'+v.marks+'" type="text" class="form-control form-control-sm" name="marks[]" ></td>'+
            '</tr>';
          });
          html = $('#marks-entry-tr').html(html);
        }
      });
    });
  </script>

  
<!--   // for get Student Subject  -->

<script type="text/javascript">
    $(function(){
      $(document).on('change','#class_id',function(){
        var class_id = $('#class_id').val();
        $.ajax({
          url:"{{ route('marks.getsubject') }}",
          type:"GET",
          data:{class_id:class_id},
          success:function(data){
            var html = '<option value="">Select Subject</option>';
            $.each( data, function(key, v) {
              html += '<option value="'+v.id+'">'+v.school_subject.name+'</option>';
            });
            $('#assign_subject_id').html(html);
          }
        });
      });
    });
  </script>
  
  
  @endsection

  