<!DOCTYPE html>
<!--[if lt IE 8]><html lang="{{ app()->getLocale() }}" class="no-js lt-ie8"> <![endif]-->
<!--[if gte IE 8]><!--><html lang="{{ app()->getLocale() }}" class="no-js"> <!--<![endif]-->
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="user-scalable=no, width=device-width, initial-scale=1.0, maximum-scale=1.0">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <link rel="apple-touch-icon" sizes="57x57" href="/favicons/apple-icon-57x57.png">
    <link rel="apple-touch-icon" sizes="60x60" href="/favicons/apple-icon-60x60.png">
    <link rel="apple-touch-icon" sizes="72x72" href="/favicons/apple-icon-72x72.png">
    <link rel="apple-touch-icon" sizes="76x76" href="/favicons/apple-icon-76x76.png">
    <link rel="apple-touch-icon" sizes="114x114" href="/favicons/apple-icon-114x114.png">
    <link rel="apple-touch-icon" sizes="120x120" href="/favicons/apple-icon-120x120.png">
    <link rel="apple-touch-icon" sizes="144x144" href="/favicons/apple-icon-144x144.png">
    <link rel="apple-touch-icon" sizes="152x152" href="/favicons/apple-icon-152x152.png">
    <link rel="apple-touch-icon" sizes="180x180" href="/favicons/apple-icon-180x180.png">
    <link rel="icon" type="image/png" sizes="192x192"  href="/favicons/android-icon-192x192.png">
    <link rel="icon" type="image/png" sizes="32x32" href="/favicons/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="96x96" href="/favicons/favicon-96x96.png">
    <link rel="icon" type="image/png" sizes="16x16" href="/favicons/favicon-16x16.png">
    <link rel="manifest" href="/favicons/manifest.json">
    <meta name="msapplication-TileColor" content="#ffffff">
    <meta name="msapplication-TileImage" content="/ms-icon-144x144.png">
    <meta name="theme-color" content="#ffffff">

    <link rel="canonical" href="{{ isset($seo->canonical) ? $seo->canonical : url()->current() }}">
    <meta name="description" content="{{ isset($seo->meta_description) ? $seo->meta_description : '' }}">
    <meta name="keywords" content="{{ isset($seo->meta_keyword) ? $seo->meta_keyword : '' }}">
    @isset( $seo->robots )
        @if( $seo->robots == 0 )
            <meta name="robots" content="noindex" />
        @endif
    @endisset

    @yield('meta')

    <link rel="shortcut icon" href="{{ asset('/favicon.ico') }}">

    <!-- common css -->
    <link href="{{ asset('build/assets/css/bundle.css') }}" rel="stylesheet" />
    <!-- end common css -->

    @stack('style')

    {{ settings('counters') }}

</head>
<body>

    <!-- CONTENT -->
    <div>

        @include('layouts.header')

        <!-- Content -->
        <main class="content">

            @yield('content')

        </main>
        <!-- End Content -->

        @include('layouts.footer')

    </div>
    <!-- END CONTENT-->

    @include('modal.online-booking')
    @include('modal.submit-application')
    @include('modal.review-add')
    @include('modal.callback')

    @include('modal.message.online-booking')

    <!-- base js -->
    <script src="{{ asset('build/assets/js/src/jquery/jquery.js') }}"></script>
    <script src="{{ asset('build/assets/js/bundle.js') }}"></script>
    <script src="{{ asset('js/app.js') }}"></script>
    <!-- end base js -->

    @stack('custom-scripts')

</body>
</html>
