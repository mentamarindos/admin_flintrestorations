 <!--begin::Form-->
 <form id="kt_modal_add_user_form" class="form" wire:submit="addUser" method="POST">
     @csrf
     <!--begin::Scroll-->
     <div class="d-flex flex-column scroll-y px-5 px-lg-10" id="kt_modal_add_user_scroll" data-kt-scroll="true"
         data-kt-scroll-activate="true" data-kt-scroll-max-height="auto"
         data-kt-scroll-dependencies="#kt_modal_add_user_header" data-kt-scroll-wrappers="#kt_modal_add_user_scroll"
         data-kt-scroll-offset="300px">
         <!--begin::Input group-->
         {{-- <div class="fv-row mb-7">
            <!--begin::Label-->
            <label class="d-block fw-semibold fs-6 mb-5">Avatar</label>
            <!--end::Label-->
            <!--begin::Image placeholder-->
            <style>
                .image-input-placeholder {
                    background-image: url('assets/media/svg/files/blank-image.svg');
                }

                [data-bs-theme="dark"] .image-input-placeholder {
                    background-image: url('assets/media/svg/files/blank-image-dark.svg');
                }
            </style>
            <!--end::Image placeholder-->
            <!--begin::Image input-->
            <div class="image-input image-input-outline image-input-placeholder"
                data-kt-image-input="true">
                <!--begin::Preview existing avatar-->
                <div class="image-input-wrapper w-125px h-125px"
                    style="background-image: url(assets/media/avatars/300-6.jpg);"></div>
                <!--end::Preview existing avatar-->
                <!--begin::Label-->
                <label
                    class="btn btn-icon btn-circle btn-active-color-primary w-25px h-25px bg-body shadow"
                    data-kt-image-input-action="change" data-bs-toggle="tooltip" title="Change avatar">
                    <i class="ki-duotone ki-pencil fs-7">
                        <span class="path1"></span>
                        <span class="path2"></span>
                    </i>
                    <!--begin::Inputs-->
                    <input type="file" name="avatar" accept=".png, .jpg, .jpeg" />
                    <input type="hidden" name="avatar_remove" />
                    <!--end::Inputs-->
                </label>
                <!--end::Label-->
                <!--begin::Cancel-->
                <span
                    class="btn btn-icon btn-circle btn-active-color-primary w-25px h-25px bg-body shadow"
                    data-kt-image-input-action="cancel" data-bs-toggle="tooltip" title="Cancel avatar">
                    <i class="ki-duotone ki-cross fs-2">
                        <span class="path1"></span>
                        <span class="path2"></span>
                    </i>
                </span>
                <!--end::Cancel-->
                <!--begin::Remove-->
                <span
                    class="btn btn-icon btn-circle btn-active-color-primary w-25px h-25px bg-body shadow"
                    data-kt-image-input-action="remove" data-bs-toggle="tooltip" title="Remove avatar">
                    <i class="ki-duotone ki-cross fs-2">
                        <span class="path1"></span>
                        <span class="path2"></span>
                    </i>
                </span>
                <!--end::Remove-->
            </div>
            <!--end::Image input-->
            <!--begin::Hint-->
            <div class="form-text">Allowed file types: png, jpg, jpeg.</div>
            <!--end::Hint-->
        </div> --}}
         <!--end::Input group-->
         <!--begin::Input group-->
         <div class="fv-row mb-7">
             <!--begin::Label-->
             <label class="required fw-semibold fs-6 mb-2">{{ __('Full Name') }}</label>
             <!--end::Label-->
             <!--begin::Input-->
             <input type="text" name="name" wire:model="name"
                 class="form-control form-control-solid mb-3 mb-lg-0 @error('name') is-invalid @enderror"
                 placeholder="{{ __('Full Name') }}" />
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
             <label class="required fw-semibold fs-6 mb-2">{{ __('Email Address') }}</label>
             <!--end::Label-->
             <!--begin::Input-->
             <input type="email" name="email" wire:model="email"
                 class="form-control form-control-solid mb-3 mb-lg-0 @error('email') is-invalid @enderror"
                 placeholder="example@domain.com" />
             @error('email')
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
             <label class="required fw-semibold fs-6 mb-2">{{ __('Phone Number') }}</label>
             <!--end::Label-->
             <!--begin::Input-->
             <input type="text" name="phone" wire:model="phone"
                 class="form-control form-control-solid mb-3 mb-lg-0 @error('phone') is-invalid @enderror"
                 placeholder="{{ __('Phone Number') }}" />
             @error('phone')
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
             <label class="required fw-semibold fs-6 mb-2">{{ __('Password') }}</label>
             <!--end::Label-->
             <!--begin::Input-->
             <input type="password" name="password" wire:model="password"
                 class="form-control form-control-solid mb-3 mb-lg-0 @error('password') is-invalid @enderror"
                 placeholder="********" />
             @error('password')
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
             <label class="required fw-semibold fs-6 mb-2">{{ __('Confrim Password') }}</label>
             <!--end::Label-->
             <!--begin::Input-->
             <input type="password" name="password_confirmation" wire:model="password_confirmation"
                 class="form-control form-control-solid mb-3 mb-lg-0 @error('phone') is-invalid @enderror"
                 placeholder="********" />
             <!--end::Input-->
         </div>
         <!--end::Input group-->
     </div>
     <!--end::Scroll-->
     <!--begin::Actions-->
     <div class="text-center pt-10">
         <button type="reset" class="btn btn-light me-3" data-bs-dismiss="modal">{{ __('Discard') }}</button>
         <button type="submit" class="btn btn-primary" data-kt-users-modal-action="submit">
             <span class="indicator-label">{{ __('Create User') }}</span>
         </button>
     </div>
     <!--end::Actions-->
 </form>
 <!--end::Form-->
