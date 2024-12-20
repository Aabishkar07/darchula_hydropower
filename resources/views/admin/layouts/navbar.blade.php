<section class="flex items-center justify-between px-6 py-4 bg-white border-b-2 border-gray-200 ">
    <div class="flex items-center justify-between space-x-3 ">
        <div class="">
            <button @click="sidebarOpen = !sidebarOpen" class="w-8 text-black focus:outline-none lg:block">
                <svg class="w-6 h-6" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path d="M4 6H20M4 12H20M4 18H11" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                        stroke-linejoin="round" />
                </svg>
            </button>
        </div>
        <div class=" md:col-span-1 lg:col-span-2">
            <div class="flex items-center gap-x-2 font-bold text-2xl text-[#213343] ">
                {{-- <img src="{{ asset('images/su-logo.png') }}" alt="logo" class='w-14' /> --}}
               Darchula Hydropower
            </div>
        </div>


    </div>
    <div x-data="{ dropdownOpen: false }" class="relative  h-9 w-9 rounded-full mr-3">
        <button @click="dropdownOpen = ! dropdownOpen"
            class="relative block overflow-hidden rounded-full h-9 w-9 focus:outline-none">
            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" width="24" height="24" stroke-width="2"> <path d="M12 12m-9 0a9 9 0 1 0 18 0a9 9 0 1 0 -18 0"></path> <path d="M12 10m-3 0a3 3 0 1 0 6 0a3 3 0 1 0 -6 0"></path> <path d="M6.168 18.849a4 4 0 0 1 3.832 -2.849h4a4 4 0 0 1 3.834 2.855"></path> </svg>         </button>

        <div x-cloak x-show="dropdownOpen" @click="dropdownOpen = false" class="fixed inset-0 z-10 w-full h-full">
        </div>

        <div x-cloak x-show="dropdownOpen"
            class="absolute right-0 z-10 w-48 mt-2 overflow-hidden bg-white rounded-md shadow-xl">
            {{-- <a href="#"
                class="block px-4 py-2 text-sm text-gray-700 hover:bg-indigo-600 hover:text-white">Profile</a> --}}
            {{-- <a href="" class="block px-4 py-2 text-sm text-gray-700 hover:bg-indigo-600 hover:text-white">Change
                Password</a> --}}
            <a href="{{ route('admin.logout') }}"
                class="block px-4 py-2 text-sm text-gray-700 hover:bg-indigo-600 hover:text-white">Logout</a>
        </div>
    </div>
</section>
