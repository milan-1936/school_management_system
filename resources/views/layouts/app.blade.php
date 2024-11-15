<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>{{ config('app.name', 'Laravel') }}</title>

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet" />
        <style>
            @import url('https://fonts.googleapis.com/css2?family=Noto+Serif+Devanagari:wght@100..900&display=swap');
            </style>

        {{-- SwiperJS --}}
        <script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css" />

        <!-- Scripts -->
        @vite(['resources/css/app.css', 'resources/js/app.js'])
    </head>
    <body class="font-sans antialiased bg-gray-800 w-full px-2 sm:px-12">
        {{-- Navigation panel --}}
        <nav class=" top-0 sticky z-40 bg-gray-800">
             {{-- This is top bar with social media and contact number --}}
             <div class="sm:flex hidden text-white border-b border-gray-600 justify-between mt-1 z-50">
                <div class="flex gap-3 text-lg">
                    <i class="ri-youtube-fill hover:text-blue-400"></i>
                    <i class="ri-facebook-fill hover:text-blue-400"></i>
                    <i class="ri-twitter-x-fill hover:text-blue-400"></i>
                    <i class="ri-instagram-fill hover:text-blue-400"></i>
                    <i class="ri-tiktok-fill hover:text-blue-400"></i>
                </div>
                <div class="text">
                    <i class="ri-phone-fill"></i>
                    <label for="">+977 9840079139 |</label>
                    <label for="">+977 9807493469</label>
                </div>
            </div>
            {{-- end of top bar with social media and contact number --}}

            {{-- navigation bar --}}
            <div class="flex  items-center justify-between dark:bg-gray-800 w-full h-16 border-b-2 border-gray-600 ">
                {{-- div for Logo --}}
                <div class="flex logo dark:text-white items-center">
                    <img src="{{asset('images/logo.png')}}" class="w-16" alt="">
                    <div class="sm:hidden  md:flex flex flex-col">
                        <label for="" class="text-xl font-bold">देवचुली माध्यमिक विद्यालय</label>
                        <hr>
                        <label for="" class="text-sm">देवचुली १६, रजहर, नवलपरासी (ब.सु.पू.)</label>
                    </div>
                </div>
                {{-- end of logo div --}}

                {{-- div for navigation links --}}
                @auth
                <div class="hidden sm:flex gap-3">
                    {{-- div for navigation links --}}
                    <div class="flex text-white gap-4  bg-gray-600 rounded-lg overflow-hidden">
                        <a href="" class="hover:bg-blue-400 px-3 py-2 hover:bottom-2 hover:scale-105 transition-all">
                            <i class="ri-dashboard-fill"></i>
                            Dashboard
                        </a>
                        <a href="" class="hover:bg-blue-400 px-3 py-2 hover:bottom-2 hover:scale-105 transition-all ">
                            <i class="ri-pencil-fill"></i>
                            Update Site
                        </a>
                        <a href="" class="hover:bg-blue-400 px-3 py-2 hover:bottom-2 hover:scale-105 transition-all ">
                            <i class="ri-refresh-fill"></i>
                            Update Student
                        </a>
                        <a href="" class="hover:bg-blue-400 px-3 py-2 hover:bottom-2 hover:scale-105 transition-all ">
                            <i class="ri-id-card-fill"></i>
                            Attendance
                        </a>
                    </div>
                    {{-- end of navigation links --}}

                        {{-- div for profile --}}
                    <div class="group relative hover:scale-105 transition-all">
                            <div class="flex items-center gap-3 text-white bg-gray-600 px-2 py-1 rounded-lg shadow-xl">
                                <div class="w-8 bg-gray-200 h-8 rounded-full">
                                    <img src="{{asset('images/image.png')}}" alt="" class="rounded-full">
                                </div>
                                <label for="">Milan Poudel</label>
                            </div>
                            <div class="absolute hidden text-white group-hover:block top-0 right-0 bg-gray-600 w-40 rounded-lg shadow-xl mt-10 overflow-hidden">
                                <div class="flex flex-col ">
                                    <a href="" class="hover:bg-blue-400 px-3 py-2 hover:bottom-2 ">
                                        <i class="ri-user-fill"></i>
                                        Profile
                                    </a>
                                    <a href="" class="hover:bg-blue-400 px-3 py-2 hover:bottom-2 ">
                                        <i class="ri-settings-3-fill"></i>
                                        Settings
                                    </a>
                                    <form action="{{route('logout')}}" method="post">
                                        @csrf
                                        <button type="submit" class="hover:bg-blue-400 px-3 py-2 w-full text-left">
                                            <i class="ri-logout-box-fill"></i>
                                            Logout
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                    {{-- end of profile div --}}
                </div>
                </div>
                @else
                <div class="hidden sm:flex gap-6">
                    <div class="flex gap-8 bg-gray-600 rounded-lg overflow-hidden">
                        <a href="{{route('home')}}" class="text-white active:bg-sky-600  px-3 py-1 hover:scale-105 transition-all hover:bg-blue-500 {{ request()->is('home') ? 'active' : '' }}">Home</a>
                        <a href="" class="text-white px-3 py-1 hover:scale-105 transition-all hover:bg-blue-500">About Us</a>
                        <a href="" class="text-white px-3 py-1 hover:scale-105 transition-all hover:bg-blue-500">Contact Us</a>
                    </div>
                    <div class="flex gap-3 bg-gray-600 px-3 py-1 rounded-lg">
                        <a href="{{route('login')}}" class="text-white hover:text-blue-400">Login</a>
                        <a href="{{route('register')}}" class="text-white hover:text-blue-400">Register</a>
                    </div>
                    {{-- end of navigation links div --}}
                </div>
                <div class="flex sm:hidden h-10 w-10 bg-gray-500 ml-2 justify-center items-center rounded-md">
                    <i class="ri-menu-line text-2xl font-bold text-white"></i>
                </div>
                @endauth
        </nav>

        {{-- our content --}}
        @yield('content')

        {{-- footer --}}
        <footer class="bg-gray-900 w-full h-10  bottom-0">
            <div class="flex justify-center items-center text-white">
                <label for="">All Rights Reserved &copy; 2021</label>
            </div>
        </footer>
    </body>


</html>
