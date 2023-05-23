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
                    <li class="breadcrumb-item"><a href="/">Home</a></li>
                    <li class="breadcrumb-item active" aria-current="page">Staff</li>
                  </ol>
                </nav>
              </div>
              <!--  Title  -->
              <div class='mb-4 d-flex justify-content-between align-items-center'>
                <div>
                  <h4 class='m-0 lh-normal'>Staff</h4>
                </div>
                <div>
                  <a class="btn btn-outline-primary" href="/admin/staff/add">
                    <i class="bx bx-plus fw-bolder"></i>Add Staff
                  </a>
                </div>
              </div>
              <!--  Search Field  -->
                <form method="get">
              <div class="input-group mb-3">
                <span class="input-group-text" id="Email">
                  <i id="emptycross_button" class='bx bx-search text-black'></i>
                </span>
                <input type="search" name="search"  value="{{Request::get('search')}}" class="form-control ps-0" placeholder="Search" aria-label="Search"
                       aria-describedby="Search">
              </div>
                </form>
              <!--  Table  -->
              <div class="table-wrapper table-responsive">
                <table class="table table-hover">
                  <thead>
                    <tr>
                      <th scope="col">Sr.no.</th>
                      <th scope="col">Name</th>
                      <th scope="col">Email</th>
                        <th scope="col">Created at</th>
                      <th scope="col">Action</th>
                    </tr>
                  </thead>
                  <tbody>
                  @foreach($records as $record)
                    <tr>
                      <td scope="row">{{$Sr++}}</td>
                      <td>
                        <div class='profile-image d-inline-flex gap-2 align-items-center'>
                          <img src="{{asset('storage/thumbnail/'.$record->image)}}" class="small-image" alt="avataar" />
                          <span>{{$record->name}}</span>
                        </div>
                      </td>
                      <td>{{$record->email}}</td>
                        <td>{{isset($record->created_at)?$record->created_at->format('d-M-Y '):$record->created_at}}</td>
                      <td>
                        <ul class='m-0 list-unstyled'>
                          <li>
                            <a href="{{route('admin.staff_show',$record->id)}}" class="action-btn">
                              <i class='bx bxs-show fs-5'></i>
                            </a>
                          </li>
                        </ul>
                      </td>
                    </tr>


                  @endforeach
                  </tbody>
                </table>


              </div>
               <div class="m-4 d-flex justify-content-center ">
                   {{ $records->links() }}
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
