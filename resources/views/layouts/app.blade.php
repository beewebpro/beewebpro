<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
    <head>
        <meta charset="UTF-8" />
        <meta content="width=device-width, initial-scale=1, maximum-scale=1, shrink-to-fit=no" name="viewport" />
        <title>{{ config('app.name', 'bwpcms') }}</title>
        <!-- General CSS Files -->
        <link rel="stylesheet" href="{{ asset('bwp/assets/css/app.min.css') }}" />
        <!-- Template CSS -->
        <link rel="stylesheet" href="{{ asset('bwp/assets/bundles/pretty-checkbox/pretty-checkbox.min.css') }}">
        <link rel="stylesheet" href="{{ asset('bwp/assets/css/style.css') }}" />
        <link rel="stylesheet" href="{{ asset('bwp/assets/css/components.css') }}" />
        <!-- Custom style CSS -->
        <link rel="stylesheet" href="{{ asset('bwp/assets/css/custom.css') }}" />
        <link rel='shortcut icon' type='image/x-icon' href='{{ asset('bwp/assets/img/favicon.ico') }}' />
        
        <!-- Styles -->
        <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    </head>

    <body>
        <div class="loader"></div>
        <div id="app">
            <div class="main-wrapper main-wrapper-1">
                @include('partials.header')
                @include('partials.sidebar')
                <!-- Main Content -->
                <div class="main-content" style="min-height: 842px;">
                    @yield('content')
                </div>
                @include('partials.footer')
            </div>
        </div>
        <!-- General JS Scripts -->
        <script src="{{ asset('bwp/assets/js/app.min.js') }}"></script>
        <!-- JS Libraies -->
        <script src="{{ asset('bwp/assets/bundles/apexcharts/apexcharts.min.js') }}"></script>
        <!-- Page Specific JS File -->
        <script src="{{ asset('bwp/assets/js/page/index.js') }}"></script>
        <!-- Template JS File -->
        <script src="{{ asset('bwp/assets/js/scripts.js') }}"></script>
        <!-- Custom JS File -->
        <script src="{{ asset('bwp/assets/js/custom.js') }}"></script>
        <!-- Scripts -->
        <script src="{{ asset('js/app.js') }}" defer></script>
    </body>
</html>
