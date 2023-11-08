@extends('admin.admin_master')

@section('admin')
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.1/jquery.min.js"></script>
<section class="content-wrapper ">
    <div class="container-fluid">

            <div class="row">
        <div class="col-md-6">
            <div class="card card-primary">

                <div class="card-header">
                  <h3 class="card-title">Edit Employee</h3>
    
                  <div class="card-tools">
                    <button type="button" class="btn btn-tool" data-card-widget="collapse" title="Collapse">
                      <i class="fas fa-minus"></i>
                    </button>
                  </div>
                </div>
                <form action="{{route('update.employee.registration',$editData->id)}}" method="post" enctype="multipart/form-data">
                    @csrf
                <div class="card-body">

                    <div class="row">
                        <div class="form-group col-md-6">
                            <label for="inputName">Employee Name</label>
                            <input value="{{$editData->name}}" name="name" type="text" id="inputName" class="form-control">
        
                            @error('name')
                               <span class="text-danger">{{$message}}</span> 
                            @enderror
                          </div>  
                          <div class="form-group col-md-6">
                            <label for="inputName">Father's Name</label>
                            <input value="{{$editData->fname}}" name="fname" type="text" id="inputName" class="form-control">
        
                            @error('fname')
                               <span class="text-danger">{{$message}}</span> 
                            @enderror
                          </div>  
                          
                    </div> {{--  end 1st row --}}

                    <div class="row">
                        <div class="form-group col-md-6">
                            <label for="inputName">Mother's Name</label>
                            <input value="{{$editData->mname}}" name="mname" type="text" id="inputName" class="form-control">
        
                            @error('mname')
                               <span class="text-danger">{{$message}}</span> 
                            @enderror
                          </div>  
                          <div class="form-group col-md-6">
                            <label for="inputName">Mobile Number</label>
                            <input  value="{{$editData->mobile}}" name="mobile" type="text" id="inputName" class="form-control">
        
                            @error('name')
                               <span class="text-danger">{{$message}}</span> 
                            @enderror
                          </div>  
                          
                    </div> {{--  end 2nd row --}}

                    <div class="row">
                        <div class="form-group col-md-6">
                            <label for="inputName">Address</label>
                            <input value="{{$editData->address}}" name="address" type="text" id="inputName" class="form-control">
                            @error('mname')
                               <span class="text-danger">{{$message}}</span> 
                            @enderror
                          </div>  

                          <div class="form-group col-md-6">
                            <label for="inputName">Gender</label>
                            <select name="gender" required=""  class="form-control custom-select">
                                <option value="" selected='' disabled=''>Select Gender</option>
                                <option value="Male" {{($editData->gender == 'Male')? 'selected':''}}>Male</option>
                                <option value="Female" {{($editData->gender == 'Female')? 'selected':''}}>Female</option>
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
                                <option value="Islam" {{($editData->religion == 'Islam')? 'selected':''}}>Islam</option>
                                <option value="Hinduism" {{($editData->religion == 'Hinduism')? 'selected':''}}>Hinduism</option>
                                <option value="Christianity" {{($editData->religion == 'Christianity')? 'selected':''}}>Christianity</option>
                                <option value="Buddhism" {{($editData->religion == 'Buddhism')? 'selected':''}}>Buddhism</option>
                              </select>
        
                            @error('name')
                               <span class="text-danger">{{$message}}</span> 
                            @enderror
                          </div>  

                          <div class="form-group col-md-6">
                            <label for="inputName">Designation</label>
                            <select name="designation_id" required=""  class="form-control custom-select">
                                <option value="" selected='' disabled=''>Select Designation</option>
                                @foreach ($designation as $desi)
                                <option value="{{$desi->id}}" {{($editData->designation_id == $desi->id)?'selected':''}}>{{$desi->name}}</option>
                                @endforeach
                              </select>
                            @error('name')
                               <span class="text-danger">{{$message}}</span> 
                            @enderror
                          </div> 




                          
                    </div> {{--  end 4th row --}}

                    <div class="row">

                                                  
                        <div class="form-group col-md-6">
                            <label for="inputName">Date of Birth</label>
                            <input type="date" name="dob" class="form-control" required="" value="{{ isset($editData) ? $editData->dob : '' }}" > 
                            
                            @error('dob')
                                <span class="text-danger">{{$message}}</span> 
                            @enderror
                        </div>
                      @if(!isset($editData))
                      <div class="form-group col-md-6">
                          <label for="inputName">Salary</label>
                          <input value="{{$editData->salary}}" name="salary" type="text" id="inputName" class="form-control">
                          @error('salary')
                              <span class="text-danger">{{$message}}</span> 
                          @enderror
                      </div>  
                    @endif

                          
                        @if(!isset($editData))
                        <div class="form-group col-md-6">
                          <label for="inputName">Joining Date</label>
                          <input value="{{$editData->join_date}}" name="join_date" type="date" id="inputName" class="form-control">
      
                          @error('mname')
                             <span class="text-danger">{{$message}}</span> 
                          @enderror
                        </div>

                        @endif
                    </div> {{--  end 5th row --}}


                    <div class="row">


  
                        <div class="form-group">
                            <label for="inputClientCompany">Profile Image</label>
                            <input name="image" type="file" class="form-control" >
                            <div class="form-group">
                                <img id="showImage" src="{{ (!empty($editData->image))? url('upload/employee_images/'.$editData->image):url('upload/no_image.jpg') }}" style="width: 100px; width: 100px; border: 1px solid #000000;">
                            </div>
                          </div>
                          
                    </div> {{--  end 7th row --}}
                   
                    
                    
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


