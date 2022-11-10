<!--begin::Aside column-->
<div class="d-flex flex-column gap-7 gap-lg-10 w-100 w-lg-300px mb-7 me-lg-10">
   <!--begin::Thumbnail settings-->
   <div class="card card-flush py-4">
      <!--begin::Card header-->
      <div class="card-header">
         <!--begin::Card title-->
         <div class="card-title">
            <h2>Thumbnail</h2>
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
               background-image: url("{{ optional($product->image ?? null)->url() ?? "assets/media/svg/files/blank-image.svg" }}");
            }

            [data-theme="dark"] .image-input-placeholder {
               background-image: url("{{ optional($product->image ?? null)->url() ?? "assets/media/svg/files/blank-image-dark.svg" }}");
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
         <div class="text-muted fs-7">Set the category thumbnail image. Only *.png, *.jpg and *.jpeg image files
            are accepted</div>
         <!--end::Description-->
      </div>
      <!--end::Card body-->


   </div>
   <!--end::Thumbnail settings-->


   <!--begin::Status-->
   <div class="card card-flush py-4">
      <!--begin::Card header-->
      <div class="card-header">
         <!--begin::Card title-->
         <div class="card-title">
            <h2>Status</h2>
         </div>
         <!--end::Card title-->
         <!--begin::Card toolbar-->
         <div class="card-toolbar">
            <div class="rounded-circle bg-success w-15px h-15px" id="kt_ecommerce_add_category_status"></div>
         </div>
         <!--begin::Card toolbar-->
      </div>
      <!--end::Card header-->
      <!--begin::Card body-->
      <div class="card-body pt-0">
         <!--begin::Select2-->
         <select name="status" class="form-select mb-2 @error("status")is-invalid @enderror" data-control="select2" data-hide-search="true"
            data-placeholder="Select an option" id="kt_ecommerce_add_category_status_select">
            <option value="0" {{ old("status", optional($product ?? null)->status) ? "selected" : "" }}>Published
            </option>
            <option value="1" {{ old("status", optional($product ?? null)->status) ? "selected" : "" }}>Unpublished
            </option>
         </select>

         @error("status")
            <div id="validationServer04Feedback" class="invalid-feedback">
               {{ $message }}
             </div>
            @enderror
         <!--end::Select2-->
         <!--begin::Description-->
         <div class="text-muted fs-7">Set the category status.</div>
         <!--end::Description-->
        
      </div>
      <!--end::Card body-->
   </div>
   <!--end::Status-->


   <!--begin::Status-->
   <div class="card card-flush py-4">
      <!--begin::Card header-->
      <div class="card-header">
         <!--begin::Card title-->
         <div class="card-title">
            <h2>Categories</h2>
         </div>
         <!--end::Card title-->

      </div>
      <!--end::Card header-->
      <!--begin::Card body-->
      {{-- @dd($product->category)) --}}
      <div class="card-body pt-0">
         <!--begin::Select2-->
         <select name="category" class="form-select mb-2 @error("category")is-invalid @enderror" data-control="select2" data-hide-search="true"
            data-placeholder="Select an option" id="kt_ecommerce_add_category_status_select">
            @foreach ($categories as $index => $category)
            <option value="{{ $category->id }}" {{ $category->id == optional($product->subcategory ?? null)->id ? "selected" : "" }}>{{ $category->title }}</option>
            @endforeach


         </select>

         @error("category")
            <div id="validationServer04Feedback" class="invalid-feedback">
               {{ $message }}
             </div>
            @enderror
         <!--end::Select2-->
         <!--begin::Description-->
         <div class="text-muted fs-7">Set the category.</div>
         <!--end::Description-->
      </div>
      <!--end::Card body-->
   </div>
   <!--end::Status-->


   <!--begin::Status-->
   <div class="card card-flush py-4">
      <!--begin::Card header-->
      <div class="card-header">
         <!--begin::Card title-->
         <div class="card-title">
            <h2>Sub Categories</h2>
         </div>
         <!--end::Card title-->
         <!--begin::Card toolbar-->
         <div class="card-toolbar">
            <div class="rounded-circle bg-success w-15px h-15px" id="kt_ecommerce_add_category_status"></div>
         </div>
         <!--begin::Card toolbar-->
      </div>
      <!--end::Card header-->
      <!--begin::Card body-->
      <div class="card-body pt-0">
         <!--begin::Select2-->
         <select name="subcategory" class="form-select mb-2 @error("subcategory")is-invalid @enderror" data-control="select2" data-hide-search="true"
            data-placeholder="Select an option" id="kt_ecommerce_add_category_status_select">
            @foreach ($subcategories as $subcategory)

            <option value="{{ $subcategory->id }}"  {{ $subcategory->id == optional($product->subcategory ?? null)->id ? "selected" : "" }}>{{ $subcategory->title }}</option>
            @endforeach
         </select>

         @error("subcategory")
            <div id="validationServer04Feedback" class="invalid-feedback">
               {{ $message }}
             </div>
            @enderror
         <!--end::Select2-->
         <!--begin::Description-->
         <div class="text-muted fs-7">Set the subcategory.</div>
         <!--end::Description-->

      </div>
      <!--end::Card body-->
   </div>
   <!--end::Status-->

</div>
<!--end::Aside column-->
<!--begin::Main column-->
<div class="d-flex flex-column flex-row-fluid gap-7 gap-lg-10">
   <!--begin::General options-->
   <div class="card card-flush py-4">
      <!--begin::Card header-->
      <div class="card-header">
         <div class="card-title">
            <h2>General</h2>
         </div>
      </div>
      <!--end::Card header-->
      <!--begin::Card body-->
      <div class="card-body pt-0">
         <!--begin::Input group-->
         <div class="mb-10 fv-row">
            <!--begin::Label-->
            <label class="required form-label">Category Name</label>
            <!--end::Label-->
            <!--begin::Input-->
            <input type="text" name="title" class="form-control mb-2 @error("description")is-invalid @enderror" placeholder="Product name" value="{{ old(" title", optional($product ?? null)->title) }}" />

            @error("title")
            <div id="validationServer04Feedback" class="invalid-feedback">
               {{ $message }}
             </div>
            @enderror
            <!--end::Input-->
            <!--begin::Description-->
            <div class="text-muted fs-7">A description name is required and recommended to be unique.</div>
            <!--end::Description-->
         </div>
         <!--end::Input group-->

         <!--begin::Input group-->
         <div class="mb-10 fv-row">
            <!--begin::Label-->
            <label class="required form-label">Description</label>
            <!--end::Label-->
            <!--begin::Input-->
            <textarea name="description"
               class="form-control mb-2 @error("description")is-invalid @enderror">{{ old("description", optional($product ?? null)->description) }}</textarea>

               @error("category")
               <div id="validationServer04Feedback" class="invalid-feedback">
                  {{ $message }}
                </div>
               @enderror
            <!--end::Input-->
            <!--begin::Description-->
            <div class="text-muted fs-7">Put a description for the category.</div>
            <!--end::Description-->
         </div>
         <!--end::Input group-->
      </div>
      <!--end::Card header-->

      <!--begin::Pricing-->
      <div class="card card-flush py-4">
         <!--begin::Card header-->
         <div class="card-header">
            <div class="card-title">
               <h2>Pricing</h2>
            </div>
         </div>
         <!--end::Card header-->
         <!--begin::Card body-->
         <div class="card-body pt-0">
            <!--begin::Input group-->
            <div class="mb-10 fv-row">
               <!--begin::Label-->
               <label class="required form-label">Base Price</label>
               <!--end::Label-->
               <!--begin::Input-->
               <input type="text" name="price" class="form-control mb-2 @error("description")is-invalid @enderror" placeholder="Product price" value="{{ old("price", optional($product ?? null)->price) }}" />

               @error("price")
               <div id="validationServer04Feedback" class="invalid-feedback">
                  {{ $message }}
                </div>
               @enderror
               <!--end::Input-->
               <!--begin::Description-->
               <div class="text-muted fs-7">Set the product price.</div>
               <!--end::Description-->
            </div>
            <!--end::Input group-->

         </div>
         <!--end::Card header-->
      </div>
      <!--end::Pricing-->

      <div class="card-body pt-0">
      </div>
      <!--begin::Pricing-->
      <div class="card card-flush py-4">
         <!--begin::Card header-->
         <div class="card-header">
            <div class="card-title">
               <h2>Discount</h2>
            </div>
         </div>
         <!--end::Card header-->
         <!--begin::Card body-->
         <div class="card-body pt-0">
            <!--begin::Input group-->
            <div class="mb-10 fv-row">
               <!--begin::Label-->
               <label class="required form-label">Discount</label>
               <!--end::Label-->
               <!--begin::Input-->
               <input type="text" name="discount" class="form-control mb-2 @error("description")is-invalid @enderror" placeholder="Product price" value="{{ old("discount", optional($product ?? null)->discount) }}" />

               @error("discount")
               <div id="validationServer04Feedback" class="invalid-feedback">
                  {{ $message }}
                </div>
               @enderror
               <!--end::Input-->
               <!--begin::Description-->
               <div class="text-muted fs-7">Set the product discount.</div>
               <!--end::Description-->
            </div>
            <!--end::Input group-->

         </div>
         <!--end::Card header-->
      </div>
      <!--end::Pricing-->

      <!--begin::Pricing-->
      <div class="card card-flush py-4">
         <!--begin::Card header-->
         <div class="card-header">
            <div class="card-title">
               <h2>Stock</h2>
            </div>
         </div>
         <!--end::Card header-->
         <!--begin::Card body-->
         <div class="card-body pt-0">
            <!--begin::Input group-->
            <div class="mb-10 fv-row">
               <!--begin::Label-->
               <label class="required form-label">Stock</label>
               <!--end::Label-->
               <!--begin::Input-->
               <input type="text" name="stock" class="form-control mb-2 @error("description")is-invalid @enderror" placeholder="Product price" value="{{ old("stock", optional($product ?? null)->stock) }}" />

               @error("stock")
               <div id="validationServer04Feedback" class="invalid-feedback">
                  {{ $message }}
                </div>
               @enderror
               <!--end::Input-->
               <!--begin::Description-->
               <div class="text-muted fs-7">Set the product stock.</div>
               <!--end::Description-->
            </div>
            <!--end::Input group-->

         </div>
         <!--end::Card header-->
      </div>
      <!--end::Pricing-->

   </div>
   <!--end::General options-->
   <div class="d-flex justify-content-end">
      <!--begin::Button-->
      <a href="{{ route("category.index") }}" class="btn btn-light me-5">Cancel</a>
      <!--end::Button-->
      <!--begin::Button-->
      <button type="submit" id="kt_ecommerce_add_category_submit" class="btn btn-primary">
         <span class="indicator-label">Save Changes</span>
         <span class="indicator-progress">Please wait...
            <span class="spinner-border spinner-border-sm align-middle ms-2"></span></span>
      </button>
      <!--end::Button-->
   </div>
</div>
<!--end::Main column-->