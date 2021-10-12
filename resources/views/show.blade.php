<x-guest-layout>
    <div class="container mx-auto my-10">
        <section class="px-6 py-4">
            <a href="/"
                class="transition-colors duration-300 relative inline-flex items-center text-lg hover:text-blue-500 w-full mt-4">
                <svg width="22" height="22" viewBox="0 0 22 22" class="mr-2">
                    <g fill="none" fill-rule="evenodd">
                        <path stroke="#000" stroke-opacity=".012" stroke-width=".5" d="M21 1v20.16H.84V1z">
                        </path>
                        <path class="fill-current"
                            d="M13.854 7.224l-3.847 3.856 3.847 3.856-1.184 1.184-5.04-5.04 5.04-5.04z">
                        </path>
                    </g>
                </svg>
                Back to Posts
            </a>
            <main class="max-w-6xl mx-auto mt-6 space-y-6">
                <article class="max-w-4xl mx-auto lg:grid lg:grid-cols-12 gap-x-10">
                    <div class="col-span-4 lg:text-center lg:pt-14 mb-10">
                        
                        <img src="{{ asset('storage/' . $post->thumbnail) }}" alt="" class="rounded-xl" height="400" width="400">
    
                        <p class="mt-4 block text-gray-400 text-xs">
                            Published <time>{{ $post->created_at->diffForHumans() }}</time>
                        </p>
    
                        <div class="flex items-center lg:justify-center text-sm mt-4">
                            <!-- <img src="/images/lary-avatar.svg" alt="Lary avatar"> -->
                            <div class="ml-3 text-left">
                                <h5 class="font-bold">{{ $post->title }}</h5>
                                <h6>Location - {{ $post->location}}</h6>
                                <br>
                                <a href="{{ $post->website }}" class="self-end object-bottom mt-4"><button class="inline-flex items-center px-4 py-2 bg-gray-800 border border-transparent rounded-md font-semibold text-xs text-white uppercase tracking-widest hover:bg-gray-700 active:bg-gray-900 focus:outline-none focus:border-gray-900 focus:ring ring-gray-300 disabled:opacity-25 transition ease-in-out duration-150">WEBSITE</button></a>
                            </div>
                        </div>
                    </div>
    
                    <div class="col-span-8">
                        <div class="hidden lg:flex justify-between mb-6">
                            <div class="space-x-2">
                                <a href="/?category={{ $post->category->slug }}"
                                    class="px-3 py-1 border border-blue-500 rounded-full text-blue-500 text-xs uppercase font-semibold"
                                    style="font-size: 10px">{{ $post->category->name }}
                                </a>
                            </div>
                        </div>
    
                        <h1 class="font-bold text-3xl lg:text-4xl mb-10">
                            {{ $post->title }}
                        </h1>
    
                        <div class="space-y-4 lg:text-lg leading-loose">
                            {!! nl2br($post->body)  !!}
                        </div>

                        <p class="text-xs mt-10">*Some pages on this site are auto-generated and not updated.</p>
                        <p class="text-xs">For any questions or comments please email <a href="mailto:contact@wyattmarshall.dev" class="text-blue-500 hover:underline">contact@wyattmarshall.dev</a></p>
                    </div>

                </article> 
            </main>
        </section>
</div>
</x-guest-layout>