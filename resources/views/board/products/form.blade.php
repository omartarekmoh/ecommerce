<!--begin::Aside column-->
<div class="d-flex flex-column gap-7 gap-lg-10 w-100 w-lg-300px mb-7 me-lg-10">
   <x-board.form.thumbnail>{{ __("board.thumbnail_desc") }}</x-board.form.thumbnail>

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

         <x-board.form.input type="text" name="discount" :table="optional($product ?? null)" desc="{{ __('board.product.discount_desc') }}">{{ __("board.product.discount") }}</x-board.form.input>

         <x-board.form.input type="text" name="stock"  :table="$product ?? null" desc="{{ __('board.product.stock_desc') }}">{{ __("board.product.stock") }}</x-board.form.input>

      </div>
      <!--end::Card header-->

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