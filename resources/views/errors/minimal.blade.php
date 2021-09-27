<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>@yield('title')</title>

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">

        <!-- Styles -->
        <link rel="stylesheet" href="{{ asset('css/app.css') }}">
        <link rel="stylesheet" href="{{ asset('css/fontawesome.css') }}">

        <!-- Scripts -->
        <script src="{{ asset('js/app.js') }}" defer></script>

    </head>
    <body class="antialiased">
        <div class="h-screen bg-cover bg-no-repeat bg-center" style="background-image: url({{ asset('images/bg-error.jpg') }})">
            <div class="py-2 px-4 flex justify-between items-center">
                <div class="bg-opacity-70 text-yellow-600 bg-black px-6 py-2 rounded-full font-bold text-xl">
                    <a href="/">Kusmayadi</a>
                </div>

                <div>
                    <ul class="flex bg-black bg-opacity-70 text-white rounded-full px-4 py-2 text-sm font-medium">
                        <li>
                            <a href="{{ route('page', ['page' => 'work-experience']) }}" class="{{ (\Arr::exists(\Route::current()->parameters, 'page') AND \Route::current()->parameters['page'] === 'work-experience') ? 'active' : '' }}">
                                <i class="fas fa-briefcase mr-1"></i>Work Experience
                            </a>
                        </li>

                        <li class="ml-5">
                            <a href="{{ route('page', ['page' => 'projects']) }}" class="{{ (\Arr::exists(\Route::current()->parameters, 'page') AND \Route::current()->parameters['page'] === 'projects') ? 'active' : '' }}">
                                <i class="fas fa-archive mr-1"></i>Projects
                            </a>
                        </li>

                        <li class="ml-5">
                            <a href="{{ route('page', ['page' => 'open-source']) }}" class="{{ (\Arr::exists(\Route::current()->parameters, 'page') AND \Route::current()->parameters['page'] === 'open-source') ? 'active' : '' }}">
                                <i class="fas fa-code mr-1"></i>Open Source
                            </a>
                        </li>

                        <li class="ml-5">
                            <a href="{{ route('page', ['page' => 'tech-stack']) }}" class="{{ (\Arr::exists(\Route::current()->parameters, 'page') AND \Route::current()->parameters['page'] === 'tech-stack') ? 'active' : '' }}">
                                <i class="fas fa-layer-group mr-1"></i>Tech Stack
                            </a>
                        </li>

                        <li class="ml-5">
                            <a href="{{ route('page', ['page' => 'contact']) }}" class="{{ (\Arr::exists(\Route::current()->parameters, 'page') AND \Route::current()->parameters['page'] === 'contact') ? 'active' : '' }}">
                                <i class="fas fa-envelope mr-1"></i>Contact
                            </a>
                        </li>
                    </ul>
                </div>
            </div>

            @if (\Arr::exists(\Route::current()->parameters, 'page'))
            <div class="text-center mx-auto w-full h-3/4 px-4 py-4 mt-60">
                <div class="px-10 flex justify-center text-9xl text-white">
                    <div class="px-4 tracking-wider filter drop-shadow-xl">
                        @yield('code') |
                    </div>

                    <div class="ml-4 uppercase tracking-wider filter drop-shadow-xl">
                        @yield('message')
                    </div>
                </div>
            </div>
            @endif

            <div class="absolute bottom-2 text-gray-400 text-xs px-2">
                Photo by: <a href="https://unsplash.com/@mantashesthaven" target="unsplash">Mantas Hesthaven</a>
            </div>
        </div>
    </body>
</html>
