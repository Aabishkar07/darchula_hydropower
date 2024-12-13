@extends('admin.layouts.app')
@section('page_title', 'Admin - Product')
@section('product_select', 'bg-black text-white')
@section('body')
    <div class="w-full px-5 bg-background">
        @include('admin.include.toastmessage')

        <div class="flex justify-between">
            <div class="flex-1">
                <h2 class="w-full text-2xl font-bold text-secondary ">Our Teams</h2>
            </div>
            <div class="text-right "> <a href="{{ route('admin.teams.create') }} "
                    class="flex bg-[#213343] items-center border-[#213343] border hover:bg-transparent hover:text-[#213343] text-white py-2 text-xs font-bold uppercase px-3 rounded outline-none focus:outline-none mr-1 mb-1 ease-linear transition-all duration-400  ">
                    <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-plus" width="24"
                        height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none"
                        stroke-linecap="round" stroke-linejoin="round">
                        <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                        <path d="M12 5l0 14"></path>
                        <path d="M5 12l14 0"></path>
                    </svg>
                    Add Team Member</a>
            </div>


        </div>
        <div class="relative mt-10 text-white shadow bg-[#213343] product-tablerounded-lg ">
            <div class="overflow-x-auto ">
                <table class="min-w-full ">

                    <thead class="p-10 font-normal text-left">
                        <tr class="">
                            <th
                                class="px-5 py-3 text-xs ">
                                Name</th>

                            <th
                                class="px-5 py-3 text-xs ">
                                Image</th>

                            <th
                                class="px-5 py-3 text-xs ">
                                Designation</th>

                            <th
                                class="px-5 py-3 text-xs ">
                                Created_at</th>



                            <th
                                class="px-5 py-3 text-xs ">
                                Actions</th>
                        </tr>
                    </thead>

                    @foreach ($team as $key => $teams)
                        <tbody>

                            <tr>
                                <td class="px-5 py-5 text-sm bg-white border-b border-gray-200">
                                    <p class="text-gray-900 whitespace-no-wrap">{{ $teams->name }}</p>
                                </td>


                                <td class="px-5 py-5 text-sm bg-white border-b border-gray-200">
                                    <img src="{{ asset('/uploads/' . $teams->image) }}" alt="herosectionimage"
                                        class="w-12 h-12 oldimage" />
                                </td>


                                <td class="px-5 py-5 text-sm bg-white border-b border-gray-200">


                                    <p class="text-gray-900 whitespace-no-wrap">{{ $teams->designation }}</p>
                                </td>


                                <td class="px-5 py-5 text-sm bg-white border-b border-gray-200">
                                    <p class="text-gray-900 whitespace-no-wrap">
                                        {{ $teams->created_at->format('jS M Y') }}
                                    </p>
                                </td>
                                <td class="px-5 py-5 text-sm bg-white border-b border-gray-200">
                                    <div class="px-3 py-1 font-semibold leading-tight text-green-900 ">
                                        <div class="">
                                            <div x-data="{ dropdownOpen: false }" class="">
                                                <button @click="dropdownOpen = ! dropdownOpen"
                                                    class="w-6 h-6 overflow-hidden focus:outline-none hover:rounded-full hover:bg-slate-50">
                                                    <svg xmlns="http://www.w3.org/2000/svg"
                                                        class="icon icon-tabler icon-tabler-dots-vertical" width="24"
                                                        height="24" viewBox="0 0 24 24" stroke-width="2"
                                                        stroke="currentColor" fill="none" stroke-linecap="round"
                                                        stroke-linejoin="round">
                                                        <path stroke="none" d="M0 0h24v24H0z" fill="none">
                                                        </path>
                                                        <path d="M12 12m-1 0a1 1 0 1 0 2 0a1 1 0 1 0 -2 0"></path>
                                                        <path d="M12 19m-1 0a1 1 0 1 0 2 0a1 1 0 1 0 -2 0"></path>
                                                        <path d="M12 5m-1 0a1 1 0 1 0 2 0a1 1 0 1 0 -2 0"></path>
                                                    </svg>
                                                </button>

                                                <div x-cloak x-show="dropdownOpen" @click="dropdownOpen = false"
                                                    class="fixed inset-0 z-10 w-full h-full">
                                                </div>

                                                <div x-cloak x-show="dropdownOpen"
                                                    class="absolute z-10 w-48 mt-2 mr-auto overflow-hidden bg-white rounded-md shadow-xl right-6">


                                                    <a href="{{ route('admin.teams.edit', $teams->id) }}"
                                                        class="block px-4 py-2 text-sm text-gray-700 hover:bg-sky-500 hover:text-white">Edit
                                                    </a>

                                                    <form method="POST"
                                                        action="{{ route('admin.teams.destroy', $teams->id) }}"
                                                        id="delete-form-{{ $teams->id }}">
                                                        @csrf
                                                        @method('delete')
                                                        <button type="button"
                                                            onclick="deleteSingleImage({{ $teams->id }})"
                                                            class="flex items-center w-full gap-2 px-2 py-2 text-center text-red-700 text-md openModal hover:bg-red-50">
                                                            <span class="pl-2">
                                                                Delete

                                                            </span>
                                                        </button>
                                                    </form>

                                                </div>
                                            </div>

                                        </div>
                                    </div>
                                </td>
                            </tr>

                        </tbody>
                    @endforeach
                </table>
            </div>



        </div>

        <script>
            function deleteSingleImage(itemSlug) {


                Swal.fire({
                    title: 'Are you sure?',
                    text: 'You will not be able to recover this!',
                    icon: 'warning',
                    showCancelButton: true,
                    confirmButtonColor: '#d33',
                    cancelButtonColor: '#3085d6',
                    confirmButtonText: 'Yes, delete it!'
                }).then((result) => {
                    if (result.isConfirmed) {
                        // alert("delete-form-"+itemSlug)
                        let form = document.querySelector("#delete-form-" + itemSlug)
                        form.submit();
                    }
                });
            }
        </script>

    </div>
@endsection
