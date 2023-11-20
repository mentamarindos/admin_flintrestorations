<div class="card-body">
    <div class="card-title">
        <!--begin::Search-->
        <div class="d-flex align-items-center position-relative my-1">
            <i class="ki-duotone ki-magnifier fs-3 position-absolute ms-5">
                <span class="path1"></span>
                <span class="path2"></span>
            </i>
            <input type="text" wire:model.live="search" class="form-control form-control-solid w-250px ps-13"
                placeholder="{{ __('Search Property') }}" />
        </div>
        <!--end::Search-->
    </div>
    <div class="table-responsive">
        <table class="table align-middle table-row-dashed fs-6 gy-5" id="kt_table_properties">
            <thead>
                <tr class="text-start text-muted fw-bold fs-7 text-uppercase gs-0">
                    <th class="w-50px pe-2">{{ __('No') }}</th>
                    <th class="min-w-100px">{{ __('Name') }}</th>
                    <th class="min-w-150px">{{ __('Price') }}</th>
                    <th class="min-w-150px">{{ __('Country') }}</th>
                    <th class="min-w-150px">{{ __('Category') }}</th>
                    <th class="min-w-50px">{{ __('Actions') }}</th>
                </tr>
            </thead>
            <tbody class="text-gray-600 fw-semibold">
                @forelse ($properties as $property)
                    <tr>
                        <td>{{ $loop->iteration }}</td>
                        <td>{{ $property->name }}</td>
                        <td>${{ currency_format($property->price) }}</td>
                        <td>{{ $property->country->name }}</td>
                        <td>{{ $property->category?->name ?? '-' }}</td>
                        <td class="">
                            <div class="d-flex gap-3">
                                <div class="symbol symbol-circle symbol-30px cursor-pointer">
                                    <a href="{{ route('properties.show', $property) }}"
                                        class="symbol-label fs-3 bg-light-success text-success"
                                        title="{{ __('Show Property') }}">
                                        <i class="fas fa-eye"></i>
                                    </a>
                                </div>
                                <div class="symbol symbol-circle symbol-30px cursor-pointer">
                                    <a href="{{ route('properties.edit', $property) }}"
                                        class="symbol-label fs-3 bg-light-success text-success"
                                        title="{{ __('Edit Property') }}">
                                        <i class="fas fa-edit"></i>
                                    </a>
                                </div>

                                <div class="symbol symbol-circle symbol-30px cursor-pointer"
                                    onclick="deleteRecord('property','{{ $property->id }}')">
                                    <span class="symbol-label fs-3 bg-light-success text-success"
                                        title="{{ __('Delete Property') }}">
                                        <i class="fas fa-times"></i>
                                    </span>
                                </div>
                            </div>
                            <form id="property-{{ $property->id }}"
                                action="{{ route('properties.destroy', $property) }}" method="POST">
                                @csrf
                                @method('delete')
                            </form>
                        </td>
                    </tr>
                @empty
                    <tr>
                        <td colspan="4">{{ __('No property found') }}</td>
                    </tr>
                @endforelse
            </tbody>
        </table>
        <div class="d-flex justify-content-end mt-5">
            {{ $properties->links() }}
        </div>

    </div>
</div>
