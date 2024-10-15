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
        <li>
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
        </li>
        {{-- location --}}
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



    </ul>
    <!--end navigation-->
</div>
