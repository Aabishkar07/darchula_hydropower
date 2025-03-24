<div class="py-4">
    <div class="max-w-screen-2xl mx-auto px-4">
      <div class="text-center">
        <h2 class="text-slate-900 text-3xl font-bold">Meet Our Team</h2>
      </div>

      <div class="grid sm:grid-cols-2 md:grid-cols-5 gap-6 max-sm:justify-center mt-12 max-md:max-w-xl max-sm:max-w-xs mx-auto">

       @foreach ($teams as $key=>$team )


        <div class="bg-white shadow-2xl p-3 border rounded-lg">
          <img src="{{ asset('uploads/' . $team->image) }}" class="w-full object-contain aspect-square object-top rounded-lg" />

          <div class="text-center mt-4 mb-1">
            <h4 class="text-[15px] font-medium ">{{ $team->name }}</h4>
            <p class="text-[13px] mt-1.5 ">{{ $team->designation }}</p>
            <div class="flex justify-center gap-4 mt-2 text-white text-base">
                <a href="{{ $team->facebook }}" title="LinkedIn" class="bg-indigo-600  p-2 rounded-full ">
                  <i class="fab fa-linkedin-in"></i>
                </a>
                <a href="{{ $team->instagram }}" title="Instagram" class="bg-pink-500  p-2 rounded-full ">
                  <i class="fab fa-instagram"></i>
                </a>
                <a href="{{ $team->twitter }}" title="Twitter" class="bg-blue-500  p-2 rounded-full ">
                  <i class="fab fa-twitter"></i>
                </a>
              </div>
          </div>
        </div>
        @endforeach




      </div>
    </div>
  </div>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css">
