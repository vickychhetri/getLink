<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="Social connection + Personal websites.">
    <meta name="author" content="Vicky Chhetri">

    <title> @yield('title')</title>

    <link rel="stylesheet" href="/css/bootstrap.min.css">
    <link rel="stylesheet" href="/css/unicons.css">
    <link rel="stylesheet" href="/css/owl.carousel.min.css">
    <link rel="stylesheet" href="/css/owl.theme.default.min.css">

    <!-- MAIN STYLE -->
    <link rel="stylesheet" href="/css/tooplate-style.css">
    @section("metaContainer")
    @show

</head>

<body>

    <!-- MENU -->
    <x-User.Header.Menu />
    @section("container")
    @show

    <x-User.Footer.Footerlink />
    <script src="/js/jquery-3.3.1.min.js"></script>
    <script src="/js/popper.min.js"></script>
    <script src="/js/bootstrap.min.js"></script>
    <script src="/js/Headroom.js"></script>
    <script src="/js/jQuery.headroom.js"></script>
    <script src="/js/owl.carousel.min.js"></script>
    <script src="/js/smoothscroll.js"></script>
    <script src="/js/custom.js"></script>
    @section("footerScript")
    @show
</body>

</html>