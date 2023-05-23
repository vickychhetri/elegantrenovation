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
                    <li class="breadcrumb-item"><a href="/about-us">About Us</a></li>
                    <li class="breadcrumb-item active" aria-current="page">Edit</li>
                  </ol>
                </nav>
              </div>
              <!--  Title  -->
              <div class='mb-3 mb-md-4'>
                <div>
                  <h4 class='m-0 lh-normal'>Edit About Us</h4>
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
                    <textarea id="summernote"><p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Nisi fugiat hic rem dolore velit expedita dolor perferendis ipsam. Distinctio soluta repellendus aspernatur vero illum voluptates accusantium, ducimus necessitatibus eveniet fugit magnam recusandae obcaecati, modi doloremque facilis quo molestias illo odit? Eos voluptates maiores, consectetur aliquam minus commodi quasi, cupiditate officia earum temporibus hic tempore quod omnis sint suscipit? Ex ad unde reiciendis perferendis. Sint dignissimos quia repudiandae nobis, laborum eligendi? Necessitatibus cum minima ad minus quos quam cumque libero odit dicta asperiores quidem, tempore doloribus ratione odio! Sit amet alias, quibusdam veniam debitis consectetur sunt sapiente vitae. Itaque accusantium delectus velit. Ullam quia eos nam obcaecati, hic est distinctio nobis corrupti ea quis fugiat placeat saepe nesciunt delectus possimus incidunt deserunt praesentium vero dolore rerum tempore at minima doloribus iure! Asperiores deserunt commodi debitis unde ab id, suscipit quasi iste obcaecati! Impedit ea harum natus provident sequi, eius hic placeat?</p>
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