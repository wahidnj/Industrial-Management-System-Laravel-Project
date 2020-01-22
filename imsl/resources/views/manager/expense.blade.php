@extends ('layout.manager')

@section('index-content')


      <!-- Main Content -->
      <div class="main-content">
        <section class="section">
          <div class="row">
            <div class="col-md-12">
              <div class="card">
                <div class="card-header">
                  <h4>Expense History</h4>
                  
                </div>
                <div class="card-body p-0">
                  <div class="table-responsive table-invoice">
                    <table class="table table-striped">
                      <tr>
                        <th>Expense ID</th>
                        <th>Expense Purpose</th>
                        <th>Details</th>
                        <th>Amount</th>
                        <th>Expense Date</th>
                      </tr>

                        @foreach($expense as $value)
                        <tr>
                          <td class="font-weight-600">{{$value['eid']}}</td>
                          <td><div class="badge badge-warning">{{$value['purpose']}}</div></td>
                          <td>{{$value['details']}}</td>
                       
                          <td>{{$value['amount']}}</td>
                          <td>{{$value['edate']}}</td>
                          
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