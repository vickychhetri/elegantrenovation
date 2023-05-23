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
                    <li class="breadcrumb-item"><a href="/homepage">Home Page</a></li>
                    <li class="breadcrumb-item active" aria-current="page">Edit Image</li>
                  </ol>
                </nav>
              </div>
              <!--  Title  -->
              <div class='mb-3 mb-md-4'>
                <div>
                  <h4 class='m-0 lh-normal'>Edit Image</h4>
                </div>

              </div>
                                  <a href="{{route('admin.homepage_banner_delete',$item->id)}}" class="btn btn-danger me-2" type="button">
                                    <i class="bx bxs-trash-alt fs-5"></i>
                                  </a>
              <div class='card-form-wrapper'>
                <form name="edit_profile" class="edit-profile-form" method="post" action="{{route('admin.homepage_banner_update',$item->id)}}" enctype="multipart/form-data">
                    @csrf
                <div class='upload-image my-4 cover-image-wrapper'>
                    <img src="{{  route('image.displayImage',$item->image) }}" alt="avataar" class='img-fluid w-100' id="output"/>

                    <div class="upload-image-field">
                      <input type="file" class="w-100 h-100 opacity-0" name="image" onchange="loadFile(event)"/>
                    </div>
                  </div>
                    <div class="form-group mb-3">
                        <input type="number" class="w-100 h-100 form-control border-1" name="order" value="{{$item->order}}"/>
                    </div>

                  <!-- Button -->
                  <button type="submit" class="btn btn-primary">
                    Save Changes
                  </button>
                </form>
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
