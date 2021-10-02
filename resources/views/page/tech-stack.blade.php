@extends('layout', ['image' => $unsplashImage, 'title' => 'Tech Stack'])

@section('content')
    <h1 class="text-2xl lg:text-5xl text-yellow-600 filter drop-shadow-md">Tech Stack</h1>

    <div class="mt-6 lg:mt-10 grid grid-cols-5 gap-4 md:grid-cols-4 md:gap-10 lg:gap-20">
        @foreach (config('techstack') as $stack)
            <div>
                <a href="{{ $stack['url'] }}" target="techstack">
                    <img src="{{ asset('images/' . $stack['image']) }}" alt="{{ $stack['name'] }}" class="object-center h-20 w-full">
                </a>
            </div>
        @endforeach
    </div>
@endsection
