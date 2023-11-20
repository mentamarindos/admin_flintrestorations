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
                    <th class="min-w-100px pe-2">{{ __('Category') }}</th>
                    <th class="min-w-150px">{{ __('Question') }}</th>
                    <th class="min-w-50px">{{ __('View') }}</th>
                    <th class="min-w-50px">{{ __('Actions') }}</th>
                </tr>
            </thead>
            <tbody class="text-gray-600 fw-semibold">
                @forelse ($faqs as $faq)
                    <tr>
                        <td>{{ $loop->iteration }}</td>
                        <td>{{ $faq->category->name }}</td>
                        <td>
                            <div class="truncate">
                                {{ $faq->question }}
                            </div>
                        </td>

                        <td>
                            <div class="symbol symbol-circle symbol-30px cursor-pointer"
                                wire:click="showFaq({{ $faq->id }})">
                                <span class="symbol-label fs-3 bg-light-success text-success"
                                    title="{{ __('Show FAQ') }}">
                                    <i class="fas fa-eye"></i>
                                </span>
                            </div>
                        </td>
                        <td class="">
                            <div class="d-flex gap-3">
                                <div class="symbol symbol-circle symbol-30px cursor-pointer">
                                    <a href="{{ route('faqs.edit', $faq) }}"
                                        class="symbol-label fs-3 bg-light-success text-success"
                                        title="{{ __('Edit FAQ') }}">
                                        <i class="fas fa-edit"></i>
                                    </a>
                                </div>

                                <div class="symbol symbol-circle symbol-30px cursor-pointer"
                                    onclick="deleteRecord('faq','{{ $faq->id }}')">
                                    <span class="symbol-label fs-3 bg-light-success text-success"
                                        title="{{ __('Delete FAQ') }}">
                                        <i class="fas fa-times"></i>
                                    </span>
                                </div>
                            </div>
                            <form id="faq-{{ $faq->id }}" action="{{ route('faqs.destroy', $faq) }}"
                                method="POST">
                                @csrf
                                @method('delete')
                            </form>
                        </td>
                    </tr>
                @empty
                    <tr>
                        <td colspan="4">{{ __('No record found') }}</td>
                    </tr>
                @endforelse
            </tbody>
        </table>
        <div class="d-flex justify-content-end mt-5">
            {{ $faqs->links() }}
        </div>

    </div>
</div>
