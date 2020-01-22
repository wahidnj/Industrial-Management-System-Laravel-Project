<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, shrink-to-fit=no" name="viewport">
  <title>Manager dashboard &mdash; IMS</title>

  <!-- General CSS Files -->
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.2/css/all.css" integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous">

  <!-- CSS Libraries -->
  <link rel="stylesheet" href="../../node_modules/jqvmap/dist/jqvmap.min.css">
  <link rel="stylesheet" href="../../node_modules/summernote/dist/summernote-bs4.css">
  <link rel="stylesheet" href="../../node_modules/owl.carousel/dist/assets/owl.carousel.min.css">
  <link rel="stylesheet" href="../../node_modules/owl.carousel/dist/assets/owl.theme.default.min.css">

  <!-- Template CSS -->
 <link rel="stylesheet" href="{{ url('/style.css') }}">
  <link rel="stylesheet" href="{{ url('/components.css') }}">
</head>

<body>
  <div id="app">
    <div class="main-wrapper">
      <div class="navbar-bg"></div>
      <nav class="navbar navbar-expand-lg main-navbar">
        <form class="form-inline mr-auto">
          <ul class="navbar-nav mr-3">
            <li><a href="#" data-toggle="sidebar" class="nav-link nav-link-lg"><i class="fas fa-bars"></i></a></li>
            <li><a href="#" data-toggle="search" class="nav-link nav-link-lg d-sm-none"><i class="fas fa-search"></i></a></li>
          </ul>
        </form>
      
          <li class="dropdown"><a href="#" data-toggle="dropdown" class="nav-link dropdown-toggle nav-link-lg nav-link-user">
            
            <div class="d-sm-none d-lg-inline-block">Hi, {{session('user')}}</div></a>
            <div class="dropdown-menu dropdown-menu-right">
              
              <a href="{{route('manager.profile', session('user'))}}" class="dropdown-item has-icon">
                <i class="far fa-user"></i> Profile
              </a>
                   
          </li>
        </ul>
      </nav>


     <div class="main-sidebar">
        <aside id="sidebar-wrapper">
          <div class="sidebar-brand">
            <a href="/manager">Industrial Management</a>
          </div>
          <div class="sidebar-brand sidebar-brand-sm">
            <a href="/manager">St</a>
          </div>

          <ul class="sidebar-menu">
              <li class="menu-header">Manager</li>
              <li class="nav-item dropdown active">
                <a href="/manager" class="nav-link"><i class="fas fa-fire"></i><span>Manager Dashboard</span></a>
              </li>
              <li class="menu-header">Menu</li>
              <li class="nav-item dropdown">
                <a href="{{route('manager.employeeList')}}" class="nav-link has-dropdown" data-toggle="dropdown"><i class="fas fa-user-tie"></i> <span>Employee</span></a>
                <ul class="dropdown-menu">
                  <li><a class="nav-link" href="{{route('manager.add_employee')}}">Add Employee</a></li>
                  <li><a class="nav-link" href="{{route('manager.employeeList')}}">Employee List</a></li>
                </ul>
              </li>

              

              <li class="nav-item dropdown">
                <a href="{{route('manager.supplierList')}}" class="nav-link has-dropdown" data-toggle="dropdown"><i class="fas fa-truck-moving"></i> <span>Supplier</span></a>
                <ul class="dropdown-menu">
                  <li><a class="nav-link" href="{{route('manager.add_supplier')}}">Add Supplier</a></li>
                  <li><a class="nav-link" href="{{route('manager.supplierList')}}">Supplier List</a></li>
                </ul>
              </li>

              <li class="nav-item dropdown">
                <a href="{{route('manager.projectList')}}" class="nav-link has-dropdown" data-toggle="dropdown"><i class="fab fa-r-project"></i> <span>Project</span></a>
                <ul class="dropdown-menu">
                  <li><a class="nav-link" href="{{route('manager.add_project')}}">Add Project</a></li>
                  <li><a class="nav-link" href="{{route('manager.projectList')}}">Project List</a></li>
                </ul>
              </li>

              <li class="nav-item dropdown">
                <a href="{{route('manager.clientList')}}" class="nav-link has-dropdown" data-toggle="dropdown"><i class="fas fa-user-secret"></i> <span>Client</span></a>
                <ul class="dropdown-menu">
                  <li><a class="nav-link" href="{{route('manager.add_client')}}">Add Client</a></li>
                  <li><a class="nav-link" href="{{route('manager.clientList')}}">Client List</a></li>
                </ul>
              </li>

             

              <li class="nav-item dropdown">
                <a href="{{route('manager.labourList')}}" class="nav-link has-dropdown" data-toggle="dropdown"><i class="fas fa-people-carry"></i> <span>Labour</span></a>
                <ul class="dropdown-menu">
                  
                  <li><a class="nav-link" href="{{route('manager.labourList')}}">Labour List</a></li>
                </ul>
              </li>

              <li class="nav-item dropdown">
                <a href="{{route('manager.expenseList')}}" class="nav-link has-dropdown" data-toggle="dropdown"><i class="fab fa-r-project"></i> <span>Expense</span></a>
                <ul class="dropdown-menu">
                 
                  <li><a class="nav-link" href="{{route('manager.expenseList')}}">Expense History</a></li>
                </ul>
              </li>

              <li class="nav-item dropdown">
                <a href="{{route('manager.soldList')}}" class="nav-link has-dropdown" data-toggle="dropdown"><i class="fab fa-r-project"></i> <span>Sold History</span></a>
                <ul class="dropdown-menu">
                 
                  <li><a class="nav-link" href="{{route('manager.soldList')}}">Profit Information</a></li>
                </ul>
              </li>


              <li class="nav-item dropdown">
                <a href="{{route('manager.bonusList')}}" class="nav-link has-dropdown" data-toggle="dropdown"><i class="fab fa-r-project"></i> <span>Request</span></a>
                <ul class="dropdown-menu">
                 
                  <li><a class="nav-link" href="{{route('manager.bonusList')}}">Bonus Requst</a></li>
                </ul>
              </li>

              <li class="nav-item dropdown">
                <a href="{{route('manager.reportList')}}" class="nav-link has-dropdown" data-toggle="dropdown"><i class="fab fa-r-project"></i> <span>Report</span></a>
                <ul class="dropdown-menu">
                 
                  <li><a class="nav-link" href="{{route('manager.reportList')}}">Profit Information</a></li>
                </ul>
              </li>

               

                 
        
            <div class="mt-4 mb-4 p-3 hide-sidebar-mini">
              <a href="/logout" class="btn btn-primary btn-lg btn-block btn-icon-split">
                <i class="fas fa-rocket"></i> Logout
              </a>
            </div>
        </aside>
      </div>


    @yield('index-content')


          

   <!-- Budget vs sales-->
         <footer class="main-footer">
        <div class="footer-left">
          Copyright &copy; 2019 <div class="bullet"></div> Design By <a href="https://romynul.com/">WRJ</a>
        </div>
        <div class="footer-right">
          2.3.0
        </div>
      </footer>
  <!-- General JS Scripts -->
  <script src="https://code.jquery.com/jquery-3.3.1.min.js" integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8=" crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.nicescroll/3.7.6/jquery.nicescroll.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.24.0/moment.min.js"></script>
  <script src="{{ url('/jsscript/stisla.js') }}"></script>

  <!-- JS Libraies -->
  <script src="../node_modules/jquery-sparkline/jquery.sparkline.min.js"></script>
  <script src="../node_modules/chart.js/dist/Chart.min.js"></script>
  <script src="../node_modules/owl.carousel/dist/owl.carousel.min.js"></script>
  <script src="../node_modules/summernote/dist/summernote-bs4.js"></script>
  <script src="../node_modules/chocolat/dist/js/jquery.chocolat.min.js"></script>

  <!-- Template JS File -->
  <script src="{{ url('/jsscript/scripts.js') }}"></script>
  <script src="{{ url('/jsscript/custom.js') }}"></script>

  <!-- Page Specific JS File -->
  <script src="jsscript/page/index.js"></script>
</body>
</html>