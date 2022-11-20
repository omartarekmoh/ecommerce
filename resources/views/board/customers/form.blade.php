<!--begin::Aside column-->
<div class="d-flex flex-column gap-7 gap-lg-10 w-100 w-lg-300px mb-7 me-lg-10">


   <x-board.form.thumbnail :model="$category ?? null">{{ __("board.thumbnail_desc") }}</x-board.form.thumbnail>


   <x-board.form.status name="status" head="{{ __('board.category.status') }}" desc="{{ __('board.category.status_desc') }}">
      <option value="1" {{ old("status", optional($category ?? null)->status) ? "selected" : "" }}>{{ __('board.customer.admin') }}</option>
      <option value="2" {{ old("status", optional($category ?? null)->status) ? "selected" : "" }}>{{ __('board.customer.name') }}</option>
      </x-board.form.status>
   
   <x-board.form.status extra="multiple" name="role[]" head="{{ __('board.role.name') }}" desc="{{ __('board.role.status_desc') }}">
      @foreach ($roles as $index => $role)
      <option value="{{ $role->name }}"  {{ $role->id == optional($user->role ?? null)->id ? "selected" : "" }}>{{ $role->name }}</option>
      @endforeach
      </x-board.form.status>

      {{-- <x-board.form.status  name="status" head="{{ __('board.customer.status') }}" desc="{{ __('board.customer.status_desc') }}">
         {{  }}
         <option value="2" {{ old("status") ? "selected" : "" }}>{{ __('board.customer') }}</option>
         </x-board.form.status> --}}

        



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

         <x-board.form.input type="text" name="name" :table="null" desc="">{{ __("board.customer.user_name") }}</x-board.form.input>

         <x-board.form.input type="text" name="email" :table="null" desc="">{{ __("board.customer.email") }}</x-board.form.input>

         <x-board.form.input type="text" name="phone" :table="null" desc="">{{ __("board.customer.phone") }}</x-board.form.input>

         <x-board.form.input type="password" name="password" :table="null" desc="">{{ __("board.customer.password") }}</x-board.form.input>

         <x-board.form.input type="password" name="password_confirmation" :table="null" desc="">{{ __("board.customer.passwordConfirm") }}</x-board.form.input>

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