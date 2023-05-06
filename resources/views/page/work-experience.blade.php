@extends('layout', ['title' => 'Work Experience'])

@section('content')
    <section class="dark:text-gray-100">
        <div class="container max-w-5xl px-4 py-12 mx-auto">
            <div class="grid gap-4 mx-4 sm:grid-cols-12">
                <div class="col-span-12 sm:col-span-3">
                    <div class="text-center sm:text-left mt-3 mb-14 before:block before:w-40 before:h-3 before:mb-5 before:rounded-md before:mx-auto sm:before:mx-0 before:dark:bg-orange-500">
                        <h3 class="text-3xl font-semibold">Work Experience</h3>
                    </div>
                </div>
                <div class="relative col-span-12 px-4 space-y-6 sm:col-span-9">
                    <div class="col-span-12 space-y-12 relative px-4 sm:col-span-8 sm:space-y-8 sm:before:absolute sm:before:top-2 sm:before:bottom-0 sm:before:w-0.5 sm:before:-left-3 before:dark:bg-gray-700">
                        <div class="flex flex-col sm:relative sm:before:absolute sm:before:top-2 sm:before:w-4 sm:before:h-4 sm:before:rounded-full sm:before:left-[-35px] sm:before:z-[1] before:dark:bg-orange-500">
                            <h2 class="text-2xl font-semibold tracking-wide">Senior Developer</h2>
                            <h3 class="text-xl font-semibold tracking-wide">VE Capital Asia</h3>
                            <h4 class="text-sm lg:text-base"><i class="fas fa-globe text-gray-400"></i> <a href="https://vecapital.asia/">vecapital.asia</a></h4>
                            <time class="text-xs tracking-wide uppercase dark:text-gray-400">Jul 2020 - Mar 2023</time>
                            <div class="text-xs tracking-wide uppercase dark:text-gray-400">Remote (Singapore Based)</div>
                            {{-- <p class="mt-3">Pellentesque feugiat ante at nisl efficitur, in mollis orci scelerisque. Interdum et malesuada fames ac ante ipsum primis in faucibus.</p> --}}
                        </div>

                        <div class="flex flex-col sm:relative sm:before:absolute sm:before:top-2 sm:before:w-4 sm:before:h-4 sm:before:rounded-full sm:before:left-[-35px] sm:before:z-[1] before:dark:bg-orange-500">
                            <h2 class="text-2xl font-semibold tracking-wide">CTO</h2>
                            <h3 class="text-xl font-semibold tracking-wide">PT Cerita Teknologi Indonesia</h3>
                            <h4 class="text-sm lg:text-base"><i class="fas fa-globe text-gray-400"></i> <a href="https://restock.id">restock.id</a></h4>
                            <time class="text-xs tracking-wide uppercase dark:text-gray-400">Sep 2019 - Feb 2020</time>
                            <div class="text-xs tracking-wide uppercase dark:text-gray-400">Jakarta, Indonesia</div>
                            {{-- <p class="mt-3">Morbi vulputate aliquam libero non dictum. Aliquam sit amet nunc ut diam aliquet tincidunt nec nec dui. Donec mollis turpis eget egestas sodales.</p> --}}
                        </div>

                        <div class="flex flex-col sm:relative sm:before:absolute sm:before:top-2 sm:before:w-4 sm:before:h-4 sm:before:rounded-full sm:before:left-[-35px] sm:before:z-[1] before:dark:bg-orange-500">
                            <h2 class="text-2xl font-semibold tracking-wide">CTO</h2>
                            <h3 class="text-xl font-semibold tracking-wide">PT Brodo Ganesha Indonesia</h3>
                            <h4 class="text-sm lg:text-base"><i class="fas fa-globe text-gray-400"></i> <a href="https://bro.do">bro.do</a></h4>
                            <time class="text-xs tracking-wide uppercase dark:text-gray-400">Dec 2016 - Aug 2019</time>
                            <div class="text-xs tracking-wide uppercase dark:text-gray-400">Jakarta, Indonesia</div>
                            {{-- <p class="mt-3">Suspendisse tincidunt, arcu nec faucibus efficitur, justo velit consectetur nisl, sit amet condimentum lacus orci nec purus. Mauris quis quam suscipit, vehicula felis id, vehicula enim.</p> --}}
                        </div>

                        <div class="flex flex-col sm:relative sm:before:absolute sm:before:top-2 sm:before:w-4 sm:before:h-4 sm:before:rounded-full sm:before:left-[-35px] sm:before:z-[1] before:dark:bg-orange-500">
                            <h2 class="text-2xl font-semibold tracking-wide">Lead Developer</h2>
                            <h3 class="text-xl font-semibold tracking-wide">PT Bursa Interaktif Gemilang</h3>
                            <h4 class="text-sm lg:text-base"><i class="fas fa-globe text-gray-400"></i> <a href="https://brambang.com">brambang.com</a></h4>
                            <time class="text-xs tracking-wide uppercase dark:text-gray-400">Oct 2016 - Nov 2016</time>
                            <div class="text-xs tracking-wide uppercase dark:text-gray-400">Jakarta, Indonesia</div>
                            {{-- <p class="mt-3">Pellentesque feugiat ante at nisl efficitur, in mollis orci scelerisque. Interdum et malesuada fames ac ante ipsum primis in faucibus.</p> --}}
                        </div>

                        <div class="flex flex-col sm:relative sm:before:absolute sm:before:top-2 sm:before:w-4 sm:before:h-4 sm:before:rounded-full sm:before:left-[-35px] sm:before:z-[1] before:dark:bg-orange-500">
                            <h2 class="text-2xl font-semibold tracking-wide">Lead Developer</h2>
                            <h3 class="text-xl font-semibold tracking-wide">PT Pikmiap Ekspres Global</h3>
                            <h4 class="text-sm lg:text-base"><i class="fas fa-globe text-gray-400"></i> <a href="https://pikmiap.com">pikmiap.com</a></h4>
                            <time class="text-xs tracking-wide uppercase dark:text-gray-400">Apr 2016 - Sep 2016</time>
                            <div class="text-xs tracking-wide uppercase dark:text-gray-400">Jakarta, Indonesia</div>
                            {{-- <p class="mt-3">Morbi vulputate aliquam libero non dictum. Aliquam sit amet nunc ut diam aliquet tincidunt nec nec dui. Donec mollis turpis eget egestas sodales.</p> --}}
                        </div>

                        <div class="flex flex-col sm:relative sm:before:absolute sm:before:top-2 sm:before:w-4 sm:before:h-4 sm:before:rounded-full sm:before:left-[-35px] sm:before:z-[1] before:dark:bg-orange-500">
                            <h2 class="text-2xl font-semibold tracking-wide">CTO</h2>
                            <h3 class="text-xl font-semibold tracking-wide">PT Laju Video Media</h3>
                            <h4 class="text-sm lg:text-base"><i class="fas fa-globe text-gray-400"></i> <a href="https://lv8.tv">lv8.tv</a></h4>
                            <time class="text-xs tracking-wide uppercase dark:text-gray-400">Nov 2013 - Apr 2016</time>
                            <div class="text-xs tracking-wide uppercase dark:text-gray-400">Jakarta, Indonesia</div>
                            {{-- <p class="mt-3">Suspendisse tincidunt, arcu nec faucibus efficitur, justo velit consectetur nisl, sit amet condimentum lacus orci nec purus. Mauris quis quam suscipit, vehicula felis id, vehicula enim.</p> --}}
                        </div>

                        <div class="flex flex-col sm:relative sm:before:absolute sm:before:top-2 sm:before:w-4 sm:before:h-4 sm:before:rounded-full sm:before:left-[-35px] sm:before:z-[1] before:dark:bg-orange-500">
                            <h2 class="text-2xl font-semibold tracking-wide">Manager - Web Developer</h2>
                            <h3 class="text-xl font-semibold tracking-wide">PT Kreatif Media Karya</h3>
                            <h4 class="text-sm lg:text-base"><i class="fas fa-globe text-gray-400"></i> <a href="https://www.kmkonline.co.id">kmkonline.co.id</a> / <a href="https://liputan6.com">liputan6.com</a></h4>
                            <time class="text-xs tracking-wide uppercase dark:text-gray-400">Jul 2013 - Oct 2013</time>
                            <div class="text-xs tracking-wide uppercase dark:text-gray-400">Jakarta, Indonesia</div>
                            {{-- <p class="mt-3">Suspendisse tincidunt, arcu nec faucibus efficitur, justo velit consectetur nisl, sit amet condimentum lacus orci nec purus. Mauris quis quam suscipit, vehicula felis id, vehicula enim.</p> --}}
                        </div>

                        <div class="flex flex-col sm:relative sm:before:absolute sm:before:top-2 sm:before:w-4 sm:before:h-4 sm:before:rounded-full sm:before:left-[-35px] sm:before:z-[1] before:dark:bg-orange-500">
                            <h2 class="text-2xl font-semibold tracking-wide">Supervisor, Mid Developer</h2>
                            <h3 class="text-xl font-semibold tracking-wide">Multiply</h3>
                            <h4 class="text-sm lg:text-base"><i class="fas fa-globe text-gray-400"></i> <a href="https://multiply.com">multiply.com</a></h4>
                            <time class="text-xs tracking-wide uppercase dark:text-gray-400">Sep 2012 - May 2013</time>
                            <div class="text-xs tracking-wide uppercase dark:text-gray-400">Jakarta, Indonesia</div>
                            {{-- <p class="mt-3">Suspendisse tincidunt, arcu nec faucibus efficitur, justo velit consectetur nisl, sit amet condimentum lacus orci nec purus. Mauris quis quam suscipit, vehicula felis id, vehicula enim.</p> --}}
                        </div>

                        <div class="flex flex-col sm:relative sm:before:absolute sm:before:top-2 sm:before:w-4 sm:before:h-4 sm:before:rounded-full sm:before:left-[-35px] sm:before:z-[1] before:dark:bg-orange-500">
                            <h2 class="text-2xl font-semibold tracking-wide">Developer</h2>
                            <h3 class="text-xl font-semibold tracking-wide">PT Trijaya Dewata</h3>
                            <h4 class="text-sm lg:text-base"><i class="fas fa-globe text-gray-400"></i> <a href="http://trijayadewata.com/">trijayadewata.com</a> / <a href="https://www.baliplus.com/">baliplus.com</a></h4>
                            <time class="text-xs tracking-wide uppercase dark:text-gray-400">Aug 2011 - Aug 2012</time>
                            <div class="text-xs tracking-wide uppercase dark:text-gray-400">Denpasar, Bali, Indonesia</div>
                            {{-- <p class="mt-3">Suspendisse tincidunt, arcu nec faucibus efficitur, justo velit consectetur nisl, sit amet condimentum lacus orci nec purus. Mauris quis quam suscipit, vehicula felis id, vehicula enim.</p> --}}
                        </div>

                        <div class="flex flex-col sm:relative sm:before:absolute sm:before:top-2 sm:before:w-4 sm:before:h-4 sm:before:rounded-full sm:before:left-[-35px] sm:before:z-[1] before:dark:bg-orange-500">
                            <h2 class="text-2xl font-semibold tracking-wide">IT Developer</h2>
                            <h3 class="text-xl font-semibold tracking-wide">Kemana.com</h3>
                            <h4 class="text-sm lg:text-base"><i class="fas fa-globe text-gray-400"></i> <a href="https://kemana.com">kemana.com</a></h4>
                            <time class="text-xs tracking-wide uppercase dark:text-gray-400">Nov 2009 - Jun 2010</time>
                            <div class="text-xs tracking-wide uppercase dark:text-gray-400">Denpasar, Bali, Indonesia</div>
                            {{-- <p class="mt-3">Suspendisse tincidunt, arcu nec faucibus efficitur, justo velit consectetur nisl, sit amet condimentum lacus orci nec purus. Mauris quis quam suscipit, vehicula felis id, vehicula enim.</p> --}}
                        </div>

                        <div class="flex flex-col sm:relative sm:before:absolute sm:before:top-2 sm:before:w-4 sm:before:h-4 sm:before:rounded-full sm:before:left-[-35px] sm:before:z-[1] before:dark:bg-orange-500">
                            <h2 class="text-2xl font-semibold tracking-wide">Web Programmer</h2>
                            <h3 class="text-xl font-semibold tracking-wide">PT Baru Di Bali</h3>
                            <h4 class="text-sm lg:text-base"><i class="fas fa-globe text-gray-400"></i> <a href="http://barudibali.com">barudibali.com</a></h4>
                            <time class="text-xs tracking-wide uppercase dark:text-gray-400">Jul 2009 - Oct 2009</time>
                            <div class="text-xs tracking-wide uppercase dark:text-gray-400">Denpasar, Bali, Indonesia</div>
                            {{-- <p class="mt-3">Suspendisse tincidunt, arcu nec faucibus efficitur, justo velit consectetur nisl, sit amet condimentum lacus orci nec purus. Mauris quis quam suscipit, vehicula felis id, vehicula enim.</p> --}}
                        </div>

                        <div class="flex flex-col sm:relative sm:before:absolute sm:before:top-2 sm:before:w-4 sm:before:h-4 sm:before:rounded-full sm:before:left-[-35px] sm:before:z-[1] before:dark:bg-orange-500">
                            <h2 class="text-2xl font-semibold tracking-wide">Web Developer</h2>
                            <h3 class="text-xl font-semibold tracking-wide">Harver Group, LLC</h3>
                            <h4 class="text-sm lg:text-base"><i class="fas fa-globe text-gray-400"></i> <a href="https://saywire.com">saywire.com</a></h4>
                            <time class="text-xs tracking-wide uppercase dark:text-gray-400">Aug 2006 - May 2009</time>
                            <div class="text-xs tracking-wide uppercase dark:text-gray-400">Remote (US Based)</div>
                            {{-- <p class="mt-3">Suspendisse tincidunt, arcu nec faucibus efficitur, justo velit consectetur nisl, sit amet condimentum lacus orci nec purus. Mauris quis quam suscipit, vehicula felis id, vehicula enim.</p> --}}
                        </div>

                        <div class="flex flex-col sm:relative sm:before:absolute sm:before:top-2 sm:before:w-4 sm:before:h-4 sm:before:rounded-full sm:before:left-[-35px] sm:before:z-[1] before:dark:bg-orange-500">
                            <h2 class="text-2xl font-semibold tracking-wide">Various Positions</h2>
                            <h3 class="text-xl font-semibold tracking-wide">PT Agranet Multicitra Siberkom, LLC</h3>
                            <h4 class="text-sm lg:text-base"><i class="fas fa-globe text-gray-400"></i> <a href="https://detik.com">detik.com</a></h4>
                            <time class="text-xs tracking-wide uppercase dark:text-gray-400">Nov 1995 - Aug 2006</time>
                            <div class="text-xs tracking-wide uppercase dark:text-gray-400">Jakarta, Indonesia</div>

                            <div class="mt-3 col-span-12 space-y-8 relative px-4 sm:col-span-8 sm:space-y-4 sm:before:absolute sm:before:top-2 sm:before:bottom-0 sm:before:w-0.5 sm:before:-left-3 before:dark:bg-gray-700">
                                <div class="flex flex-col sm:relative sm:before:absolute sm:before:top-2 sm:before:w-3 sm:before:h-3 sm:before:rounded-full sm:before:left-[-33px] sm:before:z-[1] before:dark:bg-orange-400">
                                    <h2 class="text-md font-semibold tracking-wide">Research & Development Supervisor</h2>
                                    <time class="text-xs tracking-wide uppercase dark:text-gray-400">Jun 2005 - Aug 2006</time>
                                </div>

                                <div class="flex flex-col sm:relative sm:before:absolute sm:before:top-2 sm:before:w-3 sm:before:h-3 sm:before:rounded-full sm:before:left-[-33px] sm:before:z-[1] before:dark:bg-orange-400">
                                    <h2 class="text-md font-semibold tracking-wide">Mobile Platform Development Supervisor</h2>
                                    <time class="text-xs tracking-wide uppercase dark:text-gray-400">Jan 2003 - May 2005</time>
                                </div>

                                <div class="flex flex-col sm:relative sm:before:absolute sm:before:top-2 sm:before:w-3 sm:before:h-3 sm:before:rounded-full sm:before:left-[-33px] sm:before:z-[1] before:dark:bg-orange-400">
                                    <h2 class="text-md font-semibold tracking-wide">Online Platform Development Supervisor</h2>
                                    <time class="text-xs tracking-wide uppercase dark:text-gray-400">Feb 2001 - Dec 2003</time>
                                </div>

                                <div class="flex flex-col sm:relative sm:before:absolute sm:before:top-2 sm:before:w-3 sm:before:h-3 sm:before:rounded-full sm:before:left-[-33px] sm:before:z-[1] before:dark:bg-orange-400">
                                    <h2 class="text-md font-semibold tracking-wide">Senior Programmer</h2>
                                    <time class="text-xs tracking-wide uppercase dark:text-gray-400">Jan 2000 - Jan 2001</time>
                                </div>

                                <div class="flex flex-col sm:relative sm:before:absolute sm:before:top-2 sm:before:w-3 sm:before:h-3 sm:before:rounded-full sm:before:left-[-33px] sm:before:z-[1] before:dark:bg-orange-400">
                                    <h2 class="text-md font-semibold tracking-wide">Programmer</h2>
                                    <time class="text-xs tracking-wide uppercase dark:text-gray-400">Nov 1995 - Dec 1999</time>
                                </div>
                            </div>

                            {{-- <p class="mt-8">Suspendisse tincidunt, arcu nec faucibus efficitur, justo velit consectetur nisl, sit amet condimentum lacus orci nec purus. Mauris quis quam suscipit, vehicula felis id, vehicula enim.</p> --}}
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
