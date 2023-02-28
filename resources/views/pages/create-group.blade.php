@extends('layouts.master')

@section('content')
    <div class="container m-3  bg-light rounded">
        <div class="row pt-3">
            <div>
                <h4>{{__('en.Create Groups')}}</h4>
            </div>
        </div>
        <hr>
        <form method="POST" action="" enctype="">
            <div class="row">
                <div class="col-lg-4 col-md-6 col-12">
                    <label for="createGroupRole" class="form-label fs-6">{{__('en.Name')}}</label>
                    <input type="text" class="form-control bg-grey border-secondary @error('createGroupRole') is-invalid @enderror" placeholder="{{__('en.Name')}}"
                        id="createGroupRole" name="createGroupRole"  value="{{ old('createGroupRole') }}" autocomplete="createGroupRole" required autofocus>
                    @error('createGroupRole')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>
                <div class="col-lg-4 col-md-6 col-12">
                    <label for="createGroupRoleDesc" class="form-label fs-6">{{__('en.Description')}}</label>
                    <input type="text" class="form-control bg-grey border-secondary @error('createGroupRoleDesc') is-invalid @enderror" placeholder="{{__('en.Description')}}"
                        id="createGroupRoleDesc" name="createGroupRoleDesc"  value="{{ old('createGroupRoleDesc') }}" autocomplete="createGroupRoleDesc" required>
                    @error('createGroupRoleDesc')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>
                <div class="col-lg-4 col-md-6 col-12">
                    <label for="createGroupStatus" class="form-label fs-6">{{__('en.Status')}}</label>
                        <br>
                    <input type="checkbox" data-size="sm" data-toggle="toggle" data-on="Active"
                    data-off="Inactive" data-onstyle="success" data-offstyle="danger">
                    @error('createGroupStatus')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>
            </div>
        </form>
        <div class="row mt-4">
            <div class="col-lg-4 col-md-6 col-12">
                <div class="bg-css p-3 w-100">
                    <h4>{{__('en.User Management')}}</h4>
                </div>
                <?php $modeuleName = 'user_management'; ?>
                <div class="overflow-css">
                    <div class="row d-flex p-2 ps-3">
                        <div class="col-5">
                            <div class="form-check form-switch form-check-inline">
                                <input class="form-check-input rounded-pill mt-2"
                                    name="permissions[<?= $modeuleName ?>]['view']" type="checkbox"
                                    id="<?= $modeuleName ?>flexSwitchCheckReverse">
                                <label class="form-check-label" for="inlineCheckbox2">{{__('en.View')}}</label>
                            </div>
                        </div>
                        <div class="col-5">
                            <div class="form-check form-switch form-check-inline">
                                <input class="form-check-input rounded-pill mt-2" type="checkbox"
                                    name="permissions[<?= $modeuleName ?>]['create']"
                                    id="<?= $modeuleName ?>flexSwitchCheckReverse">
                                <label class="form-check-label" for="inlineCheckbox1">{{__('en.Create')}}</label>
                            </div>
                        </div>
                    </div>
                    <div class="row d-flex p-2 ps-3">
                        <div class="col-5">
                            <div class="form-check form-switch form-check-inline">
                                <input class="form-check-input rounded-pill mt-2"
                                    name="permissions[<?= $modeuleName ?>]['view']" type="checkbox"
                                    id="<?= $modeuleName ?>flexSwitchCheckReverse">
                                <label class="form-check-label" for="inlineCheckbox2">{{__('en.View')}}</label>
                            </div>
                        </div>
                        <div class="col-5">
                            <div class="form-check form-switch form-check-inline">
                                <input class="form-check-input rounded-pill mt-2" type="checkbox"
                                    name="permissions[<?= $modeuleName ?>]['create']"
                                    id="<?= $modeuleName ?>flexSwitchCheckReverse">
                                <label class="form-check-label" for="inlineCheckbox1">{{__('en.Create')}}</label>
                            </div>
                        </div>
                    </div>
                    <div class="row d-flex p-2 ps-3">
                        <div class="col-5">
                            <div class="form-check form-switch form-check-inline">
                                <input class="form-check-input rounded-pill mt-2"
                                    name="permissions[<?= $modeuleName ?>]['view']" type="checkbox"
                                    id="<?= $modeuleName ?>flexSwitchCheckReverse">
                                <label class="form-check-label" for="inlineCheckbox2">{{__('en.View')}}</label>
                            </div>
                        </div>
                        <div class="col-5">
                            <div class="form-check form-switch form-check-inline">
                                <input class="form-check-input rounded-pill mt-2" type="checkbox"
                                    name="permissions[<?= $modeuleName ?>]['create']"
                                    id="<?= $modeuleName ?>flexSwitchCheckReverse">
                                <label class="form-check-label" for="inlineCheckbox1">{{__('en.Create')}}</label>
                            </div>
                        </div>
                    </div>


                    <div class="row d-flex p-2 ps-3">
                        <div class="col-5">
                            <div class="form-check form-switch form-check-inline">
                                <input class="form-check-input rounded-pill mt-2"
                                    name="permissions[<?= $modeuleName ?>]['view']" type="checkbox"
                                    id="<?= $modeuleName ?>flexSwitchCheckReverse">
                                <label class="form-check-label" for="inlineCheckbox2">{{__('en.View')}}</label>
                            </div>
                        </div>
                        <div class="col-5">
                            <div class="form-check form-switch form-check-inline">
                                <input class="form-check-input rounded-pill mt-2" type="checkbox"
                                    name="permissions[<?= $modeuleName ?>]['create']"
                                    id="<?= $modeuleName ?>flexSwitchCheckReverse">
                                <label class="form-check-label" for="inlineCheckbox1">{{__('en.Create')}}</label>
                            </div>
                        </div>
                    </div>

                    <div class="row d-flex p-2 ps-3">
                        <div class="col-5">
                            <div class="form-check form-switch form-check-inline">
                                <input class="form-check-input rounded-pill mt-2"
                                    name="permissions[<?= $modeuleName ?>]['view']" type="checkbox"
                                    id="<?= $modeuleName ?>flexSwitchCheckReverse">
                                <label class="form-check-label" for="inlineCheckbox2">{{__('en.View')}}</label>
                            </div>
                        </div>
                        <div class="col-5">
                            <div class="form-check form-switch form-check-inline">
                                <input class="form-check-input rounded-pill mt-2" type="checkbox"
                                    name="permissions[<?= $modeuleName ?>]['create']"
                                    id="<?= $modeuleName ?>flexSwitchCheckReverse">
                                <label class="form-check-label" for="inlineCheckbox1">{{__('en.Create')}}</label>
                            </div>
                        </div>
                    </div>

                    <div class="row d-flex p-2 ps-3">
                        <div class="col-5">
                            <div class="form-check form-switch form-check-inline">
                                <input class="form-check-input rounded-pill mt-2"
                                    name="permissions[<?= $modeuleName ?>]['view']" type="checkbox"
                                    id="<?= $modeuleName ?>flexSwitchCheckReverse">
                                <label class="form-check-label" for="inlineCheckbox2">{{__('en.View')}}</label>
                            </div>
                        </div>
                        <div class="col-5">
                            <div class="form-check form-switch form-check-inline">
                                <input class="form-check-input rounded-pill mt-2" type="checkbox"
                                    name="permissions[<?= $modeuleName ?>]['create']"
                                    id="<?= $modeuleName ?>flexSwitchCheckReverse">
                                <label class="form-check-label" for="inlineCheckbox1">{{__('en.Create')}}</label>
                            </div>
                        </div>
                    </div>

                    <div class="row d-flex p-2 ps-3">
                        <div class="col-5">
                            <div class="form-check form-switch form-check-inline">
                                <input class="form-check-input rounded-pill mt-2"
                                    name="permissions[<?= $modeuleName ?>]['view']" type="checkbox"
                                    id="<?= $modeuleName ?>flexSwitchCheckReverse">
                                <label class="form-check-label" for="inlineCheckbox2">{{__('en.View')}}</label>
                            </div>
                        </div>
                        <div class="col-5">
                            <div class="form-check form-switch form-check-inline">
                                <input class="form-check-input rounded-pill mt-2" type="checkbox"
                                    name="permissions[<?= $modeuleName ?>]['create']"
                                    id="<?= $modeuleName ?>flexSwitchCheckReverse">
                                <label class="form-check-label" for="inlineCheckbox1">{{__('en.Create')}}</label>
                            </div>
                        </div>
                    </div>
                    <div class="row d-flex p-2 ps-3">
                        <div class="col-5">
                            <div class="form-check form-switch form-check-inline">
                                <input class="form-check-input rounded-pill mt-2"
                                    name="permissions[<?= $modeuleName ?>]['view']" type="checkbox"
                                    id="<?= $modeuleName ?>flexSwitchCheckReverse">
                                <label class="form-check-label" for="inlineCheckbox2">{{__('en.View')}}</label>
                            </div>
                        </div>
                        <div class="col-5">
                            <div class="form-check form-switch form-check-inline">
                                <input class="form-check-input rounded-pill mt-2" type="checkbox"
                                    name="permissions[<?= $modeuleName ?>]['create']"
                                    id="<?= $modeuleName ?>flexSwitchCheckReverse">
                                <label class="form-check-label" for="inlineCheckbox1">{{__('en.Create')}}</label>
                            </div>
                        </div>
                    </div>

                    <div class="row d-flex p-2 ps-3">
                        <div class="col-5">
                            <div class="form-check form-switch form-check-inline">
                                <input class="form-check-input rounded-pill mt-2"
                                    name="permissions[<?= $modeuleName ?>]['view']" type="checkbox"
                                    id="<?= $modeuleName ?>flexSwitchCheckReverse">
                                <label class="form-check-label" for="inlineCheckbox2">{{__('en.View')}}</label>
                            </div>
                        </div>
                        <div class="col-5">
                            <div class="form-check form-switch form-check-inline">
                                <input class="form-check-input rounded-pill mt-2" type="checkbox"
                                    name="permissions[<?= $modeuleName ?>]['create']"
                                    id="<?= $modeuleName ?>flexSwitchCheckReverse">
                                <label class="form-check-label" for="inlineCheckbox1">{{__('en.Create')}}</label>
                            </div>
                        </div>
                    </div>

                    <div class="row d-flex p-2 ps-3">
                        <div class="col-5">
                            <div class="form-check form-switch form-check-inline">
                                <input class="form-check-input rounded-pill mt-2"
                                    name="permissions[<?= $modeuleName ?>]['view']" type="checkbox"
                                    id="<?= $modeuleName ?>flexSwitchCheckReverse">
                                <label class="form-check-label" for="inlineCheckbox2">{{__('en.View')}}</label>
                            </div>
                        </div>
                        <div class="col-5">
                            <div class="form-check form-switch form-check-inline">
                                <input class="form-check-input rounded-pill mt-2" type="checkbox"
                                    name="permissions[<?= $modeuleName ?>]['create']"
                                    id="<?= $modeuleName ?>flexSwitchCheckReverse">
                                <label class="form-check-label" for="inlineCheckbox1">{{__('en.Create')}}</label>
                            </div>
                        </div>
                    </div>

                    <div class="row d-flex p-2 ps-3">
                        <div class="col-5">
                            <div class="form-check form-switch form-check-inline">
                                <input class="form-check-input rounded-pill mt-2"
                                    name="permissions[<?= $modeuleName ?>]['view']" type="checkbox"
                                    id="<?= $modeuleName ?>flexSwitchCheckReverse">
                                <label class="form-check-label" for="inlineCheckbox2">{{__('en.View')}}</label>
                            </div>
                        </div>
                        <div class="col-5">
                            <div class="form-check form-switch form-check-inline">
                                <input class="form-check-input rounded-pill mt-2" type="checkbox"
                                    name="permissions[<?= $modeuleName ?>]['create']"
                                    id="<?= $modeuleName ?>flexSwitchCheckReverse">
                                <label class="form-check-label" for="inlineCheckbox1">{{__('en.Create')}}</label>
                            </div>
                        </div>
                    </div>

                    <div class="row d-flex p-2 ps-3">
                        <div class="col-5">
                            <div class="form-check form-switch form-check-inline">
                                <input class="form-check-input rounded-pill mt-2"
                                    name="permissions[<?= $modeuleName ?>]['view']" type="checkbox"
                                    id="<?= $modeuleName ?>flexSwitchCheckReverse">
                                <label class="form-check-label" for="inlineCheckbox2">{{__('en.View')}}</label>
                            </div>
                        </div>
                        <div class="col-5">
                            <div class="form-check form-switch form-check-inline">
                                <input class="form-check-input rounded-pill mt-2" type="checkbox"
                                    name="permissions[<?= $modeuleName ?>]['create']"
                                    id="<?= $modeuleName ?>flexSwitchCheckReverse">
                                <label class="form-check-label" for="inlineCheckbox1">{{__('en.Create')}}</label>
                            </div>
                        </div>
                    </div>

                    <div class="row d-flex pb-2 ps-3">
                        <div class="col-5">
                            <div class="form-check form-switch form-check-inline">
                                <input class="form-check-input rounded-pill mt-2" type="checkbox"
                                    name="permissions[<?= $modeuleName ?>]['edit']"
                                    id="<?= $modeuleName ?>flexSwitchCheckReverse">
                                <label class="form-check-label" for="inlineCheckbox2">{{__('en.Edit')}}</label>
                            </div>
                        </div>
                        <div class="col-5 ps-2">
                            <div class="form-check form-switch form-check-inline">
                                <input class="form-check-input rounded-pill mt-2" type="checkbox"
                                    name="permissions[<?= $modeuleName ?>]['delete']"
                                    id="<?= $modeuleName ?>flexSwitchCheckReverse">
                                <label class="form-check-label" for="inlineCheckbox1">{{__('en.Delete')}}</label>
                            </div>
                        </div>
                    </div>
                    <div class="row d-flex ps-3">
                        <div class="">
                            <div class="form-check form-switch form-check-inline">
                                <input class="form-check-input rounded-pill mt-2" type="checkbox"
                                    name="permissions[<?= $modeuleName ?>]['view all']"
                                    id="<?= $modeuleName ?>flexSwitchCheckReverse">
                                <label class="form-check-label" for="inlineCheckbox2">{{__('en.View all Records')}}</label>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6 col-12">
                <div class="bg-css p-3 w-100">
                    <h4>{{__('en.User Permissions')}}</h4>
                </div>
                <?php $modeuleName = 'user_permissions'; ?>
                <div class="overflow-css">
                    <div class="row d-flex p-2 ps-3">
                        <div class="col-5">
                            <div class="form-check form-switch form-check-inline">
                                <input class="form-check-input rounded-pill mt-2" type="checkbox"
                                    name="permissions[<?= $modeuleName ?>]['view']"
                                    id="<?= $modeuleName ?>flexSwitchCheckReverse">
                                <label class="form-check-label" for="inlineCheckbox2">{{__('en.View')}}</label>
                            </div>
                        </div>
                        <div class="col-5">
                            <div class="form-check form-switch form-check-inline">
                                <input class="form-check-input rounded-pill mt-2" type="checkbox"
                                    name="permissions[<?= $modeuleName ?>]['create']"
                                    id="<?= $modeuleName ?>flexSwitchCheckReverse">
                                <label class="form-check-label" for="inlineCheckbox1">{{__('en.Create')}}</label>
                            </div>
                        </div>
                    </div>
                    <div class="row d-flex pb-2 ps-3">
                        <div class="col-5">
                            <div class="form-check form-switch form-check-inline">
                                <input class="form-check-input rounded-pill mt-2" type="checkbox"
                                    name="permissions[<?= $modeuleName ?>]['edit']"
                                    id="<?= $modeuleName ?>flexSwitchCheckReverse">
                                <label class="form-check-label" for="inlineCheckbox2">{{__('en.Edit')}}</label>
                            </div>
                        </div>
                        <div class="col-5 ps-2">
                            <div class="form-check form-switch form-check-inline">
                                <input class="form-check-input rounded-pill mt-2" type="checkbox"
                                    name="permissions[<?= $modeuleName ?>]['delete']"
                                    id="<?= $modeuleName ?>flexSwitchCheckReverse">
                                <label class="form-check-label" for="inlineCheckbox1">{{__('en.Delete')}}</label>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6 col-12">
                <div class="bg-css p-3 w-100">
                    <h4>{{__('en.Products')}}</h4>
                </div>
                <?php $modeuleName = 'products'; ?>
                <div class="overflow-css">
                    <div class="row d-flex p-2 ps-3">
                        <div class="col-5">
                            <div class="form-check form-switch form-check-inline">
                                <input class="form-check-input rounded-pill mt-2" type="checkbox"
                                    name="permissions[<?= $modeuleName ?>]['view']"
                                    id="<?= $modeuleName ?>flexSwitchCheckReverse">
                                <label class="form-check-label" for="inlineCheckbox2">{{__('en.View')}}</label>
                            </div>
                        </div>
                        <div class="col-5">
                            <div class="form-check form-switch form-check-inline">
                                <input class="form-check-input rounded-pill mt-2" type="checkbox"
                                    name="permissions[<?= $modeuleName ?>]['create']"
                                    id="<?= $modeuleName ?>flexSwitchCheckReverse">
                                <label class="form-check-label" for="inlineCheckbox1">{{__('en.Create')}}</label>
                            </div>
                        </div>
                    </div>
                    <div class="row d-flex pb-2 ps-3">
                        <div class="col-5">
                            <div class="form-check form-switch form-check-inline">
                                <input class="form-check-input rounded-pill mt-2" type="checkbox"
                                    name="permissions[<?= $modeuleName ?>]['edit']"
                                    id="<?= $modeuleName ?>flexSwitchCheckReverse">
                                <label class="form-check-label" for="inlineCheckbox2">{{__('en.Edit')}}</label>
                            </div>
                        </div>
                        <div class="col-5 ps-2">
                            <div class="form-check form-switch form-check-inline">
                                <input class="form-check-input rounded-pill mt-2" type="checkbox"
                                    name="permissions[<?= $modeuleName ?>]['delete']"
                                    id="<?= $modeuleName ?>flexSwitchCheckReverse">
                                <label class="form-check-label" for="inlineCheckbox1">{{__('en.Delete')}}</label>
                            </div>
                        </div>
                    </div>
                    <div class="row d-flex ps-3">
                        <div class="col-5">
                            <div class="form-check form-switch form-check-inline">
                                <input class="form-check-input rounded-pill mt-2" type="checkbox"
                                    name="permissions[<?= $modeuleName ?>]['barcode']"
                                    id="<?= $modeuleName ?>flexSwitchCheckReverse">
                                <label class="form-check-label" for="inlineCheckbox2">{{__('en.Barcode')}}</label>
                            </div>
                        </div>
                        <div class="col-7 ps-2">
                            <div class="form-check form-switch form-check-inline">
                                <input class="form-check-input rounded-pill mt-2" type="checkbox"
                                    name="permissions[<?= $modeuleName ?>]['import']"
                                    id="<?= $modeuleName ?>flexSwitchCheckReverse">
                                <label class="form-check-label" for="inlineCheckbox1">{{__('en.Import')}}</label>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- save button row included below -->
        @include('pages.table-footer')
    </div>
@endsection
