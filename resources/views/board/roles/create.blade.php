@extends("board.layouts.app")
@section("script")
<!--begin::Vendors Javascript(used for this page only)-->
{{-- <script src="{{ asset(" assets/plugins/custom/datatables/datatables.bundle.js") }}"></script> --}}
{{-- <script src="{{ asset(" assets/plugins/custom/formrepeater/formrepeater.bundle.js") }}"></script> --}}
<!--end::Vendors Javascript-->
<!--begin::Custom Javascript(used for this page only)-->
{{-- <script src="{{ asset(" assets/js/custom/apps/ecommerce/catalog/save-category.js") }}"></script> --}}
<!--end::Custom Javascript-->
@endsection


@section('toolbar')
<x-board.main.toolbar :pages="[__('board.category.name'), __('board.create')]"></x-board.main.toolbar>
@endsection

@section("content")
<div id="kt_app_content_container" class="app-container container-xxl">
   <form id="kt_ecommerce_add_category_form" class="form d-flex flex-column flex-lg-row" enctype="multipart/form-data"
      action="{{ route('role.store') }}" method="POST">
      @csrf
      @include("board.roles.form")
   </form>
</div>
@endsection