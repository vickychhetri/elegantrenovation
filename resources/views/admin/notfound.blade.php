@include('admin.layouts.app')
<section class="not-found-page vh-100 d-flex justify-content-center align-items-center">
  <div class="container">
    <div class="row">
      <div class="col-md-12">
        <div class="not-found-wrapper text-center">
          <img src="{{asset('images/404.svg')}}" alt="404" class="img-fluid">
          <h4 class="m-0 mt-5 mb-3">Sorry, There’s Nothing Here...</h4>
          <p class="m-0 mb-3 text-grey-dark">Uh no, we can’t seem to find the page you’re looking for.</p>
          <a href="/dashboard" class="btn btn-primary">Back To Dashboard</a>
        </div>
      </div>
    </div>
  </div>
</section>
@include('admin.layouts.script')