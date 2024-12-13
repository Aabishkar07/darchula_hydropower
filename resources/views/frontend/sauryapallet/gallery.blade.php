@extends('frontend.layout.app')
@section('body')
 
    <section class="pt-8 mx-auto overflow-hidden bg-white light text-stone-800 max-w-screen-2xl">
        <div class="px-6 py-2">
        <h2 class="max-sm:text-lg text-2xl font-bold text-left text-[#213343] md:text-2xl ">
            Darchula Hydropower Gallery
        </h2>
        </div>
    <div class="grid  grid-cols-1 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-4 gap-4 p-4">

        @foreach ($galleries as $gallery)

        <div class="group cursor-pointer relative">
          <img
            src="{{ asset('uploads/' . $gallery->image) }}"
            alt="Image 1"
            class="w-full h-48 object-cover rounded-lg transition-transform transform scale-100 group-hover:scale-105"
          />

        </div>

        @endforeach


      </div>

    </section>

@endsection
