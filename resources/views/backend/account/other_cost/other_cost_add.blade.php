@extends('admin.admin_master')

@section('admin')
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.1/jquery.min.js"></script>
<section class="content-wrapper ">
    <div class="container-fluid">

            <div class="row">
        <div class="col-md-6">
            <div class="card card-primary">

                <div class="card-header">
                  <h3 class="card-title">Add Other Cost</h3>
    
                  <div class="card-tools">
                    <button type="button" class="btn btn-tool" data-card-widget="collapse" title="Collapse">
                      <i class="fas fa-minus"></i>
                    </button>
                  </div>
                </div>
                <form action="{{route('store.other.cost')}}" method="post" enctype="multipart/form-data">
                    @csrf
                <div class="card-body">


                    <div class="row">
                      
                      <div class="form-group col-md-6">
                        <label for="inputName">Amount</label>
                        <input name="amount" type="text" id="inputName" class="form-control">

                      </div>  

                      <div class="form-group col-md-6">
                        <label for="inputName">Date</label>
                        <input name="date" type="date" id="inputName" class="form-control">

                      </div>


                          
                    </div> {{--  end 1st row --}}


                    <div class="row">
                        <div class="form-group col-md-6">
                            <label>Description</label>
                            <textarea name="description" class="form-control" rows="3" placeholder="Enter ..."></textarea>
                          </div>
                        <div class="form-group col-md-6">
                            <label for="inputClientCompany"> Image</label>
                            <input name="image" type="file" class="form-control" >
                            <div class="form-group">
                                <img id="showImage" src="{{ url('upload/no_image.jpg') }}" style="width: 100px; width: 100px;"> 

                            </div>
                          </div>
                          
                    </div> {{--  end 2nd row --}}
                   

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
				$('#showImage').attr('src',e.target.result);
			}
			reader.readAsDataURL(e.target.files['0']);
		});
	});
</script>



  @endsection


