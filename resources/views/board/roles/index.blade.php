@extends("board.layouts.app")
@section('style')
<link href="{{ asset("assets/plugins/custom/datatables/datatables.bundle.css") }}" rel="stylesheet" type="text/css" />
@endsection

@section('script')
<script src="{{ asset("assets/plugins/custom/datatables/datatables.bundle.js") }}"></script>

<script src="{{ asset("assets/js/custom/apps/ecommerce/catalog/categories.js") }}"></script>
{{-- <script src="{{ asset("assets/js/widgets.bundle.js") }}"></script> --}}
{{-- <script src="{{ asset("assets/js/custom/widgets.js") }}"></script> --}}
{{-- <script src="{{ asset("assets/js/custom/apps/chat") }}/chat.js"></script> --}}
{{-- <script src="{{ asset("assets/js/custom/utilities/modals/upgrade-plan.js") }}"></script> --}}
{{-- <script src="{{ asset("assets/js/custom/utilities/modals/create-app.js") }}"></script> --}}
{{-- <script src="{{ asset("assets/js/custom/utilities/modals/users-search.js") }}"></script> --}}
@endsection
@section('toolbar')
<x-board.main.toolbar :pages="[__('board.role.name')]"></x-board.main.toolbar>
@endsection

@section("content")
<!--begin::Content container-->
<div id="kt_app_content_container" class="app-container container-xxl">
   <!--begin::Row-->
   <div class="row row-cols-1 row-cols-md-2 row-cols-xl-3 g-5 g-xl-9">
      <!--begin::Col-->
      @foreach ($roles as $role)
      <div class="col-md-4">
            <!--begin::Card-->
         <div class="card card-flush h-md-100">
            <!--begin::Card header-->
            <div class="card-header">
               <!--begin::Card title-->
               <div class="card-title">
                  <h2>{{ $role->name }}</h2>
               </div>
               <!--end::Card title-->
            </div>
            <!--end::Card header-->
            <!--begin::Card body-->
            <div class="card-body pt-1">
               <!--begin::Users-->
               <!--end::Users-->
               <!--begin::Permissions-->
              
            </div>
            <!--end::Card body-->
            <!--begin::Card footer-->
            <div class="card-footer flex-wrap pt-0">
               <a type="button" class="btn btn-light btn-active-light-primary my-1" href="{{ route('role.edit', $role->id) }}">{{ __("board.role.edit") }}</a>
            </div>
            <!--end::Card footer-->
         </div>
         <!--end::Card-->


      </div>
         @endforeach
         
      <!--end::Col-->
      <!--begin::Add new card-->
      <div class="col-md-4">
         <!--begin::Card-->
         <div class="card h-md-100">
            <!--begin::Card body-->
            <div class="card-body d-flex flex-center">
               <!--begin::Button-->
               <a type="button" class="btn btn-clear d-flex flex-column flex-center" href="{{ route('role.create') }}">
                  <!--begin::Illustration-->
                  <img src="assets/media/illustrations/sketchy-1/4.png" alt="" class="mw-100 mh-150px mb-7" />
                  <!--end::Illustration-->
                  <!--begin::Label-->
                  <div class="fw-bold fs-3 text-gray-600 text-hover-primary">{{ __('board.role.add') }}</div>
                  <!--end::Label-->
               </a>
               <!--begin::Button-->
            </div>
            <!--begin::Card body-->
         </div>
         <!--begin::Card-->
      </div>
      <!--begin::Add new card-->
   </div>
   <!--end::Row-->
   <!--begin::Modals-->
   <!--begin::Modal - Add role-->
   <div class="modal fade" id="kt_modal_add_role" tabindex="-1" aria-hidden="true">
      <!--begin::Modal dialog-->
      <div class="modal-dialog modal-dialog-centered mw-750px">
         <!--begin::Modal content-->
         <div class="modal-content">
            <!--begin::Modal header-->
            <div class="modal-header">
               <!--begin::Modal title-->
               <h2 class="fw-bold">Add a Role</h2>
               <!--end::Modal title-->
               <!--begin::Close-->
               <div class="btn btn-icon btn-sm btn-active-icon-primary" data-kt-roles-modal-action="close">
                  <!--begin::Svg Icon | path: icons/duotune/arrows/arr061.svg-->
                  <span class="svg-icon svg-icon-1">
                     <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <rect opacity="0.5" x="6" y="17.3137" width="16" height="2" rx="1" transform="rotate(-45 6 17.3137)" fill="currentColor" />
                        <rect x="7.41422" y="6" width="16" height="2" rx="1" transform="rotate(45 7.41422 6)" fill="currentColor" />
                     </svg>
                  </span>
                  <!--end::Svg Icon-->
               </div>
               <!--end::Close-->
            </div>
            <!--end::Modal header-->
            <!--begin::Modal body-->
            <div class="modal-body scroll-y mx-lg-5 my-7">
               <!--begin::Form-->
               <form id="kt_modal_add_role_form" class="form" action="{{ route('role.store') }}" method="POST">
                  <!--begin::Scroll-->
                  <div class="d-flex flex-column scroll-y me-n7 pe-7" id="kt_modal_add_role_scroll" data-kt-scroll="true" data-kt-scroll-activate="{default: false, lg: true}" data-kt-scroll-max-height="auto" data-kt-scroll-dependencies="#kt_modal_add_role_header" data-kt-scroll-wrappers="#kt_modal_add_role_scroll" data-kt-scroll-offset="300px">
                     <!--begin::Input group-->
                     <div class="fv-row mb-10">
                        <!--begin::Label-->
                        <label class="fs-5 fw-bold form-label mb-2">
                           <span class="required">Role name</span>
                        </label>
                        <!--end::Label-->
                        <!--begin::Input-->
                        <input class="form-control form-control-solid" placeholder="Enter a role name" name="role_name" />
                        <!--end::Input-->
                     </div>
                     <!--end::Input group-->
                     <!--begin::Permissions-->
                     <div class="fv-row">
                        <!--begin::Label-->
                        <label class="fs-5 fw-bold form-label mb-2">Role Permissions</label>
                        <!--end::Label-->
                        <!--begin::Table wrapper-->
                        <div class="table-responsive">
                           <!--begin::Table-->
                           <table class="table align-middle table-row-dashed fs-6 gy-5">
                              <!--begin::Table body-->
                              <tbody class="text-gray-600 fw-semibold">
                                 <!--begin::Table row-->
                                 <tr>
                                    <!--begin::Label-->
                                    <td class="text-gray-800">User Management</td>
                                    <!--end::Label-->
                                    <!--begin::Options-->
                                    <td>
                                          @foreach ($permissions as $permission)
                                             
                                          @endforeach
                                       <!--begin::Wrapper-->
                                       <div class="d-flex">
                                          <!--begin::Checkbox-->
                                          <label class="form-check form-check-sm form-check-custom form-check-solid me-5 me-lg-20">
                                             <input class="form-check-input" type="checkbox" value="" name="user_management_read" />
                                             <span class="form-check-label">Read</span>
                                          </label>
                                          <!--end::Checkbox-->
                                          <!--begin::Checkbox-->
                                          <label class="form-check form-check-sm form-check-custom form-check-solid me-5 me-lg-20">
                                             <input class="form-check-input" type="checkbox" value="" name="user_management_write" />
                                             <span class="form-check-label">Write</span>
                                          </label>
                                          <!--end::Checkbox-->
                                          <!--begin::Checkbox-->
                                          <label class="form-check form-check-sm form-check-custom form-check-solid">
                                             <input class="form-check-input" type="checkbox" value="" name="user_management_create" />
                                             <span class="form-check-label">Create</span>
                                          </label>
                                          <!--end::Checkbox-->
                                       </div>
                                       <!--end::Wrapper-->
                                    </td>
                                    <!--end::Options-->
                                 </tr>

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
                  <!--begin::Actions-->
                  <div class="text-center pt-15">
                     <button type="reset" class="btn btn-light me-3" data-kt-roles-modal-action="cancel">Discard</button>
                     <button type="submit" class="btn btn-primary" data-kt-roles-modal-action="submit">
                        <span class="indicator-label">Submit</span>
                        <span class="indicator-progress">Please wait...
                        <span class="spinner-border spinner-border-sm align-middle ms-2"></span></span>
                     </button>
                  </div>
                  <!--end::Actions-->
               </form>
               <!--end::Form-->
            </div>
            <!--end::Modal body-->
         </div>
         <!--end::Modal content-->
      </div>
      <!--end::Modal dialog-->
   </div>
   <!--end::Modal - Add role-->
   <!--begin::Modal - Update role-->
   <div class="modal fade" id="kt_modal_update_role" tabindex="-1" aria-hidden="true">
      <!--begin::Modal dialog-->
      <div class="modal-dialog modal-dialog-centered mw-750px">
         <!--begin::Modal content-->
         <div class="modal-content">
            <!--begin::Modal header-->
            <div class="modal-header">
               <!--begin::Modal title-->
               <h2 class="fw-bold">Update Role</h2>
               <!--end::Modal title-->
               <!--begin::Close-->
               <div class="btn btn-icon btn-sm btn-active-icon-primary" data-kt-roles-modal-action="close">
                  <!--begin::Svg Icon | path: icons/duotune/arrows/arr061.svg-->
                  <span class="svg-icon svg-icon-1">
                     <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <rect opacity="0.5" x="6" y="17.3137" width="16" height="2" rx="1" transform="rotate(-45 6 17.3137)" fill="currentColor" />
                        <rect x="7.41422" y="6" width="16" height="2" rx="1" transform="rotate(45 7.41422 6)" fill="currentColor" />
                     </svg>
                  </span>
                  <!--end::Svg Icon-->
               </div>
               <!--end::Close-->
            </div>
            <!--end::Modal header-->
            <!--begin::Modal body-->
            <div class="modal-body scroll-y mx-5 my-7">
             
            </div>
            <!--end::Modal body-->
         </div>
         <!--end::Modal content-->
      </div>
      <!--end::Modal dialog-->
   </div>
   <!--end::Modal - Update role-->
   <!--end::Modals-->
</div>
<!--end::Content container-->
@endsection