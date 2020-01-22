@extends ('layout.mainAccountant')

@section('index-content')


      <!-- Main Content -->
       <div class="main-content">
        <section class="section">
          <div class="row">
            <div class="col-md-12">
              <div class="card">
                <div class="card-body p-0">
                  <div class="table-responsive table-invoice">
                    <table class="table table-striped">
                      <tr>
                        <th>ID</th>
                        <th>Name</th>
                        <th>Job Type</th>
                        <th>Reason</th>
                        <th>Bonus</th>
                        <th>Status</th>
                        <th>Date</th>
                        <th>Action</th>
                      </tr>
                      

                        
             @foreach($emp as $value)
    <tr>
      
      <td>{{$value['eid']}}</td>
      <td>{{$value['ename']}}</td>
      <td>{{$value['type']}}</td>
      <td>{{$value['reason']}}</td>
      <td>{{$value['percentage']}}</td>
       <td>{{$value['status']}}</td>
      <td>{{$value['bdate']}}</td>



      <td>
        <a href="{{route('accountant.delete_bonus', $value['serialno'])}}">Delete</a>
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