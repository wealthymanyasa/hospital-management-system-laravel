<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'vumbaview.com') }}</title>

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet" />

    <!-- Scripts -->
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>

<body class="font-sans antialiased">

    <!-- Page Heading -->
    @if (isset($header))
        <header class="bg-white dark:bg-gray-800 shadow">
            <div class="max-w-7xl mx-auto py-6 px-4 sm:px-6 lg:px-8">
                {{ $header }}
            </div>
        </header>
    @endif

    <!-- Page Content -->
    <main>
        <div class='space-y-4 flex flex-col '>
            {{-- {/* start nav */} --}}
            <nav class='bg-white border-b flex sm:justify-between items-center justify-center px-5 lg:px-24'>
                <div class="flex flex-col md:flex-row">
                    <h2 class="text-gray-300 text-center sm:text-left md:pr-2">+263 242 878 767</h2>
                    <h2 class="text-gray-300 md:pl-2 md:border-l-2">info@primehealth.com</h2>
                </div>
                <div>
                    <div class="container py-5 hidden sm:block">
                        <div class="flex justify-center items-center">
                            <a href="#!" class="mr-9 text-neutral-800 dark:text-neutral-200">
                                <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4" fill="currentColor"
                                    viewBox="0 0 24 24">
                                    <path
                                        d="M9 8h-3v4h3v12h5v-12h3.642l.358-4h-4v-1.667c0-.955.192-1.333 1.115-1.333h2.885v-5h-3.808c-3.596 0-5.192 1.583-5.192 4.615v3.385z" />
                                </svg>
                            </a>
                            <a href="#!" class="mr-9 text-neutral-800 dark:text-neutral-200">
                                <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4" fill="currentColor"
                                    viewBox="0 0 24 24">
                                    <path
                                        d="M24 4.557c-.883.392-1.832.656-2.828.775 1.017-.609 1.798-1.574 2.165-2.724-.951.564-2.005.974-3.127 1.195-.897-.957-2.178-1.555-3.594-1.555-3.179 0-5.515 2.966-4.797 6.045-4.091-.205-7.719-2.165-10.148-5.144-1.29 2.213-.669 5.108 1.523 6.574-.806-.026-1.566-.247-2.229-.616-.054 2.281 1.581 4.415 3.949 4.89-.693.188-1.452.232-2.224.084.626 1.956 2.444 3.379 4.6 3.419-2.07 1.623-4.678 2.348-7.29 2.04 2.179 1.397 4.768 2.212 7.548 2.212 9.142 0 14.307-7.721 13.995-14.646.962-.695 1.797-1.562 2.457-2.549z" />
                                </svg>
                            </a>
                            <a href="#!" class="mr-9 text-neutral-800 dark:text-neutral-200">
                                <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" fill="currentColor"
                                    viewBox="0 0 24 24">
                                    <path
                                        d="M7 11v2.4h3.97c-.16 1.029-1.2 3.02-3.97 3.02-2.39 0-4.34-1.979-4.34-4.42 0-2.44 1.95-4.42 4.34-4.42 1.36 0 2.27.58 2.79 1.08l1.9-1.83c-1.22-1.14-2.8-1.83-4.69-1.83-3.87 0-7 3.13-7 7s3.13 7 7 7c4.04 0 6.721-2.84 6.721-6.84 0-.46-.051-.81-.111-1.16h-6.61zm0 0 17 2h-3v3h-2v-3h-3v-2h3v-3h2v3h3v2z"
                                        fillRule="evenodd" clipRule="evenodd" />
                                </svg>
                            </a>
                            <a href="#!" class="mr-9 text-neutral-800 dark:text-neutral-200">
                                <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4" fill="currentColor"
                                    viewBox="0 0 24 24">
                                    <path
                                        d="M12 2.163c3.204 0 3.584.012 4.85.07 3.252.148 4.771 1.691 4.919 4.919.058 1.265.069 1.645.069 4.849 0 3.205-.012 3.584-.069 4.849-.149 3.225-1.664 4.771-4.919 4.919-1.266.058-1.644.07-4.85.07-3.204 0-3.584-.012-4.849-.07-3.26-.149-4.771-1.699-4.919-4.92-.058-1.265-.07-1.644-.07-4.849 0-3.204.013-3.583.07-4.849.149-3.227 1.664-4.771 4.919-4.919 1.266-.057 1.645-.069 4.849-.069zm0-2.163c-3.259 0-3.667.014-4.947.072-4.358.2-6.78 2.618-6.98 6.98-.059 1.281-.073 1.689-.073 4.948 0 3.259.014 3.668.072 4.948.2 4.358 2.618 6.78 6.98 6.98 1.281.058 1.689.072 4.948.072 3.259 0 3.668-.014 4.948-.072 4.354-.2 6.782-2.618 6.979-6.98.059-1.28.073-1.689.073-4.948 0-3.259-.014-3.667-.072-4.947-.196-4.354-2.617-6.78-6.979-6.98-1.281-.059-1.69-.073-4.949-.073zm0 5.838c-3.403 0-6.162 2.759-6.162 6.162s2.759 6.163 6.162 6.163 6.162-2.759 6.162-6.163c0-3.403-2.759-6.162-6.162-6.162zm0 10.162c-2.209 0-4-1.79-4-4 0-2.209 1.791-4 4-4s4 1.791 4 4c0 2.21-1.791 4-4 4zm6.406-11.845c-.796 0-1.441.645-1.441 1.44s.645 1.44 1.441 1.44c.795 0 1.439-.645 1.439-1.44s-.644-1.44-1.439-1.44z" />
                                </svg>
                            </a>
                            <a href="#!" class="mr-9 text-neutral-800 dark:text-neutral-200">
                                <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4" fill="currentColor"
                                    viewBox="0 0 24 24">
                                    <path
                                        d="M4.98 3.5c0 1.381-1.11 2.5-2.48 2.5s-2.48-1.119-2.48-2.5c0-1.38 1.11-2.5 2.48-2.5s2.48 1.12 2.48 2.5zm.02 4.5h-5v16h5v-16zm7.982 0h-4.968v16h4.969v-8.399c0-4.67 6.029-5.052 6.029 0v8.399h4.988v-10.131c0-7.88-8.922-7.593-11.018-3.714v-2.155z" />
                                </svg>
                            </a>

                        </div>
                    </div>
                </div>
            </nav>
            {{-- {/* end  nav */}

                     {/* start sec nav */} --}}
            <section
                class=" flex flex-col-reverse justify-center items-center px-4 my-3 lg:px-24 md:flex-row md:justify-between">
                <div class="flex flex-col md:flex-row">
                    <div class="flex justify-center items-center ">
                        <h1 class="text-green-400 font-bold text-3xl ">Prime</h1>
                        <h1 class=" font-bold text-3xl">-Health</h1>
                    </div>
                    <div class="flex my-3 md:my-0">
                        <input
                            class="p-2 px-4 border md:ml-8 rounded-l-full border-green-300 focus:ring-green-500 focus:border-green-500 "
                            placeholder="Search...">

                        <a href="#"
                            class="px-3  flex flex-shrink items-center rounded-r-full bg-green-400 hover:bg-green-500">Search</a>
                    </div>

                </div>
                <div class="flex flex-row space-x-3">
                    <ul class="xl:flex space-x-3 text-lg text-gray-300 items-center hidden">
                        <li href="#" class="hover:text-green-400">Home</li>
                        <li href="#" class="hover:text-green-400">Doctors</li>
                        <li href="#" class="hover:text-green-400">News</li>
                        <li href="#" class="hover:text-green-400">Contact</li>

                    </ul>
                    @if (Route::has('login'))
                        @auth


                            <ul class="flex  flex-col-reverse justify-center items-center lg:flex-row  sm:flex">
                                <div class=" sm:flex sm:items-center sm:ms-6">
                                    <a href="{{url('/my-appointments')}}"
                                    class="inline-flex items-center mt-2 lg:mt-0 px-3 py-2 border bg-green-500 border-transparent text-sm leading-4 font-medium rounded-md dark:text-white dark:bg-green-800 hover:text-white dark:hover:text-gray-300 focus:outline-none hover:bg-green-600 transition ease-in-out duration-150">

                                       My Appointments</a>
                                </div>

                                <div class=" sm:flex sm:items-center sm:ms-6">
                                    <x-dropdown align="right" width="48">
                                        <x-slot name="trigger">
                                            <button
                                                class="inline-flex items-center px-3 py-2 border bg-green-500 border-transparent text-sm leading-4 font-medium rounded-md dark:text-white dark:bg-green-800 hover:text-white dark:hover:text-gray-300 focus:outline-none hover:bg-green-600 transition ease-in-out duration-150">
                                                <div>{{ Auth::user()->name }}</div>

                                                <div class="ms-1">
                                                    <svg class="fill-current h-4 w-4" xmlns="http://www.w3.org/2000/svg"
                                                        viewBox="0 0 20 20">
                                                        <path fill-rule="evenodd"
                                                            d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z"
                                                            clip-rule="evenodd" />
                                                    </svg>
                                                </div>
                                            </button>
                                        </x-slot>

                                        <x-slot name="content">
                                            <x-dropdown-link :href="route('profile.edit')">
                                                {{ __('Profile') }}
                                            </x-dropdown-link>
                                            <div class="md:hidden">
                                                <x-admin-nav-link :href="route('admin.index')" :active="request()->routeIs('admin.index')">
                                                    {{ __('Dashboard') }}
                                                </x-admin-nav-link>


                                            </div>
                                            <!-- Authentication -->
                                            <form method="POST" action="{{ route('logout') }}">
                                                @csrf

                                                <x-dropdown-link :href="route('logout')"
                                                    onclick="event.preventDefault();
                                                                this.closest('form').submit();">
                                                    {{ __('Log Out') }}
                                                </x-dropdown-link>
                                            </form>
                                        </x-slot>
                                    </x-dropdown>
                                </div>

                            </ul>
                        @else
                            <ul class="flex space-y-4 items-center flex-col  md:flex-row md:space-y-0 md:space-x-2">

                                <li>
                                    <a href="{{ route('login') }}"
                                        class="p-2 px-4 text-center bg-green-500 text-white cursor-pointer w-full rounded-full hover:bg-white hover:text-gray-800 hover:border hover:border-green-400">
                                        Login</a>
                                </li>
                                <li>

                                    <a href="{{ route('register') }}"
                                        class="p-2 px-4 mt-1 md:mt-0 text-center bg-green-500 text-white cursor-pointer w-full rounded-full hover:bg-white hover:text-gray-800 hover:border hover:border-green-400">

                                        Register</a>
                                </li>
                            </ul>
                        @endauth
                    @endif

                </div>

            </section>
            {{-- {{-- {/* end  sec nav */} --}}

            @include('user.hero')

            @include('user.emergency')

            @include('user.health_center')

            @include('user.doctors')

            @include('user.news')

            @include('user.appointments')
            {{-- {/* start footer */} --}}
            <footer class="p-5 md:px-24  bg-green-900">
                <div class="grid grid-cols-2 sm:grid-cols-4">

                    <div class="">
                        <h1 class="font-bold text-white mb-2">Company</h1>
                        <h1 class="text-white">About Us</h1>
                        <h1 class="text-white">Careers</h1>
                        <h1 class="text-white">Editorial Team</h1>
                        <h1 class=" text-white">Protection</h1>
                    </div>
                    <div class="">
                        <h1 class="font-bold text-white mb-2">More</h1>
                        <h1 class="text-white">Terms & Conditions</h1>
                        <h1 class="text-white">Privacy</h1>
                        <h1 class="text-white">Advertise</h1>
                        <h1 class=" text-white">Join as Doctors</h1>
                    </div>
                    <div class="">
                        <h1 class="font-bold text-white my-2 sm:mt-0">Our Partners</h1>
                        <h1 class="text-white">Prime-Fitness</h1>
                        <h1 class="text-white">Prime-Drugs</h1>
                        <h1 class="text-white">Prime-Live</h1>
                        <h1 class=" text-white">Prime-Online</h1>
                    </div>
                    <div class="">
                        <h1 class="font-bold text-white my-2 sm:mt-0">Contact</h1>
                        <h1 class="text-white">34 0xford drive, Highglen </h1>
                        <h1 class="text-white">+263 242 878 767</h1>
                        <h1 class="text-white">info@primehealth.com</h1>
                    </div>
                </div>
                <div class="flex flex-col justify-center items-center">
                    <h2 class="text-white text-lg font-bold pt-4 md:hidden">Social Media</h2>
                    <div class="container py-5 md:flex md:justify-end md:items-end">
                        <div class="flex justify-center items-center ">
                            <a href="#!" class="mr-9 text-neutral-800 dark:text-neutral-200">
                                <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 text-white"
                                    fill="currentColor" viewBox="0 0 24 24">
                                    <path
                                        d="M9 8h-3v4h3v12h5v-12h3.642l.358-4h-4v-1.667c0-.955.192-1.333 1.115-1.333h2.885v-5h-3.808c-3.596 0-5.192 1.583-5.192 4.615v3.385z" />
                                </svg>
                            </a>
                            <a href="#!" class="mr-9 text-neutral-800 dark:text-neutral-200">
                                <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 text-white"
                                    fill="currentColor" viewBox="0 0 24 24">
                                    <path
                                        d="M24 4.557c-.883.392-1.832.656-2.828.775 1.017-.609 1.798-1.574 2.165-2.724-.951.564-2.005.974-3.127 1.195-.897-.957-2.178-1.555-3.594-1.555-3.179 0-5.515 2.966-4.797 6.045-4.091-.205-7.719-2.165-10.148-5.144-1.29 2.213-.669 5.108 1.523 6.574-.806-.026-1.566-.247-2.229-.616-.054 2.281 1.581 4.415 3.949 4.89-.693.188-1.452.232-2.224.084.626 1.956 2.444 3.379 4.6 3.419-2.07 1.623-4.678 2.348-7.29 2.04 2.179 1.397 4.768 2.212 7.548 2.212 9.142 0 14.307-7.721 13.995-14.646.962-.695 1.797-1.562 2.457-2.549z" />
                                </svg>
                            </a>
                            <a href="#!" class="mr-9 text-neutral-800 dark:text-neutral-200">
                                <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 text-white"
                                    fill="currentColor" viewBox="0 0 24 24">
                                    <path
                                        d="M7 11v2.4h3.97c-.16 1.029-1.2 3.02-3.97 3.02-2.39 0-4.34-1.979-4.34-4.42 0-2.44 1.95-4.42 4.34-4.42 1.36 0 2.27.58 2.79 1.08l1.9-1.83c-1.22-1.14-2.8-1.83-4.69-1.83-3.87 0-7 3.13-7 7s3.13 7 7 7c4.04 0 6.721-2.84 6.721-6.84 0-.46-.051-.81-.111-1.16h-6.61zm0 0 17 2h-3v3h-2v-3h-3v-2h3v-3h2v3h3v2z"
                                        fillRule="evenodd" clipRule="evenodd" />
                                </svg>
                            </a>
                            <a href="#!" class="mr-9 text-neutral-800 dark:text-neutral-200">
                                <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 text-white"
                                    fill="currentColor" viewBox="0 0 24 24">
                                    <path
                                        d="M12 2.163c3.204 0 3.584.012 4.85.07 3.252.148 4.771 1.691 4.919 4.919.058 1.265.069 1.645.069 4.849 0 3.205-.012 3.584-.069 4.849-.149 3.225-1.664 4.771-4.919 4.919-1.266.058-1.644.07-4.85.07-3.204 0-3.584-.012-4.849-.07-3.26-.149-4.771-1.699-4.919-4.92-.058-1.265-.07-1.644-.07-4.849 0-3.204.013-3.583.07-4.849.149-3.227 1.664-4.771 4.919-4.919 1.266-.057 1.645-.069 4.849-.069zm0-2.163c-3.259 0-3.667.014-4.947.072-4.358.2-6.78 2.618-6.98 6.98-.059 1.281-.073 1.689-.073 4.948 0 3.259.014 3.668.072 4.948.2 4.358 2.618 6.78 6.98 6.98 1.281.058 1.689.072 4.948.072 3.259 0 3.668-.014 4.948-.072 4.354-.2 6.782-2.618 6.979-6.98.059-1.28.073-1.689.073-4.948 0-3.259-.014-3.667-.072-4.947-.196-4.354-2.617-6.78-6.979-6.98-1.281-.059-1.69-.073-4.949-.073zm0 5.838c-3.403 0-6.162 2.759-6.162 6.162s2.759 6.163 6.162 6.163 6.162-2.759 6.162-6.163c0-3.403-2.759-6.162-6.162-6.162zm0 10.162c-2.209 0-4-1.79-4-4 0-2.209 1.791-4 4-4s4 1.791 4 4c0 2.21-1.791 4-4 4zm6.406-11.845c-.796 0-1.441.645-1.441 1.44s.645 1.44 1.441 1.44c.795 0 1.439-.645 1.439-1.44s-.644-1.44-1.439-1.44z" />
                                </svg>
                            </a>
                            <a href="#!" class="mr-9 text-neutral-800 dark:text-neutral-200">
                                <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 text-white"
                                    fill="currentColor" viewBox="0 0 24 24">
                                    <path
                                        d="M4.98 3.5c0 1.381-1.11 2.5-2.48 2.5s-2.48-1.119-2.48-2.5c0-1.38 1.11-2.5 2.48-2.5s2.48 1.12 2.48 2.5zm.02 4.5h-5v16h5v-16zm7.982 0h-4.968v16h4.969v-8.399c0-4.67 6.029-5.052 6.029 0v8.399h4.988v-10.131c0-7.88-8.922-7.593-11.018-3.714v-2.155z" />
                                </svg>
                            </a>

                        </div>
                    </div>
                    <div class="border-t w-full border-white"></div>
                </div>
                <h2 class="text-white text-center my-3 md:text-left" >Copyright &copy; 2024 <a
                        href="www.obertmanyasa.web.app " class="text-purple-500 hover:text-white">codeStar</a>. All rights reserved.</h2>
            </footer>
            {{-- {/* end footer */} --}}
        </div>


    </main>
    </div>
    <script src="https://code.jquery.com/jquery-3.7.1.min.js"
        integrity="sha256-/JqT3SQfawRcv/BIHPThkBvs0OEvtFFmqPF/lYI/Cxo=" crossorigin="anonymous"></script>
    <script>
        $("#dismissButton3").click(function() {
            $("#alert-border-3").hide();
        });
    </script>
</body>

</html>
