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
                    <li class="breadcrumb-item"><a href="/homepage">Terms & Conditions</a></li>
                    <li class="breadcrumb-item active" aria-current="page">Edit</li>
                  </ol>
                </nav>
              </div>
              <!--  Title  -->
              <div class='mb-3 mb-md-4'>
                <div>
                  <h4 class='m-0 lh-normal'>Edit Terms & Conditions</h4>
                </div>
              </div>
              <div class='card-form-wrapper'>
                <form name="edit_profile" class="edit-profile-form">
                  <div class='upload-image my-4 cover-image-wrapper'>
                    <img src="{{asset('images/homepage.png')}}" alt="avataar" class='img-fluid w-100' />
                    <div class="upload-image-field">
                      <input type="file" class="w-100 h-100 opacity-0" />
                    </div>
                  </div>
                  <!-- description -->
                  <div class="mb-4">
                    <label for="name">Description</label>
                    <textarea id="summernote"><p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Porro nulla minus repellat nesciunt maiores eos asperiores ducimus incidunt libero dolore quam qui accusantium at quos consequuntur iusto, in quis reprehenderit dolorem architecto earum itaque eveniet alias. Accusantium voluptatem distinctio at mollitia quibusdam voluptates praesentium commodi qui dolores perspiciatis, excepturi veritatis vitae aut itaque debitis eius est. Cum, ducimus et! Eaque ut error facere quis culpa consequuntur doloribus accusantium provident et officiis dolorum quidem iure vitae fuga molestiae laboriosam debitis beatae delectus fugiat suscipit corporis quia, atque eveniet. Consectetur voluptate maxime nam illum repellat laboriosam deserunt ducimus doloribus recusandae laborum voluptatem beatae eaque neque, iste laudantium architecto ea pariatur mollitia itaque totam nobis quisquam. Veritatis, qui maxime quibusdam cum quae enim nobis. Tenetur enim fugiat officiis voluptatibus ratione odit odio aut eum nobis natus quia quidem maxime, perspiciatis, consectetur quam sed commodi? Repudiandae, pariatur quae alias aperiam praesentium dolorem quia amet.</p>
                    </textarea>
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