<aside class="sidebar">
    <!-- Logo  -->
    <div class="logo-wrapper mb-4">
        <a href="/admin/dashboard"><img src="{{asset('images/logo.png')}}" alt="logo" class="d-md-inline d-none" /></a>
        <a href="/admin/dashboard"><img src="{{asset('images/small-logo.png')}}" alt="logo" class="d-inline d-md-none"></a>
    </div>
    <!-- user detail  -->
    <div class="user-detail-wrapper p-md-2 d-flex gap-3 align-items-center mb-4">
        <img src="{{  route('image.displayImage',$user->image) }}" alt="avaatar" class="profile-image" />
        <div class="user-detail-text linkTitle">
            <h6 class="m-0 mb-1 fs-14 fw-semibold">{{$user->name}}</h6>
            <p class="text-light-grey m-0 fs-14 fw-normal">Admin</p>
        </div>
    </div>
    <div class="menu-bar">
        <ul class="list-unstyled mb-0">
            <!-- General  -->
            <li class="mb-1 linkTitle">
                <h6 class="m-0 text-light-grey fs-12">GENERAL</h6>
            </li>
            <li class="lh-0 mb-1 {{Request::is('admin/dashboard','admin.dashboard') ? 'menu-active':''}}">
                <a href="{{route('admin.dashboard')}}" class="d-inline-flex align-items-center gap-1 w-100">
                    <i class='bx bxs-dashboard fs-5'></i>
                    <span class="lh-normal fs-14 linkTitle">Dashboard</span>
                </a>
            </li>
            <li class="lh-0 mb-1 {{Request::is('admin/user','admin.user.index') ? 'menu-active':''}}">
                <a href="{{route('admin.user.index')}}" class="d-inline-flex align-items-center gap-1 w-100">
                    <i class='bx bx-user fs-5'></i>
                    <span class="lh-normal fs-14 linkTitle">Users</span>
                </a>
            </li>
            <li class="lh-0 mb-1 {{Request::is('admin/product','admin.product.index') ? 'menu-active':''}}">
                <a href="{{route('admin.product.index')}}" class="d-inline-flex align-items-center gap-1 w-100">
                    <i class='bx bx-laptop fs-5'></i>
                    <span class="lh-normal fs-14 linkTitle">Products</span>
                </a>
            </li>
            <!-- MANAGEMENT  -->
            <li class="mt-3 mb-1 linkTitle">
                <h6 class="m-0 text-light-grey fs-12">MANAGEMENT</h6>
            </li>
            <li class="lh-0 mb-1">
                <div class="accordion" id="accordionContentPage">
                    <div class="accordion-item border-0">
            <span class="lh-normal fs-14" id="headingOne">
              <button class="accordion-button d-inline-flex align-items-center gap-1 w-100 border-0 bg-transparent shadow-none p-0"
                      type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="true"
                      aria-controls="collapseOne">
                <i class='bx bx-notepad fs-5'></i>
                <span class="lh-normal fs-14 linkTitle">Content Page</span>
              </button>
            </span>
                        <div id="collapseOne" class="accordion-collapse collapse" aria-labelledby="headingOne"
                             data-bs-parent="#accordionContentPage">
                            <div class="accordion-body pb-0 pt-2 pe-0">
                                <ul class="list-unstyled mb-0">
                                    <li class="p-xs-0"><a href="{{route('admin.content_show','term-conditions')}}" class="fs-14 active-sublink inactive-sublink">Term &
                                            Conditions</a>
                                    </li>
                                    <li class="p-xs-0"><a href="{{route('admin.content_show','privacy-policy')}}" class="fs-14 inactive-sublink">Privacy Policy</a></li>
                                    <li class="p-xs-0"><a href="{{route('admin.content_show','about-us')}}" class="fs-14 inactive-sublink">About Us</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </li>
            <li class="lh-0 mb-1">
                <a href="{{route('admin.Faqlisting')}}" class="d-inline-flex align-items-center gap-1 w-100">
                    <i class='bx bx-help-circle fs-5'></i>
                    <span class="lh-normal fs-14 linkTitle">FAQs</span>
                </a>
            </li>
            <li class="lh-0 mb-1">
                <a href="{{route('admin.contactus')}}" class="d-inline-flex align-items-center gap-1 w-100">
                    <i class='bx bx-book fs-5'></i>
                    <span class="lh-normal fs-14 linkTitle">Contact</span>
                </a>
            </li>
{{--            <li class="lh-0 mb-1">--}}
{{--                <div class="accordion" id="accordionContentList">--}}
{{--                    <div class="accordion-item border-0">--}}
{{--            <span class="lh-normal fs-56" id="headingTwo">--}}
{{--              <button class="accordion-button d-inline-flex align-items-center gap-1 w-100 border-0 bg-transparent shadow-none p-0"--}}
{{--                      type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwo" aria-expanded="true"--}}
{{--                      aria-controls="collapseTwo">--}}
{{--                <i class='bx bx-food-menu fs-5'></i>--}}
{{--                <span class="lh-normal fs-14 linkTitle">Content List</span>--}}
{{--              </button>--}}
{{--            </span>--}}
{{--                        <div id="collapseTwo" class="accordion-collapse collapse" aria-labelledby="headingTwo"--}}
{{--                             data-bs-parent="#accordionContentList">--}}
{{--                            <div class="accordion-body pb-0 pt-2 pe-0">--}}
{{--                                <ul class="list-unstyled mb-0">--}}
{{--                                    <li class="p-xs-0"><a href="/commission"--}}
{{--                                                          class="fs-14 nav-link active-sublink inactive-sublink">List-1</a></li>--}}
{{--                                    <li class="p-xs-0"><a href="" class="fs-14 disabled nav-link inactive-sublink">List-2</a></li>--}}
{{--                                    <li class="p-xs-0"><a href="" class="fs-14 disabled nav-link inactive-sublink">List-3</a></li>--}}
{{--                                </ul>--}}
{{--                            </div>--}}
{{--                        </div>--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--            </li>--}}


            <li class="lh-0 mb-1">
                <a href="/admin/homepage" class="d-inline-flex align-items-center gap-1 w-100">
                    <i class='bx bx-home fs-5'></i>
                    <span class="lh-normal fs-14 linkTitle">Home Page</span>
                </a>
            </li>
            <li class="lh-0 mb-1">
                <a href="/notification" class="d-inline-flex align-items-center gap-1 w-100">
                    <i class='bx bx-bell fs-5'></i>
                    <span class="lh-normal fs-14 linkTitle">Notification</span>
                </a>
            </li>
            <li class="lh-0 mb-1">
                <a href="{{route('admin.db.backup.form')}}" class="d-inline-flex align-items-center gap-1 w-100">
                    <i class='bx bx-cloud-upload fs-5'></i>
                    <span class="lh-normal fs-14 linkTitle">DB Backup</span>
                </a>
            </li>
        </ul>
    </div>
</aside>

<script>
    if ($(window).width() < 768) $('.linkTitle').hide();
    $(window).on('resize', function () {
        // Code to run when the window is resized
        if ($(window).width() < 768) {
            $('.linkTitle').hide();
        } else {
            $('.linkTitle').show();
        }
    });
</script>
