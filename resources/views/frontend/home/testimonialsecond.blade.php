
@if ($testimonialsecond)
<div class="px-9 mx-auto max-md:px-2 max-w-screen-2xl max-lg:max-w-3xl max-sm:max-w-sm md:mb-10">

    <div class="px-9 slide-in-left">
        <div class="flex justify-between gap-x-0 items-center  ">
            <h2 class="max-sm:text-lg  text-2xl  text-left  md:text-2xl font-semibold ">
                Message From {{ $testimonialsecond->designation }}
            </h2>
        </div>
        <div class="flex py-4">
            <div class="w-[10%] border border-[#ff2953]"></div>
            <div class="w-[90%] border"></div>
        </div>

    </div>

    <div class="grid md:grid-cols-3 items-center gap-12  p-8  transition-shadow duration-300 fade-up">
        <!-- Image Section with hover effect -->
        <div class="flex justify-center">
            <div class="relative">
                <div class="absolute -inset-2 bg-white rounded-lg blur opacity-25"></div>
                <img
                    src="{{ asset('uploads/' . $testimonialsecond->featured_image ) }}"
                    class="relative w-[280px] h-[280px] object-cover rounded-lg shadow-lg"
                    alt="Testimonial"
                />
            </div>
        </div>

        <!-- Testimonial Content -->
        <div class="md:col-span-2 space-y-6">
            <!-- Quotation Icon -->
            <div class="mb-6">
                <svg
                    xmlns="http://www.w3.org/2000/svg"
                    class="w-12 fill-black rotate-180 opacity-80"
                    viewBox="0 0 475.082 475.081"
                >
                    <path d="M164.454 36.547H54.818c-15.229 0-28.171 5.33-38.832 15.987C5.33 63.193 0 76.135 0 91.365v109.632c0 15.229 5.327 28.169 15.986 38.826 10.66 10.656 23.606 15.988 38.832 15.988h63.953c7.611 0 14.084 2.666 19.414 7.994 5.33 5.325 7.994 11.8 7.994 19.417v9.131c0 20.177-7.139 37.397-21.413 51.675-14.275 14.271-31.499 21.409-51.678 21.409h-18.27c-4.952 0-9.233 1.813-12.851 5.427-3.615 3.614-5.424 7.898-5.424 12.847v36.549c0 4.941 1.809 9.233 5.424 12.848 3.621 3.613 7.898 5.427 12.851 5.427h18.271c19.797 0 38.688-3.86 56.676-11.566 17.987-7.707 33.546-18.131 46.68-31.265 13.131-13.135 23.553-28.691 31.261-46.679 7.707-17.987 11.562-36.877 11.562-56.671V91.361c0-15.23-5.33-28.171-15.987-38.828s-23.602-15.986-38.827-15.986zm294.635 15.987c-10.656-10.657-23.599-15.987-38.828-15.987H310.629c-15.229 0-28.171 5.33-38.828 15.987-10.656 10.66-15.984 23.601-15.984 38.831v109.632c0 15.229 5.328 28.169 15.984 38.826 10.657 10.656 23.6 15.988 38.828 15.988h63.953c7.611 0 14.089 2.666 19.418 7.994 5.324 5.328 7.994 11.8 7.994 19.417v9.131c0 20.177-7.139 37.397-21.416 51.675-14.274 14.271-31.494 21.409-51.675 21.409h-18.274c-4.948 0-9.233 1.813-12.847 5.427-3.617 3.614-5.428 7.898-5.428 12.847v36.549c0 4.941 1.811 9.233 5.428 12.848 3.613 3.613 7.898 5.427 12.847 5.427h18.274c19.794 0 38.684-3.86 56.674-11.566 17.984-7.707 33.541-18.131 46.676-31.265 13.134-13.135 23.562-28.695 31.265-46.679 7.706-17.983 11.563-36.877 11.563-56.671V91.361c-.003-15.23-5.328-28.171-15.992-38.827z" />
                </svg>
            </div>

            <!-- Testimonial Text -->
            <div class="relative">
                <p class="text-gray-700 text-lg italic leading-relaxed">
                    {!! $testimonialsecond->description !!}
                </p>
            </div>

            <!-- Author Information -->
            <div class="mt-8 border-l-4 border-black pl-4">
                <p class="text-gray-900 text-xl font-semibold">{{ $testimonialsecond->designation }}</p>
                {{-- <p class="text-black text-sm font-medium mt-1">{{ $testimonials->title }}</p> --}}
            </div>
        </div>
    </div>
</div>

@endif
