<!DOCTYPE html>
<html lang="en"> 
<head>
    <title>Past Paper UK Admin panel</title>
    
    <!-- Meta -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <meta name="description" content="Portal - Bootstrap 5 Admin Dashboard Template For Developers">
    <meta name="author" content="Xiaoying Riley at 3rd Wave Media">    
    <link rel="shortcut icon" href="favicon.ico"> 
    
    <!-- FontAwesome JS-->
    <script defer src="{{ asset('backend') }}/assets/plugins/fontawesome/js/all.min.js"></script>
    
    <!-- App CSS -->  
    <link rel="stylesheet" href="https://cdn.datatables.net/1.13.6/css/jquery.dataTables.min.css">
    <link rel="stylesheet" href="https://cdn.datatables.net/rowgroup/1.4.0/css/rowGroup.dataTables.min.css">
    <script src="https://code.jquery.com/jquery-3.7.0.js"></script>
    <script src="https://cdn.datatables.net/1.13.6/js/jquery.dataTables.min.js"></script>
    <script src="https://cdn.datatables.net/rowgroup/1.4.0/js/dataTables.rowGroup.min.js"></script>
    <link id="theme-style" rel="stylesheet" href="{{ asset('backend') }}/assets/css/portal.css">

</head> 

<body class="app">  
    @include('sweetalert::alert')
 	
   @include('backend.include.header')
   @yield('content')
 
    <!-- Javascript -->          
    <script src="{{ asset('backend') }}/assets/plugins/popper.min.js"></script>
    <script src="{{ asset('backend') }}/assets/plugins/bootstrap/js/bootstrap.min.js"></script>  

    <!-- Charts JS -->
    <script src="{{ asset('backend') }}/assets/plugins/chart.js/chart.min.js"></script> 
    <script src="{{ asset('backend') }}/assets/js/index-charts.js"></script> 
    
    <!-- Page Specific JS -->
    <script src="{{ asset('backend') }}/assets/js/app.js"></script> 
    <script>
        new DataTable('#example', {
            order: [[2, 'asc']],
            rowGroup: {
                dataSrc: 2
            }
        });
</script>

</body>
</html> 

