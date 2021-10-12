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
                <a href="https://en.wikipedia.org/wiki/Nonprofit_organization" class="hover:text-blue-500 hover:underline"><small>INFORMATION</small></a>
                {{-- LOGIN SECTION --}}
                <div class="" >
                    @if (Route::has('login'))
                            @auth
                                <a href="{{ url('/dashboard') }}" class="hover:text-blue-500 hover:underline mr-4"><small>Dashboard</small></a>
                            @else
                                <a href="{{ route('login') }}" class="hover:text-blue-500 hover:underline mr-4"><small>LOGIN</small></a>

                                @if (Route::has('register'))
                                    <a href="{{ route('register') }}" class="hover:text-blue-500 hover:underline mr-4"><small>REGISTER</small></a>
                                @endif
                            @endauth
                    @endif
                </div>


            </div>
        </div>
    
        <div class="flex flex-col space-y-6 lg:flex-row items-center container mx-auto py-6 h-full">
    
            <div class="text-center">
                <a href="/">
                    <x-main-logo />
                </a>
            </div>
    
            <div class="justify-end flex flex-grow ml-6">
                <div class="hidden lg:ml-10 lg:flex w-full justify-end ">
                    <form method="GET" action="#" class="w-2/3">
                        @if (request('category'))
                            <input type="hidden" class="align-self-end" name="category" value="{{ request('category') }}">                    
                        @endif
                        <input type="text" name="search" placeholder="Search"
                               class="px-8 w-full border rounded py-2 text-gray-700 focus:outline-none items-center"
                               value="{{ request('search') }}">
                    </form>
                </div>
             
            </div>
    
        </div>
    
        <nav x-data="{ open: false }" class="bg-blue-500 h-full">
            <!-- Primary Navigation Menu -->
            <div class="">
                <div class="grid justify-items-center">
    
                    <!-- Navigation Links -->
                    <div class="hidden lg:ml-10 lg:flex justify-between container">
                        <x-nav-link 
                            :active="request('category') === 'humanities'"
                            href="/?category=humanities&{{ http_build_query(request()->except('category', 'page')) }}">
                            <strong>HUMANITIES</strong>
                        </x-nav-link>
                        <x-nav-link 
                            :active="request('category') === 'education'"
                            href="/?category=education&{{ http_build_query(request()->except('category', 'page')) }}">
                            <strong>EDUCATION</strong>
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
                    </div>
                </div>
    
                <!-- Hamburger -->
                <div @click="open = ! open" class="px-2 flex items-center lg:hidden p-4 rounded-md text-white hover:text-white hover:bg-blue-700 focus:outline-none focus:bg-blue-700 focus:text-white transition duration-150 ease-in-out">
                    <svg class="h-6 w-6" stroke="currentColor" fill="none" viewBox="0 0 24 24">
                        <path :class="{'hidden': open, 'inline-flex': ! open }" class="inline-flex" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16" />
                        <path :class="{'hidden': ! open, 'inline-flex': open }" class="hidden" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12" />
                    </svg>
                </div>
            </div>
        
            <!-- Responsive Navigation Menu -->
            <div :class="{'block': open, 'hidden': ! open}" class="hidden lg:hidden">
                <div class="pt-2 pb-3 space-y-1">
                    <x-responsive-nav-link href="/?category=humanities&{{ http_build_query(request()->except('category', 'page')) }}">
                        <strong class="text-white">HUMANITIES</strong>
                    </x-responsive-nav-link>
                    <x-responsive-nav-link href="/?category=humanities&{{ http_build_query(request()->except('category', 'page')) }}">
                        <strong class="text-white">ARTS + CULTURE</strong>
                    </x-responsive-nav-link>
                    <x-responsive-nav-link href="/?category=humanities&{{ http_build_query(request()->except('category', 'page')) }}">
                        <strong class="text-white">ANIMALS</strong>
                    </x-responsive-nav-link>
                    <x-responsive-nav-link href="/?category=humanities&{{ http_build_query(request()->except('category', 'page')) }}">
                        <strong class="text-white">COMMUNITY</strong>
                    </x-responsive-nav-link>
                    <x-responsive-nav-link href="/?category=humanities&{{ http_build_query(request()->except('category', 'page')) }}">
                        <strong class="text-white">ENVIRONMENT</strong>
                    </x-responsive-nav-link>
                    <x-responsive-nav-link href="/?category=humanities&{{ http_build_query(request()->except('category', 'page')) }}">
                        <strong class="text-white">HEALTH</strong>
                    </x-responsive-nav-link>
                    <form method="GET" action="#" class="w-5/8 mx-4">
                        @if (request('category'))
                            <input type="hidden" class="align-self-end" name="category" value="{{ request('category') }}">                    
                        @endif
                        <input type="text" name="search" placeholder="Search"
                               class="px-8 w-full border rounded py-2 text-gray-700 focus:outline-none items-center"
                               value="{{ request('search') }}">
                    </form>
                </div>
        
            </div>
        </div>
    </nav>

    {{ $slot }}

    <x-newsletter />

    <footer class="bg-gray-900 p-4 h-auto w-full text-white object-bottom self-end">

        <div class="grid grid-cols-3 lg:flex lg:items-start items-center lg:flex-row lg:justify-between md:container md:mx-auto mb-12 lg:mb-0">
    
            {{-- Logo --}}
            <div class="col-span-3 place-self-center lg:self-start my-8 lg:py-4">
                <div class="text-center">
                    <a href="/">
                        <x-main-logo />
                    </a>
                </div>
            </div>
            
            <!-- {{-- Links --}} -->
            <div class="self-start col-span-3 text-center pt-4 lg:text-left">
                <h3 class="font-bold uppercase">Categories</h3>
                <div class="block w-min px-4 lg:px-0 lg:w-auto mx-auto">
                        <a href="/?category=humanities&{{ http_build_query(request()->except('category', 'page')) }}" class="text-sm text-blue-500 block hover:text-blue-500 hover:text-700-blue hover:underline pt-2 lg:pt-0">Humanities</a>
                        <a href="/?category=education&{{ http_build_query(request()->except('category', 'page')) }}" class="text-sm text-blue-500 block hover:text-blue-500 hover:text-700-blue hover:underline pt-2 lg:pt-0">Education</a>
                        <a href="/?category=animals&{{ http_build_query(request()->except('category', 'page')) }}" class="text-sm text-blue-500 block hover:text-blue-500 hover:text-700-blue hover:underline pt-2 lg:pt-0">Animal</a>
                        <a href="/?category=community&{{ http_build_query(request()->except('category', 'page')) }}" class="text-sm text-blue-500 block hover:text-blue-500 hover:text-700-blue hover:underline pt-2 lg:pt-0">Community</a>
                        <a href="/?category=environment&{{ http_build_query(request()->except('category', 'page')) }}" class="text-sm text-blue-500 block hover:text-blue-500 hover:text-700-blue hover:underline pt-2 lg:pt-0">Enviroment</a>
                        <a href="/?category=health&{{ http_build_query(request()->except('category', 'page')) }}" class="text-sm text-blue-500 block hover:text-blue-500 hover:text-700-blue hover:underline pt-2 lg:pt-0">Health</a>  
                </div>
            </div>

            <div class="self-start col-span-3 text-center pt-4 lg:text-left mt-4 lg:mt-0">
                <h3 class="font-bold uppercase">About The Index</h3>
                <div class="block w-min px-4 lg:px-0 lg:w-auto mx-auto">
                        <a href="{{ url('/about') }}" class="text-sm text-blue-500 block hover:text-blue-500 hover:text-700-blue hover:underline pt-2 lg:pt-0">Background</a>  
                </div>
            </div>
    
            
    
            <!-- {{-- Login --}} -->
            <div class="self-start col-span-3 text-center pt-4 lg:text-left mt-4 lg:mt-0">
                <h3 class="font-bold uppercase">Account</h3>
                <div class="block w-min px-4 lg:px-0 lg:w-auto mx-auto">
                    @if (Route::has('login'))
                        @auth
                            <a href="{{ url('/dashboard') }}" class="text-sm text-blue-500 block hover:text-blue-500 hover:text-700-blue hover:underline pt-2  lg:pt-0">Dashboard</a>
                        @else
                            <a href="{{ route('login') }}" class="text-sm text-blue-500 block hover:text-blue-500 hover:text-700-blue hover:underline pt-2  lg:pt-0">Login</a>

                            @if (Route::has('register'))
                                <a href="{{ route('register') }}" class="text-sm text-blue-500 block hover:text-blue-500 hover:text-700-blue hover:underline pt-2  lg:pt-0">Register</a>
                            @endif
                        @endauth
                    @endif
                </div>
            </div>
            
        </div>
        <hr class="my-4">
        <div class=" lg:container mx-auto flex flex-col lg:flex-row lg:space-x-4">
            <p class="text-center mb-2 lg:mb-0">Copyright &copy Global Non-Profit Index 2021. All Rights Reserved.</p>
            <span class="hidden lg:block">|</span>
            <a href="https://www.wyattmarshall.dev" class="text-center">Design by <span class=" text-blue-500 hover:text-blue-700 hover:underline">Wyatt Marshall</span></a>
            {{-- <span class="invisible lg:visible">|</span>
            <a href="">Terms Of Use</a>
            <span class="invisible lg:visible">|</span>
            <a href="">Legal</a>
            <span class="invisible lg:visible">|</span>
            <a href="">Site Map</a> --}}

            <hr class="my-4 visible lg:invisible">
            <span class="flex-grow text-center lg:text-right">
                @php
                    $localePreferences = explode(",",$_SERVER['HTTP_ACCEPT_LANGUAGE']);
                    if(is_array($localePreferences) && count($localePreferences) > 0) {
                    $browserLocale = $localePreferences[0];
                    $_SESSION['browser_locale'] = $browserLocale;
                    }

                    echo $browserLocale;
                @endphp </span>
        </div>
    </footer>
    
</body>
</html>
