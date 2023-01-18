<!DOCTYPE html>
<html lang="en">

<head>
    @include('backend.content.head')
    <title>Halaman | Admin</title>
</head>

<body class="hold-transition sidebar-mini">
    <div class="wrapper" id="app">
        @include('backend.content.nav')
        @include('backend.content.aside')
        <div class="content-wrapper">
            <div class="content">
                <router-view></router-view>
            </div>
        </div>
        @include('backend.content.footer')
    </div>
    @include('backend.content.script')
</body>

</html>