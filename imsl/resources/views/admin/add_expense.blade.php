@extends ('layout.admin')

@section('index-content')


  <div id="app">
    <section class="section">
      <div class="container mt-5">
        <div class="row">
          <div class="col-12 col-sm-10 offset-sm-1 col-md-8 offset-md-2 col-lg-8 offset-lg-2 col-xl-8 offset-xl-2">
            <div class="login-brand">
              <img src="{{ url('/stisla/img/stisla-fill.svg') }}" alt="logo" width="100" class="shadow-light rounded-circle">
            </div>

            <div class="card card-primary">
              <div class="card-header"><h4>Add Expense</h4></div>

              <div class="card-body">
                <form method="POST">
                  <div class="row">
                    
                     <div class="form-group col-6">
                      <label>By Who</label>
                      <input type="text" class="form-control" name="byWho">
                    </div>
                     <div class="form-group col-6">
                      <label>Amount</label>
                      <input type="text" class="form-control" name="expenseAmount">
                    </div>
                     <div class="form-group col-6">
                      <label>Purpose</label>
                      <input type="text" class="form-control" name="purpose">
                    </div>
                    </div>
                    
                  </div>

                 

                  
              

                  <div class="form-group">
                    <button type="submit" class="btn btn-primary btn-lg btn-block" name="submit">
                      Add to list
                    </button>
                  </div>
                  <div>
                    <button type="button" class="btn btn-secondary btn-lg btn-block" name="cancel">
                      Cancel
                    </button>
                  </div>
                </form>
              </div>
            </div>
           
          </div>
        </div>
      </div>
    </section>
  </div>

  @stop