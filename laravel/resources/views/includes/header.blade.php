<div
    class="bg-green-500"
>
    <div
        x-data="{ open: false }"
        class="w-full text-gray-700 container mx-auto">
        <div class="flex flex-col max-w-screen-xl mx-auto md:items-center md:justify-between md:flex-row py-4 px-4 lg:px-0">
            <div class="flex flex-row items-center justify-between">
                <div class="relative">
                    <a
                        href="#"
                        class="text-lg relative z-50 font-bold tracking-widest text-gray-900 rounded-lg focus:outline-none focus:shadow-outline"
                    >
                        Website Turtle
                    </a>
                    <svg
                        class="h-11 z-40 absolute -top-2 -left-9"
                        fill="#ffffff"
                        width="40px"
                        height="40px"
                        viewBox="0 0 56 56"
                        xmlns="http://www.w3.org/2000/svg"
                        style="top: -7px; left: -22px; height: 40px; width: 40px;"
                    >
                        <path d="M 7.5860 42.9414 L 23.8516 52.1758 C 26.6407 53.7695 29.3126 53.7930 32.1485 52.1758 L 48.4141 42.9414 C 50.5938 41.6992 51.7890 40.4336 51.7890 37.0352 L 51.7890 18.8008 C 51.7890 15.4961 50.5703 14.3008 48.5783 13.1523 L 32.2657 3.8711 C 29.3595 2.2070 26.5704 2.2305 23.7344 3.8711 L 7.4219 13.1523 C 5.4297 14.3008 4.2110 15.4961 4.2110 18.8008 L 4.2110 37.0352 C 4.2110 40.4336 5.4063 41.6992 7.5860 42.9414 Z"/>
                    </svg>
{{--                    <svg--}}
{{--                        class="h-11 z-40 absolute -top-2 -left-3"--}}
{{--                        viewBox="0 0 79 79"--}}
{{--                        fill="none"--}}
{{--                        xmlns="http://www.w3.org/2000/svg">--}}
{{--                        <path--}}
{{--                            d="M35.2574 2.24264C37.6005 -0.100501 41.3995 -0.100505 43.7426 2.24264L76.7574 35.2574C79.1005 37.6005 79.1005 41.3995 76.7574 43.7426L43.7426 76.7574C41.3995 79.1005 37.6005 79.1005 35.2574 76.7574L2.24264 43.7426C-0.100501 41.3995 -0.100505 37.6005 2.24264 35.2574L35.2574 2.24264Z"--}}
{{--                            fill="#FFFFFF"/>--}}
{{--                    </svg>--}}
                </div>
                <button
                    class="rounded-lg md:hidden focus:outline-none focus:shadow-outline"
                    @click="open = !open">
                    <svg
                        fill="currentColor"
                        viewBox="0 0 20 20"
                        class="w-6 h-6">
                        <path
                            x-show="!open"
                            fill-rule="evenodd"
                            d="M3 5a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1zM3 10a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1zM9 15a1 1 0 011-1h6a1 1 0 110 2h-6a1 1 0 01-1-1z"
                            clip-rule="evenodd"></path>
                        <path
                            x-show="open"
                            fill-rule="evenodd"
                            d="M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z"
                            clip-rule="evenodd"></path>
                    </svg>
                </button>
            </div>
            <nav
                :class="{ 'h-0 hidden': !open, 'block h-full': open }"
                class="md:h-auto flex flex-col flex-grow md:items-center pb-4 md:pb-0 md:flex md:justify-end md:flex-row origin-top duration-300">
                <a
                    class="px-4 py-2 mt-2 text-sm bg-transparent rounded-lg text-white focus:outline-none focus:shadow-outline"
                    href="/">Home</a>
                <a
                    class="px-10 py-3 text-sm text-center bg-gray-800 text-white rounded-full md:ml-4"
                    href="/#request">Website Support</a>
            </nav>
        </div>
    </div>

</div>
