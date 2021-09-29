@extends('layout', ['image' => $unsplashImage, 'title' => 'Contact'])

@section('content')
    <h1 class="text-5xl text-yellow-600 filter drop-shadow-md">Contact</h1>

    <div class="mt-10 h-3/4 flex flex-wrap content-center justify-between">
        <div class="text-4xl">
            <a href="https://www.linkedin.com/in/kusmayadi/" target="linkedin"><i class="fab fa-linkedin-in"></i> LinkedIn</a>
        </div>

        <div class="text-4xl">
            <a href="https://github.com/kusmayadi" target="github"><i class="fab fa-github"></i> Github</a>
        </div>

        <div class="text-4xl">
            <a href="https://twitter.com/kusmayadi" target="twitter"><i class="fab fa-twitter"></i> Twitter</a>
        </div>
    </div>
@endsection
