@extends('layout', ['image' => $unsplashImage, 'title' => 'Open Source'])

@section('content')
    <h1 class="text-2xl lg:text-5xl text-yellow-600 filter drop-shadow-md">Open Source</h1>

    <div class="mt-6 lg:mt-10">
        <div class="mb-6 leading-relaxed">
            <h2 class="text-lg lg:text-2xl">Artisan User</h2>
            <p class="text-xs lg:text-base">Laravel package for managing users through artisan console.</p>
            <p class="text-xs lg:text-base"><span>Language:</span> PHP</p>
            <p class="text-xs lg:text-base"><span>Framework:</span> Laravel</p>
            <p class="text-gray-400 text-xs lg:text-sm"><i class="fas fa-globe"></i> <a target="packagist" href="https://packagist.org/packages/kusmayadi/artisan-user">Packagist</a></p>
            <p class="text-gray-400 text-xs lg:text-sm"><i class="fab fa-github"></i> <a target="github" href="https://github.com/kusmayadi/artisan-user-management">Source Code</a></p>
        </div>

        <div class="mb-6 leading-relaxed">
            <h2 class="text-lg lg:text-2xl">brankas</h2>
            <p class="text-xs lg:text-base">Web based password keeper.</p>
            <p class="text-xs lg:text-base"><span>Language:</span> PHP</p>
            <p class="text-xs lg:text-base"><span>Framework:</span> Laravel 6</p>
            <p class="text-gray-400 text-xs lg:text-sm"><i class="fab fa-github"></i> <a target="github" href="https://github.com/kusmayadi/brankas">Source Code</a></p>
        </div>

        <div class="mb-6 leading-relaxed">
            <h2 class="text-lg lg:text-2xl">nl2p</h2>
            <p class="text-xs lg:text-base">A simple function to convert line breaks into &lt;p&gt;</p>
            <p class="text-xs lg:text-base"><span>Language:</span> PHP</p>
            <p class="text-gray-400 text-xs lg:text-sm"><i class="fas fa-globe"></i> <a target="packagist" href="https://packagist.org/packages/kusmayadi/nl2p">Packagist</a></p>
            <p class="text-gray-400 text-xs lg:text-sm"><i class="fab fa-github"></i> <a target="github" href="https://github.com/kusmayadi/nl2p">Source Code</a></p>
        </div>
    </div>
@endsection
