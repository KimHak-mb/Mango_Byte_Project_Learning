<x-master>

    <h1 class="m-16 text-3xl font-bold">Accessories</h1>

    <div class="m-4 flex justify-center flex-wrap">
        @foreach ($data as $item)
            <form action="updateDelete" method="get">
                <div class="w-full max-w-xs bg-white rounded-lg shadow-md dark:bg-gray-800 dark:border-gray-700 m-4">
                    <div class="flex m-2 justify-end md:order-2">
                        <button type="button" id="user-menu-button" aria-expanded="false"
                            data-dropdown-toggle="action-dropdown" data-dropdown-placement="bottom">

                            <img class="w-5 h-5 rounded-full"
                                src="https://cdn-icons-png.flaticon.com/512/7881/7881805.png" alt="user photo">
                        </button>
                        <!-- Dropdown menu -->
                        <div class="hidden z-50 my-4 text-base list-none bg-white rounded divide-y divide-gray-100 shadow dark:bg-gray-700 dark:divide-gray-600"
                            id="action-dropdown" data-popper-reference-hidden="" data-popper-escaped=""
                            data-popper-placement="bottom"
                            style="position: absolute; inset: 0px auto auto 0px; margin: 0px; transform: translate(0px, 10px);">

                            <ul class="py-1" aria-labelledby="user-menu-button">
                                <li data-modal-toggle="authentication-edit-modal"
                                    class="cursor-pointer block py-2 px-4 text-sm text-gray-700 hover:bg-gray-100 dark:hover:bg-gray-600 dark:text-gray-200 dark:hover:text-white">

                                    <input type="submit" class="btn btn-outline-primary" name="update" value="Update">

                                </li>
                                <li
                                    class="cursor-pointer block py-2 px-4 text-sm text-gray-700 hover:bg-gray-100 dark:hover:bg-gray-600 dark:text-gray-200 dark:hover:text-white">
                                    <input type="submit" class="btn btn-outline-primary" value="Delete">
                                </li>
                            </ul>
                        </div>
                        <!-- edit Main modal -->
                        <div id="authentication-edit-modal" tabindex="-1" aria-hidden="true"
                            class="hidden overflow-y-auto overflow-x-hidden fixed top-0 right-0 left-0 z-50 w-full md:inset-0 h-modal md:h-full justify-center items-center">
                            <div class="relative p-4 w-full max-w-md h-full md:h-auto">
                                <!-- Modal content -->
                                <div class="relative bg-white rounded-lg shadow dark:bg-gray-700">
                                    <button type="button"
                                        class="absolute top-3 right-2.5 text-gray-400 bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm p-1.5 ml-auto inline-flex items-center dark:hover:bg-gray-800 dark:hover:text-white"
                                        data-modal-toggle="authentication-edit-modal">
                                        <svg aria-hidden="true" class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20"
                                            xmlns="http://www.w3.org/2000/svg">
                                            <path fill-rule="evenodd"
                                                d="M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z"
                                                clip-rule="evenodd"></path>
                                        </svg>
                                        <span class="sr-only">Close modal</span>
                                    </button>
                                    <div class="py-6 px-6 lg:px-8">
                                        <h3 class="mb-4 text-xl font-medium text-gray-900 dark:text-white">Edit
                                            accessories
                                        </h3>
                                        {{-- <form class="space-y-6"  action="{{ route('updateAccessory', $item['id']) }}" method="POST"> --}}
                                        {{-- <form class="space-y-6"  action="updateAccessory" method="POST"> --}}
                                        @scrf
                                        @method('PATCH')
                                        <div>
                                            <label for="name"
                                                class="block mb-2 text-sm font-medium text-gray-900 dark:text-gray-300">Accessories
                                                Name</label>
                                            <input type="name" name="name" id="name"
                                                value="{{ $item['name'] }}"
                                                class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white"
                                                placeholder="Accessories Name" required="" wire:model="name">
                                        </div>
                                        <div>

                                            <label
                                                class="block mb-2 text-sm font-medium text-gray-900 dark:text-gray-300"
                                                for="small_size">Accessories Image</label>
                                            <input type="file" value="{{ $item['image'] }}" name='image'
                                                id=''
                                                class="block mb-5 w-full text-xs text-gray-900 bg-gray-50 rounded-lg border border-gray-300 cursor-pointer dark:text-gray-400 focus:outline-none dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400"
                                                id="small_size" type="file">


                                        </div>
                                        <button type="submit"
                                            class="w-full text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">
                                            Submit</button>
            </form>
    </div>
    </div>
    </div>
    </div>
    <button data-collapse-toggle="mobile-menu-2" type="button"
        class="inline-flex items-center p-2 ml-1 text-sm text-gray-500 rounded-lg md:hidden hover:bg-gray-100 focus:outline-none focus:ring-2 focus:ring-gray-200 dark:text-gray-400 dark:hover:bg-gray-700 dark:focus:ring-gray-600"
        aria-controls="mobile-menu-2" aria-expanded="false">
        <span class="sr-only">Open main menu</span>
        <svg class="w-6 h-6" aria-hidden="true" fill="currentColor" viewBox="0 0 20 20"
            xmlns="http://www.w3.org/2000/svg">
            <path fill-rule="evenodd"
                d="M3 5a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1zM3 10a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1zM3 15a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1z"
                clip-rule="evenodd"></path>
        </svg>
    </button>
    </div>

    <img class="p-8 rounded-t-lg" src="images/{{ $item['accessoryImage'] }}" alt="product image">
    <div class="px-5 pb-5">
        <h5 class="text-xl font-semibold tracking-tight text-gray-900 dark:text-white">
            <input type="hidden" name="name" value="{{ $item['name'] }}">{{ $item['name'] }}
            <input type="hidden" name="id" value="{{ $item['Id'] }}">{{ $item['Id'] }}
        </h5>
    </div>
    </div>
    </form>
    @endforeach

    <!-- Modal toggle -->
    <button data-modal-toggle="authentication-add-modal">
        <div class="w-full max-w-xs bg-blue-200 rounded-lg shadow-md dark:bg-gray-800 dark:border-gray-700 m-4 px-24">
            <div class="flex justify-center items-center py-32">
                <img class="p-0 rounded-t-lg" src="https://cdn-icons-png.flaticon.com/128/8377/8377219.png"
                    alt="product image">
            </div>
        </div>
    </button>

    <!-- Main modal -->
    <div id="authentication-add-modal" tabindex="-1" aria-hidden="true"
        class="hidden overflow-y-auto overflow-x-hidden fixed top-0 right-0 left-0 z-50 w-full md:inset-0 h-modal md:h-full justify-center items-center">
        <div class="relative p-4 w-full max-w-md h-full md:h-auto">
            <!-- Modal content -->
            <div class="relative bg-white rounded-lg shadow dark:bg-gray-700">
                <button type="button"
                    class="absolute top-3 right-2.5 text-gray-400 bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm p-1.5 ml-auto inline-flex items-center dark:hover:bg-gray-800 dark:hover:text-white"
                    data-modal-toggle="authentication-add-modal">
                    <svg aria-hidden="true" class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20"
                        xmlns="http://www.w3.org/2000/svg">
                        <path fill-rule="evenodd"
                            d="M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z"
                            clip-rule="evenodd"></path>
                    </svg>
                    <span class="sr-only">Close modal</span>
                </button>
                <div class="py-6 px-6 lg:px-8">
                    <h3 class="mb-4 text-xl font-medium text-gray-900 dark:text-white">Add new accessories</h3>
                    <form class="space-y-6" action="insertAccessory" method="POST" enctype="multipart/form-data">
                        @csrf
                        <div>
                            <label for="name"
                                class="block mb-2 text-sm font-medium text-gray-900 dark:text-gray-300">Accessories
                                Name</label>
                            <input type="name" name="name" id="name"
                                class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white"
                                placeholder="Accessories Name" required="">
                        </div>

                        <label class="block mb-2 text-sm font-medium text-gray-900 dark:text-gray-300"
                            for="small_size">Accessories Image</label>
                        <input type="file" name='image' id=''
                            class="block mb-5 w-full text-xs text-gray-900 bg-gray-50 rounded-lg border border-gray-300 cursor-pointer dark:text-gray-400 focus:outline-none dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400"
                            id="small_size" type="file">

                        <button type="submit"
                            class="w-full text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">
                            Add accessories product
                        </button>
                    </form>
                </div>
            </div>
        </div>
    </div>

    </div>


    <h1 class="m-16 text-3xl font-bold">iPad/Tablet</h1>
    <div class="m-4 flex justify-center flex-wrap">
        <div class="w-full max-w-xs bg-white rounded-lg shadow-md dark:bg-gray-800 dark:border-gray-700 m-4">
            <div class="flex m-2 justify-end md:order-2">
                <button type="button" id="user-menu-button" aria-expanded="false"
                    data-dropdown-toggle="action-dropdown" data-dropdown-placement="bottom">

                    <img class="w-5 h-5 rounded-full" src="https://cdn-icons-png.flaticon.com/512/7881/7881805.png"
                        alt="user photo">
                </button>
                <!-- Dropdown menu -->
                <div class="hidden z-50 my-4 text-base list-none bg-white rounded divide-y divide-gray-100 shadow dark:bg-gray-700 dark:divide-gray-600"
                    id="action-dropdown" data-popper-reference-hidden="" data-popper-escaped=""
                    data-popper-placement="bottom"
                    style="position: absolute; inset: 0px auto auto 0px; margin: 0px; transform: translate(0px, 10px);">

                    <ul class="py-1" aria-labelledby="user-menu-button">
                        <li
                            class="block py-2 px-4 text-sm text-gray-700 hover:bg-gray-100 dark:hover:bg-gray-600 dark:text-gray-200 dark:hover:text-white">
                            Edit
                        </li>
                        <li
                            class="block py-2 px-4 text-sm text-gray-700 hover:bg-gray-100 dark:hover:bg-gray-600 dark:text-gray-200 dark:hover:text-white">
                            Delete
                        </li>
                    </ul>
                </div>
                <button data-collapse-toggle="mobile-menu-2" type="button"
                    class="inline-flex items-center p-2 ml-1 text-sm text-gray-500 rounded-lg md:hidden hover:bg-gray-100 focus:outline-none focus:ring-2 focus:ring-gray-200 dark:text-gray-400 dark:hover:bg-gray-700 dark:focus:ring-gray-600"
                    aria-controls="mobile-menu-2" aria-expanded="false">
                    <span class="sr-only">Open main menu</span>
                    <svg class="w-6 h-6" aria-hidden="true" fill="currentColor" viewBox="0 0 20 20"
                        xmlns="http://www.w3.org/2000/svg">
                        <path fill-rule="evenodd"
                            d="M3 5a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1zM3 10a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1zM3 15a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1z"
                            clip-rule="evenodd"></path>
                    </svg>
                </button>
            </div>
            <img class="p-8 rounded-t-lg" src="https://nika2u.com/flutter/uploads/tab_s8_series2.jpg"
                alt="product image">
            <div class="px-5 pb-5">
                <h5 class="text-xl font-semibold tracking-tight text-gray-900 dark:text-white">HUAWEI MatePad Pro</h5>
            </div>
        </div>
        <div class="w-full max-w-xs bg-blue-200 rounded-lg shadow-md dark:bg-gray-800 dark:border-gray-700 m-4">
            <div class="flex justify-center py-32">
                <img class="p-0 rounded-t-lg" src="https://cdn-icons-png.flaticon.com/128/8377/8377219.png"
                    alt="product image">
            </div>
        </div>
    </div>

    <h1 class="m-16 text-3xl font-bold">Laptop</h1>
    <div class="m-4 flex justify-center flex-wrap">

        <div class="w-full max-w-xs bg-white rounded-lg shadow-md dark:bg-gray-800 dark:border-gray-700 m-4">
            <div class="flex m-2 justify-end md:order-2">
                <button type="button" id="user-menu-button" aria-expanded="false"
                    data-dropdown-toggle="action-dropdown" data-dropdown-placement="bottom">

                    <img class="w-5 h-5 rounded-full" src="https://cdn-icons-png.flaticon.com/512/7881/7881805.png"
                        alt="user photo">
                </button>
                <!-- Dropdown menu -->
                <div class="hidden z-50 my-4 text-base list-none bg-white rounded divide-y divide-gray-100 shadow dark:bg-gray-700 dark:divide-gray-600"
                    id="action-dropdown" data-popper-reference-hidden="" data-popper-escaped=""
                    data-popper-placement="bottom"
                    style="position: absolute; inset: 0px auto auto 0px; margin: 0px; transform: translate(0px, 10px);">

                    <ul class="py-1" aria-labelledby="user-menu-button">
                        <li>
                            <a href="profile"
                                class="block py-2 px-4 text-sm text-gray-700 hover:bg-gray-100 dark:hover:bg-gray-600 dark:text-gray-200 dark:hover:text-white">Edit</a>
                        </li>
                        <li>
                            <a href="#"
                                class="block py-2 px-4 text-sm text-gray-700 hover:bg-gray-100 dark:hover:bg-gray-600 dark:text-gray-200 dark:hover:text-white">Delete</a>
                        </li>
                    </ul>
                </div>
                <button data-collapse-toggle="mobile-menu-2" type="button"
                    class="inline-flex items-center p-2 ml-1 text-sm text-gray-500 rounded-lg md:hidden hover:bg-gray-100 focus:outline-none focus:ring-2 focus:ring-gray-200 dark:text-gray-400 dark:hover:bg-gray-700 dark:focus:ring-gray-600"
                    aria-controls="mobile-menu-2" aria-expanded="false">
                    <span class="sr-only">Open main menu</span>
                    <svg class="w-6 h-6" aria-hidden="true" fill="currentColor" viewBox="0 0 20 20"
                        xmlns="http://www.w3.org/2000/svg">
                        <path fill-rule="evenodd"
                            d="M3 5a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1zM3 10a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1zM3 15a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1z"
                            clip-rule="evenodd"></path>
                    </svg>
                </button>
            </div>
            <a href="#">
                <img class="p-8 rounded-t-lg" src="https://nika2u.com/flutter/uploads/Victusvvv.png"
                    alt="product image">
            </a>
            <div class="px-5 pb-5">
                <h5 class="text-xl font-semibold tracking-tight text-gray-900 dark:text-white">HP Viictus</h5>
            </div>
        </div>
        <div class="w-full max-w-xs bg-blue-200 rounded-lg shadow-md dark:bg-gray-800 dark:border-gray-700 m-4">
            <div class="flex justify-center py-32">
                <img class="p-0 rounded-t-lg" src="https://cdn-icons-png.flaticon.com/128/8377/8377219.png"
                    alt="product image">
            </div>
        </div>
    </div>


    <h1 class="m-16 text-3xl font-bold">Smart Watch</h1>
    <div class="m-4 flex justify-center flex-wrap">
        <div class="w-full max-w-xs bg-white rounded-lg shadow-md dark:bg-gray-800 dark:border-gray-700 m-4">
            <div class="flex m-2 justify-end md:order-2">
                <button type="button" id="user-menu-button" aria-expanded="false"
                    data-dropdown-toggle="action-dropdown" data-dropdown-placement="bottom">

                    <img class="w-5 h-5 rounded-full" src="https://cdn-icons-png.flaticon.com/512/7881/7881805.png"
                        alt="user photo">
                </button>
                <!-- Dropdown menu -->
                <div class="hidden z-50 my-4 text-base list-none bg-white rounded divide-y divide-gray-100 shadow dark:bg-gray-700 dark:divide-gray-600"
                    id="action-dropdown" data-popper-reference-hidden="" data-popper-escaped=""
                    data-popper-placement="bottom"
                    style="position: absolute; inset: 0px auto auto 0px; margin: 0px; transform: translate(0px, 10px);">

                    <ul class="py-1" aria-labelledby="user-menu-button">
                        <li>
                            <a href="profile"
                                class="block py-2 px-4 text-sm text-gray-700 hover:bg-gray-100 dark:hover:bg-gray-600 dark:text-gray-200 dark:hover:text-white">Edit</a>
                        </li>
                        <li>
                            <a href="#"
                                class="block py-2 px-4 text-sm text-gray-700 hover:bg-gray-100 dark:hover:bg-gray-600 dark:text-gray-200 dark:hover:text-white">Delete</a>
                        </li>
                    </ul>
                </div>
                <button data-collapse-toggle="mobile-menu-2" type="button"
                    class="inline-flex items-center p-2 ml-1 text-sm text-gray-500 rounded-lg md:hidden hover:bg-gray-100 focus:outline-none focus:ring-2 focus:ring-gray-200 dark:text-gray-400 dark:hover:bg-gray-700 dark:focus:ring-gray-600"
                    aria-controls="mobile-menu-2" aria-expanded="false">
                    <span class="sr-only">Open main menu</span>
                    <svg class="w-6 h-6" aria-hidden="true" fill="currentColor" viewBox="0 0 20 20"
                        xmlns="http://www.w3.org/2000/svg">
                        <path fill-rule="evenodd"
                            d="M3 5a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1zM3 10a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1zM3 15a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1z"
                            clip-rule="evenodd"></path>
                    </svg>
                </button>
            </div>
            <a href="#">
                <img class="p-0 rounded-t-lg" src="https://nika2u.com/flutter/uploads/SM-R860NZDAASA.jpg"
                    alt="product image">
            </a>
            <div class="px-5 pb-5">
                <h5 class="text-xl font-semibold tracking-tight text-gray-900 dark:text-white">S Galaxy Watch4 BT 40
                </h5>
            </div>
        </div>
        <div class="w-full max-w-xs bg-blue-200 rounded-lg shadow-md dark:bg-gray-800 dark:border-gray-700 m-4">
            <div class="flex justify-center py-32">
                <img class="p-0 rounded-t-lg" src="https://cdn-icons-png.flaticon.com/128/8377/8377219.png"
                    alt="product image">
            </div>
        </div>
    </div>







</x-master>
