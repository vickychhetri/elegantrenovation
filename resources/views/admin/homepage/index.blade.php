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

        <div class="row">
          <div class="col-md-12">
            <div class='common-card'>
              <div class='mb-4'>
                <nav style="--bs-breadcrumb-divider: url(&#34;data:image/svg+xml,%3Csvg xmlns='http://www.w3.org/2000/svg' width='8' height='8'%3E%3Cpath d='M2.5 0L1 1.5 3.5 4 1 6.5 2.5 8l4-4-4-4z' fill='%236c757d'/%3E%3C/svg%3E&#34;);"
                     aria-label="breadcrumb">
                  <ol class="breadcrumb mb-0">
                    <li class="breadcrumb-item"><a href="/">Management</a></li>
                    <li class="breadcrumb-item active" aria-current="page">Home Page</li>
                  </ol>
                </nav>
              </div>
              <!--  Title  -->
              <div class='mb-4 d-flex justify-content-between align-items-md-center gap-3 flex-column flex-sm-row'>
                <div>
                  <h4 class='m-0 lh-normal'>Home Page</h4>
                </div>
                <div>

                  <a href="{{route('admin.homepage_banner_add')}}" class="btn btn-primary">
                    Add Image
                  </a>
                </div>
              </div>
              <div class='card-form-wrapper'>

                  @foreach($banners as $banner)
                      <div class="cover-image-wrapper">

                          <img src="{{  route('image.displayImage',$banner->image) }}"class="img-fluid w-100" alt="banner-image">
                          <div class="cover-image-button mt-4">
                              <a href="{{route('admin.homepage_banner_edit',$banner->id)}}" class="btn btn-primary">
                                  Change Image
                              </a>
                          </div>

                      </div>
                @endforeach


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
