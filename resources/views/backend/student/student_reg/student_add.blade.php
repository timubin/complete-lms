@extends('admin.admin_master')

@section('admin')
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.1/jquery.min.js"></script>
<section class="content-wrapper ">
    <div class="container-fluid">

            <div class="row">
        <div class="col-md-6">
            <div class="card card-primary">

                <div class="card-header">
                  <h3 class="card-title">Add Student</h3>
    
                  <div class="card-tools">
                    <button type="button" class="btn btn-tool" data-card-widget="collapse" title="Collapse">
                      <i class="fas fa-minus"></i>
                    </button>
                  </div>
                </div>
                <form action="{{route('store.student.registration')}}" method="post" enctype="multipart/form-data">
                    @csrf
                <div class="card-body">

                    <div class="row">
                        <div class="form-group col-md-6">
                            <label for="inputName">Student Name</label>
                            <input name="name" type="text" id="inputName" class="form-control">
        
                            @error('name')
                               <span class="text-danger">{{$message}}</span> 
                            @enderror
                          </div>  
                          <div class="form-group col-md-6">
                            <label for="inputName">Father's Name</label>
                            <input name="fname" type="text" id="inputName" class="form-control">
        
                            @error('fname')
                               <span class="text-danger">{{$message}}</span> 
                            @enderror
                          </div>  
                          
                    </div> {{--  end 1st row --}}

                    <div class="row">
                        <div class="form-group col-md-6">
                            <label for="inputName">Mother's Name</label>
                            <input name="mname" type="text" id="inputName" class="form-control">
        
                            @error('mname')
                               <span class="text-danger">{{$message}}</span> 
                            @enderror
                          </div>  
                          <div class="form-group col-md-6">
                            <label for="inputName">Mobile Number</label>
                            <input name="mobile" type="text" id="inputName" class="form-control">
        
                            @error('name')
                               <span class="text-danger">{{$message}}</span> 
                            @enderror
                          </div>  
                          
                    </div> {{--  end 2nd row --}}

                    <div class="row">
                        <div class="form-group col-md-6">
                            <label for="inputName">Address</label>
                            <input name="address" type="text" id="inputName" class="form-control">
        
                            @error('mname')
                               <span class="text-danger">{{$message}}</span> 
                            @enderror
                          </div>  
                          <div class="form-group col-md-6">
                            <label for="inputName">Gender</label>
                            <select name="gender" required=""  class="form-control custom-select">
                                <option value="" selected='' disabled=''>Select Gender</option>
                                <option value="Male">Male</option>
                                <option value="Female">Female</option>
                              </select>
        
                            @error('name')
                               <span class="text-danger">{{$message}}</span> 
                            @enderror
                          </div>  
                          
                    </div> {{--  end 3rd row --}}

                    <div class="row">
  
                          <div class="form-group col-md-6">
                            <label for="inputName">Religion</label>
                            <select name="religion" required=""  class="form-control custom-select">
                                <option value="" selected='' disabled=''>Select Religion</option>
                                <option value="Islam">Islam</option>
                                <option value="Hinduism">Hinduism</option>
                                <option value="Christianity">Christianity</option>
                                <option value="Buddhism">Buddhism</option>
                              </select>
        
                            @error('name')
                               <span class="text-danger">{{$message}}</span> 
                            @enderror
                          </div>  

                          <div class="form-group col-md-6">
                            <label for="inputName">Discount</label>
                            <input name="discount" type="text" id="inputName" class="form-control">
        
                            @error('mname')
                               <span class="text-danger">{{$message}}</span> 
                            @enderror
                          </div>

                          <div class="form-group col-md-6">
                            <label for="inputName">Date of Birth</label>
                            <input name="dob" type="date" id="inputName" class="form-control">
        
                            @error('mname')
                               <span class="text-danger">{{$message}}</span> 
                            @enderror
                          </div>
                          
                    </div> {{--  end 4th row --}}

                    <div class="row">
  
                        <div class="form-group col-md-6">
                            <label for="inputName">Year</label>
                            <select name="year_id" required=""  class="form-control custom-select">
                                <option value="" selected='' disabled=''>Select year</option>
                                @foreach ($years as $year)
                                <option value="{{$year->id}}">{{$year->name}}</option>
                                @endforeach
                                
                                

                              </select>
        
                            @error('name')
                               <span class="text-danger">{{$message}}</span> 
                            @enderror
                          </div> 

                        <div class="form-group col-md-6">
                            <label for="inputName">Class</label>
                            <select name="class_id" required=""  class="form-control custom-select">
                                <option value="" selected='' disabled=''>Select Class</option>
                                @foreach ($classes as $class)
                                <option value="{{$class->id}}">{{$class->name}}</option>
                                @endforeach
                                

                              </select>
        
                            @error('name')
                               <span class="text-danger">{{$message}}</span> 
                            @enderror
                          </div> 


                          
                    </div> {{--  end 5th row --}}

                    <div class="row">
  
                        <div class="form-group col-md-6">
                            <label for="inputName">Group</label>
                            <select name="group_id" required=""  class="form-control custom-select">
                                <option value="" selected='' disabled=''>Select Group</option>
                               
                               @foreach($groups as $group)
                                <option value="{{$group->id}}">{{$group->name}}</option>
                                @endforeach
                              </select>
        
                            @error('name')
                               <span class="text-danger">{{$message}}</span> 
                            @enderror
                          </div> 

                          <div class="form-group col-md-6">
                            <label for="inputName">Shift</label>
                            <select name="shift_id" required=""  class="form-control custom-select">
                                <option value="" selected='' disabled=''>Select Shift</option>
                               
                               @foreach($shifts as $shift)
                                <option value="{{$shift->id}}">{{$shift->name}}</option>
                                @endforeach
                              </select>
        
                            @error('name')
                               <span class="text-danger">{{$message}}</span> 
                            @enderror
                          </div> 

       


                          
                    </div> {{--  end 6th row --}}


                    <div class="row">
  
                        <div class="form-group">
                            <label for="inputClientCompany">Profile Image</label>
                            <input name="image" type="file" class="form-control" >
                            <div class="form-group">
                                <img id="showImage" src="{{url('upload/no_image.jpg')}}" alt="" width="100px"; height="100px"; >
                            </div>
                          </div>
                          
                    </div> {{--  end 7th row --}}
                   

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

  <script type="text/javascript">
    $(document).ready(function(){
        $('#image').change(function(e){
            var reader = new FileReader();
            reader.onload = function(e){
                $('#showImage').attr('src', e.target.result);
            }
            reader.readAsDataURL(e.target.files[0]);
        });
    });
</script>


  @endsection


