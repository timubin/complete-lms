@extends('admin.admin_master')

@section('admin')
   
<section class="content-wrapper ">
    <div class="container-fluid">

            <div class="row">
        <div class="col-md-6">
            <div class="card card-primary">

                <div class="card-header">
                  <h3 class="card-title">Employee Salary Increment </h3>
    
                  <div class="card-tools">
                    <button type="button" class="btn btn-tool" data-card-widget="collapse" title="Collapse">
                      <i class="fas fa-minus"></i>
                    </button>
                  </div>
                </div>
                <form action="{{route('update.increment.store',$editData->id)}}" method="post">
                    @csrf
                <div class="card-body">
                   
                  <div class="form-group">
                    <label for="inputName">Salary Amount</label>
                    <input name="increment_sallary" type="text" id="inputName" class="form-control" required>
                  </div>
                  <div class="form-group">
                    <label for="inputName">Effected Date</label>
                    <input name="effected_sallary" type="date" id="inputName" class="form-control" required>
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

