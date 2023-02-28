@extends('layouts.master')

@section('content')
    <div class="container m-3 bg-light rounded">
        <div class="row">
            <div>
                <h4>{{__('en.Create Module')}}</h4>
            </div>
        </div>
        <hr>
        <form method="POST" action="" enctype="">
            <div class="row">
                <div class="col-lg-6 col-md-6 col-12">
                    <label for="Name" class="form-label fs-6">{{__('en.Module Name')}} </label>
                    <input type="text"
                        class="form-control bg-grey border-secondary @error('Name') is-invalid @enderror"
                        id="Name" name="Name" placeholder="{{__('en.Name')}}"
                        value="{{ old('Name') }}" autocomplete="Name" required autofocus>
                    @error('Name')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>
                <div class="col-lg-6 col-md-6 col-12">
                    <label for="Status" class="form-label fs-6">{{__('en.Status')}}</label><br>
                    <input type="checkbox" data-size="md" data-toggle="toggle" data-on="Active"
                        data-off="Inactive" data-onstyle="success" data-offstyle="danger">
                    @error('Status')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>
                <div class="col-lg-4 col-md-6 col-12 mt-3">
                    <label for="permissionName" class="form-label fs-6">{{__('en.Permission Name')}}</label>
                    <input type="text" class="form-control bg-grey border-secondary @error('permissionName') is-invalid @enderror" id="permissionName" name="permissionName"
                    placeholder="View" value="{{ old('permissionName') }}" autocomplete="permissionName" required>
                    @error('permissionName')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>
                <div class="col-lg-3 col-md-6 col-12 mt-3">
                    <label for="permissionStatus" class="form-label fs-6">{{__('en.Permission Status')}}</label><br>
                    <input type="checkbox" checked data-size="md"  data-toggle="toggle" data-on="Active"
                        data-off="Inactive" data-onstyle="success" data-offstyle="danger">
                    @error('permissionStatus')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>
                <div class="col-lg-3 col-md-6 col-12 mt-3">
                    <label for="permissionAction" class="form-label fs-6">{{__('en.Action')}}</label><br>
                    <button type="button" class="btn btn-success"><i class="bi bi-plus-lg"></i> Add</button>
                </div>
            </div>
        </form>
        <!-- save button row included below -->
        @include('pages.table-footer')
    </div>
@endsection