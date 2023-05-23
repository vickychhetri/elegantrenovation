@include('admin.layouts.app')

<div class="main-layout">
  <!-- Sidebar  -->
  @include('admin.layouts.sidebar')
  <!-- Header Page Footer  -->
  <div class="header-page-footer">
    <!-- Header  -->
    @include('admin.layouts.header')
    <!-- Section  -->
    <section class="dashboard-page">
      <div class="container-fluid">
        <!-- Widgets  -->
        <div class="row gy-4 mb-4">
          <!-- 1 -->
          <div class="col-12 col-xs-6 col-sm-6 col-md-6 col-lg-4 col-xl-3 col-xxl-2 custom-widgets-cards">
            <div class="dashboard-widgets h-100 text-center p-4">
              <div
                   class='dashboard-widget-card-icon rounded-circle mx-auto d-flex align-items-center justify-content-center mb-3'>
                <img src="{{asset('icons/users.svg')}}" alt="">
              </div>
              <div class='dashboard-widget-card-content'>
                <h4 class='m-0 mb-1 text-success fw-bolder'>{{$users_count}}</h4>
                <p class="m-0 text-success">Users</p>
              </div>
            </div>
          </div>
          <!-- 2 -->
          <div class="col-12 col-xs-6 col-sm-6 col-md-6 col-lg-4 col-xl-3 col-xxl-2 custom-widgets-cards">
            <div class="dashboard-widgets h-100 text-center p-4">
              <div
                   class='dashboard-widget-card-icon rounded-circle mx-auto d-flex align-items-center justify-content-center mb-3'>
                <img src="{{asset('icons/product.svg')}}" alt="">
              </div>
              <div class='dashboard-widget-card-content'>
                <h4 class='m-0 mb-1 text-blue fw-bolder'>{{$products_count}}</h4>
                <p class="m-0 text-blue">Products</p>
              </div>

            </div>
          </div>
        </div>

        <div class="row mb-4">
          <div class="col-md-12">
            <div class="common-card">
              <h4 class='m-0 mb-4'>Recent Users</h4>
              <!-- Table  -->
              <div class="table-wrapper table-responsive">
                <table class="table table-hover">
                  <thead>
                    <tr>
                      <th scope="col">Sr.no.</th>
                      <th scope="col">Name</th>
                      <th scope="col">Email</th>
                      <th scope="col">Phone No.</th>
                      <th scope="col">Action</th>
                    </tr>
                  </thead>
                  <tbody>
                  @forelse($users as $user)
                    <tr>
                      <td scope="row">1</td>
                      <td>
                        <div class='profile-image d-inline-flex gap-2 align-items-center'>
                          <img src="#" class="small-image" alt="avataar" />
                          <span>{{$user->name}}</span>
                        </div>
                      </td>

                      <td>{{$user->email}}</td>
                      <td>{{$user->phone_number?? "-"}}</td>
                      <td>
                        <ul class='m-0 list-unstyled d-flex gap-2'>
                          <li>
                            <a href="{{route('admin.user.show', $user->id)}}" class="action-btn">
                              <i class='bx bxs-show fs-5'></i>
                            </a>
                          </li>
{{--                          <li>--}}
{{--                            <button type='button' class="action-btn">--}}
{{--                              <i class='bx bxs-log-in-circle fs-5'></i>--}}
{{--                            </button>--}}
{{--                          </li>--}}
                        </ul>
                      </td>
                    </tr>

                  @empty
                      <span> No Records</span>
                  @endforelse
                  </tbody>
                </table>
              </div>
            </div>
          </div>
        </div>

        <div class="row mb-4">
          <div class="col-md-12">
            <div class="common-card">
              <div class='mb-4 d-flex justify-content-between align-items-center flex-column flex-sm-row gap-2'>
                <div>
                  <h4 class='m-0 lh-normal'>Sales Graph</h4>
                  <p class='m-0'>(+43%) than last year</p>
                </div>
                <div class="dropdown">
                  <button class="btn btn-outline-primary dropdown-toggle" type="button" data-bs-toggle="dropdown"
                          aria-expanded="false">
                    Yearly
                  </button>
                  <ul class="dropdown-menu">
                    <li><button class="reset-btn px-3 pb-1" type="button">Yearly</button></li>
                    <li><button class="reset-btn px-3 pb-1" type="button">Monthly</button></li>
                    <li><button class="reset-btn px-3" type="button">Weekly</button></li>
                  </ul>
                </div>
              </div>
              <!-- Chart  -->
              <div class="chart-wrapper">
                <img src="{{asset('images/chart.png')}}" alt="chart" class="img-fluid w-100" />
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
