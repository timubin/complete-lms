@extends('admin.admin_master')

@section('admin')
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.1/jquery.min.js"></script>
<section class="content-wrapper ">
    <div class="container-fluid">

            <div class="row">
        <div class="col-md-6">
            <div class="card card-primary">

                <div class="card-header">
                  <h3 class="card-title">Edit Grade Marks</h3>
    
                  <div class="card-tools">
                    <button type="button" class="btn btn-tool" data-card-widget="collapse" title="Collapse">
                      <i class="fas fa-minus"></i>
                    </button>
                  </div>
                </div>
                <form action="{{route('update.marks.grade',$editData->id)}}" method="post" >
                    @csrf
                <div class="card-body">

                    <div class="row">
                        <div class="form-group col-md-6">
                            <label for="inputName">Grade Name</label>
                            <input value="{{$editData->grade_name}}" name="grade_name" type="text" id="inputName" class="form-control">
        
                          </div>  
                          <div class="form-group col-md-6">
                            <label for="inputName">Grade Point</label>
                            <input  value="{{$editData->grade_point}}" name="grade_point" type="text" id="inputName" class="form-control">
        
                           
                          </div>  
                          
                    </div> {{--  end 1st row --}}

                    <div class="row">
                        <div class="form-group col-md-6">
                            <label for="inputName">Start Marks</label>
                            <input value="{{$editData->start_marks}}" name="start_marks" type="text" id="inputName" class="form-control">
        
                          </div>  
                          <div class="form-group col-md-6">
                            <label for="inputName">End Marks</label>
                            <input value="{{$editData->end_marks}}" name="end_marks"  type="text" id="inputName" class="form-control">

                          </div>  
                          
                    </div> {{--  end 2nd row --}}

                    <div class="row">
                        <div class="form-group col-md-6">
                            <label for="inputName">Start Point</label>
                            <input value="{{$editData->start_point}}" name="start_point" type="text" id="inputName" class="form-control">

                          </div>  

                        <div class="form-group col-md-6">
                            <label for="inputName">End Point</label>
                            <input  value="{{$editData->end_point}}"  name="end_point" type="text" id="inputName" class="form-control">

                          </div>  

 
                          
                    </div> {{--  end 3rd row --}}

                    <div class="row">

                          <div class="form-group col-md-6">
                            <label for="inputName">Remarks</label>
                            <input value="{{$editData->remarks}}" name="remarks" type="text" id="inputName" class="form-control">

                          </div>
                          
                    </div> {{--  end 4th row --}}





                   

                </div>

                <div class="addBtn pb-5">
                    <input class="btn btn-success mx-3" type="submit" value="Update">
                  </div>
              </div>
            </form> 

 
        </div>      
      </div>
    </div>

  </section>


  @endsection


