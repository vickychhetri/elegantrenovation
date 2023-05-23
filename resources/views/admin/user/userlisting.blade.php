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
          <div class="col-md-12">
            <div class='common-card'>
              <div class='mb-4'>
                <nav style="--bs-breadcrumb-divider: url(&#34;data:image/svg+xml,%3Csvg xmlns='http://www.w3.org/2000/svg' width='8' height='8'%3E%3Cpath d='M2.5 0L1 1.5 3.5 4 1 6.5 2.5 8l4-4-4-4z' fill='%236c757d'/%3E%3C/svg%3E&#34;);"
                     aria-label="breadcrumb">
                  <ol class="breadcrumb mb-0">
                    <li class="breadcrumb-item"><a href="{{route('admin.dashboard')}}">General</a></li>
                    <li class="breadcrumb-item active" aria-current="page">Users</li>
                  </ol>
                </nav>
              </div>
              <!--  Title  -->
              <div class='mb-4 d-flex justify-content-between align-items-center'>
                <div>
                  <h4 class='m-0 lh-normal'>Users</h4>
                </div>
                <div>
                  <button class="btn btn-primary">
                    <i class="bx bxs-cloud-upload fs-5 align-bottom"></i> <span>Export</span>
                  </button>
                </div>
              </div>
              <!--  Search Field  -->
              <div class="input-group mb-3">
                <span class="input-group-text" id="Email">
                  <i class='bx bx-search text-black'></i>
                </span>
                <form action="{{route('admin.user.index')}}" method="get">
                  @csrf
                  <input type="search" name="search" value="{{$search}}" class="form-control ps-0" placeholder="Search"
                         aria-label="Search" aria-describedby="Search">
                </form>

              </div>

              <!-- tabs  -->

              <!-- Tab Content  -->
              <div class="tab-content" id="pills-tabContent">
                <div class="tab-pane fade show active" id="pills-all" role="tabpanel" aria-labelledby="pills-all-tab"
                     tabindex="0">
                  <!--  Table  -->
                  <div class="table-wrapper table-responsive">
                    <table class="table table-hover">
                      <thead>
                        <tr>
                          <th scope="col">ID</th>
                          <th scope="col">Name</th>
                          <th scope="col">Email</th>
                          <th scope="col">Phone No.</th>
                          <th scope="col">Status</th>
                          <th scope="col">Action</th>
                        </tr>
                      </thead>
                      <tbody>
                        @forelse ($users as $user)
                        <tr>
                          <td scope="row">{{$user->id}}</td>
                          <td>
                            <div class='profile-image d-inline-flex gap-2 align-items-center'>
{{--                              <img src="{{asset('images/avataar.png')}}" class="small-image" alt="avataar" />--}}
                              <span>{{$user->name}}</span>
                            </div>
                          </td>
                          <td>{{$user->email}}</td>
                          <td>{{$user->phone_number}}</td>
                          @if ($user->is_block == null && $user->is_deactive == null)
                          <td>Active</td>
                          @elseif ($user->is_block == 1)
                          <td>Blocked</td>
                          @elseif ($user->is_deactive == 1)
                          <td>Deactivated</td>
                          @endif
                          <td>
                            <ul class='m-0 list-unstyled d-flex gap-2'>
                              <li>
                                <a href="{{route('admin.user.show', $user->id)}}" class="action-btn">
                                  <i class='bx bxs-show fs-5'></i>
                                </a>
                              </li>
{{--                              <li>--}}
{{--                                <button type='button' class="action-btn">--}}
{{--                                  <i class='bx bxs-log-in-circle fs-5'></i>--}}
{{--                                </button>--}}
{{--                              </li>--}}
                            </ul>
                          </td>
                        </tr>

                        @empty
                            <tr>
                                <td colspan="6">
                                    @include('admin.layouts.nodata')
                                </td>
                            </tr>

                        @endforelse
                      </tbody>



                    </table>

                    {{$users->links()}}
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
