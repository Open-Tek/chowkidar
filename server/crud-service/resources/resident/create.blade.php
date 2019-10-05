@extends('layouts.base')


@section('page-content')
    <div class="kt-subheader kt-grid__item">
        <div class="kt-subheader__main">
            <div class="kt-subheader__title">Person</div>
            <div class="kt-subheader__separator kt-hidden"></div>
            <div class="kt-subheader__breadcrumbs">
                <a href="#" class="kt-subheader__breadcrumbs-home"><i class="flaticon2-shelter"></i></a>
                <span class="kt-subheader__breadcrumbs-separator"></span>
                <a href="{{ route('resident') }}" class="kt-subheader__breadcrumbs-link"> Person </a>
                <span class="kt-subheader__breadcrumbs-separator"></span>
                <a href="{{ route('person.create') }}" class="kt-subheader__breadcrumbs-link"> Add Person </a>
            </div>
        </div>
    </div>


    <div class="kt-content  kt-grid__item kt-grid__item--fluid">
        <div class="row">
            <div class="col-md-12">
                <form action="{{ route('person.store') }}" method="POST">
                    <div class="kt-portlet">
                        <div class="kt-portlet__head">
                            <div class="kt-portlet__head-label">
                                <h3 class="kt-portlet__head-title">Add Person</h3>
                            </div>
                        </div>

                        <div class="kt-portlet__body">
                            @csrf
                            <div class="row">
                                <div class="form-group col-md-12">
                                    <label for="name">Name
                                        <span class="required">*</span>
                                    </label>
                                    <input type="text" id="name" name="name" placeholder="Enter the name : "
                                           value="{{ old('name') }}"
                                           class="form-control @error('name') is-invalid @enderror">
                                    <span class="invalid-feedback">
                                        @error('name')
                                        {{ $message }}
                                        @enderror
                                    </span>

                                    <label for="flat_id">Flat Id
                                        <span class="required">*</span>
                                    </label>
                                    <select class="form-control @error('name') is-invalid @enderror" name="flat_id" id="flat_id">

                                        <option disabled selected>Enter Flat Number</option>
                                        {{--@foreach( $flats as $flat )--}}
                                            {{--<option value={{ $flat->id }}>--}}
                                                {{--{{ $flat->name }}--}}
                                                {{--{{ $flat->id }}--}}
                                            {{--</option>--}}
                                        {{--@endforeach--}}
                                    </select>
                                    <span class="invalid-feedback">
                                        @error('name')
                                        {{ $message }}
                                        @enderror
                                    </span>
                                    @if ($errors->any())
                                        @foreach ($errors->all() as $error)
                                            <div>{{$error}}</div>
                                        @endforeach
                                    @endif
                                </div>
                            </div>

                        </div>

                        <div class="kt-portlet__foot">
                            <button class="btn btn-primary" type="submit" id="add">Add Person</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection

@section('custom-scripts')
    @include('includes.show-toast')
@endsection
