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
        <table class="table align-middle table-row-dashed fs-6 gy-5" id="kt_table_users">
            <thead>
                <tr class="text-start text-muted fw-bold fs-7 text-uppercase gs-0">
                    <th class="w-10px pe-2">{{ __('No') }}</th>
                    <th class="min-w-100px">{{ __('User') }}</th>
                    <th class="min-w-125px">{{ __('Country') }}</th>
                    <th class="min-w-125px">{{ __('Status') }}</th>
                    <th class="min-w-125px">{{ __('Reason') }}</th>
                    <th class="min-w-100px">{{ __('Actions') }}</th>
                </tr>
            </thead>
            <tbody class="text-gray-600 fw-semibold">
                @forelse ($requests as $request)
                    <tr>
                        <td>{{ $loop->iteration }}</td>
                        <td class="d-flex align-items-center">
                            <div class="symbol symbol-circle symbol-50px overflow-hidden me-3">
                                <a href="{{ route('users.show', $request->user) }}">
                                    @php
                                        $colour = random_colour();
                                    @endphp
                                    <div
                                        class="symbol-label fs-3 bg-light-{{ $colour }} text-{{ $colour }}">
                                        {{ name_alphabetic($request->user->name) }}</div>
                                </a>
                            </div>
                            <div class="d-flex flex-column">
                                <a href="{{ route('users.show', $request) }}"
                                    class="text-gray-800 text-hover-primary mb-1">{{ $request->user->name }}</a>
                                <span>{{ $request->user->email }}</span>
                            </div>
                        </td>
                        <td>{{ $request->issue_country }}</td>
                        <td class="">
                            <div class="text-capitalize badge {{ badge_colour($request->result) }}">
                                {{ $request->result }}
                            </div>
                        </td>
                        <td>
                            @if ($request->reason)
                                <div class="symbol symbol-circle symbol-30px cursor-pointer"
                                    onclick="showComment('{{ route('kyc.show', $request) }}')">
                                    <span class="symbol-label fs-3 bg-light-success text-success"
                                        title="{{ __('Show Reason') }}">
                                        <i class="fas fa-eye"></i>
                                    </span>
                                </div>
                            @endif

                        </td>
                        <td class="">
                            <div class="d-flex gap-3">
                                <div class="symbol symbol-circle symbol-30px cursor-pointer">
                                    <a href="{{ route('kyc.edit', $request) }}"
                                        class="symbol-label fs-3 bg-light-success text-success"
                                        title="{{ __('Show Request') }}">
                                        <i class="fas fa-edit"></i>
                                    </a>
                                </div>
                            </div>
                        </td>
                    </tr>
                @empty
                    <tr>
                        <td colspan="8">{{ __('No request') }}</td>
                    </tr>
                @endforelse
            </tbody>
        </table>
        <div class="d-flex justify-content-end mt-5">
            {{ $requests->links() }}
        </div>

    </div>
</div>
