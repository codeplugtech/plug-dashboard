<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="application-name" content="{{ config('app.name') }}">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>{{ config('app.name') }}</title>
    <style>
        [x-cloak] {
            display: none !important;
        }
    </style>
    @filamentStyles
    {{
        Vite::withEntryPoints('resources/css/app.css')
            ->useBuildDirectory('codeplugtech/plug-dashboard')
            ->useHotFile(public_path('codeplugtech/plug-dashboard/hot'))
    }}
</head>

<body x-data="{ showSidebar: false }" class="relative flex w-full flex-col md:flex-row">
<x-plug-dashboard::sidebar/>
<!-- main content  -->
<main id="main-content" class="h-svh w-full  overflow-y-auto p-4 bg-gradient-to-b from-[#37B7C333] to-background">
    <section class="py-5 sm:py-8 lg:py-10 mx-auto w-full max-w-4xl lg:space-y-6">
    {{ $slot }}
    </section>
</main>

@livewireScriptConfig
@livewire('notifications')
@filamentScripts
{{
       Vite::withEntryPoints('resources/js/plug-dashboard.js')
           ->useBuildDirectory('codeplugtech/plug-dashboard')
           ->useHotFile(public_path('codeplugtech/plug-dashboard/hot'))
   }}
</body>
</html>
