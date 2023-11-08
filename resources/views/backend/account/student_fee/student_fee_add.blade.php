@extends('admin.admin_master')
@section('admin')
  
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/handlebars.js/4.7.7/handlebars.min.js" integrity="sha512-RNLkV3d+aLtfcpEyFG8jRbnWHxUqVZozacROI4J2F1sTaDqo1dPQYs01OMi1t1w9Y2FdbSCDSQ2ZVdAC8bzgAg==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
<section class="content-wrapper ">
    <div class="container-fluid">
      <div class="row">
        <div class="col-12">
          <div class="card">
            <div class="card-header">
            <div class="row">
              

        <div class="container-fluid">
          <h2 class="text-center display-4">Add Student Fee</h2>
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
                              <label for="inputName">Fee Category </label>
                              <select name="fee_category_id" id="fee_category_id" required=""  class="form-control custom-select">
                                  <option value="" selected='' disabled=''>Select exam types</option>
                                  @foreach ($fee_category as $fee)
                                  <option value="{{$fee->id}}">{{$fee->name}}</option>
                                  @endforeach
                                </select>
                            </div>
                        </div>
                          <div class="col-2">
                            <div class="form-group">
                                <label for="inputName">Date</label>
                                <input name="date" type="date" id="date" class="form-control" required>
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

              <div class="row">
                    <div class="col-md-12">
                        <div id="DocumentResults">
                            <script id="document-template" type="text/x-handlebars-template">
                              <form action="{{ route('account.fee.store')}}" method="post"> 
                                @csrf
                                <table class="table table-bordered table-hover">
                                    <thead>
                                        <tr>@{{{thsource}}}</tr>
                                    </thead>
                                    <tbody>
                                        @{{#each this}}
                                        <tr>
                                            @{{{tdsource}}}
                                        </tr>

                                        @{{/each}}
                                    </tbody>
                                </table>
                            </form>
                            </script>
                            <button type="submit" style="margin-to:'10px'" class="btn btn-primay"></button>
                        </div>
                        
                    </div>
              </div> 
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
      var fee_category_id = $('#fee_category_id').val();
      var date = $('#date').val();
  
       $.ajax({
        url: "{{ route('account.fee.getstudent')}}",
        type: "get",
        data: {'year_id':year_id,'class_id':class_id,'fee_category_id':fee_category_id,'date':date},
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
    });
  </script>
  
  @endsection

  