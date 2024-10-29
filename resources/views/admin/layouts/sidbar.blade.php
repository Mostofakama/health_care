


<div class="sidebar-wrapper" data-simplebar="true">
    <div class="sidebar-header">
        <a href="javaScript:;" class="toggle-btn"> <i class="bx bx-menu"></i>
        </a>
        <div class="logo-white">
            <img src="assets/images/logo-white.png" class="logo-icon-2" alt="">
        </div>
        <div class="logo-dark">
            <img src="assets/images/logo-dark.png" class="logo-icon-2" alt="">
        </div>
    </div>
    <!--navigation-->
    <ul class="metismenu" id="menu">
        {{-- <li>
            <a class="has-arrow" href="javaScript:;">
                <div class="parent-icon"><i class="bx bx-home-alt"></i>
                </div>
                <div class="menu-title">Dashboard</div>
            </a>
            <ul class="">
                <li> <a href="index.html"><i class="bx bx-right-arrow-alt"></i>eCommerce</a>
                </li>
                <li> <a href="index2.html"><i class="bx bx-right-arrow-alt"></i>Hospitality</a>
                </li>
                <li> <a href="index3.html"><i class="bx bx-right-arrow-alt"></i>Web Analytics</a>
                </li>
            </ul>
        </li> --}}
        {{-- location --}}

        {{-- @if (Auth::guard('admin')->user()->role()== 1) --}}
        @php
        $admin = Auth::guard('admin')->user();
    @endphp

    @if ($admin)
        @if ($admin->role == 1)

            <li>
                <a class="has-arrow" href="javaScript:;">
                    <div class="parent-icon"><i class="bx bx-location-alt"></i>
                    </div>
                    <div class="menu-title">Location </div>
                </a>
                <ul class="">
                    <li> <a href="{{route('division.index')}}"><i class="bx bx-right-arrow-alt"></i>Division</a>
                    </li>
                    <li> <a href="{{route('district.index')}}"><i class="bx bx-right-arrow-alt"></i>districts</a>
                    </li>
                    <li> <a href="{{route('subdistrict.index')}}"><i class="bx bx-right-arrow-alt"></i>sub-districts</a>
                    <li> <a href="{{route('unions.index')}}"><i class="bx bx-right-arrow-alt"></i>Unions</a>
                    </li>
                </ul>
            </li>

            {{-- location --}}


            <li>
                <a href="{{route('diagnostic.index')}}">
                    <div class="parent-icon"><i class="bx bx-hospital"></i>
                    </div>
                    <div class="menu-title">Diagnostic</div>
                </a>
            </li>
            <li>
                <a href="{{route('pharmacy.index')}}">
                    <div class="parent-icon"><i class="bx bx-hospital"></i>
                    </div>
                    <div class="menu-title">Pharmacy</div>
                </a>
            </li>
            <li>
                <a href="{{route('pathology.index')}}">
                    <div class="parent-icon"><i class="bx bx-hospital"></i>
                    </div>
                    <div class="menu-title">Pathology</div>
                </a>
            </li>
            <li>
                <a href="{{route('doctor.index')}}">
                    <div class="parent-icon"><i class="bx bx-hospital"></i>
                    </div>
                    <div class="menu-title">Doctor</div>
                </a>
            </li>
            <li>
                <a href="{{route('ambulance.index')}}">
                    <div class="parent-icon"><i class="bx bx-hospital"></i>
                    </div>
                    <div class="menu-title">Ambulance</div>
                </a>
            </li>
            <li>
                <a href="{{route('gallery.index')}}">
                    <div class="parent-icon"><i class="bx bx-hospital"></i>
                    </div>
                    <div class="menu-title">Gallery</div>
                </a>
            </li>
            <li>
                <a href="{{route('admin.signup')}}">
                    <div class="parent-icon"><i class="bx bx-hospital"></i>
                    </div>
                    <div class="menu-title">Admin Add</div>
                </a>
            </li>



        @elseif ($admin->role == 2)
            <li>
                <a href="{{route('subadmin.dashboard')}}">
                    <div class="parent-icon"><i class="bx bx-hospital"></i>
                    </div>
                    <div class="menu-title">Employee</div>
                </a>
            </li>

        @elseif ($admin->role == 3)
        <li>
            <a class="has-arrow" href="javaScript:;">
                <div class="parent-icon"><i class="bx bx-location-alt"></i>
                </div>
                <div class="menu-title">User </div>
            </a>
            <ul class="">
                <li> <a href="{{route('employee.dashboard')}}"><i class="bx bx-right-arrow-alt"></i>UnActive</a>
                </li>
                <li> <a href="{{route('employee.active')}}"><i class="bx bx-right-arrow-alt"></i>Active</a>
                </li>
                <li> <a href="{{route('employee.unions')}}"><i class="bx bx-right-arrow-alt"></i>Unions</a>
                </li>
            </ul>
        </li>
        @endif
    @else
        <p>No admin is authenticated.</p>
    @endif


        {{-- @endif --}}
{{-- {{Auth::guard('admin')->user()}} --}}
        {{-- @if (Auth::guard('admin')->user()->role() == 1) --}}



        {{-- @endif --}}
    </ul>
    <!--end navigation-->
</div>
