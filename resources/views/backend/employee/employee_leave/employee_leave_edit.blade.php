@extends('admin.admin_master')
@section('admin')
  
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.1/jquery.min.js"></script>
<section class="content-wrapper ">
    <div class="container-fluid">

            <div class="row">
        <div class="col-md-6">
            <div class="card card-primary">

                <div class="card-header">
                  <h3 class="card-title">Employee Leave Edit</h3>
    
                  <div class="card-tools">
                    <button type="button" class="btn btn-tool" data-card-widget="collapse" title="Collapse">
                      <i class="fas fa-minus"></i>
                    </button>
                  </div>
                </div>
                <form action="{{route('update.employee.leave',$editData->id)}}" method="post">
                    @csrf
                <div class="card-body">
                   
                    <div class="form-group">
                        <label for="role">Employee Name</label>
                        <select name="emplyee_id" required="" id="emplyee_id" class="form-control custom-select">
                          <option value="" selected='' disabled=''>Select Employee Name</option>
                          @foreach ($employees as $employee)
                              
                          <option value="{{$employee->id}}" {{($editData->emplyee_id == $employee->id)? 'selected': ''}}>{{$employee->name}}</option>
                          @endforeach

                        </select>
                      </div>

                  <div class="form-group">
                    <label for="inputName">Start Date</label>
                    <input value="{{$editData->start_date}}" name="start_date" type="date" id="inputName" class="form-control" required>
                  </div>

                  <div class="form-group">
                    <label for="role">Leave Purpose</label>
                    <select name="leave_purpose_id"   id="leave_purpose_id" required="" class="form-control custom-select">
                      <option value="" selected='' disabled=''>Select Leave Purpose</option>
                      @foreach ($leave_purpose as $leave)
                          
                      <option value="{{$leave->id}}" {{($editData->leave_purpose_id == $leave->id)? 'selected': ''}}>{{$leave->name}}</option>
                      @endforeach
                      <option value="0">New Purpose</option>
                    </select>
               	
                    <input type="text" name="name" id="add_another" class="form-control mt-2" placeholder="Write Purpose"  style="display: none;">
                  </div>

                  <div class="form-group">
                    <label for="inputName">End Date</label>
                    <input value="{{$editData->end_date}}" name="end_date" type="date" id="inputName" class="form-control" required>
                  </div>
                  
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
  <script type="text/javascript">
	$(document).ready(function(){
		$(document).on('change','#leave_purpose_id',function(){
			var leave_purpose_id = $(this).val();
			if (leave_purpose_id == '0') {
				$('#add_another').show();
			}else{
				$('#add_another').hide();
			}
		});
	});
</script>
  @endsection

