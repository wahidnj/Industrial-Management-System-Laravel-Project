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
                        <th>Project Name</th>
                        <th>Client</th> 
                        <th>Total Price</th>
                        <th>Paid</th>
                        <th>Estimated Budget</th>
                        <th>Status</th>
                        <th>Action</th>
                      </tr>

                       @foreach($user as $value)

                        <tr>

                        <td class="font-weight-600">{{$value['pid']}}</td>
                        <td><div class="badge badge-warning">{{$value['pname']}}</div></td>
                        
                        <td>{{$value['client']}}</td>
                        <td>{{$value['tcost']}}</td>
                        
                        <td>{{$value['paid']}}</td>
                        <td>{{$value['ecost']}}</td>
                        <td>{{$value['status']}}</td>
                        <td>
                            <a href="{{route('admin.edit_project', $value['pid'])}}" class="btn btn-primary">EDIT</a> 
                            <a href="{{route('admin.delete_project', $value['pid'])}}" class="btn btn-primary">DELETE</a>
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