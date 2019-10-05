@extends('layouts.base')

@section('page-content')
    <div class="kt-subheader kt-grid__item">
        <div class="kt-subheader__main">
            <div class="kt-subheader__title">Enroll Students</div>
            <div class="kt-subheader__separator kt-hidden"></div>
            <div class="kt-subheader__breadcrumbs">
                <a href="#" class="kt-subheader__breadcrumbs-home"><i class="flaticon2-shelter"></i></a>
                <span class="kt-subheader__breadcrumbs-separator"></span>
                <a href="{{ route('batch.index') }}" class="kt-subheader__breadcrumbs-link"> Batch </a>
                <span class="kt-subheader__breadcrumbs-separator"></span>
                <a href="{{ route('batch.create') }}" class="kt-subheader__breadcrumbs-link"> Enroll Students </a>
            </div>
        </div>
    </div>


    <div class="kt-content  kt-grid__item kt-grid__item--fluid">
        <div class="row">
            <div class="col-md-12">
                <form action="{{ route('batch.store') }}" method="POST">
                    <div class="kt-portlet">
                        <div class="kt-portlet__head">
                            <div class="kt-portlet__head-label">
                                <h3 class="kt-portlet__head-title">Enroll Students to {{ $batch->name }}</h3>
                            </div>
                        </div>

                        <div class="kt-portlet__body">
                            @csrf
                            <div class="row">
                                <div class="form-group col-md-6">
                                    <label for="students">Students
                                        <span class="required">*</span>
                                    </label>
                                    <select name="students[]" id="students" required class="form-control" multiple="multiple">
                                        <option></option>
                                    </select>
                                    <span class="invalid-feedback">
                                        @error('students')
                                        {{ $message }}
                                        @enderror
                                    </span>
                                </div>

                                <div class="form-group col-md-6">
                                    <label for="subjects">Subjects
                                        <span class="required">*</span>
                                    </label>
                                    <select name="subjects[]" id="subjects" required class="form-control" multiple="multiple">
                                        <option></option>
                                    </select>
                                    <span class="invalid-feedback">
                                        @error('subjects')
                                        {{ $message }}
                                        @enderror
                                    </span>
                                </div>
                            </div>
                        </div>

                        <div class="kt-portlet__foot">
                            <button class="btn btn-primary" type="submit" id="edit">Enroll</button>
                            <a href="/batch" class="btn btn-outline-primary">Cancel</a>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection

@section('custom-scripts')
    @include('includes.show-toast')

    <script src="{{ asset("js/select2-wrapper.js") }}"></script>
    <script src="{{ asset("js/batches/enroll.js") }}"></script>
@endsection
