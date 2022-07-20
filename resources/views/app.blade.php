<!DOCTYPE html>
<html lang="en">
    <head>
        @include('layouts.includes.header')
        @yield('style')
    </head>
<body>
     @include('layouts.includes.side_bar')
    <div class="wrapper d-flex flex-column min-vh-100 bg-light">
        <header class="header header-sticky ">
         @include('layouts.includes.navbar')
        </header>
            @yield('content')
    </div>
     @include('layouts.includes.footer')
     <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.js"></script>
     <!-- CoreUI and necessary plugins-->
    <script src="vendors/@coreui/coreui/js/coreui.bundle.min.js"></script>
    <script src="vendors/simplebar/js/simplebar.min.js"></script>
  <!-- Plugins and scripts required by this view-->
    <script src="vendors/chart.js/js/chart.min.js"></script>
    <script src="vendors/@coreui/chartjs/js/coreui-chartjs.js"></script>
    <script src="vendors/@coreui/utils/js/coreui-utils.js"></script>
     <script src="https://cdn.datatables.net/1.10.16/js/jquery.dataTables.min.js"></script>
     <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"></script>
     <script src="https://cdn.datatables.net/1.10.19/js/dataTables.bootstrap4.min.js"></script>
    <script src="js/main.js"></script>
    <script>
    </script>

</body>
</html>
