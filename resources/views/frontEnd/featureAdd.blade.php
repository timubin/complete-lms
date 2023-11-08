@extends('admin.admin_master')

@section('admin')
   
<section class="content-wrapper ">
    <div class="container-fluid">

            <div class="row">
        <div class="col-md-6">
            <div class="card card-primary">

                <div class="card-header">
                  <h3 class="card-title">Add Title </h3>
    
                  <div class="card-tools">
                    <button type="button" class="btn btn-tool" data-card-widget="collapse" title="Collapse">
                      <i class="fas fa-minus"></i>
                    </button>
                  </div>
                </div>

                <form action="{{route('home.feature.store')}}" method="post">
                    @csrf
                <div class="card-body">
                   
                  <div class="form-group">
                    <label for="inputName">Features Title</label>
                    <input name="features_title" type="text" id="inputName" class="form-control">
                    @error('features_title')
                       <span class="text-danger">{{$message}}</span> 
                    @enderror
                  </div>
                  
                  <div class="form-group">
                    <label for="inputName">Features Icon</label>
                    <input name="features_icon" type="text" id="inputName" class="form-control">
                    @error('features_icon')
                       <span class="text-danger">{{$message}}</span> 
                    @enderror
                  </div>
                  
                  <div class="form-group">
                    <label for="inputName">Features Details</label>
                    <input name="features_details" type="text" id="inputName" class="form-control">
                    @error('features_details')
                       <span class="text-danger">{{$message}}</span> 
                    @enderror
                  </div>

                  <div class="form-group">
                    <label for="inputName">Features Button</label>
                    <input name="features_btn" type="text" id="inputName" class="form-control">
                    @error('features_btn')
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

