@extends('layout', ['title' => 'Contact'])

@section('content')
    <section class="dark:text-gray-100">
        <div class="container max-w-5xl px-4 py-12 mx-auto">
            <div class="grid gap-4 mx-4 sm:grid-cols-12">
                <div class="col-span-12 sm:col-span-3">
                    <div class="text-center sm:text-left mt-3 mb-14 before:block before:w-40 before:h-3 before:mb-5 before:rounded-md before:mx-auto sm:before:mx-0 before:dark:bg-orange-500">
                        <h3 class="text-3xl font-semibold">Contact</h3>
                    </div>
                </div>
                <div class="relative col-span-12 px-4 space-y-6 sm:col-span-9">
                    <div class="col-span-12 space-y-12 relative px-4 sm:col-span-8 sm:space-y-8 sm:before:absolute sm:before:top-2 sm:before:bottom-0 sm:before:w-0.5 sm:before:-left-3 before:dark:bg-gray-700">
                        <div class="flex flex-col sm:relative sm:before:absolute sm:before:top-2 sm:before:w-4 sm:before:h-4 sm:before:rounded-full sm:before:left-[-35px] sm:before:z-[1] before:dark:bg-orange-500">
                            <h2 class="text-2xl font-semibold tracking-wide"><i class="fab fa-linkedin-in"></i> LinkedIn</h2>
                            <div class="text-xs tracking-wide dark:text-gray-400"><a href="https://www.linkedin.com/in/kusmayadi/" target="linkedin">linkedin.com/in/kusmayadi</a></div>
                        </div>

                        <div class="flex flex-col sm:relative sm:before:absolute sm:before:top-2 sm:before:w-4 sm:before:h-4 sm:before:rounded-full sm:before:left-[-35px] sm:before:z-[1] before:dark:bg-orange-500">
                            <h2 class="text-2xl font-semibold tracking-wide"><i class="fab fa-github"></i> Github</h2>
                            <div class="text-xs tracking-wide dark:text-gray-400"><a href="https://github.com/kusmayadi" target="github">github.com/kusmayadi</a></div>
                        </div>

                        <div class="flex flex-col sm:relative sm:before:absolute sm:before:top-2 sm:before:w-4 sm:before:h-4 sm:before:rounded-full sm:before:left-[-35px] sm:before:z-[1] before:dark:bg-orange-500">
                            <h2 class="text-2xl font-semibold tracking-wide"><i class="fab fa-twitter"></i> Twitter</h2>
                            <div class="text-xs tracking-wide dark:text-gray-400"><a href="https://twitter.com/kusmayadi" target="twitter">@kusmayadi</a></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
