@extends('admin.admin_master')

@section('admin')
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.1/jquery.min.js"></script>
<section class="content-wrapper ">
    <div class="container-fluid">

            <div class="row">
        <div class="col-md-6">
            <div class="card card-primary">

                <div class="card-header">
                  <h3 class="card-title">Add Grade Marks</h3>
    
                  <div class="card-tools">
                    <button type="button" class="btn btn-tool" data-card-widget="collapse" title="Collapse">
                      <i class="fas fa-minus"></i>
                    </button>
                  </div>
                </div>
                <form action="{{route('store.marks.grade')}}" method="post" >
                    @csrf
                <div class="card-body">

                    <div class="row">
                        <div class="form-group col-md-6">
                            <label for="inputName">Grade Name</label>
                            <input name="grade_name" type="text" id="inputName" class="form-control">
        
                          </div>  
                          <div class="form-group col-md-6">
                            <label for="inputName">Grade Point</label>
                            <input name="grade_point" type="text" id="inputName" class="form-control">
        
                           
                          </div>  
                          
                    </div> {{--  end 1st row --}}

                    <div class="row">
                        <div class="form-group col-md-6">
                            <label for="inputName">Start Marks</label>
                            <input name="start_marks" type="text" id="inputName" class="form-control">
        
                          </div>  
                          <div class="form-group col-md-6">
                            <label for="inputName">End Marks</label>
                            <input name="end_marks" type="text" id="inputName" class="form-control">

                          </div>  
                          
                    </div> {{--  end 2nd row --}}

                    <div class="row">
                        <div class="form-group col-md-6">
                            <label for="inputName">Start Point</label>
                            <input name="start_point" type="text" id="inputName" class="form-control">

                          </div>  

                        <div class="form-group col-md-6">
                            <label for="inputName">End Point</label>
                            <input name="end_point" type="text" id="inputName" class="form-control">

                          </div>  

 
                          
                    </div> {{--  end 3rd row --}}

                    <div class="row">

                          <div class="form-group col-md-6">
                            <label for="inputName">Remarks</label>
                            <input name="remarks" type="text" id="inputName" class="form-control">

                          </div>
                          
                    </div> {{--  end 4th row --}}





                   

                </div>

                <div class="addBtn pb-5">
                    <input class="btn btn-success mx-3" type="submit" value="Submit">
                  </div>
              </div>
            </form> 

 
        </div>      
      </div>
    </div>

  </section>


  @endsection


