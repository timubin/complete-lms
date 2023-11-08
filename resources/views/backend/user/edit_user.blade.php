@extends('admin.admin_master')

@section('admin')
   
<section class="content-wrapper ">
    <div class="container-fluid">

            <div class="row">
        <div class="col-md-6">
            <div class="card card-primary">

                <div class="card-header">
                  <h3 class="card-title">Update User</h3>
    
                  <div class="card-tools">
                    <button type="button" class="btn btn-tool" data-card-widget="collapse" title="Collapse">
                      <i class="fas fa-minus"></i>
                    </button>
                  </div>
                </div>
                <form action="{{route('users.update',$editData->id)}}" method="post">
                    @csrf
                <div class="card-body">
                    <div class="form-group">
                        <label for="inputStatus">User Role</label>
                        <select name="role"  id="inputStatus" class="form-control custom-select">
                          <option value="" selected='' disabled=''>Select Role</option>
                          <option value="Admin" {{$editData->role == "Admin" ? "selected": ""}}>Admin</option>
                          <option value="Oparator" {{$editData->role == "User" ? "selected": ""}}>Oparator</option>
                        </select>
                      </div>
        


                  <div class="form-group">
                    <label for="inputName">User Name</label>
                    <input name="name" type="text" id="inputName" class="form-control" value="{{$editData->name}}" >
                  </div>
                  
    
                  <div class="form-group">
                    <label for="inputClientCompany">User Email</label>
                    <input name="email" type="email" id="inputClientCompany" class="form-control" value="{{$editData->email}}" >
                  </div>
    
                  

                </div>

                <div class="addBtn pb-5">
                    <input class="btn btn-success mx-3" type="submit" value="Update">
                  </div>
              </div>
            </form>
                <!-- /.card-body -->
     
        
          <!-- /.card -->
        
         
       
        </div>
       
      </div>


    </div>

  </section>



  



  @endsection