@extends('admin.admin_master')
@section('admin')
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.1/jquery.min.js"></script> 
<section class="content-wrapper ">
    <div class="container-fluid">

            <div class="row">
        <div class="col-md-6">
            <div class="card card-primary">

                <div class="card-header">
                  <h3 class="card-title">Add Assign Subject</h3>
    
                  <div class="card-tools">
                    <button type="button" class="btn btn-tool" data-card-widget="collapse" title="Collapse">
                      <i class="fas fa-minus"></i>
                    </button>
                  </div>
                </div>
                <form action="{{route('store.assign.subject')}}" method="post">
                    @csrf
                <div class="card-body ">
                        <div class="add_item">
                    <div class="form-group">
                        <label for="inputStatus">Class Name</label>
                        <select name="class_id" required=""  class="form-control custom-select">
                          <option value="" selected='' disabled=''>Select Class</option>
                          @foreach($classes as $class)
                          <option value="{{$class->id}}">{{$class->name}}</option>
                            @endforeach
                        </select>
                      </div>

                    <div class="form-group">
                        <label for="inputStatus">Student Subject</label>
                        <select name="subject_id[]" required=""  class="form-control custom-select">
                          <option value="" selected='' disabled=''>Select Subject</option>
                          @foreach($subjects as $subject)
                          <option value="{{$subject->id}}">{{$subject->name}}</option>
                            @endforeach
                        </select>
                      </div>
                   
                  <div class="form-group">
                    <label for="inputName">Full Mark</label>
                    <input name="full_mark[]" type="text" id="inputName" class="form-control">
                  </div>

                  <div class="form-group">
                    <label for="inputName">Pass Mark</label>
                    <input name="pass_mark[]" type="text" id="inputName" class="form-control">
                  </div>

                  <div class="form-group">
                    <label for="inputName">Subjective Mark</label>
                    <input name="subjective_mark[]" type="text" id="inputName" class="form-control">
                  </div>
                  
                  <div class="form-group">
                    <span class="btn btn-success addeventmore"><i class="fa fa-plus-circle"></i></span>
                  </div>

                </div>

                <div class="addBtn pb-5">
                    <input class="btn btn-success mx-3" type="submit" value="Submit">
                  </div>

                </div>
              </div>
            </form> 

 
        </div>      
      </div>
    </div>
  </section>

  <div style="visibility: hidden;">
    <div class="whole_extra_item_add" id="whole_extra_item_add">
        <div class="delete_whole_extra_item_add" id="delete_whole_extra_item_add">
            <div class="form-row">

  <div class="col-md-5">
                    
    <div class="form-group">
        <label for="inputStatus">Student Subject</label>
        <select name="subject_id[]" required=""  class="form-control custom-select">
          <option value="" selected='' disabled=''>Select Subject</option>
          @foreach($subjects as $subject)
          <option value="{{$subject->id}}">{{$subject->name}}</option>
            @endforeach
        </select>
      </div> <!-- // end form group -->
       </div> <!-- End col-md-5 -->

       <div class="col-md-5">
           
        <div class="form-group">
            <label for="inputName">Full Mark</label>
            <input name="full_mark[]" type="text" id="inputName" class="form-control">
          </div>
       </div><!-- End col-md-5 -->

       <div class="col-md-5">
           
                  <div class="form-group">
                    <label for="inputName">Pass Mark</label>
                    <input name="pass_mark[]" type="text" id="inputName" class="form-control">
                  </div>
       </div><!-- End col-md-5 -->

       <div class="col-md-5">
           
                  <div class="form-group">
                    <label for="inputName">Subjective Mark</label>
                    <input name="subjective_mark[]" type="text" id="inputName" class="form-control">
                  </div>
       </div><!-- End col-md-5 -->

       <div class="col-md-2" style="padding-top: 25px;">
<span class="btn btn-success addeventmore"><i class="fa fa-plus-circle"></i> </span>
<span class="btn btn-danger removeeventmore"><i class="fa fa-minus-circle"></i> </span>    		
       </div><!-- End col-md-2 -->
       


                
            </div>  			
        </div>  		
    </div>  	
</div>

  <script type="text/javascript">
    $(document).ready(function(){
        var couner = 0;
        $(document).on("click",".addeventmore",function(){
            var whole_extra_item_add =$('#whole_extra_item_add').html();
            $(this).closest(".add_item").append(whole_extra_item_add);
            couner++;
        });
        $(document).on("click",".removeeventmore",function(event){
            $(this).closest(".delete_whole_extra_item_add").remove();
            couner-= 1
        });
    });
  </script>





  @endsection

