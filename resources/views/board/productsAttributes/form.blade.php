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
            <x-board.form.input type="text" name="name" :localeCode="$localeCode" :table="$productAttribute ?? null" desc="{{ __('board.attribute.title_desc') }}">{{ __("board.attribute.title") }} {{ $properties['native'] }}</x-board.form.input>
            @endforeach


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