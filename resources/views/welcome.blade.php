<x-guest-layout>
    <div class="container mx-auto my-10">

        @if ($posts->count())
        <div class="w-4/6 md:w-auto mx-auto grid md:grid-cols-2 lg:grid-cols-4 gap-4 mb-6">
            @if ($posts->count() > 0)
                    @foreach ($posts as $post)
                        <x-card :post="$post" />
                    @endforeach
            @endif
        </div>

            {{ $posts->links() }}
        @else
            <p class="text-center">No posts yet</p>
        @endif




    </div>
</x-guest-layout> 
