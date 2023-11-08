@extends('admin.admin_master')

@section('admin')
   
<section class="content-wrapper ">
    <div class="container-fluid">
      <div class="row">
        <div class="col-12">
          <div class="card">
            <div class="card-header">
            <div class="row">
                <div class="col-lg-4 col-md-4">
                    <h3 class="card-title">Other Cost List</h3>
                    </div>
                    <div class="col-lg-4 col-md-4"></div>
                    <div class="col-lg-4 col-md-4 text-center">
                        <a href="{{route('other.cost.add')}}" style="float:right" class="btn btn-block btn-primary btn-sm"> Add Other Cost</a>
    
                    </div>
            </div>
              
            </div>
            <!-- /.card-header -->
            <div class="card-body">
              <table id="example1" class="table table-bordered table-striped">
                <thead>
                <tr>
                  <th>SL</th>
                  <th>Date</th>
                  <th>Amount</th>
                  <th>Description</th>
                  <th>Image</th>
                  <th>Action</th>
        
                
                </tr>
                </thead>
                <tbody>
                    @foreach ($allData as $key=>$value)     
                <tr>
                  <td>{{$key+1}}</td>
                  <td>{{date('d-M-Y',strtotime($value->date))	}}</td>
                  <td>{{$value->amount}}</td>
                  <td>{{$value->description}}</td>
                  <td>
                    <img src="{{(!empty($value->image)) ? url('upload/cost_images/'.$value->image):url('upload/no_image.jpg')}}" alt="" width="80px" height="80px">
                  </td>
                  <td>
                    <a href="{{route('edit.other.cost',$value->id)}}" class="btn btn-info">Edit</a>
                    <a href="{{route('delete.other.cost',$value->id)}}" class="btn btn-danger" id="delete">Delete</a>
                  </td>
                </tr>
                @endforeach
                </tfoot>
              </table>
            </div>
            <!-- /.card-body -->
          </div>
          <!-- /.card -->


          <!-- /.card -->
        </div>
        <!-- /.col -->
      </div>
      <!-- /.row -->
    </div>
    <!-- /.container-fluid -->
  </section>

  @endsection

  