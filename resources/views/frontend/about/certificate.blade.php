
<div class="my-16">

  <div class=" px-10 mx-auto max-w-screen-2xl mt-5">
    <div class="mx-auto text-center">
      <h2 class="text-3xl font-extrabold text-[#213343]">Certificates</h2>
    </div>

    <div class="grid grid-cols-1 md:grid-cols-4 gap-2 mt-10">


@foreach ($certificates as $key=>$certificate)

<div class="max-w-sm w-full bg-white rounded-lg shadow-lg overflow-hidden mx-auto">
<div class="relative">
  <img src="{{ asset('uploads/' .  $certificate->featured_image ) }}" alt="Certificate" class="w-full h-64 object-cover">
  <div class="absolute top-4 right-4">
    <a href="{{ asset('uploads/' .  $certificate->featured_image ) }}" download="Certificate.jpg" class="bg-blue-600 text-white px-3 py-2 rounded-full hover:bg-blue-500">
      Download
    </a>
  </div>
</div>
<div class="p-6">
  <h2 class="text-lg font-semibold text-gray-800">{{ $certificate->title }} </h2>
</div>
</div>
@endforeach



    </div>
  </div>

</div>

