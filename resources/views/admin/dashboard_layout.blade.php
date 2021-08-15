<
<!DOCTYPE html>
<html lang="en">

<head> 
<title>Admin-Cleaner</title>       
 @include('admin/dashboard/_head')
</head>

<body>

        
@include('admin/dashboard/_nav')

@include('admin/dashboard/_sidenav')
    
        <main class="content">
        @include('admin/dashboard/_topbar')

       @yield('content')
           
        @include('admin/dashboard/_footer')
        </main>
@include('admin/dashboard/_scripts')
    
</body>

</html>
