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
                        <a href="#" class="py-4 px-2 text-white border-green-500 font-semibold text-sm">PORTFOLIO</a>
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
        <main class="max-w-4xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="container skills">
                <h1 class="text-2xl text-black text-center my-6 font-mono text-lg bg-gradient-to-r from-pink-500 via-red-400 to-orange-600 w-auto">FRONTEND SKILLS</h1>
                <div class="flex justify-center">
                    <div class="grid grid-cols-4 gap-4">
                        <div class="flex justify-center items-center">
                            <svg class="w-13 h-12" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 48 48">
                            <path fill="#E65100" d="M41,5H7l3,34l14,4l14-4L41,5L41,5z"></path>
                            <path fill="#FF6D00" d="M24 8L24 39.9 35.2 36.7 37.7 8z"></path>
                            <path fill="#FFF" d="M24,25v-4h8.6l-0.7,11.5L24,35.1v-4.2l4.1-1.4l0.3-4.5H24z M32.9,17l0.3-4H24v4H32.9z"></path>
                            <path fill="#EEE" d="M24,30.9v4.2l-7.9-2.6L15.7,27h4l0.2,2.5L24,30.9z M19.1,17H24v-4h-9.1l0.7,12H24v-4h-4.6L19.1,17z"></path>
                            </svg>
                        </div>
                        <div class="flex justify-center items-center">
                            <svg class="w-13 h-12" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 48 48">
                            <path fill="#0277BD" d="M41,5H7l3,34l14,4l14-4L41,5L41,5z"></path>
                            <path fill="#039BE5" d="M24 8L24 39.9 35.2 36.7 37.7 8z"></path>
                            <path fill="#FFF" d="M33.1 13L24 13 24 17 28.9 17 28.6 21 24 21 24 25 28.4 25 28.1 29.5 24 30.9 24 35.1 31.9 32.5 32.6 21 32.6 21z"></path>
                            <path fill="#EEE" d="M24,13v4h-8.9l-0.3-4H24z M19.4,21l0.2,4H24v-4H19.4z M19.8,27h-4l0.3,5.5l7.9,2.6v-4.2l-4.1-1.4L19.8,27z"></path>
                            </svg>
                        </div>
                        <div class="flex justify-center items-center">
                            <svg class="w-13 h-12" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 64 64">
                            <ellipse cx="32" cy="61" opacity=".3" rx="20" ry="3"></ellipse>
                            <path fill="#ffce29" d="M54,20v24c0,2.25-0.74,4.32-2,5.99V50c-1.69,2.24-4.29,3.75-7.25,3.97C44.51,53.99,44.25,54,44,54H20c-5.52,0-10-4.48-10-10V20c0-0.25,0.01-0.51,0.03-0.75c0.22-2.96,1.73-5.56,3.97-7.25h0.01c1.67-1.26,3.74-2,5.99-2h24C49.52,10,54,14.48,54,20z"></path>
                            <path fill="#fff" d="M14.01,12H14c-2.24,1.69-3.75,4.29-3.97,7.25C10.01,19.49,10,19.75,10,20v12c2.761,0,5-2.239,5-5v-7c0-0.108,0.003-0.221,0.017-0.38c0.102-1.375,0.778-2.65,1.862-3.525c0.048-0.033,0.095-0.068,0.142-0.103C17.881,15.343,18.911,15,20,15h6c2.761,0,5-2.239,5-5H20C17.75,10,15.68,10.74,14.01,12z" opacity=".3"></path>
                            <path d="M54,44V28c-2.761,0-5,2.238-5,5v11c0,2.757-2.243,5-5,5H33c-2.761,0-5,2.238-5,5h16C49.523,54,54,49.523,54,44z" opacity=".15"></path>
                            <path fill="none" stroke="#fff" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" stroke-width="3" d="M13.5,23.5V20c0-0.153,0.005-0.312,0.018-0.459c0.135-1.809,1.003-3.46,2.396-4.594l0.204-0.152"></path>
                            <g>
                                <path fill="#9c34c2" d="M28.441,47.566c-0.453,0.013-0.807-0.106-1.061-0.36c-0.253-0.253-0.38-0.58-0.38-0.981c0-0.306,0.09-0.574,0.271-0.802c0.179-0.227,0.443-0.352,0.791-0.38l0.58-0.041c1.069-0.065,1.602-0.628,1.602-1.682v-8.632c0-0.507,0.134-0.898,0.401-1.172c0.267-0.274,0.647-0.411,1.143-0.411c1.04,0,1.561,0.528,1.561,1.583v8.593c0,2.657-1.402,4.072-4.207,4.246L28.441,47.566z"></path>
                                <path fill="#9c34c2" d="M41.219,47.626c-0.854,0-1.71-0.093-2.564-0.28c-0.854-0.186-1.596-0.46-2.223-0.821c-0.373-0.2-0.608-0.469-0.701-0.81c-0.093-0.341-0.073-0.672,0.06-0.993c0.134-0.319,0.347-0.546,0.641-0.68c0.293-0.134,0.647-0.101,1.061,0.099c0.535,0.308,1.13,0.535,1.783,0.681c0.654,0.147,1.302,0.22,1.943,0.22c0.962,0,1.653-0.15,2.073-0.45c0.421-0.302,0.631-0.678,0.631-1.133c0-0.386-0.147-0.694-0.44-0.921c-0.295-0.227-0.808-0.421-1.544-0.58l-2.262-0.481c-2.523-0.535-3.786-1.843-3.786-3.926c0-0.893,0.241-1.679,0.722-2.354c0.481-0.674,1.159-1.201,2.036-1.581s1.818-0.571,2.852-0.571c0.788,0,1.567,0.073,2.334,0.221c0.767,0.147,1.442,0.347,2.026,0.601c0.333,0.147,0.562,0.337,0.68,0.561c0.117,0.227,0.147,0.461,0.08,0.704c-0.068,0.246-0.217,0.447-0.451,0.601c-0.234,0.154-0.509,0.193-0.82,0.121c-0.559-0.201-1.127-0.373-1.702-0.52c-0.575-0.146-1.17-0.22-1.784-0.22c-0.929,0-1.604,0.15-2.017,0.45s-0.621,0.668-0.621,1.123c0,0.371,0.137,0.68,0.41,0.921c0.271,0.241,0.795,0.439,1.571,0.601l2.262,0.5c1.091,0.227,1.956,0.682,2.592,1.361c0.637,0.679,0.956,1.547,0.956,2.604c0,0.881-0.234,1.671-0.701,2.367c-0.467,0.694-1.123,1.24-1.968,1.639C43.382,47.429,42.381,47.626,41.219,47.626z"></path>
                                <path fill="#9c34c2" d="M53.028,30.5c0.373,0.372,0.553,0.807,0.553,1.305c0,0.497-0.18,0.932-0.553,1.305c-0.373,0.373-0.808,0.553-1.305,0.553c-0.498,0-0.933-0.18-1.305-0.553c-0.373-0.373-0.553-0.808-0.553-1.305c0-0.498,0.18-0.933,0.553-1.305c0.372-0.373,0.807-0.553,1.305-0.553C52.22,29.947,52.655,30.127,53.028,30.5z"></path>
                                <path fill="#9c34c2" d="M57.168,26.5c0.539,0.54,0.809,1.188,0.809,1.945c0,0.756-0.27,1.405-0.809,1.945c-0.539,0.539-1.188,0.809-1.945,0.809c-0.756,0-1.405-0.27-1.945-0.809c-0.54-0.54-0.809-1.188-0.809-1.945c0-0.756,0.27-1.405,0.809-1.945c0.54-0.54,1.188-0.809,1.945-0.809C55.98,25.691,56.628,25.96,57.168,26.5z"></path>
                            </g>
                            </svg>
                        </div>
                        <div class="flex justify-center items-center">
                            <svg class="w-13 h-12" xmlns="http://www.w3.org/2000/svg" x="0px" y="0px" width="100" height="100" viewBox="0 0 48 48">
                                <linearGradient id="Q_pn21O5LDDqwJlze0Upoa_g9mmSxx3SwAI_gr1" x1="24" x2="24" y1="41" y2="7" gradientUnits="userSpaceOnUse"><stop offset="0" stop-color="#643499"></stop><stop offset=".011" stop-color="#68369f"></stop><stop offset=".135" stop-color="#773db6"></stop><stop offset=".193" stop-color="#8042c3"></stop><stop offset=".248" stop-color="#8343c8"></stop><stop offset=".388" stop-color="#8444c9"></stop><stop offset=".732" stop-color="#9751d2"></stop><stop offset=".997" stop-color="#9c55d4"></stop><stop offset=".998" stop-color="#9c55d4"></stop><stop offset="1" stop-color="#9c55d4"></stop></linearGradient><path fill="url(#Q_pn21O5LDDqwJlze0Upoa_g9mmSxx3SwAI_gr1)" d="M7.373,11.443C7.293,9.132,9.094,7,11.529,7h24.946c2.435,0,4.236,2.132,4.155,4.443	c-0.077,2.221,0.023,5.097,0.747,7.443c0.681,2.207,1.801,3.652,3.593,3.981c0.206,0.038,0.363,0.205,0.363,0.415v1.438	c0,0.21-0.157,0.377-0.363,0.415c-1.792,0.328-2.912,1.773-3.593,3.981c-0.724,2.345-0.824,5.222-0.747,7.443	C40.71,38.868,38.909,41,36.475,41H11.529c-2.434,0-4.236-2.132-4.155-4.443c0.077-2.221-0.023-5.097-0.747-7.443	c-0.681-2.207-1.804-3.652-3.596-3.981c-0.206-0.038-0.363-0.205-0.363-0.415v-1.438c0-0.21,0.157-0.377,0.363-0.415	c1.792-0.328,2.915-1.773,3.596-3.981C7.35,16.54,7.451,13.664,7.373,11.443z"></path><path fill="#fff" d="M27.073,23.464v-0.028c1.853-0.32,3.299-2.057,3.299-3.97c0-1.352-0.52-2.498-1.504-3.312	c-0.981-0.812-2.357-1.241-3.981-1.241H17.45V33.08h7.475c1.942,0,3.555-0.474,4.663-1.372c1.109-0.899,1.696-2.207,1.696-3.783	C31.283,25.544,29.593,23.756,27.073,23.464z M23.59,22.608h-3.181V17.29h3.784c2.076,0,3.219,0.911,3.219,2.565	C27.413,21.63,26.055,22.608,23.59,22.608z M20.409,24.834h3.759c2.716,0,4.092,0.981,4.092,2.916c0,1.932-1.357,2.953-3.925,2.953	h-3.926V24.834z"></path>
                                </svg>
                        </div>
                        <div class="flex justify-center items-center">
                            <svg class="w-13 h-12" xmlns="http://www.w3.org/2000/svg" x="0px" y="0px" width="100" height="100" viewBox="0 0 48 48">
                                <linearGradient id="iOmQfjoCC4Hw6zVwRjSDha_x7XMNGh2vdqA_gr1" x1="21.861" x2="25.703" y1="8.237" y2="36.552" gradientUnits="userSpaceOnUse"><stop offset="0" stop-color="#00c1e0"></stop><stop offset="1" stop-color="#009bb8"></stop></linearGradient><path fill="url(#iOmQfjoCC4Hw6zVwRjSDha_x7XMNGh2vdqA_gr1)" d="M24,9.604c-5.589,0-9.347,2.439-11.276,7.318c-0.2,0.505,0.417,0.92,0.816,0.551 c2.035-1.882,4.322-2.505,6.86-1.871c1.826,0.456,3.131,1.781,4.576,3.247C27.328,21.236,30.051,24,36,24 c5.589,0,9.348-2.44,11.276-7.319c0.2-0.505-0.417-0.92-0.816-0.551c-2.035,1.882-4.322,2.506-6.86,1.872 c-1.825-0.456-3.13-1.781-4.575-3.247C32.672,12.367,29.948,9.604,24,9.604L24,9.604z M12,24c-5.589,0-9.348,2.44-11.276,7.319 c-0.2,0.505,0.417,0.92,0.816,0.551c2.035-1.882,4.322-2.506,6.86-1.871c1.825,0.457,3.13,1.781,4.575,3.246 c2.353,2.388,5.077,5.152,11.025,5.152c5.589,0,9.348-2.44,11.276-7.319c0.2-0.505-0.417-0.92-0.816-0.551 c-2.035,1.882-4.322,2.506-6.86,1.871c-1.826-0.456-3.131-1.781-4.576-3.246C20.672,26.764,17.949,24,12,24L12,24z"></path>
                                </svg>
                        </div>
                        <div class="flex justify-center items-center">
                            <svg class="w-13 h-12" xmlns="http://www.w3.org/2000/svg" x="0px" y="0px" width="100" height="100" viewBox="0 0 48 48">
                                <path fill="#bdbdbd" d="M23.933 2L3 9.285 6.308 36.408 23.955 46 41.693 36.278 45 9.156z"></path><path fill="#b71c1c" d="M42.818 10.527L24 4.135 24 43.695 39.832 35.017z"></path><path fill="#dd2c00" d="M23.941 4.115L5.181 10.644 8.168 35.143 23.951 43.721 24 43.695 24 4.135z"></path><path fill="#bdbdbd" d="M24 5.996L24 15.504 32.578 34 36.987 34z"></path><path fill="#eee" d="M11.013 34L15.422 34 24 15.504 24 5.996z"></path><path fill="#bdbdbd" d="M24 24H30V28H24z"></path><path fill="#eee" d="M18 24H24V28H18z"></path>
                                </svg>
                        </div>
                        <div class="flex justify-center items-center">
                            <svg class="w-13 h-12" xmlns="http://www.w3.org/2000/svg" x="0px" y="0px" width="100" height="100" viewBox="0 0 48 48">
                                <circle cx="24" cy="24" r="9" fill="#448aff"></circle><circle cx="37" cy="11" r="4" fill="#448aff"></circle><path fill="#448aff" d="M41.706,14.715c-0.842,1.064-2.034,1.836-3.405,2.139C39.379,19.007,40,21.429,40,24	c0,8.837-7.163,16-16,16S8,32.837,8,24S15.163,8,24,8c2.571,0,4.993,0.621,7.145,1.699c0.303-1.371,1.075-2.564,2.139-3.405	C30.509,4.835,27.354,4,24,4C12.954,4,4,12.954,4,24c0,11.046,8.954,20,20,20s20-8.954,20-20C44,20.646,43.165,17.491,41.706,14.715	z"></path>
                                </svg>
                        </div>
                    </div>
                </div>
                <h1 class="text-2xl text-black text-center my-6 font-mono text-lg bg-gradient-to-r from-pink-500 via-red-400 to-orange-600 w-auto ">BACKEND SKILLS</h1>
                <div class="flex justify-center">
                    <div class="grid grid-cols-4 gap-4">
                        <div class="flex justify-center items-center">
                            <svg class="w-13 h-12" xmlns="http://www.w3.org/2000/svg" x="0px" y="0px" width="100" height="100" viewBox="0 0 80 80">
                                <path fill="#dcd5f2" d="M40,61.5C18.22,61.5,0.5,51.855,0.5,40S18.22,18.5,40,18.5S79.5,28.145,79.5,40S61.78,61.5,40,61.5z"></path><path fill="#8b75a1" d="M40,19c21.505,0,39,9.421,39,21S61.505,61,40,61S1,51.579,1,40S18.495,19,40,19 M40,18 C17.909,18,0,27.85,0,40s17.909,22,40,22s40-9.85,40-22S62.091,18,40,18L40,18z"></path><path fill="#36404d" d="M25.112 34c1.725 0 3.214.622 4.084 1.706.749.934.981 2.171.668 3.577C29.023 43.074 27.395 44 21.57 44h-4.14l1.75-10H25.112M25.112 32H17.5L14 52h2l1.056-6h4.515c5.863 0 9.053-.905 10.246-6.284C32.842 35.096 29.436 32 25.112 32L25.112 32zM61.112 34c1.725 0 3.214.622 4.084 1.706.749.934.981 2.171.668 3.577C65.023 43.074 63.395 44 57.57 44h-4.14l1.75-10H61.112M61.112 32H53.5L50 52h2l1.056-6h4.515c5.863 0 9.053-.905 10.246-6.284C68.842 35.096 65.436 32 61.112 32L61.112 32z"></path><g><path fill="#36404d" d="M49.072,33.212C48.193,32.348,46.644,32,44.334,32h-5.538L40,26h-2.1L34,46h1.99l2.388-12h0.419 h5.538c2.338,0,3.094,0.4,3.335,0.637c0.343,0.338,0.424,1.226,0.217,2.363l-1.767,9h2.106l1.626-8.63 C50.199,35.462,49.936,34.062,49.072,33.212z"></path></g>
                            </svg>
                        </div>
                        <div class="flex justify-center items-center">
                            <svg class="w-13 h-12" xmlns="http://www.w3.org/2000/svg" x="0px" y="0px" width="100" height="100" viewBox="0 0 48 48">
                                <path fill="#ffab40" d="M33.5,16c-2.5,0-4.8,1-6.5,2.6C25.3,17,23,16,20.5,16c-5.2,0-9.5,4.3-9.5,9.5V37h6V24.5 c0-1.9,1.6-3.5,3.5-3.5s3.5,1.6,3.5,3.5V37h6V24.5c0-1.9,1.6-3.5,3.5-3.5s3.5,1.6,3.5,3.5V37h6V25.5C43,20.3,38.7,16,33.5,16z"></path><path d="M5.5 16.2H6.5V32H5.5z"></path><path fill="#424242" d="M22,13c1.1,0.4,2.6,2,3,3c-1.8,1.7-2.6,2.9-3,6c-0.1,1.1-0.9,1.7-2,1c-3.1-1.9-6-2-8-2 c-1-1-0.5-3.7,0-5l6,1L22,13z"></path><path fill="#616161" d="M18,17H4l11-7h14L18,17z"></path><path fill="#424242" d="M7.5,30c0-2.2-0.7-4-1.5-4s-1.5,1.8-1.5,4s0.7,4,1.5,4S7.5,32.2,7.5,30z"></path>
                            </svg>
                        </div>
                        <div class="flex justify-center items-center">
                            <img width="40" height="40" src="https://img.icons8.com/nolan/64/laravel.png" alt="laravel"/>
                        </div>
                        <div class="flex justify-center items-center">
                            <svg class="w-13 h-12" xmlns="http://www.w3.org/2000/svg" x="0px" y="0px" width="100" height="100" viewBox="0 0 48 48">
                                <path fill="#00796b" d="M0.002,35.041h1.92v-7.085l2.667,6.057c0.329,0.755,0.779,1.022,1.662,1.022 s1.315-0.267,1.644-1.022l2.667-5.902v6.93h1.92v-7.258c0-0.697-0.277-1.035-0.849-1.209c-1.367-0.43-2.285-0.059-2.7,0.872 l-2.735,6.16l-2.649-6.16c-0.398-0.93-1.332-1.302-2.7-0.872C0.277,26.748,0,27.085,0,27.782v7.258H0.002z"></path><path fill="#00796b" d="M13.441,29.281h1.92v4.055c-0.015,0.2,0.064,0.731,0.99,0.745c0.472,0.008,2.821,0,2.85,0v-4.8h1.92 c0.008,0,0,5.968,0,5.993c0.01,1.472-1.828,1.662-2.673,1.687h-5.006v-0.96c0.01,0,4.787,0.001,4.801,0 c1.088-0.115,0.959-0.714,0.959-0.896v-0.064H16.19c-1.67-0.015-2.735-0.751-2.747-1.59C13.441,33.373,13.479,29.317,13.441,29.281 z"></path><path fill="#f57f17" d="M22.081,35.041h4.807c0.63,0,1.242-0.132,1.728-0.36c0.81-0.372,1.144-0.875,1.144-1.536v-1.368 c0-1.476-1.83-1.536-2.88-1.536h-1.92c-0.755,0-0.87-0.456-0.96-0.96v-0.96c0.09-0.384,0.258-0.9,0.923-0.96 c0.773,0,4.836,0,4.836,0v-0.96h-4.566c-0.755,0-3.114,0.09-3.114,1.92v1.187c0,0.84,0.738,1.524,2.34,1.692 c0.18,0.012,0.36,0.024,0.539,0.024c0,0,1.866-0.036,1.92-0.024c1.08,0,0.96,0.84,0.96,0.96v0.96c0,0.132-0.03,0.96-0.971,0.96 c-0.072,0-4.789,0-4.789,0V35.041z"></path><path fill="#f57f17" d="M40.32,33.08c0,1.159,0.655,1.809,2.392,1.939c0.162,0.011,0.325,0.021,0.488,0.021H48v-0.96h-4.435 c-0.991,0-1.325-0.416-1.325-1.011v-6.669h-1.92V33.08z"></path><path fill="#f57f17" d="M30.704,33.121v-4.8c0-1.02,0.5-1.724,1.916-1.92h0.672h3.447h0.525 c1.416,0.196,2.08,0.899,2.08,1.92v4.782c0,0.827-0.215,1.271-0.916,1.559L39.916,36h-2.16l-1.07-0.96h-1.257l-2.136,0.012 c-0.309,0-0.635-0.043-0.993-0.141C31.226,34.618,30.704,34.054,30.704,33.121z M32.624,33.121c0.098,0.467,0.473,0.96,1.14,0.96 h1.864l-1.068-0.96h2.175l0.519,0.482c0,0,0.186-0.152,0.186-0.482c0-0.33-0.016-4.8-0.016-4.8c-0.098-0.434-0.538-0.96-1.188-0.96 h-2.471c-0.749,0-1.14,0.548-1.14,1.058L32.624,33.121L32.624,33.121z"></path><path fill="#00796b" d="M46.199,25.389c-1.031-0.028-1.818,0.068-2.491,0.351c-0.191,0.081-0.496,0.083-0.528,0.323 c0.105,0.11,0.121,0.275,0.205,0.41c0.16,0.26,0.432,0.609,0.674,0.791c0.265,0.2,0.538,0.414,0.821,0.587 c0.504,0.307,1.067,0.483,1.553,0.791c0.286,0.181,0.57,0.411,0.85,0.615c0.138,0.102,0.23,0.259,0.41,0.323 c0-0.01,0-0.019,0-0.029c-0.094-0.12-0.119-0.285-0.205-0.411c-0.127-0.127-0.254-0.254-0.381-0.381 c-0.372-0.494-0.846-0.929-1.348-1.289c-0.401-0.288-1.298-0.677-1.466-1.143c-0.01-0.01-0.019-0.019-0.03-0.03 c0.284-0.032,0.617-0.135,0.879-0.205c0.441-0.118,0.834-0.087,1.289-0.205c0.205-0.059,0.41-0.117,0.615-0.176 c0-0.039,0-0.078,0-0.117c-0.23-0.236-0.395-0.548-0.645-0.762c-0.657-0.559-1.373-1.117-2.11-1.583 c-0.409-0.258-0.915-0.426-1.348-0.645c-0.146-0.074-0.402-0.112-0.498-0.234c-0.228-0.29-0.351-0.659-0.527-0.996 c-0.368-0.708-0.73-1.482-1.055-2.227c-0.223-0.508-0.368-1.01-0.645-1.466c-1.331-2.188-2.764-3.509-4.982-4.807 c-0.472-0.276-1.041-0.385-1.642-0.528c-0.323-0.019-0.645-0.039-0.968-0.059c-0.197-0.083-0.401-0.323-0.587-0.44 c-0.735-0.465-2.621-1.475-3.165-0.147c-0.344,0.838,0.514,1.656,0.821,2.081c0.215,0.298,0.491,0.632,0.645,0.968 c0.101,0.22,0.119,0.441,0.205,0.674c0.213,0.574,0.55,1.228,0.826,1.759c0.139,0.269,0.293,0.551,0.469,0.791 c0.108,0.147,0.293,0.212,0.323,0.44c-0.181,0.253-0.191,0.646-0.293,0.968c-0.458,1.445-0.285,3.24,0.381,4.308 c0.204,0.328,0.686,1.032,1.348,0.762c0.579-0.236,0.45-0.967,0.615-1.612c0.037-0.146,0.014-0.253,0.088-0.351 c0,0.01,0,0.019,0,0.03c0.176,0.351,0.351,0.704,0.528,1.055c0.391,0.629,1.084,1.286,1.67,1.73 c0.304,0.23,0.544,0.628,0.938,0.762c0-0.01,0-0.019,0-0.03c-0.01,0-0.019,0-0.03,0c-0.076-0.119-0.196-0.168-0.293-0.264 c-0.229-0.225-0.485-0.504-0.674-0.762c-0.534-0.725-1.006-1.519-1.436-2.345c-0.205-0.395-0.384-0.829-0.557-1.231 c-0.067-0.155-0.066-0.389-0.205-0.469c-0.19,0.294-0.468,0.532-0.615,0.879c-0.234,0.555-0.265,1.233-0.351,1.934 c-0.052,0.018-0.029,0.006-0.059,0.029c-0.408-0.099-0.552-0.518-0.704-0.879c-0.384-0.912-0.455-2.38-0.117-3.429 c0.087-0.272,0.482-1.127,0.323-1.378c-0.076-0.251-0.328-0.396-0.468-0.587c-0.175-0.236-0.348-0.548-0.469-0.821 c-0.314-0.711-0.612-1.538-0.943-2.257c-0.158-0.344-0.425-0.691-0.645-0.996c-0.243-0.338-0.516-0.587-0.704-0.996 c-0.067-0.145-0.158-0.378-0.059-0.528c0.032-0.101,0.076-0.143,0.176-0.176c0.17-0.132,0.643,0.043,0.821,0.117 c0.47,0.195,0.862,0.381,1.26,0.645c0.191,0.127,0.384,0.372,0.615,0.44c0.088,0,0.176,0,0.264,0 c0.413,0.095,0.875,0.03,1.26,0.147c0.682,0.207,1.292,0.529,1.846,0.879c1.69,1.067,3.071,2.585,4.016,4.397 c0.152,0.292,0.218,0.57,0.351,0.879c0.27,0.624,0.611,1.266,0.879,1.876c0.268,0.609,0.53,1.223,0.909,1.73 c0.2,0.266,0.97,0.409,1.319,0.557c0.245,0.104,0.647,0.211,0.879,0.351c0.444,0.268,0.874,0.587,1.289,0.879 C45.528,24.803,46.167,25.124,46.199,25.389z"></path><path fill="#00796b" d="M33.098,14.223c-0.215-0.004-0.367,0.023-0.528,0.059c0,0.01,0,0.019,0,0.03c0.01,0,0.019,0,0.03,0 c0.103,0.21,0.283,0.347,0.41,0.528c0.098,0.205,0.195,0.41,0.293,0.615c0.01-0.01,0.019-0.019,0.029-0.029 c0.181-0.128,0.265-0.332,0.264-0.645c-0.073-0.077-0.084-0.173-0.147-0.264C33.365,14.394,33.203,14.325,33.098,14.223z"></path>
                            </svg>
                        </div>
                    </div>
                </div>
                <h1 class="text-2xl text-black text-center my-6 font-mono text-lg bg-gradient-to-r from-pink-500 via-red-400 to-orange-600 w-auto">VERSION CONTROL SYSTEMS</h1>
                <div class="flex justify-center">
                    <div class="grid grid-cols-4 gap-4">
                        <div class="flex justify-center items-center">
                            <svg class="w-13 h-12" xmlns="http://www.w3.org/2000/svg" x="0px" y="0px" width="100" height="100" viewBox="0 0 48 48">
                                <path fill="#F4511E" d="M42.2,22.1L25.9,5.8C25.4,5.3,24.7,5,24,5c0,0,0,0,0,0c-0.7,0-1.4,0.3-1.9,0.8l-3.5,3.5l4.1,4.1c0.4-0.2,0.8-0.3,1.3-0.3c1.7,0,3,1.3,3,3c0,0.5-0.1,0.9-0.3,1.3l4,4c0.4-0.2,0.8-0.3,1.3-0.3c1.7,0,3,1.3,3,3s-1.3,3-3,3c-1.7,0-3-1.3-3-3c0-0.5,0.1-0.9,0.3-1.3l-4-4c-0.1,0-0.2,0.1-0.3,0.1v10.4c1.2,0.4,2,1.5,2,2.8c0,1.7-1.3,3-3,3s-3-1.3-3-3c0-1.3,0.8-2.4,2-2.8V18.8c-1.2-0.4-2-1.5-2-2.8c0-0.5,0.1-0.9,0.3-1.3l-4.1-4.1L5.8,22.1C5.3,22.6,5,23.3,5,24c0,0.7,0.3,1.4,0.8,1.9l16.3,16.3c0,0,0,0,0,0c0.5,0.5,1.2,0.8,1.9,0.8s1.4-0.3,1.9-0.8l16.3-16.3c0.5-0.5,0.8-1.2,0.8-1.9C43,23.3,42.7,22.6,42.2,22.1z"></path>
                            </svg>
                        </div>
                        <div class="flex justify-center items-center">
                            <svg class="w-13 h-12" xmlns="http://www.w3.org/2000/svg" x="0px" y="0px" width="100" height="100" viewBox="0 0 50 50">
                                <path d="M17.791,46.836C18.502,46.53,19,45.823,19,45v-5.4c0-0.197,0.016-0.402,0.041-0.61C19.027,38.994,19.014,38.997,19,39 c0,0-3,0-3.6,0c-1.5,0-2.8-0.6-3.4-1.8c-0.7-1.3-1-3.5-2.8-4.7C8.9,32.3,9.1,32,9.7,32c0.6,0.1,1.9,0.9,2.7,2c0.9,1.1,1.8,2,3.4,2 c2.487,0,3.82-0.125,4.622-0.555C21.356,34.056,22.649,33,24,33v-0.025c-5.668-0.182-9.289-2.066-10.975-4.975 c-3.665,0.042-6.856,0.405-8.677,0.707c-0.058-0.327-0.108-0.656-0.151-0.987c1.797-0.296,4.843-0.647,8.345-0.714 c-0.112-0.276-0.209-0.559-0.291-0.849c-3.511-0.178-6.541-0.039-8.187,0.097c-0.02-0.332-0.047-0.663-0.051-0.999 c1.649-0.135,4.597-0.27,8.018-0.111c-0.079-0.5-0.13-1.011-0.13-1.543c0-1.7,0.6-3.5,1.7-5c-0.5-1.7-1.2-5.3,0.2-6.6 c2.7,0,4.6,1.3,5.5,2.1C21,13.4,22.9,13,25,13s4,0.4,5.6,1.1c0.9-0.8,2.8-2.1,5.5-2.1c1.5,1.4,0.7,5,0.2,6.6c1.1,1.5,1.7,3.2,1.6,5 c0,0.484-0.045,0.951-0.11,1.409c3.499-0.172,6.527-0.034,8.204,0.102c-0.002,0.337-0.033,0.666-0.051,0.999 c-1.671-0.138-4.775-0.28-8.359-0.089c-0.089,0.336-0.197,0.663-0.325,0.98c3.546,0.046,6.665,0.389,8.548,0.689 c-0.043,0.332-0.093,0.661-0.151,0.987c-1.912-0.306-5.171-0.664-8.879-0.682C35.112,30.873,31.557,32.75,26,32.969V33 c2.6,0,5,3.9,5,6.6V45c0,0.823,0.498,1.53,1.209,1.836C41.37,43.804,48,35.164,48,25C48,12.318,37.683,2,25,2S2,12.318,2,25 C2,35.164,8.63,43.804,17.791,46.836z"></path>
                            </svg>
                        </div>
                        <div class="flex justify-center items-center">
                            <img width="48" height="48" src="https://img.icons8.com/external-tal-revivo-color-tal-revivo/48/external-bitbucket-is-a-web-based-version-control-repository-hosting-service-logo-color-tal-revivo.png" alt="external-bitbucket-is-a-web-based-version-control-repository-hosting-service-logo-color-tal-revivo"/>
                        </div>
                    </div>
                </div>
                <h1 class="text-2xl text-black text-center my-6 font-mono text-lg bg-gradient-to-r from-pink-500 via-red-400 to-orange-600 w-auto ">DevOps</h1>
                <div class="flex justify-center">
                    <div class="grid grid-cols-4 gap-4">
                        <div class="flex justify-center items-center">
                        </div>
                        <div class="flex justify-center items-center">
                            <svg class="w-13 h-12" xmlns="http://www.w3.org/2000/svg" x="0px" y="0px" width="100" height="100" viewBox="0 0 48 48">
                                <linearGradient id="k8yl7~hDat~FaoWq8WjN6a_VLKafOkk3sBX_gr1" x1="-1254.397" x2="-1261.911" y1="877.268" y2="899.466" gradientTransform="translate(1981.75 -1362.063) scale(1.5625)" gradientUnits="userSpaceOnUse"><stop offset="0" stop-color="#114a8b"></stop><stop offset="1" stop-color="#0669bc"></stop></linearGradient><path fill="url(#k8yl7~hDat~FaoWq8WjN6a_VLKafOkk3sBX_gr1)" d="M17.634,6h11.305L17.203,40.773c-0.247,0.733-0.934,1.226-1.708,1.226H6.697 c-0.994,0-1.8-0.806-1.8-1.8c0-0.196,0.032-0.39,0.094-0.576L15.926,7.227C16.173,6.494,16.86,6,17.634,6L17.634,6z"></path><path fill="#0078d4" d="M34.062,29.324H16.135c-0.458-0.001-0.83,0.371-0.831,0.829c0,0.231,0.095,0.451,0.264,0.608 l11.52,10.752C27.423,41.826,27.865,42,28.324,42h10.151L34.062,29.324z"></path><linearGradient id="k8yl7~hDat~FaoWq8WjN6b_VLKafOkk3sBX_gr2" x1="-1252.05" x2="-1253.788" y1="887.612" y2="888.2" gradientTransform="translate(1981.75 -1362.063) scale(1.5625)" gradientUnits="userSpaceOnUse"><stop offset="0" stop-opacity=".3"></stop><stop offset=".071" stop-opacity=".2"></stop><stop offset=".321" stop-opacity=".1"></stop><stop offset=".623" stop-opacity=".05"></stop><stop offset="1" stop-opacity="0"></stop></linearGradient><path fill="url(#k8yl7~hDat~FaoWq8WjN6b_VLKafOkk3sBX_gr2)" d="M17.634,6c-0.783-0.003-1.476,0.504-1.712,1.25L5.005,39.595 c-0.335,0.934,0.151,1.964,1.085,2.299C6.286,41.964,6.493,42,6.702,42h9.026c0.684-0.122,1.25-0.603,1.481-1.259l2.177-6.416 l7.776,7.253c0.326,0.27,0.735,0.419,1.158,0.422h10.114l-4.436-12.676l-12.931,0.003L28.98,6H17.634z"></path><linearGradient id="k8yl7~hDat~FaoWq8WjN6c_VLKafOkk3sBX_gr3" x1="-1252.952" x2="-1244.704" y1="876.6" y2="898.575" gradientTransform="translate(1981.75 -1362.063) scale(1.5625)" gradientUnits="userSpaceOnUse"><stop offset="0" stop-color="#3ccbf4"></stop><stop offset="1" stop-color="#2892df"></stop></linearGradient><path fill="url(#k8yl7~hDat~FaoWq8WjN6c_VLKafOkk3sBX_gr3)" d="M32.074,7.225C31.827,6.493,31.141,6,30.368,6h-12.6c0.772,0,1.459,0.493,1.705,1.224 l10.935,32.399c0.318,0.942-0.188,1.963-1.13,2.281C29.093,41.968,28.899,42,28.703,42h12.6c0.994,0,1.8-0.806,1.8-1.801 c0-0.196-0.032-0.39-0.095-0.575L32.074,7.225z"></path>
                                </svg>
                        </div>
                        <div class="flex justify-center items-center">
                            <svg class="w-13 h-12" xmlns="http://www.w3.org/2000/svg" x="0px" y="0px" width="100" height="100" viewBox="0 0 48 48">
                                <path fill="#2395ec" d="M47.527,19.847c-0.13-0.102-1.345-1.007-3.908-1.007c-0.677,0.003-1.352,0.06-2.019,0.171 c-0.496-3.354-3.219-4.93-3.345-5.003l-0.688-0.392l-0.453,0.644c-0.567,0.866-1.068,1.76-1.311,2.763 c-0.459,1.915-0.18,3.713,0.806,5.25C35.417,22.928,33.386,22.986,33,23H1.582c-0.826,0.001-1.496,0.66-1.501,1.474 c-0.037,2.733,0.353,5.553,1.306,8.119c1.089,2.818,2.71,4.894,4.818,6.164C8.567,40.184,12.405,41,16.756,41 c1.965,0.006,3.927-0.169,5.859-0.524c2.686-0.487,5.271-1.413,7.647-2.74c1.958-1.119,3.72-2.542,5.219-4.215 c2.505-2.798,3.997-5.913,5.107-8.682c0.149,0,0.298,0,0.442,0c2.743,0,4.429-1.083,5.359-1.99 c0.618-0.579,1.101-1.284,1.414-2.065L48,20.216L47.527,19.847z"></path><path fill="#2395ec" d="M8,22H5c-0.552,0-1-0.448-1-1v-3c0-0.552,0.448-1,1-1h3c0.552,0,1,0.448,1,1v3 C9,21.552,8.552,22,8,22z"></path><path fill="#2395ec" d="M14,22h-3c-0.552,0-1-0.448-1-1v-3c0-0.552,0.448-1,1-1h3c0.552,0,1,0.448,1,1v3 C15,21.552,14.552,22,14,22z"></path><path fill="#2395ec" d="M20,22h-3c-0.552,0-1-0.448-1-1v-3c0-0.552,0.448-1,1-1h3c0.552,0,1,0.448,1,1v3 C21,21.552,20.552,22,20,22z"></path><path fill="#2395ec" d="M26,22h-3c-0.552,0-1-0.448-1-1v-3c0-0.552,0.448-1,1-1h3c0.552,0,1,0.448,1,1v3 C27,21.552,26.552,22,26,22z"></path><path fill="#2395ec" d="M14,16h-3c-0.552,0-1-0.448-1-1v-3c0-0.552,0.448-1,1-1h3c0.552,0,1,0.448,1,1v3 C15,15.552,14.552,16,14,16z"></path><path fill="#2395ec" d="M20,16h-3c-0.552,0-1-0.448-1-1v-3c0-0.552,0.448-1,1-1h3c0.552,0,1,0.448,1,1v3 C21,15.552,20.552,16,20,16z"></path><path fill="#2395ec" d="M26,16h-3c-0.552,0-1-0.448-1-1v-3c0-0.552,0.448-1,1-1h3c0.552,0,1,0.448,1,1v3 C27,15.552,26.552,16,26,16z"></path><path fill="#2395ec" d="M26,10h-3c-0.552,0-1-0.448-1-1V6c0-0.552,0.448-1,1-1h3c0.552,0,1,0.448,1,1v3 C27,9.552,26.552,10,26,10z"></path><path fill="#2395ec" d="M32,22h-3c-0.552,0-1-0.448-1-1v-3c0-0.552,0.448-1,1-1h3c0.552,0,1,0.448,1,1v3 C33,21.552,32.552,22,32,22z"></path>
                                </svg>
                        </div>
                    </div>
                </div>
            </div>
        </main>
        <div class="projects">
            <div class="py-12">
                <div class="max-w-6xl mx-auto px-4 sm:px-6 lg:px-8">
                    <h2 class="text-2xl text-black text-center my-6 font-mono text-lg bg-gradient-to-r from-pink-500 via-red-400 to-orange-600 w-auto">Projects</h2>

                    <div class="mt-8 grid grid-cols-1 sm:grid-cols-2 gap-6">
                      <!-- Certificate/Badge Sharing Project -->
                      <div class="bg-white shadow-lg rounded-lg overflow-hidden">
                        <div class="px-6 py-8 sm:px-10">
                          <h3 class="text-2xl leading-6 font-semibold text-gray-900 mb-4">Certificate/Badge Sharing</h3>
                          <p class="text-lg text-gray-600 mb-6">Single-click sharing on social media platforms like LinkedIn, Twitter X, and Facebook.</p>
                          <div class="border-t border-gray-200 pt-6">
                            <dl>
                              <div class="bg-gray-50 px-4 py-5 sm:grid sm:grid-cols-3 sm:gap-4 sm:px-6">
                                <dt class="text-sm font-medium text-gray-500">Description</dt>
                                <dd class="mt-1 text-sm text-gray-900 sm:mt-0 sm:col-span-2">
                                  Implemented functionality to share certificates and badges with a single click on popular social media platforms, enhancing user engagement and visibility.
                                </dd>
                              </div>
                              <div class="bg-white px-4 py-5 sm:grid sm:grid-cols-3 sm:gap-4 sm:px-6">
                                <dt class="text-sm font-medium text-gray-500">Technologies Used</dt>
                                <dd class="mt-1 text-sm text-gray-900 sm:mt-0 sm:col-span-2">
                                  Tailwind CSS, JavaScript, Social Media APIs
                                </dd>
                              </div>
                              <div class="bg-gray-50 px-4 py-5 sm:grid sm:grid-cols-3 sm:gap-4 sm:px-6">
                                <dt class="text-sm font-medium text-gray-500">Platforms</dt>
                                <dd class="mt-1 text-sm text-gray-900 sm:mt-0 sm:col-span-2">
                                  LinkedIn, Twitter X, Facebook
                                </dd>
                              </div>
                            </dl>
                          </div>
                        </div>
                      </div>
                      <!-- Keka HRMS Integration Project -->
                      <div class="bg-white shadow-lg rounded-lg overflow-hidden">
                        <div class="px-6 py-8 sm:px-10">
                          <h3 class="text-2xl leading-6 font-semibold text-gray-900 mb-4">Keka HRMS Integration</h3>
                          <p class="text-lg text-gray-600 mb-6">Integration using REST API, daily user creation and updation using cron, and goal creation and update.</p>
                          <div class="border-t border-gray-200 pt-6">
                            <dl>
                              <div class="bg-gray-50 px-4 py-5 sm:grid sm:grid-cols-3 sm:gap-4 sm:px-6">
                                <dt class="text-sm font-medium text-gray-500">Description</dt>
                                <dd class="mt-1 text-sm text-gray-900 sm:mt-0 sm:col-span-2">
                                  Developed integration with Keka HRMS to manage daily user creation and updation via cron jobs, along with goal creation and updates.
                                </dd>
                              </div>
                              <div class="bg-white px-4 py-5 sm:grid sm:grid-cols-3 sm:gap-4 sm:px-6">
                                <dt class="text-sm font-medium text-gray-500">Technologies Used</dt>
                                <dd class="mt-1 text-sm text-gray-900 sm:mt-0 sm:col-span-2">
                                  PHP, Moodle, REST API, JavaScript, MySQL, Tailwind CSS, Laravel
                                </dd>
                              </div>
                            </dl>
                          </div>
                        </div>
                      </div>

                      <!-- Okta SCIM Integration Project -->
                      <div class="bg-white shadow-lg rounded-lg overflow-hidden">
                        <div class="px-6 py-8 sm:px-10">
                          <h3 class="text-2xl leading-6 font-semibold text-gray-900 mb-4">Okta SCIM Integration</h3>
                          <p class="text-lg text-gray-600 mb-6">Integration for user provisioning and management using SCIM protocol.</p>
                          <div class="border-t border-gray-200 pt-6">
                            <dl>
                              <div class="bg-gray-50 px-4 py-5 sm:grid sm:grid-cols-3 sm:gap-4 sm:px-6">
                                <dt class="text-sm font-medium text-gray-500">Description</dt>
                                <dd class="mt-1 text-sm text-gray-900 sm:mt-0 sm:col-span-2">
                                  Implemented Okta SCIM integration to streamline user provisioning and management processes.
                                </dd>
                              </div>
                              <div class="bg-white px-4 py-5 sm:grid sm:grid-cols-3 sm:gap-4 sm:px-6">
                                <dt class="text-sm font-medium text-gray-500">Technologies Used</dt>
                                <dd class="mt-1 text-sm text-gray-900 sm:mt-0 sm:col-span-2">
                                  SCIM, Okta, REST API, JavaScript, Tailwind CSS
                                </dd>
                              </div>
                            </dl>
                          </div>
                        </div>
                      </div>

                      <!-- Moodle Mobile App Development Project -->
                        <div class="bg-white shadow-lg rounded-lg overflow-hidden">
                            <div class="px-6 py-8 sm:px-10">
                            <h3 class="text-2xl leading-6 font-semibold text-gray-900 mb-4">Moodle Mobile App Development</h3>
                            <p class="text-lg text-gray-600 mb-6">Developed the elearnPOSH.com app from scratch to release on the Play Store.</p>
                            <div class="border-t border-gray-200 pt-6">
                                <dl>
                                <div class="bg-gray-50 px-4 py-5 sm:grid sm:grid-cols-3 sm:gap-4 sm:px-6">
                                    <dt class="text-sm font-medium text-gray-500">Description</dt>
                                    <dd class="mt-1 text-sm text-gray-900 sm:mt-0 sm:col-span-2">
                                    Led the development of the elearnPOSH.com mobile app, from initial concept to deployment on the Play Store, using Angular, Ionic, PHP, MySQL, and Cordova.
                                    </dd>
                                </div>
                                <div class="bg-white px-4 py-5 sm:grid sm:grid-cols-3 sm:gap-4 sm:px-6">
                                    <dt class="text-sm font-medium text-gray-500">Technologies Used</dt>
                                    <dd class="mt-1 text-sm text-gray-900 sm:mt-0 sm:col-span-2">
                                    Angular, Ionic, PHP, MySQL, Cordova
                                    </dd>
                                </div>
                                </dl>
                            </div>
                            </div>
                        </div>
                    </div>
                  </div>
              </div>
        </div>
    </body>
</html>
