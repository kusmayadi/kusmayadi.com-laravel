<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}" class="dark">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title> @if (isset($title)) {{ $title }} -  @endif {{ config('app.name', 'Laravel') }}</title>

        <link rel="icon" type="image/png" sizes="192x192" href="/android-chrome-192x192.png">
        <link rel="icon" type="image/png" sizes="512x512" href="/android-chrome-512x512.png">
        <link rel="apple-touch-icon" href="/apple-touch-icon.png">

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css2?family=Source+Code+Pro:ital,wght@0,200;0,300;0,400;0,500;0,600;0,700;0,900;1,200;1,300;1,400;1,500;1,600;1,700;1,900&display=swap" rel="stylesheet">

        <!-- Styles -->
        <link rel="stylesheet" href="{{ asset('css/app.css') }}">
        <link rel="stylesheet" href="{{ asset('css/fontawesome.css') }}">

        <!-- Scripts -->
        <script src="{{ asset('js/app.js') }}" defer></script>
    </head>
    <body class="bg-slate-800">
        <div x-data="{ open: false }" class="px-4">

            @if (\Arr::exists(\Route::current()->parameters, 'page'))
                <div class="py-2 flex justify-between items-center">
                    <div @click.away="open = false" class="flex items-center text-orange-500 px-3 lg:px-6 py-2 rounded-md font-bold text-xs lg:text-xl">
                        <div class="mr-2">
                            <div @click="open = !open" class="flex items-center space-x-4">
                                <i class="fas fa-bars cursor-pointer"></i>
                                <div class="font-semibold uppercase cursor-pointer">Kusmayadi</div>
                            </div>

                            <ul x-show="open" class="fixed left-6 mt-2 z-50 text-white rounded-md px-4 py-2 text-sm font-semibold leading-6">
                                <li>
                                    <a href="/" class="{{ (!\Arr::exists(\Route::current()->parameters, 'page')) ? 'active' : '' }}">
                                        Home
                                    </a>
                                </li>

                                <li>
                                    <a href="{{ route('page', ['page' => 'work-experience']) }}" class="{{ (\Arr::exists(\Route::current()->parameters, 'page') AND \Route::current()->parameters['page'] === 'work-experience') ? 'active' : '' }}">
                                        Work Experience
                                    </a>
                                </li>

                                <li>
                                    <a href="{{ route('page', ['page' => 'projects']) }}" class="{{ (\Arr::exists(\Route::current()->parameters, 'page') AND \Route::current()->parameters['page'] === 'projects') ? 'active' : '' }}">
                                        Projects
                                    </a>
                                </li>

                                <li>
                                    <a href="{{ route('page', ['page' => 'open-source']) }}" class="{{ (\Arr::exists(\Route::current()->parameters, 'page') AND \Route::current()->parameters['page'] === 'open-source') ? 'active' : '' }}">
                                        Open Source
                                    </a>
                                </li>

                                <li>
                                    <a href="{{ route('page', ['page' => 'tech-stack']) }}" class="{{ (\Arr::exists(\Route::current()->parameters, 'page') AND \Route::current()->parameters['page'] === 'tech-stack') ? 'active' : '' }}">
                                        Tech Stack
                                    </a>
                                </li>

                                <li>
                                    <a href="{{ route('page', ['page' => 'contact']) }}" class="{{ (\Arr::exists(\Route::current()->parameters, 'page') AND \Route::current()->parameters['page'] === 'contact') ? 'active' : '' }}">
                                        Contact
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            @endif

            <div class="w-full py-8 mt-4 text-gray-200 font-sans">
                @yield('content')
            </div>
        </div>
    </body>
</html>
