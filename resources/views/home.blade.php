<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    @vite('resources/css/app.css')
    <link href="{{ asset('css/home.css') }}" rel="stylesheet">
    <link href="{{ asset('css/button.css') }}" rel="stylesheet">
    <link href="{{ asset('css/container.css') }}" rel="stylesheet">
</head>

<body class="overflow-x-hidden">
    <div id="particles-js"></div>
    <nav class="bg-[#B3EFB2]">
        <nav class="flex items-center justify-between py-4 px-6">

            <div>
                <a href="#" class="text-xl font-semibold ">NoteGuard</a>
            </div>
            <div class="auth flex items-center md:order-2 space-x-3 md:space-x-0 rtl:space-x-reverse gap-3">
                <label class="popup">
                    <input type="checkbox" />
                    <div tabindex="0" class="burger">
                        <svg viewBox="0 0 24 24" fill="black" height="20" width="20" xmlns="http://www.w3.org/2000/svg">
                            <path d="M12 2c2.757 0 5 2.243 5 5.001 0 2.756-2.243 5-5 5s-5-2.244-5-5c0-2.758 2.243-5.001 5-5.001zm0-2c-3.866 0-7 3.134-7 7.001 0 3.865 3.134 7 7 7s7-3.135 7-7c0-3.867-3.134-7.001-7-7.001zm6.369 13.353c-.497.498-1.057.931-1.658 1.302 2.872 1.874 4.378 5.083 4.972 7.346h-19.387c.572-2.29 2.058-5.503 4.973-7.358-.603-.374-1.162-.811-1.658-1.312-4.258 3.072-5.611 8.506-5.611 10.669h24c0-2.142-1.44-7.557-5.631-10.647z"></path>
                        </svg>
                    </div>
                    <nav class="popup-window">
                        <ul>
                            <li>
                                <button>
                                    <svg width="14" height="14" fill="#7A9E7E" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512">
                                        <path d="M217.9 105.9L340.7 228.7c7.2 7.2 11.3 17.1 11.3 27.3s-4.1 20.1-11.3 27.3L217.9 406.1c-6.4 6.4-15 9.9-24 9.9c-18.7 0-33.9-15.2-33.9-33.9l0-62.1L32 320c-17.7 0-32-14.3-32-32l0-64c0-17.7 14.3-32 32-32l128 0 0-62.1c0-18.7 15.2-33.9 33.9-33.9c9 0 17.6 3.6 24 9.9zM352 416l64 0c17.7 0 32-14.3 32-32l0-256c0-17.7-14.3-32-32-32l-64 0c-17.7 0-32-14.3-32-32s14.3-32 32-32l64 0c53 0 96 43 96 96l0 256c0 53-43 96-96 96l-64 0c-17.7 0-32-14.3-32-32s14.3-32 32-32z" />
                                    </svg>
                                    <a href="{{ route('login') }}">Login</a>
                                </button>
                            </li>
                            <li>
                                <button>
                                    <svg width="14" height="14" fill="#7A9E7E" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 576 512">
                                        <path d="M512 80c8.8 0 16 7.2 16 16V416c0 8.8-7.2 16-16 16H64c-8.8 0-16-7.2-16-16V96c0-8.8 7.2-16 16-16H512zM64 32C28.7 32 0 60.7 0 96V416c0 35.3 28.7 64 64 64H512c35.3 0 64-28.7 64-64V96c0-35.3-28.7-64-64-64H64zM208 256a64 64 0 1 0 0-128 64 64 0 1 0 0 128zm-32 32c-44.2 0-80 35.8-80 80c0 8.8 7.2 16 16 16H304c8.8 0 16-7.2 16-16c0-44.2-35.8-80-80-80H176zM376 144c-13.3 0-24 10.7-24 24s10.7 24 24 24h80c13.3 0 24-10.7 24-24s-10.7-24-24-24H376zm0 96c-13.3 0-24 10.7-24 24s10.7 24 24 24h80c13.3 0 24-10.7 24-24s-10.7-24-24-24H376z" />
                                    </svg>
                                    <a href="{{ route('register') }}">Register</a>
                                </button>
                            </li>
                        </ul>
                    </nav>
                </label>
            </div>

        </nav>
    </nav>
    <!-- animation text  -->

    <div class="flex-grow flex items-start  overflow-hidden w-[680px]">
        <img src="{{ asset('image/nabil.svg') }}" class="w-full h-auto max-w-full" alt="Your Image">

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
    <section class="page2 ">
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


    <footer class=" footer bg-[#B3EFB2] rounded-lg shadow m-4">
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
        document.getElementById('dropdown-toggle').addEventListener('change', function() {
            document.getElementById('dropdown-menu').classList.toggle('hidden');
        });
    </script>
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

</body>

</html>