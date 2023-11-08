@extends('admin.admin_master')
@section('admin')
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.1/jquery.min.js"></script>
<section class="content-wrapper ">
    <div class="container-fluid">

            <div class="row">
        <div class="col-md-6">
            <div class="card card-primary">

                <div class="card-header">
                  <h3 class="card-title">Manage Profile</h3>
    
                  <div class="card-tools">
                    <button type="button" class="btn btn-tool" data-card-widget="collapse" title="Collapse">
                      <i class="fas fa-minus"></i>
                    </button>
                  </div>
                </div>
                <form action="{{route('profile.store')}}" method="post" enctype="multipart/form-data">
                    @csrf
                <div class="card-body">



                  <div class="form-group">
                    <label for="inputName">User Name</label>
                    <input name="name"  id="current_password" type="text" class="form-control" value="{{$editData->name}}" >
                  </div>
                  
    
                  <div class="form-group">
                    <label for="inputClientCompany">User Email</label>
                    <input name="email" type="email" id="inputClientCompany" class="form-control" value="{{$editData->email}}" >
                  </div>


                  <div class="form-group">
                    <label for="inputClientCompany">User Mobile</label>
                    <input name="mobile" type="text" id="inputClientCompany" class="form-control" value="{{$editData->mobile}}" >
                  </div>

                  <div class="form-group">
                    <label for="inputClientCompany">User Address</label>
                    <input name="address" type="text" id="inputClientCompany" class="form-control" value="{{$editData->address}}" >
                  </div>

                  <div class="form-group">
                    <label for="inputStatus">User Gender</label>
                    <select name="gender"  id="gender" class="form-control custom-select">
                      <option value="" disabled=''>Select Gender</option>
                      <option value="Male" {{$editData->gender == "Male" ? "Male": ""}}>Male</option>
                      <option value="Female" {{$editData->gender == "Female" ? "Female": ""}}>Female</option>
                    </select>
                  </div>


                          


                  <div class="form-group">
                    <label for="inputClientCompany">Profile Image</label>
                    <input name="image" type="file" id="image" class="form-control" >
                    <div class="form-group">
                        <img id="showImage" class="border" src="{{(!empty($user->image)) ? url('upload/user_images/'.$user->image):url('upload/no_image.jpg')}}" alt=""  style="width: 100px; width: 100px; border: 1px solid #000000; >
                    </div>
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
        $('input[name="image"]').change(function(e){
            var reader = new FileReader();
            reader.onload = function(e){
                $('#showImage').attr('src', e.target.result);
            }
            reader.readAsDataURL(e.target.files[0]);
        });
    });

</script>


  @endsection