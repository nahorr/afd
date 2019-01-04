<!DOCTYPE html>
<html lang="en">
   <head>
      <meta charset="utf-8">
      <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
      <meta name="description" content="African Food Deals">
      <meta name="author" content="African Food Deals">
      <title>AFD - African Food Deals</title>
      <!-- Favicon Icon -->
      <link rel="icon" type="image/png" href="{{ asset('favicon.png') }}">
      <!-- Bootstrap core CSS -->
      <link href="{{ asset('vendor/bootstrap/css/bootstrap.min.css') }}" rel="stylesheet">
      <!-- Material Design Icons -->
      <link href="{{ asset('vendor/icons/css/materialdesignicons.min.css') }}" media="all" rel="stylesheet" type="text/css" />
      <!-- Select2 CSS -->
      <link href="{{ asset('vendor/select2/css/select2-bootstrap.css') }}" />
      <link href="{{ asset('vendor/select2/css/select2.min.css') }}" rel="stylesheet" />
      <!-- Custom styles for this template -->
      <link href="{{ asset('css/afd.min.css') }}" rel="stylesheet">
      <!-- Owl Carousel -->
      <link rel="stylesheet" href="{{ asset('vendor/owl-carousel/owl.carousel.css') }}">
      <link rel="stylesheet" href="{{ asset('vendor/owl-carousel/owl.theme.css') }}">
   </head>
   <body>
      @include('includes.public.header')
      @include('includes.public.slider')
      @include('includes.public.top_savers')
      @include('includes.public.product_offer_ad')
      @include('includes.public.best_offers')
      @include('includes.public.info_section_before_footer')
      <!-- Footer -->
      @include('includes.public.footer')
      <!-- End Footer -->
      <!-- Copyright -->
      @include('includes.public.copyright')
      <!-- End Copyright -->
      @include('includes.public.cart_sidebar')
      <!-- Bootstrap core JavaScript -->
      <script src="{{ asset('vendor/jquery/jquery.min.js') }}" ></script>
      <script src="{{ asset('vendor/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
      <!-- select2 Js -->
      <script src="{{ asset('vendor/select2/js/select2.min.js') }}"></script>
      <!-- Owl Carousel -->
      <script src="{{ asset('vendor/owl-carousel/owl.carousel.js') }}"></script>
      <!-- Custom -->
      <script src="{{ asset('js/custom.min.js') }}"></script>
      <script async src="https://www.googletagmanager.com/gtag/js?id=UA-120909275-1"></script>
      <script>
          window.dataLayer = window.dataLayer || [];
          function gtag(){dataLayer.push(arguments);}
          gtag('js', new Date());

          gtag('config', 'UA-120909275-1');
      </script>
   </body>
</html>
