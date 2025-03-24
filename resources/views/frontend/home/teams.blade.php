
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
