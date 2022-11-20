
   <!--begin::Aside column-->
   <div class="d-flex flex-column gap-7 gap-lg-10 w-100 w-lg-300px mb-7 me-lg-10">
      <x-board.form.thumbnail>{{ __("board.thumbnail_desc") }}</x-board.form.thumbnail>
      
      <x-board.form.status :show="true" name="status" head="{{ __('board.blog_category.status') }}" desc="{{ __('board.category.status_desc') }}">
         <option value="0" {{ old("status", optional($blogCategory ?? null)->status) ? "selected" : "" }}>{{ __('board.published') }}</option>
         <option value="1" {{ old("status", optional($blogCategory ?? null)->status) ? "selected" : "" }}>{{ __('board.unpublished') }}</option>
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
               <h2>{{ __('board.general') }}</h2>
            </div>
         </div>
         <!--end::Card header-->
         <!--begin::Card body-->
         <div class="card-body pt-0">
            @foreach(LaravelLocalization::getSupportedLocales() as $localeCode => $properties)
            <x-board.form.input type="text" name="title" :localeCode="$localeCode" :table="$blogCategory ?? null" desc="{{ __('board.blog_category.title_desc') }}">{{ __("board.blog_category.title") }} {{ $properties['native'] }}</x-board.form.input>
            @endforeach


            @foreach(LaravelLocalization::getSupportedLocales() as $localeCode => $properties)
            <x-board.form.textarea name="description" :localeCode="$localeCode" :table="optional($blogCategory ?? null)" desc="{{ __('board.blog_category.description_desc') }}">{{ __("board.blog_category.description") }} {{ $properties['native'] }}</x-board.form.textarea>
         @endforeach


         </div>
         <!--end::Card header-->
      </div>
      <!--end::General options-->
      <div class="d-flex justify-content-end">
         <!--begin::Button-->
         <a href="{{ route("blog_category.index") }}" class="btn btn-light me-5">{{ __('board.Cancel') }}</a>
         <!--end::Button-->
         <!--begin::Button-->
         <button type="submit" id="kt_ecommerce_add_category_submit" class="btn btn-primary">
            <span class="indicator-label">{{ __("board.save_changes") }}</span>
         </button>
         <!--end::Button-->
      </div>
   </div>
   <!--end::Main column-->