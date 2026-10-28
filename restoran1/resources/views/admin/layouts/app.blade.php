<!doctype html>
<html lang="en">

<head>
    {{-- 1. Head --}}
    @include('admin.partials.head')
</head>

<body data-topbar="dark">

    <!-- Begin page -->
    <div id="layout-wrapper">

        {{-- 2. Header Topbar & Sidebar Menubar --}}
        @include('admin.partials.header')

        <!-- ============================================================== -->
        <!-- Start right Content here -->
        <!-- ============================================================== -->
        <div class="main-content">

            {{-- 3. Main Content --}}
            @yield('content')

            {{-- 4. Footer --}}
            @include('admin.partials.footer')

        </div>
        <!-- end main content-->

    </div>
    <!-- END layout-wrapper -->

    {{-- 5. Scripts & Right Sidebar --}}
    @include('admin.partials.scripts')

</body>

</html>