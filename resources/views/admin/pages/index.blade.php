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
            <h2 class="w-full text-2xl font-bold text-secondary">Pages</h2>
        </div>
        <div class="text-right "> <a href="{{ route('admin.pages.create') }} "
                class="flex bg-[#213343] items-center border-[#213343] border hover:bg-transparent hover:text-[#213343] text-white py-2 text-xs font-bold uppercase px-3 rounded outline-none focus:outline-none mr-1 mb-1 ease-linear transition-all duration-400 ">
                <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-plus" width="24" height="24"
                    viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round"
                    stroke-linejoin="round">
                    <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                    <path d="M12 5l0 14"></path>
                    <path d="M5 12l14 0"></path>
                </svg>
                Add page</a>
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
                                <th class="px-5 py-3 font-semibold text-left ">
                                    Title</th>

                                <th class="px-5 py-3 font-semibold text-left ">
                                    Created at</th>

                                <th class="px-5 py-3 font-semibold text-left ">
                                    Actions</th>
                            </tr>
                        </thead>



                        @foreach ($pages as $key => $page)
                            <tbody class="bg-white divide-y divide-gray-200 ">
                                <tr>
                                    <td class="px-5 py-3 ">
                                        <p class="text-gray-900 ">{{ $page->title }}</p>
                                    </td>


                                    <td class="w-48 px-5 py-3 text-sm">
                                        <p class="text-gray-900 ">
                                            {{ $page->created_at->format('jS M Y') }}
                                        </p>
                                    </td>


                                    <td>
                                        <div class="flex items-center p-2">

                                            <a href=" {{ route('admin.pages.edit', $page->id) }}">
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
                                                    Edit

                                                </div>
                                            </a>



                                        </div>
                                    </td>

                                </tr>
                            </tbody>
                        @endforeach

                    </table>

                </div>
            </div>
            {{-- <div class="z-0 mt-3">
                {{ $pages->links('vendor.pagination.tailwind') }}
            </div> --}}
        </div>
    </div>
@endsection
