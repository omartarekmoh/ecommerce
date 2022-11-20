<!--begin::Aside column-->
<div class="d-flex flex-column gap-7 gap-lg-10 w-100 w-lg-300px mb-7 me-lg-10">
   <x-board.form.thumbnail :model="$product ?? null">{{ __("board.thumbnail_desc") }}</x-board.form.thumbnail>

   <x-board.form.status :show="true" name="status" head="{{ __('board.product.status') }}" desc="{{ __('board.product.status_desc') }}">
      <option value="0" {{ old("status", optional($product ?? null)->status) ? "selected" : "" }}>{{ __('board.published') }}</option>
      <option value="1" {{ old("status", optional($product ?? null)->status) ? "selected" : "" }}>{{ __('board.unpublished') }}</option>
      </x-board.form.status>


      <x-board.form.status name="category_id" head="{{ __('board.category.name') }}" desc="{{ __('board.category.status_desc') }}">
         @foreach ($categories as $index => $category)
         <option value="{{ $category->id }}"  {{ $category->id == optional($product->category ?? null)->id ? "selected" : "" }}>{{ $category->title }}</option>
         @endforeach
         </x-board.form.status>


         <x-board.form.status name="sub_category_id" head="{{ __('board.subcategory.name') }}" desc="{{ __('board.subcategory.status_desc') }}">
            @foreach ($subcategories as $subcategory)

            <option value="{{ $subcategory->id }}"  {{ $subcategory->id == optional($product->subcategory ?? null)->id ? "selected" : "" }}>{{ $subcategory->title }}</option>
            @endforeach
            </x-board.form.status>


</div>
<!--end::Aside column-->
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
         @foreach(LaravelLocalization::getSupportedLocales() as $localeCode => $properties)
            <x-board.form.input type="text" name="title" :localeCode="$localeCode" :table="$product ?? null" desc="{{ __('board.product.title_desc') }}">{{ __("board.product.title") }} {{ $properties['native'] }}</x-board.form.input>
            @endforeach

            @foreach(LaravelLocalization::getSupportedLocales() as $localeCode => $properties)
            <x-board.form.textarea name="description" :localeCode="$localeCode" :table="optional($product ?? null)" desc="{{ __('board.product.description_desc') }}">{{ __("board.product.description") }} {{ $properties['native'] }}</x-board.form.textarea>
         @endforeach

         <x-board.form.input extra="multiple accept='.png, .jpg, .jpeg'" type="file" name="gallery[]"  :table="null" desc="{{ __('board.product.gallery') }}">{{ __("board.product.gallery") }}</x-board.form.input>

         <x-board.form.input type="text" name="price" error="price" :table="$product ?? null" desc="{{ __('board.product.price_desc') }}">{{ __("board.product.price") }}</x-board.form.input>

       

         <x-board.form.input type="text" name="stock"  :table="$product ?? null" desc="{{ __('board.product.stock_desc') }}">{{ __("board.product.stock") }}</x-board.form.input>

      </div>
      <!--end::Card header-->
	<!--begin::Card-->
   <div class="card card-flush pt-3 mb-5 mb-lg-10">
      
      <!--begin::Card body-->
      <div class="card-body pt-0">
         <!--begin::Custom fields-->
         <div class="d-flex flex-column mb-15 fv-row">
            <!--begin::Label-->
            <div class="fs-5 fw-bold form-label mb-3">Custom fields
            <i class="fas fa-exclamation-circle ms-2 fs-7" data-bs-toggle="popover" data-bs-trigger="hover" data-bs-html="true" data-bs-content="Add custom fields to the billing invoice."></i></div>
            <!--end::Label-->
            <!--begin::Table wrapper-->
            <div class="table-responsive">
               <!--begin::Table-->
               <table id="kt_create_new_custom_fields" class="table align-middle table-row-dashed fw-semibold fs-6 gy-5">
                  <!--begin::Table head-->
                  <thead>
                     <tr class="text-start text-muted fw-bold fs-7 text-uppercase gs-0">
                        <th class="pt-0">{{ __('board.attribute.name') }}</th>
                        <th class="pt-0">{{ __('board.attribute.value') }}</th>
                        <th class="pt-0 text-end">{{ __('board.delete') }}</th>
                     </tr>
                  </thead>
                  <!--end::Table head-->
                  <!--begin::Table body-->
                  <tbody>
                     {{-- {{ dd($attributeValue) }} --}}
                     @if (isset($attributeValues) && !$attributeValues->isEmpty())
                        @foreach ($attributeValues as $attributeValue)
                           
                        @endforeach

                        @else
                     @endif

                     {{-- {{ dd(old('attribute_name')) }} --}}
                     <tr>
                        <td>
                           <input type="hidden"  class="form-control form-control-solid" name="row-name" value="" />
                           <!--begin::Select2-->
                        <select name="attribute_name[]" class="form-select mb-2 @error('attribute_name') is-invalid @enderror" data-control="select2" data-hide-search="true"
                  data-placeholder="Select an option" id="kt_ecommerce_add_category_status_select">
                  @foreach ($productAttributes as $index => $productAttribute)
         <option value="{{ $productAttribute->id }}"  {{ $productAttribute->id == optional($productAttribute->category ?? null)->id ? "selected" : "" }}>{{ $productAttribute->name }}</option>
         @endforeach 
               </select>

               @error('attribute_name')
               <div id="validationServer04Feedback" class="invalid-feedback">
                  {{ $message }}
                  </div>
               @enderror
                        </td>
                        
                        <td>
                           <input type="hidden" class="form-control form-control-solid" value="" />
                           <input type="text" class="form-control form-control-solid" name="attribute_value[]" />
                        </td>
                        <td class="text-end">
                           <button type="button" class="btn btn-icon btn-flex btn-active-light-primary w-30px h-30px me-3" data-kt-action="field_remove">
                              <span class="svg-icon svg-icon-3">
                                 <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M5 9C5 8.44772 5.44772 8 6 8H18C18.5523 8 19 8.44772 19 9V18C19 19.6569 17.6569 21 16 21H8C6.34315 21 5 19.6569 5 18V9Z" fill="currentColor" />
                                    <path opacity="0.5" d="M5 5C5 4.44772 5.44772 4 6 4H18C18.5523 4 19 4.44772 19 5V5C19 5.55228 18.5523 6 18 6H6C5.44772 6 5 5.55228 5 5V5Z" fill="currentColor" />
                                    <path opacity="0.5" d="M9 4C9 3.44772 9.44772 3 10 3H14C14.5523 3 15 3.44772 15 4V4H9V4Z" fill="currentColor" />
                                 </svg>
                              </span>
                              <!--end::Svg Icon-->
                           </button>
                        </td>
                     </tr>
                  </tbody>
                  <!--end::Table body-->
               </table>
               <!--end:Table-->
            </div>
            <!--end::Table wrapper-->
            <!--begin::Add custom field-->
            <button type="button" class="btn btn-light-primary me-auto" id="kt_create_new_custom_fields_add">Add custom field</button>
            <!--end::Add custom field-->
         </div>
         <!--end::Custom fields-->
      
      </div>
      <!--end::Card body-->
   </div>
   <!--end::Card-->
   </div>
   <!--end::General options-->
   <div class="d-flex justify-content-end">
      <!--begin::Button-->
      <a href="{{ route("product.index") }}" class="btn btn-light me-5">{{ __('board.Cancel') }}</a>
      <!--end::Button-->
      <!--begin::Button-->
      <button type="submit" id="kt_ecommerce_add_category_submit" class="btn btn-primary">
         <span class="indicator-label">{{ __("board.save_changes") }}</span>
         
      </button>
      <!--end::Button-->
   </div>
</div>
<!--end::Main column-->