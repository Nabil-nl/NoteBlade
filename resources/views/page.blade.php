<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    @vite('resources/css/app.css')
    <link href="{{ asset('css/style.css') }}" rel="stylesheet">
    <link href="{{ asset('css/button.css') }}" rel="stylesheet">
    <link href="{{ asset('css/container.css') }}" rel="stylesheet">
</head>

<body class="overflow-x-hidden">
    <div id="particles-js"></div>
    <nav class="bg-[#B3EFB2] fixed top-0 w-full z-50">
        <div class="flex items-center justify-between py-4 px-6">
            <div class="relative">
                <label class="container cursor-pointer">
                    <input type="checkbox" class="hidden" id="dropdown-totoggle">
                    <div class="checkmark">
                        <span></span>
                        <span></span>
                        <span></span>
                    </div>
                </label>
                <ul class=" absolute mt-[1.5rem] w-52 p-2 bg-base-100 rounded shadow-md z-10 hidden bg-[#B3EFB2]" id="dropdown-tomenu">
                    <li class="p-2"><a href="{{ route('notes.index') }}" class="block">Notes</a></li>
                    <li class="p-2"><a href="{{ route('categories.index') }}" class="block">Catégories</a></li>

                </ul>
            </div>
            <div>
                <a href="#" class="text-xl font-semibold">NoteGuard</a>
            </div>
            <div class="flex items-center md:order-2 space-x-3 md:space-x-0 rtl:space-x-reverse">
                <button type="button" class="flex text-sm bg-[#FCD581] rounded-full md:me-0 focus:ring-4 focus:ring-[#A7D3A6]" id="user-menu-button" aria-expanded="false" data-dropdown-toggle="user-dropdown" data-dropdown-placement="bottom">

                    <img src="{{ asset('image/nl.png') }}" class="w-8 h-8 rounded-full" alt="Your Image">
                </button>
                <!-- affiche the user and mail  -->

                <div class="z-50 hidden my-4 text-base list-none bg-[#E1F0E8] divide-y divide-gray-200 rounded-lg shadow-lg" id="user-dropdown">
                    <div class="px-4 py-3">
                        <!-- User information -->
                        <span class="block text-sm text-[#3F4B3B] font-semibold">{{ Auth::user()->name }}</span>
                        <span class="block text-sm text-[#3F4B3B] truncate">{{ Auth::user()->email }}</span>
                    </div>
                    <ul class="py-2" aria-labelledby="user-menu-button">
                        <!-- Profile link -->
                        <li>
                            <a href="{{ route('profile.show') }}" class="flex items-center px-4 py-2 text-sm text-[#3F4B3B] hover:bg-[#7A9E7E] hover:text-[#00171F] rounded transition duration-200">

                                <svg class="w-4 h-4 mr-2" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512">
                                    <path d="M495.9 166.6c3.2 8.7 .5 18.4-6.4 24.6l-43.3 39.4c1.1 8.3 1.7 16.8 1.7 25.4s-.6 17.1-1.7 25.4l43.3 39.4c6.9 6.2 9.6 15.9 6.4 24.6c-4.4 11.9-9.7 23.3-15.8 34.3l-4.7 8.1c-6.6 11-14 21.4-22.1 31.2c-5.9 7.2-15.7 9.6-24.5 6.8l-55.7-17.7c-13.4 10.3-28.2 18.9-44 25.4l-12.5 57.1c-2 9.1-9 16.3-18.2 17.8c-13.8 2.3-28 3.5-42.5 3.5s-28.7-1.2-42.5-3.5c-9.2-1.5-16.2-8.7-18.2-17.8l-12.5-57.1c-15.8-6.5-30.6-15.1-44-25.4L83.1 425.9c-8.8 2.8-18.6 .3-24.5-6.8c-8.1-9.8-15.5-20.2-22.1-31.2l-4.7-8.1c-6.1-11-11.4-22.4-15.8-34.3c-3.2-8.7-.5-18.4 6.4-24.6l43.3-39.4C64.6 273.1 64 264.6 64 256s.6-17.1 1.7-25.4L22.4 191.2c-6.9-6.2-9.6-15.9-6.4-24.6c4.4-11.9 9.7-23.3 15.8-34.3l4.7-8.1c6.6-11 14-21.4 22.1-31.2c5.9-7.2 15.7-9.6 24.5-6.8l55.7 17.7c13.4-10.3 28.2-18.9 44-25.4l12.5-57.1c2-9.1 9-16.3 18.2-17.8C227.3 1.2 241.5 0 256 0s28.7 1.2 42.5 3.5c9.2 1.5 16.2 8.7 18.2 17.8l12.5 57.1c15.8 6.5 30.6 15.1 44 25.4l55.7-17.7c8.8-2.8 18.6-.3 24.5 6.8c8.1 9.8 15.5 20.2 22.1 31.2l4.7 8.1c6.1 11 11.4 22.4 15.8 34.3zM256 336a80 80 0 1 0 0-160 80 80 0 1 0 0 160z" />
                                </svg>
                                <span>Profile</span>
                            </a>
                        </li>
                        <!-- Sign out link -->
                        <li class="hover:bg-[#ff002b]">
                            <a href="#" onclick="event.preventDefault(); document.getElementById('logout-form').submit();" class="flex items-center px-4 py-2 text-sm text-[#3F4B3B] hover:bg-[#FF3549] hover:text-[#00171F] rounded transition duration-200">
                                <svg class="w-4 h-4 mr-2" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512">
                                    <path d="M377.9 105.9L500.7 228.7c7.2 7.2 11.3 17.1 11.3 27.3s-4.1 20.1-11.3 27.3L377.9 406.1c-6.4 6.4-15 9.9-24 9.9c-18.7 0-33.9-15.2-33.9-33.9l0-62.1-128 0c-17.7 0-32-14.3-32-32l0-64c0-17.7 14.3-32 32-32l128 0 0-62.1c0-18.7 15.2-33.9 33.9-33.9c9 0 17.6 3.6 24 9.9zM160 96L96 96c-17.7 0-32 14.3-32 32l0 256c0 17.7 14.3 32 32 32l64 0c17.7 0 32 14.3 32 32s-14.3 32-32 32l-64 0c-53 0-96-43-96-96L0 128C0 75 43 32 96 32l64 0c17.7 0 32 14.3 32 32s-14.3 32-32 32z" />
                                </svg>
                                <span>Sign out</span>
                            </a>
                        </li>
                    </ul>
                </div>

                <!-- Logout Form -->
                <form id="logout-form" method="POST" action="{{ route('logout') }}" style="display: none;">
                    @csrf
                </form>





                <button data-collapse-toggle="navbar-user" type="button" class="inline-flex items-center p-2 w-10 h-10 justify-center text-sm text-gray-500 rounded-lg md:hidden hover:bg-gray-100 focus:outline-none focus:ring-2 focus:ring-gray-200" aria-controls="navbar-user" aria-expanded="false">
                    <span class="sr-only">Open main menu</span>
                    <svg class="w-5 h-5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 17 14">
                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M1 1h15M1 7h15M1 13h15" />
                    </svg>
                </button>
            </div>
        </div>
    </nav>

    <!-- animation text  -->

    <div class="flex-grow flex items-start mt-[68px] ">
        <img src="{{ asset('image/nabil.svg')}}" class="w-[900px] h-[580px] mr-10 " alt="Your Image">
        <div class="flex items-center justify-center   mt-52 ">
            <div class="">
                <h1 class="animate-typing overflow-hidden whitespace-nowrap text-5xl text-[#1B1F3B] font-bold">
                    Welcome to NoteGuard !
                </h1>
            </div>
        </div>
    </div>


    <!-- botton animation -->
    <div id="100" class="flex justify-center absolute inset-x-0 bottom-10">
        <button id="scrollButton" class="cursor-pointer bg-[#B3EFB2] px-3 py-2 rounded-md text-white tracking-wider shadow-xl animate-bounce hover:animate-none">
            <svg class="w-5 h-5" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path d="M19.5 13.5 12 21m0 0-7.5-7.5M12 21V3" stroke-linejoin="round" stroke-linecap="round"></path>
            </svg>
        </button>
    </div>

    <!-- section 1 -->
    <section class="page2">
        <div class="py-24 sm:py-1">
            <div class="flex justify-center mt-10 text-4xl font-regular">
                Why Us Event-Prime ?
            </div>
            <div class="container px-5 py-12 mx-auto">
                <div class="flex flex-wrap text-center justify-center">
                    <div class="p-4 md:w-1/4 sm:w-1/2">
                        <div class="px-4 py-6 transform transition duration-500 hover:scale-110">
                            <div class="flex justify-center">
                                <img src="{{ asset('image/security.png') }}" class="w-32 h-32 mb-3" alt="Security Emphasis">
                            </div>
                            <h2 class="title-font font-regular text-2xl text-gray-900">Security Emphasis</h2>
                        </div>
                    </div>
                    <div class="p-4 md:w-1/4 sm:w-1/2">
                        <div class="px-4 py-6 transform transition duration-500 hover:scale-110">
                            <div class="flex justify-center">
                                <img src="{{ asset('image/Reliability.png') }}" class="w-32 h-32 mb-3" alt="Trust and Reliability">
                            </div>
                            <h2 class="title-font font-regular text-2xl text-gray-900">Trust and Reliability</h2>
                        </div>
                    </div>
                    <div class="p-4 md:w-1/4 sm:w-1/2">
                        <div class="px-4 py-6 transform transition duration-500 hover:scale-110">
                            <div class="flex justify-center">
                                <img src="{{ asset('image/10.png') }}" class="w-32 h-32 mb-3" alt="Management Features">
                            </div>
                            <h2 class="title-font font-regular text-2xl text-gray-900">Management Features</h2>
                        </div>
                    </div>
                    <div class="p-4 md:w-1/4 sm:w-1/2">
                        <div class="px-4 py-6 transform transition duration-500 hover:scale-110">
                            <div class="flex justify-center">
                                <img src="{{ asset('image/conf.png') }}" class="w-32 h-32 mb-3" alt="User Confidence:">
                            </div>
                            <h2 class="title-font font-regular text-2xl text-gray-900">User Confidence</h2>
                        </div>
                    </div>
                    <!-- Additional sections -->
                    <div class="p-4 md:w-1/4 sm:w-1/2">
                        <div class="px-4 py-6 transform transition duration-500 hover:scale-110">
                            <div class="flex justify-center">
                                <img src="{{ asset('image/24.png') }}" class="w-32 h-32 mb-3" alt="Service 24/7">
                            </div>
                            <h2 class="title-font font-regular text-2xl text-gray-900">Service 24/7</h2>
                        </div>
                    </div>
                    <div class="p-4 md:w-1/4 sm:w-1/2">
                        <div class="px-4 py-6 transform transition duration-500 hover:scale-110">
                            <div class="flex justify-center">
                                <img src="{{ asset('image/education.png') }}" class="w-32 h-32 mb-3" alt="Educational Sector Focus">
                            </div>
                            <h2 class="title-font font-regular text-2xl text-gray-900">Educational Sector Focus</h2>
                        </div>
                    </div>
                    <div class="p-4 md:w-1/4 sm:w-1/2">
                        <div class="px-4 py-6 transform transition duration-500 hover:scale-110">
                            <div class="flex justify-center">
                                <img src="{{ asset('image/world.png') }}" class="w-32 h-32 mb-3" alt="Global Appeal">
                            </div>
                            <h2 class="title-font font-regular text-2xl text-gray-900">Global Appeal</h2>
                        </div>
                    </div>
                    <div class="p-4 md:w-1/4 sm:w-1/2">
                        <div class="px-4 py-6 transform transition duration-500 hover:scale-110">
                            <div class="flex justify-center">
                                <img src="{{ asset('image/pr.png') }}" class="w-32 h-32 mb-3" alt="Protection from Unauthorized Access">
                            </div>
                            <h2 class="title-font font-regular text-2xl text-gray-900">Protection</h2>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <footer class="footer bg-[#B3EFB2] rounded-lg shadow m-4">
        <div class="w-full mx-auto max-w-screen-xl p-4 md:flex md:items-center md:justify-center">
            <span class="text-sm text-[#06070E] text-center">© 2024 <a href="#" class="hover:underline">NoteGuard™</a>. All Rights Reserved. Event-Prime</span>
            <a href="https://github.com/Nabil-nl" class="ml-4 text-[#06070E] hover:text-gray-900">
                <svg class="w-5 h-5 inline-block" fill="currentColor" viewBox="0 0 24 24" aria-hidden="true">
                    <path fill-rule="evenodd" d="M12 2C6.48 2 2 6.48 2 12c0 4.42 2.87 8.167 6.839 9.49.5.093.682-.217.682-.483 0-.237-.008-.868-.013-1.703-2.782.605-3.369-1.343-3.369-1.343-.454-1.158-1.11-1.466-1.11-1.466-.908-.62.069-.608.069-.608 1.003.07 1.531 1.032 1.531 1.032.892 1.53 2.341 1.088 2.91.832.092-.647.35-1.088.636-1.338-2.22-.253-4.555-1.113-4.555-4.951 0-1.093.39-1.988 1.029-2.688-.103-.253-.446-1.272.098-2.65 0 0 .84-.27 2.75 1.026A9.564 9.564 0 0112 6.844c.85.004 1.705.115 2.504.337 1.909-1.296 2.747-1.027 2.747-1.027.546 1.379.202 2.398.1 2.651.64.7 1.028 1.595 1.028 2.688 0 3.848-2.339 4.695-4.566 4.943.359.309.678.92.678 1.855 0 1.338-.012 2.419-.012 2.747 0 .268.18.58.688.482A10.019 10.019 0 0022 12C22 6.48 17.52 2 12 2z" clip-rule="evenodd"></path>
                </svg>
            </a>
        </div>
    </footer>

    <!-- javascript -->
    <script src="{{ asset('js/particles.js') }}"></script>
    <script src="{{ asset('js/app.js') }}"></script>

    <script>
        document.getElementById('dropdown-totoggle').addEventListener('change', function() {
            document.getElementById('dropdown-tomenu').classList.toggle('hidden');
        });
    </script>
    <!-- annimation to dropdown -->
    <script>
        document.getElementById('scrollButton').addEventListener('click', function() {
            console.log('Scroll button clicked');
            window.scrollBy({
                top: window.innerHeight,
                left: 0,
                behavior: 'smooth'
            });
        });
    </script>
    <script>
        document.addEventListener('DOMContentLoaded', function() {
            const userMenuButton = document.getElementById('user-menu-button');
            const userDropdown = document.getElementById('user-dropdown');

            userMenuButton.addEventListener('click', function(event) {
                event.stopPropagation();
                userDropdown.classList.toggle('hidden');
            });

            document.addEventListener('click', function(event) {
                if (!userMenuButton.contains(event.target) && !userDropdown.contains(event.target)) {
                    userDropdown.classList.add('hidden');
                }
            });
        });
    </script>



</body>

</html>