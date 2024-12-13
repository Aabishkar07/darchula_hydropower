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
