@extends('Backend.layouts.master')
@section('dashboardDefaultContent')
<!-- Start Content-->
<div class="container-fluid">

    <div class="card col-4 my-3">
        <div class="card-body">
            <h1 class="header-title">Change Password</h1>
            <form id="myForm" action="{{route('profile.passUpdate')}}" method="post"
                enctype="multipart/form-data" class="needs-validation mx-auto">
                {{csrf_field()}}
                <div class="m-3 form-group">
                    <span class="text-danger">{{($errors->has('currentPass'))?($errors->first('currentPass')):''}}</span>
                    <br>
                    <label for="password" class="form-label">Current Password</label>
                    <div class="input-group input-group-merge">
                        <input type="password" name="currentPass" id="password" class="form-control"
                            placeholder="Password">
                        <div class="input-group-text" data-password="false">
                            <span class="password-eye"></span>
                        </div>
                    </div>
                </div>
                <div class="m-3 form-group">
                    <span class="text-danger">{{($errors->has('newPass'))?($errors->first('newPass')):''}}</span>
                    <br>
                    <label for="password" class="form-label">New Password</label>
                    <div class="input-group input-group-merge">
                        <input type="password" name="newPass" id="password" class="form-control"
                            placeholder="Password">
                        <div class="input-group-text" data-password="false">
                            <span class="password-eye"></span>
                        </div>
                    </div>
                </div>

                <div class="m-3 form-group">
                    <span
                        class="text-danger">{{($errors->has('cnewPass') == $errors->has('UserPass'))?($errors->first('cnewPass')):'Password Can not matched'}}</span>
                    <br>
                    <label for="password1" class="form-label">Confirm New Password</label>
                    <div class="input-group input-group-merge">
                        <input type="password" name="cnewPass" id="password1" class="form-control"
                            placeholder="Confirm Password">
                        <div class="input-group-text" data-password="false">
                            <span class="password-eye"></span>
                        </div>
                    </div>
                </div>
                <br>
                <input type="submit" class="mx-3 btn btn-success" value="Update Password">
            </form>
        </div><!-- end col-->
    </div>
</div>
<!-- end ro w-->
@endsection
