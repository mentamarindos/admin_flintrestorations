<div class="card-body">
    <div class="card-title">
        <!--begin::Search-->
        <div class="d-flex align-items-center position-relative my-1">
            <i class="ki-duotone ki-magnifier fs-3 position-absolute ms-5">
                <span class="path1"></span>
                <span class="path2"></span>
            </i>
            <input type="text" wire:model.live="search" class="form-control form-control-solid w-250px ps-13"
                placeholder="{{ __('Search Country') }}" />
        </div>
        <!--end::Search-->
    </div>
    <div class="table-responsive">
        <table class="table align-middle table-row-dashed fs-6 gy-5" id="kt_table_locations">
            <thead>
                <tr class="text-start text-muted fw-bold fs-7 text-uppercase gs-0">
                    <th class="w-50px pe-2">{{ __('No') }}</th>
                    <th class="min-w-150px">{{ __('Flag') }}</th>
                    <th class="min-w-150px">{{ __('Name') }}</th>
                    <th class="min-w-150px">{{ __('Code') }}</th>
                    <th class="min-w-150px">{{ __('Dialing Code') }}</th>
                    <th class="min-w-100px">{{ __('Actions') }}</th>
                </tr>
            </thead>
            <tbody class="text-gray-600 fw-semibold">
                @forelse ($countries as $country)
                    <tr>
                        <td>{{ $loop->iteration }}</td>
                        {{-- <td>{!! country_flag($country->code) !!}</td> --}}
                        <td>
                            <img src="{{ asset('vendor/blade-flags/country-' . $country->code . '.svg') }}" width="32"
                                height="32" />
                        </td>
                        <td>{{ $country->name }}</td>
                        <td>{{ $country->code }}</td>
                        <td>{{ $country->dialing_code }}</td>
                        <td class="">
                            <div class="d-flex gap-3">
                                <div class="symbol symbol-circle symbol-30px cursor-pointer">
                                    <a href="{{ route('countries.show', $country) }}"
                                        class="symbol-label fs-3 bg-light-success text-success"
                                        title="{{ __('Show Cities') }}">
                                        <i class="fas fa-eye"></i>
                                    </a>
                                </div>

                                <div class="symbol symbol-circle symbol-30px cursor-pointer"
                                    onclick="editCountry({{ $country->id }})">
                                    <span class="symbol-label fs-3 bg-light-success text-success"
                                        title="{{ __('Edit Country') }}">
                                        <i class="fas fa-edit"></i>
                                    </span>
                                </div>

                                <div class="symbol symbol-circle symbol-30px cursor-pointer"
                                    onclick="deleteRecord('country','{{ $country->id }}')">
                                    <span class="symbol-label fs-3 bg-light-success text-success"
                                        title="{{ __('Delete Country') }}">
                                        <i class="fas fa-times"></i>
                                    </span>
                                </div>
                            </div>
                            <form id="country-{{ $country->id }}" action="{{ route('countries.destroy', $country) }}"
                                method="POST">
                                @csrf
                                @method('delete')
                            </form>
                        </td>
                    </tr>
                @empty
                    <tr>
                        <td colspan="4">{{ __('No country found') }}</td>
                    </tr>
                @endforelse
            </tbody>
        </table>
        <div class="d-flex justify-content-end mt-5">
            {{ $countries->links() }}
        </div>
    </div>
</div>
