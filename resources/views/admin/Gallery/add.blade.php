@extends('admin.layouts.app')
@section('body')
    <div class="flex items-center gap-x-4">
        <a href="{{ route('admin.gallery.index') }}">
            <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-arrow-left" width="24"
                height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round"
                stroke-linejoin="round">
                <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                <path d="M5 12l14 0"></path>
                <path d="M5 12l6 6"></path>
                <path d="M5 12l6 -6"></path>
            </svg>
        </a>
        <div class="text-xl font-semibold ">Add Gallery</div>
    </div>
    <div class="bg-white rounded-lg shadow-lg row mt-30 text-slate-600">
        <form method="post" action="{{ route('admin.gallery.store') }} " enctype="multipart/form-data">
            @csrf
            <div class="p-6 mt-3">
                <div class="flex flex-col ">
                    {{-- <div>
                        <label class="w-full text-sm font-semibold" htmlFor="">
                            Title
                        </label>

                        <div>
                            <input
                                class="w-full p-3 mt-3 text-xs border border-gray-300 rounded focus:outline-none focus:ring-blue-500 focus:border-blue-500 hover:border-blue-500"
                                name="title" placeholder="Enter Title Here" type="text" value="{{ old('title') }}" />
                            @error('title')
                                <div class="text-sm text-red-400 invalid-feedback" style="display: block;">
                                    * {{ $message }}
                                </div>
                            @enderror
                        </div>
                    </div> --}}







                    <div class="mt-3">
                        <label class='text-sm font-semibold'>Gallery Image</label>
                        <div class='w-full p-2 mt-2 mb-1 text-sm border rounded-md shadow-sm form-control border-grey-400'>
                            <input type="file" name="image"
                                class="image hover:border-blue-500 focus:outline-none focus:ring-blue-500 focus:border-blue-500 "
                                onchange="loadFile(event)" />
                        </div>
                        <img id="output" style="width: 70px; margin-bottom: 2px;" />


                        @error('image')
                            <div class="text-sm text-red-400 invalid-feedback" style="display: block;">
                                * {{ $message }}
                            </div>
                        @enderror
                    </div>





                    <div>
                        <button
                            class="border mt-3 border-black px-4 py-1 rounded-md mr-2 text-white bg-[#213343] hover:bg-[#213343] hover:text-white">
                            Add
                        </button>
                    </div>
                </div>
            </div>
        </form>
    </div>
@endsection
