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
                        <th>Project Name</th>
                        <th>Client</th>
                        <th>Estimated Cost</th>
                        <th>Total Price</th>
                        <th>Paid</th>
                         <th>Details</th>
                        <th>Status</th>
                        <th>Action</th>
                      </tr>

                         @foreach($project as $value)
    <tr>
      <td>{{$value['pid']}}</td>
      <td>{{$value['pname']}}</td>
          <td>{{$value['client']}}</td>
      <td>{{$value['ecost']}}</td>
      <td>{{$value['tcost']}}</td>
      <td>{{$value['paid']}}</td>
      <td>{{$value['details']}}</td>
      <td>{{$value['status']}}</td>

      <td>
        <a href="{{route('accountant.edit_project', $value['pid'])}}">Edit</a> 
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