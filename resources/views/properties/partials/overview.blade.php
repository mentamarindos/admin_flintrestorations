<div class="row h-100">
    {{-- overview --}}
    <div class="col-12">
        <div class="card card-flush mt-6 mt-xl-9">
            <div class="card-header mt-5">
                <div class="card-title flex-column">
                    <h3 class="fw-bold mb-4">Property Overview</h3>
                    <p class="fs-6 text-gray-400">{{ $property->overview }}</p>
                </div>
            </div>
        </div>
    </div>

    {{-- Financials --}}
    <div class="col-md-7">
        <div class="card card-flush mt-6 mt-xl-9">
            <div class="card-header mt-5">
                <div class="card-title">
                    <h2 class="fw-bold">Financials</h2>
                </div>
            </div>

            <div class="card-body py-5">
                <div class="row">
                    <div class="col-md-6">
                        <h3 class="fw-semibold mb-4">Property cost</h3>

                        <div class="d-flex justify-content-between align-items-center mb-3">
                            <span class="text-gray-600">Property price</span>
                            <h4 class="fw-bold">${{ currency_format($property->price) }}</h4>
                        </div>
                        <div class="d-flex justify-content-between align-items-center mb-3">
                            <span class="text-gray-600">Transaction costs</span>
                            <h4 class="fw-bold">${{ currency_format($property->transaction_fee) }}</h4>
                        </div>
                        <div class="d-flex justify-content-between align-items-center mb-3">
                            <span class="text-gray-600">Shareholder's fee</span>
                            <h4 class="fw-bold">{{ $property->site_fee }}%</h4>
                        </div>
                        <hr>
                        <div class="d-flex justify-content-between align-items-center mb-3">
                            <span class="text-gray-600">Investment cost</span>
                            <h4 class="fw-bold text-success">
                                ${{ currency_format($property->price + $property->transaction_fee) }}
                            </h4>
                        </div>
                    </div>

                    <div class="col-md-6">
                        <h3 class="fw-semibold mb-4">Rental income (Year 1)</h3>

                        <div class="d-flex justify-content-between align-items-center mb-3">
                            <span class="text-gray-600">Annual gross rent</span>
                            <h4 class="fw-bold">${{ currency_format($property->gross_rent) }}</h4>
                        </div>
                        <div class="d-flex justify-content-between align-items-center mb-3">
                            <span class="text-gray-600">Service charges</span>
                            <h4 class="fw-bold">${{ currency_format($property->service_charges) }}</h4>
                        </div>
                        <div class="d-flex justify-content-between align-items-center mb-3">
                            <span class="text-gray-600">Mgmt. and maintenance</span>
                            <h4 class="fw-bold">{{ currency_format($property->other_charges) }}</h4>
                        </div>
                        <hr>
                        <div class="d-flex justify-content-between align-items-center mb-3">
                            <span class="text-gray-600">Annual net income</span>
                            <h4 class="fw-bold text-success">
                                ${{ currency_format($property->gross_rent + $property->service_charges + $property->other_charges) }}
                            </h4>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    {{-- price --}}
    <div class="col-md-5">
        <div class="card card-flush mt-6 mt-xl-9">
            <div class="card-header mt-5">
                <div class="card-title flex-column">
                    <h3 class="fw-bold">Property Price</h3>
                </div>
            </div>

            <div class="card-body py-3">
                <h1 class="text-success fw-bolder text-center mb-3">${{ currency_format($property->price) }}</h1>

                @php
                    $funded = funded($property->investments_sum_amount, $property->price);
                @endphp
                <div class="d-flex flex-column">
                    <div class="h-8px bg-light rounded mb-3">
                        <div class="bg-success rounded h-8px" role="progressbar" style="width: {{ $funded }}%;"
                            aria-valuenow="0" aria-valuemin="0" aria-valuemax="100"></div>
                    </div>
                    <div class="d-flex justify-content-between w-100 fs-4 fw-bold mb-3">
                        <span>{{ $funded }}% funded</span>
                        <span>${{ currency_format($property->price - $property->investments_sum_amount) }}
                            available</span>
                    </div>

                    <div class="d-flex justify-content-between w-100 fs-4 fw-bold mb-3">
                        <p>
                            <span class="text-success">{{ $property->investments?->unique('user_id')?->count() }}
                            </span>investors
                        </p>
                        {{-- @if (now()->diffInDays($property->closing_date) < 50) --}}
                        <span class="text-danger">{{ now()->diffInDays($property->closing_date) }} days left</span>
                        {{-- @endif --}}

                    </div>

                    {{-- <div class="fw-semibold text-gray-600">14 Targets are remaining</div> --}}
                </div>

                <div class="border mw-300px mx-auto mt-5 p-3 rounded bg-gray-200">
                    <div class="d-flex justify-content-between align-items-center mb-3">
                        <span class="text-gray-600">Annualised return</span>
                        <h4 class="fw-bold">{{ $property->annual_return }}%</h4>
                    </div>
                    <div class="d-flex justify-content-between align-items-center mb-3">
                        <span class="text-gray-600">Annual appreciation</span>
                        <h4 class="fw-bold">{{ $property->annual_appreciation }}%</h4>
                    </div>
                    <div class="d-flex justify-content-between align-items-center mb-3">
                        <span class="text-gray-600">Projected gross yield</span>
                        <h4 class="fw-bold">{{ $property->gross_yield }}%</h4>
                    </div>
                    <div class="d-flex justify-content-between align-items-center mb-3">
                        <span class="text-gray-600">Projected net yield</span>
                        <h4 class="fw-bold">{{ $property->net_yield }}%</h4>
                    </div>
                </div>
            </div>
        </div>
    </div>

    {{-- Amenitie --}}
    <div class="col-md-6">
        <div class="card card-flush mt-6 mt-xl-9 pb-5">
            <div class="card-header mt-5">
                <div class="card-title flex-column">
                    <h3 class="fw-bold">Amenities ({{ count($property->amenities) }})</h3>
                </div>
            </div>

            <div class="card-body py-3">
                <div class="row">
                    @foreach ($property->amenities as $amenity)
                        <div class="d-flex align-items-center gap-4 mb-3 col-sm-6 col-md-4">
                            <img src="{{ $amenity->photo }}" alt="image" class="img-fluid">
                            <p class="fw-bold mb-0 pb-0 fs-16">{{ $amenity->name }}</p>
                        </div>
                    @endforeach
                </div>

            </div>
        </div>
    </div>

    {{-- Documents --}}
    <div class="col-md-6">
        <div class="card card-flush mt-6 mt-xl-9">
            <div class="card-header mt-5">
                <div class="card-title flex-column">
                    <h3 class="fw-bold">Documents ({{ count($property->documents) }})</h3>
                </div>
            </div>

            <div class="card-body py-3">
                @foreach ($property->documents as $document)
                    <a href="{{ asset($document->filename) }}"
                        class="d-flex justify-content-between align-items-center border p-4 rounded mb-3" download>
                        <div class="d-flex gap-3">
                            <span>
                                <i class="fas fa-file fs-18"></i>
                            </span>
                            <h5 class="mb-0 pb-0">{{ $document->name }}</h5>
                        </div>
                        <span>
                            <i class="fas fa-download fs-18 text-success"></i>
                        </span>
                    </a>
                @endforeach
            </div>
        </div>
    </div>

    {{-- Location --}}
    <div class="col-12">
        <div class="card card-flush mt-6 mt-xl-9">
            <div class="card-header mt-5">
                <div class="card-title flex-column">
                    <h3 class="fw-bold">Location</h3>
                </div>
            </div>
            <div class="card-body py-3">
                <div class="d-flex align-items-center gap-3">
                    <span class="">
                        <i class="fas fs-16 fa-map-marker-alt text-success"></i>
                    </span>
                    <h4 class="fw-bold">{{ $property->location }}, {{ $property->city?->name }},
                        {{ $property->country?->name }}</h4>
                </div>

                {{-- <div id="map" class="my-5"></div> --}}

                <div class="mt-2">
                    <p>{{ $property->location_note }}</p>
                </div>
            </div>
        </div>
    </div>
</div>
