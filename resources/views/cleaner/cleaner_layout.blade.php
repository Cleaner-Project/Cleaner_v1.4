<!DOCTYPE html>
<html lang="en">

<head> 
<title>Cleaner-Account</title>
 @include('admin/dashboard/_head')
</head>

<body>

        <!-- NOTICE: You can use the _analytics.html partial to include production code specific code & trackers -->
        
@include('admin/dashboard/_nav')


    
        <main class="content">
        @include('cleaner/cleanerpage/c_topbar')

        @include('cleaner/cleanerpage/c_sidenav')

        @include('cleaner/new-booking')   
        @include('admin/dashboard/_footer')
        </main>
@include('admin/dashboard/_scripts')
    
</body>

</html>