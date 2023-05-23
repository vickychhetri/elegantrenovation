@include('admin.layouts.app')
<section class="not-found-page vh-100 d-flex justify-content-center align-items-center">
  <div class="container">
    <div class="row">
      <div class="col-md-12">
        <div class="not-found-wrapper text-center">
          <img src="{{asset('images/403.svg')}}" alt="404" class="img-fluid">
          <h4 class="m-0 mt-5 mb-3">Access Denied</h4>
          <p class="m-0 mb-1 text-grey-dark">You do not have permission to view this page.</p>
          <p class="m-0 mb-3 text-grey-dark">Please check your credentials and try again.</p>
          <a href="/dashboard" class="btn btn-primary">Back To Dashboard</a>
        </div>
      </div>
    </div>
  </div>
</section>
@include('admin.layouts.script')