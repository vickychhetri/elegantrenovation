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
          <div class="col-sm-11 col-md-6 col-lg-5 col-xl-4 col-xl-3">
            <div class='common-card'>
              <div class='mb-4'>
                <nav style="--bs-breadcrumb-divider: url(&#34;data:image/svg+xml,%3Csvg xmlns='http://www.w3.org/2000/svg' width='8' height='8'%3E%3Cpath d='M2.5 0L1 1.5 3.5 4 1 6.5 2.5 8l4-4-4-4z' fill='%236c757d'/%3E%3C/svg%3E&#34;);"
                     aria-label="breadcrumb">
                  <ol class="breadcrumb mb-0">
                    <li class="breadcrumb-item"><a href="/">Home</a></li>
                    <li class="breadcrumb-item active" aria-current="page">Profile</li>
                  </ol>
                </nav>
              </div>
              <!--  Title  -->
              <div class="mb-3">
                <h4 class='m-0'>Profile</h4>
              </div>
              <!--  Card Listing  -->
              <div class='card-listing'>
                <div class='card-listing-image my-4 text-center'>
                  <img src="{{asset('images/admin.png')}}" alt="avataar" class='profile-image user-image' />
                </div>
                <hr />
                <ul class='list-unstyled mb-4'>
                  <li class='mb-3'><span>Name:</span> <span class='ms-1'>John Doe</span></li>
                  <li class='mb-3'><span>Email:</span> <span class='ms-1'>admin123@gmail.com</span></li>
                  <li><span>Phone no:</span> <span class='ms-1'>+61-5236985214</span></li>
                </ul>
                <!--  Button  -->
                <div class='card-listing-button d-inline-flex flex-wrap gap-3 w-100'>
                  <a href="/profile/edit" class='btn btn-primary flex-grow-1 w-100'>Edit</a>
                  <button type='button' class='btn btn-danger flex-grow-1 w-100'>Delete</button>
                </div>
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
