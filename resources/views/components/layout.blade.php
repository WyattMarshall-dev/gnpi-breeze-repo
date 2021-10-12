<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Global Non-Profit Index</title>
    <!-- Fonts -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap">
    <link href="https://unpkg.com/tailwindcss@^2/dist/tailwind.min.css" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@400;600;700&display=swap" rel="stylesheet">
    <script defer src="https://unpkg.com/alpinejs@3.x.x/dist/cdn.min.js"></script>
    <link rel="stylesheet" href="css/app.css">
</head>
<style>
    html {
        scroll-behavior: smooth;
    }
</style>
<body class="bg-gray-200">
    <nav class="">
        <div class="bg-gray-900 px-4 py-1 text-white">
            <div class="container mx-auto flex justify-between">
                <a href="" class="hover:text-blue-500 hover:underline"><small>HELP CENTER</small></a>
                <div class="">
                    <a href="" class="hover:text-blue-500 hover:underline mr-4"><small>REGISTER</small></a>
                    <a href="" class="hover:text-blue-500 hover:underline"><small>LOGIN</small></a>
                </div>
            </div>
        </div>
    
        <div class="flex flex-col space-y-6 md:flex-row items-center container mx-auto py-6 h-full">
    
            <div class="text-center">
                <a href="/">
                    <x-main-logo />
                </a>
            </div>
    
            <div class="justify-end flex flex-grow ml-4">
                    <form method="GET" action="#" class="w-2/3">
                        @if (request('category'))
                            <input type="hidden" name="category" value="{{ request('category') }}">                    
                        @endif
                        <input type="text" name="search" placeholder="Search"
                               class="px-8 w-full border rounded py-2 text-gray-700 focus:outline-none items-center"
                               value="{{ request('search') }}">
                    </form>
             
            </div>
    
        </div>
    
        <div class="bg-blue-500 text-black">
            {{-- Category links --}}
            <div class="container mx-auto flex justify-between">
    
                <x-nav-link 
                    :active="request('category') === 'humanities'"
                    href="/?category=humanities&{{ http_build_query(request()->except('category', 'page')) }}">
                    <strong>HUMANITIES</strong>
                </x-nav-link>
    
                <x-nav-link 
                    :active="request('category') === 'arts-culture'"
                    href="/?category=arts-culture&{{ http_build_query(request()->except('category', 'page')) }}">
                    <strong>ARTS + CULTURE</strong>
                </x-nav-link>

                <x-nav-link 
                    :active="request('category') === 'animals'"
                    href="/?category=animals&{{ http_build_query(request()->except('category', 'page')) }}">
                    <strong>ANIMALS</strong>
                </x-nav-link>
                
                <x-nav-link 
                    :active="request('category') === 'community'"
                    href="/?category=community&{{ http_build_query(request()->except('category', 'page')) }}">
                    <strong>COMMUNITY</strong>
                </x-nav-link>

                <x-nav-link 
                    :active="request('category') === 'environment'"
                    href="/?category=environment&{{ http_build_query(request()->except('category', 'page')) }}">
                    <strong>ENVIRONMENT</strong>
                </x-nav-link>

                <x-nav-link 
                    :active="request('category') === 'health'"
                    href="/?category=health&{{ http_build_query(request()->except('category', 'page')) }}">
                    <strong>HEALTH</strong>
                </x-nav-link>

                {{-- <a href="/?category=health&{{ http_build_query(request()->except('category', 'page')) }}" class="hover:text-white hover:bg-blue-700 p-4"><strong>HEALTH</strong></a>  --}}

                
            </div>
        </div>
    </nav>

    {{ $slot }}

    <x-newsletter />

    <footer class="bg-gray-900 p-4 h-auto w-full text-white object-bottom self-end">

        <div class="grid grid-cols-3 lg:flex lg:items-start items-center lg:flex-row lg:justify-between md:container md:mx-auto">
    
            {{-- Logo --}}
            <div class="col-span-3 place-self-center lg:self-start py-4 lg:py-4">
                <div class="text-center">
                    <a href="/">
                        <x-main-logo />
                    </a>
                </div>
            </div>
            
            <!-- {{-- Links --}} -->
            <div class="self-start">
                <h3 class="">Categories</h3>
                <div class="block">
                        <a href="/?category=humanities&{{ http_build_query(request()->except('category', 'page')) }}" class="text-sm text-blue-400 underline block">Humanities</a>
                        <a href="/?category=arts-culture&{{ http_build_query(request()->except('category', 'page')) }}" class="text-sm text-blue-400 underline block">Arts + Culture</a>
                        <a href="/?category=animals&{{ http_build_query(request()->except('category', 'page')) }}" class="text-sm text-blue-400 underline block">Animal</a>
                        <a href="/?category=arts-community&{{ http_build_query(request()->except('category', 'page')) }}" class="text-sm text-blue-400 underline block">Community</a>
                        <a href="/?category=environment&{{ http_build_query(request()->except('category', 'page')) }}" class="text-sm text-blue-400 underline block">Enviroment</a>
                        <a href="/?category=health&{{ http_build_query(request()->except('category', 'page')) }}" class="text-sm text-blue-400 underline block">Health</a>  
                </div>
            </div>

            <div class="self-start">
                <h3 class="">About The Index</h3>
                <div class="block">
                        <a href="{{ url('/') }}" class="text-sm text-blue-400 underline block">Newsroom</a>
                        <a href="{{ url('/examples') }}" class="text-sm text-blue-400 underline block">Background</a>  
                </div>
            </div>
    
            
    
            <!-- {{-- Login --}} -->
            <div class="self-start">
                <h3 class="">Contact</h3>
                <div class="">
                        <a href="" class="text-sm text-blue-400 underline block">Dashboard</a>
                        <a href="" onclick="event.preventDefault(); document.getElementById('logout-form').submit();" class="text-sm text-blue-400 underline block">Logout</a>
                        <form id="logout-form" action="" method="POST" style="display: none;"></form>
                        <a href="" class="text-sm text-blue-400 underline block">Log in</a>
                        <a href="" class="text-sm text-blue-400 underline block">Register</a>
                </div>
            </div>
            
        </div>
        <hr class="my-4">
        <div class=" lg:container mx-auto flex flex-col lg:flex-row lg:space-x-4">
            <p class="text-center">Copyright &copy wyattmarshall.dev 2021. All Rights Reserved.</p>
            <span class="invisible lg:visible">|</span>
            <a href="">Privacy Policy</a>
            <span class="invisible lg:visible">|</span>
            <a href="">Terms Of Use</a>
            <span class="invisible lg:visible">|</span>
            <a href="">Legal</a>
            <span class="invisible lg:visible">|</span>
            <a href="">Site Map</a>

            <hr class="my-4 visible lg:invisible">
            <a href="" class="flex-grow lg:text-right">UNITED STATES</a>
        </div>
    </footer>
    
</body>
</html>