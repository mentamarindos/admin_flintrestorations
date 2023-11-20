<div class="card-body">
    <div class="card-title">
        <!--begin::Search-->
        <div class="d-flex align-items-center position-relative my-1">
            <i class="ki-duotone ki-magnifier fs-3 position-absolute ms-5">
                <span class="path1"></span>
                <span class="path2"></span>
            </i>
            <input type="text" wire:model.live="search" class="form-control form-control-solid w-250px ps-13"
                placeholder="{{ __('Search') }}" />
        </div>
        <!--end::Search-->
    </div>
    <div class="table-responsive">
        <table class="table align-middle table-row-dashed fs-6 gy-5" id="kt_table_faqs">
            <thead>
                <tr class="text-start text-muted fw-bold fs-7 text-uppercase gs-0">
                    <th class="w-10px pe-2">{{ __('No') }}</th>
                    <th class="min-w-100px pe-2">{{ __('User') }}</th>
                    <th class="min-w-100px pe-2">{{ __('Location') }}</th>
                    <th class="min-w-100px">{{ __('Bedrooms') }}</th>
                    <th class="min-w-150px">{{ __('Address') }}</th>
                    <th class="min-w-50px">{{ __('Actions') }}</th>
                </tr>
            </thead>
            <tbody class="text-gray-600 fw-semibold">
                @forelse ($requests as $request)
                    <tr>
                        <td>{{ $loop->iteration }}</td>
                        <td class="d-flex align-items-center">
                            <div class="symbol symbol-circle symbol-50px overflow-hidden me-3">
                                @php
                                    $colour = random_colour();
                                @endphp
                                <div class="symbol-label fs-3 bg-light-{{ $colour }} text-{{ $colour }}">
                                    {{ name_alphabetic($request->name) }}</div>
                            </div>
                            <div class="d-flex flex-column">
                                <span class="text-gray-800 text-hover-primary mb-1">{{ $request->name }}</span>
                                <span>{{ $request->email }}</span>
                            </div>
                        </td>
                        <td>{{ $request->location->name }}</td>
                        <td>{{ $request->bedrooms }}</td>
                        <td>
                            <div class="truncate">
                                {{ $request->address }}
                            </div>
                        </td>
                        <td class="">
                            <div class="d-flex gap-3">
                                <div class="symbol symbol-circle symbol-30px cursor-pointer"
                                    wire:click="showRequest({{ $request->id }})">
                                    <span class="symbol-label fs-3 bg-light-success text-success"
                                        title="{{ __('Show Request') }}">
                                        <i class="fas fa-eye"></i>
                                    </span>
                                </div>

                                <div class="symbol symbol-circle symbol-30px cursor-pointer"
                                    onclick="deleteRecord('request','{{ $request->id }}')">
                                    <span class="symbol-label fs-3 bg-light-success text-success"
                                        title="{{ __('Delete Request') }}">
                                        <i class="fas fa-times"></i>
                                    </span>
                                </div>
                            </div>
                            <form id="request-{{ $request->id }}" action="{{ route('sellings.destroy', $request) }}"
                                method="POST">
                                @csrf
                                @method('delete')
                            </form>
                        </td>
                    </tr>
                @empty
                    <tr>
                        <td colspan="6">{{ __('No record found') }}</td>
                    </tr>
                @endforelse
            </tbody>
        </table>
        <div class="d-flex justify-content-end mt-5">
            {{ $requests->links() }}
        </div>

    </div>
</div>
