@extends ('layout.manager')

@section('index-content')

      <!-- Main Content -->
      <div class="main-content">
        <section class="section">
          <div class="row">
            <div class="col-md-12">
              <div class="card">
                <div class="card-header">
                  <h4>Labour List</h4>
                  
                </div>
                <div class="card-body p-0">
                  <div class="table-responsive table-invoice">
                    <table class="table table-striped">
                      <tr>
                        <th>Labour ID</th>
                        <th>LabourName</th>
                        <th>Address</th>
                        <th>Contact</th>
                        <th>Expertise</th>
                        <th>Salary</th>
                    
                      
                        
                      </tr>

                     @foreach($labour as $value)
                        <tr>
                          <td class="font-weight-600">{{$value['lid']}}</td>
                          <td><div class="badge badge-warning">{{$value['lname']}}</div></td>
                          <td>{{$value['laddress']}}</td>
                          <td>{{$value['lcontact']}}</td>
                          <td>{{$value['expertise']}}</td>
                          <td>{{$value['salary']}}</td>
                          
                          
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