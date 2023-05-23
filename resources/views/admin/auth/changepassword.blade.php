@include('admin.layouts.app')
<div class="main-layout">
    <!-- Sidebar  -->
    @include('admin.layouts.sidebar')
    <!-- Header Page Footer  -->
    <div class="header-page-footer">
        <!-- Header  -->
        @include('admin.layouts.header')
        <!-- Section  -->
        <section class="profile-page">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-sm-10 col-md-9 col-lg-7 col-xl-6 col-xl-5">
                        <div class='common-card'>
                            <div class='mb-4'>
                                <nav style="--bs-breadcrumb-divider: url(&#34;data:image/svg+xml,%3Csvg xmlns='http://www.w3.org/2000/svg' width='8' height='8'%3E%3Cpath d='M2.5 0L1 1.5 3.5 4 1 6.5 2.5 8l4-4-4-4z' fill='%236c757d'/%3E%3C/svg%3E&#34;);"
                                    aria-label="breadcrumb">
                                    <ol class="breadcrumb mb-0">
                                        <li class="breadcrumb-item"><a href="{{ route('admin.dashboard') }}">Home</a>
                                        </li>
                                        <li class="breadcrumb-item active" aria-current="page">Change password</li>
                                    </ol>
                                </nav>
                            </div>
                            <!--  Title  -->
                            <div class="mb-3">
                                <h4 class='m-0'>Change Password</h4>
                            </div>
                            <!--  Form Card  -->
                            <div class='card-form-wrapper'>
                                <form name="edit_profile" class="change-password-form" method="post"
                                    action="{{ route('admin.change.password') }}">
                                    @csrf
                                    <!-- Old Password -->
                                    <div class="mb-3">
                                        <label for="old-password">Old Password</label>
                                        <div class="input-group mb-4">
                                            <input type="password" name="old_password" class="form-control"
                                                placeholder="Old Password" aria-label="old-password"
                                                aria-describedby="old-password" />
                                            <span class="input-group-text" id="Password">
                                                <i class='bx bxs-show'></i>
                                            </span>
                                        </div>
                                    </div>
                                    <!-- New Password -->
                                    <div class="mb-3">
                                        <label for="new-password">New Password</label>
                                        <div class="input-group mb-4">
                                            <input type="password" name="new_password" class="form-control"
                                                placeholder="New Password" aria-label="new-password"
                                                aria-describedby="new-password" />
                                            <span class="input-group-text" id="Password">
                                                <i class='bx bxs-show'></i>
                                            </span>
                                        </div>
                                    </div>
                                    <!-- Confirm Password -->
                                    <div class="mb-4">
                                        <label for="confirm-password">Confirm Password</label>
                                        <div class="input-group mb-4">
                                            <input type="password" name="confirm_password" class="form-control"
                                                placeholder="Confirm Password" aria-label="confirm-password"
                                                aria-describedby="confirm-password" />
                                            <span class="input-group-text" id="confirm-password">
                                                <i class='bx bxs-show'></i>
                                            </span>
                                        </div>
                                    </div>
                                    <!-- Button -->
                                    <button type="submit" class="btn btn-primary">
                                        Update Password
                                    </button>
                                </form>


                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- footer  -->
        @include('admin.layouts.footer')
    </div>
</div>

@include('admin.layouts.script')
