@extends('layouts.app')

@section('title', 'Add Users')

@push('styles')
    <link href="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/css/select2.min.css" rel="stylesheet" />
    <style>
        .select2-container .select2-selection--single {
            height: 42px !important;
        }
    </style>
@endpush

@section('content')

    @include('common.breadcrumbs', [
        'title' => 'Add Users',
        'btn_text' => 'Back',
        'btn_link' => route('users.index'),
    ])
    <div id="kt_app_content" class="app-content flex-column-fluid">
        <div id="kt_app_content_container" class="app-container container-fluid">
            {{-- Alert Messages --}}
            @include('common.alert')

            <div class="card shadow mb-4">
                <div class="card-header card-header-height d-flex align-items-center">
                    <h6 class="font-weight-bold text-primary mb-0 pb-0">Add New User</h6>
                </div>

                <form method="POST" action="{{ route('users.store') }}">
                    @csrf
                    <div class="card-body">
                        <div class="form-group row">

                            {{-- First Name --}}
                            <div class="col-sm-6 mb-6">
                                <label><span style="color:red;">*</span>First Name</label>
                                <input type="text"
                                    class="form-control form-control-user @error('first_name') is-invalid @enderror"
                                    id="exampleFirstName" placeholder="First Name" name="first_name"
                                    value="{{ old('first_name') }}">

                                @error('first_name')
                                    <span class="text-danger">{{ $message }}</span>
                                @enderror
                            </div>

                            {{-- Last Name --}}
                            <div class="col-sm-6 mb-6">
                                <label><span style="color:red;">*</span>Last Name</label>
                                <input type="text"
                                    class="form-control form-control-user @error('last_name') is-invalid @enderror"
                                    id="exampleLastName" placeholder="Last Name" name="last_name"
                                    value="{{ old('last_name') }}">

                                @error('last_name')
                                    <span class="text-danger">{{ $message }}</span>
                                @enderror
                            </div>

                            {{-- Email --}}
                            <div class="col-sm-6 mb-6">
                                <label><span style="color:red;">*</span>Email</label>
                                <input type="email"
                                    class="form-control form-control-user @error('email') is-invalid @enderror"
                                    id="exampleEmail" placeholder="Email" name="email" value="{{ old('email') }}">

                                @error('email')
                                    <span class="text-danger">{{ $message }}</span>
                                @enderror
                            </div>

                            {{-- Mobile Number --}}
                            <div class="col-sm-6 mb-6">
                                <label><span style="color:red;">*</span>Mobile Number</label>
                                <input type="text"
                                    class="form-control form-control-user @error('mobile_number') is-invalid @enderror"
                                    id="exampleMobile" placeholder="Mobile Number" name="mobile_number"
                                    value="{{ old('mobile_number') }}">

                                @error('mobile_number')
                                    <span class="text-danger">{{ $message }}</span>
                                @enderror
                            </div>

                            {{-- Role --}}
                            <div class="col-sm-6 mb-6">
                                <label><span style="color:red;">*</span>Role</label>
                                <select id="role"
                                    class="form-select text-capitalize @error('role_id') is-invalid @enderror"
                                    name="role_id">
                                    <option selected disabled>Select Role</option>
                                    @foreach ($roles as $role)
                                        <option value="{{ $role->id }}" @selected(old('role_id') == $role->id)>
                                            {{ $role->name }}
                                        </option>
                                    @endforeach
                                </select>
                                @error('role_id')
                                    <span class="text-danger">{{ $message }}</span>
                                @enderror
                            </div>

                            {{-- Link Trunk --}}
                            <div id="linkTruck" class="col-sm-6 mb-6 @if (old('role_id') != 4) d-none @endif">
                                <label>Link Truck</label>
                                <select id="truck" class="form-select @error('truck_id') is-invalid @enderror"
                                    name="truck_id">
                                    <option selected disabled>Select Truck</option>
                                    @foreach ($trucks as $truck)
                                        <option value="{{ $truck->id }}" @selected(old('truck_id') == $truck->id)>
                                            {{ $truck->name }}
                                        </option>
                                    @endforeach
                                </select>
                                <small class="text-primary">If you want to link user to already created truck then choose a
                                    truck. Otherwise new
                                    truck will be created</small>
                                @error('truck_id')
                                    <span class="text-danger">{{ $message }}</span>
                                @enderror
                            </div>

                            {{-- Status --}}
                            <div class="col-sm-6 mb-6">
                                <label> <span style="color:red;">*</span>Status</label>
                                <select class="form-control form-control-user @error('status') is-invalid @enderror"
                                    name="status">
                                    <option selected disabled>Select Status</option>
                                    <option value="1" selected>Active</option>
                                    <option value="0">Inactive</option>
                                </select>
                                @error('status')
                                    <span class="text-danger">{{ $message }}</span>
                                @enderror
                            </div>

                        </div>
                    </div>

                    <div class="card-footer">
                        <button type="submit" class="btn btn-success btn-user float-right mb-3">Save</button>
                        <a class="btn btn-primary float-right mr-3 mb-3" href="{{ route('users.index') }}">Cancel</a>
                    </div>
                </form>
            </div>

        </div>
    </div>

@endsection

@push('scripts')
    <script src="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/js/select2.min.js"></script>
    <script>
        $(document).ready(function() {
            $('#truck').select2();

            $('#role').on('change', function(e) {
                if (e.target.value == 4) {
                    $('#linkTruck').removeClass('d-none')
                } else {
                    $('#linkTruck').addClass('d-none')
                }
            })
        });
    </script>
@endpush
