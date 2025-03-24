



<div class="max-w-screen-xl mx-auto py-8 px-4 lg:py-16 lg:px-6">
    <div class="text-center mb-10">
        <h2 class="text-4xl tracking-tight font-bold text-primary-800">Highlighted Features</h2>
    </div>

    <div class="flex flex-col md:flex-row">

        {{-- <div class="mr-0 md:mr-8 mt-1  md:mb-0 max-sm:mb-3">
            <img class="w-[300px] h-[440px] mx-auto" src="{{ asset('images/World largest dam.jpg') }}" alt="can_help_banner">
          </div> --}}

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
