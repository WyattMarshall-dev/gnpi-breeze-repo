<x-app-layout>
    
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Create New Organization') }}
        </h2>
    </x-slot>


    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200">
                    <section class="px-6 py-8 container mx-auto">
                        <h1 class="text-2xl mb-4">Organization Details</h1>
                        <div class="border border-gray-200 p-6 rounded-xl container mx-auto">
                         <form method="POST" action="/create/post" enctype="multipart/form-data">
                                 @csrf
                 
                                 <div class="mb-6">
                 
                                     <label for="title" class="block mb-2 uppercase font-bold text-xs text-gray-700">Organization Name</label>
                                     <input type="text"
                                             class="border border-gray-400 p-2 w-full"
                                             name="title"
                                             id="title"
                                             value="{{ old('title')}}"
                                             required>
                 
                                             @error('title')
                                                 <p class="text-red-500 text-sx mt-1">{{ $message }}</p>
                                             @enderror
                                 </div>

                                 <div class="mb-6">
                 
                                    <label for="thumbnail" class="block mb-2 uppercase font-bold text-xs text-gray-700">Thumbnail</label>
                                    <input type="file"
                                            class="border border-gray-400 p-2 w-full"
                                            name="thumbnail"
                                            id="thumbnail"
                                            value="{{ old('thumbnail')}}"
                                            required>
                
                                            @error('thumbnail')
                                                <p class="text-red-500 text-sx mt-1">{{ $message }}</p>
                                            @enderror
                                </div>
                 
                                 <div class="mb-6">
                 
                                    <label for="location" class="block mb-2 uppercase font-bold text-xs text-gray-700">Location
                                        <button type="button" class="group" > 
                                            <small class="border border-blue-500 text-blue-500 rounded-full px-1 text-xs">?</small>
                                            <span class="invisible group-focus:visible md:group-hover:visible bg-gray-900 text-white p-2 ml-2 mt-2 w-48 absolute rounded-xl">Choose the country, state, or region your organization operates in. Go with "Global" if you operate everywhere!</span>
                                        </button>
                                    </label>
                                     <input type="text"
                                             class="border border-gray-400 p-2 w-full"
                                             name="location"
                                             id="location"
                                             value="{{ old('location')}}"
                                             required>
                 
                                             @error('location')
                                                 <p class="text-red-500 text-sx mt-1">{{ $message }}</p>
                                             @enderror
                                 </div>
                
                                 <div class="mb-6">
                 
                                    <label for="excerpt" class="block mb-2 uppercase font-bold text-xs text-gray-700">Website
                                        <button type="button" class="group"> 
                                            <small class="border border-blue-500 text-blue-500 rounded-full px-1 text-xs">?</small>
                                            <span class="invisible group-focus:visible md:group-hover:visible bg-gray-900 text-white p-2 ml-2 mt-2 w-48 absolute rounded-xl">Make sure to include the full website address "http://www.yoursite.com". Just copy and paste from your browser!</span>
                                        </button>
                                    </label>
                                    <input type="text"
                                            class="border border-gray-400 p-2 w-full"
                                            name="website"
                                            id="website"
                                            value="{{ old('website')}}"
                                            required>
                
                                            @error('website')
                                                <p class="text-red-500 text-sx mt-1">{{ $message }}</p>
                                            @enderror
                                </div>
                 
                                 <div class="mb-6">
                                     
                                    <label for="excerpt" class="block mb-2 uppercase font-bold text-xs text-gray-700">Excerpt
                                        <button type="button" class="group" > 
                                            <small class="border border-blue-500 text-blue-500 rounded-full px-1 text-xs">?</small>
                                            <span class="invisible group-focus:visible md:group-hover:visible bg-gray-900 text-white p-2 ml-2 mt-2 w-48 absolute rounded-xl">Excerpts are short descriptions or summaries that display on the explore page. Try to keep it to 1-2 sentences.</span>
                                        </button>
                                    </label>
                                     
                                    <textarea type="text"
                                             class="border border-gray-400 p-2 w-full"
                                             name="excerpt"
                                             id="excerpt"
                                             required>{{ old('excerpt')}} </textarea>
                 
                                             @error('excerpt')
                                                 <p class="text-red-500 text-sx mt-1">{{ $message }}</p>
                                             @enderror
                                 </div>
                 
                                 <div class="mb-6">
                 
                                     <label for="body" class="block mb-2 uppercase font-bold text-xs text-gray-700">Description</label>
                                     <textarea type="text"
                                             class="border border-gray-400 p-2 w-full"
                                             name="body"
                                             id="body"
                                             rows="15"
                                             required>{{ old('body')}}</textarea>
                 
                                             @error('body')
                                                 <p class="text-red-500 text-sx mt-1">{{ $message }}</p>
                                             @enderror
                                 </div>
                 
                                 <div class="mb-6">
                 
                                     <label for="category_id" class="block mb-2 uppercase font-bold text-xs text-gray-700">Category</label>
                                     <select name="category_id" id="category_id">
                                         @foreach (\App\Models\Category::all() as $category)
                                         <option value="{{ $category->id }}" {{ old('category_id') == $category->id ? 'selected' : '' }}>{{ $category->name }}</option>
                                         @endforeach
                                     </select>
                 
                                             @error('category_id')
                                                 <p class="text-red-500 text-sx mt-1">{{ $message }}</p>
                                             @enderror
                                 </div>
                 
                                 <button type="submit" class="bg-blue-500 text-white uppercase font-semibold text-xs py-2 px-10 rounded-2xl hover:bg-blue-600">Submit</button>
                 
                             </form>
                 
                         </div>
                    </section>
                </div>
            </div>
        </div>
    </div>

</x-app-layout>
