

   <!--begin::Main column-->
   <div class="d-flex flex-column flex-row-fluid gap-7 gap-lg-10">
      <!--begin::General options-->
      <div class="card card-flush py-4">
         <!--begin::Card header-->
         <div class="card-header">
            <div class="card-title">
               <h2>{{ __("board.general") }}</h2>
            </div>
         </div>
         <!--end::Card header-->
         <!--begin::Card body-->
         <div class="card-body pt-0">
              <!--begin::Scroll-->
   <div class="d-flex flex-column scroll-y me-n7 pe-7" id="kt_modal_update_role_scroll" data-kt-scroll="true" data-kt-scroll-activate="{default: false, lg: true}" data-kt-scroll-max-height="auto" data-kt-scroll-dependencies="#kt_modal_update_role_header" data-kt-scroll-wrappers="#kt_modal_update_role_scroll" data-kt-scroll-offset="300px">
      <!--begin::Input group-->
      <div class="fv-row mb-10">
         <!--begin::Label-->
         <label class="fs-5 fw-bold form-label mb-2">
            <span class="required">{{ __('board.role.name') }}</span>
         </label>
         <!--end::Label-->
         <!--begin::Input-->
         <input class="form-control form-control-solid" placeholder="Enter a role name" name="role_name" value="{{ old('role_name', optional($role ?? null)->name) }}" />
         <!--end::Input-->

      </div>
      <!--end::Input group-->
      <!--begin::Permissions-->
      <div class="fv-row">
         <!--begin::Label-->
         <label class="fs-5 fw-bold form-label mb-2">{{ __('board.role.permissions') }}</label>
         <!--end::Label-->
         <!--begin::Table wrapper-->
         <div class="table-responsive">
            <!--begin::Table-->
            <table class="table align-middle table-row-dashed fs-6 gy-5">
               <!--begin::Table body-->
               <tbody class="text-gray-600 fw-semibold">
                  @foreach ($permissions as $index => $permission)
                     <!--begin::Table row-->
                  <tr>
                     <td class="text-gray-800">{{ $index }}</td>
                     <!--end::Label-->
                     <!--begin::Input group-->
                     <td>
                        <!--begin::Wrapper-->
                        <div class="d-flex">
                           @foreach ($permission as $perm)
                              <!--begin::Checkbox-->
                           <label class="form-check form-check-custom form-check-solid">
                              <input class="form-check-input" type="checkbox" value="{{ $perm->name }}" name="permission[]" {{ isset($role) ? $role->permissions->pluck('name')->contains($perm->name) ? "checked" : "" : "" }}/>
                              <span class="form-check-label">{{ substr($perm->name, strpos($perm->name, '-') + 1) }}</span>
                           </label>


                           <!--end::Checkbox-->
                           @endforeach
                           
                        </div>
                        <!--end::Wrapper-->
                     </td>
                     <!--end::Input group-->
                  </tr>
                  <!--end::Table row-->
                  @endforeach
                  
               
               </tbody>
               <!--end::Table body-->
            </table>
            <!--end::Table-->
         </div>
         <!--end::Table wrapper-->
      </div>
      <!--end::Permissions-->
   </div>
   <!--end::Scroll-->
         <!--end::Card header-->
      </div>


      <!--end::General options-->
      <div class="d-flex justify-content-end">
         <!--begin::Button-->
         <a href="{{ route("subcategory.index") }}" class="btn btn-light me-5">{{ __("board.Cancel") }}</a>
         <!--end::Button-->
         <!--begin::Button-->
         <button type="submit" id="kt_ecommerce_add_category_submit" class="btn btn-primary">
            <span class="indicator-label">{{ __("board.save_changes") }}</span>
         </button>
         <!--end::Button-->
      </div>
   </div>
   <!--end::Main column-->