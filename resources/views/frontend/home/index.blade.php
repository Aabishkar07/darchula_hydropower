@extends('frontend.layout.app')
@section('body')

@include('frontend.home.popup');

    @include('frontend.home.banner')

    @include('frontend.home.about')
    <div class="mx-auto  mt-14  container">

        <div class="col-span-12">
            <h2 class="font-bold text-[25px] lg:text-[35px]  text-center leading-none">Our Projects</h2>

          </div>
        {{-- @include('frontend.home.services') --}}
        @include('frontend.home.projects')
    </div>



    @include('frontend.components.supplierandpartners')
    @include('frontend.home.parallax')

    @include('frontend.home.sauryapellet_video')



    {{-- @include('frontend.home.teams') --}}
    @include('frontend.home.testimonials')

    <div class="mx-auto container">
        <div class="col-span-1">
            <div class="px-10 max-sm:px-4">
                <div class="flex flex-wrap items-center justify-between ">
                    <h2 class="max-sm:text-lg text-2xl font-bold text-left text-[#213343] md:text-2xl ">
                        Stay updated with the latest blog posts.                    </h2>
                    <a href="{{ route('allblogs') }}" class="px-4 py-2 flex text-[#213343] items-center hover:underline ">
                        View All
                        <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-arrow-right"
                            width="20" height="20" viewBox="0 0 24 24" stroke-width="1.5"
                            stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
                            <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                            <path d="M5 12l14 0"></path>
                            <path d="M13 18l6 -6"></path>
                            <path d="M13 6l6 6"></path>
                        </svg>
                    </a>
                </div>
                <div class="flex py-3">
                    <div class="w-[10%] border border-[#f15a28]"></div>
                    <div class="w-[90%] border"></div>
                </div>

            </div>
        </div>
    </div>
    @include('frontend.blogs.blogcomponent')

    {{-- @include('frontend.components.faq') --}}




@endsection
