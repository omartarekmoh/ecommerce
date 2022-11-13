@extends("board.layouts.app")
@section('style')
<link href="{{ asset("assets/plugins/custom/datatables/datatables.bundle.css") }}" rel="stylesheet" type="text/css" />
@endsection

@section('script')
<script src="{{ asset("assets/plugins/custom/datatables/datatables.bundle.js") }}"></script>
<script src="{{ asset("assets/js/custom/apps/ecommerce/catalog/products.js") }}"></script>

<script src="{{ asset("assets/js/custom/apps/ecommerce/catalog/categories.js") }}"></script>

{{-- <script src="{{ asset("assets/js/widgets.bundle.js") }}"></script> --}}
{{-- <script src="{{ asset("assets/js/custom/widgets.js") }}"></script> --}}
{{-- <script src="{{ asset("assets/js/custom/apps/chat") }}/chat.js"></script> --}}
{{-- <script src="{{ asset("assets/js/custom/utilities/modals/upgrade-plan.js") }}"></script> --}}
{{-- <script src="{{ asset("assets/js/custom/utilities/modals/create-app.js") }}"></script> --}}
{{-- <script src="{{ asset("assets/js/custom/utilities/modals/users-search.js") }}"></script> --}}
@endsection


@section('toolbar')
<x-board.main.toolbar :pages="[__('board.product.name')]"></x-board.main.toolbar>
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
                  class="form-control form-control-solid w-250px ps-14" placeholder="{{ __("board.product.search") }}" />
            </div>
            <!--end::Search-->
         </div>
         <!--end::Card title-->
         <!--begin::Card toolbar-->
         <div class="card-toolbar">
            <!--begin::Add customer-->
            <a href="{{ route('product.create') }}" class="btn btn-primary">{{ __("board.product.add") }}</a>
            <!--end::Add customer-->
         </div>
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
                  <th class="min-w-200px">{{ __("board.product.name") }}</th>
                  <th class="text-end min-w-100px">{{ __("board.product.stock") }}</th>
                  <th class="text-end min-w-100px">{{ __("board.product.price") }}</th>
                  <th class="text-end min-w-100px">{{ __("board.product.rating") }}</th>
                  <th class="text-end min-w-100px">{{ __("board.product.status") }}</th>
                  <th class="text-end min-w-70px">{{ __('board.product.actions') }}</th>
               </tr>
               <!--end::Table row-->
            </thead>
            <!--end::Table head-->
            <!--begin::Table body-->
            <tbody class="fw-semibold text-gray-600">

               @foreach ($products as $product)

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
                  <td>
                     <div class="d-flex align-items-center">
                        <!--begin::Thumbnail-->
                        <a href="{{ route("product.edit", $product->id) }}" class="symbol symbol-50px">
                           <span class="symbol-label"
                              style="background-image:url({{ optional($product->image)->url() }}););"></span>
                        </a>
                        <!--end::Thumbnail-->
                        <div class="ms-5">
                           <!--begin::Title-->
                           <a href="{{ route("product.edit", $product->id) }}"
                              class="text-gray-800 text-hover-primary fs-5 fw-bold"
                              data-kt-ecommerce-product-filter="product_name">{{ $product->title }}</a>
                           <!--end::Title-->
                        </div>
                     </div>
                  </td>
                  <!--end::Category=-->

                  <!--begin::Qty=-->
                  <td class="text-end pe-0" data-order="21">
                     <span class="fw-bold ms-3">{{ $product->stock }}</span>
                  </td>
                  <!--end::Qty=-->

                  <!--begin::Price=-->
                  <td class="text-end pe-0">{{ $product->price }}</td>
                  <!--end::Price=-->

                  <!--begin::Rating-->
                  <td class="text-end pe-0" data-order="rating-4">
                     <div class="rating justify-content-end">
                        <div class="rating-label checked">
                           <!--begin::Svg Icon | path: icons/duotune/general/gen029.svg-->
                           <span class="svg-icon svg-icon-2">
                              <svg width="24" height="24" viewBox="0 0 24 24" fill="none"
                                 xmlns="http://www.w3.org/2000/svg">
                                 <path
                                    d="M11.1359 4.48359C11.5216 3.82132 12.4784 3.82132 12.8641 4.48359L15.011 8.16962C15.1523 8.41222 15.3891 8.58425 15.6635 8.64367L19.8326 9.54646C20.5816 9.70867 20.8773 10.6186 20.3666 11.1901L17.5244 14.371C17.3374 14.5803 17.2469 14.8587 17.2752 15.138L17.7049 19.382C17.7821 20.1445 17.0081 20.7069 16.3067 20.3978L12.4032 18.6777C12.1463 18.5645 11.8537 18.5645 11.5968 18.6777L7.69326 20.3978C6.99192 20.7069 6.21789 20.1445 6.2951 19.382L6.7248 15.138C6.75308 14.8587 6.66264 14.5803 6.47558 14.371L3.63339 11.1901C3.12273 10.6186 3.41838 9.70867 4.16744 9.54646L8.3365 8.64367C8.61089 8.58425 8.84767 8.41222 8.98897 8.16962L11.1359 4.48359Z"
                                    fill="currentColor" />
                              </svg>
                           </span>
                           <!--end::Svg Icon-->
                        </div>
                        <div class="rating-label checked">
                           <!--begin::Svg Icon | path: icons/duotune/general/gen029.svg-->
                           <span class="svg-icon svg-icon-2">
                              <svg width="24" height="24" viewBox="0 0 24 24" fill="none"
                                 xmlns="http://www.w3.org/2000/svg">
                                 <path
                                    d="M11.1359 4.48359C11.5216 3.82132 12.4784 3.82132 12.8641 4.48359L15.011 8.16962C15.1523 8.41222 15.3891 8.58425 15.6635 8.64367L19.8326 9.54646C20.5816 9.70867 20.8773 10.6186 20.3666 11.1901L17.5244 14.371C17.3374 14.5803 17.2469 14.8587 17.2752 15.138L17.7049 19.382C17.7821 20.1445 17.0081 20.7069 16.3067 20.3978L12.4032 18.6777C12.1463 18.5645 11.8537 18.5645 11.5968 18.6777L7.69326 20.3978C6.99192 20.7069 6.21789 20.1445 6.2951 19.382L6.7248 15.138C6.75308 14.8587 6.66264 14.5803 6.47558 14.371L3.63339 11.1901C3.12273 10.6186 3.41838 9.70867 4.16744 9.54646L8.3365 8.64367C8.61089 8.58425 8.84767 8.41222 8.98897 8.16962L11.1359 4.48359Z"
                                    fill="currentColor" />
                              </svg>
                           </span>
                           <!--end::Svg Icon-->
                        </div>
                        <div class="rating-label checked">
                           <!--begin::Svg Icon | path: icons/duotune/general/gen029.svg-->
                           <span class="svg-icon svg-icon-2">
                              <svg width="24" height="24" viewBox="0 0 24 24" fill="none"
                                 xmlns="http://www.w3.org/2000/svg">
                                 <path
                                    d="M11.1359 4.48359C11.5216 3.82132 12.4784 3.82132 12.8641 4.48359L15.011 8.16962C15.1523 8.41222 15.3891 8.58425 15.6635 8.64367L19.8326 9.54646C20.5816 9.70867 20.8773 10.6186 20.3666 11.1901L17.5244 14.371C17.3374 14.5803 17.2469 14.8587 17.2752 15.138L17.7049 19.382C17.7821 20.1445 17.0081 20.7069 16.3067 20.3978L12.4032 18.6777C12.1463 18.5645 11.8537 18.5645 11.5968 18.6777L7.69326 20.3978C6.99192 20.7069 6.21789 20.1445 6.2951 19.382L6.7248 15.138C6.75308 14.8587 6.66264 14.5803 6.47558 14.371L3.63339 11.1901C3.12273 10.6186 3.41838 9.70867 4.16744 9.54646L8.3365 8.64367C8.61089 8.58425 8.84767 8.41222 8.98897 8.16962L11.1359 4.48359Z"
                                    fill="currentColor" />
                              </svg>
                           </span>
                           <!--end::Svg Icon-->
                        </div>
                        <div class="rating-label checked">
                           <!--begin::Svg Icon | path: icons/duotune/general/gen029.svg-->
                           <span class="svg-icon svg-icon-2">
                              <svg width="24" height="24" viewBox="0 0 24 24" fill="none"
                                 xmlns="http://www.w3.org/2000/svg">
                                 <path
                                    d="M11.1359 4.48359C11.5216 3.82132 12.4784 3.82132 12.8641 4.48359L15.011 8.16962C15.1523 8.41222 15.3891 8.58425 15.6635 8.64367L19.8326 9.54646C20.5816 9.70867 20.8773 10.6186 20.3666 11.1901L17.5244 14.371C17.3374 14.5803 17.2469 14.8587 17.2752 15.138L17.7049 19.382C17.7821 20.1445 17.0081 20.7069 16.3067 20.3978L12.4032 18.6777C12.1463 18.5645 11.8537 18.5645 11.5968 18.6777L7.69326 20.3978C6.99192 20.7069 6.21789 20.1445 6.2951 19.382L6.7248 15.138C6.75308 14.8587 6.66264 14.5803 6.47558 14.371L3.63339 11.1901C3.12273 10.6186 3.41838 9.70867 4.16744 9.54646L8.3365 8.64367C8.61089 8.58425 8.84767 8.41222 8.98897 8.16962L11.1359 4.48359Z"
                                    fill="currentColor" />
                              </svg>
                           </span>
                           <!--end::Svg Icon-->
                        </div>
                        <div class="rating-label">
                           <!--begin::Svg Icon | path: icons/duotune/general/gen029.svg-->
                           <span class="svg-icon svg-icon-2">
                              <svg width="24" height="24" viewBox="0 0 24 24" fill="none"
                                 xmlns="http://www.w3.org/2000/svg">
                                 <path
                                    d="M11.1359 4.48359C11.5216 3.82132 12.4784 3.82132 12.8641 4.48359L15.011 8.16962C15.1523 8.41222 15.3891 8.58425 15.6635 8.64367L19.8326 9.54646C20.5816 9.70867 20.8773 10.6186 20.3666 11.1901L17.5244 14.371C17.3374 14.5803 17.2469 14.8587 17.2752 15.138L17.7049 19.382C17.7821 20.1445 17.0081 20.7069 16.3067 20.3978L12.4032 18.6777C12.1463 18.5645 11.8537 18.5645 11.5968 18.6777L7.69326 20.3978C6.99192 20.7069 6.21789 20.1445 6.2951 19.382L6.7248 15.138C6.75308 14.8587 6.66264 14.5803 6.47558 14.371L3.63339 11.1901C3.12273 10.6186 3.41838 9.70867 4.16744 9.54646L8.3365 8.64367C8.61089 8.58425 8.84767 8.41222 8.98897 8.16962L11.1359 4.48359Z"
                                    fill="currentColor" />
                              </svg>
                           </span>
                           <!--end::Svg Icon-->
                        </div>
                     </div>
                  </td>
                  <!--end::Rating-->

                  <!--begin::Status=-->
                  <td class="text-end pe-0" data-order="Published">
                     <!--begin::Badges-->
                     <div class="badge badge-light-{{ $product->status == 0 ? "success" : "danger" }}">{{
                        __("board.".$product->statusname()) }}</div>
                     <!--end::Badges-->
                  </td>
                  <!--end::Status=-->
                  <!--begin::Action=-->
                  <td class="text-end">
                     <a href="#" class="btn btn-sm btn-light btn-active-light-primary" data-kt-menu-trigger="click"
                        data-kt-menu-placement="bottom-end">{{ __("board.product.actions") }}
                        <!--begin::Svg Icon | path: icons/duotune/arrows/arr072.svg-->
                        <span class="svg-icon svg-icon-5 m-0">
                           <svg width="24" height="24" viewBox="0 0 24 24" fill="none"
                              xmlns="http://www.w3.org/2000/svg">
                              <path
                                 d="M11.4343 12.7344L7.25 8.55005C6.83579 8.13583 6.16421 8.13584 5.75 8.55005C5.33579 8.96426 5.33579 9.63583 5.75 10.05L11.2929 15.5929C11.6834 15.9835 12.3166 15.9835 12.7071 15.5929L18.25 10.05C18.6642 9.63584 18.6642 8.96426 18.25 8.55005C17.8358 8.13584 17.1642 8.13584 16.75 8.55005L12.5657 12.7344C12.2533 13.0468 11.7467 13.0468 11.4343 12.7344Z"
                                 fill="currentColor" />
                           </svg>
                        </span>
                        <!--end::Svg Icon-->
                     </a>
                     <!--begin::Menu-->
                     <div
                        class="menu menu-sub menu-sub-dropdown menu-column menu-rounded menu-gray-600 menu-state-bg-light-primary fw-semibold fs-7 w-125px py-4"
                        data-kt-menu="true">
                        <!--begin::Menu item-->
                        <div class="menu-item px-3">
                           <a href="{{ route("product.edit", $product->id) }}"
                              class="menu-link px-3">{{ __("board.edit") }}</a>
                        </div>
                        <!--end::Menu item-->
                        <!--begin::Menu item-->
                        <div class="menu-item px-3">
                           <form style="style: hidden;" action="{{ route('product.destroy', ['product' => $product->id]) }}" id="delete_product_{{ $product->id }}" method="POST">
                              @csrf
                              @method("DELETE")
                           </form>

                           <a class="menu-link px-3" onclick="event.preventDefault(); document.getElementById('delete_product_{{ $product->id }}').submit(); " data-kt-ecommerce-category-filter="delete_row">{{ __("board.delete") }}</a>

                        </div>
                        <!--end::Menu item-->
                     </div>
                     <!--end::Menu-->
                  </td>
                  <!--end::Action=-->
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