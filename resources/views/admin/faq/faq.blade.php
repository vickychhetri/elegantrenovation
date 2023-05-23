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
                    <li class="breadcrumb-item active" aria-current="page">FAQs</li>
                  </ol>
                </nav>
              </div>
              <!--  Title  -->
              <div class='mb-3 mb-md-4'>
                <div>
                  <h4 class='m-0 lh-normal'>FAQs</h4>
                </div>
              </div>
              <!--  Search Field and Add button  -->
              <div class="d-flex gap-3 align-items-md-center mb-4 flex-column flex-md-row">
                <div class="input-group">
                  <span class="input-group-text" id="Email">
                    <i class='bx bx-search text-black'></i>
                  </span>
                  <input type="search" class="form-control ps-0" placeholder="Search" aria-label="Search"
                         aria-describedby="Search">
                </div>
                <div>
                  <a class="btn btn-primary d-inline-flex gap-1 align-items-center text-nowrap" href="{{route('admin.faqadd')}}">
                    <i class="bx bx-plus fs-5 fw-bold"></i> <span>Add FAQ</span>
                  </a>
                </div>
              </div>
              <!--  Faq  -->
              <div class="faq-wrapper">
                <div class="accordion" id="dashboardFaq">

                    @forelse($records as $item)
                  <!-- 1  -->
                  <div class="accordion-item">
                    <h2 class="accordion-header lh-normal position-relative position-relative" id="headingfaq{{$item->id}}">
                      <button class="accordion-button shadow-none" type="button" data-bs-toggle="collapse"
                              data-bs-target="#collapsefaq{{$item->id}}" aria-expanded="true" aria-controls="collapsefaq{{$item->id}}">
                        {{$item->title}}
                      </button>
                      <ul class="list-unstyled mb-0 d-flex gap-3 faq-action-icons">
                        <li>
                          <a href="{{route('admin.faqedit',$item->id)}}" class="reset-btn"><i class="bx bxs-pencil fs-5 text-primary"></i></a>
                          <a href="{{route('admin.faqdelete',$item->id)}}"class="reset-btn"><i class="bx bxs-trash-alt fs-5 text-danger"></i></a>
                        </li>
                      </ul>
                    </h2>
                    <div id="collapsefaq{{$item->id}}" class="accordion-collapse collapse" aria-labelledby="headingfaq{{$item->id}}"
                         data-bs-parent="#dashboardFaq">
                      <div class="accordion-body">
                          {{$item->description}}
                      </div>
                    </div>
                  </div>
                    @empty
                        <span class="text-danger"> No Item</span>
                    @endforelse


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
