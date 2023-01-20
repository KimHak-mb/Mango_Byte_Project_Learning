<x-master>

        <div id="default-carousel" class="relative bg-gray-300 mt-6 w-6/12 mx-auto px-24 py-6 pt-4" data-carousel="static">
            <!-- Carousel wrapper -->
            <div class="relative h-28 overflow-hidden rounded-lg md:h-96">
                <!-- Item 1 -->
                <a href="{{ url('/newStock') }}">
                    <div class="duration-700 ease-in-out absolute inset-0 transition-all transform translate-x-0 z-20" data-carousel-item="">
                        <span class="absolute text-2xl font-semibold text-white -translate-x-1/2 -translate-y-1/2 top-1/2 left-1/2 sm:text-3xl dark:text-gray-800">First Slide</span>
                        <img src="https://nika2u.com/flutter/uploads/Cover_PC%E2%80%8B1.jpg" class="absolute block w-full -translate-x-1/2 -translate-y-1/2 top-1/2 left-1/2" alt="...">
                    </div>
                </a>
                <!-- Item 2 -->
                <a href="{{ url('/discount') }}">
                    <div class="duration-700 ease-in-out absolute inset-0 transition-all transform translate-x-full z-10" data-carousel-item="">
                        <img src="https://nika2u.com/flutter/uploads/Cover_New_App103.jpg" class="absolute block w-full -translate-x-1/2 -translate-y-1/2 top-1/2 left-1/2" alt="...">
                    </div>
                </a>

            </div>
            <!-- Slider indicators -->
            <div class="absolute z-30 flex space-x-3 -translate-x-1/2 bottom-5 left-1/2">
                <button type="button" class="w-3 h-3 rounded-full bg-white dark:bg-gray-800" aria-current="true" aria-label="Slide 1" data-carousel-slide-to="0"></button>
                <button type="button" class="w-3 h-3 rounded-full bg-white/50 dark:bg-gray-800/50 hover:bg-white dark:hover:bg-gray-800" aria-current="false" aria-label="Slide 2" data-carousel-slide-to="1"></button>
                <button type="button" class="w-3 h-3 rounded-full bg-white/50 dark:bg-gray-800/50 hover:bg-white dark:hover:bg-gray-800" aria-current="false" aria-label="Slide 3" data-carousel-slide-to="2"></button>
            </div>
            <!-- Slider controls -->
            <button type="button" class="absolute top-0 left-0 z-30 flex items-center justify-center h-full px-4 cursor-pointer group focus:outline-none" data-carousel-prev="">
                <span class="inline-flex items-center justify-center w-8 h-8 rounded-full sm:w-10 sm:h-10 bg-white/30 dark:bg-gray-800/30 group-hover:bg-white/50 dark:group-hover:bg-gray-800/60 group-focus:ring-4 group-focus:ring-white dark:group-focus:ring-gray-800/70 group-focus:outline-none">
                    <svg aria-hidden="true" class="w-5 h-5 text-gray-600 sm:w-6 sm:h-6 dark:text-gray-800" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 19l-7-7 7-7"></path></svg>
                    <span class="sr-only">Previous</span>
                </span>
            </button>
            <button type="button" class="absolute top-0 right-0 z-30 flex items-center justify-center h-full px-4 cursor-pointer group focus:outline-none" data-carousel-next="">
                <span class="inline-flex items-center justify-center w-8 h-8 rounded-full sm:w-10 sm:h-10 bg-white/30 dark:bg-gray-800/30 group-hover:bg-white/50 dark:group-hover:bg-gray-800/60 group-focus:ring-4 group-focus:ring-white dark:group-focus:ring-gray-800/70 group-focus:outline-none">
                    <svg aria-hidden="true" class="w-5 h-5 text-gray-600 sm:w-6 sm:h-6 dark:text-gray-800" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"></path></svg>
                    <span class="sr-only">Next</span>
                </span>
            </button>
        </div>

        <h1 class="m-6 text-3xl text-center font-bold">Catagory</h1>





    <div class="flex items-center justify-center w-full h-full py-24 sm:py-8 px-24">
        <div class="w-full relative flex items-center justify-center">
            <button aria-label="slide backward"
                class="absolute z-30 left-0 ml-10 focus:outline-none focus:bg-gray-400 focus:ring-2 focus:ring-offset-2 focus:ring-gray-400 cursor-pointer"
                id="prev">
                <svg class="dark:text-gray-900" width="8" height="14" viewBox="0 0 8 14" fill="none"
                    xmlns="http://www.w3.org/2000/svg">
                    <path d="M7 1L1 7L7 13" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                        stroke-linejoin="round" />
                </svg>
            </button>
            <div class="w-full h-full mx-auto overflow-x-hidden overflow-y-hidden">
                <div id="slider" class="h-full flex lg:gap-8 md:gap-6 gap-14 items-center justify-start transition ease-out duration-700">
                    <div class="flex flex-shrink-0 relative w-full sm:w-auto max-w-xs bg-white rounded-lg shadow-md dark:bg-gray-800 dark:border-gray-700">

                            <img src="https://nika2u.com/flutter/uploads/accessories_icon_24-061.jpg"
                                 alt="black chair and white table" class="object-cover object-center w-full p-10" />
                            <div class="bg-gray-800 bg-opacity-30 absolute w-full h-full p-6">
                                <div class="flex h-full items-end pb-0">
                                    <h5 class="text-xl font-semibold tracking-tight text-white dark:text-white">
                                        <a href="/accessories"> Accessories </a>
                                    </h5>
                                </div>
                            </div>

                    </div>
                    <div
                        class="flex flex-shrink-0 relative w-full sm:w-auto max-w-xs bg-white rounded-lg shadow-md dark:bg-gray-800 dark:border-gray-700">
                        <img src="https://nika2u.com/flutter/uploads/ipad_icon24-061.jpg"
                            alt="black chair and white table" class="object-cover object-center w-full p-10" />
                        <div class="bg-gray-800 bg-opacity-30 absolute w-full h-full p-6">
                            <div class="flex h-full items-end pb-0">
                                <h5 class="text-xl font-semibold tracking-tight text-white dark:text-white">
                                    <a href="/ipadTablet"> Ipad / Tabled </a>
                                </h5>
                            </div>
                        </div>
                    </div>
                    <div
                        class="flex flex-shrink-0 relative w-full sm:w-auto max-w-xs bg-white rounded-lg shadow-md dark:bg-gray-800 dark:border-gray-700">
                        <img src="https://nika2u.com/flutter/uploads/laptop_icon24-061.jpg"
                            alt="black chair and white table" class="object-cover object-center w-full p-10" />
                        <div class="bg-gray-800 bg-opacity-30 absolute w-full h-full p-6">
                            <div class="flex h-full items-end pb-0">
                                <h5 class="text-xl font-semibold tracking-tight text-white dark:text-white">
                                    <a href="/laptop">Laptop</a>
                                </h5>
                            </div>
                        </div>
                    </div>
                    <div
                        class="flex flex-shrink-0 relative w-full sm:w-auto max-w-xs bg-white rounded-lg shadow-md dark:bg-gray-800 dark:border-gray-700">
                        <img src="https://nika2u.com/flutter/uploads/smart_watch_icon24-06-221.jpg"
                            alt="black chair and white table" class="object-cover object-center w-full p-10" />
                        <div class="bg-gray-800 bg-opacity-30 absolute w-full h-full p-6">
                            <div class="flex h-full items-end pb-0">
                                <h5 class="text-xl font-semibold tracking-tight text-white dark:text-white">
                                    <a href="/smartWatch">Smart Watch</a>
                                </h5>
                            </div>
                        </div>
                    </div>
                    <div
                        class="flex flex-shrink-0 relative w-full sm:w-auto max-w-xs bg-white rounded-lg shadow-md dark:bg-gray-800 dark:border-gray-700">
                        <img src="https://nika2u.com/flutter/uploads/watch_5pro.jpg" alt="black chair and white table"
                            class="object-cover object-center w-full p-10" />
                        <div class="bg-gray-800 bg-opacity-30 absolute w-full h-full p-6">
                            <div class="flex h-full items-end pb-0">
                                <h5 class="text-xl font-semibold tracking-tight text-white dark:text-white">
                                    <a href="#">K-Mall SAMSUNG GALAXY</a>
                                </h5>
                            </div>
                        </div>
                    </div>
                    <div
                        class="flex flex-shrink-0 relative w-full sm:w-auto max-w-xs bg-white rounded-lg shadow-md dark:bg-gray-800 dark:border-gray-700">
                        <img src="https://nika2u.com/flutter/uploads/SM-R860NZKAASA.jpg"
                            alt="black chair and white table" class="object-cover object-center w-full p-10" />
                        <div class="bg-gray-800 bg-opacity-30 absolute w-full h-full p-6">
                            <div class="flex h-full items-end pb-0">
                                <h5 class="text-xl font-semibold tracking-tight text-white dark:text-white">
                                    <a href="#">Galaxy Watch4 BT 40</a>
                                </h5>
                            </div>
                        </div>
                    </div>
                    <div
                        class="flex flex-shrink-0 relative w-full sm:w-auto max-w-xs bg-white rounded-lg shadow-md dark:bg-gray-800 dark:border-gray-700">
                        <img src="https://nika2u.com/flutter/uploads/SM-R860NZKAASA.jpg"
                            alt="black chair and white table" class="object-cover object-center w-full p-10" />
                        <div class="bg-gray-800 bg-opacity-30 absolute w-full h-full p-6">
                            <div class="flex h-full items-end pb-0">
                                <h5 class="text-xl font-semibold tracking-tight text-white dark:text-white">
                                    <a href="#">Galaxy Watch4 BT 40</a>
                                </h5>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <button aria-label="slide forward"
                class="absolute z-30 right-0 mr-10 focus:outline-none focus:bg-gray-400 focus:ring-2 focus:ring-offset-2 focus:ring-gray-400"
                id="next">
                <svg class="dark:text-gray-900" width="8" height="14" viewBox="0 0 8 14" fill="none"
                    xmlns="http://www.w3.org/2000/svg">
                    <path d="M1 1L7 7L1 13" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                        stroke-linejoin="round" />
                </svg>
            </button>
        </div>
    </div>







</x-master>
