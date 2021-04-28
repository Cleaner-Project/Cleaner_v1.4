
<!DOCTYPE html>
<html lang="en">

<head> 
  <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<!-- Primary Meta Tags -->
<title>Volt Free Bootstrap Dashboard - Modals</title>
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
<meta name="title" content="Volt Free Bootstrap Dashboard - Modals">
<meta name="author" content="Themesberg">
<meta name="description" content="Volt Pro is a Premium Bootstrap 5 Admin Dashboard featuring over 800 components, 10+ plugins and 20 example pages using Vanilla JS.">
<meta name="keywords" content="bootstrap 5, bootstrap, bootstrap 5 admin dashboard, bootstrap 5 dashboard, bootstrap 5 charts, bootstrap 5 calendar, bootstrap 5 datepicker, bootstrap 5 tables, bootstrap 5 datatable, vanilla js datatable, themesberg, themesberg dashboard, themesberg admin dashboard" />
<link rel="canonical" href="https://themesberg.com/product/admin-dashboard/volt-premium-bootstrap-5-dashboard">

<!-- Open Graph / Facebook -->
<meta property="og:type" content="website">
<meta property="og:url" content="https://demo.themesberg.com/volt-pro">
<meta property="og:title" content="Volt Free Bootstrap Dashboard - Modals">
<meta property="og:description" content="Volt Pro is a Premium Bootstrap 5 Admin Dashboard featuring over 800 components, 10+ plugins and 20 example pages using Vanilla JS.">
<meta property="og:image" content="https://themesberg.s3.us-east-2.amazonaws.com/public/products/volt-pro-bootstrap-5-dashboard/volt-pro-preview.jpg">

<!-- Twitter -->
<meta property="twitter:card" content="summary_large_image">
<meta property="twitter:url" content="https://demo.themesberg.com/volt-pro">
<meta property="twitter:title" content="Volt Free Bootstrap Dashboard - Modals">
<meta property="twitter:description" content="Volt Pro is a Premium Bootstrap 5 Admin Dashboard featuring over 800 components, 10+ plugins and 20 example pages using Vanilla JS.">
<meta property="twitter:image" content="https://themesberg.s3.us-east-2.amazonaws.com/public/products/volt-pro-bootstrap-5-dashboard/volt-pro-preview.jpg">

<!-- Favicon -->
<link rel="apple-touch-icon" sizes="120x120" href="asset-admin/assets/img/favicon/apple-touch-icon.png">
<link rel="icon" type="image/png" sizes="32x32" href="asset-admin/assets/img/favicon/favicon-32x32.png">
<link rel="icon" type="image/png" sizes="16x16" href="asset-admin/assets/img/favicon/favicon-16x16.png">
<link rel="manifest" href="asset-admin/assets/img/favicon/site.webmanifest">
<link rel="mask-icon" href="asset-admin/assets/img/favicon/safari-pinned-tab.svg" color="#ffffff">
<meta name="msapplication-TileColor" content="#ffffff">
<meta name="theme-color" content="#ffffff">

<!-- Fontawesome -->
<link type="text/css" href="asset-admin/vendor/@fortawesome/fontawesome-free/css/all.min.css" rel="stylesheet">

<!-- Sweet Alert -->
<link type="text/css" href="asset-admin/vendor/sweetalert2/dist/sweetalert2.min.css" rel="stylesheet">

<!-- Notyf -->
<link type="text/css" href="asset-admin/vendor/notyf/notyf.min.css" rel="stylesheet">

<!-- Volt CSS -->
<link type="text/css" href="asset-admin/css/volt.css" rel="stylesheet">

<!-- NOTICE: You can use the _analytics.html partial to include production code specific code & trackers -->

</head>

<body>

        <!-- NOTICE: You can use the _analytics.html partial to include production code specific code & trackers -->
        

        <nav class="navbar navbar-dark navbar-theme-primary px-4 col-12 d-md-none">
    <a class="navbar-brand me-lg-5" href="asset-admin/index.html">
        <img class="navbar-brand-dark" src="asset-admin/assets/img/brand/light.svg" alt="Volt logo" /> <img class="navbar-brand-light" src="asset-admin/assets/img/brand/dark.svg" alt="Volt logo" />
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
          <img src="asset-admin/assets/img/team/profile-picture-3.jpg" class="card-img-top rounded-circle border-white"
            alt="Bonnie Green">
        </div>
        <div class="d-block">
          <h2 class="h6">Hi, Jane</h2>
          <a href="asset-admin/pages/examples/sign-in.html" class="btn btn-secondary text-dark btn-xs"><span
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
        <a href="asset-admin/index.html" class="nav-link d-flex align-items-center">
          <span class="sidebar-icon">
            <img src="asset-admin/assets/img/brand/light.svg" height="20" width="20" alt="Volt Logo">
          </span>
          <span class="mt-1 ms-1 sidebar-text">Volt Overview</span>
        </a>
      </li>
      <li class="nav-item ">
        <a href="asset-admin/pages/dashboard/dashboard.html" class="nav-link">
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
      <li class="nav-item ">
        <a href="asset-admin/pages/transactions.html" class="nav-link">
          <span class="sidebar-icon"><span class="fas fa-hand-holding-usd"></span></span>
          <span class="sidebar-text">Transactions</span>
        </a>
      </li>
      <li class="nav-item ">
        <a href="asset-admin/pages/settings.html" class="nav-link">
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
              <a class="nav-link" href="asset-admin/pages/tables/bootstrap-tables.html">
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
              <a class="nav-link" href="asset-admin/pages/examples/sign-in.html">
                <span class="sidebar-text">Sign In</span>
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="asset-admin/pages/examples/sign-up.html">
                <span class="sidebar-text">Sign Up</span>
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="asset-admin/pages/examples/forgot-password.html">
                <span class="sidebar-text">Forgot password</span>
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="asset-admin/pages/examples/reset-password.html">
                <span class="sidebar-text">Reset password</span>
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="asset-admin/pages/examples/lock.html">
                <span class="sidebar-text">Lock</span>
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="asset-admin/pages/examples/404.html">
                <span class="sidebar-text">404 Not Found</span>
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="asset-admin/pages/examples/500.html">
                <span class="sidebar-text">500 Not Found</span>
              </a>
            </li>
          </ul>
        </div>
      </li>
      <li class="nav-item">
        <span
          class="nav-link  d-flex justify-content-between align-items-center"
          data-bs-toggle="collapse" data-bs-target="#submenu-components">
          <span>
            <span class="sidebar-icon"><span class="fas fa-box-open"></span></span>
            <span class="sidebar-text">Components</span>
          </span>
          <span class="link-arrow"><span class="fas fa-chevron-right"></span></span>
        </span>
        <div class="multi-level collapse  show " role="list"
          id="submenu-components" aria-expanded="false">
          <ul class="flex-column nav">
            <li class="nav-item">
              <a class="nav-link" target="_blank"
                href="https://themesberg.com/docs/volt-bootstrap-5-dashboard/components/accordions/">
                <span class="sidebar-text">All Components</span>
              </a>
            </li>
            <li class="nav-item ">
              <a class="nav-link" href="asset-admin/pages/components/buttons.html">
                <span class="sidebar-text">Buttons</span>
              </a>
            </li>
            <li class="nav-item ">
              <a class="nav-link" href="asset-admin/pages/components/notifications.html">
                <span class="sidebar-text">Notifications</span>
              </a>
            </li>
            <li class="nav-item ">
              <a class="nav-link" href="asset-admin/pages/components/forms.html">
                <span class="sidebar-text">Forms</span>
              </a>
            </li>
            <li class="nav-item  active ">
              <a class="nav-link" href="asset-admin/pages/components/modals.html">
                <span class="sidebar-text">Modals</span>
              </a>
            </li>
            <li class="nav-item ">
              <a class="nav-link" href="asset-admin/pages/components/typography.html">
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
            <img src="asset-admin/assets/img/themesberg.svg" height="20" width="20" alt="Themesberg Logo">
          </span>
          <span class="sidebar-text">Themesberg</span>
        </a>
      </li>
      <li class="nav-item">
        <a href="asset-admin/pages/upgrade-to-pro.html"
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
                        <img alt="Image placeholder" src="asset-admin/assets/img/team/profile-picture-1.jpg" class="user-avatar lg-avatar rounded-circle">
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
                        <img alt="Image placeholder" src="asset-admin/assets/img/team/profile-picture-2.jpg" class="user-avatar lg-avatar rounded-circle">
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
                        <img alt="Image placeholder" src="asset-admin/assets/img/team/profile-picture-3.jpg" class="user-avatar lg-avatar rounded-circle">
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
                        <img alt="Image placeholder" src="asset-admin/assets/img/team/profile-picture-4.jpg" class="user-avatar lg-avatar rounded-circle">
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
                        <img alt="Image placeholder" src="asset-admin/assets/img/team/profile-picture-5.jpg" class="user-avatar lg-avatar rounded-circle">
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
                <img class="user-avatar md-avatar rounded-circle" alt="Image placeholder" src="asset-admin/assets/img/team/profile-picture-3.jpg">
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

            <div class="py-4">
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb breadcrumb-dark breadcrumb-transparent">
                        <li class="breadcrumb-item"><a href="#"><span class="fas fa-home"></span></a></li>
                        <li class="breadcrumb-item"><a href="#">Components</a></li>
                        <li class="breadcrumb-item active" aria-current="page">Modals</li>
                    </ol>
                </nav>
                <div class="d-flex justify-content-between w-100 flex-wrap">
                    <div class="mb-3 mb-lg-0">
                        <h1 class="h4">Modals</h1>
                        <p class="mb-0">Dozens of reusable components built to provide buttons, alerts, popovers, and more.</p>
                    </div>
                    <div>
                        <a href="https://themesberg.com/docs/volt-bootstrap-5-dashboard/components/modals/" class="btn btn-outline-gray"><i class="far fa-question-circle me-1"></i> Modals Docs</a>
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col-12 mb-4">
                    <div class="card border-light shadow-sm">
                        <div class="card-body">     
                            <div class="row d-block mt-4">
                                <div class="col-lg-4">
                                    <!-- Button Modal -->
                                    <button type="button" class="btn btn-block btn-dark mb-3" data-bs-toggle="modal" data-bs-target="#modal-default">Default</button>
                                    <!-- Modal Content -->
                                    <div class="modal fade" id="modal-default" tabindex="-1" role="dialog" aria-labelledby="modal-default" aria-hidden="true">
                                        <div class="modal-dialog modal-dialog-centered" role="document">
                                            <div class="modal-content">
                                                <div class="modal-header">
                                                    <h2 class="h6 modal-title">Terms of Service</h2>
                                                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                                </div>
                                                <div class="modal-body">
                                                    <p>With less than a month to go before the European Union enacts new consumer privacy laws for its citizens, companies around the world are updating their terms of service agreements to comply.</p>
                                                    <p>The European Union’s General Data Protection Regulation (G.D.P.R.) goes into effect on May 25 and is meant to ensure a common set of data rights in the European Union. It requires organizations to notify users as
                                                        soon as possible of high-risk data breaches that could personally affect them.</p>
                                                </div>
                                                <div class="modal-footer">
                                                    <button type="button" class="btn btn-secondary">Accept</button>
                                                    <button type="button" class="btn btn-link text-gray ms-auto" data-bs-dismiss="modal">Close</button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- End of Modal Content -->
                                </div>
                                <div class="col-lg-4">
                                    <!-- Button Modal -->
                                    <button type="button" class="btn btn-block btn-dark mb-3" data-bs-toggle="modal" data-bs-target="#modal-notification">Notification</button>
                                    <!-- Modal Content -->
                                    <div class="modal fade" id="modal-notification" tabindex="-1" role="dialog" aria-labelledby="modal-notification" aria-hidden="true">
                                        <div class="modal-dialog modal-info modal-dialog-centered" role="document">
                                            <div class="modal-content bg-gradient-secondary">
                                                <div class="modal-header">
                                                    <p class="modal-title" id="modal-title-notification">A new experience, personalized for you.</p>
                                                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                                </div>
                                                <div class="modal-body">
                                                    <div class="py-3 text-center">
                                                        <span class="modal-icon display-1-lg"><span class="far fa-envelope-open"></span></span>
                                                        <h2 class="h4 modal-title my-3">Important message!</h2>
                                                        <p>Do you know that you can assign status and relation to a company right in the visit list?.</p>
                                                    </div>
                                                </div>
                                                <div class="modal-footer">
                                                    <button type="button" class="btn btn-sm btn-white">Go to Inbox</button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- End of Modal Content -->
                                </div>
                                <div class="col-lg-4">
                                    <!-- Button Modal -->
                                    <button type="button" class="btn btn-block btn-dark mb-3" data-bs-toggle="modal" data-bs-target="#modal-form">Sign
                                        In</button>
                                    <!-- Modal Content -->
                                    <div class="modal fade" id="modal-form" tabindex="-1" role="dialog" aria-labelledby="modal-form" aria-hidden="true">
                                        <div class="modal-dialog modal-dialog-centered" role="document">
                                            <div class="modal-content">
                                                <div class="modal-body p-0">
                                                    <div class="card border-light p-3 p-lg-4">
                                                        <button type="button" class="btn-close ms-auto" data-bs-dismiss="modal" aria-label="Close"></button>
                                                        <div class="card-header border-0 text-center pb-0">
                                                            <h2 class="h4">Sign in to our platform</h2>
                                                            <span>Login here using your username and password</span>   
                                                        </div>
                                                        <div class="card-body p-0 pl-g-3">
                                                            <form action="#" class="mt-4">
                                                                <!-- Form -->
                                                                <div class="form-group mb-4">
                                                                    <label for="login_email">Your Email</label>
                                                                    <div class="input-group">
                                                                        <span class="input-group-text" id="basic-addon1"><span class="fas fa-envelope"></span></span>
                                                                        <input type="email" class="form-control" placeholder="example@company.com" id="login_email" required>
                                                                    </div>  
                                                                </div>
                                                                <!-- End of Form -->
                                                                <div class="form-group">
                                                                    <!-- Form -->
                                                                    <div class="form-group mb-4">
                                                                        <label for="login_password">Your Password</label>
                                                                        <div class="input-group">
                                                                            <span class="input-group-text" id="basic-addon2"><span class="fas fa-unlock-alt"></span></span>
                                                                            <input type="password" placeholder="Password" class="form-control" id="login_password" required>
                                                                        </div>  
                                                                    </div>
                                                                    <!-- End of Form -->
                                                                    <div class="d-flex justify-content-between align-items-center mb-4">
                                                                        <div class="form-check">
                                                                            <input class="form-check-input" type="checkbox" value="" id="remember">
                                                                            <label class="form-check-label mb-0" for="remember">
                                                                              Remember me
                                                                            </label>
                                                                        </div>
                                                                        <div><a href="#" class="small text-right">Lost password?</a></div>
                                                                    </div>
                                                                </div>
                                                                <div class="d-grid">
                                                                    <button type="submit" class="btn btn-dark">Sign in</button>
                                                                </div>
                                                            </form>
                                                            <div class="mt-3 mb-4 text-center">
                                                                <span class="fw-normal">or login with</span>
                                                            </div>
                                                            <div class="d-flex justify-content-center my-4">
                                                                <a href="#" class="btn btn-icon-only btn-pill btn-outline-light text-facebook me-2" type="button" aria-label="facebook button" title="facebook button">
                                                                    <span aria-hidden="true" class="fab fa-facebook-f"></span>
                                                                </a>
                                                                <a href="#" class="btn btn-icon-only btn-pill btn-outline-light text-twitter me-2" type="button" aria-label="twitter button" title="twitter button">
                                                                    <span aria-hidden="true" class="fab fa-twitter"></span>
                                                                </a>
                                                                <a href="#" class="btn btn-icon-only btn-pill btn-outline-light text-facebook" type="button" aria-label="github button" title="github button">
                                                                    <span aria-hidden="true" class="fab fa-github"></span>
                                                                </a>
                                                            </div>
                                                            <div class="d-flex justify-content-center align-items-center mt-4">
                                                                <span class="fw-normal">
                                                                    Not registered?
                                                                    <a href="#" class="fw-bold">Create account</a>
                                                                </span>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- End of Modal Content -->
                                </div>
                                <div class="col-lg-4">
                                    <!-- Button Modal -->
                                    <button type="button" class="btn btn-block btn-dark mb-3" data-bs-toggle="modal" data-bs-target="#modal-form-signup">Sign Up</button>
                                    <!-- Modal Content -->
                                    <div class="modal fade" id="modal-form-signup" tabindex="-1" role="dialog" aria-labelledby="modal-form-signup" aria-hidden="true">
                                        <div class="modal-dialog modal-dialog-centered" role="document">
                                            <div class="modal-content">
                                                <div class="modal-body p-0">
                                                    <div class="card p-3 p-lg-4">
                                                        <button type="button" class="btn-close ms-auto" data-bs-dismiss="modal" aria-label="Close"></button>
                                                        <div class="card-header border-0 text-center pb-0">
                                                            <h2 class="mb-0 h5">Create Account</h2>                               
                                                        </div>
                                                        <div class="card-body p-0 p-lg-3">
                                                            <form action="#">
                                                                <!-- Form -->
                                                                <div class="form-group mb-4">
                                                                    <label for="email">Your Email</label>
                                                                    <div class="input-group">
                                                                        <span class="input-group-text" id="basic-addon3"><span class="fas fa-envelope"></span></span>
                                                                        <input type="email" class="form-control" placeholder="example@company.com" id="email" required>
                                                                    </div>  
                                                                </div>
                                                                <!-- End of Form -->
                                                                <div class="form-group">
                                                                    <!-- Form -->
                                                                    <div class="form-group mb-4">
                                                                        <label for="password">Your Password</label>
                                                                        <div class="input-group">
                                                                            <span class="input-group-text" id="basic-addon4"><span class="fas fa-unlock-alt"></span></span>
                                                                            <input type="password" placeholder="Password" class="form-control" id="password" required>
                                                                        </div>  
                                                                    </div>
                                                                    <!-- End of Form -->
                                                                    <!-- Form -->
                                                                    <div class="form-group mb-4">
                                                                        <label for="password_confirm">Confirm Password</label>
                                                                        <div class="input-group">
                                                                            <span class="input-group-text" id="basic-addon5"><span class="fas fa-unlock-alt"></span></span>
                                                                            <input type="password" placeholder="Confirm Password" class="form-control" id="password_confirm" required>
                                                                        </div>  
                                                                    </div>
                                                                    <!-- End of Form -->
                                                                    <div class="form-check mb-4">
                                                                        <input class="form-check-input" type="checkbox" value="" id="terms">
                                                                        <label class="form-check-label mb-0" for="terms">
                                                                            I agree to the <a href="#">terms and conditions</a>
                                                                        </label>
                                                                    </div>
                                                                </div>
                                                                <div class="d-grid">
                                                                    <button type="submit" class="btn btn-dark">Sign up</button>
                                                                </div>
                                                            </form>
                                                            <div class="mt-3 mb-4 text-center">
                                                                <span class="fw-normal">or</span>
                                                            </div>
                                                            <div class="d-flex justify-content-center my-4">
                                                                <a href="#" class="btn btn-icon-only btn-pill btn-outline-light text-facebook me-2" type="button" aria-label="facebook button" title="facebook button">
                                                                    <span aria-hidden="true" class="fab fa-facebook-f"></span>
                                                                </a>
                                                                <a href="#" class="btn btn-icon-only btn-pill btn-outline-light text-twitter me-2" type="button" aria-label="twitter button" title="twitter button">
                                                                    <span aria-hidden="true" class="fab fa-twitter"></span>
                                                                </a>
                                                                <a href="#" class="btn btn-icon-only btn-pill btn-outline-light text-facebook" type="button" aria-label="github button" title="github button">
                                                                    <span aria-hidden="true" class="fab fa-github"></span>
                                                                </a>
                                                            </div>
                                                            <div class="d-flex justify-content-center align-items-center mt-4">
                                                                <span class="fw-normal">
                                                                    Already have an account?
                                                                    <a href="#" class="fw-bold">Login here</a>
                                                                </span>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- End of Modal Content -->
                                </div>
                                <div class="col-lg-4">
                                    <!-- Button Modal -->
                                    <button type="button" class="btn btn-block btn-tertiary mb-3" data-bs-toggle="modal" data-bs-target="#modal-achievement">Achievement</button>
                                    <!-- Modal Content -->
                                    <div class="modal fade" id="modal-achievement" tabindex="-1" role="dialog" aria-labelledby="modal-achievement" aria-hidden="true">
                                        <div class="modal-dialog modal-tertiary modal-dialog-centered" role="document">
                                            <div class="modal-content">
                                                <div class="modal-header mx-auto">
                                                    <p class="lead mb-0 text-white">You just unlocked a new badge</p>
                                                </div>
                                                <div class="modal-body">
                                                    <div class="py-3 px-5 text-center">
                                                        <span class="modal-icon display-1 text-white"><span class="fas fa-medal"></span></span>
                                                        <h2 class="h3 modal-title mb-3 text-white">Author Level 5</h2>
                                                        <p class="mb-4 text-white">One Thousand Dollars! Well done mate - heads are turning your way.</p>
                                                        <div class="progress mb-0">
                                                            <div class="progress-bar" role="progressbar" style="width: 50%" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100"></div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="modal-footer d-flex justify-content-center pt-0 pb-3">
                                                    <button type="button" class="btn btn-sm btn-white text-tertiary" data-bs-dismiss="modal">Awesome!</button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- End of Modal Content -->
                                </div>
                                <div class="col-lg-4">
                                    <!-- Button Modal -->
                                    <button type="button" class="btn btn-block btn-dark mb-3" data-bs-toggle="modal" data-bs-target="#modal-subscribe">Subscribe</button>
                                    <!-- Modal Content -->
                                    <div class="modal fade" id="modal-subscribe" tabindex="-1" role="dialog" aria-labelledby="modal-subscribe" aria-hidden="true">
                                        <div class="modal-dialog modal-tertiary modal-dialog-centered modal-lg" role="document">
                                            <div class="modal-content bg-dark text-white">
                                                <div class="modal-header">
                                                    <button type="button" class="btn-close btn-close-white text-white" data-bs-dismiss="modal" aria-label="Close"></button>
                                                </div>
                                                <div class="modal-body text-center py-3">
                                                    <span class="modal-icon display-1"><span class="fas fa-envelope-open-text"></span></span>
                                                    <h3 class="modal-title mb-3">Join our 1,360,462 subscribers</h3>
                                                    <p class="mb-4 lead">Get exclusive access to freebies, premium products and news.</p>
                                                    <div class="form-group px-lg-5">
                                                        <div class="d-flex mb-3 justify-content-center">
                                                            <input type="text" id="subscribe" class="me-sm-1 mb-sm-0 form-control form-control-lg" placeholder="example@company.com">
                                                            <div>
                                                                <button type="submit" class="ms-2 btn large-form-btn btn-tertiary">Subscribe</button>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="modal-footer z-2 mx-auto text-center">
                                                    <p class="text-white font-small">
                                                        We’ll never share your details with third parties.
                                                        <br class="visible-md">View our <a href="#">Privacy Policy</a> for more info.
                                                    </p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- End of Modal Content -->
                                </div>
                            </div>
                        </div>
                    </div>
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
                <img src="asset-admin/assets/img/technologies/bootstrap-5-logo.svg" class="image image-xs">
            </a>
            <a href="https://demo.themesberg.com/volt-react-dashboard/#/" target="_blank">
                <img src="asset-admin/assets/img/technologies/react-logo.svg" class="image image-xs">
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
<script src="asset-admin/vendor/@popperjs/core/dist/umd/popper.min.js"></script>
<script src="asset-admin/vendor/bootstrap/dist/js/bootstrap.min.js"></script>

<!-- Vendor JS -->
<script src="asset-admin/vendor/onscreen/dist/on-screen.umd.min.js"></script>

<!-- Slider -->
<script src="asset-admin/vendor/nouislider/distribute/nouislider.min.js"></script>

<!-- Smooth scroll -->
<script src="asset-admin/vendor/smooth-scroll/dist/smooth-scroll.polyfills.min.js"></script>

<!-- Charts -->
<script src="asset-admin/vendor/chartist/dist/chartist.min.js"></script>
<script src="asset-admin/vendor/chartist-plugin-tooltips/dist/chartist-plugin-tooltip.min.js"></script>

<!-- Datepicker -->
<script src="asset-admin/vendor/vanillajs-datepicker/dist/js/datepicker.min.js"></script>

<!-- Sweet Alerts 2 -->
<script src="asset-admin/vendor/sweetalert2/dist/sweetalert2.all.min.js"></script>

<!-- Moment JS -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.27.0/moment.min.js"></script>

<!-- Vanilla JS Datepicker -->
<script src="asset-admin/vendor/vanillajs-datepicker/dist/js/datepicker.min.js"></script>

<!-- Notyf -->
<script src="asset-admin/vendor/notyf/notyf.min.js"></script>

<!-- Simplebar -->
<script src="asset-admin/vendor/simplebar/dist/simplebar.min.js"></script>

<!-- Github buttons -->
<script async defer src="https://buttons.github.io/buttons.js"></script>

<!-- Volt JS -->
<script src="asset-admin/assets/js/volt.js"></script>

    
</body>

</html>
