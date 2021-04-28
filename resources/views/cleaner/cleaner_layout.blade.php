<!DOCTYPE html>
<html lang="en">

<head>
    <title>Cleaner</title>

    <!-- Meta -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, minimal-ui">
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="description" content="" />
    <meta name="keywords" content="">
    <meta name="author" content="Phoenixcoded" />
    <!-- vendor css -->
    <link rel="stylesheet" href="{{asset('assets1/css/style.css')}}">
    
</head>
<body class="">
	<!-- [ Pre-loader ] start -->
	<div class="loader-bg">
		<div class="loader-track">
			<div class="loader-fill"></div>
		</div>
	</div>
	<!-- [ Pre-loader ] End -->

@include('cleaner.cleanerpage.sidebar')

@include('cleaner.cleanerpage.navbar')
	
	

<!-- [ Main Content ] start -->
<div class="pcoded-main-container">
    <div class="pcoded-content">
        @yield('.content')
        <!-- [ breadcrumb ] start -->
        <div class="page-header">
            <div class="page-block">
                <div class="row align-items-center">
                    <div class="col-md-12">
                        <div class="page-header-title">
                            <h5 class="m-b-10">Dashboard Cleaner</h5>
                        </div>
                       
                    </div>
                </div>
            </div>
        </div>
        <!-- [ breadcrumb ] end -->
       
            

            
    </div>
</div>

<!-- Required Js -->
<script src="{{asset('assets1/js/vendor-all.min.js')}}"></script>
<script src="{{asset('assets1/js/plugins/bootstrap.min.js')}}"></script>
<script src="{{asset('assets1/js/ripple.js')}}"></script>
<script src="{{asset('assets1/js/pcoded.min.js')}}"></script>
<!-- Apex Chart -->
<script src="assets1/js/plugins/apexcharts.min.js"></script>

<!-- custom-chart js -->
<script src="assets1/js/pages/dashboard-main.js"></script>
</body>

</html>
