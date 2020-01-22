@extends ('layout.mainAccountant')

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
                        <th>Name</th>
                        <th>Details</th>
                        <th>Owner Name</th>
                         <th>Address</th>
                        <th>Contact</th>
                        <th>Total Buy</th>
                        <th>Balance</th>
                        <th>Action</th>
                      </tr>

                        @foreach($supplier as $value)
    <tr>
      <td>{{$value['sid']}}</td>
          <td>{{$value['sname']}}</td>
      <td>{{$value['cowner']}}</td>
      <td>{{$value['address']}}</td>
      <td>{{$value['contact']}}</td>
      <td>{{$value['details']}}</td>
      <td>{{$value['tbuy']}}</td>
      <td>{{$value['balance']}}</td>

      <td>
        <a href="{{route('accountant.edit_supplier', $value['sid'])}}">Edit</a> 
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