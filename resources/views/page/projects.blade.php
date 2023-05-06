@extends('layout', ['title' => 'Projects'])

@section('content')
    <section class="dark:text-gray-100">
        <div class="container max-w-5xl px-4 py-12 mx-auto">
            <div class="grid gap-4 mx-4 sm:grid-cols-12">
                <div class="col-span-12 sm:col-span-3">
                    <div class="text-center sm:text-left mt-3 mb-14 before:block before:w-40 before:h-3 before:mb-5 before:rounded-md before:mx-auto sm:before:mx-0 before:dark:bg-orange-500">
                        <h3 class="text-3xl font-semibold">Projects</h3>
                        <span class="text-xs font-medium tracking-wider dark:text-gray-400">Please note that some links might be dead or have changed.</span>
                    </div>
                </div>
                <div class="relative col-span-12 px-4 space-y-6 sm:col-span-9">
                    <div class="col-span-12 space-y-12 relative px-4 sm:col-span-8 sm:space-y-8 sm:before:absolute sm:before:top-2 sm:before:bottom-0 sm:before:w-0.5 sm:before:-left-3 before:dark:bg-gray-700">
                        @foreach (config('projects') as $project)
                            <div class="flex flex-col sm:relative sm:before:absolute sm:before:top-2 sm:before:w-4 sm:before:h-4 sm:before:rounded-full sm:before:left-[-35px] sm:before:z-[1] before:dark:bg-orange-500">
                                <h2 class="text-2xl font-semibold tracking-wide">{{ $project['name'] }}</h2>
                                @if (Arr::exists($project, 'link'))
                                    @if (Arr::exists($project['link'], 'links'))
                                        @foreach ($project['link']['links'] as $link)
                                            <h3 class="text-sm lg:text-base"><i class="fas fa-globe text-gray-400"></i> <a href="{{ $link['url'] }}">{{ $link['title'] }}</a></h3>
                                        @endforeach
                                    @else
                                        <h3 class="text-sm lg:text-base"><i class="fas fa-globe text-gray-400"></i> <a {{ $project['link']['is_private'] ? 'class="italic"' : 'href=' . $project['link']['url'] }}>{{ $project['link']['is_private'] ? 'Private' : $project['link']['url'] }}</a></h3>
                                    @endif
                                @endif
                                <time class="text-xs tracking-wide uppercase dark:text-gray-400">{{ $project['year'] }}</time>
                                <div class="text-xs tracking-wide dark:text-gray-400">
                                    TECH STACK:
                                    @if (is_array($project['tech_stack']))
                                        <ul class="list-disc list-inside">
                                            @foreach ($project['tech_stack'] as $techStack)
                                                <li class="font-semibold">{{ $techStack }}</li>
                                            @endforeach
                                        </ul>
                                    @else
                                        <span class="font-semibold">{{ $project['tech_stack'] }}</span>
                                    @endif
                                </div>
                                <p class="mt-3">
                                    @if (is_array($project['description']))
                                        <ul class="list-disc list-inside">
                                            @foreach ($project['description'] as $description)
                                                <li>{{ $description }}</li>
                                            @endforeach
                                        </ul>
                                    @else
                                        {{ $project['description'] }}
                                    @endif
                                </p>
                            </div>
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
