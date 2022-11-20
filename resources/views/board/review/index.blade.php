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
<x-board.main.toolbar :pages="[__('board.review.name')]"></x-board.main.toolbar>
@endsection

@section("content")
<div id="kt_app_content_container" class="app-container container-xxl">
   <!--begin::Category-->
   <div class="card card-flush">
      <!--begin::Card header-->
      <div class="card-header align-items-center py-5 gap-2 gap-md-5">
         <!--begin::Card title-->
         <div class="card-title">
            <!--begin::Search-->
            <div class="d-flex align-items-center position-relative my-1">
               <!--begin::Svg Icon | path: icons/duotune/general/gen021.svg-->
               <span class="svg-icon svg-icon-1 position-absolute ms-4">
                  <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                     <rect opacity="0.5" x="17.0365" y="15.1223" width="8.15546" height="2" rx="1"
                        transform="rotate(45 17.0365 15.1223)" fill="currentColor" />
                     <path
                        d="M11 19C6.55556 19 3 15.4444 3 11C3 6.55556 6.55556 3 11 3C15.4444 3 19 6.55556 19 11C19 15.4444 15.4444 19 11 19ZM11 5C7.53333 5 5 7.53333 5 11C5 14.4667 7.53333 17 11 17C14.4667 17 17 14.4667 17 11C17 7.53333 14.4667 5 11 5Z"
                        fill="currentColor" />
                  </svg>
               </span>
               <!--end::Svg Icon-->
               <input type="text" data-kt-ecommerce-category-filter="search"
                  class="form-control form-control-solid w-250px ps-14" placeholder="{{ __("board.review.search") }}" />
            </div>
            <!--end::Search-->
         </div>
         <!--end::Card title-->
         <!--begin::Card toolbar-->
      
         <!--end::Card toolbar-->
      </div>
      <!--end::Card header-->

      <!--begin::Card body-->
      <div class="card-body pt-0">
         <!--begin::Table-->
         <table class="table align-middle table-row-dashed fs-6 gy-5" id="kt_ecommerce_category_table">
            <!--begin::Table head-->
            <thead>
               <!--begin::Table row-->
               <tr class="text-start text-gray-400 fw-bold fs-7 text-uppercase gs-0">
                  <th class="w-10px pe-2">
                     <div class="form-check form-check-sm form-check-custom form-check-solid me-3">
                        <input class="form-check-input" type="checkbox" data-kt-check="true"
                           data-kt-check-target="#kt_ecommerce_category_table .form-check-input" value="1" />
                     </div>
                  </th>
                  <th class="min-w-250px">{{ __("board.review.body") }}</th>
                  <th class="min-w-150px">{{ __("board.review.user") }}</th>
                  <th class="min-w-150px">{{ __("board.review.rate") }}</th>
                  <th class="min-w-150px">{{ __("board.review.product") }}</th>
               </tr>
               <!--end::Table row-->
            </thead>
            <!--end::Table head-->
            <!--begin::Table body-->
            <tbody class="fw-semibold text-gray-600">
               @foreach ($reviews as $review)
               <!--begin::Table row-->
               <tr>
                  <!--begin::Checkbox-->
                  <td>
                     <div class="form-check form-check-sm form-check-custom form-check-solid">
                        <input class="form-check-input" type="checkbox" value="1" />
                     </div>
                  </td>
                  <!--end::Checkbox-->
                  <!--begin::Category=-->
                 <!--begin::Qty=-->
                 <td class="text-end pe-0" data-order="21">
                  <span class="fw-bold ms-3">{{ $review->body }}</span>
               </td>

               <!--end::Qty=-->
               <!--begin::Qty=-->
               <td class="text-end pe-0" data-order="21">
                  <span class="fw-bold ms-3">{{ $review->user->name }}</span>
               </td>
               <!--end::Qty=-->

               <!--begin::Qty=-->
               <td class="text-end pe-0" data-order="21">
                  <span class="fw-bold ms-3">{{ $review->rate }}</span>
               </td>
               <!--end::Qty=-->

               <!--begin::Qty=-->
               <td class="text-end pe-0" data-order="21">
                  <span class="fw-bold ms-3">{{ $review->product->title }}</span>
               </td>
               <!--end::Qty=-->
               </tr>
               <!--end::Table row-->
               @endforeach

            </tbody>
            <!--end::Table body-->
         </table>
         <!--end::Table-->
      </div>
      <!--end::Card body-->
   </div>
   <!--end::Category-->
</div>
@endsection