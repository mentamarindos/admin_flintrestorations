<div class="card-body">
    <div class="table-responsive">
        <table class="table align-middle table-row-dashed fs-6 gy-5" id="kt_table_faqs">
            <thead>
                <tr class="text-start text-muted fw-bold fs-7 text-uppercase gs-0">
                    <th class="w-50px pe-2">{{ __('No') }}</th>
                    <th class="min-w-150px">{{ __('Name') }}</th>
                    <th class="min-w-150px">{{ __('Image') }}</th>
                    <th class="min-w-50px">{{ __('Actions') }}</th>
                </tr>
            </thead>
            <tbody class="text-gray-600 fw-semibold">
                @forelse ($amenities as $amenity)
                    <tr>
                        <td>{{ $loop->iteration }}</td>
                        <td>{{ $amenity->name }}</td>
                        <td>
                            <div class="symbol symbol-circle symbol-40px me-3">
                                <img src="{{ $amenity->photo }}" alt="Amenity Photo">
                            </div>
                        </td>
                        <td class="">
                            <div class="d-flex gap-3">
                                <div class="symbol symbol-circle symbol-30px cursor-pointer"
                                    wire:click="showAmenity({{ $amenity->id }})">
                                    <span class="symbol-label fs-3 bg-light-success text-success"
                                        title="{{ __('Show Amenity') }}">
                                        <i class="fas fa-eye"></i>
                                    </span>
                                </div>

                                <div class="symbol symbol-circle symbol-30px cursor-pointer">
                                    <a href="{{ route('amenities.edit', $amenity) }}"
                                        class="symbol-label fs-3 bg-light-success text-success"
                                        title="{{ __('Edit Amenity') }}">
                                        <i class="fas fa-edit"></i>
                                    </a>
                                </div>

                                <div class="symbol symbol-circle symbol-30px cursor-pointer"
                                    onclick="deleteRecord('amenity','{{ $amenity->id }}')">
                                    <span class="symbol-label fs-3 bg-light-success text-success"
                                        title="{{ __('Delete Amenity') }}">
                                        <i class="fas fa-times"></i>
                                    </span>
                                </div>
                            </div>
                            <form id="amenity-{{ $amenity->id }}" action="{{ route('amenities.destroy', $amenity) }}"
                                method="POST">
                                @csrf
                                @method('delete')
                            </form>
                        </td>
                    </tr>
                @empty
                    <tr>
                        <td colspan="4">{{ __('No amenity found') }}</td>
                    </tr>
                @endforelse
            </tbody>
        </table>
        <div class="d-flex justify-content-end mt-5">
            {{ $amenities->links() }}
        </div>
    </div>
</div>
