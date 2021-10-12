@props(['post'])
<a href="/post/{{ $post->id }}" class="flex flex-col rounded-xl bg-gray-300">

    <img src="{{ asset('storage/' . $post->thumbnail) }}" alt="Thumbnail Image" class="rounded-xl">

    <div class="flex flex-col p-4 flex-grow">
        <h1 class="mb-2 z-50">{{ $post->title }}</h1>
        <h2 class="mb-2"><small>Location - {{ $post->location }}</small></h2>
        <h3 class="flex-grow">{{ $post->excerpt }}</h3>
        <span class="self-end object-bottom mt-4">
            <button 
                class="inline-flex items-center px-4 py-2 bg-gray-800 border border-transparent rounded-md font-semibold text-xs text-white uppercase tracking-widest hover:bg-gray-700 active:bg-gray-900 focus:outline-none focus:border-gray-900 focus:ring ring-gray-300 disabled:opacity-25 transition ease-in-out duration-150'">
                Learn More
            </button>
        </span>
    </div>
</a>
