
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

        <div class="tab-content mt-3">
            @foreach ($services as $key => $service)
                <div class="tab-pane fade {{ $key === 0 ? 'show active' : '' }}" id="service-{{ $service->id }}"
                    role="tabpanel" aria-labelledby="service-{{ $service->id }}-tab">
                    <div class="row">
                        @foreach ($products->where('service_id', $service->id) as $product)

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
    <script>
        document.addEventListener("DOMContentLoaded", function () {
            var triggerTabList = [].slice.call(document.querySelectorAll('#projectTabs .nav-link'));
            triggerTabList.forEach(function (tab) {
                tab.addEventListener('click', function (event) {
                    event.preventDefault();
                    var tabTarget = new bootstrap.Tab(this);
                    tabTarget.show();
                });
            });
        });
    </script>
