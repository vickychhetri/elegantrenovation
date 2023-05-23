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
          <div class="col-sm-11 col-md-9 col-lg-8 col-xl-7 col-xl-6">
            <div class='common-card'>
              <div class='mb-4'>
                <nav style="--bs-breadcrumb-divider: url(&#34;data:image/svg+xml,%3Csvg xmlns='http://www.w3.org/2000/svg' width='8' height='8'%3E%3Cpath d='M2.5 0L1 1.5 3.5 4 1 6.5 2.5 8l4-4-4-4z' fill='%236c757d'/%3E%3C/svg%3E&#34;);"
                     aria-label="breadcrumb">
                  <ol class="breadcrumb mb-0">
                    <li class="breadcrumb-item"><a href="/">Home</a></li>
                    <li class="breadcrumb-item"><a href="/staff">Staff</a></li>
                    <li class="breadcrumb-item active" aria-current="page">View Staff</li>
                  </ol>
                </nav>
              </div>
              <!--  Title  -->
              <div class='mb-3 mb-md-4'>
                <div>
                  <h4 class='m-0 lh-normal'>View Staff</h4>
                </div>
              </div>
              <!--  Card Listing  -->
              <div class='card-listing'>
                <div class='card-listing-image my-4 text-center'>
                  <img src="{{asset('storage/thumbnail/'.$record->image)}}" alt="avataar" class='profile-image user-image' />
                </div>
                <Divider plain></Divider>
                <!-- {/* Detail  */} -->
                <ul class='list-unstyled mb-4'>
                  <li class='d-flex flex-column flex-sm-row mb-3'><span>Name:</span> <span class='ms-1'>{{$record->name}}</span></li>
                  <li class='d-flex flex-column flex-sm-row mb-3'><span>Email:</span> <span class='ms-1'>{{$record->email}}</span></li>
                  <li class='d-flex flex-column flex-sm-row mb-3'><span>Phone no:</span> <span class='ms-1'>{{$record->country_code}}-{{$record->phone_number}}</span></li>
                  <li class='d-flex'><span>Roles:</span> <span class='ms-2'>
                      <div class="d-inline-flex gap-2 role-chips flex-wrap">
                          @foreach($permissions as $permission)
                              <span class="fs-12 text-white text-uppercase d-inline-block">{{$permission->permission}}</span>
                          @endforeach


                      </div>
                    </span>
                  </li>
                </ul>
                <!-- {/* Button  */} -->
                <div class='card-listing-button d-inline-flex flex-wrap gap-3 w-100'>
                  <a href="{{route('admin.staff_edit',$record->id)}}" class='text-decoration-none text-white btn btn-primary flex-grow-1'>Edit</a>

                  <a href="{{route('admin.staff_block_unblock',$record->id)}}" type="primary" type='button' class='btn btn-outline-warning flex-grow-1'>{{$record->blocked?"Unblock":"Block"}}</a>
                  <a  href="{{route('admin.staff_destroy',$record->id)}}" type="primary" type='button' class='btn btn-danger flex-grow-1 w-100'>Delete</a>
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
