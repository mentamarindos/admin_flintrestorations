<div class="form-group mb-6">
    <div class="d-flex justify-content-between">
        <label class="required fw-semibold fs-6 mb-2">{{ __('Specification') }}</label>
        <div class="symbol symbol-circle symbol-25px cursor-pointer" wire:click="add">
            <span class="symbol-label fs-3 bg-light-primary text-primary" title="{{ __('Create New') }}">
                <i class="fas fa-plus"></i>
            </span>
        </div>
    </div>

    @foreach ($specifications as $idx => $item)
        <div class="d-flex gap-3 align-items-center mt-5">
            <input type="text" class="form-control form-control-solid flex-grow-1"
                placeholder="{{ __('Specification') }}" name="specifications[]" value="{{ $item }}" required>
            <div class="symbol symbol-circle symbol-25px cursor-pointer" wire:click="delete({{ $idx }})">
                <span class="symbol-label fs-3 bg-light-danger text-danger" title="{{ __('Delete') }}">
                    <i class="fas fa-times"></i>
                </span>
            </div>
        </div>
    @endforeach

</div>
