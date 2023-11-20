 <!--begin::Form-->
 <form id="kt_modal_update_country_form" class="form" wire:submit="updateCountry" method="POST">
     @csrf
     @method('put')
     <!--begin::Scroll-->
     <div class="d-flex flex-column scroll-y px-5 px-lg-10" id="kt_modal_add_country_scroll" data-kt-scroll="true"
         data-kt-scroll-activate="true" data-kt-scroll-max-height="auto"
         data-kt-scroll-dependencies="#kt_modal_add_country_header"
         data-kt-scroll-wrappers="#kt_modal_add_country_scroll" data-kt-scroll-offset="300px">

         <!--begin::Input group-->
         <div class="fv-row mb-7">
             <!--begin::Label-->
             <label class="required fw-semibold fs-6 mb-2">{{ __('Country Name') }}</label>
             <!--end::Label-->
             <!--begin::Input-->
             <input type="text" name="name" wire:model="name"
                 class="form-control form-control-solid mb-3 mb-lg-0 @error('name') is-invalid @enderror"
                 placeholder="{{ __('Country Name') }}" />
             @error('name')
                 <span class="invalid-feedback" role="alert">
                     <strong>{{ $message }}</strong>
                 </span>
             @enderror
             <!--end::Input-->
         </div>
         <!--end::Input group-->

         <!--begin::Input group-->
         <div class="fv-row mb-7">
             <!--begin::Label-->
             <label class="required fw-semibold fs-6 mb-2">{{ __('Country Code') }}</label>
             <!--end::Label-->
             <!--begin::Input-->
             <input type="text" name="code" wire:model="code"
                 class="form-control form-control-solid mb-3 mb-lg-0 @error('code') is-invalid @enderror"
                 placeholder="{{ __('Country Code') }}" />
             <small class="text-primary">{{ __('Country short code like USA, UK') }}</small>
             @error('code')
                 <span class="invalid-feedback" role="alert">
                     <strong>{{ $message }}</strong>
                 </span>
             @enderror
             <!--end::Input-->
         </div>
         <!--end::Input group-->

         <!--begin::Input group-->
         <div class="fv-row mb-7">
             <!--begin::Label-->
             <label class="required fw-semibold fs-6 mb-2">{{ __('Dialing Code') }}</label>
             <!--end::Label-->
             <!--begin::Input-->
             <input type="text" name="dialing_code" wire:model="dialing_code"
                 class="form-control form-control-solid mb-3 mb-lg-0 @error('dialing_code') is-invalid @enderror"
                 placeholder="{{ __('Dialing Code') }}" />
             <small class="text-primary">{{ __('Dialing code of country with +') }}</small>
             @error('dialing_code')
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
             <span class="indicator-label">{{ __('Update Country') }}</span>
         </button>
     </div>
     <!--end::Actions-->
 </form>
 <!--end::Form-->
