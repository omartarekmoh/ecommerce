@extends("board.layouts.app")

@section("script")
<!--begin::Vendors Javascript(used for this page only)-->
<script src="{{ asset("assets/plugins/custom/datatables/datatables.bundle.js") }}"></script>
<script src="{{ asset("assets/plugins/custom/formrepeater/formrepeater.bundle.js") }}"></script>
<script src="{{ asset("assets/js/custom/utilities/modals/create-app.js") }}"></script>
<script src="{{ asset("assets/js/custom/apps/ecommerce/catalog/save-product.js") }}"></script>
<script src="{{ asset("assets/js/custom/apps/subscriptions/add/advanced.js") }}"></script>

@endsection


@section('toolbar')
<x-board.main.toolbar :pages="[__('board.customer.name'), __('board.create')]"></x-board.main.toolbar>
@endsection

@section("content")

<div id="kt_app_content_container" class="app-container container-xxl">
   <form id="kt_ecommerce_add_category_form" class="form d-flex flex-column flex-lg-row" enctype="multipart/form-data"
      action="{{ route('customer.store') }}" method="POST">
      @csrf
      @include("board.customers.form")
   </form>
</div>
@endsection