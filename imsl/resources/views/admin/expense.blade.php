@extends ('layout.admin')

@section('index-content')


      <!-- Main Content -->
      <div class="main-content">
        <section class="section">
          <div class="row">
            <div class="col-md-12">
              <div class="card">
                <div class="card-header">
                  <h4>Invoices</h4>
                  <div class="card-header-action">
                    <a href="#" class="btn btn-danger">View More <i class="fas fa-chevron-right"></i></a>
                  </div>
                </div>
                <div class="card-body p-0">
                  <div class="table-responsive table-invoice">
                    <table class="table table-striped">
                      <tr>
                        <th>ID</th>
                        <th>Date</th>
                        <th>Pupose</th>
                        <th>Details</th>
                        <th>Amount</th>
                      </tr>
                       @foreach($expense as $value)
                        <tr>
                          <td>{{$value['eid']}}</td>
                          <td>{{$value['edate']}}</td>
                              <td>{{$value['purpose']}}</td>
                          <td>{{$value['details']}}</td>
                          <td>{{$value['amount']}}</td>
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