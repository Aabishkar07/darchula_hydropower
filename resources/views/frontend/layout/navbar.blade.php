@php
    $services = getServices();
    $setting = getSetting();

@endphp

<header class='flex border-b bg-white font-sans min-h-[70px] tracking-wide relative z-50'>
    <div class='flex flex-wrap items-center justify-between sm:px-10 px-4 py-3 gap-4 w-full max-w-screen-2xl mx-auto'>
        <a href="{{ route('home') }}"><img src="{{ asset('images/darchulspowerlogo.png') }}" alt="logo"
                class='w-16' />
        </a>

        {{-- <h1 class="text-xl">Darchula Hydropower </h1> --}}
        <div id="collapseMenu"
            class='max-lg:hidden lg:!block max-lg:before:fixed max-lg:before:bg-black max-lg:before:opacity-50 max-lg:before:inset-0 max-lg:before:z-50'>
            <button id="toggleClose"
                class='lg:hidden fixed top-2 right-4 z-[100] rounded-full bg-white w-9 h-9 flex items-center justify-center border'>
                <svg xmlns="http://www.w3.org/2000/svg" class="w-3.5 h-3.5 fill-black" viewBox="0 0 320.591 320.591">
                    <path
                        d="M30.391 318.583a30.37 30.37 0 0 1-21.56-7.288c-11.774-11.844-11.774-30.973 0-42.817L266.643 10.665c12.246-11.459 31.462-10.822 42.921 1.424 10.362 11.074 10.966 28.095 1.414 39.875L51.647 311.295a30.366 30.366 0 0 1-21.256 7.288z"
                        data-original="#000000"></path>
                    <path
                        d="M287.9 318.583a30.37 30.37 0 0 1-21.257-8.806L8.83 51.963C-2.078 39.225-.595 20.055 12.143 9.146c11.369-9.736 28.136-9.736 39.504 0l259.331 257.813c12.243 11.462 12.876 30.679 1.414 42.922-.456.487-.927.958-1.414 1.414a30.368 30.368 0 0 1-23.078 7.288z"
                        data-original="#000000"></path>
                </svg>
            </button>

            <ul
                class='lg:flex  lg:gap-x-10 max-lg:space-y-3 max-lg:fixed max-lg:bg-white max-lg:w-1/2 max-lg:min-w-[300px] max-lg:top-0 max-lg:left-0 max-lg:p-6 max-lg:h-full max-lg:shadow-md max-lg:overflow-auto z-50'>
                <li class='mb-6 hidden max-lg:block'>
                    <a href="javascript:void(0)">
                        {{-- <img src="https://readymadeui.com/readymadeui.svg" alt="logo" class='w-36' /> --}}
                        Darchula Hydropower
                    </a>
                </li>
                <li class="max-lg:border-b max-lg:py-3">
                    <a href="{{ route('home') }}"
                        class="{{ request()->routeIs('home') ? 'text-[#008d9b] font-bold' : 'text-gray-600 hover:text-[#008d9b] text-[15px] font-bold block' }}">
                        Home
                    </a>
                </li>
                <li class="max-lg:border-b max-lg:py-3">
                    <a href="{{ route('about') }}"
                        class="{{ request()->routeIs('about') ? 'text-[#008d9b] font-bold' : 'text-gray-600 hover:text-[#008d9b] text-[15px] font-bold block' }}">
                        About
                    </a>
                </li>


                {{-- <li class='group max-lg:border-b max-lg:py-3 relative'>
                    <a href=""
                        class='hover:text-[#008d9b] text-gray-600 text-[15px] font-bold lg:hover:fill-[#008d9b] block'>Projects<svg
                            xmlns="http://www.w3.org/2000/svg" width="16px" height="16px" class="ml-1 inline-block"
                            viewBox="0 0 24 24">
                            <path
                                d="M12 16a1 1 0 0 1-.71-.29l-6-6a1 1 0 0 1 1.42-1.42l5.29 5.3 5.29-5.29a1 1 0 0 1 1.41 1.41l-6 6a1 1 0 0 1-.7.29z"
                                data-name="16" data-original="#000000" />
                        </svg>
                    </a>
                    <ul
                        class='absolute shadow-lg bg-white space-y-3 lg:top-5 max-lg:top-8 -left-6 min-w-[250px] z-50 max-h-0 overflow-hidden group-hover:opacity-100 group-hover:max-h-[700px] px-6 group-hover:pb-4 group-hover:pt-6 transition-all duration-500'>
                        @foreach ($services as $key => $service)
                            <li class='border-b py-2 '><a href='{{ route('servicesingle', $service->slug) }}'
                                    class='hover:text-[#008d9b] text-gray-600 text-[15px] font-bold block'>
                                    {{ $service->title }}</a></li>
                        @endforeach
                    </ul>
                </li> --}}
                <li class='group max-lg:border-b max-lg:py-3 relative'>
                    <a href=""
                        class='hover:text-[#008d9b] text-gray-600 text-[15px] font-bold lg:hover:fill-[#008d9b] block'>Reports<svg
                            xmlns="http://www.w3.org/2000/svg" width="16px" height="16px" class="ml-1 inline-block"
                            viewBox="0 0 24 24">
                            <path
                                d="M12 16a1 1 0 0 1-.71-.29l-6-6a1 1 0 0 1 1.42-1.42l5.29 5.3 5.29-5.29a1 1 0 0 1 1.41 1.41l-6 6a1 1 0 0 1-.7.29z"
                                data-name="16" data-original="#000000" />
                        </svg>
                    </a>
                    <ul
                        class='absolute shadow-lg bg-white space-y-3 lg:top-5 max-lg:top-8 -left-6 min-w-[250px] z-50 max-h-0 overflow-hidden group-hover:opacity-100 group-hover:max-h-[700px] px-6 group-hover:pb-4 group-hover:pt-6 transition-all duration-500'>
                        <li class='border-b py-2 '><a href='{{ route('financialreport') }}'
                                class='hover:text-[#008d9b] text-gray-600 text-[15px] font-bold block'> Financial
                                Reports</a></li>
                        <li class='border-b py-2 '>
                            <a href='{{ route('newsandnotice') }}'
                                class='hover:text-[#008d9b] text-gray-600 text-[15px] font-bold block'> News & Notice
                            </a>
                        </li>

                    </ul>
                </li>
                <li class="max-lg:border-b max-lg:py-3">
                    <a href="{{ route('allgallery') }}"
                        class="{{ request()->routeIs('allgallery') ? 'text-[#008d9b] font-bold' : 'text-gray-600 hover:text-[#008d9b] text-[15px] font-bold block' }}">
                        Gallery
                    </a>
                </li>
                <li class="max-lg:border-b max-lg:py-3">
                    <a href="{{ route('teams') }}"
                        class="{{ request()->routeIs('teams') ? 'text-[#008d9b] font-bold' : 'text-gray-600 hover:text-[#008d9b] text-[15px] font-bold block' }}">
                        Our Team
                    </a>
                </li>

                <li class="max-lg:border-b max-lg:py-3">
                    <a href="{{ route('allblogs') }}"
                        class="{{ request()->routeIs('allblogs') ? 'text-[#008d9b] font-bold' : 'text-gray-600 hover:text-[#008d9b] text-[15px] font-bold block' }}">
                        Blogs
                    </a>
                </li>

                <li class="max-lg:border-b max-lg:py-3">
                    <a href="{{ route('videos') }}"
                        class="{{ request()->routeIs('videos') ? 'text-[#008d9b] font-bold' : 'text-gray-600 hover:text-[#008d9b] text-[15px] font-bold block' }}">
                        Video
                    </a>
                </li>

                <li class="max-lg:border-b max-lg:py-3">
                    <a href="{{ route('contact') }}"
                        class="{{ request()->routeIs('contact') ? 'text-[#008d9b] font-bold' : 'text-gray-600 hover:text-[#008d9b] text-[15px] font-bold block' }}">
                        Contact
                    </a>
                </li>

            </ul>
        </div>

        <div class='flex items-center space-x-8 max-lg:ml-auto'>



            <div class="flex space-x-6">
                <a target="_blank" href="{{ $setting->youtube }}">
                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="red"
                        stroke-linecap="round" stroke-linejoin="round" width="22" height="22" stroke-width="2">
                        <path d="M2 8a4 4 0 0 1 4 -4h12a4 4 0 0 1 4 4v8a4 4 0 0 1 -4 4h-12a4 4 0 0 1 -4 -4v-8z"></path>
                        <path d="M10 9l5 3l-5 3z"></path>
                    </svg>
                </a>

                <a target="_blank" href="{{ $setting->facebook }}">

                    <svg xmlns="http://www.w3.org/2000/svg" width="20px" class="cursor-pointer" viewBox="0 0 512 512">
                        <path fill="#1877f2"
                            d="M512 256c0 127.78-93.62 233.69-216 252.89V330h59.65L367 256h-71v-48.02c0-20.25 9.92-39.98 41.72-39.98H370v-63s-29.3-5-57.31-5c-58.47 0-96.69 35.44-96.69 99.6V256h-65v74h65v178.89C93.62 489.69 0 383.78 0 256 0 114.62 114.62 0 256 0s256 114.62 256 256z"
                            data-original="#1877f2" />
                        <path fill="#fff"
                            d="M355.65 330 367 256h-71v-48.021c0-20.245 9.918-39.979 41.719-39.979H370v-63s-29.296-5-57.305-5C254.219 100 216 135.44 216 199.6V256h-65v74h65v178.889c13.034 2.045 26.392 3.111 40 3.111s26.966-1.066 40-3.111V330z"
                            data-original="#ffffff" />
                    </svg>
                </a>

                <a target="_blank" href="{{ $setting->instagram }}">

                    <svg xmlns="http://www.w3.org/2000/svg" width="20px" class="cursor-pointer" viewBox="0 0 24 24">
                        <linearGradient id="a" x1="-37.106" x2="-26.555" y1="-72.705" y2="-84.047"
                            gradientTransform="matrix(0 -1.98 -1.84 0 -132.522 -51.077)"
                            gradientUnits="userSpaceOnUse">
                            <stop offset="0" stop-color="#fd5" />
                            <stop offset=".5" stop-color="#ff543e" />
                            <stop offset="1" stop-color="#c837ab" />
                        </linearGradient>
                        <path fill="url(#a)"
                            d="M1.5 1.633C-.386 3.592 0 5.673 0 11.995c0 5.25-.916 10.513 3.878 11.752 1.497.385 14.761.385 16.256-.002 1.996-.515 3.62-2.134 3.842-4.957.031-.394.031-13.185-.001-13.587-.236-3.007-2.087-4.74-4.526-5.091C18.89.029 18.778.005 15.91 0 5.737.005 3.507-.448 1.5 1.633z"
                            data-original="url(#a)" />
                        <path fill="#fff"
                            d="M11.998 3.139c-3.631 0-7.079-.323-8.396 3.057-.544 1.396-.465 3.209-.465 5.805 0 2.278-.073 4.419.465 5.804 1.314 3.382 4.79 3.058 8.394 3.058 3.477 0 7.062.362 8.395-3.058.545-1.41.465-3.196.465-5.804 0-3.462.191-5.697-1.488-7.375-1.7-1.7-3.999-1.487-7.374-1.487zm-.794 1.597c7.574-.012 8.538-.854 8.006 10.843-.189 4.137-3.339 3.683-7.211 3.683-7.06 0-7.263-.202-7.263-7.265 0-7.145.56-7.257 6.468-7.263zm5.524 1.471a1.063 1.063 0 1 0 0 2.126 1.063 1.063 0 0 0 0-2.126zm-4.73 1.243a4.55 4.55 0 1 0 .001 9.101 4.55 4.55 0 0 0-.001-9.101zm0 1.597c3.905 0 3.91 5.908 0 5.908-3.904 0-3.91-5.908 0-5.908z"
                            data-original="#ffffff" />
                    </svg>
                </a>
            </div>


            <button id="toggleOpen" class='lg:hidden'>
                <svg class="w-7 h-7" fill="#000" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                    <path fill-rule="evenodd"
                        d="M3 5a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1zM3 10a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1zM3 15a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1z"
                        clip-rule="evenodd"></path>
                </svg>
            </button>
        </div>
    </div>
</header>

<script>
    var toggleOpen = document.getElementById('toggleOpen');
    var toggleClose = document.getElementById('toggleClose');
    var collapseMenu = document.getElementById('collapseMenu');

    function handleClick() {
        if (collapseMenu.style.display === 'block') {
            collapseMenu.style.display = 'none';
        } else {
            collapseMenu.style.display = 'block';
        }
    }

    toggleOpen.addEventListener('click', handleClick);
    toggleClose.addEventListener('click', handleClick);
</script>
