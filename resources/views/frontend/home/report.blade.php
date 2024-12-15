
@extends('frontend.layout.app')
@section('body')
<div class="tab-content my-10" id="quarterly-report">
    <div class="container mx-auto overflow-x-auto">
        <h2 class="text-lg text-blue-700 font-semibold mb-2">{{ $title }}</h2>
        <!-- Quarterly Report Table Here -->

        <table class="min-w-full divide-y divide-gray-200 overflow-hidden shadow rounded-lg">
            <thead class="bg-gray-50">
                <tr>
                    <th scope="col"
                        class="px-6 py-3 text-left text-xs font-medium text-secondary uppercase tracking-wider">#ID</th>
                    <th scope="col"
                        class="px-6 py-3 text-left text-xs font-medium text-secondary uppercase tracking-wider">Name</th>
                    <th scope="col"
                        class="px-6 py-3 text-left text-xs font-medium text-secondary uppercase tracking-wider">Download</th>
                </tr>
            </thead>
            <tbody class="bg-white text-secondary divide-y divide-gray-200">



                @foreach ($data as $key=>$report)
                <tr>
                    <td class="px-6 py-4 whitespace-nowrap">{{ $key + 1}}</td>
                    <td class="px-6 py-4 whitespace-nowrap">{{ $report->title }}</td>
                    <td class="px-6 py-4 whitespace-nowrap flex">
                        <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler pr-2 icon-tabler-download"
                            width="24" height="24" viewBox="0 0 24 24" stroke-width="1.5" stroke="#2c3e50"
                            fill="none" stroke-linecap="round" stroke-linejoin="round">
                            <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                            <path d="M4 17v2a2 2 0 0 0 2 2h12a2 2 0 0 0 2 -2v-2" />
                            <path d="M7 11l5 5l5 -5" />
                            <path d="M12 4l0 12" />
                        </svg>


                        <a target="_blank" href="{{ asset('/uploads/' . $report->file) }}" download="{{ basename($report->file) }}" class="">
                            Download
                        </a>

                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</div>
@endsection
