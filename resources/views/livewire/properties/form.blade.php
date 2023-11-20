<form wire:submit="saveProperty">

    {{-- Name --}}
    <div class="form-group mb-6">
        <label class="required fw-semibold fs-6 mb-2">{{ __('Property Name') }}</label>
        <input type="text" wire:model="form.name"
            class="form-control form-control-solid @error('form.name') is-invalid @enderror" id="name"
            placeholder="{{ __('Property Name') }}" name="name">
        @error('form.name')
            <span class="text-danger">{{ $message }}</span>
        @enderror
    </div>

    {{-- Property Overview --}}
    <div class="form-group mb-6">
        <label class="required fw-semibold fs-6 mb-2">{{ __('Property Overview ') }}</label>
        <textarea wire:model="form.overview"
            class="form-control form-control-solid @error('form.overview') is-invalid @enderror" id="overview" name="overview"
            placeholder="{{ __('Overview') }}" rows="5"></textarea>
        @error('form.overview')
            <span class="text-danger">{{ $message }}</span>
        @enderror
    </div>

    {{-- Properties --}}
    <div class="form-group mb-6">
        <label class="required fw-semibold fs-6 mb-2">{{ __('Property Features') }}</label>
        <div class="d-flex gap-2">
            <input type="text" wire:model="feature"
                class="form-control form-control-solid @error('form.name') is-invalid @enderror" id="question"
                placeholder="{{ __('Property Feature') }}">
            <button type="button" class="btn btn-primary" wire:click="addFeature">
                <span class="indicator-label">{{ __('Add') }}</span>
            </button>
        </div>

        @if (count($form->features) > 0)
            <div class="mt-5">
                @foreach ($form->features as $indx => $feature)
                    <div class="bg-light-success text-success p-2 rounded d-flex justify-content-between w-100 mb-2">
                        <h5 class="mb-0 pb-0">{{ $feature }}</h5>
                        <span class="cursor-pointer" wire:click="deleteFeature('{{ $indx }}')">
                            <i class="fas fa-times text-danger"></i>
                        </span>
                    </div>
                @endforeach
            </div>
        @endif
    </div>

    {{-- Property Price --}}
    <div class="form-group mb-6">
        <label class="required fw-semibold fs-6 mb-2">{{ __('Property Price') }}</label>
        <div class="d-flex align-items-center position-relative my-1">
            <i class="fas fa-dollar-sign fs-3 position-absolute ms-5">
                <span class="path1"></span>
                <span class="path2"></span>
            </i>
            <input type="text" wire:model="form.price" name="price"
                class="form-control form-control-solid ps-13 @error('form.price') is-invalid @enderror"
                placeholder="{{ __('Property Price') }}" />
        </div>
        @error('form.price')
            <span class="text-danger">{{ $message }}</span>
        @enderror
    </div>

    {{-- Price Per Square Foot --}}
    <div class="form-group mb-6">
        <label class="required fw-semibold fs-6 mb-2">{{ __('Price Per Square Foot') }}</label>
        <div class="d-flex align-items-center position-relative my-1">
            <i class="fas fa-dollar-sign fs-3 position-absolute ms-5">
                <span class="path1"></span>
                <span class="path2"></span>
            </i>
            <input type="text" wire:model="form.price_per_square_foot" name="price_per_square_foot"
                class="form-control form-control-solid ps-13 @error('form.price_per_square_foot') is-invalid @enderror"
                placeholder="{{ __('Price Per Square Foot') }}" />
        </div>
        @error('form.price_per_square_foot')
            <span class="text-danger">{{ $message }}</span>
        @enderror
    </div>

    {{-- minimum_investment_price --}}
    <div class="form-group mb-6">
        <label class="required fw-semibold fs-6 mb-2">{{ convert_name('minimum_investment_price') }}</label>
        <div class="d-flex align-items-center position-relative my-1">
            <i class="fas fa-dollar-sign fs-3 position-absolute ms-5">
                <span class="path1"></span>
                <span class="path2"></span>
            </i>
            <input type="text" wire:model="form.minimum_investment_price" name="minimum_investment_price"
                class="form-control form-control-solid ps-13 @error('form.minimum_investment_price') is-invalid @enderror"
                placeholder="{{ convert_name('minimum_investment_price') }}" />
        </div>
        @error('form.minimum_investment_price')
            <span class="text-danger">{{ $message }}</span>
        @enderror
    </div>

    {{-- transaction_fee --}}
    <div class="form-group mb-6">
        <label class="required fw-semibold fs-6 mb-2">{{ convert_name('transaction_fee') }}</label>
        <div class="d-flex align-items-center position-relative my-1">
            <i class="fas fa-dollar-sign fs-3 position-absolute ms-5">
                <span class="path1"></span>
                <span class="path2"></span>
            </i>
            <input type="text" wire:model="form.transaction_fee" name="transaction_fee"
                class="form-control form-control-solid ps-13 @error('form.transaction_fee') is-invalid @enderror"
                placeholder="{{ convert_name('transaction_fee') }}" />
        </div>
        @error('form.transaction_fee')
            <span class="text-danger">{{ $message }}</span>
        @enderror
    </div>

    {{-- site_fee --}}
    <div class="form-group mb-6">
        <label class="required fw-semibold fs-6 mb-2">{{ convert_name('site_fee') }}</label>
        <div class="d-flex align-items-center position-relative my-1">
            <i class="fas fa-percentage fs-3 position-absolute ms-5">
                <span class="path1"></span>
                <span class="path2"></span>
            </i>
            <input type="text" wire:model="form.site_fee" name="site_fee"
                class="form-control form-control-solid ps-13 @error('form.site_fee') is-invalid @enderror"
                placeholder="{{ convert_name('site_fee') }}" />
        </div>
        @error('form.site_fee')
            <span class="text-danger">{{ $message }}</span>
        @enderror
    </div>

    {{-- Country --}}
    <div class="form-group mb-6">
        <label class="required fw-semibold fs-6 mb-2">{{ __('Country') }}</label>
        <select name="country_id" id="country_id" wire:model.live="country_id"
            class="form-select form-select-solid @error('form.country_id') is-invalid @enderror">
            <option value="">{{ __('Select Country') }}</option>
            @foreach ($countries as $country)
                <option value="{{ $country->id }}">
                    {{ $country->name }}</option>
            @endforeach
        </select>
        @error('form.country_id')
            <span class="text-danger">{{ $message }}</span>
        @enderror
    </div>

    {{-- City --}}
    <div class="form-group mb-6">
        <label class="required fw-semibold fs-6 mb-2">{{ __('City') }}</label>
        <select name="city_id" id="city_id" wire:model="form.city_id"
            class="form-select form-select-solid @error('form.city_id') is-invalid @enderror"
            {{ !$country_id ? 'disabled' : '' }}>
            <option value="">{{ __('Select City') }}</option>
            @foreach ($cities as $city)
                <option value="{{ $city->id }}" @selected($form->city_id == $city->id)>
                    {{ $city->name }}</option>
            @endforeach
        </select>
        @error('form.city_id')
            <span class="text-danger">{{ $message }}</span>
        @enderror
    </div>

    {{-- Category --}}
    <div class="form-group mb-6">
        <label class="required fw-semibold fs-6 mb-2">{{ __('Category') }}</label>
        <select name="category_id" id="category_id" wire:model="form.category_id"
            class="form-select form-select-solid text-capitalize @error('form.category_id') is-invalid @enderror">
            <option value="">{{ __('Select Category') }}</option>
            @foreach ($categories as $category)
                <option value="{{ $category->id }}" @selected($form->category_id == $category->id)>
                    {{ $category->name }}</option>
            @endforeach
        </select>
        @error('form.category_id')
            <span class="text-danger">{{ $message }}</span>
        @enderror
    </div>

    {{-- Amenities --}}
    <div class="form-group mb-6">
        <label class="required fw-semibold fs-6 mb-2">{{ __('Amenities') }}</label>
        <select name="amenity" id="amenity" wire:model.live="amenity"
            class="form-select form-select-solid text-capitalize @error('amenity') is-invalid @enderror">
            <option value="">{{ __('Select Amenity') }}</option>
            @foreach ($amenities as $item)
                <option value="{{ $item->id }}">{{ $item->name }}</option>
            @endforeach
        </select>
        @error('amenity')
            <span class="text-danger">{{ $message }}</span>
        @enderror

        @if (count($selected_amenities) > 0)
            <div class="mt-5 d-flex flex-wrap gap-5">
                @foreach ($selected_amenities as $idx => $amenty)
                    <div class="bg-light-success text-success py-1 px-2 rounded d-flex justify-content-between w-75px">
                        <h5 class="mb-0 pb-0">{{ amenity($amenty)?->name }}</h5>
                        <span class="cursor-pointer" wire:click="deleteAmenity('{{ $idx }}')">
                            <i class="fas fa-times text-danger"></i>
                        </span>
                    </div>
                @endforeach
            </div>
        @endif

    </div>

    {{-- current_rent --}}
    <div class="form-group mb-6">
        <label class="required fw-semibold fs-6 mb-2">{{ convert_name('current_rent') }}</label>
        <div class="d-flex align-items-center position-relative my-1">
            <i class="fas fa-dollar-sign fs-3 position-absolute ms-5">
                <span class="path1"></span>
                <span class="path2"></span>
            </i>
            <input type="text" wire:model="form.current_rent" name="current_rent"
                class="form-control form-control-solid ps-13 @error('form.current_rent') is-invalid @enderror"
                placeholder="{{ convert_name('current_rent') }}" />
        </div>
        @error('form.current_rent')
            <span class="text-danger">{{ $message }}</span>
        @enderror
    </div>

    {{-- gross_rent --}}
    <div class="form-group mb-6">
        <label class="required fw-semibold fs-6 mb-2">{{ __('Annual Gross Rent') }}</label>
        <div class="d-flex align-items-center position-relative my-1">
            <i class="fas fa-dollar-sign fs-3 position-absolute ms-5">
                <span class="path1"></span>
                <span class="path2"></span>
            </i>
            <input type="text" wire:model="form.gross_rent" name="gross_rent"
                class="form-control form-control-solid ps-13 @error('form.gross_rent') is-invalid @enderror"
                placeholder="{{ __('Annual Gross Rent') }}" />
        </div>
        @error('form.gross_rent')
            <span class="text-danger">{{ $message }}</span>
        @enderror
    </div>

    {{-- service_charges --}}
    <div class="form-group mb-6">
        <label class="required fw-semibold fs-6 mb-2">{{ convert_name('service_charges') }}</label>
        <div class="d-flex align-items-center position-relative my-1">
            <i class="fas fa-dollar-sign fs-3 position-absolute ms-5">
                <span class="path1"></span>
                <span class="path2"></span>
            </i>
            <input type="text" wire:model="form.service_charges" name="service_charges"
                class="form-control form-control-solid ps-13 @error('form.service_charges') is-invalid @enderror"
                placeholder="{{ convert_name('service_charges') }}" />
        </div>
        @error('form.service_charges')
            <span class="text-danger">{{ $message }}</span>
        @enderror
    </div>

    {{-- other_charges --}}
    <div class="form-group mb-6">
        <label class="required fw-semibold fs-6 mb-2">{{ convert_name('other_charges') }}</label>
        <div class="d-flex align-items-center position-relative my-1">
            <i class="fas fa-dollar-sign fs-3 position-absolute ms-5">
                <span class="path1"></span>
                <span class="path2"></span>
            </i>
            <input type="text" wire:model="form.other_charges" name="other_charges"
                class="form-control form-control-solid ps-13 @error('form.other_charges') is-invalid @enderror"
                placeholder="{{ convert_name('other_charges') }}" />
        </div>
        @error('form.other_charges')
            <span class="text-danger">{{ $message }}</span>
        @enderror
    </div>

    {{-- annual_return --}}
    <div class="form-group mb-6">
        <label class="required fw-semibold fs-6 mb-2">{{ convert_name('annual_return') }}</label>
        <div class="d-flex align-items-center position-relative my-1">
            <i class="fas fa-percentage fs-3 position-absolute ms-5">
                <span class="path1"></span>
                <span class="path2"></span>
            </i>
            <input type="text" wire:model="form.annual_return" name="annual_return"
                class="form-control form-control-solid ps-13 @error('form.annual_return') is-invalid @enderror"
                placeholder="{{ convert_name('annual_return') }}" />
        </div>
        @error('form.annual_return')
            <span class="text-danger">{{ $message }}</span>
        @enderror
    </div>

    {{-- annual_appreciation --}}
    <div class="form-group mb-6">
        <label class="required fw-semibold fs-6 mb-2">{{ convert_name('annual_appreciation') }}</label>
        <div class="d-flex align-items-center position-relative my-1">
            <i class="fas fa-percentage fs-3 position-absolute ms-5">
                <span class="path1"></span>
                <span class="path2"></span>
            </i>
            <input type="text" wire:model="form.annual_appreciation" name="annual_appreciation"
                class="form-control form-control-solid ps-13 @error('form.annual_appreciation') is-invalid @enderror"
                placeholder="{{ convert_name('annual_appreciation') }}" />
        </div>
        @error('form.annual_appreciation')
            <span class="text-danger">{{ $message }}</span>
        @enderror
    </div>

    {{-- gross_yield --}}
    <div class="form-group mb-6">
        <label class="required fw-semibold fs-6 mb-2">{{ convert_name('gross_yield') }}</label>
        <div class="d-flex align-items-center position-relative my-1">
            <i class="fas fa-percentage fs-3 position-absolute ms-5">
                <span class="path1"></span>
                <span class="path2"></span>
            </i>
            <input type="text" wire:model="form.gross_yield" name="gross_yield"
                class="form-control form-control-solid ps-13 @error('form.gross_yield') is-invalid @enderror"
                placeholder="{{ convert_name('gross_yield') }}" />
        </div>
        @error('form.gross_yield')
            <span class="text-danger">{{ $message }}</span>
        @enderror
    </div>

    {{-- net_yield --}}
    <div class="form-group mb-6">
        <label class="required fw-semibold fs-6 mb-2">{{ convert_name('net_yield') }}</label>
        <div class="d-flex align-items-center position-relative my-1">
            <i class="fas fa-percentage fs-3 position-absolute ms-5">
                <span class="path1"></span>
                <span class="path2"></span>
            </i>
            <input type="text" wire:model="form.net_yield" name="net_yield"
                class="form-control form-control-solid ps-13 @error('form.net_yield') is-invalid @enderror"
                placeholder="{{ convert_name('net_yield') }}" />
        </div>
        @error('form.net_yield')
            <span class="text-danger">{{ $message }}</span>
        @enderror
    </div>

    {{-- Location --}}
    @if (Session::has('location_success'))
        <div class="alert alert-success alert-dismissible" role="alert">
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            <strong>{{ __('Success') }} !</strong> {{ session('location_success') }}
        </div>
    @endif
    @if (Session::has('location_error'))
        <div class="alert alert-danger alert-dismissible" role="alert">
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            <strong>{{ __('Error') }} !</strong> {{ session('location_error') }}
        </div>
    @endif

    <div class="form-group mb-6">
        <label class="required fw-semibold fs-6 mb-2">{{ __('Location') }}</label>
        <input type="text" wire:model="form.location"
            class="form-control form-control-solid @error('form.location') is-invalid @enderror" id="question"
            placeholder="{{ __('Location') }}" name="location">
        <div class="d-flex justify-content-end mt-1 cursor-pointer" wire:click="fetchCoordinates">
            <span class="fs-14 text-primary">{{ __('Fetch Latitude and Longitude based on address') }}</span>
        </div>
        @error('form.location')
            <span class="text-danger">{{ $message }}</span>
        @enderror
    </div>

    {{-- Location Overview --}}
    <div class="form-group mb-6">
        <label class="required fw-semibold fs-6 mb-2">{{ __('Location Overview') }}</label>
        <textarea wire:model="form.location_note"
            class="form-control form-control-solid @error('form.location_note') is-invalid @enderror" id="location_note"
            name="location_note" placeholder="{{ __('Location Overview') }}" rows="5"></textarea>
        @error('form.location_note')
            <span class="text-danger">{{ $message }}</span>
        @enderror
    </div>

    {{-- Latitude --}}
    <div class="form-group mb-6">
        <label class="required fw-semibold fs-6 mb-2">{{ __('Latitude') }}</label>
        <input type="text" wire:model="form.latitude"
            class="form-control form-control-solid @error('form.latitude') is-invalid @enderror" id="question"
            placeholder="{{ __('Latitude') }}" name="latitude">
        @error('form.latitude')
            <span class="text-danger">{{ $message }}</span>
        @enderror
    </div>

    {{-- Longitude --}}
    <div class="form-group mb-6">
        <label class="required fw-semibold fs-6 mb-2">{{ __('Longitude') }}</label>
        <input type="text" wire:model="form.longitude"
            class="form-control form-control-solid @error('form.longitude') is-invalid @enderror" id="question"
            placeholder="{{ __('Longitude') }}" name="longitude">
        @error('form.longitude')
            <span class="text-danger">{{ $message }}</span>
        @enderror
    </div>

    {{-- Status --}}
    <div class="form-group mb-6">
        <label class="required fw-semibold fs-6 mb-2">{{ __('Property Status') }}</label>
        <select name="status" id="status" wire:model="form.status"
            class="form-select form-select-solid text-capitalize @error('form.status') is-invalid @enderror">
            <option value="">{{ __('Select Property Status') }}</option>
            @foreach (property_statuses() as $status)
                <option value="{{ $status }}" @selected($form->status == $status)>
                    {{ __($status) }}</option>
            @endforeach
        </select>
        @error('form.status')
            <span class="text-danger">{{ $message }}</span>
        @enderror
    </div>

    {{-- Images / Videos --}}
    <div class="form-group mb-6">
        <label for="upload{{ $iteration }}"
            class="required fw-semibold fs-6 mb-2">{{ __('Images/Video') }}</label>
        <input type="file" id="upload{{ $iteration }}" class="form-control form-control-solid"
            wire:model.live="attachments" multiple>

        <!-- showing files -->
        @if (count($files) > 0)
            <div class="service-task d-flex flex-wrap mt-5 gap-4">
                @foreach ($files as $file)
                    @if ($file['type'] === 'image')
                        <img src="{{ asset($file['file']) }}" alt="image" class="img-fluid mb-2 mx-2 rounded">
                    @else
                        <video src="{{ asset($file['file']) }}" controls class="mb-2 mx-2 rounded">
                        </video>
                    @endif

                    <span wire:click="deleteAttachment({{ $loop->index }},'{{ $file['file'] }}')"
                        class="cursor-pointer position-relative" style="font-size: 18px;"><i
                            class="fas fa-times text-danger position-absolute delete-task"></i></span>
                @endforeach
            </div>
        @endif
    </div>

    {{-- Documents --}}
    <div class="form-group mb-6">
        <label for="docs{{ $doc_iteration }}" class="required fw-semibold fs-6 mb-2">{{ __('Documents') }}</label>
        <input type="file" id="docs{{ $doc_iteration }}"
            class="form-control form-control-solid @error('docs') is-invalid @enderror" wire:model.live="docs"
            multiple>
        @error('docs')
            <span class="text-danger">{{ $message }}</span>
        @enderror

        @if (count($documents) > 0)
            <div class="mt-5">
                @foreach ($documents as $indx => $document)
                    <div class="bg-light-success text-success p-2 rounded d-flex justify-content-between w-100 mb-2">
                        <h5 class="mb-0 pb-0">{{ $document['name'] }}</h5>
                        <span class="cursor-pointer"
                            wire:click="deleteDocument('{{ $indx }}','{{ $document['filename'] }}')">
                            <i class="fas fa-times text-danger"></i>
                        </span>
                    </div>
                @endforeach
            </div>
        @endif
    </div>

    {{-- Closing Date --}}
    <div class="form-group mb-6">
        <label class="required fw-semibold fs-6 mb-2">{{ __('Closing Date') }}</label>
        <input type="date" wire:model="form.closing_date" min="{{ now()->addDay(1)->format('Y-m-d') }}"
            class="form-control form-control-solid @error('form.closing_date') is-invalid @enderror"
            id="closing_date" name="closing_date">
        @error('form.closing_date')
            <span class="text-danger">{{ $message }}</span>
        @enderror
    </div>

    {{-- SPV Formation Date --}}
    <div class="form-group mb-6">
        <label class="required fw-semibold fs-6 mb-2">{{ __('SPV Formation Date') }}</label>
        <input type="date" wire:model="form.spv_date" min="{{ now()->addDay(1)->format('Y-m-d') }}"
            class="form-control form-control-solid @error('form.spv_date') is-invalid @enderror" id="spv_date"
            name="spv_date">
        @error('form.spv_date')
            <span class="text-danger">{{ $message }}</span>
        @enderror
    </div>

    {{-- rental_payment_date --}}
    <div class="form-group mb-6">
        <label class="required fw-semibold fs-6 mb-2">{{ __('First Rental Payment Date') }}</label>
        <input type="date" wire:model="form.rental_payment_date" min="{{ now()->addDay(1)->format('Y-m-d') }}"
            class="form-control form-control-solid @error('form.rental_payment_date') is-invalid @enderror"
            id="rental_payment_date" name="rental_payment_date">
        @error('form.rental_payment_date')
            <span class="text-danger">{{ $message }}</span>
        @enderror
    </div>

    {{-- Show/Hide --}}
    <div class="form-group mb-6">
        <label class="required fw-semibold fs-6 mb-2">{{ __('Show / Hide') }}</label>
        <select name="show" id="show" wire:model="form.show"
            class="form-select form-select-solid @error('form.show') is-invalid @enderror">
            <option value="">{{ __('Select Status') }}</option>
            <option value="1" @selected($form->show == '1')>{{ __('Show') }}</option>
            <option value="0" @selected($form->show == '0')>{{ __('Hide') }}</option>
        </select>
        @error('form.show')
            <span class="text-danger">{{ $message }}</span>
        @enderror
    </div>


    <!--begin::Actions-->
    <div class="text-center py-10">
        <button type="submit" class="btn btn-primary">
            <span
                class="indicator-label">{{ $is_property_exist ? __('Update Property') : __('Create Property') }}</span>
        </button>
    </div>
    <!--end::Actions-->
</form>
