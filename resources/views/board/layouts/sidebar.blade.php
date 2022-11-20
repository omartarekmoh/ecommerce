<div id="kt_app_sidebar" class="app-sidebar flex-column" data-kt-drawer="true" data-kt-drawer-name="app-sidebar"
   data-kt-drawer-activate="{default: true, lg: false}" data-kt-drawer-overlay="true" data-kt-drawer-width="225px"
   data-kt-drawer-direction="start" data-kt-drawer-toggle="#kt_app_sidebar_mobile_toggle">
   <!--begin::Logo-->
   <div class="app-sidebar-logo px-6" id="kt_app_sidebar_logo">
      <!--begin::Logo image-->
      <a href="../../demo1/dist/index.html">
         <img alt="Logo" src="{{ asset("assets/media/logos/default-dark.svg") }}" class="h-25px app-sidebar-logo-default" />
         <img alt="Logo" src="{{ asset("assets/media/logos/default-small.svg") }}" class="h-20px app-sidebar-logo-minimize" />
      </a>
      <!--end::Logo image-->
      <!--begin::Sidebar toggle-->
      <div id="kt_app_sidebar_toggle"
         class="app-sidebar-toggle btn btn-icon btn-shadow btn-sm btn-color-muted btn-active-color-primary body-bg h-30px w-30px position-absolute top-50 start-100 translate-middle rotate"
         data-kt-toggle="true" data-kt-toggle-state="active" data-kt-toggle-target="body"
         data-kt-toggle-name="app-sidebar-minimize">
         <!--begin::Svg Icon | path: icons/duotune/arrows/arr079.svg-->
         <span class="svg-icon svg-icon-2 rotate-180">
            <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
               <path opacity="0.5"
                  d="M14.2657 11.4343L18.45 7.25C18.8642 6.83579 18.8642 6.16421 18.45 5.75C18.0358 5.33579 17.3642 5.33579 16.95 5.75L11.4071 11.2929C11.0166 11.6834 11.0166 12.3166 11.4071 12.7071L16.95 18.25C17.3642 18.6642 18.0358 18.6642 18.45 18.25C18.8642 17.8358 18.8642 17.1642 18.45 16.75L14.2657 12.5657C13.9533 12.2533 13.9533 11.7467 14.2657 11.4343Z"
                  fill="currentColor" />
               <path
                  d="M8.2657 11.4343L12.45 7.25C12.8642 6.83579 12.8642 6.16421 12.45 5.75C12.0358 5.33579 11.3642 5.33579 10.95 5.75L5.40712 11.2929C5.01659 11.6834 5.01659 12.3166 5.40712 12.7071L10.95 18.25C11.3642 18.6642 12.0358 18.6642 12.45 18.25C12.8642 17.8358 12.8642 17.1642 12.45 16.75L8.2657 12.5657C7.95328 12.2533 7.95328 11.7467 8.2657 11.4343Z"
                  fill="currentColor" />
            </svg>
         </span>
         <!--end::Svg Icon-->
      </div>
      <!--end::Sidebar toggle-->
   </div>
   <!--end::Logo-->
   <!--begin::sidebar menu-->
   <div class="app-sidebar-menu overflow-hidden flex-column-fluid">
      <!--begin::Menu wrapper-->
      <div id="kt_app_sidebar_menu_wrapper" class="app-sidebar-wrapper hover-scroll-overlay-y my-5"
         data-kt-scroll="true" data-kt-scroll-activate="true" data-kt-scroll-height="auto"
         data-kt-scroll-dependencies="#kt_app_sidebar_logo, #kt_app_sidebar_footer"
         data-kt-scroll-wrappers="#kt_app_sidebar_menu" data-kt-scroll-offset="5px" data-kt-scroll-save-state="true">
         <!--begin::Menu-->
         <div class="menu menu-column menu-rounded menu-sub-indention px-3" id="#kt_app_sidebar_menu"
            data-kt-menu="true" data-kt-menu-expand="false">

            <!--begin:Menu item-->
            <div class="menu-item pt-5">
               <!--begin:Menu content-->
               <div class="menu-content">
                  <span class="menu-heading fw-bold text-uppercase fs-7">{{ __("board.pages") }}</span>
               </div>
               <!--end:Menu content-->
            </div>
            <!--end:Menu item-->

            <!--begin:Menu item-->
            <div data-kt-menu-trigger="click" class="menu-item menu-accordion">
               <!--begin:Menu link-->
               <span class="menu-link">
                  <span class="menu-icon">
                     <!--begin::Svg Icon | path: /var/www/preview.keenthemes.com/kt-products/docs/metronic/html/releases/2022-10-09-043348/core/html/src/media/icons/duotune/ecommerce/ecm009.svg-->
                     <span class="svg-icon svg-icon-muted svg-icon-2x"><svg width="24" height="24" viewBox="0 0 24 24"
                           fill="none" xmlns="http://www.w3.org/2000/svg">
                           <path opacity="0.3"
                              d="M3 13H10C10.6 13 11 13.4 11 14V21C11 21.6 10.6 22 10 22H3C2.4 22 2 21.6 2 21V14C2 13.4 2.4 13 3 13Z"
                              fill="currentColor" />
                           <path d="M7 16H6C5.4 16 5 15.6 5 15V13H8V15C8 15.6 7.6 16 7 16Z" fill="currentColor" />
                           <path opacity="0.3"
                              d="M14 13H21C21.6 13 22 13.4 22 14V21C22 21.6 21.6 22 21 22H14C13.4 22 13 21.6 13 21V14C13 13.4 13.4 13 14 13Z"
                              fill="currentColor" />
                           <path d="M18 16H17C16.4 16 16 15.6 16 15V13H19V15C19 15.6 18.6 16 18 16Z"
                              fill="currentColor" />
                           <path opacity="0.3"
                              d="M3 2H10C10.6 2 11 2.4 11 3V10C11 10.6 10.6 11 10 11H3C2.4 11 2 10.6 2 10V3C2 2.4 2.4 2 3 2Z"
                              fill="currentColor" />
                           <path d="M7 5H6C5.4 5 5 4.6 5 4V2H8V4C8 4.6 7.6 5 7 5Z" fill="currentColor" />
                           <path opacity="0.3"
                              d="M14 2H21C21.6 2 22 2.4 22 3V10C22 10.6 21.6 11 21 11H14C13.4 11 13 10.6 13 10V3C13 2.4 13.4 2 14 2Z"
                              fill="currentColor" />
                           <path d="M18 5H17C16.4 5 16 4.6 16 4V2H19V4C19 4.6 18.6 5 18 5Z" fill="currentColor" />
                        </svg>
                     </span>
                     <!--end::Svg Icon-->
                  </span>
                  <span class="menu-title">{{ __("board.category.name") }}</span>
                  <span class="menu-arrow"></span>
               </span>
               <!--end:Menu link-->
               <!--begin:Menu sub-->
               <div class="menu-sub menu-sub-accordion">
                  <!--begin:Menu item-->
                  <div class="menu-item">
                     <!--begin:Menu link-->
                     <a class="menu-link" href="{{ route("category.index") }}">
                        <span class="menu-bullet">
                           <span class="bullet bullet-dot"></span>
                        </span>
                        <span class="menu-title">{{ __("board.category.name") }}</span>
                     </a>
                     <!--end:Menu link-->
                  </div>
                  <!--end:Menu item-->

                  <!--begin:Menu item-->
                  <div class="menu-item">
                     <!--begin:Menu link-->
                     <a class="menu-link" href="{{ route("subcategory.index") }}">
                        <span class="menu-bullet">
                           <span class="bullet bullet-dot"></span>
                        </span>
                        <span class="menu-title">{{ __("board.subcategory.name") }}</span>
                     </a>
                     <!--end:Menu link-->
                  </div>
                  <!--end:Menu item-->
               </div>
               <!--end:Menu sub-->
            </div>
            <!--end:Menu item-->
             <!--begin:Menu item-->
             <div data-kt-menu-trigger="click" class="menu-item menu-accordion">
               <!--begin:Menu link-->
               <span class="menu-link">
                  <span class="menu-icon">
                     <!--begin::Svg Icon | path: /var/www/preview.keenthemes.com/kt-products/docs/metronic/html/releases/2022-10-09-043348/core/html/src/media/icons/duotune/ecommerce/ecm009.svg-->
                     <span class="svg-icon svg-icon-muted svg-icon-2x"><svg width="24" height="24" viewBox="0 0 24 24"
                           fill="none" xmlns="http://www.w3.org/2000/svg">
                           <path opacity="0.3"
                              d="M3 13H10C10.6 13 11 13.4 11 14V21C11 21.6 10.6 22 10 22H3C2.4 22 2 21.6 2 21V14C2 13.4 2.4 13 3 13Z"
                              fill="currentColor" />
                           <path d="M7 16H6C5.4 16 5 15.6 5 15V13H8V15C8 15.6 7.6 16 7 16Z" fill="currentColor" />
                           <path opacity="0.3"
                              d="M14 13H21C21.6 13 22 13.4 22 14V21C22 21.6 21.6 22 21 22H14C13.4 22 13 21.6 13 21V14C13 13.4 13.4 13 14 13Z"
                              fill="currentColor" />
                           <path d="M18 16H17C16.4 16 16 15.6 16 15V13H19V15C19 15.6 18.6 16 18 16Z"
                              fill="currentColor" />
                           <path opacity="0.3"
                              d="M3 2H10C10.6 2 11 2.4 11 3V10C11 10.6 10.6 11 10 11H3C2.4 11 2 10.6 2 10V3C2 2.4 2.4 2 3 2Z"
                              fill="currentColor" />
                           <path d="M7 5H6C5.4 5 5 4.6 5 4V2H8V4C8 4.6 7.6 5 7 5Z" fill="currentColor" />
                           <path opacity="0.3"
                              d="M14 2H21C21.6 2 22 2.4 22 3V10C22 10.6 21.6 11 21 11H14C13.4 11 13 10.6 13 10V3C13 2.4 13.4 2 14 2Z"
                              fill="currentColor" />
                           <path d="M18 5H17C16.4 5 16 4.6 16 4V2H19V4C19 4.6 18.6 5 18 5Z" fill="currentColor" />
                        </svg>
                     </span>
                     <!--end::Svg Icon-->
                  </span>
                  <span class="menu-title">{{ __("board.product.name") }}</span>
                  <span class="menu-arrow"></span>
               </span>
               <!--end:Menu link-->
               <!--begin:Menu sub-->
               <div class="menu-sub menu-sub-accordion">
                  <!--begin:Menu item-->
                  <div class="menu-item">
                     <!--begin:Menu link-->
                     <a class="menu-link" href="{{ route("product.index") }}">
                        <span class="menu-bullet">
                           <span class="bullet bullet-dot"></span>
                        </span>
                        <span class="menu-title">{{ __("board.product.name") }}</span>
                     </a>
                     <!--end:Menu link-->
                      <!--begin:Menu link-->
                      <a class="menu-link" href="{{ route("product-attribute.index") }}">
                        <span class="menu-bullet">
                           <span class="bullet bullet-dot"></span>
                        </span>
                        <span class="menu-title">{{ __("board.attribute.name") }}</span>
                     </a>
                     <!--end:Menu link-->
                  </div>
                  <!--end:Menu item-->
               </div>
               <!--end:Menu sub-->
            </div>
            <!--end:Menu item-->

              <!--begin:Menu item-->
              <div data-kt-menu-trigger="click" class="menu-item menu-accordion">
               <!--begin:Menu link-->
               <span class="menu-link">
                  <span class="menu-icon">
                     <!--begin::Svg Icon | path: /var/www/preview.keenthemes.com/kt-products/docs/metronic/html/releases/2022-10-09-043348/core/html/src/media/icons/duotune/ecommerce/ecm009.svg-->
                     <span class="svg-icon svg-icon-muted svg-icon-2x"><svg width="24" height="24" viewBox="0 0 24 24"
                           fill="none" xmlns="http://www.w3.org/2000/svg">
                           <path opacity="0.3"
                              d="M3 13H10C10.6 13 11 13.4 11 14V21C11 21.6 10.6 22 10 22H3C2.4 22 2 21.6 2 21V14C2 13.4 2.4 13 3 13Z"
                              fill="currentColor" />
                           <path d="M7 16H6C5.4 16 5 15.6 5 15V13H8V15C8 15.6 7.6 16 7 16Z" fill="currentColor" />
                           <path opacity="0.3"
                              d="M14 13H21C21.6 13 22 13.4 22 14V21C22 21.6 21.6 22 21 22H14C13.4 22 13 21.6 13 21V14C13 13.4 13.4 13 14 13Z"
                              fill="currentColor" />
                           <path d="M18 16H17C16.4 16 16 15.6 16 15V13H19V15C19 15.6 18.6 16 18 16Z"
                              fill="currentColor" />
                           <path opacity="0.3"
                              d="M3 2H10C10.6 2 11 2.4 11 3V10C11 10.6 10.6 11 10 11H3C2.4 11 2 10.6 2 10V3C2 2.4 2.4 2 3 2Z"
                              fill="currentColor" />
                           <path d="M7 5H6C5.4 5 5 4.6 5 4V2H8V4C8 4.6 7.6 5 7 5Z" fill="currentColor" />
                           <path opacity="0.3"
                              d="M14 2H21C21.6 2 22 2.4 22 3V10C22 10.6 21.6 11 21 11H14C13.4 11 13 10.6 13 10V3C13 2.4 13.4 2 14 2Z"
                              fill="currentColor" />
                           <path d="M18 5H17C16.4 5 16 4.6 16 4V2H19V4C19 4.6 18.6 5 18 5Z" fill="currentColor" />
                        </svg>
                     </span>
                     <!--end::Svg Icon-->
                  </span>
                  <span class="menu-title">{{ __("board.customer.name") }}</span>
                  <span class="menu-arrow"></span>
               </span>
               <!--end:Menu link-->
               <!--begin:Menu sub-->
               <div class="menu-sub menu-sub-accordion">
                  <!--begin:Menu item-->
                  <div class="menu-item">
                     <!--begin:Menu link-->
                     <a class="menu-link" href="{{ route("customer.index") }}">
                        <span class="menu-bullet">
                           <span class="bullet bullet-dot"></span>
                        </span>
                        <span class="menu-title">{{ __("board.customer.name") }}</span>
                     </a>
                     <!--end:Menu link-->
                     
                  </div>
                  <!--end:Menu item-->
               </div>
               <!--end:Menu sub-->
            </div>
            <!--end:Menu item-->

             <!--begin:Menu item-->
             <div data-kt-menu-trigger="click" class="menu-item menu-accordion">
               <!--begin:Menu link-->
               <span class="menu-link">
                  <span class="menu-icon">
                     <!--begin::Svg Icon | path: /var/www/preview.keenthemes.com/kt-products/docs/metronic/html/releases/2022-10-09-043348/core/html/src/media/icons/duotune/ecommerce/ecm009.svg-->
                     <span class="svg-icon svg-icon-muted svg-icon-2x"><svg width="24" height="24" viewBox="0 0 24 24"
                           fill="none" xmlns="http://www.w3.org/2000/svg">
                           <path opacity="0.3"
                              d="M3 13H10C10.6 13 11 13.4 11 14V21C11 21.6 10.6 22 10 22H3C2.4 22 2 21.6 2 21V14C2 13.4 2.4 13 3 13Z"
                              fill="currentColor" />
                           <path d="M7 16H6C5.4 16 5 15.6 5 15V13H8V15C8 15.6 7.6 16 7 16Z" fill="currentColor" />
                           <path opacity="0.3"
                              d="M14 13H21C21.6 13 22 13.4 22 14V21C22 21.6 21.6 22 21 22H14C13.4 22 13 21.6 13 21V14C13 13.4 13.4 13 14 13Z"
                              fill="currentColor" />
                           <path d="M18 16H17C16.4 16 16 15.6 16 15V13H19V15C19 15.6 18.6 16 18 16Z"
                              fill="currentColor" />
                           <path opacity="0.3"
                              d="M3 2H10C10.6 2 11 2.4 11 3V10C11 10.6 10.6 11 10 11H3C2.4 11 2 10.6 2 10V3C2 2.4 2.4 2 3 2Z"
                              fill="currentColor" />
                           <path d="M7 5H6C5.4 5 5 4.6 5 4V2H8V4C8 4.6 7.6 5 7 5Z" fill="currentColor" />
                           <path opacity="0.3"
                              d="M14 2H21C21.6 2 22 2.4 22 3V10C22 10.6 21.6 11 21 11H14C13.4 11 13 10.6 13 10V3C13 2.4 13.4 2 14 2Z"
                              fill="currentColor" />
                           <path d="M18 5H17C16.4 5 16 4.6 16 4V2H19V4C19 4.6 18.6 5 18 5Z" fill="currentColor" />
                        </svg>
                     </span>
                     <!--end::Svg Icon-->
                  </span>
                  <span class="menu-title">{{ __("board.partials.name") }}</span>
                  <span class="menu-arrow"></span>
               </span>
               <!--end:Menu link-->
               <!--begin:Menu sub-->
               <div class="menu-sub menu-sub-accordion">
                  <!--begin:Menu item-->
                  <div class="menu-item">
                     <!--begin:Menu link-->
                     <a class="menu-link" href="{{ route("contact.edit") }}">
                        <span class="menu-bullet">
                           <span class="bullet bullet-dot"></span>
                        </span>
                        <span class="menu-title">{{ __("board.contact.name") }}</span>
                     </a>
                     <!--end:Menu link-->
                     
                  </div>
                  <!--end:Menu item-->

                  <!--begin:Menu item-->
                  <div class="menu-item">
                     <!--begin:Menu link-->
                     <a class="menu-link" href="{{ route("about.edit") }}">
                        <span class="menu-bullet">
                           <span class="bullet bullet-dot"></span>
                        </span>
                        <span class="menu-title">{{ __("board.about.name") }}</span>
                     </a>
                     <!--end:Menu link-->
                     
                  </div>
                  <!--end:Menu item-->

                   <!--begin:Menu item-->
                   <div class="menu-item">
                     <!--begin:Menu link-->
                     <a class="menu-link" href="{{ route("terms.edit") }}">
                        <span class="menu-bullet">
                           <span class="bullet bullet-dot"></span>
                        </span>
                        <span class="menu-title">{{ __("board.terms.name") }}</span>
                     </a>
                     <!--end:Menu link-->
                     
                  </div>
                  <!--end:Menu item-->
               </div>
               <!--end:Menu sub-->
            </div>
            <!--end:Menu item-->

            <!--begin:Menu item-->
            <div data-kt-menu-trigger="click" class="menu-item menu-accordion">
               <!--begin:Menu link-->
               <span class="menu-link">
                  <span class="menu-icon">
                     <!--begin::Svg Icon | path: /var/www/preview.keenthemes.com/kt-products/docs/metronic/html/releases/2022-10-09-043348/core/html/src/media/icons/duotune/ecommerce/ecm009.svg-->
                     <span class="svg-icon svg-icon-muted svg-icon-2x"><svg width="24" height="24" viewBox="0 0 24 24"
                           fill="none" xmlns="http://www.w3.org/2000/svg">
                           <path opacity="0.3"
                              d="M3 13H10C10.6 13 11 13.4 11 14V21C11 21.6 10.6 22 10 22H3C2.4 22 2 21.6 2 21V14C2 13.4 2.4 13 3 13Z"
                              fill="currentColor" />
                           <path d="M7 16H6C5.4 16 5 15.6 5 15V13H8V15C8 15.6 7.6 16 7 16Z" fill="currentColor" />
                           <path opacity="0.3"
                              d="M14 13H21C21.6 13 22 13.4 22 14V21C22 21.6 21.6 22 21 22H14C13.4 22 13 21.6 13 21V14C13 13.4 13.4 13 14 13Z"
                              fill="currentColor" />
                           <path d="M18 16H17C16.4 16 16 15.6 16 15V13H19V15C19 15.6 18.6 16 18 16Z"
                              fill="currentColor" />
                           <path opacity="0.3"
                              d="M3 2H10C10.6 2 11 2.4 11 3V10C11 10.6 10.6 11 10 11H3C2.4 11 2 10.6 2 10V3C2 2.4 2.4 2 3 2Z"
                              fill="currentColor" />
                           <path d="M7 5H6C5.4 5 5 4.6 5 4V2H8V4C8 4.6 7.6 5 7 5Z" fill="currentColor" />
                           <path opacity="0.3"
                              d="M14 2H21C21.6 2 22 2.4 22 3V10C22 10.6 21.6 11 21 11H14C13.4 11 13 10.6 13 10V3C13 2.4 13.4 2 14 2Z"
                              fill="currentColor" />
                           <path d="M18 5H17C16.4 5 16 4.6 16 4V2H19V4C19 4.6 18.6 5 18 5Z" fill="currentColor" />
                        </svg>
                     </span>
                     <!--end::Svg Icon-->
                  </span>
                  <span class="menu-title">{{ __("board.blog.name") }}</span>
                  <span class="menu-arrow"></span>
               </span>
               <!--end:Menu link-->
               <!--begin:Menu sub-->
               <div class="menu-sub menu-sub-accordion">
                  <!--begin:Menu item-->
                  <div class="menu-item">
                     <!--begin:Menu link-->
                     <a class="menu-link" href="{{ route("blog.index") }}">
                        <span class="menu-bullet">
                           <span class="bullet bullet-dot"></span>
                        </span>
                        <span class="menu-title">{{ __("board.blog.name") }}</span>
                     </a>
                     <!--end:Menu link-->
                     
                  </div>
                  <!--end:Menu item-->

                  <!--begin:Menu item-->
                  <div class="menu-item">
                     <!--begin:Menu link-->
                     <a class="menu-link" href="{{ route("blog_category.index") }}">
                        <span class="menu-bullet">
                           <span class="bullet bullet-dot"></span>
                        </span>
                        <span class="menu-title">{{ __("board.blog_category.name") }}</span>
                     </a>
                     <!--end:Menu link-->
                     
                  </div>
                  <!--end:Menu item-->
               </div>
               <!--end:Menu sub-->
            </div>
            <!--end:Menu item-->

              <!--begin:Menu item-->
              <div data-kt-menu-trigger="click" class="menu-item menu-accordion">
               <!--begin:Menu link-->
               <span class="menu-link">
                  <span class="menu-icon">
                     <!--begin::Svg Icon | path: /var/www/preview.keenthemes.com/kt-products/docs/metronic/html/releases/2022-10-09-043348/core/html/src/media/icons/duotune/ecommerce/ecm009.svg-->
                     <span class="svg-icon svg-icon-muted svg-icon-2x"><svg width="24" height="24" viewBox="0 0 24 24"
                           fill="none" xmlns="http://www.w3.org/2000/svg">
                           <path opacity="0.3"
                              d="M3 13H10C10.6 13 11 13.4 11 14V21C11 21.6 10.6 22 10 22H3C2.4 22 2 21.6 2 21V14C2 13.4 2.4 13 3 13Z"
                              fill="currentColor" />
                           <path d="M7 16H6C5.4 16 5 15.6 5 15V13H8V15C8 15.6 7.6 16 7 16Z" fill="currentColor" />
                           <path opacity="0.3"
                              d="M14 13H21C21.6 13 22 13.4 22 14V21C22 21.6 21.6 22 21 22H14C13.4 22 13 21.6 13 21V14C13 13.4 13.4 13 14 13Z"
                              fill="currentColor" />
                           <path d="M18 16H17C16.4 16 16 15.6 16 15V13H19V15C19 15.6 18.6 16 18 16Z"
                              fill="currentColor" />
                           <path opacity="0.3"
                              d="M3 2H10C10.6 2 11 2.4 11 3V10C11 10.6 10.6 11 10 11H3C2.4 11 2 10.6 2 10V3C2 2.4 2.4 2 3 2Z"
                              fill="currentColor" />
                           <path d="M7 5H6C5.4 5 5 4.6 5 4V2H8V4C8 4.6 7.6 5 7 5Z" fill="currentColor" />
                           <path opacity="0.3"
                              d="M14 2H21C21.6 2 22 2.4 22 3V10C22 10.6 21.6 11 21 11H14C13.4 11 13 10.6 13 10V3C13 2.4 13.4 2 14 2Z"
                              fill="currentColor" />
                           <path d="M18 5H17C16.4 5 16 4.6 16 4V2H19V4C19 4.6 18.6 5 18 5Z" fill="currentColor" />
                        </svg>
                     </span>
                     <!--end::Svg Icon-->
                  </span>
                  <span class="menu-title">{{ __("board.discount.name") }}</span>
                  <span class="menu-arrow"></span>
               </span>
               <!--end:Menu link-->
               <!--begin:Menu sub-->
               <div class="menu-sub menu-sub-accordion">
                  <!--begin:Menu item-->
                  <div class="menu-item">
                     <!--begin:Menu link-->
                     <a class="menu-link" href="{{ route("discount.index") }}">
                        <span class="menu-bullet">
                           <span class="bullet bullet-dot"></span>
                        </span>
                        <span class="menu-title">{{ __("board.discount.name") }}</span>
                     </a>
                     <!--end:Menu link-->
                     
                  </div>
                  <!--end:Menu item-->

                  <!--begin:Menu item-->
                  <div class="menu-item">
                     <!--begin:Menu link-->
                     <a class="menu-link" href="{{ route("offer.index") }}">
                        <span class="menu-bullet">
                           <span class="bullet bullet-dot"></span>
                        </span>
                        <span class="menu-title">{{ __("board.offer.name") }}</span>
                     </a>
                     <!--end:Menu link-->
                     
                  </div>
                  <!--end:Menu item-->
               </div>
               <!--end:Menu sub-->
            </div>
            <!--end:Menu item-->

            <!--begin:Menu item-->
            <div data-kt-menu-trigger="click" class="menu-item menu-accordion">
               <!--begin:Menu link-->
               <span class="menu-link">
                  <span class="menu-icon">
                     <!--begin::Svg Icon | path: /var/www/preview.keenthemes.com/kt-products/docs/metronic/html/releases/2022-10-09-043348/core/html/src/media/icons/duotune/ecommerce/ecm009.svg-->
                     <span class="svg-icon svg-icon-muted svg-icon-2x"><svg width="24" height="24" viewBox="0 0 24 24"
                           fill="none" xmlns="http://www.w3.org/2000/svg">
                           <path opacity="0.3"
                              d="M3 13H10C10.6 13 11 13.4 11 14V21C11 21.6 10.6 22 10 22H3C2.4 22 2 21.6 2 21V14C2 13.4 2.4 13 3 13Z"
                              fill="currentColor" />
                           <path d="M7 16H6C5.4 16 5 15.6 5 15V13H8V15C8 15.6 7.6 16 7 16Z" fill="currentColor" />
                           <path opacity="0.3"
                              d="M14 13H21C21.6 13 22 13.4 22 14V21C22 21.6 21.6 22 21 22H14C13.4 22 13 21.6 13 21V14C13 13.4 13.4 13 14 13Z"
                              fill="currentColor" />
                           <path d="M18 16H17C16.4 16 16 15.6 16 15V13H19V15C19 15.6 18.6 16 18 16Z"
                              fill="currentColor" />
                           <path opacity="0.3"
                              d="M3 2H10C10.6 2 11 2.4 11 3V10C11 10.6 10.6 11 10 11H3C2.4 11 2 10.6 2 10V3C2 2.4 2.4 2 3 2Z"
                              fill="currentColor" />
                           <path d="M7 5H6C5.4 5 5 4.6 5 4V2H8V4C8 4.6 7.6 5 7 5Z" fill="currentColor" />
                           <path opacity="0.3"
                              d="M14 2H21C21.6 2 22 2.4 22 3V10C22 10.6 21.6 11 21 11H14C13.4 11 13 10.6 13 10V3C13 2.4 13.4 2 14 2Z"
                              fill="currentColor" />
                           <path d="M18 5H17C16.4 5 16 4.6 16 4V2H19V4C19 4.6 18.6 5 18 5Z" fill="currentColor" />
                        </svg>
                     </span>
                     <!--end::Svg Icon-->
                  </span>
                  <span class="menu-title">{{ __("board.role.name") }}</span>
                  <span class="menu-arrow"></span>
               </span>
               <!--end:Menu link-->
               <!--begin:Menu sub-->
               <div class="menu-sub menu-sub-accordion">
                  <!--begin:Menu item-->
                  <div class="menu-item">
                     <!--begin:Menu link-->
                     <a class="menu-link" href="{{ route("role.index") }}">
                        <span class="menu-bullet">
                           <span class="bullet bullet-dot"></span>
                        </span>
                        <span class="menu-title">{{ __("board.role.name") }}</span>
                     </a>
                     <!--end:Menu link-->
                     
                  </div>
                  <!--end:Menu item-->
               </div>
               <!--end:Menu sub-->
            </div>
            <!--end:Menu item-->

             <!--begin:Menu item-->
             <div data-kt-menu-trigger="click" class="menu-item menu-accordion">
               <!--begin:Menu link-->
               <span class="menu-link">
                  <span class="menu-icon">
                     <!--begin::Svg Icon | path: /var/www/preview.keenthemes.com/kt-products/docs/metronic/html/releases/2022-10-09-043348/core/html/src/media/icons/duotune/ecommerce/ecm009.svg-->
                     <span class="svg-icon svg-icon-muted svg-icon-2x"><svg width="24" height="24" viewBox="0 0 24 24"
                           fill="none" xmlns="http://www.w3.org/2000/svg">
                           <path opacity="0.3"
                              d="M3 13H10C10.6 13 11 13.4 11 14V21C11 21.6 10.6 22 10 22H3C2.4 22 2 21.6 2 21V14C2 13.4 2.4 13 3 13Z"
                              fill="currentColor" />
                           <path d="M7 16H6C5.4 16 5 15.6 5 15V13H8V15C8 15.6 7.6 16 7 16Z" fill="currentColor" />
                           <path opacity="0.3"
                              d="M14 13H21C21.6 13 22 13.4 22 14V21C22 21.6 21.6 22 21 22H14C13.4 22 13 21.6 13 21V14C13 13.4 13.4 13 14 13Z"
                              fill="currentColor" />
                           <path d="M18 16H17C16.4 16 16 15.6 16 15V13H19V15C19 15.6 18.6 16 18 16Z"
                              fill="currentColor" />
                           <path opacity="0.3"
                              d="M3 2H10C10.6 2 11 2.4 11 3V10C11 10.6 10.6 11 10 11H3C2.4 11 2 10.6 2 10V3C2 2.4 2.4 2 3 2Z"
                              fill="currentColor" />
                           <path d="M7 5H6C5.4 5 5 4.6 5 4V2H8V4C8 4.6 7.6 5 7 5Z" fill="currentColor" />
                           <path opacity="0.3"
                              d="M14 2H21C21.6 2 22 2.4 22 3V10C22 10.6 21.6 11 21 11H14C13.4 11 13 10.6 13 10V3C13 2.4 13.4 2 14 2Z"
                              fill="currentColor" />
                           <path d="M18 5H17C16.4 5 16 4.6 16 4V2H19V4C19 4.6 18.6 5 18 5Z" fill="currentColor" />
                        </svg>
                     </span>
                     <!--end::Svg Icon-->
                  </span>
                  <span class="menu-title">{{ __("board.review.name") }}</span>
                  <span class="menu-arrow"></span>
               </span>
               <!--end:Menu link-->
               <!--begin:Menu sub-->
               <div class="menu-sub menu-sub-accordion">
                  <!--begin:Menu item-->
                  <div class="menu-item">
                     <!--begin:Menu link-->
                     <a class="menu-link" href="{{ route("review.index") }}">
                        <span class="menu-bullet">
                           <span class="bullet bullet-dot"></span>
                        </span>
                        <span class="menu-title">{{ __("board.review.name") }}</span>
                     </a>
                     <!--end:Menu link-->
                     
                  </div>
                  <!--end:Menu item-->
               </div>
               <!--end:Menu sub-->
            </div>
            <!--end:Menu item-->
         </div>
         <!--end::Menu-->
      </div>
      <!--end::Menu wrapper-->
   </div>
   <!--end::sidebar menu-->

</div>