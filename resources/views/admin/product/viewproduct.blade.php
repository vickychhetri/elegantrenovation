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
                    <div class="col-md-8 col-xl-9">
                        <div class='breadcrum-title mb-4'>
                            <nav style="--bs-breadcrumb-divider: url(&#34;data:image/svg+xml,%3Csvg xmlns='http://www.w3.org/2000/svg' width='8' height='8'%3E%3Cpath d='M2.5 0L1 1.5 3.5 4 1 6.5 2.5 8l4-4-4-4z' fill='%236c757d'/%3E%3C/svg%3E&#34;);"
                                aria-label="breadcrumb">
                                <ol class="breadcrumb mb-0">
                                    <li class="breadcrumb-item"><a href="{{ route('admin.dashboard') }}">Management</a>
                                    </li>
                                    <li class="breadcrumb-item"><a
                                            href="{{ route('admin.product.index') }}">Products</a></li>
                                    <li class="breadcrumb-item active" aria-current="page">Product 1</li>
                                </ol>
                            </nav>
                        </div>
                        <!--  Title  -->
                        <div class='mb-3 d-flex justify-content-between align-items-center gap-3'>
                            <div>
                                <h4 class='m-0 lh-normal'>{{ $product->title }}</h4>
                            </div>
                            <div class="d-inline-flex gap-2">
                                <button class="btn btn-danger" type="button">
                                    <i class="bx bxs-trash-alt fs-5"></i>
                                </button>
                                <a href="/about-us/edit" class="btn btn-primary">
                                    <i class="bx bxs-pencil fs-5"></i>
                                </a>
                                <a href="/about-us/add" class="btn btn-primary">
                                    Save Product
                                </a>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Form  -->
                <div class="row">
                    <div class="col-xl-9 col-md-8">
                        <!-- images  -->
                        <div class='common-card mb-3'>
                            <form action="" class="row gy-3">
                                <div class="col-md-4">
                                    <div class="product-cover-wrapper h-100">
                                        <img  src="{{ $product->image!=null?route('image.displayImage',$product->image):"#"}}"  class="img-fluid w-100"
                                            alt="product-image">
                                        <div>
                                            <!-- delete button  -->
                                            <div class="delete-cover-image">
                                                <button type="button" class="btn wh-square rounded-circle">
                                                    <i class="bx bxs-trash-alt text-danger fs-5"></i>
                                                </button>
                                            </div>
                                            <!-- image upload  -->
                                            <div class="cover-image-upload">
                                                <div class="position-absolute top-0 start-0 end-0 bottom-0 m-auto">
                                                    <input type="file" class="w-100 h-100 opacity-0">
                                                </div>
                                                <button class="btn btn-primary">
                                                    Change Cover</button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-8">
                                    <div class="product-images-wrapper d-flex gap-3 flex-wrap w-100 h-100">
                                        <div class="product-image-wrapper">
                                            <img src="{{ asset('images/product-image.png') }}" class="img-fluid w-100"
                                                alt="product-image">
                                        </div>
                                        <div class="product-image-wrapper">
                                            <img src="{{ asset('images/product-image.png') }}" class="img-fluid w-100"
                                                alt="product-image">
                                        </div>
                                        <div class="product-image-wrapper">
                                            <img src="{{ asset('images/product-image.png') }}" class="img-fluid w-100"
                                                alt="product-image">
                                        </div>
                                        <div class="product-image-wrapper">
                                            <img src="{{ asset('images/product-image.png') }}" class="img-fluid w-100"
                                                alt="product-image">
                                        </div>
                                        <div class="product-image-wrapper">
                                            <img src="{{ asset('images/product-image.png') }}" class="img-fluid w-100"
                                                alt="product-image">
                                        </div>
                                        <div class="product-image-wrapper">
                                            <img src="{{ asset('images/product-image.png') }}" class="img-fluid w-100"
                                                alt="product-image">
                                        </div>
                                        <div class="product-image-wrapper">
                                            <img src="{{ asset('images/product-image.png') }}" class="img-fluid w-100"
                                                alt="product-image">
                                        </div>
                                        <div class="product-image-wrapper position-relative z-1">
                                            <div class="position-absolute top-0 start-0 w-100 h-100 m-auto">
                                                <input type="file" class="w-100 h-100 opacity-0">
                                            </div>
                                            <button
                                                class="reset-btn fw-semibold text-light-grey d-inline-flex justify-content-center align-items-center flex-column h-100 w-100"><i
                                                    class="bx bx-plus fs-5 fw-bold"></i>
                                                <span>Upload</span></button>
                                        </div>
                                    </div>
                                </div>
                            </form>
                        </div>
                        <!-- general Info  -->
                        <div class='common-card mb-3'>
                            <!--  Title  -->
                            <div class="mb-3">
                                <h5 class='m-0'>General Info</h5>
                            </div>
                            <!--  Form Card  -->
                            <div class='card-form-wrapper'>
                                <!-- Product name -->
                                <div class="mb-3">
                                    <label for="name">Product name</label>
                                    <input type="text" class="form-control" placeholder="Enter the Name"
                                        value="{{ $product->title }}" id="name" readonly />
                                </div>
                                <!-- Email -->
                                {{-- <div class="mb-3">
                  <label for="name">Category</label>
                  <input type="email" class="form-control" placeholder="Enter the Email" value="Category" id="email"
                         required readonly />
                </div> --}}
                                <!-- Mobile -->
                                <div class="mb-4">
                                    <label for="name">Description (optional)</label>
                                    <textarea id="summernote"><p>{{ $product->description }}</p>
                  </textarea>
                                </div>
                            </div>
                        </div>

                        <!-- Pricing  -->
                        <div class='common-card'>
                            <div class="mb-3">
                                <h5 class='m-0'>Pricing</h5>
                            </div>
                            <!--  Form Card  -->
                            <div class='card-form-wrapper'>
                                <!-- Product pricing -->
                                <div class="mb-3">
                                    <label for="price">Product pricing</label>
                                    <input type="text" class="form-control" placeholder="Product pricing"
                                        value="${{ $product->price }}" id="name" readonly />
                                </div>
                                <!-- Email -->
                                <div class="mb-3">
                                    <label for="discount">Sale Price</label>
                                    <input type="email" class="form-control" placeholder="Discount"
                                        value="${{ $product->sale_price }}" id="email" required readonly />
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-xl-3 col-md-4">
                        <div class='common-card mb-3'>
                            <div class="mb-3">
                                <h5 class='m-0'>Visibility</h5>
                                <p>Setup product visibility for the customers.</p>
                            </div>
                            <!--  Form Card  -->
                            <meta name="csrf-token" content="{{ csrf_token() }}" />
                            <input type="hidden" id="productId" value="{{ $product->id }}">
                            <div class='visibility-wrapper p-3 d-flex align-items-center justify-content-between'>
                                <div class="d-flex align-items-center gap-2">
                                    <span class="visible-tag"> <i
                                            class="bx bxs-show fs-5 bg-primary text-white"></i></span>
                                    <label for="visibility-switch" class="m-0 lh-normal text-primary">Visible</label>
                                </div>
                                <div class="form-check form-switch">
                                    <input class="form-check-input" type="checkbox" role="switch"
                                        id="visibility-switch" checked>
                                </div>
                            </div>
                        </div>
                        <div class='common-card mb-3'>
                            <div class="mb-3">
                                <h5 class='m-0'>Preview</h5>
                                <p>See the preview of the product in the
                                    same way, user will see the product in
                                    market.</p>
                            </div>
                            <!--  Form Card  -->
                            <div>
                                <a href="" class="btn btn-outline-primary w-100">See Preview</a>
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

<script>
    $('#visibility-switch').on('click', function() {
        if ($(this).prop("checked") == true) {
            var checked = true;

        } else if ($(this).prop("checked") == false) {
            var checked = false;

        }
        var headers = {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        };
        var data = {

            'id': $('#productId').val(),
            "status": checked

        };
        $.ajax({
               type:'POST',
               url:'{{route('admin.product.visibility')}}',
               headers: headers,
               data:data,
               success:function(data) {
                //
                }
        });
    });
</script>
