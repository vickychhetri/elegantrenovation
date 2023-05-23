@include('admin.layouts.app')

<div class="main-layout">
  <!-- Sidebar  -->
  @include('admin.layouts.sidebar')
  <!-- Header Page Footer  -->
  <div class="header-page-footer">
    <!-- Header  -->
    @include('admin.layouts.header')
    <!-- Section  -->
    <section class="database-page">
      <div class="container-fluid">
        <div class="row">
          <div class="col-sm-8 col-md-8 col-lg-6 col-xl-5 col-xxl-4">
            <div class='common-card'>
              <div class='mb-4'>
                <nav style="--bs-breadcrumb-divider: url(&#34;data:image/svg+xml,%3Csvg xmlns='http://www.w3.org/2000/svg' width='8' height='8'%3E%3Cpath d='M2.5 0L1 1.5 3.5 4 1 6.5 2.5 8l4-4-4-4z' fill='%236c757d'/%3E%3C/svg%3E&#34;);"
                     aria-label="breadcrumb">
                  <ol class="breadcrumb mb-0">
                    <li class="breadcrumb-item"><a href="/">Management</a></li>
                    <li class="breadcrumb-item active" aria-current="page">DB Backup</li>
                  </ol>
                </nav>
              </div>
              <!--  Title  -->
              <div class='mb-3 mb-md-4'>
                <div>
                  <h4 class='m-0 lh-normal'>DB Backup</h4>
                </div>
              </div>
              <div class="database-wrapper">
                <div class='card-content-wrapper'>
                  <p>If you click on Download, Database will be downloaded.</p>
                  <p><span>Db MySql file:</span> <a href="{{route('admin.db.backup.download')}}" class="btn btn-primary ms-1" type='button'>Download</a></p>
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
