{{-- <section class="py-8 mx-auto overflow-hidden bg-white light text-stone-800 max-w-screen-2xl">
    <div class="px-10 max-sm:px-4">
        <div class="grid justify-center grid-cols-1">
            <div class="col-span-1">
                <div class="">
                    <div class="flex flex-wrap items-center justify-between ">
                        <h2 class="max-sm:text-lg text-2xl font-bold text-left text-[#213343] md:text-2xl ">
                            SSurya Krishi Video
                        </h2>
                        <a href="{{ route('videos') }}"
                            class="px-4 max-sm:px-2  py-2 flex text-[#213343] items-center hover:underline ">
                            View All
                            <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-arrow-right"
                                width="20" height="20" viewBox="0 0 24 24" stroke-width="1.5"
                                stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
                                <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                                <path d="M5 12l14 0"></path>
                                <path d="M13 18l6 -6"></path>
                                <path d="M13 6l6 6"></path>
                            </svg>
                        </a>
                    </div>
                    <div class="flex py-3">
                        <div class="w-[10%] border border-[#f15a28]"></div>
                        <div class="w-[90%] border"></div>
                    </div>

                </div>
            </div>

            <div class="relative ">
                @include('frontend.home.video')
            </div>
        </div>
    </div>
</section> --}}



<div class="max-w-screen-xl mx-auto py-8 px-4 lg:py-16 lg:px-6">
    <div class="text-center mb-10">
        <h2 class="text-4xl tracking-tight font-bold text-primary-800">Highlighted Features</h2>
    </div>

    <div class="flex flex-col md:flex-row">
        <!-- can help image -->
        <div class="mr-0 md:mr-8 mt-1  md:mb-0 max-sm:mb-3">
            <img class="w-[300px] h-[440px] mx-auto" src="{{ asset('images/World largest dam.jpg') }}" alt="can_help_banner">
          </div>

        <!-- end can help image -->

        <div class="flex-1 flex flex-col sm:flex-row flex-wrap -mb-4 -mx-2">
            @foreach ($videos as $video)
            <div class="w-full sm:w-1/2 mb-4 px-2 ">

                <div class="h-full p-2 border border-green-500 border-t-0 border-l-0 rounded-br-xl">
                       @include('frontend.components.video')

                </div>
            </div>
            @endforeach



        </div>
    </div>
</div>
