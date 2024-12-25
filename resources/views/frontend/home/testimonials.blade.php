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
<header class="container relative z-10 overflow-hidden bg-white light py-14 md:py-24 text-zinc-900">










    @if ($testimonials)
        <div class="container px-4 mx-auto">
            <div class="grid items-center grid-cols-12 gap-6">
                <div class="col-span-12 mb-12 text-center lg:col-span-7 xl:col-span-6 lg:text-start lg:mb-0">
                    <h2 class="mb-6 text-3xl font-bold leading-tight tracking-wide lg:text-7xl">

                        Message From Chairperson
                    </h2>
                    <div class="max-w-xl">
                        <p class="text-[17px] leading-relaxed opacity-80 my-12">
                            {!! $testimonials->description ?? '' !!}
                        </p>
                    </div>
                    <button class="px-8 py-3 font-medium text-white bg-blue-600 rounded-full hover:bg-opacity-90">
                        {{ $testimonials->title ?? '' }}
                    </button>
                </div>
                <div class="relative col-span-12 text-center lg:col-span-5">


                    <div class="relative">
                        <img src="{{ asset('uploads/' . $testimonials->featured_image) }}" alt=""
                            class="h-auto max-w-full mx-auto rounded-full" />
                        <div class="absolute w-[500px] h-[500px] left-0 top-0 bg-slate-100  rounded-full -z-20"></div>
                    </div>
                </div>
            </div>
        </div>
    @endif
</header>
