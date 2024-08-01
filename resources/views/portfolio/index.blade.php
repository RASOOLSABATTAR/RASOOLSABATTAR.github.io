<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Personal-Portfolio</title>

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet" />
        <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">

        <!-- Styles -->
        <style>
            .headline-animation span {
                display: inline-block;
                opacity: 0;
                animation: fadeIn 0.5s forwards;
            }
            .headline-animation span:nth-child(1) { animation-delay: 0.5s; }
            .headline-animation span:nth-child(2) { animation-delay: 1s; }
            .headline-animation span:nth-child(3) { animation-delay: 1.5s; }
            .headline-animation span:nth-child(4) { animation-delay: 2s; }
            .headline-animation span:nth-child(5) { animation-delay: 2.5s; }
            .headline-animation span:nth-child(6) { animation-delay: 3s; }
            .headline-animation span:nth-child(7) { animation-delay: 3.5s; }
            .headline-animation span:nth-child(8) { animation-delay: 4s; }

            @keyframes fadeIn {
                from { opacity: 0; }
                to { opacity: 1; }
            }
        </style>

    </head>
    <body class="bg-green-900 text-white">

        <nav class="bg-gray-800 shadow-lg">
            <div class="max-w-6xl mx-auto px-4">
                <div class="flex justify-between">
                    <div class="flex space-x-7">
                        <div>
                            <!-- Website Logo -->
                            <a href="#" class="flex items-center py-4 px-2">
                                <img src="https://img.freepik.com/free-photo/3d-render-little-boy-with-eyeglasses-blue-shirt_1142-50994.jpg?t=st=1721668348~exp=1721671948~hmac=d84222100e039ca4a96c2a3d31ef62e4ef8c5ba0abac25f6b3cf910d4252bbe2&w=740" alt="Logo" class="h-8 w-8 mr-2">
                            </a>
                        </div>
                        <!-- Primary Navbar items -->
                        <div class="hidden md:flex items-center space-x-1">
                        </div>
                    </div>
                    <!-- Secondary Navbar items -->
                    <div class="hidden md:flex items-center space-x-3">
                        <a href="{{url('/portfolio')}}" class="py-4 px-2 text-white border-green-500 font-semibold text-sm">PORTFOLIO</a>
                        <a href="#" class="py-4 px-2 text-white font-semibold hover:text-green-500 transition duration-300 text-sm">ABOUT</a>
                        <a href="#" class="py-4 px-2 text-white font-semibold hover:text-green-500 transition duration-300 text-sm">RESUME</a>
                        <a href="#" class="py-4 px-2 text-white font-semibold hover:text-green-500 transition duration-300 text-sm">CONTACT</a>
                        <a href="https://github.com/Rasoolattar17" target="_blank" class="py-4 px-2 text-white font-semibold hover:text-green-500 transition duration-300 text-sm">GITHUB</a>
                        <a href="https://www.linkedin.com/in/rasoolsab-attar-6648b7179/" target="_blank" class="py-4 px-2 text-white font-semibold hover:text-green-500 transition duration-300 text-sm">LINKEDIN</a>
                    </div>
                    <!-- Mobile menu button -->
                    <div class="md:hidden flex items-center">
                        <button class="outline-none mobile-menu-button">
                            <svg class="w-6 h-6 text-white hover:text-green-500"
                                 x-show="!showMenu"
                                 fill="none"
                                 stroke-linecap="round"
                                 stroke-linejoin="round"
                                 stroke-width="2"
                                 viewBox="0 0 24 24"
                                 stroke="currentColor">
                                <path d="M4 6h16M4 12h16M4 18h16"></path>
                            </svg>
                        </button>
                    </div>
                </div>
            </div>
            <!-- mobile menu -->
            <div class="hidden mobile-menu">
                <ul class="">
                    <li><a href="#" class="block text-sm px-2 py-4 text-white bg-green-500 font-semibold">PORTFOLIO</a></li>
                    <li><a href="#services" class="block text-sm px-2 py-4 hover:bg-green-500 transition duration-300">ABOUT</a></li>
                    <li><a href="#about" class="block text-sm px-2 py-4 hover:bg-green-500 transition duration-300">RESUME</a></li>
                    <li><a href="#contact" class="block text-sm px-2 py-4 hover:bg-green-500 transition duration-300">CONTACT</a></li>
                    <li><a href="https://github.com/Rasoolattar17" class="block text-sm px-2 py-4 hover:bg-green-500 transition duration-300">GITHUB</a></li>
                    <li><a href="https://www.linkedin.com/in/rasoolsab-attar-6648b7179/" class="block text-sm px-2 py-4 hover:bg-green-500 transition duration-300">LINKEDIN</a></li>
                </ul>
            </div>
            <script>
                const btn = document.querySelector("button.mobile-menu-button");
                const menu = document.querySelector(".mobile-menu");

                btn.addEventListener("click", () => {
                    menu.classList.toggle("hidden");
                });
            </script>
        </nav>
        <main class="bg-green-900 flex items-center justify-center min-h-screen font-mono">
            <div class="text-center space-y-4 mr-4">
                <h1 class="text-4xl font-bold text-white headline-animation">
                    <span>RASOOL</span> <span>ATTAR</span>
                </h1>
                <h2 class="text-2xl font-semibold text-gray-300">Full Stack Web Developer | Turning Ideas into Reality</h2>
                <button class="relative inline-flex items-center justify-center p-0.5 mb-2 me-2 overflow-hidden text-sm font-medium text-gray-900 rounded-lg group bg-gradient-to-br from-pink-500 to-orange-400 group-hover:from-pink-500 group-hover:to-orange-400 hover:text-white dark:text-white focus:ring-4 focus:outline-none focus:ring-pink-200 dark:focus:ring-pink-800">
                    <span class="relative px-5 py-2.5 transition-all ease-in duration-75 bg-white dark:bg-gray-900 rounded-md group-hover:bg-opacity-0">
                        <a href="{{url('/portfolio')}}">View Portfolio</a>
                    </span>
                </button>
            </div>
            <div class="ml-5">
                <img src="https://img.freepik.com/free-photo/3d-render-little-boy-with-eyeglasses-blue-shirt_1142-50994.jpg?t=st=1721668348~exp=1721671948~hmac=d84222100e039ca4a96c2a3d31ef62e4ef8c5ba0abac25f6b3cf910d4252bbe2&w=740" alt="Rasool Attar" class="w-96 h-96 rounded-full object-cover shadow-2xl">
            </div>
        </main>
    </body>
</html>
