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
    <nav class="bg-[#B3EFB2]">
        <nav class="flex items-center justify-between py-4 px-6">
            <div class="relative">
                <label class="container cursor-pointer">
                    <input type="checkbox" class="hidden" id="dropdown-toggle">
                    <div class="checkmark">
                        <span></span>
                        <span></span>
                        <span></span>
                    </div>
                </label>
                <ul class="absolute mt-[1.5rem] w-52 p-2 bg-base-100 rounded shadow-md z-10 hidden bg-[#B3EFB2]" id="dropdown-menu">
                    <li class="p-2"><a href="#" class="block">Homepage</a></li>
                    <li class="p-2"><a href="#" class="block">Portfolio</a></li>
                    <li class="p-2"><a href="#" class="block">About</a></li>
                </ul>
            </div>
            <div>
                <a href="#" class="text-xl font-semibold">NoteGuard</a>
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
                                    <a href="">Login</a>
                                </button>
                            </li>
                            <li>
                                <button>
                                    <svg width="14" height="14" fill="#7A9E7E" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 576 512">
                                        <path d="M512 80c8.8 0 16 7.2 16 16V416c0 8.8-7.2 16-16 16H64c-8.8 0-16-7.2-16-16V96c0-8.8 7.2-16 16-16H512zM64 32C28.7 32 0 60.7 0 96V416c0 35.3 28.7 64 64 64H512c35.3 0 64-28.7 64-64V96c0-35.3-28.7-64-64-64H64zM208 256a64 64 0 1 0 0-128 64 64 0 1 0 0 128zm-32 32c-44.2 0-80 35.8-80 80c0 8.8 7.2 16 16 16H304c8.8 0 16-7.2 16-16c0-44.2-35.8-80-80-80H176zM376 144c-13.3 0-24 10.7-24 24s10.7 24 24 24h80c13.3 0 24-10.7 24-24s-10.7-24-24-24H376zm0 96c-13.3 0-24 10.7-24 24s10.7 24 24 24h80c13.3 0 24-10.7 24-24s-10.7-24-24-24H376z" />
                                    </svg>
                                    <a href="">Register</a>
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
    <div id="particles-js"></div>


<!-- javascript -->
<script src="{{ asset('js/particles.js') }}"></script>
<script src="{{ asset('js/app.js') }}"></script>

    <script>
        document.getElementById('dropdown-toggle').addEventListener('change', function() {
            document.getElementById('dropdown-menu').classList.toggle('hidden');
        });
    </script>
</body>
</html>
