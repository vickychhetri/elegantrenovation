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
        <!-- Title Search and Button  -->
        <div class="row">
          <div class="col-md-12">
            <div class='common-transparent-card'>
              <div class='mb-4'>
                <nav style="--bs-breadcrumb-divider: url(&#34;data:image/svg+xml,%3Csvg xmlns='http://www.w3.org/2000/svg' width='8' height='8'%3E%3Cpath d='M2.5 0L1 1.5 3.5 4 1 6.5 2.5 8l4-4-4-4z' fill='%236c757d'/%3E%3C/svg%3E&#34;);"
                     aria-label="breadcrumb">
                  <ol class="breadcrumb mb-0">
                    <li class="breadcrumb-item"><a href="{{route('admin.dashboard')}}">General</a></li>
                    <li class="breadcrumb-item active" aria-current="page">Products</li>
                  </ol>
                </nav>
              </div>
              <!--  Title  -->
              <div class='mb-4 d-flex justify-content-between align-items-center'>
                <div>
                  <h4 class='m-0 lh-normal'>Products</h4>
                </div>
                <div>
                  <div class="btn-group me-2" role="group">
                    <button type="button" class="btn btn-primary">Grid</button>
                    <button type="button" class="btn btn-outline-primary">Table</button>
                  </div>
                  <a class="btn btn-primary me-1" href="{{route('admin.product.create')}}">
                    <i class="bx bx-plus fw-bold align-middle fs-5 align-bottom"></i> <span>New Product</span>
                  </a>
                  <button class="btn btn-primary">
                    <i class="bx bxs-cloud-upload fs-5 align-bottom"></i> <span>Export</span>
                  </button>
                </div>
              </div>
              <!--  Search Field  -->
              <div class="d-flex gap-3 align-items-center">
                <div class="input-group">
                  <span class="input-group-text" id="Email">
                    <i class='bx bx-search text-black'></i>
                  </span>
                  <input type="search" class="form-control ps-0" placeholder="Search" aria-label="Search"
                         aria-describedby="Search">
                </div>

                <div class="filter-button-wrapper d-flex gap-2 align-items-center">
                  <div class="dropdown">
                    <button class="btn btn-outline-secondary dropdown-toggle" type="button" data-bs-toggle="dropdown"
                            aria-expanded="false">
                      <span>Category</span>
                    </button>
                    <ul class="dropdown-menu">
                      <li><button class="reset-btn px-3 pb-1" type="button">Category-1</button></li>
                      <li><button class="reset-btn px-3 pb-1" type="button">Category-2</button></li>
                      <li><button class="reset-btn px-3" type="button">Category-3</button></li>
                    </ul>
                  </div>
                  <div class="dropdown">
                    <button class="btn btn-outline-secondary dropdown-toggle" type="button" data-bs-toggle="dropdown"
                            aria-expanded="false">
                      <span>Price</span>
                    </button>
                    <ul class="dropdown-menu">
                      <li><button class="reset-btn px-3 pb-1" type="button">Price-1</button></li>
                      <li><button class="reset-btn px-3 pb-1" type="button">Price-2</button></li>
                      <li><button class="reset-btn px-3" type="button">Price-3</button></li>
                    </ul>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <!-- Grid Layout  -->
        <div class="row my-4 gy-4 justify-content-center justify-content-sm-start">

            @foreach ($products as $product)
            <div class="col-11 col-sm-6 col-md-4 col-lg-3 col-xl-3 col-xxl-3">
                <div class="product-card d-flex flex-column h-100">
                  <div class="product-card-image">
                    <img src="{{ $product->image!=null?route('image.displayImage',$product->image):"#"}}" class="img-fluid w-100" alt="product-image" />
                  </div>
                  <div class="product-card-content py-3">
                    <h6 class="text-truncate m-0 lh-normal mb-2">{{$product->title}}</h6>
                    <p class="lh-normal m-0"><strong>${{$product->price}}</strong></p>
                  </div>
                  <div class="card-button-footer mt-auto">
                    <ul class="list-unstyled mb-0 d-flex gap-2">
                      <li class="flex-grow-1"><a href="{{route('admin.product.show', $product->id)}}" class="btn btn-primary w-100">
                          <i class='bx bxs-show fs-5 align-middle'></i> <span>View</span>
                        </a>
                      </li>
                      <li class="flex-grow-1"><a href="{{route('admin.product.edit', $product->id)}}" class="btn btn-outline-primary w-100">
                          <i class='bx bxs-pencil fs-5 align-middle'></i> <span>Edit</span>
                        </a>
                      </li>
                    </ul>
                  </div>
                </div>
              </div>
            @endforeach

        <!-- Pagination  -->
        <div class="row">
          <div class="col-md-12">
            <div class="pagination-wrapper">
              <nav aria-label="Page navigation example">
                <ul class="pagination justify-content-center gap-3">
                  <li class="page-item bg-transparent">
                    <a class="page-link bg-transparent border-0 back-next" href="#" aria-label="Previous">
                      <span aria-hidden="true" class="fs-3">&lsaquo;</span>
                    </a>
                  </li>
                  <li class="page-item"><a class="page-link" href="#">1</a></li>
                  <li class="page-item active"><a class="page-link" href="#">2</a></li>
                  <li class="page-item"><a class="page-link" href="#">3</a></li>
                  <li class="page-item bg-transparent">
                    <a class="page-link bg-transparent border-0 back-next" href="#" aria-label="Next">
                      <span aria-hidden="true" class="fs-3">&rsaquo;</span>
                    </a>
                  </li>
                </ul>
              </nav>
            </div>
          </div>
        </div>
        <!-- Table Layout  -->
        {{-- <div class="row my-4">
          <div class="col-md-12">
            <div class="common-card">
              <div class="mb-4">
                <h4 class='m-0 lh-normal'>Products Listing</h4>
              </div>
              <!--  Table  -->
              <div class="table-wrapper table-responsive">
                <table class="table table-hover">
                  <thead>
                    <tr>
                      <th scope="col">Sr.no.</th>
                      <th scope="col">Name</th>
                      <th scope="col">Price</th>
                      <th scope="col">Action</th>
                    </tr>
                  </thead>
                  <tbody>
                    <tr>
                      <td scope="row">1</td>
                      <td>
                        <div class='profile-image d-inline-flex gap-2 align-items-center'>
                          <img src="{{asset('images/product-1.png')}}" class="small-image" alt="avataar" />
                          <span>Product Title</span>
                        </div>
                      </td>
                      <td>$10.00</td>
                      <td>
                        <ul class='m-0 list-unstyled d-flex gap-2'>
                          <li>
                            <a href="/product/view" class="action-btn">
                              <i class='bx bxs-show fs-5'></i>
                            </a>
                          </li>
                          <li>
                            <a href="/product/edit" class="action-btn">
                              <i class='bx bxs-pencil fs-5'></i>
                            </a>
                          </li>
                        </ul>
                      </td>
                    </tr>
                  </tbody>
                </table>
              </div>
            </div>
          </div>
        </div> --}}
      </div>
    </section>
    <!-- footer  -->
    @include('admin.layouts.footer')
  </div>
</div>

@include('admin.layouts.script')
