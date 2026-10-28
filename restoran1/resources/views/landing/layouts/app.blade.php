<!DOCTYPE html>
<html lang="en">

<head>
    @include('landing.partials.head')
</head>

<body>
    <div class="container-xxl bg-white p-0">
        @include('landing.partials.header')

        @yield('content')

        @include('landing.partials.footer')
    </div>

    @include('landing.partials.scripts')
</body>

</html>