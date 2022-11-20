<!--begin::Aside column-->
<div class="d-flex flex-column gap-7 gap-lg-10 w-100 w-lg-300px mb-7 me-lg-10">

   <x-board.form.status name="product_id" head="{{ __('board.product.name') }}" desc="{{ __('board.product.status_desc') }}">
      @foreach ($products as $index => $product)
      <option value="{{ $product->id }}"  {{ $product->id == optional($offer->product ?? null)->id ? "selected" : "" }}>{{ $product->title }}</option>
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

         <x-board.form.input type="text" name="discount" :table="optional($offer ?? null)" desc="{{ __('board.discount.discount_desc') }}">{{ __("board.offer.discount") }}</x-board.form.input>
         
         <x-board.form.input type="date" name="start_date" :table="optional($offer ?? null)" desc="{{ __('board.discount.start_date') }}">{{ __("board.offer.start_date") }}</x-board.form.input>

         <x-board.form.input type="date" name="end_date" :table="optional($offer ?? null)" desc="{{ __('board.discount.end_date') }}">{{ __("board.offer.end_date") }}</x-board.form.input>

      </div>
      <!--end::Card header-->

   <div class="d-flex justify-content-end">
      <!--begin::Button-->
      <a href="{{ route("offer.index") }}" class="btn btn-light me-5">{{ __('board.Cancel') }}</a>
      <!--end::Button-->
      <!--begin::Button-->
      <button type="submit" id="kt_ecommerce_add_category_submit" class="btn btn-primary">
         <span class="indicator-label">{{ __("board.save_changes") }}</span>
      </button>
      <!--end::Button-->
   </div>
</div>
<!--end::Main column-->