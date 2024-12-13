@extends('admin.layouts.app')
@section('body')
    <style>
        table {
            border-collapse: collapse;
            width: 100%;
            border: 1px solid #ccc;
        }

        th,
        td {
            padding: 8px;
            text-align: left;
            border-bottom: 1px solid #ddd;
        }
    </style>


    @include('admin.include.toastmessage')

    <div class="flex items-center">
        <div class="flex-1">
            <h2 class="w-full text-2xl font-bold text-secondary ">Banners</h2>
        </div>
        <div class="items-center">
            <a href="{{ route('admin.banner.create') }} "
                class="flex bg-[#213343] items-center border-[#213343] border hover:bg-transparent hover:text-[#213343] text-white py-2 text-xs font-bold uppercase px-3 rounded outline-none focus:outline-none mr-1 mb-1 ease-linear transition-all duration-400 ">
                <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-plus" width="24" height="24"
                    viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round"
                    stroke-linejoin="round">
                    <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                    <path d="M12 5l0 14"></path>
                    <path d="M5 12l14 0"></path>
                </svg>
                Add Banner</a>
        </div>
    </div>


    <div class="py-3 ">
        <div class="mt-1">
            {{-- -mx-4 sm:-mx-8 px-4 sm:px-8 py-4 overflow-x-auto z-[0] max-h-screen overflow-y-auto --}}
            <div class="relative mt-10 text-white shadow bg-[#213343] product-tablerounded-lg ">
                <div class="overflow-x-auto ">
                    {{-- max-h-screen min-w-full shadow rounded-lg z-[0] overflow-y-hidden --}}
                    <table class="min-w-full divide-y divide-gray-200">
                        <thead class="">
                            <tr>
                                <th class="px-5 py-3 font-bold text-left ">
                                    Title</th>
                                {{-- <th class="px-5 py-3 font-bold text-left ">
                                    Category Name</th> --}}

                                <th class="px-5 py-3 font-bold text-left ">
                                    Image</th>
                                <th class="px-5 py-3 font-bold text-left ">
                                    Created at</th>

                                <th class="px-5 py-3 font-bold text-left ">
                                    Actions</th>
                            </tr>
                        </thead>



                        @foreach ($banners as $key => $banner)
                            <tbody class="text-xs bg-white divide-y divide-gray-200 ">
                                <tr>
                                    <td class="px-5 py-3 ">
                                        <p class="text-gray-900 ">{{ $banner->title }}</p>
                                    </td>


                                    <td class="p-2" style="width: 100px;">
                                        <img class="w-full h-full " src="{{ asset('uploads/' . $banner->image) }}"
                                            alt="Card" style="width: 70px;">
                                    </td>

                                    <td class="w-48 px-5 py-3 text-sm">
                                        <p class="text-gray-900 ">
                                            {{ $banner->created_at->format('jS M Y') }}
                                        </p>
                                    </td>


                                    <td>
                                        <div class="flex items-center p-2">

                                            <a href=" {{ route('admin.banner.edit', $banner->id) }}">
                                                <div class="flex px-2 py-1 mx-2 text-white rounded-md bg-slate-500">
                                                    <svg xmlns="http://www.w3.org/2000/svg"
                                                        class="icon icon-tabler icon-tabler-edit" width="24"
                                                        height="24" viewBox="0 0 24 24" stroke-width="2"
                                                        stroke="currentColor" fill="none" stroke-linecap="round"
                                                        stroke-linejoin="round">
                                                        <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                                                        <path
                                                            d="M7 7h-1a2 2 0 0 0 -2 2v9a2 2 0 0 0 2 2h9a2 2 0 0 0 2 -2v-1">
                                                        </path>
                                                        <path
                                                            d="M20.385 6.585a2.1 2.1 0 0 0 -2.97 -2.97l-8.415 8.385v3h3l8.385 -8.415z">
                                                        </path>
                                                        <path d="M16 5l3 3"></path>
                                                    </svg>

                                                </div>
                                            </a>

                                            <form method="POST" action="{{ route('admin.banner.destroy', $banner->id) }}"
                                                id="delete-form-{{ $banner->id }}">
                                                @csrf
                                                @method('delete')
                                                <button type="button" onclick="deleteItem({{ $banner->id }})"
                                                    class="flex px-2 py-1 mx-2 text-white bg-red-500 rounded-md">
                                                    <svg xmlns="http://www.w3.org/2000/svg"
                                                        class="icon icon-tabler icon-tabler-trash" width="24"
                                                        height="24" viewBox="0 0 24 24" stroke-width="2"
                                                        stroke="currentColor" fill="none" stroke-linecap="round"
                                                        stroke-linejoin="round">
                                                        <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                                                        <path d="M4 7l16 0"></path>
                                                        <path d="M10 11l0 6"></path>
                                                        <path d="M14 11l0 6"></path>
                                                        <path d="M5 7l1 12a2 2 0 0 0 2 2h8a2 2 0 0 0 2 -2l1 -12"></path>
                                                        <path d="M9 7v-3a1 1 0 0 1 1 -1h4a1 1 0 0 1 1 1v3"></path>
                                                    </svg>
                                                </button>
                                            </form>

                                        </div>
                                    </td>

                                </tr>
                            </tbody>
                        @endforeach

                    </table>

                </div>
            </div>
            {{-- <div class="z-0 mt-3">
                {{ $banner->links('vendor.pagination.tailwind') }}
            </div> --}}
        </div>
    </div>
@endsection
