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
        <table class="table align-middle table-row-dashed fs-6 gy-5" id="kt_table_testimonials">
            <thead>
                <tr class="text-start text-muted fw-bold fs-7 text-uppercase gs-0">
                    <th class="w-10px pe-2">{{ __('No') }}</th>
                    <th class="min-w-100px">{{ __('User') }}</th>
                    <th class="min-w-125px">{{ __('Stars') }}</th>
                    <th class="min-w-125px">{{ __('Feedback') }}</th>
                    <th class="min-w-125px">{{ __('Feedback Date') }}</th>
                    <th class="min-w-100px">{{ __('Actions') }}</th>
                </tr>
            </thead>
            <tbody class="text-gray-600 fw-semibold">
                @forelse ($testimonials as $item)
                    <tr>
                        <td>{{ $loop->iteration }}</td>
                        <td class="d-flex align-items-center">
                            <div class="symbol symbol-circle symbol-50px me-3">
                                <img src="{{ $item->photo }}" alt="User Photo">
                            </div>
                            <div class="d-flex flex-column">
                                <span class="text-gray-800 text-hover-primary mb-1">{{ $item->name }}</span>
                            </div>
                        </td>
                        <td>{{ $item->stars }}</td>

                        <td>
                            <div class="symbol symbol-circle symbol-30px cursor-pointer"
                                wire:click="showFeedback({{ $item->id }})">
                                <span class="symbol-label fs-3 bg-light-success text-success"
                                    title="{{ __('Show Feedback') }}">
                                    <i class="fas fa-eye"></i>
                                </span>
                            </div>
                        </td>
                        <td>{{ $item->feedback_date->toFormattedDateString() }}</td>
                        <td class="">
                            <div class="d-flex gap-3">
                                <div class="symbol symbol-circle symbol-30px cursor-pointer">
                                    <a href="{{ route('testimonials.edit', $item) }}"
                                        class="symbol-label fs-3 bg-light-success text-success"
                                        title="{{ __('Edit Testimonial') }}">
                                        <i class="fas fa-edit"></i>
                                    </a>
                                </div>

                                <div class="symbol symbol-circle symbol-30px cursor-pointer"
                                    onclick="deleteRecord('testimonial','{{ $item->id }}')">
                                    <span class="symbol-label fs-3 bg-light-success text-success"
                                        title="{{ __('Delete Testimonial') }}">
                                        <i class="fas fa-times"></i>
                                    </span>
                                </div>
                            </div>
                            <form id="testimonial-{{ $item->id }}"
                                action="{{ route('testimonials.destroy', $item) }}" method="POST">
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
            {{ $testimonials->links() }}
        </div>

    </div>
</div>
