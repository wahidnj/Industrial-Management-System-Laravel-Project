@extends ('layout.manager')

@section('index-content')


      <!-- Main Content -->
      <div class="main-content">
        <section class="section">
          <div class="row">
            <div class="col-md-12">
              <div class="card">
                <div class="card-header">
                  <h4>Sold History</h4>
                </div>
                <div class="card-body p-0">
                  <div class="table-responsive table-invoice">
                    <table class="table table-striped">
                      <tr>
                        <th>Serial No</th>
                        <th>Project ID</th>
                        <th>Project Name</th>
                         <th>Total Cost</th>
                        <th>Estimated Cost</th>
                        <th>Profit</th>
                        <th>Date</th>
                       
                      </tr>


                       @foreach($sold as $value)
                        <tr>
                          <td class="font-weight-600">{{$value['serialno']}}</td>
                          <td><div class="badge badge-warning">{{$value['pid']}}</div></td>
                          <td>{{$value['pname']}}</td>
                          
                          <td>{{$value['tcost']}}</td>
                          <td>{{$value['ecost']}}</td>
                          <td>{{$value['profit']}}</td>
                          <td>{{$value['sdate']}}</td>
                         
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