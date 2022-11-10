<div class="app-main flex-column flex-row-fluid" id="kt_app_main">
   <!--begin::Content wrapper-->
   <div class="d-flex flex-column flex-column-fluid">
      <!--begin::Toolbar-->
      @yield('toolbar')
      <!--end::Toolbar-->
      <!--begin::Content-->
      <div id="kt_app_content" class="app-content flex-column-fluid">
         <!--begin::Content container-->
            @yield("content")
         </div>
         <!--end::Content container-->
      </div>
      <!--end::Content-->
   </div>
   <!--end::Content wrapper-->
   <!--begin::Footer-->
   <div id="kt_app_footer" class="app-footer">
      <!--begin::Footer container-->
      @include("board.layouts.footer")
      <!--end::Footer container-->
   </div>
   <!--end::Footer-->
</div>