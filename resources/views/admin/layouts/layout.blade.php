@include('admin.layouts.header')
<div class="page-wrapper">
    @include('admin.layouts.sidbar')
    <div class="page-content-wrapper">
        <div class="page-content">
           @yield('content')
        </div>
    </div>
</div>
@include('admin.layouts.footer')




