<!--begin::Input group-->
<div class="mb-10 fv-row">
   <!--begin::Label-->
   <label class="required form-label">{{ $slot }}</label>
   <!--end::Label-->
   {{-- @dd(optional($table)->getTranslations($name, [$localeCode]) ?? "") --}}
   <!--begin::Input-->
   <input type="{{ $type }}" name='{{ isset($localeCode) ? $name."[{$localeCode}]" : $name }}' class="form-control mb-2 @error(isset($localeCode) ? $name.".{$localeCode}" : $name) is-invalid @enderror " placeholder="{{ $slot }}" value="{{ old(isset($localeCode) ? $name.".{$localeCode}" : $name, !isset($localeCode) ? optional($table ?? null)->$name : 
   optional($table)->getTranslations($name, [$localeCode]))}}" />
   
   @error(isset($localeCode) ? $name.".{$localeCode}" : $name)
   <div class="invalid-feedback">
      {{ $message }}
    </div>
   @enderror
   <!--end::Input-->
   <!--begin::Description-->
   <div class="text-muted fs-7">{{ $desc }}</div>
   <!--end::Description-->
</div>
<!--end::Input group-->