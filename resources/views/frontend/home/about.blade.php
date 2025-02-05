{{-- <section class="">
    <div class="px-5 py-10 mx-auto sm:px-6 lg:px-8 max-w-screen-2xl">
        <h2 class="text-3xl text-[#213343] font-extrabold block md:hidden  sm:text-4xl max-md:mb-2">About Us</h2>
        <div class="grid items-center grid-cols-1 gap-8 md:grid-cols-2">
            <div class="order-2 max-w-lg md:order-1">
                <h2 class="text-3xl text-[#213343] font-extrabold hidden md:block  sm:text-4xl max-md:mb-2">About Us</h2>

                <p class="mt-4 text-lg text-gray-600 carttable mylist">{!! $about->description ?? '' !!}</p>

                @if (!request()->segment(1))
                    <div class="mt-8">
                        <a href="{{ route('about') }}" class="font-medium text-[#213343] hover:text-[#213343]">Learn more
                            about us
                            <span class="ml-2">&#8594;</span></a>
                    </div>
                @endif
            </div>
            <div class="order-1 md:order-2 md:mt-12 md:mt-0">
                <img src="{{ asset('uploads/' . $about->mid_image ?? '') }}" alt="About Us Image"
                    class="object-cover rounded-lg shadow-md ">
            </div>
        </div>
    </div>
</section> --}}

<section class="container light py-14 md:pt-24 lg:pb-0 bg-white text-zinc-900 ">
    <div class=" px-4">
      <div class="grid grid-cols-12 md:gap-8">
        <div class="col-span-12 lg:col-span-6">
          <div class="z-[1] flex justify-center items-center relative h-full w-full">
            <!-- shape one -->
            <svg class="absolute -top[20%] -left-[15%] -z-[1] text-blue-600" viewBox="0 0 180 180">
              <path
                fill="currentColor"
                d="M13.5,-18.7C16.9,-16.2,18.5,-11.4,23,-5.6C27.5,0.2,34.8,6.9,34.5,12.3C34.3,17.7,26.4,21.6,19.4,23.2C12.4,24.7,6.2,23.8,-0.8,25C-7.9,26.2,-15.8,29.4,-23.3,28C-30.9,26.6,-38.1,20.7,-38.9,13.7C-39.7,6.8,-34,-1.2,-30.2,-8.8C-26.3,-16.4,-24.4,-23.6,-19.6,-25.7C-14.9,-27.8,-7.5,-24.9,-1.2,-23.3C5.1,-21.6,10.2,-21.3,13.5,-18.7Z"
                width="100%"
                height="100%"
                transform="translate(50 50)"
                stroke-width="0"
                style="transition: all 0.3s ease 0s"
                opacity=".2"
              ></path>
            </svg>

            <div>
              <img src="{{ asset('uploads/' . $about->mid_image ?? '') }}" alt="" class="max-w-full h-auto" />
            </div>
          </div>
        </div>
        <div class="col-span-12 lg:col-span-6">
          <hr class="bg-gray-500 dark:bg-stone-700 bg-opacity-50 w-[11%] h-[2px]" />
          <h2 class="text-2xl font-bold leading-none md:text-5xl md:leading-none my-6">Welcome To Darchula Power
        </h2>
          <p class="text-base sm:text-lg leading-relaxed tracking-wide break-words mt-4 md:mt-12 opacity-75">
            {!! $about->description ?? '' !!}
          </p>

          {{-- <div class="grid grid-cols-12">
            <div class="col-span-12 lg:col-span-4">
              <a href="{{ route('about') }}">
                <button
                class="py-3 px-7 text-white bg-blue-600 hover:text-white hover:bg-opacity-90 mt-12 w-full rounded-md"
              >
                Read More
              </button>
              </a>
            </div>
          </div> --}}
        </div>
      </div>
    </div>
  </section>


