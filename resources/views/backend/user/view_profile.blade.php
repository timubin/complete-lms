@extends('admin.admin_master')

@section('admin')
   
<section class="content-wrapper ">
    <div class="container-fluid">
      <div class="row">
        <div class="col-6">
            <div class="card card-primary card-outline">
                <div class="card-body box-profile">
                    <div class="text-center">
                      <img class="profile-user-img img-fluid img-circle" src="http://127.0.0.1:8000/upload/user_images/202301311125download.png" alt="User profile picture" style="
                      height: 100px;
                      width: 100px;
                  ">
                      </div>
  
                  <h3 class="profile-username text-center"><b>User Name : </b> {{$user->name}}</h3>
                  <p class="text-muted text-center"><b>User Type :</b>  {{$user->usertype}}</p>
                  <p class="text-muted text-center"><b>User Email :</b>  {{$user->email}}</p>
                 
                  <ul class="list-group list-group-unbordered mb-3">
                    <li class="list-group-item">
                      <b>Mobile No</b> <a class="float-right">{{$user->mobile}}</a>
                    </li>
                    <li class="list-group-item">
                      <b>Address</b> <a class="float-right">{{$user->address}}</a>
                    </li>
                    <li class="list-group-item">
                      <b>Gender</b> <a class="float-right">{{$user->gender}}</a>
                    </li>
                    <li class="list-group-item">
                      <b>Status</b> <a class="float-right">{{$user->status}}</a>
                    </li>
                  </ul>
                  <a href="{{route('profile.edit')}}" style="float:right" class="btn btn-block btn-primary ">Edit Profile</a>

                </div>
                <!-- /.card-body -->
              </div>
         
        </div>
        <!-- /.col -->
      </div>
      <!-- /.row -->
    </div>
    <!-- /.container-fluid -->
  </section>

  @endsection

  