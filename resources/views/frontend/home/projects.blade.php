<!-- HTML and Blade -->

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        .nav-tabs .nav-link.active {
            background-color: #f8f9fa;
            color: #000;
        }

        .card {
            border: 1px solid #ddd;
            border-radius: 5px;
            transition: transform 0.3s;
        }

        .card:hover {
            transform: translateY(-5px);
            box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
        }
    </style>


<body>
    <div class="container my-5">
        <!-- Service Tabs -->
        <ul class="nav nav-tabs" id="projectTabs" role="tablist">
            @foreach ($services as $key => $service)
                <li class="nav-item" role="presentation">
                    <button class="nav-link {{ $key === 0 ? 'active' : '' }}" id="service-{{ $service->id }}-tab"
                        data-bs-toggle="tab" data-bs-target="#service-{{ $service->id }}" type="button" role="tab"
                        aria-controls="service-{{ $service->id }}" aria-selected="{{ $key === 0 ? 'true' : 'false' }}">
                        {{ $service->title }}
                    </button>
                </li>
            @endforeach
        </ul>

        <!-- Tab Content -->
        <div class="tab-content mt-3">
            @foreach ($services as $key => $service)
                <div class="tab-pane fade {{ $key === 0 ? 'show active' : '' }}" id="service-{{ $service->id }}"
                    role="tabpanel" aria-labelledby="service-{{ $service->id }}-tab">
                    <div class="row">
                        @foreach ($products->where('service_id', $service->id) as $product)
                            {{-- <div class="col-md-4">
                                <a href="{{ route('productsingle', $product->slug) }}"
                                    class="p-4 pb-0 bg-white border shadow max-md:mt-2 rounded-xl">
                                    <div class="relative flex items-center justify-center w-full bg-gray-100 rounded">
                                        <img src="{{ asset('uploads/' . $product->image) }}" alt=""
                                            class="h-auto max-w-full" />
                                    </div>
                                    <div class="px-1 py-6">
                                        <div class="flex items-center justify-between">
                                            <div>
                                                <h6
                                                    class="hover:text-blue-600 text-[#213343] text-[17px] font-medium mb-1">
                                                    {{ $product->title }}
                                                </h6>
                                            </div>
                                        </div>
                                        <div>
                                            <p class="text-gray-700 text-md">
                                                {{ \Illuminate\Support\Str::limit(strip_tags($product->description), 150) }}
                                            </p>
                                        </div>
                                    </div>
                                </a>
                            </div> --}}

                            <div class="col-md-4 mt-3">
                                <div class="card p-3">
                                  <img src="{{ asset('uploads/' . $product->image) }}" class="card-img-top" alt="Hydro Project">
                                  <div class="card-body">
                                    <h5 class="card-title"> {{ $product->title }}</h5>
                                    <p class="card-text"> {{ \Illuminate\Support\Str::limit(strip_tags($product->description), 150) }}</p>
                                    <a href="{{ route('productsingle', $product->slug) }}" class="btn btn-primary">Learn More</a>
                                  </div>
                                </div>
                              </div>
                        @endforeach
                    </div>
                </div>
            @endforeach
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>

