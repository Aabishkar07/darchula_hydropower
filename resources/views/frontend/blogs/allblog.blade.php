@extends('frontend.layout.app')
@section('body')

<div class="max-w-md mx-auto mt-5">
        <h2 class="text-3xl font-extrabold text-gray-800 mb-6 text-center leading-10">Stay updated with the latest blog posts.</h2>
      </div>

      <section class="pt-8 mx-auto overflow-hidden bg-white light text-stone-800 max-w-screen-2xl">

@include('frontend.blogs.blogcomponent')
      </section>
@endsection
