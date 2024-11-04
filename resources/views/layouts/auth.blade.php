<!DOCTYPE html>
<html lang="en"> <!--begin::Head-->

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <title>
        @yield('title')
    </title><!--begin::Primary Meta Tags-->
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="title" content="AdminLTE 4 ">
    <meta name="author" content="ColorlibHQ">
    <meta name="description" content="AdminLTE is a Free Bootstrap 5 Admin Dashboard, 30 example pages using Vanilla JS.">
    <meta name="keywords" content="bootstrap 5, bootstrap, bootstrap 5 admin dashboard, bootstrap 5 dashboard, bootstrap 5 charts, bootstrap 5 calendar, bootstrap 5 datepicker, bootstrap 5 tables, bootstrap 5 datatable, vanilla js datatable, colorlibhq, colorlibhq dashboard, colorlibhq admin dashboard"><!--end::Primary Meta Tags--><!--begin::Fonts-->
    @include('includes.auth.style')
</head> <!--end::Head--> <!--begin::Body-->

<body class="login-page bg-body-secondary">
    <div class="login-box">
        <div class="login-logo">
            <b>Taks Management</a>
        </div> <!-- /.login-logo -->
        <div class="card">
            @yield('content') <!-- /.login-card-body -->
        </div>
    </div> <!-- /.login-box --> <!--begin::Third Party Plugin(OverlayScrollbars)-->
    @include('includes.auth.script') <!--end::OverlayScrollbars Configure--> <!--end::Script-->
</body><!--end::Body-->

</html>
