@extends('frontend.layout.app')
@section('body')
    <section class="pt-8 md:py-10 mx-auto overflow-hidden bg-white light text-stone-800 max-w-screen-2xl">
        <div class="px-10">
            <h2 class="max-sm:text-lg text-2xl font-bold text-left text-[#213343] md:text-2xl ">
                Darchula Hydropower Video
            </h2>
            <div class="py-4">

                @include('frontend.home.video')
            </div>
        </div>
    </section>

@endsection
