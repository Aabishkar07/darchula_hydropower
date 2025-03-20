{{--

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
  </section> --}}


  <div class="">
    <section class="container mx-auto px-4 py-12 mt-24">
        <h2 class="text-center text-3xl font-bold mb-10
            ">
            Associated Partner
        </h2>

        <div class="relative max-w-6xl mx-auto">
            <!-- Carousel Container -->
            <div id="logoCarousel" class="owl-carousel owl-theme">


                @foreach ($partners as $partner)

                <div class="item bg-white p-6 rounded-xl

                    flex items-center justify-center h-32">
                    <img src="{{ asset('uploads/' . $partner->featured_image) }}"
                        alt="Logo 1"
                        class="max-h-32 max-w-full
                        " />
                </div>
                @endforeach

            </div>
        </div>
    </section>

</div>


    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/owl.carousel@2.3.4/dist/assets/owl.carousel.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/owl.carousel@2.3.4/dist/assets/owl.theme.default.min.css">
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.6.0/dist/jquery.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/owl.carousel@2.3.4/dist/owl.carousel.min.js"></script>
    <script>
        $(document).ready(function(){
            $('#logoCarousel').owlCarousel({
                loop: true,
                margin: 10,
                nav: true,
                dots: false,
                autoplay: true,
                autoplayTimeout: 3000,
                autoplayHoverPause: true,
                responsive: {
                    0: {
                        items: 2
                    },
                    600: {
                        items: 3
                    },
                    1000: {
                        items: 7
                    }
                }
            });
        });
    </script>
    <style>
        @keyframes float {
            0% { transform: translateY(0px); }
            50% { transform: translateY(-10px); }
            100% { transform: translateY(0px); }
        }
    </style>
