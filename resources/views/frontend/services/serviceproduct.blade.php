@extends('frontend.layout.app')
@section('body')
    <section class="relative z-10 py-10 overflow-hidden bg-white light text-zinc-900">
        <div class="container relative px-4 mx-auto">
            <h2 class="text-3xl font-bold leading-tight text-center md:text-5xl">

                {{ $service->title }}
            </h2>
            <div class="grid grid-cols-1 mt-12 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-4 gap-x-6">
                @foreach ($products as $product)
                    <a href="{{ route('productsingle', $product->slug) }}"
                        class="p-4 pb-0 bg-white border shadow max-md:mt-2 rounded-xl">
                        <div class="relative flex items-center justify-center w-full bg-gray-100 rounded">
                            <img src="{{ asset('uploads/' . $product->image) }}" alt="" class="h-auto max-w-full" />

                        </div>
                        <div class="px-1 py-6">
                            <div class="flex items-center justify-between">
                                <div>

                                    <h6 class="hover:text-blue-600 text-[#213343] text-[17px] font-medium mb-1">
                                        {{ $product->title }}
                                    </h6>

                                </div>
                            </div>
                            <div>
                                <p class="text-gray-700 text-md ">
                                    {{ \Illuminate\Support\Str::limit(strip_tags($product->description), 150) }}</p>
                            </div>
                        </div>
                    </a>
                @endforeach


            </div>
        </div>
    </section>
@endsection
