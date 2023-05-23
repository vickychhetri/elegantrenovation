<header class="d-flex align-items-center justify-content-between px-4 py-3">
    <button type="button" class="btn btn-primary btn-small toggle-button">
        <i class="bx bx-menu fs-3"></i>
    </button>
    <ul class="list-unstyled d-flex gap-4 align-items-center">
        <li><button class="reset-btn"><i class="bx bxs-bell fs-3"></i></button></li>
        <li><a href="/admin/staff"><i class="bx bxs-group fs-3"></i></a></li>
        <li>
            <div class="dropdown">
                <button class="reset-btn" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                    <img src="{{  route('image.displayImage',$user->image) }}" alt="avaatar" class="small-image" />
                </button>
                <ul class="dropdown-menu py-3">
                    <li><a class="reset-btn px-3 pb-2 w-100 d-inline-block" href="{{ route('admin.profile') }}">Profile</a></li>
                    <li><a class="reset-btn px-3 pb-2 text-nowrap w-100 d-inline-block" href="{{route('admin.change.password.form')}}">Change
                            Password</a></li>
                    <li> <a href="{{ route('admin.logout') }}"> <button class="reset-btn px-3 w-100 d-inline-block text-start">Log Out</button></a></li>
                </ul>
            </div>
        </li>
    </ul>
</header>
