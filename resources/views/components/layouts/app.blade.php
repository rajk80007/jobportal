<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta name="keywords" content="freeagent, freeagent hub, freeagent hub, freeagent, freeagent hub, freeagent, freeagent hub, freeagent, freeagent hub, freeagent, freeagent hub, freeagent, freeagent hub, freeagent, freelancer, freelancing, job, job-portal, Work from Home, jobs, home jobs, Open source freelancing, Collaborative freelancing platform, Remote freelance projects, Freelance coding projects, Developer community, Open collaboration marketplace, Freelance programming jobs, Tech freelance gigs, Remote work opportunities, Coding challenges">

        <meta name="description" content="FreeAgent Hub is a platform  where you can post jobs and projects. You will find great talents for your projects here. It is a collaborative platform. There is opportunities for talents. ">
        <title>{{ $title ?? 'FreeAgent Hub' }}</title>

        @vite(['resources/css/app.css', 'resources/js/app.js'])
        @livewireStyles
    </head>
    <body class="bg-gradient-to-r from-purple-100 via-gray-500 to-red-300">
        @include('partials.navbar')
        <main class="min-h-screen">
            {{ $slot }}
        </main>
        @include('partials.footer')
        @livewireScripts
    </body>
</html>
