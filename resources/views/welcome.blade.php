<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">

    <title>{{ config('app.name') }} - project</title>
    <meta content="" name="description">
    <meta content="" name="keywords">

    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Raleway:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

    <link href="{{ asset('assets/frontend/plugins/aos/aos.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/frontend/plugins/bootstrap/css/bootstrap.min.css') }}" rel="stylesheet">
    <link href="{{asset('assets/frontend/plugins/bootstrap-icons/bootstrap-icons.css')}}" rel="stylesheet">
    <link href="{{asset('assets/frontend/plugins/boxicons/css/boxicons.min.css')}}" rel="stylesheet">
    <link href="{{asset('assets/frontend/plugins/glightbox/css/glightbox.min.css')}}" rel="stylesheet">
    <link href="{{asset('assets/frontend/plugins/swiper/swiper-bundle.min.css')}}" rel="stylesheet">

    <link href="{{ asset('assets/frontend/css/style.css') }}" rel="stylesheet">
</head>

<body>

@include('partials.nav')

@include('partials.hero')

<main id="main">

    @include('partials.feature')

    @include('partials.detail')

    @include('partials.gallery')

    @include('partials.testimonial')

    @include('partials.faq')

    @include('partials.contact')

</main><!-- End #main -->

@include('partials.footer')

<a href="#" class="back-to-top d-flex align-items-center justify-content-center">
    <i class="bi bi-arrow-up-short"></i>
</a>

<script src="{{ asset('assets/frontend/plugins/aos/aos.js') }}"></script>
<script src="{{ asset('assets/frontend/plugins/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
<script src="{{ asset('assets/frontend/plugins/glightbox/js/glightbox.min.js') }}"></script>
<script src="{{ asset('assets/frontend/plugins/swiper/swiper-bundle.min.js') }}"></script>
<script src="{{ asset('assets/frontend/plugins/php-email-form/validate.js') }}"></script>

<script src="{{ asset('assets/frontend/js/main.js') }}"></script>

</body>

</html>
