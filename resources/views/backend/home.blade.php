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
        <aside class="control-sidebar control-sidebar-dark">
            <div class="p-3">
                <h5>Title</h5>
                <p>Sidebar content</p>
            </div>
        </aside>
        @include('backend.content.footer')
    </div>
    @include('backend.content.script')
</body>

</html>