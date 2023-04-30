<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta name="format-detection" content="telephone=no">
        <meta name="apple-mobile-web-app-capable" content="yes">
        <link href="apple-touch-icon.html" rel="apple-touch-icon">
        <link href="favicon.html" rel="icon">
        <meta name="author" content="">
        <meta name="keywords" content="">
        <meta name="description" content="">
        <title>Aquila Allied Impex</title>
        {{-- Fonts --}}
        <link href="https://fonts.googleapis.com/css?family=Work+Sans:300,400,500,600,700&amp;amp;subset=latin-ext" rel="stylesheet">
        <link rel="stylesheet" href="/assets/fonts/Linearicons/Font/demo-files/demo.css">
        {{-- Assests --}}
        <link rel="stylesheet" href="/assets/plugins/nouiSlider/css/nouislider.css">
        <link rel="stylesheet" href="/assets/plugins/bootstrap/css/bootstrap.min.css">
        <link rel="stylesheet" href="/assets/plugins/font-awesome/css/font-awesome.min.css">
        <link rel="stylesheet" href="/assets/plugins/jquery-bar-rating/dist/themes/fontawesome-stars.css">
        <link rel="stylesheet" href="/assets/plugins/select2/dist/css/select2.min.css">
        <link rel="stylesheet" href="/assets/plugins/owl-carousel/assets/owl.carousel.min.css">
        <link rel="stylesheet" href="/assets/plugins/slick/slick.css">
        <link rel="stylesheet" href="/assets/plugins/lightGallery/dist/css/lightgallery.min.css">
        <link rel="stylesheet" href="/assets/css/style.css">
    </head>

    <body>
        @if (request()->routeIs('blog*'))
            @include('partials.blog-header')
        @else
            @include('partials.header')
        @endif
        @yield('main')
        @include('partials.footer')
        @include('partials.mobile-footer')
        @include('partials.mobile-category')
        @include('partials.mobile-nav')

        <button class="btn scroll-top"><i class="icon-chevron-up"></i></button>
        <div class="ps-preloader" id="preloader">
            <div class="ps-preloader-section ps-preloader-left"></div>
            <div class="ps-preloader-section ps-preloader-right"></div>
        </div>
    </body>

</html>
