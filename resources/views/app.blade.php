<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}"  @class(['dark' => ($appearance ?? 'system') == 'dark'])>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        {{-- Inline script to detect system dark mode preference and apply it immediately --}}
        <script>
            (function() {
                const appearance = '{{ $appearance ?? "system" }}';

                if (appearance === 'system') {
                    const prefersDark = window.matchMedia('(prefers-color-scheme: dark)').matches;

                    if (prefersDark) {
                        document.documentElement.classList.add('dark');
                    }
                }
            })();
        </script>

        {{-- Inline style to set the HTML background color based on our theme in app.css --}}
        <style>
            html {
                background-color: oklch(1 0 0);
            }

            html.dark {
                background-color: oklch(0.145 0 0);
            }
        </style>

        <title inertia>{{ config('app.name', 'Laravel') }}</title>

        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=instrument-sans:400,500,600" rel="stylesheet" />

        <link href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,300;0,400;0,500;0,600;1,400;1,500;1,600" rel="stylesheet">

        <!-- BEGIN: Vendor CSS-->
        <link rel="stylesheet" type="text/css" href="{{ asset('app-assets') }}/vendors/css/vendors.min.css">
        <link rel="stylesheet" type="text/css" href="{{ asset('app-assets') }}/vendors/css/charts/apexcharts.css">
        <link rel="stylesheet" type="text/css" href="{{ asset('app-assets') }}/vendors/css/extensions/toastr.min.css">
        <!-- END: Vendor CSS-->
    
        <!-- BEGIN: Theme CSS-->
        <link rel="stylesheet" type="text/css" href="{{ asset('app-assets') }}/css/bootstrap.css">
        <link rel="stylesheet" type="text/css" href="{{ asset('app-assets') }}/css/bootstrap-extended.css">
        <link rel="stylesheet" type="text/css" href="{{ asset('app-assets') }}/css/colors.css">
        <link rel="stylesheet" type="text/css" href="{{ asset('app-assets') }}/css/components.css">
        <link rel="stylesheet" type="text/css" href="{{ asset('app-assets') }}/css/themes/dark-layout.css">
        <link rel="stylesheet" type="text/css" href="{{ asset('app-assets') }}/css/themes/bordered-layout.css">
        <link rel="stylesheet" type="text/css" href="{{ asset('app-assets') }}/css/themes/semi-dark-layout.css">
    
        <!-- BEGIN: Page CSS-->
        <link rel="stylesheet" type="text/css" href="{{ asset('app-assets') }}/css/core/menu/menu-types/vertical-menu.css">
        <link rel="stylesheet" type="text/css" href="{{ asset('app-assets') }}/css/pages/dashboard-ecommerce.css">
        <link rel="stylesheet" type="text/css" href="{{ asset('app-assets') }}/css/plugins/extensions/ext-component-toastr.css">
        <!-- END: Page CSS-->
    
        <!-- BEGIN: Custom CSS-->
        {{-- <link rel="stylesheet" type="text/css" href="../../../assets/css/style.css"> --}}

        @routes
        @vite(['resources/js/app.ts'])
        @inertiaHead
    </head>
    <body class="font-sans antialiased">
        @inertia

        <!-- BEGIN: Vendor JS-->
        <script src="{{ asset('app-assets') }}/vendors/js/vendors.min.js"></script>
        <!-- BEGIN Vendor JS-->

        <!-- BEGIN: Page Vendor JS-->
        <script src="{{ asset('app-assets') }}/vendors/js/extensions/toastr.min.js"></script>
        <!-- END: Page Vendor JS-->

        <!-- BEGIN: Theme JS-->
        <script src="{{ asset('app-assets') }}/js/core/app-menu.js"></script>
        <script src="{{ asset('app-assets') }}/js/core/app.js"></script>
        <!-- END: Theme JS-->

        <!-- BEGIN: Page JS-->
        {{-- <script src="{{ asset('app-assets') }}/js/scripts/pages/dashboard-ecommerce.js"></script> --}}
    </body>
</html>
