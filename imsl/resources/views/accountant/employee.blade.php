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
                        <th>Email</th>
                        <th>Name</th>
                        <th>Address</th>
                        <th>Contact</th>
                          <th>Type</th>
                        <th>Salary</th>
                        <th>Action</th>
                      </tr>
                      

                        

             @foreach($emp as $value)
    <tr>
      <td>{{$value['eid']}}</td>
          <td>{{$value['email']}}</td>
      <td>{{$value['ename']}}</td>
      <td>{{$value['address']}}</td>
      <td>{{$value['contact']}}</td>
       <td>{{$value['type']}}</td>
      <td>{{$value['esalary']}}</td>

      <td>
        <a href="{{route('accountant.employee_bonus', $value['eid'])}}">Bonus Request</a>
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