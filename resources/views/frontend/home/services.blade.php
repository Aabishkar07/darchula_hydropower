<section class="relative z-10 overflow-hidden bg-white ">
    <div class="px-10 mx-auto max-w-screen-2xl">




        <div class="grid grid-cols-1 mt-3 sm:grid-cols-3 lg:grid-cols-4 gap-x-6">
            <!-- item -->
            @foreach ($services as $service)

                <a href="{{route("servicesingle",$service->slug)}}" class="overflow-hidden bg-white border rounded-xl ">

                    @include('frontend.components.service')
                </a>
            @endforeach



        </div>
    </div>
</section>
