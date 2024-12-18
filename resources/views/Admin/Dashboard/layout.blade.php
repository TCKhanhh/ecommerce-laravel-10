<!DOCTYPE html>
<html>

<head>
    @include('Admin.Dashboard.components.head')
</head>

<body>
    <div id="wrapper">
        @include('Admin.Dashboard.components.sidebar')

        <div id="page-wrapper" class="gray-bg">

            @include('Admin.Dashboard.components.nav')

            {{-- @include('Admin.Dashboard.Home.index') --}}
            @include($template)

            @include('Admin.Dashboard.components.footer')
        </div>
    </div>
    @include('Admin.Dashboard.components.script')
</body>

</html>
