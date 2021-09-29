@extends('layout', ['image' => $unsplashImage, 'title' => 'Open Source'])

@section('content')
    <h1 class="text-5xl text-yellow-600 filter drop-shadow-md mt-8">Open Source</h1>

    <div class="mt-10">
        <div class="mb-6 leading-relaxed">
            <h2 class="text-2xl">Artisan User</h2>
            <p>Laravel package for managing users through artisan console.</p>
            <p class="tech-stack"><span>Language:</span> PHP</p>
            <p class="tech-stack"><span>Framework:</span> Laravel</p>
            <p class="text-gray-400 text-sm"><i class="fas fa-globe"></i> <a target="packagist" href="https://packagist.org/packages/kusmayadi/artisan-user">Packagist</a></p>
            <p class="text-gray-400 text-sm"><i class="fab fa-github"></i> <a target="github" href="https://github.com/kusmayadi/artisan-user-management">Source Code</a></p>
        </div>

        <div class="mb-6 leading-relaxed">
            <h2 class="text-2xl">brankas</h2>
            <p>Web based password keeper.</p>
            <p class="tech-stack"><span>Language:</span> PHP</p>
            <p class="tech-stack"><span>Framework:</span> Laravel 6</p>
            <p class="text-gray-400 text-sm"><i class="fab fa-github"></i> <a target="github" href="https://github.com/kusmayadi/brankas">Source Code</a></p>
        </div>

        <div class="mb-6 leading-relaxed">
            <h2 class="text-2xl">nl2p</h2>
            <p>A simple function to convert line breaks into &lt;p&gt;</p>
            <p class="tech-stack"><span>Language:</span> PHP</p>
            <p class="text-gray-400 text-sm"><i class="fas fa-globe"></i> <a target="packagist" href="https://packagist.org/packages/kusmayadi/nl2p">Packagist</a></p>
            <p class="text-gray-400 text-sm"><i class="fab fa-github"></i> <a target="github" href="https://github.com/kusmayadi/nl2p">Source Code</a></p>
        </div>
    </div>
@endsection
