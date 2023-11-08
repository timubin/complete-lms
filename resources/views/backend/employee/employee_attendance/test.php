<table id="example2" class="table table-bordered table-hover">
                <thead>
                <tr>
                  <th>SL</th>
                  <th>Name</th>
                  <th>ID No</th>
                  <th>Date</th>
                  <th>Attend Status</th>
                  <th>Action</th>
                
                </tr>
                </thead>
                <tbody>
                    @foreach ($allData as $key=>$value)     
                <tr>
                  <td>{{$key+1}}</td>
                  <td>{{$value['user']['name']}}</td>
                  <td>{{$value['user']['id_no']}}</td>
                  <td>{{date('d-m-Y',strtotime($value->date))}}</td>
                  <td>{{$value->attend_sataus}}</td>
                 
                  <td>
                    <a href="{{route('employee.attendance.edit',$value->id)}}" class="btn btn-info">Edit</a>
                    <a href="{{route('employee.attendance.delete',$value->id)}}" class="btn btn-danger" id="delete">Delete</a>
                  </td>
                </tr>
                @endforeach
                </tfoot>
              </table>