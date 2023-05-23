@include('admin.layouts.app')


<div class="main-layout">
  <!-- Sidebar  -->
  @include('admin.layouts.sidebar')
  <!-- Header Page Footer  -->
  <div class="header-page-footer">
    <!-- Header  -->
    @include('admin.layouts.header')
    <!-- Section  -->
    <section class="faq-page">
      <div class="container-fluid">
        <!--  Title  -->
        <div class="row mb-4">
          <div class="col-md-12">
            <div class='breadcrum-title mb-4'>
              <nav style="--bs-breadcrumb-divider: url(&#34;data:image/svg+xml,%3Csvg xmlns='http://www.w3.org/2000/svg' width='8' height='8'%3E%3Cpath d='M2.5 0L1 1.5 3.5 4 1 6.5 2.5 8l4-4-4-4z' fill='%236c757d'/%3E%3C/svg%3E&#34;);"
                   aria-label="breadcrumb">
                <ol class="breadcrumb mb-0">
                  <li class="breadcrumb-item"><a href="{{route('admin.dashboard')}}">Management</a></li>
                  <li class="breadcrumb-item"><a href="{{route('admin.product.index')}}">Products</a></li>
                  <li class="breadcrumb-item active" aria-current="page">New Product</li>
                </ol>
              </nav>
            </div>
            <div>
              <h4 class='m-0 lh-normal'>New Product</h4>
            </div>
          </div>
        </div>

        <!-- Form  -->
        <form class="row" method="post" action="{{route('admin.product.store')}}" enctype="multipart/form-data">
            @csrf
          <div class="col-xl-8 col-md-9">
            <div class='common-card'>
              <div class='card-form-wrapper'>
                <!-- Product name -->
                <div class="mb-3">
                  <label for="name">Product name</label>
                  <input type="text" name="title" class="form-control" placeholder="Enter product name" value="" id="Product name"
                         required />
                </div>
                <!-- Category -->
                {{-- <div class="mb-3">
                  <label for="name">Category</label>
                  <select class="form-select" aria-label="Default select example">
                    <option selected>Category-1</option>
                    <option value="1">Category-2</option>
                    <option value="2">Category-3</option>
                    <option value="3">Category-4</option>
                  </select>
                </div> --}}
                <!-- Description -->
                <div class="mb-4">
                  <label for="name">Description</label>
                  <textarea id="summernote" name="description">
                  </textarea>
                </div>
                <!-- Images -->
                <div class="row">
                  <div class="col-md-12">
                    <label for="name">Images</label>
                  </div>
                  <div class="col-md-12">
                    <div class="upload-file-wrapper d-flex p-4 flex-column flex-sm-row">
                      <div class="upload-file-box p-4">
                        <div class='w-100 h-100 position-relative'>
                          <input type="file" class='w-100 h-100 opacity-0' name="image" />
                          <div class='upload-button-box position-absolute text-center'>
                            <button class='btn btn-primary' type='button'>
                              <i class="bx bx-plus fs-5 align-middle"></i> <span>Upload File</span>
                            </button>
                            <p class='m-0 mt-2 text-dark-grey'>Or drop image in box</p>
                          </div>
                        </div>
                      </div>
                      <div class="supported-file-box p-4">
                        <div>
                          <p class='m-0 mb-1 text-dark-grey'>Supported formats:</p>
                          <div class='d-inline-flex gap-1 w-100'>
                            <span class='px-2 py-1 text-dark-grey'>jpg</span>
                            <span class='px-2 py-1 text-dark-grey'>png</span>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="col-xl-4 col-md-3">
            <div class='common-card'>
              <!-- Regular price -->
              <div class="mb-3">
                <label for="name">Regular price</label>
                <input type="number" name="price" class="form-control" placeholder="Regular price" value="" id="regular-price"
                       required />
              </div>
              <!-- Sale price -->
              <div class="mb-4">
                <label for="name">Sale price</label>
                <input type="number" name="sale_price" class="form-control" placeholder="Sale price" value="" id="sale-price" required />
              </div>
              <!-- Button -->
              <div>
                <button type="submit" class="btn btn-primary w-100">
                  Add Product
                </button>
              </div>
            </div>
          </div>
        </form>
      </div>
    </section>
    <!-- footer  -->
    @include('admin.layouts.footer')
  </div>
</div>

@include('admin.layouts.script')
