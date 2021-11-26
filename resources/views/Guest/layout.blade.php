<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title> @yield('title')</title>
    <meta name="description"
        content="Building a successful web connection is a challenge. you will get a link from us to manage your portfolio and social connection.">
    <meta name="keywords"
        content="your profile, urprofile, profile, bio link,bio,social media, instagram, facebook, fb, Linkedin, twitter,snapchat,biolink,">
    <meta name="robots" content="index, follow">
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <meta name="language" content="English">
    <meta name="revisit-after" content="1 days">
    <meta name="author" content="Vicky Chhetri">
    <meta name="category" content="Bio Link">
    <meta name="url" content="https://urprofile.in">
    <meta name="coverage" content="Worldwide">
    <meta name="distribution" content="Global">
    <meta name="subject" content="Social Connection">


    <!-- Primary Meta Tags -->
    <meta name="description"
        content="Building a successful web connection is a challenge. you will get a link from us to manage your portfolio and social connection.">

    <!-- Open Graph / Facebook -->
    <meta property="og:type" content="website">
    <meta property="og:url" content="https://urprofile.in/">
    <meta property="og:description"
        content="Building a successful web connection is a challenge. you will get a link from us to manage your portfolio and social connection.">
    <meta property="og:image" content="https://urprofile.in/images/meta/social.png">

    <!-- Twitter -->
    <meta property="twitter:card" content="summary_large_image">
    <meta property="twitter:url" content="https://urprofile.in/">
    <meta property="twitter:description"
        content="Building a successful web connection is a challenge. you will get a link from us to manage your portfolio and social connection.">
    <meta property="twitter:image" content="https://urprofile.in/images/meta/social.png">



    <!-- Favicons -->
    <link href="https://urprofile.in/images/meta/social.png" rel="icon">
    <link href="https://urprofile.in/images/meta/social.png" rel="apple-touch-icon">


    <link rel="stylesheet" href="/css/bootstrap.min.css">
    <link rel="stylesheet" href="/css/unicons.css">
    <link rel="stylesheet" href="/css/owl.carousel.min.css">
    <link rel="stylesheet" href="/css/owl.theme.default.min.css">



    <!-- MAIN STYLE -->
    <link rel="stylesheet" href="/css/tooplate-style.css">
    @section("metaContainer")
    @show
    <!-- Global site tag (gtag.js) - Google Analytics -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=G-QMGC9E0BXM"></script>
    <script>
    window.dataLayer = window.dataLayer || [];

    function gtag() {
        dataLayer.push(arguments);
    }
    gtag('js', new Date());

    gtag('config', 'G-QMGC9E0BXM');
    </script>

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