@extends('cleaner.cleaner_layout')

@section('content')
        
        <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center py-4">
                <div>
                   
                    <div class="dropdown-menu dashboard-dropdown dropdown-menu-start mt-2 py-0">
                        <a class="dropdown-item fw-normal rounded-top" href="#"><span class="far fa-file-alt me-2"></span>Document</a>
                        <a class="dropdown-item fw-normal" href="#"><span class="far fa-comment-dots me-2"></span>Message</a>
                        <a class="dropdown-item fw-normal" href="#"><span class="fas fa-box-open me-2"></span>Product</a>
                        <div role="separator" class="dropdown-divider my-0"></div>
                        <a class="dropdown-item fw-normal rounded-bottom" href="#"><span class="fas fa-rocket text-danger me-2"></span>My Plan</a>
                    </div>
                </div>
                <div>
                    <button type="button" class="btn btn-dark me-2"><span class="fas fa-calendar-alt"></span></button>
                    <button class="btn btn-dark dropdown-toggle" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        <span class="fas fa-clipboard me-2"></span>Reports
                        <span class="icon icon-small ms-1"><span class="fas fa-chevron-down"></span></span>
                    </button>
                    <div class="dropdown-menu dashboard-dropdown dropdown-menu-start mt-2 py-0">
                        <a class="dropdown-item fw-normal rounded-top" href="#"><span class="fas fa-box-open"></span>Products</a>
                        <a class="dropdown-item fw-normal" href="#"><span class="fas fa-store"></span>Customers</a>
                        <a class="dropdown-item fw-normal" href="#"><span class="fas fa-cart-arrow-down"></span>Orders</a>
                        <a class="dropdown-item fw-normal" href="#"><span class="fas fa-chart-pie"></span>Console</a>
                        <div role="separator" class="dropdown-divider my-0"></div>
                        <a class="dropdown-item fw-normal rounded-bottom" href="#"><span class="fas fa-rocket text-success"></span>All Reports</a>
                    </div>
                </div>
            </div>
            <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center py-4">
            <div class="col-12 col-xl-4">
                   
                        <div class="col-12 mb-4">
                            <div class="card shadow-sm text-center p-0">
                              
                                <div class="card-body pb-3">
                                    <img src="asset-admin/assets/img/team/profile-picture-5.jpg" class="user-avatar rounded-circle mx-auto mt-n5 mb-4" alt="Neil Portrait">
                                    <h4 class="h2 text-success ">2 hour</h4>
                                    <h5 class="fw-normal">Corner Street 13 & 102, SangKat Wat Phnom, Khan Daun Penh, Phnom Penh </h5>
                                    <h4 class="text-secondary fas fa-mobile-alt "> 096 283 231</h4>
                                    <p class="h3 text-success mb-4">Get : $8</p>
                                    <a class="btn btn-sm btn-success me-2" href="#"><span class="fas fa-hands-helping me-1"></span> Take it</a>
                                    <a class="btn btn-sm btn-secondary" href="#">Send Message</a>
                                </div>
                             </div>
                        </div>
                     
              </div>
        
              </div>   
    </div>
    @endsection