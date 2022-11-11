 
 <!--begin::Thumbnail settings-->
 <div class="card card-flush py-4">
   <!--begin::Card header-->
   <div class="card-header">
      <!--begin::Card title-->
      <div class="card-title">
         <h2>{{ __("board.thumbnail") }}</h2>
      </div>
      <!--end::Card title-->
   </div>
   <!--end::Card header-->
   <!--begin::Card body-->
   <div class="card-body text-center pt-0">
      <!--begin::Image input-->
      <!--begin::Image input placeholder-->
      <style>
         .image-input-placeholder {
            background-image: url("{{ optional($subcategory->image ?? null)->url() ?? "assets/media/svg/files/blank-image.svg" }}");
         }

         [data-theme="dark"] .image-input-placeholder {
            background-image: url("{{ optional($subcategory->image ?? null)->url() ?? "assets/media/svg/files/blank-image-dark.svg" }}");
         }
      </style>
      <!--end::Image input placeholder-->
 <!--begin::Image input-->
 <div class="image-input image-input-empty image-input-outline image-input-placeholder mb-3"
 data-kt-image-input="true">
 <!--begin::Preview existing avatar-->
 <div class="image-input-wrapper w-150px h-150px"></div>
 <!--end::Preview existing avatar-->
 <!--begin::Label-->
 <label class="btn btn-icon btn-circle btn-active-color-primary w-25px h-25px bg-body shadow"
    data-kt-image-input-action="change" data-bs-toggle="tooltip" title="Change avatar">
    <!--begin::Icon-->
    <i class="bi bi-pencil-fill fs-7"></i>
    <!--end::Icon-->
    <!--begin::Inputs-->
    <input type="file" name="avatar" accept=".png, .jpg, .jpeg" />
    <input type="hidden" name="avatar_remove" />
    <!--end::Inputs-->
 </label>
 <!--end::Label-->
 <!--begin::Cancel-->
 <span class="btn btn-icon btn-circle btn-active-color-primary w-25px h-25px bg-body shadow"
    data-kt-image-input-action="cancel" data-bs-toggle="tooltip" title="Cancel avatar">
    <i class="bi bi-x fs-2"></i>
 </span>
 <!--end::Cancel-->
 <!--begin::Remove-->
 <span class="btn btn-icon btn-circle btn-active-color-primary w-25px h-25px bg-body shadow"
    data-kt-image-input-action="remove" data-bs-toggle="tooltip" title="Remove avatar">
    <i class="bi bi-x fs-2"></i>
 </span>
 <!--end::Remove-->
</div>
<!--end::Image input-->
<!--begin::Description-->
<div class="text-muted fs-7">{{ $slot }}</div>
<!--end::Description-->

</div>
<!--end::Card body-->
</div>
<!--end::Thumbnail settings-->