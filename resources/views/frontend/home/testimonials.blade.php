{{-- <div class="my-10">
    <div class="px-10 mx-auto max-w-screen-2xl">
        <div class="grid gap-6 lg:grid-cols-3 max-lg:max-w-2xl">
            <div class="col-span-2">
                <h2 class="text-3xl font-extrabold text-[#213343]">What our happy client say</h2>

                <p class="mt-6 text-sm leading-relaxed text-gray-800">Veniam proident aute magna anim excepteur et ex
                    consectetur velit ullamco veniam minim aute sit. Elit occaecat officia et laboris Lorem minim.
                    Officia do aliqua adipisicing ullamco in.</p>
            </div>
        </div>

        <div
            class="grid grid-cols-1 px-10 mt-7 max-sm:px-3 max-md:mt-10 gap-x-6 max-md:px-0 sm:grid-cols-2 lg:grid-cols-3 lg:gap-12">
            @foreach ($tesimonials as $tesimonial)
                @include('frontend.components.testimomials')
            @endforeach
        </div>
    </div>
</div> --}}








{{--
<div class="col-span-12">
    <h2 class="font-bold text-[25px] lg:text-[35px]  text-center leading-none">Message From Chairperson
  </h2>

  </div> --}}
<header
  class="ezy__header42 light py-14 md:py-24 bg-white container text-zinc-900 relative overflow-hidden z-10"
>











  <div class="container px-4 mx-auto">
    <div class="grid grid-cols-12 gap-6 items-center">
      <div
        class="col-span-12 lg:col-span-7 xl:col-span-6 text-center lg:text-start mb-12 lg:mb-0"
      >
        <h2
          class="text-3xl font-bold leading-tight tracking-wide lg:text-7xl mb-6"
        >

          Message From Chairperson
        </h2>
        <div class="max-w-xl">
          <p class="text-[17px] leading-relaxed opacity-80 my-12">
           {!!$testimonials->description !!}
          </p>
        </div>
        <button
          class="py-3 px-8 font-medium text-white bg-blue-600 hover:bg-opacity-90 rounded-full"
        >
        {{ $testimonials->title }}
    </button>
      </div>
      <div class="col-span-12 lg:col-span-5 relative text-center">


        <div class="relative">
          <img
            src="{{ asset('uploads/' . $testimonials->featured_image ?? "") }}"
            alt=""
            class="max-w-full h-auto rounded-full mx-auto"
          />
          <div
            class="absolute w-[500px] h-[500px] left-0 top-0 bg-slate-100  rounded-full -z-20"
          ></div>
        </div>
      </div>
    </div>
  </div>
</header>

