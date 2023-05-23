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
                    <li class="breadcrumb-item"><a href="/faq">FAQs</a></li>
                    <li class="breadcrumb-item active" aria-current="page">Edit FAQs</li>
                  </ol>
                </nav>
              </div>
              <!--  Title  -->
              <div class='mb-3 mb-md-4'>
                <div>
                  <h4 class='m-0 lh-normal'>Edit FAQs</h4>
                </div>
              </div>
              <div class='card-form-wrapper'>
                <form name="edit_profile" class="edit-profile-form" method="post" action="{{route('admin.faqupdate',$item->id)}}" >
                @csrf
                    @method('PUT')
                  <!-- Name -->
                  <div class="mb-3">
                    <label for="name">Question</label>
                    <input type="text" class="form-control" placeholder="Question"
                           value="{{$item->title}}" id="question" name="title" required />
                  </div>
                  <!-- Answer -->
                  <div class="mb-4">
                    <label for="name">Answer</label>
                    <textarea id="summernote" name="description">
                        {{$item->description}}
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
