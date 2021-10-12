<x-app-layout>
    
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white h-auto border-b border-gray-200">
                    <h1 class="text-center md:text-left text-2xl mb-4">Your Organizations</h1>
                   <div class="grid grid-cols-1 lg:grid-cols-2 gap-4">
                        @foreach ($posts as $post)
                            <div class="">
                                <div class="mx-auto md:mx-0 bg-white max-w-lg border group rounded-lg shadow-sm flex flex-col md:flex-row items-center md:h-32">

                                    <div class="flex-grow flex flex-col justify-center h-full py-4 pl-2 text-sm overflow-hidden">
                                        <span class="font-bold text-base">{{ $post->title }}</span>
                                        <span>{{ $post->website}}</span>
                                    </div>
                                  
                                    <aside class="w-full md:w-auto visible group-hover:visible h-full text-center flex flex-col text-sm md:ml-auto md:border-l divide-y md:relative">
                                      <a class="border text-blue-500 hover:text-blue-700 md:h-1/2 flex items-center justify-center py-4 md:px-6" href="/dashboard/{{ $post->id }}/edit">Edit</a>
                                      <a class="border text-red-500 hover:text-red-700 md:h-1/2 md:flex md:items-center justify-center py-4 md:px-8" href="/dashboard/{{ $post->id }}/delete">Delete</a>
                                    </aside>
                                    
                                </div>
                            </div>
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
    </div>

    

    

</x-app-layout>
