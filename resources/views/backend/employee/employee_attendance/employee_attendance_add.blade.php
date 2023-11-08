@extends('admin.admin_master')

@section('admin')
   
<section class="content-wrapper ">
    <div class="container-fluid">

            <div class="row">
        <div class="col-md-6">
            <div class="card card-primary">

                <div class="card-header">
                  <h3 class="card-title">Add Attendance </h3>
    
                  <div class="card-tools">
                    <button type="button" class="btn btn-tool" data-card-widget="collapse" title="Collapse">
                      <i class="fas fa-minus"></i>
                    </button>
                  </div>
                </div>
                <form action="{{route('store.employee.attendance')}}" method="post">
                    @csrf
                <div class="card-body">
                   
                  <div class="form-group">
                    <label for="inputName">Attendance Date</label>
                    <input name="date" type="date" id="inputName" class="form-control">
                  </div>
                  
                  <div class="form-group">
                    <table class="table table-bordered table-striped" style="width: 100%">
                        <thead>
                            <tr>
                <th rowspan="2" class="text-center" style="vertical-align: middle;">Sl</th>
                <th rowspan="2" class="text-center" style="vertical-align: middle;">Employee List</th>
            <th colspan="3" class="text-center" style="vertical-align: middle; width: 30%">Attendance Status</th>				
                            </tr>
         
                <tr>
                    <th class="text-center btn present_all" style="display: table-cell; background-color: #000000; color:#fff;">Present</th>
                    <th class="text-center btn leave_all" style="display: table-cell; background-color: #000000; color:#fff;" >Leave</th>
                    <th class="text-center btn absent_all" style="display: table-cell; background-color: #000000 ; color:#fff;">Absent</th>
                </tr>   				
                        </thead>
                        <tbody>
                    @foreach($employees as $key => $employee)		
         
                <tr id="div{{$employee->id}}" class="text-center">
                    <input type="hidden" name="employee_id[]" value="{{ $employee->id }}">
                  <td>{{ $key+1  }}</td>
                 <td>{{ $employee->name }}</td>
         
                 <td colspan="3">
                     <div class="switch-toggle switch-3 switch-candy">
         
         <input name="attend_sataus{{$key}}" type="radio" value="Present" id="present{{$key}}" checked="checked">
          <label for="present{{$key}}">Present</label>
         
          <input name="attend_sataus{{$key}}" value="Leave" type="radio" id="leave{{$key}}"  >
          <label for="leave{{$key}}">Leave</label>
         
          <input name="attend_sataus{{$key}}" value="Absent"  type="radio" id="absent{{$key}}"  >
          <label for="absent{{$key}}">Absent</label>
                         
                     </div>			
                 </td>
                </tr>			
         
                @endforeach
                        </tbody>   			
                    </table>

                  </div>


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

