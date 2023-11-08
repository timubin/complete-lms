@extends('admin.admin_master')

@section('admin')
   
<section class="content-wrapper ">
    <div class="container-fluid">

            <div class="row">
        <div class="col-md-6">
            <div class="card card-primary">

                <div class="card-header">
                  <h3 class="card-title">Add User</h3>
    
                  <div class="card-tools">
                    <button type="button" class="btn btn-tool" data-card-widget="collapse" title="Collapse">
                      <i class="fas fa-minus"></i>
                    </button>
                  </div>
                </div>
                <form action="{{route('users.store')}}" method="post">
                    @csrf
                <div class="card-body">
                    <div class="form-group">
                        <label for="role">User Role</label>
                        <select name="role" required="" id="role" class="form-control custom-select">
                          <option value="" selected='' disabled=''>Select Role</option>
                          <option value="Admin">Admin</option>
                          <option value="Operator">Oparator</option>
                        </select>
                      </div>
        


                  <div class="form-group">
                    <label for="inputName">User Name</label>
                    <input name="name" type="text" id="inputName" class="form-control" required>
                  </div>
                  
    
                  <div class="form-group">
                    <label for="inputClientCompany">User Email</label>
                    <input name="email" type="email" id="inputClientCompany" class="form-control" required>
                  </div>


                  <div class="form-group">
                 
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

