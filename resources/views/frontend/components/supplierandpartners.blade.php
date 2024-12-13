{{-- <section class="py-8 bg-white light text-zinc-900 ">
    <div class="px-4 mx-auto max-w-screen-2xl">
        <div class="grid grid-cols-12 mb-4 mb-md-5">
            <div class="col-span-12 text-center md:col-span-8 md:col-start-3">
                <h2 class="text-[32px] font-bold mb-6">
                    Saurya Pallet Suppliers and Partners
                </h2>
                <p class="text-lg leading-relaxed opacity-80 md:px-12">
                    Alone we can do so little; together we can do so much.
                </p>
            </div>
        </div>
        <div class="grid grid-cols-12 lg:gap-8">
            @foreach ($suppilers as $suppiler)
                <div class="col-span-12 mt-8 lg:col-span-3">
                    <div class="text-center duration-300 group">
                        <div class="px-12 py-16 rounded-md shadow-md">
                            <img src="{{ asset('uploads/' . $suppiler->featured_image) }}" alt=""
                                class="max-h-[60px] mx-auto" />
                        </div>
                        <p class="mt-6 opacity-75">
                            {{ $suppiler->title }}
                        </p>
                    </div>
                </div>
            @endforeach

        </div>
    </div>
</section> --}}


<section class="ezy__clients13 light py-14  bg-white ">
    <div class=" px-16 md:px-8 lg:px-28">
      <div class="grid grid-cols-12 mb-8 md:mb-16">
        <div class="col-span-12">
          <h2 class="font-bold text-[25px] lg:text-[35px]  text-center leading-none">Associated Partner
        </h2>

        </div>
      </div>
      <div class="flex flex-wrap justify-center items-center gap-12">

        @foreach ($partners as $partner)

        <img
          src="{{ asset('uploads/' . $partner->featured_image) }}"
          alt=""
          class="max-h-8 h-auto max-w-full"
        />
@endforeach
      </div>
    </div>
  </section>
