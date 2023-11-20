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
        <table class="table align-middle table-row-dashed fs-6 gy-5" id="kt_table_glossaries">
            <thead>
                <tr class="text-start text-muted fw-bold fs-7 text-uppercase gs-0">
                    <th class="w-10px pe-2">{{ __('No') }}</th>
                    <th class="min-w-75px">{{ __('Word') }}</th>
                    <th class="min-w-150px">{{ __('Description') }}</th>
                    <th class="min-w-50px">{{ __('View') }}</th>
                    <th class="min-w-50px">{{ __('Actions') }}</th>
                </tr>
            </thead>
            <tbody class="text-gray-600 fw-semibold">
                @forelse ($glossaries as $glossary)
                    <tr>
                        <td>{{ $loop->iteration }}</td>
                        <td>{{ $glossary->word }}</td>
                        <td>
                            <div class="truncate">
                                {{ $glossary->description }}
                            </div>
                        </td>

                        <td>
                            <div class="symbol symbol-circle symbol-30px cursor-pointer"
                                wire:click="showGlossary({{ $glossary->id }})">
                                <span class="symbol-label fs-3 bg-light-success text-success"
                                    title="{{ __('Show Glossary') }}">
                                    <i class="fas fa-eye"></i>
                                </span>
                            </div>
                        </td>
                        <td class="">
                            <div class="d-flex gap-3">
                                <div class="symbol symbol-circle symbol-30px cursor-pointer">
                                    <a href="{{ route('glossaries.edit', $glossary) }}"
                                        class="symbol-label fs-3 bg-light-success text-success"
                                        title="{{ __('Edit Glossary') }}">
                                        <i class="fas fa-edit"></i>
                                    </a>
                                </div>

                                <div class="symbol symbol-circle symbol-30px cursor-pointer"
                                    onclick="deleteRecord('glossary','{{ $glossary->id }}')">
                                    <span class="symbol-label fs-3 bg-light-success text-success"
                                        title="{{ __('Delete Glossary') }}">
                                        <i class="fas fa-times"></i>
                                    </span>
                                </div>
                            </div>
                            <form id="glossary-{{ $glossary->id }}"
                                action="{{ route('glossaries.destroy', $glossary) }}" method="POST">
                                @csrf
                                @method('delete')
                            </form>
                        </td>
                    </tr>
                @empty
                    <tr>
                        <td colspan="5">{{ __('No record found') }}</td>
                    </tr>
                @endforelse
            </tbody>
        </table>
        <div class="d-flex justify-content-end mt-5">
            {{ $glossaries->links() }}
        </div>

    </div>
</div>
