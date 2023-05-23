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
                    <li class="breadcrumb-item active" aria-current="page">Notification</li>
                  </ol>
                </nav>
              </div>
              <!--  Title  -->
              <div class='mb-3 mb-md-4'>
                <div>
                  <h4 class='m-0 lh-normal'>Notification</h4>
                </div>
              </div>
              <div class='card-form-wrapper'>
                <form name="edit_profile" class="edit-profile-form">
                  <!-- Select users by emails -->
                  <div class="mb-3">
                    <label for="name">Select users by emails</label>
                    <div class="d-flex gap-3 align-items-md-center flex-column flex-sm-row">
                      <div class="form-check">
                        <input class="form-check-input" type="radio" name="userType" id="userType1">
                        <label class="form-check-label mb-0 ms-1" for="userType1">
                          All Users
                        </label>
                      </div>
                      <div class="form-check">
                        <input class="form-check-input" type="radio" name="userType" id="userType2" checked>
                        <label class="form-check-label mb-0 ms-1" for="userType2">
                          Only Selcted Users
                        </label>
                      </div>
                    </div>
                  </div>
                  <!-- Select notification type -->
                  <div class="mb-3">
                    <label for="name">Select notification type</label>
                    <div class="d-flex gap-3 align-items-center">
                      <div class="form-check">
                        <input class="form-check-input" type="radio" name="notificationType" id="notificationType1">
                        <label class="form-check-label mb-0 ms-1" for="notificationType1">
                          Push
                        </label>
                      </div>
                      <div class="form-check">
                        <input class="form-check-input" type="radio" name="notificationType" id="notificationType2"
                               checked>
                        <label class="form-check-label mb-0 ms-1" for="notificationType2">
                          Email
                        </label>
                      </div>
                    </div>
                  </div>
                  <!-- Subject -->
                  <div class="mb-3">
                    <label for="name">Subject</label>
                    <input type="text" class="form-control" placeholder="Subject" value="" id="Subject" required />
                  </div>
                  <!-- description -->
                  <div class="mb-4">
                    <label for="name">Description</label>
                    <textarea id="summernote">
                    </textarea>
                  </div>
                  <!-- Button -->
                  <button type="submit" class="btn btn-primary">
                    Send Notification
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