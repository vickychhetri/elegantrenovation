@include('admin.layouts.app')


<div class="main-layout">
  <!-- Sidebar  -->
  @include('admin.layouts.sidebar')
  <!-- Header Page Footer  -->
  <div class="header-page-footer">
    <!-- Header  -->
    @include('admin.layouts.header')
    <!-- Section  -->
    <section class="content-pages">
      <div class="container-fluid">

        <div class="row">
          <div class="col-md-12">
            <div class='common-card'>
              <div class='mb-4'>
                <nav style="--bs-breadcrumb-divider: url(&#34;data:image/svg+xml,%3Csvg xmlns='http://www.w3.org/2000/svg' width='8' height='8'%3E%3Cpath d='M2.5 0L1 1.5 3.5 4 1 6.5 2.5 8l4-4-4-4z' fill='%236c757d'/%3E%3C/svg%3E&#34;);"
                     aria-label="breadcrumb">
                  <ol class="breadcrumb mb-0">
                    <li class="breadcrumb-item"><a href="/">Management</a></li>
                    <li class="breadcrumb-item active" aria-current="page">Terms & Conditions</li>
                  </ol>
                </nav>
              </div>
              <!--  Title  -->
              <div class='mb-4 d-flex justify-content-sm-between align-items-sm-center gap-3 flex-column flex-sm-row'>
                <div>
                  <h4 class='m-0 lh-normal'>Terms & Conditions</h4>
                </div>
                <div class="d-flex">
                  <button class="btn btn-danger me-2" type="button">
                    <i class="bx bxs-trash-alt fs-5"></i>
                  </button>
                  <a href="/terms-condition/add" class="btn btn-primary me-2">
                    <i class="bx bx-plus fw-bold fs-5 align-bottom"></i>Add
                  </a>
                  <a href="/terms-condition/edit" class="btn btn-primary">
                  <i class="bx bx-edit fw-bold fs-5 align-bottom"></i>
                    Edit
                  </a>
                </div>
              </div>
              <div class='card-form-wrapper'>
                <div class="cover-image-wrapper">
                  <img src="{{asset('images/homepage.png')}}" class="img-fluid w-100" alt="banner-image">
                  <div class="page-content mt-4">
                    <h5 class='m-0 mb-2'>Heading 1</h5>
                    <p class='m-0 mb-2'>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Suspendisse sem massa,
                      scelerisque vel lobortis nec, luctus ac eros. Mauris bibendum scelerisque erat non maximus.
                      Maecenas dignissim bibendum ante in ullamcorper. Donec fringilla elit eget dictum porta. Nam
                      euismod quam eget enim aliquet, placerat accumsan tellus pellentesque. Proin aliquet orci
                      porttitor ante pharetra placerat. Vestibulum dictum viverra augue, nec cursus leo placerat in.
                      Donec nec risus non dui semper egestas a nec nibh. Pellentesque mollis cursus metus eu tempor.</p>
                    <p class="mb-3">Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis
                      egestas.
                      Duis auctor odio nec lobortis ornare. Nullam et egestas purus, eleifend pretium enim. Ut blandit
                      magna vitae augue gravida, ac sagittis tortor lobortis. Nulla in mattis orci. Phasellus imperdiet
                      facilisis erat a suscipit. Vivamus eu orci sed tortor porttitor pulvinar faucibus id lectus.
                      Praesent ex arcu, malesuada ut dui sit amet, facilisis malesuada magna. In eu diam pharetra,
                      ultricies ipsum vitae, hendrerit ante.</p>
                    <h5 class='m-0 mb-2'>Heading 2</h5>
                    <p class='m-0 mb-2'>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Suspendisse sem massa,
                      scelerisque vel lobortis nec, luctus ac eros. Mauris bibendum scelerisque erat non maximus.
                      Maecenas dignissim bibendum ante in ullamcorper. Donec fringilla elit eget dictum porta. Nam
                      euismod quam eget enim aliquet, placerat accumsan tellus pellentesque. Proin aliquet orci
                      porttitor ante pharetra placerat. Vestibulum dictum viverra augue, nec cursus leo placerat in.
                      Donec nec risus non dui semper egestas a nec nibh. Pellentesque mollis cursus metus eu tempor.</p>
                    <p class='m-0'>Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis
                      egestas. Duis auctor odio nec lobortis ornare. Nullam et egestas purus, eleifend pretium enim. Ut
                      blandit magna vitae augue gravida, ac sagittis tortor lobortis. Nulla in mattis orci. Phasellus
                      imperdiet facilisis erat a suscipit. Vivamus eu orci sed tortor porttitor pulvinar faucibus id
                      lectus. Praesent ex arcu, malesuada ut dui sit amet, facilisis malesuada magna. In eu diam
                      pharetra, ultricies ipsum vitae, hendrerit ante.</p>
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