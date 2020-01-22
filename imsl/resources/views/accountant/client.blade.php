@extends ('layout.main')

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
                        <th>Owner Name</th>
                        <th>Details</th>
                          <th>Address</th>
                        <th>Contact</th>
                      
                        
                        <th>Price</th>
                        <th>Balance</th>
                        <th>Action</th>
                      </tr>

                       <% for(var i=0; i < clientList.length; i++){ %>

                        <tr>

                       <td class="font-weight-600"><%= clientList[i].id %></td>
                        <td><div class="badge badge-warning"><%= clientList[i].name %></div></td>
                        
                        <td><%= clientList[i].owner %></td>
                        <td><%= clientList[i].details %></td>
                        <td><%= clientList[i].address %></td>
                        <td><%= clientList[i].contact %></td>
                        <td><%= clientList[i].price %></td>
                        <td><%= clientList[i].balance %></td>
                        <td>
                            <a href="/dashboard/edit_client/<%= clientList[i].id %>" class="btn btn-primary">EDIT</a> 
                            <a href="/dashboard/delete/<%= clientList[i].id %>" class="btn btn-primary">DELETE</a>
                          </td>

                        </tr>  

                        <% } %>


                    </table>
                  </div>
                </div>
              </div>
            </div>
            </div>
          </section>
        </div>
    @stop