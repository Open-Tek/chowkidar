@extends('layouts.base')

@section('custom-styles')
    <!--begin::Page Vendors Styles(used by this page) -->
    <link href="{{ asset("assets/vendors/custom/datatables/datatables.bundle.css") }}" rel="stylesheet"
          type="text/css"/>
@endsection

@section('page-content')

    <div class="kt-subheader kt-grid__item">
        <div class="kt-subheader__main">
            <div class="kt-subheader__title">Person</div>
            <div class="kt-subheader__separator kt-hidden"></div>
            <div class="kt-subheader__breadcrumbs">
                <a href="#" class="kt-subheader__breadcrumbs-home"><i class="flaticon2-shelter"></i></a>
                <span class="kt-subheader__breadcrumbs-separator"></span>
                <a href="{{ route('person.index') }}" class="kt-subheader__breadcrumbs-link"> Person </a>
                <span class="kt-subheader__breadcrumbs-separator"></span>
                <a href="{{ route('resident') }}" class="kt-subheader__breadcrumbs-link"> Manage person  </a>
            </div>
        </div>
    </div>

    <div class="kt-content  kt-grid__item kt-grid__item--fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="kt-portlet">
                    <div class="kt-portlet__head">
                        <div class="kt-portlet__head-label">
                            <h3 class="kt-portlet__head-title">Manage Building</h3>
                        </div>
                    </div>

                    <div class="kt-portlet__body">
                        <table id="building" class="table table-bordered">
                            <thead>
                            <tr>
                                <th>Name</th>
                                <th>Edit</th>
                                <th>Delete</th>
                            </tr>
                            </thead>
                            <td>Abcd</td>
                            <td>Abcd</td>
                            <td>Abcd</td>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>


    @component('includes.confirm-modal', [
        "id" => "deleteModal",
        "title" => "Delete Batch",
        "message" => "Are you sure you want to delete the Building ? ",
        "path" => '/building',
    ])
        @slot('method')
            @method('DELETE')
        @endslot
    @endcomponent
@endsection

@section('custom-scripts')
    <!--begin::Page Vendors(used by this page) -->
    <script src="{{ asset("assets/vendors/custom/datatables/datatables.bundle.js") }}" type="text/javascript"></script>

    <!--end::Page Vendors -->

    <!--begin::Page Scripts(used by this page) -->
    <script src="{{ asset("assets/js/demo1/pages/crud/datatables/basic/paginations.js") }}"
            type="text/javascript"></script>
    @include('includes.show-toast')

    <script src="{{ asset("js/building/manage.js") }}"></script>
@endsection
