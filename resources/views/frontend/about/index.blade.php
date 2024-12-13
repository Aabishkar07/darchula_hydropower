@extends('frontend.layout.app')
@section('body')
<style>
    .mylist ul {
        list-style-type: disc !important;
        padding-left: 20px;
        margin-left: 0;
    }

    .mylist li {
        padding-top: 2px;
        display: list-item !important;
    }

    .mylist ol {
        display: block;
        padding-left: 20px;
        list-style-type: decimal !important;
    }
</style>




<div class="relative py-16 bg-gradient-to-r from-gray-900 to-indigo-800 ">
    <div class="absolute inset-0">
      <img src="{{ asset('uploads/'. $about->top_image) }}" alt="Background Image" class="object-cover w-full h-full opacity-50" />
    </div>

    <div class="relative z-10 max-w-screen-xl px-8 mx-auto text-center text-white">
      <h1 class="mb-6 text-4xl font-extrabold leading-tight md:text-5xl">Welcome to Darchula Hydropower.</h1>
      <p class="mb-12 text-lg md:text-xl">Empowering Lives with Reliable and Affordable Energy Solutions.</p>
    </div>
  </div>


  <section class="pt-8 mx-auto overflow-hidden bg-white light text-stone-800 max-w-screen-2xl">

    @include('frontend.home.about')
  </section>



<div class="my-5">

    @include('frontend.about.history')
</div>

{{-- <div class="my-5">

    @include('frontend.about.vision')
</div>

<div class="my-5">

    @include('frontend.about.mission')
</div> --}}



<div class="my-5">

    @include('frontend.home.teams')
</div>

{{-- <div >
    @include('frontend.about.certificate')
</div> --}}






@endsection
