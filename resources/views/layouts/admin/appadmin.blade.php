<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    @include('includes.admin.link')
    @yield('title')
</head>
<body id="page-top">
    @include('includes.admin.bar')
    @include('includes.admin.navbar')
    @yield('content')
    @include('includes.admin.footer')
    @include('includes.admin.js')
</body>
</html>
