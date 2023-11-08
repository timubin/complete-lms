@extends('admin.admin_master')

@section('admin')
   
<section class="content-wrapper ">
    <div class="container-fluid">

            <div class="row">
        <div class="col-md-6">
            <div class="card card-primary">

                <div class="card-header">
                  <h3 class="card-title">Change Password</h3>
    
                  <div class="card-tools">
                    <button type="button" class="btn btn-tool" data-card-widget="collapse" title="Collapse">
                      <i class="fas fa-minus"></i>
                    </button>
                  </div>
                </div>
                <form action="{{route('password.update')}}" method="post">
                    @csrf
                <div class="card-body">
                      
    
                  <div class="form-group">
                    <label for="inputClientCompany">Current Password</label>
                    <input name="oldpassword" type="password" id="inputClientCompany" class="form-control">
                @error('oldpassword')  
                <span class="text-danger">{{$message}}</span>
                @enderror
                
                </div>
    
                  <div class="form-group">
                    <label for="inputProjectLeader">New Password</label>
                    <input name="password" id="password" type="password" class="form-control">
                    @error('password')  
                    <span class="text-danger">{{$message}}</span>
                    @enderror
                  </div>

                  <div class="form-group">
                    <label for="inputProjectLeader">Confirm Password</label>
                    <input name="password_confirmation" id="password_confirmation" type="password"  class="form-control">
                    @error('password_confirmation')  
                    <span class="text-danger">{{$message}}</span>
                    @enderror
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

