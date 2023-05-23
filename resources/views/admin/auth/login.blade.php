@include('admin.layouts.app')
<section class="auth-pages min-vh-100 d-flex align-items-center">
    <div class="container">
        <div class="row justify-content-center">
            <!-- Form Image  -->
            <div class="col-12 col-sm-4 col-md-4 col-lg-4 d-none d-lg-block pe-md-0">
                <div class='image-wrapper'>
                    <img src="{{ asset('images/login.png') }}" alt="login" class="img-fluid w-100" />
                </div>
            </div>
            <!-- Form Wrapper  -->

            <div class="col-11 col-sm-9 col-md-6 col-lg-4 ps-md-0">

                <div
                    class='form-wrapper d-flex justify-content-center align-items-center h-100 bg-white py-4 py-md-5 px-4 px-md-5'>
                    <div class="w-100">
                        <div class='logo-wrapper mb-5 text-center'>
                            <img src="{{ asset('images/logo.png') }}" alt="login" class="img-fluid" />
                        </div>
                        <form action="{{ route('admin.dologin') }}" method="post">
                            @csrf
                            <!-- Email  -->
                            <div class="input-group mb-3">
                                <span class="input-group-text" id="Email">
                                    <i class='bx bxs-envelope'></i>
                                </span>
                                <input type="email"  name="email" class="form-control" placeholder="Email"
                                    aria-label="Email" aria-describedby="Email">
                            </div>
                            <!-- Password -->
                            <div class="input-group mb-4">
                                <span class="input-group-text" id="Password">
                                    <i class='bx bxs-lock-alt'></i>
                                </span>
                                <input type="password" name="password" class="form-control" placeholder="Password" aria-label="Password"
                                    aria-describedby="Password" />
                            </div>
                            <!-- Button  -->
                            <div class="button--wrapper">
                                <button type="submit" class="btn btn-primary w-100">Login</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
