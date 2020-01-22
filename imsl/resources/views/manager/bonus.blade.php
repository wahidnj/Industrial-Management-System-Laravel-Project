@extends ('layout.manager')

@section('index-content')


      <!-- Main Content -->
      <div class="main-content">
        <section class="section">
          <div class="row">
            <div class="col-md-12">
              <div class="card">
                <div class="card-header">
                  <h4>Bonus Request List</h4>
                  
                </div>
                <div class="card-body p-0">
                  <div class="table-responsive table-invoice">
                    <table class="table table-striped">
                      <tr>
                        <th>Serial No</th>
                        <th>Employee ID</th>
                        <th>Employee Name</th>
                        <th>Job Tpye</th>
                        
                        <th>Bonus Reason</th>
                       <!--  <th>Bonus Percentage</th> -->
                        <th>Date</th>
                        <th>Status</th>
                        <th>Action</th>
                      </tr>

                        @foreach($bonus as $value)
                        <tr>
                          <td class="font-weight-600">{{$value['serialno']}}</td>
                          <td><div class="badge badge-warning">{{$value['eid']}}</div></td>
                          <td>{{$value['ename']}}</td>
                          <td>{{$value['type']}}</td>
                          <td>{{$value['reason']}}</td>
                          <!-- <td>{{$value['percentage']}}</td> -->
                          <td>{{$value['bdate']}}</td>
                          <td>{{$value['status']}}</td>
                      
                          
                          <td>
                            <a href="{{route('manager.edit_bonus', $value['serialno'])}}" class="btn btn-primary">Accept</a> 
                            <a href="{{route('manager.reject_bonus', $value['serialno'])}}" class="btn btn-primary">Reject</a> 
                            
                          </td>
                        </tr>
                      @endforeach
                     
                    </table>
                  </div>
                </div>
              </div>
            </div>
            </div>
          </section>
        </div>
   @stop