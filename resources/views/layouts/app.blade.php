<!DOCTYPE html>
<html lang="fr">

<head>
<meta charset="UTF-8" />
<title>Steil Automobile</title>

<meta http-equiv="X-UA-Compatible" content="IE=edge" />
<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1.0, user-scalable=0 shrink-to-fit=no" />

<link rel="shortcut icon" href="assets/images/favicon.png" type="image/png" />

<link href="https://fonts.googleapis.com/css?display=swap&amp;family=Inter:300,400,500,600,700,800" rel="stylesheet" />

<link rel="stylesheet" type="text/css" href="{{asset('assets/css/bootstrap-grid.min.css')}}" />

<link rel="stylesheet" type="text/css" href="{{asset('assets/css/splide.min.css')}}" />
<link rel="stylesheet" type="text/css" href="{{asset('assets/css/splide-core.min.css')}}" />
<link rel="stylesheet" type="text/css" href="{{asset('assets/css/nouislider.css')}}" />
<link rel="stylesheet" type="text/css" href="{{asset('assets/css/select2.min.css')}}" />
<link rel="stylesheet" type="text/css" href="{{asset('assets/css/lineicons.css')}}" />

<link rel="stylesheet" type="text/css" href="{{asset('assets/css/theme-style.css')}}" />

<link rel="stylesheet" type="text/css" href="{{asset('assets/css/theme-style-home-two.css/')}}" />
<link rel="stylesheet" type="text/css" href="{{asset('assets/css/theme-style-home-one.css')}}" />
<link rel="stylesheet" type="text/css" href="{{asset('assets/css/styleV1.css')}}" />

<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css" />
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet">


<style>
    .logo{
        height: 100px !important;
        width: 100px !important;
    }
    a{
        text-decoration: none !important
    }
</style>
</head>


<body class="boxed_wrapper ltr">

    <div class="preloader-area">
        <img src="assets/images/logo.png" alt="Logo">
    </div>


    <!-- header -->
    @include('layouts.header')


    <!-- Navbar -->
    @include('layouts.navbar')


    @yield('content');


    @include('layouts.footer')



    <button class="scroll-top scroll-to-target" data-target="html">
    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" viewBox="0 0 16 16">
    <path fill-rule="evenodd" d="M1.646 4.646a.5.5 0 0 1 .708 0L8 10.293l5.646-5.647a.5.5 0 0 1 .708.708l-6 6a.5.5 0 0 1-.708 0l-6-6a.5.5 0 0 1 0-.708z"></path>
    </svg><span>haut</span>
    </button>
    <script data-cfasync="false" src="../cdn-cgi/scripts/5c5dd728/cloudflare-static/email-decode.min.js"></script><script src="assets/js/jquery.js"></script>
    <script src="assets/js/waypoints.min.js"></script>
    <script src="assets/js/counterup.min.js"></script>
    <script src="assets/js/nouislider.js"></script>
    <script src="assets/js/splide.min.js"></script>
    <script src="assets/js/lazysizes.min.js"></script>
    <script src="assets/js/ls.bgset.min.js"></script>
    <script src="assets/js/tab.js"></script>
    <script src="assets/js/img-zoom.js"></script>
    <script src="assets/js/gsap-core.js"></script>
    <script src="assets/js/scroll-trigger.js"></script>
    <script src="assets/js/select2.min.js"></script>
    <script src="assets/js/addIndicators.js"></script>
    <script src="assets/js/animation.gsap.js"></script>
    <script src="assets/js/brator-script.js"></script>
</body>

</html>
