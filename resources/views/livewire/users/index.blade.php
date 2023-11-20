<div class="card-body">
    <div class="card-title">
        <!--begin::Search-->
        <div class="d-flex align-items-center position-relative my-1">
            <i class="ki-duotone ki-magnifier fs-3 position-absolute ms-5">
                <span class="path1"></span>
                <span class="path2"></span>
            </i>
            <input type="text" wire:model.live="search" class="form-control form-control-solid w-250px ps-13"
                placeholder="{{ __('Search user') }}" />
        </div>
        <!--end::Search-->
    </div>
    <div class="table-responsive">
        <table class="table align-middle table-row-dashed fs-6 gy-5" id="kt_table_users">
            <thead>
                <tr class="text-start text-muted fw-bold fs-7 text-uppercase gs-0">
                    <th class="w-10px pe-2">{{ __('No') }}</th>
                    <th class="min-w-100px">{{ __('User') }}</th>
                    <th class="min-w-125px">{{ __('Phone Number') }}</th>
                    <th class="min-w-125px">{{ __('Email Verified') }}</th>
                    <th class="min-w-125px">{{ __('Phone Verified') }}</th>
                    <th class="min-w-150px">{{ __('Identity Verified') }}</th>
                    <th class="min-w-125px">{{ __('Joined Date') }}</th>
                    <th class="text-end min-w-100px">{{ __('Actions') }}</th>
                </tr>
            </thead>
            <tbody class="text-gray-600 fw-semibold">
                @forelse ($users as $user)
                    <tr>
                        <td>{{ $loop->iteration }}</td>
                        <td class="d-flex align-items-center">
                            <div class="symbol symbol-circle symbol-50px overflow-hidden me-3">
                                <a href="{{ route('users.show', $user) }}">
                                    @php
                                        $colour = random_colour();
                                    @endphp
                                    <div
                                        class="symbol-label fs-3 bg-light-{{ $colour }} text-{{ $colour }}">
                                        {{ name_alphabetic($user->name) }}</div>
                                </a>
                            </div>
                            <div class="d-flex flex-column">
                                <a href="{{ route('users.show', $user) }}"
                                    class="text-gray-800 text-hover-primary mb-1">{{ $user->name }}</a>
                                <span>{{ $user->email }}</span>
                            </div>
                        </td>
                        <td>{{ $user->phone }}</td>
                        <td>
                            <div
                                class="badge {{ $user->email_verified_at ? 'badge-success' : 'badge-danger' }} fw-bold">
                                {{ $user->email_verified_at ? __('Yes') : __('No') }}</div>
                        </td>
                        <td>
                            <div
                                class="badge {{ $user->phone_verified_at ? 'badge-success' : 'badge-danger' }} fw-bold">
                                {{ $user->phone_verified_at ? __('Yes') : __('No') }}</div>
                        </td>
                        <td>
                            <div class="badge badge-danger fw-bold">{{ __('No') }}</div>
                        </td>
                        <td>{{ $user->created_at->format('F j \, Y h:i A') }}</td>
                        <td class="text-end">
                            <a href="#" class="btn btn-light btn-active-light-primary btn-flex btn-center btn-sm"
                                data-kt-menu-trigger="click" data-kt-menu-placement="bottom-end">Actions
                                <i class="ki-duotone ki-down fs-5 ms-1"></i></a>
                            <!--begin::Menu-->
                            <div class="menu menu-sub menu-sub-dropdown menu-column menu-rounded menu-gray-600 menu-state-bg-light-primary fw-semibold fs-7 w-125px py-4"
                                data-kt-menu="true">
                                <div class="menu-item px-3">
                                    <a href="{{ route('users.show', $user) }}"
                                        class="menu-link px-3">{{ __('Show') }}</a>
                                </div>
                                <div class="menu-item px-3">
                                    {{-- <a href="{{ route('users.edit', $user) }}"
                                        class="menu-link px-3">{{ __('Edit') }}</a> --}}
                                    <span class="menu-link px-3"
                                        onclick="editModel('{{ $user->id }}')">{{ __('Edit') }}</span>
                                </div>
                                {{-- <div class="menu-item px-3">
                                    <span class="menu-link px-3"
                                        onclick="deleteRecord('user','{{ $user->id }}')">{{ __('Delete') }}</span>
                                    <form id="user-{{ $user->id }}" action="{{ route('users.destroy', $user) }}"
                                        method="POST">
                                        @csrf
                                        @method('delete')
                                    </form>
                                </div> --}}
                            </div>
                            <!--end::Menu-->
                        </td>
                    </tr>
                @empty
                    <tr>
                        <td colspan="8">{{ __('No user found') }}</td>
                    </tr>
                @endforelse
            </tbody>
        </table>
        <div class="d-flex justify-content-end mt-5">
            {{ $users->links() }}
        </div>

    </div>
</div>
