@extends('layouts.base')


@section('page-content')
    <div class="kt-subheader kt-grid__item">
        <div class="kt-subheader__main">
            <div class="kt-subheader__title">Batches</div>
            <div class="kt-subheader__separator kt-hidden"></div>
            <div class="kt-subheader__breadcrumbs">
                <a href="#" class="kt-subheader__breadcrumbs-home"><i class="flaticon2-shelter"></i></a>
                <span class="kt-subheader__breadcrumbs-separator"></span>
                <a href="{{ route('batch.index') }}" class="kt-subheader__breadcrumbs-link"> Batch </a>
                <span class="kt-subheader__breadcrumbs-separator"></span>
                <a href="{{ route('batch.show', ["id" => $batch->id]) }}" class="kt-subheader__breadcrumbs-link"> View Batch </a>
            </div>
        </div>
    </div>


    <div class="kt-content  kt-grid__item kt-grid__item--fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="kt-portlet">
                    <div class="kt-portlet__head">
                        <div class="kt-portlet__head-label">
                            <h3 class="kt-portlet__head-title">Batch Details</h3>
                        </div>
                    </div>

                    <div class="kt-portlet__body">
                        @csrf
                        <div class="row">
                            <div class="form-group col-md-6">
                                <label for="name">Name
                                    <span class="required">*</span>
                                </label>
                                <input type="text" id="name" name="name" placeholder="Enter the name : "
                                       value="{{ $batch->user->name }}"
                                       disabled
                                       class="form-control @error('name') is-invalid @enderror">
                                <span class="invalid-feedback">
                                        @error('name')
                                    {{ $message }}
                                    @enderror
                                    </span>
                            </div>

                            <div class="form-group col-md-6">
                                <label for="start-date">Start Date
                                    <span class="required">*</span>
                                </label>
                                <input type="date" id="start-date" placeholder="Enter the start date : "
                                       value="{{ $batch->start_date }}"
                                       disabled
                                       class="form-control">
                            </div>

                            <div class="form-group col-md-6">
                                <label for="end-date">End Date
                                    <span class="required">*</span>
                                </label>
                                <input type="date" id="end-date" placeholder="Enter the end date : "
                                       value="{{ $batch->end_date }}"
                                       disabled
                                       class="form-control">
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

@section('custom-scripts')
    @include('includes.show-toast')
@endsection
