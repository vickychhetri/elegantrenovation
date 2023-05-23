@include('admin.layouts.app')
<div class="main-layout">
  <!-- Sidebar  -->
  @include('admin.layouts.sidebar')
  <!-- Header Page Footer  -->
  <div class="header-page-footer">
    <!-- Header  -->
    @include('admin.layouts.header')
    <!-- Section  -->
    <section class="contact-page">
      <div class="container-fluid">
        <div class="row">
          <div class="col-md-12">
            <div class='common-card'>
              <div class='mb-4'>
                <nav style="--bs-breadcrumb-divider: url(&#34;data:image/svg+xml,%3Csvg xmlns='http://www.w3.org/2000/svg' width='8' height='8'%3E%3Cpath d='M2.5 0L1 1.5 3.5 4 1 6.5 2.5 8l4-4-4-4z' fill='%236c757d'/%3E%3C/svg%3E&#34;);"
                     aria-label="breadcrumb">
                  <ol class="breadcrumb mb-0">
                    <li class="breadcrumb-item"><a href="/">Management</a></li>
                    <li class="breadcrumb-item active" aria-current="page">Contact</li>
                  </ol>
                </nav>
              </div>
              <!--  Title  -->
              <div class='mb-4 d-flex justify-content-between align-items-center'>
                <div>
                  <h4 class='m-0 lh-normal'>Contact</h4>
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
                <input type="search" class="form-control ps-0" placeholder="Search" aria-label="Search"
                       aria-describedby="Search">
              </div>
              <!--  Table  -->
              <div class="table-wrapper table-responsive">
                <table class="table table-hover">
                  <thead>
                    <tr>
                      <th scope="col">Sr.no.</th>
                      <th scope="col">Name</th>
                      <th scope="col">Email</th>
                      <th scope="col">Phone No.</th>
                      <th scope="col">Message</th>
                      <th scope="col">Status</th>
                      <th scope="col">Action</th>
                    </tr>
                  </thead>
                  <tbody>
                  @forelse($records as $item)
                    <tr>
                      <td scope="row">{{$Sr++}}</td>
                      <td>
                        <div class='profile-image d-inline-flex gap-2 align-items-center'>
                          <span>{{$item->name}}</span>
                        </div>
                      </td>
                      <td>{{$item->email}}</td>
                      <td>{{$item->phone}}</td>
                      <td class="text-truncate">{{$item->message}}.</td>
                      <td>{{$item->status}}</td>
                      <td>
                        <button class="action-btn" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                          <i class='bx bx-dots-vertical-rounded fs-5'></i>
                        </button>
                        <ul class="dropdown-menu py-3">
                          <li class="position-relative">
                            <ul class="reset-btn pb-2 w-100 d-inline-block cascaded-dropdown position-relative">
                              <span class="px-3" onclick="subDropDown()" id="cascadedDropdown">Change Status <i
                                   class='bx bx-chevron-right fs-5 align-middle'></i></span>
                              <ul class="sub-dropdown-menu list-unstyled mb-0">
                                <li>
                                  <button class="reset-btn pb-2 w-100 d-inline-block dropdown-item">Resolved</button>
                                </li>
                                <li> <button class="reset-btn pb-2 w-100 d-inline-block">Pending</button>
                                </li>
                              </ul>
                            </ul>

                          </li>
                          <li><a href="{{route('admin.contactus_delete',$item->id)}}" class="reset-btn px-3 w-100 d-inline-block text-start">Delete</a>
                          </li>
                        </ul>
                      </td>
                    </tr>


                  @empty
                        <tr> <td colspan="5"> <span class="text-danger"> No Records</span> </td></tr>
                  @endforelse
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

      <script>
          @if (session()->has('success'))
          Toastify({
              text: "{{ session('success') }}",
              duration: 3000,
              className: "info",
              destination: "#",
              newWindow: true,
              close: true,
              gravity: "top", // `top` or `bottom`
              position: "center", // `left`, `center` or `right`
              stopOnFocus: true, // Prevents dismissing of toast on hover
              style: {
                  background: "linear-gradient(to right, #00b09b, #96c93d)",
              },
              onClick: function(){} // Callback after click
          }).showToast();

          @endif

          @if (session()->has('error'))
          Toastify({
              text: "{{ session('error') }}",
              duration: 3000,
              className: "info",
              destination: "#",
              newWindow: true,
              close: true,
              gravity: "top", // `top` or `bottom`
              position: "center", // `left`, `center` or `right`
              stopOnFocus: true, // Prevents dismissing of toast on hover
              style: {
                  background: "red",
                  color:"white",
              },
              onClick: function(){} // Callback after click
          }).showToast();

          @endif
      </script>
    <!-- footer  -->
    @include('admin.layouts.footer')
  </div>
</div>


@include('admin.layouts.script')
