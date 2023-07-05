<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>JBMM-E-Commerce</title>
    <meta name="keywords" content="HTML5 Template">
    <meta name="description" content="JBMM-E-Commerce">
    <meta name="author" content="p-themes">
    <!-- Favicon -->
    <link rel="apple-touch-icon" sizes="180x180" href="{{ asset('frontend/img/jbmm_logo.png') }}">
    <link rel="icon" type="image/png" sizes="32x32" href="{{ asset('frontend/img/jbmm_logo.png') }}">
    <link rel="shortcut icon" href="{{ asset('frontend/img/jbmm_logo.png') }}">
    <meta name="apple-mobile-web-app-title" content="Molla">
    <meta name="application-name" content="Molla">
    <meta name="msapplication-TileColor" content="#cc9966">
    <meta name="theme-color" content="#ffffff">
    @include('libraries.frontend.styles')
</head>

<body>
    <div class="page-wrapper">
        @include('components.frontend.navbar')

        <main class="main">
            @yield('content')
        </main>

        @include('components.frontend.footer')

    </div><!-- End .page-wrapper -->
    <button id="scroll-top" title="Back to Top"><i class="icon-arrow-up"></i></button>
    @include('components.frontend.mobile_and_modals')
    @include('libraries.frontend.scripts')
</body>

</html>
