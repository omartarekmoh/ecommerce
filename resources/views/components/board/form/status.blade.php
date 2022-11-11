 <!--begin::Status-->
 <div class="card card-flush py-4">
   <!--begin::Card header-->
   <div class="card-header">
      <!--begin::Card title-->
      <div class="card-title">
         <h2>{{ $head }}</h2>
      </div>
      <!--end::Card title-->
      <!--begin::Card toolbar-->
      @if (isset($show))
         <div class="card-toolbar">
            <div class="rounded-circle bg-success w-15px h-15px" id="kt_ecommerce_add_category_status"></div>
         </div>
      @endif
      
      <!--begin::Card toolbar-->
   </div>
   <!--end::Card header-->
   <!--begin::Card body-->
   <div class="card-body pt-0">
      <!--begin::Select2-->
      <select name="{{ $name }}" class="form-select mb-2 @error($name) is-invalid @enderror" data-control="select2" data-hide-search="true"
         data-placeholder="Select an option" id="kt_ecommerce_add_category_status_select">
         {{ $slot }}
      </select>

      @error($name)
      <div id="validationServer04Feedback" class="invalid-feedback">
         {{ $message }}
       </div>
      @enderror
      <!--end::Select2-->
      <!--begin::Description-->
      <div class="text-muted fs-7">{{ $desc }}</div>
      <!--end::Description-->
   
   </div>
   <!--end::Card body-->
</div>
<!--end::Status-->