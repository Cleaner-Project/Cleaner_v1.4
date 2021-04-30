<
<!DOCTYPE html>
<html lang="en">

<head> 
<title>Admin-Cleaner</title>       
 @include('admin/dashboard/_head')
</head>

<body>

        <!-- NOTICE: You can use the _analytics.html partial to include production code specific code & trackers -->
        
@include('admin/dashboard/_nav')

@include('admin/dashboard/_sidenav')
    
        <main class="content">
        @include('admin/dashboard/_topbar')

        @include('admin/pages/dash_home')
           
        @include('admin/dashboard/_footer')
        </main>
@include('admin/dashboard/_scripts')
    
</body>

</html>
