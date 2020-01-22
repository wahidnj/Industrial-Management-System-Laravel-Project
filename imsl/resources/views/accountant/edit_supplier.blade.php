@extends ('layout.mainAccountant')

@section('index-content')


  <div id="app">
    <section class="section">
      <div class="container mt-5">
        <div class="row">
          <div class="col-12 col-sm-10 offset-sm-1 col-md-8 offset-md-2 col-lg-8 offset-lg-2 col-xl-8 offset-xl-2">
            <div class="login-brand">
              <img src="../../img/stisla-fill.svg" alt="logo" width="100" class="shadow-light rounded-circle">
            </div>

            <div class="card card-primary">
              <div class="card-header"><h4>Edit Supplier Information</h4></div>

              <div class="card-body">
                <form method="POST">
                   {{csrf_field()}}

                   <div class="form-group">
                    <label>Supplier ID : </label>
                    <label> {{$supplier['sid']}}</label>
                    </div>

                  <div class="row">
                    <div class="form-group col-6">
                      <label for="name">Supplier Name : </label>
                      <label> {{$supplier['sname']}}</label>
                    </div>

                     <div class="form-group col-6">
                      <label>Company Owner : </label>
                     <label> {{$supplier['cowner']}}</label>

                 </div>
                    
                  </div>

                 
                  <div class="row">
                    <div class="form-group col-6">
                      <label>Supplier Contact : </label>
                      <label> {{$supplier['contact']}}</label>
                  </div>

                      <div class="form-group col-6">
                      <label>Supplier Address : </label>
                      <label> {{$supplier['address']}}</label>
                      </div>

                      <div class="form-group col-6">
                      <label>Total Buy : </label>
                      <label> {{$supplier['tbuy']}}</label>
                      </div>

                      <div class="form-group col-6">
                      <label>Balance : </label>
                      <label> {{$supplier['balance']}}</label>
                      </div>
                   
                      <div class="form-group col-6">
                      <label>Balance Pay : </label>
                     <input type="text" class="form-control" name="bpay">

                      </div>
                                                          
                    </div>
                
                    <div class="form-group">
                    <input type="submit" class="btn btn-primary btn-lg btn-block" name="submit">
                      
                    </input>
                  </div>
                  <div>
                    
                </form>
              </div>
            </div>
           
          </div>
        </div>
      </div>
    </section>
  </div>

  <!-- General JS Scripts -->
  @stop