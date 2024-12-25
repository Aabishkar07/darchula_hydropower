@extends('frontend.layout.app')
@section('body')
@include("admin.include.toastmessage")



<section class="ezy__blogdetails1 light py-14 md:py-24 bg-white  text-zinc-900 ">
    <div class="container px-4">
      <div class="grid md:grid-cols-3 gap-4">
        <div class="col-span-3 md:col-span-2 px-4">
          <h1 class="font-bold text-2xl md:text-5xl mb-12">{{ $product->title }}</h1>
        </div>
      </div>

      <div class="grid grid-cols-12 gap-4">
        <div class="col-span-12 md:col-span-8 px-4">
          <img src="{{asset('uploads/' .  $product->image ) }}" alt="" class="w-full h-auto rounded" />
          <div class="flex flex-col sm:flex-row items-center justify-between my-2 sm:mr-12">

            <div>
              <ul class="sm:mt-0">
                <a href="" class="text-lg sm:text-[22px]"><i class="fab fa-facebook mr-3"></i></a>
                <a href="" class="text-lg sm:text-[22px]"><i class="fab fa-instagram mr-3"></i></a>
                <a href="" class="text-lg sm:text-[22px]"><i class="fab fa-linkedin-in mr-3"></i></a>
                <a href="" class="text-lg sm:text-[22px]"><i class="fab fa-twitter mr-3"></i></a>
                <a href="" class="text-lg sm:text-[22px]"><i class="fab fa-whatsapp mr-3"></i></a>
                <a href="" class="text-lg sm:text-[22px]"><i class="fas fa-share-alt mr-3"></i></a>
                <a href="" class="text-lg sm:text-[22px]"><i class="fas fa-bookmark"></i></a>
              </ul>
            </div>
          </div>
          <div>
            <p class="text-[17px] mb-2 opacity-80">
              {!!$product->description !!}
            </p>



          </div>
        </div>

        <div class="col-span-12 md:col-span-4 lg:col-span-3 lg:col-start-9 px-4 md:pl-6 lg:pl-0">
            <!-- Header Section -->
            <div class="bg-stone-900 bg-opacity-90  text-white rounded-t-lg py-4 px-3 mb-4">
              <h5 class="text-xl font-medium">Related Projects</h5>
            </div>

            <!-- Blog Items -->
            @foreach ($otherproducts as $key => $others)
              <a href="{{ route('productsingle', $others->slug) }}" class="block">
                <div class="flex justify-between items-start gap-4 mb-4">
                  <img src="{{ asset('uploads/' . $others->image) }}" alt="{{ $others->title }}" class="img-fluid rounded w-24 h-28 object-contain" />
                  <div class="ml-3">
                    <h6 class="mb-2 text-base font-medium leading-tight">{{ $others->title }}</h6>
                    <div class="flex flex-wrap font-sans    text-sm text-black">

                        <span class="mr-3 ">{{ Str::limit(strip_tags($others->description), 70) }}</span>
                    </div>
                  </div>
                </div>
              </a>
              <hr class="text-blue-600 bg-blue-600 my-6 opacity-25" />
            @endforeach
          </div>


      </div>
    </div>
  </section>

@endsection
