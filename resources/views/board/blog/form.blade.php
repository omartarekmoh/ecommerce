
   <!--begin::Aside column-->
   <div class="d-flex flex-column gap-7 gap-lg-10 w-100 w-lg-300px mb-7 me-lg-10">
      
      <x-board.form.thumbnail>{{ __("board.thumbnail_desc") }}</x-board.form.thumbnail>

      <x-board.form.status name="blog_category_id" head="{{ __('board.blog_category.name') }}" desc="{{ __('board.category.status_desc') }}">
         @foreach ($categories as $index => $category)
         <option value="{{ $category->id }}"  {{ $category->id == optional($product->category ?? null)->id ? "selected" : "" }}>{{ $category->title }}</option>
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
            <x-board.form.input type="text" name="title" :localeCode="$localeCode" :table="$blog ?? null" desc="{{ __('board.blog.body_desc') }}">{{ __("board.blog.title") }} {{ $properties['native'] }}</x-board.form.input>
            @endforeach

            @foreach(LaravelLocalization::getSupportedLocales() as $localeCode => $properties)
            <x-board.form.textarea name="body" :localeCode="$localeCode" :table="optional($blog ?? null)" desc="{{ __('board.blog.body_desc') }}">{{ __("board.blog.body") }} {{ $properties['native'] }}</x-board.form.textarea>
         @endforeach
         </div>
         <!--end::Card header-->
      </div>


      <!--end::General options-->
      <div class="d-flex justify-content-end">
         <!--begin::Button-->
         <a href="{{ route("subcategory.index") }}" class="btn btn-light me-5">{{ __("board.Cancel") }}</a>
         <!--end::Button-->
         <!--begin::Button-->
         <button type="submit" id="kt_ecommerce_add_category_submit" class="btn btn-primary">
            <span class="indicator-label">{{ __("board.save_changes") }}</span>
         </button>
         <!--end::Button-->
      </div>
   </div>
   <!--end::Main column-->