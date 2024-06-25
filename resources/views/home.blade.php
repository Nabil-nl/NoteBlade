<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    @vite('resources/css/app.css')
    <link href="{{ asset('css/style.css') }}" rel="stylesheet">
    <link href="{{ asset('css/button.css') }}" rel="stylesheet">
    <link href="{{ asset('css/container.css') }}" rel="stylesheet">


</head>

<body>
    <nav class="bg-[#B3EFB2]">
        <div class="flex items-center justify-between py-4 px-6">
            <div class="relative">
                <label class="container cursor-pointer">
                    <input type="checkbox" class="hidden" id="dropdown-toggle">
                    <div class="checkmark ">
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
                <a href="#" class="text-xl font-semibold ">NoteGuard</a>
            </div>
            <div class="auth flex items-center md:order-2 space-x-3 md:space-x-0 rtl:space-x-reverse gap-3" >
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
                                            <svg width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.2" stroke-linecap="round" xmlns="http://www.w3.org/2000/svg">
                                                <path d="M19 4v6.406l-3.753 3.741-6.463-6.462 3.7-3.685h6.516zm2-2h-12.388l1.497 1.5-4.171 4.167 9.291 9.291 4.161-4.193 1.61 1.623v-12.388zm-5 4c.552 0 1 .449 1 1s-.448 1-1 1-1-.449-1-1 .448-1 1-1zm0-1c-1.104 0-2 .896-2 2s.896 2 2 2 2-.896 2-2-.896-2-2-2zm6.708.292l-.708.708v3.097l2-2.065-1.292-1.74zm-12.675 9.294l-1.414 1.414h-2.619v2h-2v2h-2v-2.17l5.636-5.626-1.417-1.407-6.219 6.203v5h6v-2h2v-2h2l1.729-1.729-1.696-1.685z"></path>
                                            </svg>
                                            <a href="">login</a>
                                        </button>
                                    </li>
                                    <li>
                                        <button>
                                            <svg width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1" stroke-linecap="round" xmlns="http://www.w3.org/2000/svg">
                                                <path d="M2.598 9h-1.055c1.482-4.638 5.83-8 10.957-8 6.347 0 11.5 5.153 11.5 11.5s-5.153 11.5-11.5 11.5c-5.127 0-9.475-3.362-10.957-8h1.055c1.443 4.076 5.334 7 9.902 7 5.795 0 10.5-4.705 10.5-10.5s-4.705-10.5-10.5-10.5c-4.568 0-8.459 2.923-9.902 7zm12.228 3l-4.604-3.747.666-.753 6.112 5-6.101 5-.679-.737 4.608-3.763h-14.828v-1h14.826z"></path>
                                            </svg>
                                            <a href="">Sign in</a>
                                        </button>
                                    </li>
                                </ul>
                            </nav>
                        </label>
                    </div>

    <script>
        document.getElementById('dropdown-toggle').addEventListener('change', function() {
            document.getElementById('dropdown-menu').classList.toggle('hidden');
        });
    </script>
</body>