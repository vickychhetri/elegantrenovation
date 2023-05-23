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
        <div class="row mb-4">
          <div class="col-md-12">
            <div class='common-card'>
              <div class='mb-4'>
                <nav style="--bs-breadcrumb-divider: url(&#34;data:image/svg+xml,%3Csvg xmlns='http://www.w3.org/2000/svg' width='8' height='8'%3E%3Cpath d='M2.5 0L1 1.5 3.5 4 1 6.5 2.5 8l4-4-4-4z' fill='%236c757d'/%3E%3C/svg%3E&#34;);"
                     aria-label="breadcrumb">
                  <ol class="breadcrumb mb-0">
                    <li class="breadcrumb-item"><a href="{{route('admin.dashboard')}}">Home</a></li>
                    <li class="breadcrumb-item"><a href="{{route('admin.user.index')}}">Users</a></li>
                    <li class="breadcrumb-item active" aria-current="page">User Detail</li>
                  </ol>
                </nav>
              </div>
              <!--  Title  -->
              <div class="mb-3">
                <h4 class='m-0'>User Detail</h4>
              </div>
              <!--  Card Listing  -->
              <div class='card-listing'>
                <div class='card-listing-image my-4 text-center'>
                  <img src="{{asset('images/admin.png')}}" alt="avataar" class='profile-image user-image' />
                </div>
                <hr />
                <div class="row justify-content-between gy-4">
                  <!-- Deatil  -->
                  <div class="col-lg-5 col-xl-4">
                    <ul class='list-unstyled mb-4 flex-grow-1'>
                      <li class='mb-3'><span>Name:</span> <span class='ms-1'>{{$user->name}}</span></li>
                      <li class='mb-3'><span>Email:</span> <span class='ms-1'>{{$user->email}}</span></li>
                      <li><span>Phone no:</span> <span class='ms-1'>+{{$user->country_code}}-{{$user->phone_number}}</span></li>
                    </ul>
                  </div>
                  <!--  Button  -->
                  <div class="col-lg-3 col-xl-3">
                    <div class='card-listing-button d-inline-flex flex-wrap gap-3 w-100 flex-grow-1'>
                        <form method="post" action="{{route('admin.user.block')}}">
                            @csrf
                        <input type="hidden" name="id" value="{{$user->id}}">
                            @if ($user->is_block == 1)
                        <button
                        class='text-decoration-none text-white btn btn-danger flex-grow-1'>Blocked</button>
                        @elseif ($user->is_block == null)
                        <button
                        class='text-decoration-none text-white btn btn-primary flex-grow-1'>Block</button>
                        @endif
                    </form>
                    <form method="post" action="{{route('admin.user.dective')}}">
                        @csrf
                        <input type="hidden" name="id" value="{{$user->id}}">
                        @if ($user->is_deactive == 1)
                        <button
                        class='text-decoration-none text-white btn btn-primary flex-grow-1'>Deactivate</button>
                        @elseif ($user->is_deactive == null)
                        <button
                        class='text-decoration-none text-white btn btn-danger flex-grow-1'>Deactivated</button>
                        @endif
                    </form>
                    <form method="post" action="{{route('admin.user.destroy', $user->id)}}">
                        @csrf
                        <input type="hidden" name="_method" value="DELETE">
                      <button type="primary" class='btn btn-danger flex-grow-1 w-100'>Delete</button>
                    </form>
                    </div>
                  </div>
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
