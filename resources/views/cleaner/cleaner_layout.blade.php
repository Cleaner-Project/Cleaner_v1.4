<!DOCTYPE html>
<html lang="en">

<head> 
<title>Cleaner-Account</title>
 @include('cleaner/cleanerpage/c_head')

</head>

<body>

@include('cleaner/cleanerpage/c_nav')

    
<main class="content">
 @include('cleaner/cleanerpage/c_topbar')

       @yield('content')   
      
 </main>
 @include('cleaner/cleanerpage/c_scripts')
    
</body>

</html>