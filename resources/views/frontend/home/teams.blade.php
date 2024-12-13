{{-- <div class="">
    <div class="px-10 mx-auto max-w-screen-2xl ">
        <div class="mx-auto text-center">
            <h2 class="text-3xl font-extrabold text-[#213343]">Meet our team</h2>
            <p class="mt-1 text-sm leading-relaxed text-gray-800">Meet our team of professionals to serve you.</p>
        </div>

        <div class="grid gap-6 mt-4 lg:grid-cols-4 md:grid-cols-3 sm:grid-cols-2 max-md:justify-center">

            @foreach ($teams as $team)
                <div class="overflow-hidden border rounded-lg">
                    <div class="">
                        <img src="{{ asset('uploads/' . $team->image) }}" class="object-cover w-full h-56" />

                        <div class="p-4">
                            <h4 class="text-base font-bold text-gray-800">{{ $team->name }}</h4>
                            <p class="mt-1 text-xs text-gray-800">{{ $team->designation }}</p>

                            <div class="flex mt-4 space-x-1 gap-x-2">
                                @if ($team->facebook)
                                    <a target="_blank" href="{{ $team->facebook }}"
                                        class="flex items-center justify-center w-6 h-6 bg-blue-600 border-none rounded-full outline-none hover:bg-blue-700">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="14px" fill="#fff"
                                            viewBox="0 0 155.139 155.139">
                                            <path
                                                d="M89.584 155.139V84.378h23.742l3.562-27.585H89.584V39.184c0-7.984 2.208-13.425 13.67-13.425l14.595-.006V1.08C115.325.752 106.661 0 96.577 0 75.52 0 61.104 12.853 61.104 36.452v20.341H37.29v27.585h23.814v70.761h28.48z"
                                                data-original="#010002" />
                                        </svg>
                                    </a>
                                @endif
                                @if ($team->twitter)
                                    <a target="_blank" href="{{ $team->twitter }}"
                                        class="w-6 h-6 flex items-center justify-center rounded-full border-none outline-none bg-[#03a9f4] hover:bg-[#03a1f4]">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="14px" fill="#fff"
                                            viewBox="0 0 512 512">
                                            <path
                                                d="M512 97.248c-19.04 8.352-39.328 13.888-60.48 16.576 21.76-12.992 38.368-33.408 46.176-58.016-20.288 12.096-42.688 20.64-66.56 25.408C411.872 60.704 384.416 48 354.464 48c-58.112 0-104.896 47.168-104.896 104.992 0 8.32.704 16.32 2.432 23.936-87.264-4.256-164.48-46.08-216.352-109.792-9.056 15.712-14.368 33.696-14.368 53.056 0 36.352 18.72 68.576 46.624 87.232-16.864-.32-33.408-5.216-47.424-12.928v1.152c0 51.008 36.384 93.376 84.096 103.136-8.544 2.336-17.856 3.456-27.52 3.456-6.72 0-13.504-.384-19.872-1.792 13.6 41.568 52.192 72.128 98.08 73.12-35.712 27.936-81.056 44.768-130.144 44.768-8.608 0-16.864-.384-25.12-1.44C46.496 446.88 101.6 464 161.024 464c193.152 0 298.752-160 298.752-298.688 0-4.64-.16-9.12-.384-13.568 20.832-14.784 38.336-33.248 52.608-54.496z"
                                                data-original="#03a9f4" />
                                        </svg>
                                    </a>
                                @endif

                                @if ($team->instagram)
                                    <div class="">

                                        <a target="_blank" href="{{ $team->instagram }}" class="">
                                            <div class="">
                                                <svg xmlns="http://www.w3.org/2000/svg " width="1.39em" height="1.39em"
                                                    viewBox="0 0 256 256">
                                                    <g fill="none">
                                                        <rect width="256" height="256"
                                                            fill="url(#skillIconsInstagram0)" rx="60" />
                                                        <rect width="256" height="256"
                                                            fill="url(#skillIconsInstagram1)" rx="60" />
                                                        <path fill="#fff"
                                                            d="M128.009 28c-27.158 0-30.567.119-41.233.604c-10.646.488-17.913 2.173-24.271 4.646c-6.578 2.554-12.157 5.971-17.715 11.531c-5.563 5.559-8.98 11.138-11.542 17.713c-2.48 6.36-4.167 13.63-4.646 24.271c-.477 10.667-.602 14.077-.602 41.236s.12 30.557.604 41.223c.49 10.646 2.175 17.913 4.646 24.271c2.556 6.578 5.973 12.157 11.533 17.715c5.557 5.563 11.136 8.988 17.709 11.542c6.363 2.473 13.631 4.158 24.275 4.646c10.667.485 14.073.604 41.23.604c27.161 0 30.559-.119 41.225-.604c10.646-.488 17.921-2.173 24.284-4.646c6.575-2.554 12.146-5.979 17.702-11.542c5.563-5.558 8.979-11.137 11.542-17.712c2.458-6.361 4.146-13.63 4.646-24.272c.479-10.666.604-14.066.604-41.225s-.125-30.567-.604-41.234c-.5-10.646-2.188-17.912-4.646-24.27c-2.563-6.578-5.979-12.157-11.542-17.716c-5.562-5.562-11.125-8.979-17.708-11.53c-6.375-2.474-13.646-4.16-24.292-4.647c-10.667-.485-14.063-.604-41.23-.604zm-8.971 18.021c2.663-.004 5.634 0 8.971 0c26.701 0 29.865.096 40.409.575c9.75.446 15.042 2.075 18.567 3.444c4.667 1.812 7.994 3.979 11.492 7.48c3.5 3.5 5.666 6.833 7.483 11.5c1.369 3.52 3 8.812 3.444 18.562c.479 10.542.583 13.708.583 40.396s-.104 29.855-.583 40.396c-.446 9.75-2.075 15.042-3.444 18.563c-1.812 4.667-3.983 7.99-7.483 11.488c-3.5 3.5-6.823 5.666-11.492 7.479c-3.521 1.375-8.817 3-18.567 3.446c-10.542.479-13.708.583-40.409.583c-26.702 0-29.867-.104-40.408-.583c-9.75-.45-15.042-2.079-18.57-3.448c-4.666-1.813-8-3.979-11.5-7.479s-5.666-6.825-7.483-11.494c-1.369-3.521-3-8.813-3.444-18.563c-.479-10.542-.575-13.708-.575-40.413s.096-29.854.575-40.396c.446-9.75 2.075-15.042 3.444-18.567c1.813-4.667 3.983-8 7.484-11.5s6.833-5.667 11.5-7.483c3.525-1.375 8.819-3 18.569-3.448c9.225-.417 12.8-.542 31.437-.563zm62.351 16.604c-6.625 0-12 5.37-12 11.996c0 6.625 5.375 12 12 12s12-5.375 12-12s-5.375-12-12-12zm-53.38 14.021c-28.36 0-51.354 22.994-51.354 51.355s22.994 51.344 51.354 51.344c28.361 0 51.347-22.983 51.347-51.344c0-28.36-22.988-51.355-51.349-51.355zm0 18.021c18.409 0 33.334 14.923 33.334 33.334c0 18.409-14.925 33.334-33.334 33.334s-33.333-14.925-33.333-33.334c0-18.411 14.923-33.334 33.333-33.334" />
                                                        <defs>
                                                            <radialGradient id="skillIconsInstagram0" cx="0"
                                                                cy="0" r="1"
                                                                gradientTransform="matrix(0 -253.715 235.975 0 68 275.717)"
                                                                gradientUnits="userSpaceOnUse">
                                                                <stop stop-color="#fd5" />
                                                                <stop offset=".1" stop-color="#fd5" />
                                                                <stop offset=".5" stop-color="#ff543e" />
                                                                <stop offset="1" stop-color="#c837ab" />
                                                            </radialGradient>
                                                            <radialGradient id="skillIconsInstagram1" cx="0"
                                                                cy="0" r="1"
                                                                gradientTransform="matrix(22.25952 111.2061 -458.39518 91.75449 -42.881 18.441)"
                                                                gradientUnits="userSpaceOnUse">
                                                                <stop stop-color="#3771c8" />
                                                                <stop offset=".128" stop-color="#3771c8" />
                                                                <stop offset="1" stop-color="#60f"
                                                                    stop-opacity="0" />
                                                            </radialGradient>
                                                        </defs>
                                                    </g>
                                                </svg>
                                            </div>
                                        </a>
                                    </div>
                                @endif
                            </div>
                        </div>
                    </div>
                </div>
            @endforeach



        </div>
    </div>
</div> --}}








<section class="ezy__team9 light py-14 md:py-24 bg-white  text-zinc-900 ">
    <div class="container px-4 mx-auto">
      <div class="flex justify-center mb-6 md:mb-12">
        <div class="max-w-lg text-center">
          <h2 class="text-3xl leading-none font-bold md:text-[45px] mb-4">Our Experts Team</h2>
        </div>
      </div>

      <div class="grid grid-cols-4 gap-6 text-center pt-6">

        @foreach ($teams as $team)

        <div class="col-span-4 md:col-span-2 lg:col-span-1">
          <div
            class="bg-white shadow-xl rounded-xl hover:-translate-y-1 duration-500 h-full p-6 lg:p-8"
          >
            <img
              src="{{ asset('uploads/' . $team->image) }}"
              alt=""
              class="max-w-full h-auto rounded-full border-4 p-1 border-blue-600 mx-auto"
              width="120"
            />
            <div class="mt-6">
              <h4 class="text-2xl font-medium mb-1">{{ $team->name }}</h4>
              <p class="mb-4 text-sm">{{ $team->designation }}</p>
              <div class="mt-6">
                <a target="_blank"
                  href="{{ $team->facebook }}"
                  class="inline-block opacity-60 transition duration-300 hover:translate-y-1 hover:opacity-100 mr-4"
                >
                  <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="currentColor" viewBox="0 0 24 24">
                    <path d="M9.197 21V12H6v-3h3V6.845C9 3.72 10.657 2 13.556 2 14.97 2 16 2.112 16 2.112V5h-1.85C12.96 5 12.5 6 12.5 7.104V9h3.6l-.48 3H12.5v9h-3.303z"/>
                  </svg>
                </a>
                <a  target="_blank"
                  href="{{ $team->instagram }}"
                  class="inline-block opacity-60 transition duration-300 hover:translate-y-1 hover:opacity-100 mr-4"
                >
                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" width="24" height="24" stroke-width="2">
                    <path d="M4 4m0 4a4 4 0 0 1 4 -4h8a4 4 0 0 1 4 4v8a4 4 0 0 1 -4 4h-8a4 4 0 0 1 -4 -4z"></path>
                    <path d="M12 12m-3 0a3 3 0 1 0 6 0a3 3 0 1 0 -6 0"></path>
                    <path d="M16.5 7.5l0 .01"></path>
                  </svg>
                </a>
                <a  target="_blank"
                  href="{{ $team->twitter }}"
                  class="inline-block opacity-60 transition duration-300 hover:translate-y-1 hover:opacity-100 mr-4"
                >
                  <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="currentColor" viewBox="0 0 24 24">
                    <path d="M24 4.557c-.883.392-1.833.656-2.828.775 1.017-.609 1.798-1.574 2.165-2.723-.95.564-2.005.974-3.127 1.195-.897-.957-2.178-1.555-3.594-1.555-2.717 0-4.92 2.2-4.92 4.917 0 .386.045.762.128 1.124C7.728 8.087 4.1 6.13 1.671 3.149c-.423.724-.666 1.562-.666 2.475 0 1.71.87 3.213 2.188 4.096-.806-.026-1.566-.247-2.23-.616v.062c0 2.385 1.698 4.374 3.946 4.827-.413.113-.849.172-1.296.172-.317 0-.626-.03-.928-.086.627 1.956 2.444 3.379 4.6 3.419-1.68 1.318-3.809 2.102-6.102 2.102-.396 0-.788-.023-1.175-.068C2.395 20.12 5.228 21 8.354 21c10.03 0 15.515-8.305 15.515-15.515 0-.237-.006-.473-.018-.708.869-.628 1.62-1.41 2.213-2.303z"/>
                  </svg>
                </a>
                <a  target="_blank"
                  href="{{ $team->portfolio }}"
                  class="inline-block opacity-60 transition duration-300 hover:translate-y-1 hover:opacity-100"
                >
                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" width="24" height="24" stroke-width="2">
                    <path d="M3 12a9 9 0 1 0 18 0a9 9 0 0 0 -18 0"></path>
                    <path d="M3.6 9h16.8"></path>
                    <path d="M3.6 15h16.8"></path>
                    <path d="M11.5 3a17 17 0 0 0 0 18"></path>
                    <path d="M12.5 3a17 17 0 0 1 0 18"></path>
                  </svg>
                </a>
              </div>

            </div>
          </div>
        </div>

        @endforeach



      </div>
    </div>
  </section>
