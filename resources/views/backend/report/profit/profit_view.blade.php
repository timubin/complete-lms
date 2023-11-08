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
          <h2 class="text-center display-4">Manage Monthly & Yearly Profit</h2>
         
            <div class="row">
                  <div class="col-md-10 offset-md-1">
                      <div class="row">

                          <div class="col-5">
                            <div class="form-group">
                                <label for="inputName">Start Date</label>
                                <input name="start_date" type="date" id="start_date" class="form-control" >
                              </div>
                          </div>

                          <div class="col-5">
                            <div class="form-group">
                                <label for="inputName">End Date</label>
                                <input name="end_date" type="date" id="end_date" class="form-control" >
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

              {{-- Registration fee Table --}}

              <div class="row" >
                    <div class="col-md-12">
                        <div id="DocumentResults">
                            <script id="document-template" type="text/x-handlebars-template">
                              <table id="example1" class="table table-bordered table-striped">
                                    <thead>
                                        <tr>@{{{thsource}}}</tr>
                                    </thead>
                                    <tbody>
                                      
                                        <tr>
                                            @{{{tdsource}}}
                                        </tr>

                        
                                    </tbody>
                                </table>
                            </script>
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
    var start_date = $('#start_date').val();
    var end_date = $('#end_date').val();

     $.ajax({
      url: "{{ route('report.profit.datewais.get')}}",
      type: "get",
      data: {'start_date':start_date,'end_date':end_date},
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

  