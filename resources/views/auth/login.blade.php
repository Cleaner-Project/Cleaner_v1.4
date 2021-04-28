@extends('layouts.app')

@section('content')
<!DOCTYPE html>
<html lang="en">

<head> 
    @include('admin/dashboard/_head')
  
</head>

<body>
    <main>
                                  
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
                                                            <form method="POST" action="{{ route('login') }} " class="mt-4">
                                                             @csrf
                                                                <!-- Form -->
                                                                <div class="form-group mb-4">
                                                                    <label for="login_email">Your Email</label>
                                                                    <div class="input-group">
                                                                        <span class="input-group-text" id="basic-addon1"><span class="fas fa-envelope"></span></span>
                                                                        <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>

                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                                                                    </div>  
                                                                </div>
                                                                
                                                                <!-- End of Form -->
                                                                <div class="form-group">
                                                                    <!-- Form -->
                                                                    <div class="form-group mb-4">
                                                                        <label for="login_password">Your Password</label>
                                                                        <div class="input-group">
                                                                            <span class="input-group-text" id="basic-addon2"><span class="fas fa-unlock-alt"></span></span>
                                                                            <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">

                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                                                                        </div>  
                                                                    </div>
                                                                    <!-- End of Form -->
                                                                    <div class="d-flex justify-content-between align-items-center mb-4">
                                                                        <div class="form-check">
                                                                        <input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>
                                                                            <label class="form-check-label mb-0" for="remember">
                                                                              Remember me
                                                                            </label>
                                                                        </div>
                                                                        <div><a href="#" class="small text-right">Lost password?</a></div>
                                                                    </div>
                                                                </div>
                                                                <div class="d-grid">
                                                                    <button type="submit" class="btn btn-dark">Sign in</button>
                                                                    
                                @if (Route::has('password.request'))
                                    <a class="btn btn-link" href="{{ route('password.request') }}">
                                        {{ __('Forgot Your Password?') }}
                                    </a>
                                @endif
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
                                                        </form>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- End of Modal Content -->
                                </div>
                               
        </main>

    @include('admin/dashboard/_scripts')
    
</body>

</html>

@endsection