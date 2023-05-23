@include('admin.layouts.app')
<div class="main-layout">
    <!-- Sidebar  -->
    @include('admin.layouts.sidebar')
    <!-- Header Page Footer  -->
    <div class="header-page-footer">
        <!-- Header  -->
        @include('admin.layouts.header')
        <!-- Section  -->
        <section class="profile-page">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-sm-10 col-md-9 col-lg-7 col-xl-6 col-xl-5">
                        <div class='common-card'>
                            <div class='mb-4'>
                                <nav style="--bs-breadcrumb-divider: url(&#34;data:image/svg+xml,%3Csvg xmlns='http://www.w3.org/2000/svg' width='8' height='8'%3E%3Cpath d='M2.5 0L1 1.5 3.5 4 1 6.5 2.5 8l4-4-4-4z' fill='%236c757d'/%3E%3C/svg%3E&#34;);"
                                    aria-label="breadcrumb">
                                    <ol class="breadcrumb mb-0">
                                        <li class="breadcrumb-item"><a href="{{route('admin.dashboard')}}">Home</a></li>
                                        <li class="breadcrumb-item"><a href="{{route('admin.profile')}}">Profile</a></li>
                                        <li class="breadcrumb-item active" aria-current="page">Edit Profile</li>
                                    </ol>
                                </nav>
                            </div>
                            <!--  Title  -->
                            <div class="mb-3">
                                <h4 class='m-0'>Edit Profile</h4>
                            </div>
                            <!--  Form Card  -->
                            <div class='card-form-wrapper'>
                                <form name="edit_profile" class="edit-profile-form" method="post" action="{{ route('admin.update.profile') }}" enctype="multipart/form-data">
                                    @csrf
                                    <input type="hidden" name="id" value="{{ $user->id }}">
                                    <!-- Image -->
                                    <div class='upload-image my-4'>
                                        <img  src="{{asset('storage/thumbnail/'.$user->image)}}" alt="avataar"
                                            class='profile-image user-image' id="output" />
                                        <div class="upload-image-field">
                                            <input type="file" name="image" class="w-100 h-100 opacity-0" onchange="loadFile(event)"/>
                                        </div>
                                    </div>
                                    <!-- Name -->
                                    <div class="mb-3">
                                        <label for="name">Name</label>
                                        <input type="text" class="form-control" placeholder="Enter the Name"
                                            value="{{ $user->name }}" name="name" id="name" required />
                                    </div>
                                    <!-- Email -->
                                    <div class="mb-3">
                                        <label for="name">Email</label>
                                        <input type="email" class="form-control" placeholder="Enter the Email"
                                            value="{{ $user->email }}" name="email" id="email" required />
                                    </div>
                                    <!-- Mobile -->
                                    <div class="mb-4">
                                        <label for="mobile">Mobile</label>
                                        <div class="input-group">
                                                <select name="country_code" id="" class="form-select" style="max-width:80px">
                                                    @foreach ($country_codes as $country_code)
                                                    <option name="" value="{{$country_code->phonecode}}"
                                                        @if ($country_code->phonecode == old('country_code', $user->country_code ))
                                                        selected="selected"
                                                    @endif>{{$country_code->phonecode}}</option>
                                                    @endforeach
                                                </select>

                                            <input type="text" class="form-control"
                                                placeholder="Enter the Mobile No." value="{{ $user->phone_number }}"
                                                id="mobile" name="phone_number" required />
                                        </div>
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

        <script>
            var loadFile = function(event) {
                var output = document.getElementById('output');
                output.src = URL.createObjectURL(event.target.files[0]);
                output.onload = function() {
                    URL.revokeObjectURL(output.src) // free memory
                }
            };
        </script>

        <!-- footer  -->
        @include('admin.layouts.footer')
    </div>
</div>

@include('admin.layouts.script')
