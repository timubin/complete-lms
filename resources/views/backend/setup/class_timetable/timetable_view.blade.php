@extends('admin.admin_master')

@section('admin')
   
<section class="content-wrapper ">
    <div class="container-fluid">

      <h2 class="text-center display-4">Student Registration Fee</h2>
         
      <div class="row">
            <div class="col-md-10 offset-md-1">
                <div class="row">

                    <div class="col-5">
                        <div class="form-group">
                          <label for="inputName">Class</label>
                          <select name="class_id" id="class_id" required=""  class="form-control getClass">
                              <option value="" selected='' disabled=''>Select Class</option>
                              @foreach ($classes as $class)
                              <option value="{{$class->id}}">{{$class->name}}</option>
                              @endforeach
                            </select>
                        </div>
                    </div>
                    <div class="col-5">
                      <div class="form-group">
                        <label for="inputName">Subject</label>
                        <select name="subject_id" id="subject_id" required=""  class="form-control getSubject">
                            <option value="" selected='' disabled=''>Select Subject</option>
                            @foreach ($subject as $subject)
                            <option value="{{$subject->id}}">{{$subject->name}}</option>
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


      <div class="row">
        <div class="col-12">
          <div class="card">
            <div class="card-header">
            <div class="row">
                <div class="col-lg-4 col-md-4">
                    <h3 class="card-title">Class Timetable</h3>
                    </div>
                    <div class="col-lg-4 col-md-4"></div>
                    <div class="col-lg-4 col-md-4 text-center">
                        <a href="{{route('class.timetable.add')}}" style="float:right" class="btn btn-block btn-primary btn-sm">Add Timetable</a>
    
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
{{--                 <tbody>
                    @foreach ($allData as $key=>$designation)     
                <tr>
                  <td>{{$key+1}}</td>
                  <td>{{$designation->name}}</td>
                  <td>
                    <a href="{{route('designation.edit',$designation->id)}}" class="btn btn-info">Edit</a>
                    <a href="{{route('designation.delete',$designation->id)}}" class="btn btn-danger" id="delete">Delete</a>
                  </td>
                </tr>
                @endforeach
                <tbody> --}}
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


  <script type="text/javascript">
    $(document).on('click','#search',function(){
      var subject_id = $('#subject_id').val();
      var class_id = $('#class_id').val();
       $.ajax({
        url: "{{ route('student.registration.fee.classwise.get')}}",
        type: "get",
        data: {'subject_id':subject_id,'class_id':class_id},
        beforeSend: function() {       
        },
        success: function (data) {
          var source = $("#document-template").html();
          var template = Handlebars.compile(source);
          var html = template(data);
          $('#DocumentResults').html(html);
          $('[data-toggle="tooltip"]').tooltip();
        }
      });



$('.getClass').change(function(){

})

    });
  </script>
    @endsection
  




  