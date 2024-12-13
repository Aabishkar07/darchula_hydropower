@extends('frontend.layout.app')
@section('body')
    @php
        $setting = getSetting();
    @endphp
<!-- source https://tailblocks.cc/ -->

<section class="text-gray-600 body-font relative">
    <div class="container px-5 py-24 mx-auto flex sm:flex-nowrap flex-wrap">
        <div
            class="lg:w-2/3 md:w-1/2 bg-gray-300 rounded-lg overflow-hidden sm:mr-10 p-10 flex items-end justify-start relative">

                {!! $setting->googlemap !!}

        <style>
            iframe {
                position: absolute;
                top: 0;
                left: 0;
                width: 100%;
                height: 100%;
                border: 0;
            }
            .map-container {
                position: relative;
                width: 100%;
                height: 450px;
                overflow: hidden;
            }
        </style>
            <div class="bg-white relative flex flex-wrap py-6 rounded shadow-md">
                <div class="lg:w-1/2 px-6">
                    <h2 class="title-font font-semibold text-gray-900 tracking-widest text-xs">ADDRESS</h2>
                    <p class="mt-1">{{ $setting->address }}</p>
                </div>
                <div class="lg:w-1/2 px-6 mt-4 lg:mt-0">
                    <h2 class="title-font font-semibold text-gray-900 tracking-widest text-xs">EMAIL</h2>
                    <a class="text-red-500 leading-relaxed">{{ $setting->email }}</a>
                    <h2 class="title-font font-semibold text-gray-900 tracking-widest text-xs mt-4">PHONE</h2>
                    <p class="leading-relaxed">{{ $setting->contact_number }}</p>
                </div>
            </div>
        </div>

        @include('admin.include.toastmessage')

        <div class="lg:w-1/3 md:w-1/2 bg-white flex flex-col md:ml-auto w-full md:py-8 mt-8 md:mt-0">
            <h2 class="text-gray-900 text-lg mb-1 font-medium title-font">Feedback</h2>
            <p class="leading-relaxed mb-5 text-gray-600">Send us A Message For any enquire . Thank you !!
            </p>
            <form action="{{ route('updatecontact') }}" method="post">
                @csrf
            <div class="relative mb-4">
                <label for="name" class="leading-7 text-sm text-gray-600">Name</label>
                <input type="text" id="name" name="name" class="w-full bg-white rounded border border-gray-300 focus:border-red-500 focus:ring-2 focus:ring-red-200 text-base outline-none text-gray-700 py-1 px-3 leading-8 transition-colors duration-200 ease-in-out">

                @error('name')
                <div class="text-sm text-red-500 invalid-feedback" style="display: block;">
                    * {{ $message }}
                </div>
            @enderror
            </div>
            <div class="relative mb-4">
                <label for="email" class="leading-7 text-sm text-gray-600">Email</label>
                <input type="email" id="email" name="email" class="w-full bg-white rounded border border-gray-300 focus:border-red-500 focus:ring-2 focus:ring-red-200 text-base outline-none text-gray-700 py-1 px-3 leading-8 transition-colors duration-200 ease-in-out">

                @error('email')
                <div class="text-sm text-red-500 invalid-feedback" style="display: block;">
                    * {{ $message }}
                </div>
            @enderror
            </div>

            <div class="relative mb-4">
                <label for="phone" class="leading-7 text-sm text-gray-600">Phone</label>
                <input value="{{ old('phone') }}" type="number" id="phone" name="phone" class="w-full bg-white rounded border border-gray-300 focus:border-red-500 focus:ring-2 focus:ring-red-200 text-base outline-none text-gray-700 py-1 px-3 leading-8 transition-colors duration-200 ease-in-out">
                @error('phone')
                <div class="text-sm text-red-500 invalid-feedback" style="display: block;">
                    * {{ $message }}
                </div>
            @enderror
            </div>



            <div class="relative mb-4">
                <label for="message" class="leading-7 text-sm text-gray-600">Message</label>
                <textarea id="message" name="message" class="w-full bg-white rounded border border-gray-300 focus:border-red-500 focus:ring-2 focus:ring-red-200 h-32 text-base outline-none text-gray-700 py-1 px-3 resize-none leading-6 transition-colors duration-200 ease-in-out"></textarea>

                @error('message')
                            <div class="text-sm text-red-500 invalid-feedback" style="display: block;">
                                * {{ $message }}
                            </div>
                        @enderror
            </div>
            <button type="submit" class="text-white bg-red-500 border-0 py-2 px-6 focus:outline-none hover:bg-red-600 rounded text-lg">Submit</button>

            </form>
            <p class="text-xs text-gray-500 mt-3">Chicharrones blog helvetica normcore iceland tousled brook viral
                artisan.</p>
        </div>
    </div>
</section>



@endsection
