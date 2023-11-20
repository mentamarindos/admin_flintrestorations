 <!--begin::Form-->
 <form id="kt_modal_add_city_form" class="form" wire:submit="addCity">
     <!--begin::Scroll-->
     <div class="d-flex flex-column scroll-y px-5 px-lg-10" id="kt_modal_add_city_scroll" data-kt-scroll="true"
         data-kt-scroll-activate="true" data-kt-scroll-max-height="auto"
         data-kt-scroll-dependencies="#kt_modal_add_city_header" data-kt-scroll-wrappers="#kt_modal_add_city_scroll"
         data-kt-scroll-offset="300px">

         <!--begin::Input group-->
         <div class="fv-row mb-7">
             <!--begin::Label-->
             <label class="required fw-semibold fs-6 mb-2">{{ __('City Name') }}</label>
             <!--end::Label-->
             <!--begin::Input-->
             <input type="text" name="name" wire:model="name"
                 class="form-control form-control-solid mb-3 mb-lg-0 @error('name') is-invalid @enderror"
                 placeholder="{{ __('City Name') }}" autofocus />
             @error('name')
                 <span class="invalid-feedback" role="alert">
                     <strong>{{ $message }}</strong>
                 </span>
             @enderror
             <!--end::Input-->
         </div>
         <!--end::Input group-->
     </div>
     <!--end::Scroll-->
     <!--begin::Actions-->
     <div class="text-center pt-10">
         <button type="reset" class="btn btn-light me-3" data-bs-dismiss="modal">{{ __('Discard') }}</button>
         <button type="submit" class="btn btn-primary" data-kt-users-modal-action="submit">
             <span class="indicator-label">{{ __('Create City') }}</span>
         </button>
     </div>
     <!--end::Actions-->
 </form>
 <!--end::Form-->
