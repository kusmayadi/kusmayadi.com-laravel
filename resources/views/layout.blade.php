<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
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
    <body>
        <div x-data="{ open: false }" class="h-screen w-screen bg-cover bg-no-repeat bg-center filter blur-2xl px-4" style="background-image: url({{ asset('storage/' . $image->name) }})">

            <div class="py-2 flex justify-between items-center">
                <div @click.away="open = false" class="flex items-center bg-opacity-70 text-yellow-600 bg-black px-3 lg:px-6 py-2 rounded-md font-bold text-xs lg:text-xl">
                    <div class="lg:hidden mr-2">
                        <i @click="open = !open" class="fas fa-bars"></i>

                        <ul x-show="open" class="fixed left-4 mt-3 bg-black bg-opacity-90 z-50 text-white rounded-md px-4 py-3 text-xs font-medium leading-6">
                            <li>
                                <a href="{{ route('page', ['page' => 'work-experience']) }}" class="{{ (\Arr::exists(\Route::current()->parameters, 'page') AND \Route::current()->parameters['page'] === 'work-experience') ? 'active' : '' }}">
                                    <i class="fas fa-briefcase mr-1"></i>Work Experience
                                </a>
                            </li>

                            <li>
                                <a href="{{ route('page', ['page' => 'projects']) }}" class="{{ (\Arr::exists(\Route::current()->parameters, 'page') AND \Route::current()->parameters['page'] === 'projects') ? 'active' : '' }}">
                                    <i class="fas fa-archive mr-1"></i>Projects
                                </a>
                            </li>

                            <li>
                                <a href="{{ route('page', ['page' => 'open-source']) }}" class="{{ (\Arr::exists(\Route::current()->parameters, 'page') AND \Route::current()->parameters['page'] === 'open-source') ? 'active' : '' }}">
                                    <i class="fas fa-code mr-1"></i>Open Source
                                </a>
                            </li>

                            <li>
                                <a href="{{ route('page', ['page' => 'tech-stack']) }}" class="{{ (\Arr::exists(\Route::current()->parameters, 'page') AND \Route::current()->parameters['page'] === 'tech-stack') ? 'active' : '' }}">
                                    <i class="fas fa-layer-group mr-1"></i>Tech Stack
                                </a>
                            </li>

                            <li>
                                <a href="{{ route('page', ['page' => 'contact']) }}" class="{{ (\Arr::exists(\Route::current()->parameters, 'page') AND \Route::current()->parameters['page'] === 'contact') ? 'active' : '' }}">
                                    <i class="fas fa-envelope mr-1"></i>Contact
                                </a>
                            </li>
                        </ul>
                    </div>

                    <div @click="open = !open">Kusmayadi</div>
                </div>

                <div>
                    <ul class="hidden lg:flex bg-black bg-opacity-70 text-white rounded-md px-4 py-2 text-sm font-medium">
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
                            <a href="{{ route('page', ['page' => 'tech-stack']) }}" class="{{ (\Arr::exists(\Route::current()->parameters, 'page') AND \Route::current()->parameters['page'] === 'tech-stack') ? 'active' : '' }}">
                                <i class="fas fa-layer-group mr-1"></i>Tech Stack
                            </a>
                        </li>

                        <li class="ml-5">
                            <a href="{{ route('page', ['page' => 'open-source']) }}" class="{{ (\Arr::exists(\Route::current()->parameters, 'page') AND \Route::current()->parameters['page'] === 'open-source') ? 'active' : '' }}">
                                <i class="fas fa-code mr-1"></i>Open Source
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
                <div class="bg-white mx-auto w-full h-3/4 px-10 py-8 bg-opacity-90 mt-4 lg:mt-16 rounded-lg scrollbar-thin scrollbar-thumb-yellow-600 scrollbar-track-gray-200 scrollbar-track-rounded-lg scrollbar-thumb-rounded-lg overflow-y-scroll shadow-2xl">
                    @yield('content')
                </div>
            @endif

            <div class="absolute bottom-2 text-gray-400 text-xs px-2">
                Photo by: <a href="{{ $image->author_link }}" target="unsplash">{{ $image->author }}</a>
            </div>
        </div>
    </body>
</html>
