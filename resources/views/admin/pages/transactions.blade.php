
<!DOCTYPE html>
<html lang="en">

<head> 
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<!-- Primary Meta Tags -->
<title>Volt Free Bootstrap Dashboard - Transactions</title>
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
<meta name="title" content="Volt Free Bootstrap Dashboard - Transactions">
<meta name="author" content="Themesberg">
<meta name="description" content="Volt Pro is a Premium Bootstrap 5 Admin Dashboard featuring over 800 components, 10+ plugins and 20 example pages using Vanilla JS.">
<meta name="keywords" content="bootstrap 5, bootstrap, bootstrap 5 admin dashboard, bootstrap 5 dashboard, bootstrap 5 charts, bootstrap 5 calendar, bootstrap 5 datepicker, bootstrap 5 tables, bootstrap 5 datatable, vanilla js datatable, themesberg, themesberg dashboard, themesberg admin dashboard" />
<link rel="canonical" href="https://themesberg.com/product/admin-dashboard/volt-premium-bootstrap-5-dashboard">

<!-- Open Graph / Facebook -->
<meta property="og:type" content="website">
<meta property="og:url" content="https://demo.themesberg.com/volt-pro">
<meta property="og:title" content="Volt Free Bootstrap Dashboard - Transactions">
<meta property="og:description" content="Volt Pro is a Premium Bootstrap 5 Admin Dashboard featuring over 800 components, 10+ plugins and 20 example pages using Vanilla JS.">
<meta property="og:image" content="https://themesberg.s3.us-east-2.amazonaws.com/public/products/volt-pro-bootstrap-5-dashboard/volt-pro-preview.jpg">

<!-- Twitter -->
<meta property="twitter:card" content="summary_large_image">
<meta property="twitter:url" content="https://demo.themesberg.com/volt-pro">
<meta property="twitter:title" content="Volt Free Bootstrap Dashboard - Transactions">
<meta property="twitter:description" content="Volt Pro is a Premium Bootstrap 5 Admin Dashboard featuring over 800 components, 10+ plugins and 20 example pages using Vanilla JS.">
<meta property="twitter:image" content="https://themesberg.s3.us-east-2.amazonaws.com/public/products/volt-pro-bootstrap-5-dashboard/volt-pro-preview.jpg">

<!-- Favicon -->
<link rel="apple-touch-icon" sizes="120x120" href="../assets/img/favicon/apple-touch-icon.png">
<link rel="icon" type="image/png" sizes="32x32" href="../assets/img/favicon/favicon-32x32.png">
<link rel="icon" type="image/png" sizes="16x16" href="../assets/img/favicon/favicon-16x16.png">
<link rel="manifest" href="../assets/img/favicon/site.webmanifest">
<link rel="mask-icon" href="../assets/img/favicon/safari-pinned-tab.svg" color="#ffffff">
<meta name="msapplication-TileColor" content="#ffffff">
<meta name="theme-color" content="#ffffff">

<!-- Fontawesome -->
<link type="text/css" href="../vendor/@fortawesome/fontawesome-free/css/all.min.css" rel="stylesheet">

<!-- Sweet Alert -->
<link type="text/css" href="../vendor/sweetalert2/dist/sweetalert2.min.css" rel="stylesheet">

<!-- Notyf -->
<link type="text/css" href="../vendor/notyf/notyf.min.css" rel="stylesheet">

<!-- Volt CSS -->
<link type="text/css" href="../css/volt.css" rel="stylesheet">

<!-- NOTICE: You can use the _analytics.html partial to include production code specific code & trackers -->

</head>

<body>

        <!-- NOTICE: You can use the _analytics.html partial to include production code specific code & trackers -->
        

        <nav class="navbar navbar-dark navbar-theme-primary px-4 col-12 d-md-none">
    <a class="navbar-brand me-lg-5" href="../index.html">
        <img class="navbar-brand-dark" src="../assets/img/brand/light.svg" alt="Volt logo" /> <img class="navbar-brand-light" src="../assets/img/brand/dark.svg" alt="Volt logo" />
    </a>
    <div class="d-flex align-items-center">
        <button class="navbar-toggler d-md-none collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#sidebarMenu" aria-controls="sidebarMenu" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
    </div>
</nav>

        <nav id="sidebarMenu" class="sidebar d-md-block bg-dark text-white collapse" data-simplebar>
  <div class="sidebar-inner px-4 pt-3">
    <div class="user-card d-flex d-md-none align-items-center justify-content-between justify-content-md-center pb-4">
      <div class="d-flex align-items-center">
        <div class="user-avatar lg-avatar me-4">
          <img src="../assets/img/team/profile-picture-3.jpg" class="card-img-top rounded-circle border-white"
            alt="Bonnie Green">
        </div>
        <div class="d-block">
          <h2 class="h6">Hi, Jane</h2>
          <a href="../pages/examples/sign-in.html" class="btn btn-secondary text-dark btn-xs"><span
              class="me-2"><span class="fas fa-sign-out-alt"></span></span>Sign Out</a>
        </div>
      </div>
      <div class="collapse-close d-md-none">
        <a href="#sidebarMenu" class="fas fa-times" data-bs-toggle="collapse" data-bs-target="#sidebarMenu"
          aria-controls="sidebarMenu" aria-expanded="true" aria-label="Toggle navigation"></a>
      </div>
    </div>
    <ul class="nav flex-column pt-3 pt-md-0">
      <li class="nav-item">
        <a href="../index.html" class="nav-link d-flex align-items-center">
          <span class="sidebar-icon">
            <img src="../assets/img/brand/light.svg" height="20" width="20" alt="Volt Logo">
          </span>
          <span class="mt-1 ms-1 sidebar-text">Volt Overview</span>
        </a>
      </li>
      <li class="nav-item ">
        <a href="../pages/dashboard/dashboard.html" class="nav-link">
          <span class="sidebar-icon"><span class="fas fa-chart-pie"></span></span>
          <span class="sidebar-text">Dashboard</span>
        </a>
      </li>
      <li class="nav-item">
        <a href="https://demo.themesberg.com/volt-pro/pages/kanban.html" target="_blank" class="nav-link d-flex justify-content-between">
          <span>
            <span class="sidebar-icon"><span class="fas fa-th"></span></span>
            <span class="sidebar-text">Kanban </span>
          </span>
          <span>
            <span class="badge badge-md bg-secondary ms-1 text-dark">Pro</span>
          </span>
        </a>
      </li>
      <li class="nav-item  active ">
        <a href="../pages/transactions.html" class="nav-link">
          <span class="sidebar-icon"><span class="fas fa-hand-holding-usd"></span></span>
          <span class="sidebar-text">Transactions</span>
        </a>
      </li>
      <li class="nav-item ">
        <a href="../pages/settings.html" class="nav-link">
          <span class="sidebar-icon"><span class="fas fa-cog"></span></span>
          <span class="sidebar-text">Settings</span>
        </a>
      </li>
      <li class="nav-item">
        <span
          class="nav-link  collapsed  d-flex justify-content-between align-items-center"
          data-bs-toggle="collapse" data-bs-target="#submenu-app">
          <span>
            <span class="sidebar-icon"><span class="fas fa-table"></span></span>
            <span class="sidebar-text">Tables</span>
          </span>
          <span class="link-arrow"><span class="fas fa-chevron-right"></span></span>
        </span>
        <div class="multi-level collapse "
          role="list" id="submenu-app" aria-expanded="false">
          <ul class="flex-column nav">
            <li class="nav-item ">
              <a class="nav-link" href="../pages/tables/bootstrap-tables.html">
                <span class="sidebar-text">Bootstrap Tables</span>
              </a>
            </li>
          </ul>
        </div>
      </li>
      <li class="nav-item">
        <span
          class="nav-link  collapsed  d-flex justify-content-between align-items-center"
          data-bs-toggle="collapse" data-bs-target="#submenu-pages">
          <span>
            <span class="sidebar-icon"><span class="far fa-file-alt"></span></span>
            <span class="sidebar-text">Page examples</span>
          </span>
          <span class="link-arrow"><span class="fas fa-chevron-right"></span></span>
        </span>
        <div class="multi-level collapse " role="list"
          id="submenu-pages" aria-expanded="false">
          <ul class="flex-column nav">
            <li class="nav-item">
              <a class="nav-link" href="../pages/examples/sign-in.html">
                <span class="sidebar-text">Sign In</span>
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="../pages/examples/sign-up.html">
                <span class="sidebar-text">Sign Up</span>
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="../pages/examples/forgot-password.html">
                <span class="sidebar-text">Forgot password</span>
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="../pages/examples/reset-password.html">
                <span class="sidebar-text">Reset password</span>
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="../pages/examples/lock.html">
                <span class="sidebar-text">Lock</span>
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="../pages/examples/404.html">
                <span class="sidebar-text">404 Not Found</span>
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="../pages/examples/500.html">
                <span class="sidebar-text">500 Not Found</span>
              </a>
            </li>
          </ul>
        </div>
      </li>
      <li class="nav-item">
        <span
          class="nav-link  collapsed  d-flex justify-content-between align-items-center"
          data-bs-toggle="collapse" data-bs-target="#submenu-components">
          <span>
            <span class="sidebar-icon"><span class="fas fa-box-open"></span></span>
            <span class="sidebar-text">Components</span>
          </span>
          <span class="link-arrow"><span class="fas fa-chevron-right"></span></span>
        </span>
        <div class="multi-level collapse " role="list"
          id="submenu-components" aria-expanded="false">
          <ul class="flex-column nav">
            <li class="nav-item">
              <a class="nav-link" target="_blank"
                href="https://themesberg.com/docs/volt-bootstrap-5-dashboard/components/accordions/">
                <span class="sidebar-text">All Components</span>
              </a>
            </li>
            <li class="nav-item ">
              <a class="nav-link" href="../pages/components/buttons.html">
                <span class="sidebar-text">Buttons</span>
              </a>
            </li>
            <li class="nav-item ">
              <a class="nav-link" href="../pages/components/notifications.html">
                <span class="sidebar-text">Notifications</span>
              </a>
            </li>
            <li class="nav-item ">
              <a class="nav-link" href="../pages/components/forms.html">
                <span class="sidebar-text">Forms</span>
              </a>
            </li>
            <li class="nav-item ">
              <a class="nav-link" href="../pages/components/modals.html">
                <span class="sidebar-text">Modals</span>
              </a>
            </li>
            <li class="nav-item ">
              <a class="nav-link" href="../pages/components/typography.html">
                <span class="sidebar-text">Typography</span>
              </a>
            </li>
          </ul>
        </div>
      </li>
      <li role="separator" class="dropdown-divider mt-4 mb-3 border-black"></li>
      <li class="nav-item">
        <a href="https://themesberg.com/docs/volt-bootstrap-5-dashboard/getting-started/quick-start/" target="_blank"
          class="nav-link d-flex align-items-center">
          <span class="sidebar-icon"><span class="fas fa-book"></span></span>
          <span class="sidebar-text">Documentation <span
              class="badge badge-md bg-secondary ms-1 text-dark">v1.3</span></span>
        </a>
      </li>
      <li class="nav-item">
        <a href="https://themesberg.com" target="_blank" class="nav-link d-flex align-items-center">
          <span class="sidebar-icon">
            <img src="../assets/img/themesberg.svg" height="20" width="20" alt="Themesberg Logo">
          </span>
          <span class="sidebar-text">Themesberg</span>
        </a>
      </li>
      <li class="nav-item">
        <a href="../../pages/upgrade-to-pro.html"
          class="btn btn-secondary d-flex align-items-center justify-content-center btn-upgrade-pro">
          <span class="sidebar-icon"><span class="fas fa-rocket me-2"></span></span> <span>Upgrade to Pro</span>
        </a>
      </li>
    </ul>
  </div>
</nav>
    
        <main class="content">

            <nav class="navbar navbar-top navbar-expand navbar-dashboard navbar-dark ps-0 pe-2 pb-0">
    <div class="container-fluid px-0">
      <div class="d-flex justify-content-between w-100" id="navbarSupportedContent">
        <div class="d-flex align-items-center">
          <!-- Search form -->
          <form class="navbar-search form-inline" id="navbar-search-main">
            <div class="input-group input-group-merge search-bar">
                <span class="input-group-text" id="topbar-addon"><span class="fas fa-search"></span></span>
                <input type="text" class="form-control" id="topbarInputIconLeft" placeholder="Search" aria-label="Search" aria-describedby="topbar-addon">
            </div>
          </form>
        </div>
        <!-- Navbar links -->
        <ul class="navbar-nav align-items-center">
          <li class="nav-item dropdown">
            <a class="nav-link text-dark me-lg-3 icon-notifications dropdown-toggle" data-unread-notifications="true" href="#" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
              <span class="icon icon-sm">
                <span class="fas fa-bell bell-shake"></span>
                <span class="icon-badge rounded-circle unread-notifications"></span>
              </span>
            </a>
            <div class="dropdown-menu dashboard-dropdown dropdown-menu-lg dropdown-menu-center mt-2 py-0">
              <div class="list-group list-group-flush">
                <a href="#" class="text-center text-primary fw-bold border-bottom border-light py-3">Notifications</a>
                <a href="#" class="list-group-item list-group-item-action border-bottom border-light">
                  <div class="row align-items-center">
                      <div class="col-auto">
                        <!-- Avatar -->
                        <img alt="Image placeholder" src="../assets/img/team/profile-picture-1.jpg" class="user-avatar lg-avatar rounded-circle">
                      </div>
                      <div class="col ps-0 ms-2">
                        <div class="d-flex justify-content-between align-items-center">
                            <div>
                              <h4 class="h6 mb-0 text-small">Jose Leos</h4>
                            </div>
                            <div class="text-end">
                              <small class="text-danger">a few moments ago</small>
                            </div>
                        </div>
                        <p class="font-small mt-1 mb-0">Added you to an event "Project stand-up" tomorrow at 12:30 AM.</p>
                      </div>
                  </div>
                </a>
                <a href="#" class="list-group-item list-group-item-action border-bottom border-light">
                  <div class="row align-items-center">
                      <div class="col-auto">
                        <!-- Avatar -->
                        <img alt="Image placeholder" src="../assets/img/team/profile-picture-2.jpg" class="user-avatar lg-avatar rounded-circle">
                      </div>
                      <div class="col ps-0 ms-2">
                        <div class="d-flex justify-content-between align-items-center">
                            <div>
                              <h4 class="h6 mb-0 text-small">Neil Sims</h4>
                            </div>
                            <div class="text-end">
                              <small class="text-danger">2 hrs ago</small>
                            </div>
                        </div>
                        <p class="font-small mt-1 mb-0">You've been assigned a task for "Awesome new project".</p>
                      </div>
                  </div>
                </a>
                <a href="#" class="list-group-item list-group-item-action border-bottom border-light">
                  <div class="row align-items-center">
                      <div class="col-auto">
                        <!-- Avatar -->
                        <img alt="Image placeholder" src="../assets/img/team/profile-picture-3.jpg" class="user-avatar lg-avatar rounded-circle">
                      </div>
                      <div class="col ps-0 m-2">
                        <div class="d-flex justify-content-between align-items-center">
                            <div>
                              <h4 class="h6 mb-0 text-small">Roberta Casas</h4>
                            </div>
                            <div class="text-end">
                              <small>5 hrs ago</small>
                            </div>
                        </div>
                        <p class="font-small mt-1 mb-0">Tagged you in a document called "First quarter financial plans",</p>
                      </div>
                  </div>
                </a>
                <a href="#" class="list-group-item list-group-item-action border-bottom border-light">
                  <div class="row align-items-center">
                      <div class="col-auto">
                        <!-- Avatar -->
                        <img alt="Image placeholder" src="../assets/img/team/profile-picture-4.jpg" class="user-avatar lg-avatar rounded-circle">
                      </div>
                      <div class="col ps-0 ms-2">
                        <div class="d-flex justify-content-between align-items-center">
                            <div>
                              <h4 class="h6 mb-0 text-small">Joseph Garth</h4>
                            </div>
                            <div class="text-end">
                              <small>1 d ago</small>
                            </div>
                        </div>
                        <p class="font-small mt-1 mb-0">New message: "Hey, what's up? All set for the presentation?"</p>
                      </div>
                  </div>
                </a>
                <a href="#" class="list-group-item list-group-item-action border-bottom border-light">
                  <div class="row align-items-center">
                      <div class="col-auto">
                        <!-- Avatar -->
                        <img alt="Image placeholder" src="../assets/img/team/profile-picture-5.jpg" class="user-avatar lg-avatar rounded-circle">
                      </div>
                      <div class="col ps-0 ms-2">
                        <div class="d-flex justify-content-between align-items-center">
                            <div>
                              <h4 class="h6 mb-0 text-small">Bonnie Green</h4>
                            </div>
                            <div class="text-end">
                              <small>2 hrs ago</small>
                            </div>
                        </div>
                        <p class="font-small mt-1 mb-0">New message: "We need to improve the UI/UX for the landing page."</p>
                      </div>
                  </div>
                </a>
                <a href="#" class="dropdown-item text-center text-primary fw-bold rounded-bottom py-3">View all</a>
              </div>
            </div>
          </li>
          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle pt-1 px-0" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
              <div class="media d-flex align-items-center">
                <img class="user-avatar md-avatar rounded-circle" alt="Image placeholder" src="../assets/img/team/profile-picture-3.jpg">
                <div class="media-body ms-2 text-dark align-items-center d-none d-lg-block">
                  <span class="mb-0 font-small fw-bold">Bonnie Green</span>
                </div>
              </div>
            </a>
            <div class="dropdown-menu dashboard-dropdown dropdown-menu-end mt-2 py-0">
                <a class="dropdown-item rounded-top fw-bold" href="#"><span class="far fa-user-circle"></span>My Profile</a>
                <a class="dropdown-item fw-bold" href="#"><span class="fas fa-cog"></span>Settings</a>
                <a class="dropdown-item fw-bold" href="#"><span class="fas fa-envelope-open-text"></span>Messages</a>
                <a class="dropdown-item fw-bold" href="#"><span class="fas fa-user-shield"></span>Support</a>
                <div role="separator" class="dropdown-divider my-0"></div>
                <a class="dropdown-item rounded-bottom fw-bold" href="#"><span class="fas fa-sign-out-alt text-danger"></span>Logout</a>
            </div>
          </li>
        </ul>
      </div>
    </div>
</nav>

            <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center py-4">
                <div class="d-block mb-4 mb-md-0">
                    <nav aria-label="breadcrumb" class="d-none d-md-inline-block">
                        <ol class="breadcrumb breadcrumb-dark breadcrumb-transparent">
                          <li class="breadcrumb-item"><a href="#"><span class="fas fa-home"></span></a></li>
                          <li class="breadcrumb-item"><a href="#">Volt</a></li>
                          <li class="breadcrumb-item active" aria-current="page">Transactions</li>
                        </ol>
                    </nav>
                    <h2 class="h4">All Orders</h2>
                    <p class="mb-0">Your web analytics dashboard template.</p>
                </div>
                <div class="btn-toolbar mb-2 mb-md-0">
                    <div class="btn-group">
                        <button type="button" class="btn btn-sm btn-outline-primary">Share</button>
                        <button type="button" class="btn btn-sm btn-outline-primary">Export</button>
                    </div>
                </div>
            </div>
            <div class="table-settings mb-4">
                <div class="row align-items-center justify-content-between">
                    <div class="col col-md-6 col-lg-3 col-xl-4">
                        <div class="input-group">
                            <span class="input-group-text" id="basic-addon2"><span class="fas fa-search"></span></span>
                            <input type="text" class="form-control" id="exampleInputIconLeft" placeholder="Search" aria-label="Search" aria-describedby="basic-addon2">
                        </div>
                    </div>
                    <div class="col-4 col-md-2 col-xl-1 ps-md-0 text-right">
                        <div class="btn-group">
                            <button class="btn btn-link text-dark dropdown-toggle dropdown-toggle-split m-0 p-1" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <span class="icon icon-sm icon-gray pt-1">
                                    <span class="fas fa-cog"></span>
                                </span>
                                <span class="sr-only">Toggle Dropdown</span>
                            </button>
                            <div class="dropdown-menu dropdown-menu-xs dropdown-menu-end pb-0">
                                <span class="small ps-3 fw-bold text-dark">Show</span>
                                <a class="dropdown-item d-flex fw-bold" href="#">10 <span class="icon icon-small ms-auto"><span class="fas fa-check"></span></span></a>
                                <a class="dropdown-item fw-bold" href="#">20</a>
                                <a class="dropdown-item fw-bold" href="#">30</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="card card-body shadow-sm table-wrapper table-responsive">
                <table class="table table-hover">
                    <thead>
                        <tr>
                            <th>#</th>
                            <th>Bill For</th>						
                            <th>Issue Date</th>
                            <th>Due Date</th>
                            <th>Total</th>
                            <th>Status</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        <!-- Item -->
                        <tr>
                            <td>
                                <a href="#" class="fw-bold">
                                    456478
                                </a>
                            </td>
                            <td>
                                <span class="fw-normal">Platinum Subscription Plan</span>
                            </td>
                            <td><span class="fw-normal">1 May 2020</span></td>                        
                            <td><span class="fw-normal">1 Jun 2020</span></td>
                            <td><span class="fw-bold">$799,00</span></td>
                            <td><span class="fw-bold text-warning">Due</span></td>
                            <td>
                                <div class="btn-group">
                                    <button class="btn btn-link text-dark dropdown-toggle dropdown-toggle-split m-0 p-0" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                        <span class="icon icon-sm">
                                            <span class="fas fa-ellipsis-h icon-dark"></span>
                                        </span>
                                        <span class="sr-only">Toggle Dropdown</span>
                                    </button>
                                    <div class="dropdown-menu py-0">
                                        <a class="dropdown-item rounded-top" href="#"><span class="fas fa-eye me-2"></span>View Details</a>
                                        <a class="dropdown-item" href="#"><span class="fas fa-edit me-2"></span>Edit</a>
                                        <a class="dropdown-item text-danger rounded-bottom" href="#"><span class="fas fa-trash-alt me-2"></span>Remove</a>
                                    </div>
                                </div>
                            </td>
                        </tr>
                        <!-- Item -->
                        <tr>
                            <td>
                                <a href="#" class="fw-bold">
                                    456423
                                </a>
                            </td>
                            <td>
                                <span class="fw-normal">Platinum Subscription Plan</span>
                            </td>
                            <td><span class="fw-normal">1 Apr 2020</span></td>                        
                            <td><span class="fw-normal">1 May 2020</span></td>
                            <td><span class="fw-bold">$799,00</span></td>
                            <td><span class="fw-bold text-success">Paid</span></td>
                            <td>
                                <div class="btn-group">
                                    <button class="btn btn-link text-dark dropdown-toggle dropdown-toggle-split m-0 p-0" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                        <span class="icon icon-sm">
                                            <span class="fas fa-ellipsis-h icon-dark"></span>
                                        </span>
                                        <span class="sr-only">Toggle Dropdown</span>
                                    </button>
                                    <div class="dropdown-menu py-0">
                                        <a class="dropdown-item rounded-top" href="#"><span class="fas fa-eye me-2"></span>View Details</a>
                                        <a class="dropdown-item" href="#"><span class="fas fa-edit me-2"></span>Edit</a>
                                        <a class="dropdown-item text-danger rounded-bottom" href="#"><span class="fas fa-trash-alt me-2"></span>Remove</a>
                                    </div>
                                </div>
                            </td>
                        </tr> 
                        <!-- Item -->
                        <tr>
                            <td>
                                <a href="#" class="fw-bold">
                                    456420
                                </a>
                            </td>
                            <td>
                                <span class="fw-normal">Platinum Subscription Plan</span>
                            </td>
                            <td><span class="fw-normal">1 Mar 2020</span></td>                        
                            <td><span class="fw-normal">1 Apr 2020</span></td>
                            <td><span class="fw-bold">$799,00</span></td>
                            <td><span class="fw-bold text-success">Paid</span></td>
                            <td>
                                <div class="btn-group">
                                    <button class="btn btn-link text-dark dropdown-toggle dropdown-toggle-split m-0 p-0" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                        <span class="icon icon-sm">
                                            <span class="fas fa-ellipsis-h icon-dark"></span>
                                        </span>
                                        <span class="sr-only">Toggle Dropdown</span>
                                    </button>
                                    <div class="dropdown-menu py-0">
                                        <a class="dropdown-item rounded-top" href="#"><span class="fas fa-eye me-2"></span>View Details</a>
                                        <a class="dropdown-item" href="#"><span class="fas fa-edit me-2"></span>Edit</a>
                                        <a class="dropdown-item text-danger rounded-bottom" href="#"><span class="fas fa-trash-alt me-2"></span>Remove</a>
                                    </div>
                                </div>
                            </td>
                        </tr> 
                        <!-- Item -->
                        <tr>
                            <td>
                                <a href="#" class="fw-bold">
                                    456421
                                </a>
                            </td>
                            <td>
                                <span class="fw-normal">Platinum Subscription Plan</span>
                            </td>
                            <td><span class="fw-normal">1 Feb 2020</span></td>                        
                            <td><span class="fw-normal">1 Mar 2020</span></td>
                            <td><span class="fw-bold">$799,00</span></td>
                            <td><span class="fw-bold text-success">Paid</span></td>
                            <td>
                                <div class="btn-group">
                                    <button class="btn btn-link text-dark dropdown-toggle dropdown-toggle-split m-0 p-0" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                        <span class="icon icon-sm">
                                            <span class="fas fa-ellipsis-h icon-dark"></span>
                                        </span>
                                        <span class="sr-only">Toggle Dropdown</span>
                                    </button>
                                    <div class="dropdown-menu py-0">
                                        <a class="dropdown-item rounded-top" href="#"><span class="fas fa-eye me-2"></span>View Details</a>
                                        <a class="dropdown-item" href="#"><span class="fas fa-edit me-2"></span>Edit</a>
                                        <a class="dropdown-item text-danger rounded-bottom" href="#"><span class="fas fa-trash-alt me-2"></span>Remove</a>
                                    </div>
                                </div>
                            </td>
                        </tr> 
                        <!-- Item -->
                        <tr>
                            <td>
                                <a href="#" class="fw-bold">
                                    456420
                                </a>
                            </td>
                            <td>
                                <span class="fw-normal">Platinum Subscription Plan</span>
                            </td>
                            <td><span class="fw-normal">1 Jan 2020</span></td>                        
                            <td><span class="fw-normal">1 Feb 2020</span></td>
                            <td><span class="fw-bold">$799,00</span></td>
                            <td><span class="fw-bold text-success">Paid</span></td>
                            <td>
                                <div class="btn-group">
                                    <button class="btn btn-link text-dark dropdown-toggle dropdown-toggle-split m-0 p-0" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                        <span class="icon icon-sm">
                                            <span class="fas fa-ellipsis-h icon-dark"></span>
                                        </span>
                                        <span class="sr-only">Toggle Dropdown</span>
                                    </button>
                                    <div class="dropdown-menu py-0">
                                        <a class="dropdown-item rounded-top" href="#"><span class="fas fa-eye me-2"></span>View Details</a>
                                        <a class="dropdown-item" href="#"><span class="fas fa-edit me-2"></span>Edit</a>
                                        <a class="dropdown-item text-danger rounded-bottom" href="#"><span class="fas fa-trash-alt me-2"></span>Remove</a>
                                    </div>
                                </div>
                            </td>
                        </tr> 
                        <!-- Item -->
                        <tr>
                            <td>
                                <a href="#" class="fw-bold">
                                    456479
                                </a>
                            </td>
                            <td>
                                <span class="fw-normal">Platinum Subscription Plan</span>
                            </td>
                            <td><span class="fw-normal">1 Dec 2019</span></td>                        
                            <td><span class="fw-normal">1 Jan 2020</span></td>
                            <td><span class="fw-bold">$799,00</span></td>
                            <td><span class="fw-bold text-success">Paid</span></td>
                            <td>
                                <div class="btn-group">
                                    <button class="btn btn-link text-dark dropdown-toggle dropdown-toggle-split m-0 p-0" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                        <span class="icon icon-sm">
                                            <span class="fas fa-ellipsis-h icon-dark"></span>
                                        </span>
                                        <span class="sr-only">Toggle Dropdown</span>
                                    </button>
                                    <div class="dropdown-menu py-0">
                                        <a class="dropdown-item rounded-top" href="#"><span class="fas fa-eye me-2"></span>View Details</a>
                                        <a class="dropdown-item" href="#"><span class="fas fa-edit me-2"></span>Edit</a>
                                        <a class="dropdown-item text-danger rounded-bottom" href="#"><span class="fas fa-trash-alt me-2"></span>Remove</a>
                                    </div>
                                </div>
                            </td>
                        </tr> 
                        <!-- Item -->
                        <!-- Item -->
                        <tr>
                            <td>
                                <a href="#" class="fw-bold">
                                    456478
                                </a>
                            </td>
                            <td>
                                <span class="fw-normal">Platinum Subscription Plan</span>
                            </td>
                            <td><span class="fw-normal">1 Nov 2019</span></td>                        
                            <td><span class="fw-normal">1 Dec 2019</span></td>
                            <td><span class="fw-bold">$799,00</span></td>
                            <td><span class="fw-bold text-success">Paid</span></td>
                            <td>
                                <div class="btn-group">
                                    <button class="btn btn-link text-dark dropdown-toggle dropdown-toggle-split m-0 p-0" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                        <span class="icon icon-sm">
                                            <span class="fas fa-ellipsis-h icon-dark"></span>
                                        </span>
                                        <span class="sr-only">Toggle Dropdown</span>
                                    </button>
                                    <div class="dropdown-menu py-0">
                                        <a class="dropdown-item rounded-top" href="#"><span class="fas fa-eye me-2"></span>View Details</a>
                                        <a class="dropdown-item" href="#"><span class="fas fa-edit me-2"></span>Edit</a>
                                        <a class="dropdown-item text-danger rounded-bottom" href="#"><span class="fas fa-trash-alt me-2"></span>Remove</a>
                                    </div>
                                </div>
                            </td>
                        </tr> 
                        <!-- Item -->
                        <tr>
                            <td>
                                <a href="#" class="fw-bold">
                                    453673
                                </a>
                            </td>
                            <td>
                                <span class="fw-normal">Gold Subscription Plan</span>
                            </td>
                            <td><span class="fw-normal">1 Oct 2019</span></td>                        
                            <td><span class="fw-normal">1 Nov 2019</span></td>
                            <td><span class="fw-bold">$533,42</span></td>
                            <td><span class="fw-bold text-danger">Canceled</span></td>
                            <td>
                                <div class="btn-group">
                                    <button class="btn btn-link text-dark dropdown-toggle dropdown-toggle-split m-0 p-0" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                        <span class="icon icon-sm">
                                            <span class="fas fa-ellipsis-h icon-dark"></span>
                                        </span>
                                        <span class="sr-only">Toggle Dropdown</span>
                                    </button>
                                    <div class="dropdown-menu py-0">
                                        <a class="dropdown-item rounded-top" href="#"><span class="fas fa-eye me-2"></span>View Details</a>
                                        <a class="dropdown-item" href="#"><span class="fas fa-edit me-2"></span>Edit</a>
                                        <a class="dropdown-item text-danger rounded-bottom" href="#"><span class="fas fa-trash-alt me-2"></span>Remove</a>
                                    </div>
                                </div>
                            </td>
                        </tr>
                        <!-- Item -->
                        <tr>
                            <td>
                                <a href="#" class="fw-bold">
                                    456468
                                </a>
                            </td>
                            <td>
                                <span class="fw-normal">Gold Subscription Plan</span>
                            </td>
                            <td><span class="fw-normal">1 Sep 2019</span></td>                        
                            <td><span class="fw-normal">1 Oct 2019</span></td>
                            <td><span class="fw-bold">$533,42</span></td>
                            <td><span class="fw-bold text-success">Paid</span></td>
                            <td>
                                <div class="btn-group">
                                    <button class="btn btn-link text-dark dropdown-toggle dropdown-toggle-split m-0 p-0" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                        <span class="icon icon-sm">
                                            <span class="fas fa-ellipsis-h icon-dark"></span>
                                        </span>
                                        <span class="sr-only">Toggle Dropdown</span>
                                    </button>
                                    <div class="dropdown-menu py-0">
                                        <a class="dropdown-item rounded-top" href="#"><span class="fas fa-eye me-2"></span>View Details</a>
                                        <a class="dropdown-item" href="#"><span class="fas fa-edit me-2"></span>Edit</a>
                                        <a class="dropdown-item text-danger rounded-bottom" href="#"><span class="fas fa-trash-alt me-2"></span>Remove</a>
                                    </div>
                                </div>
                            </td>
                        </tr>    
                        <!-- Item -->
                        <tr>
                            <td>
                                <a href="#" class="fw-bold">
                                    456478
                                </a>
                            </td>
                            <td>
                                <span class="fw-normal">Flexible Subscription Plan</span>
                            </td>
                            <td><span class="fw-normal">1 Aug 2019</span></td>                        
                            <td><span class="fw-normal">1 Sep 2019</span></td>
                            <td><span class="fw-bold">$233,42</span></td>
                            <td><span class="fw-bold text-success">Paid</span></td>
                            <td>
                                <div class="btn-group">
                                    <button class="btn btn-link text-dark dropdown-toggle dropdown-toggle-split m-0 p-0" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                        <span class="icon icon-sm">
                                            <span class="fas fa-ellipsis-h icon-dark"></span>
                                        </span>
                                        <span class="sr-only">Toggle Dropdown</span>
                                    </button>
                                    <div class="dropdown-menu py-0">
                                        <a class="dropdown-item rounded-top" href="#"><span class="fas fa-eye me-2"></span>View Details</a>
                                        <a class="dropdown-item" href="#"><span class="fas fa-edit me-2"></span>Edit</a>
                                        <a class="dropdown-item text-danger rounded-bottom" href="#"><span class="fas fa-trash-alt me-2"></span>Remove</a>
                                    </div>
                                </div>
                            </td>
                        </tr>                                
                    </tbody>
                </table>
                <div class="card-footer px-3 border-0 d-flex align-items-center justify-content-between">
                    <nav aria-label="Page navigation example">
                        <ul class="pagination mb-0">
                            <li class="page-item">
                                <a class="page-link" href="#">Previous</a>
                            </li>
                            <li class="page-item">
                                <a class="page-link" href="#">1</a>
                            </li>
                            <li class="page-item active">
                                <a class="page-link" href="#">2</a>
                            </li>
                            <li class="page-item">
                                <a class="page-link" href="#">3</a>
                            </li>
                            <li class="page-item">
                                <a class="page-link" href="#">4</a>
                            </li>
                            <li class="page-item">
                                <a class="page-link" href="#">5</a>
                            </li>
                            <li class="page-item">
                                <a class="page-link" href="#">Next</a>
                            </li>
                        </ul>
                    </nav>
                    <div class="fw-bold small d-none d-lg-block">Showing <b>5</b> out of <b>25</b> entries</div>
                </div>
            </div>
            <div class="theme-settings card pt-2 collapse" id="theme-settings">
    <div class="card-body pt-4">
        <button type="button" class="btn-close theme-settings-close" aria-label="Close" data-bs-toggle="collapse"
            href="#theme-settings" role="button" aria-expanded="false" aria-controls="theme-settings"></button>
        <div class="d-flex justify-content-between align-items-center mb-3">
            <p class="m-0 mb-1 me-4 fs-7">Open source <span role="img" aria-label="gratitude">💛</span></p>
            <a class="github-button" href="https://github.com/themesberg/volt-bootstrap-5-dashboard"
                data-color-scheme="no-preference: dark; light: light; dark: light;" data-icon="octicon-star"
                data-size="large" data-show-count="true"
                aria-label="Star themesberg/volt-bootstrap-5-dashboard on GitHub">Star</a>
        </div>
        <a href="https://themesberg.com/product/admin-dashboard/volt-bootstrap-5-dashboard" target="_blank"
            class="btn btn-primary mb-3 w-100">Download <i class="fas fa-download ms-2"></i></a>
        <p class="fs-7 text-gray-700 text-center">Available in the following technologies:</p>
        <div class="d-flex justify-content-center">
            <a class="me-3" href="https://themesberg.com/product/admin-dashboard/volt-bootstrap-5-dashboard"
                target="_blank">
                <img src="../../assets/img/technologies/bootstrap-5-logo.svg" class="image image-xs">
            </a>
            <a href="https://demo.themesberg.com/volt-react-dashboard/#/" target="_blank">
                <img src="../../assets/img/technologies/react-logo.svg" class="image image-xs">
            </a>
        </div>
    </div>
</div>

<div class="card theme-settings theme-settings-expand" id="theme-settings-expand">
    <div class="card-body p-3 py-2">
        <span class="fw-bold h6">
            <i class="fas fa-cogs me-1 fs-7"></i> Settings
        </span>
    </div>
</div>

<footer class="footer section py-5">
    <div class="row">
        <div class="col-12 col-lg-6 mb-4 mb-lg-0">
            <p class="mb-0 text-center text-xl-left">Copyright © 2019-<span class="current-year"></span> <a
                    class="text-primary fw-normal" href="https://themesberg.com" target="_blank">Themesberg</a></p>
        </div>

        <div class="col-12 col-lg-6">
            <!-- List -->
            <ul class="list-inline list-group-flush list-group-borderless text-center text-xl-right mb-0">
                <li class="list-inline-item px-0 px-sm-2">
                    <a href="https://themesberg.com/about">About</a>
                </li>
                <li class="list-inline-item px-0 px-sm-2">
                    <a href="https://themesberg.com/themes">Themes</a>
                </li>
                <li class="list-inline-item px-0 px-sm-2">
                    <a href="https://themesberg.com/blog">Blog</a>
                </li>
                <li class="list-inline-item px-0 px-sm-2">
                    <a href="https://themesberg.com/contact">Contact</a>
                </li>
            </ul>
        </div>
    </div>
</footer>
        </main>

    <!-- Core -->
<script src="../vendor/@popperjs/core/dist/umd/popper.min.js"></script>
<script src="../vendor/bootstrap/dist/js/bootstrap.min.js"></script>

<!-- Vendor JS -->
<script src="../vendor/onscreen/dist/on-screen.umd.min.js"></script>

<!-- Slider -->
<script src="../vendor/nouislider/distribute/nouislider.min.js"></script>

<!-- Smooth scroll -->
<script src="../vendor/smooth-scroll/dist/smooth-scroll.polyfills.min.js"></script>

<!-- Charts -->
<script src="../vendor/chartist/dist/chartist.min.js"></script>
<script src="../vendor/chartist-plugin-tooltips/dist/chartist-plugin-tooltip.min.js"></script>

<!-- Datepicker -->
<script src="../vendor/vanillajs-datepicker/dist/js/datepicker.min.js"></script>

<!-- Sweet Alerts 2 -->
<script src="../vendor/sweetalert2/dist/sweetalert2.all.min.js"></script>

<!-- Moment JS -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.27.0/moment.min.js"></script>

<!-- Vanilla JS Datepicker -->
<script src="../vendor/vanillajs-datepicker/dist/js/datepicker.min.js"></script>

<!-- Notyf -->
<script src="../vendor/notyf/notyf.min.js"></script>

<!-- Simplebar -->
<script src="../vendor/simplebar/dist/simplebar.min.js"></script>

<!-- Github buttons -->
<script async defer src="https://buttons.github.io/buttons.js"></script>

<!-- Volt JS -->
<script src="../assets/js/volt.js"></script>

    
</body>

</html>
