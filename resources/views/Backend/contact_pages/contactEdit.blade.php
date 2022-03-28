@extends('Backend.layouts.master')
@section('dashboardDefaultContent')
<!-- Start Content-->
<div class="container-fluid my-3">
    <div class="card col-12">
        <div class="card-body">
            <div class="container-fluid">
            <h1 class="header-title float-start col-10 mx-0">Edit Contact </h1>
            <a href="{{route('contacts.view')}}" class="col-2 btn btn-light">
                        <i class="mdi mdi-account-edit me-1"></i> View Contact List</a>
            </div> 
            <!-- end col-->
            <form id="myForm" action="{{route('contacts.update',$data->id)}}" method="post" enctype="multipart/form-data" class="needs-validation mx-auto">
                {{csrf_field()}}
                <div class="col-sm-12">
                    <label for="Address">Address</label>
                    <input value="{{$data->address}}" name="Address" class="form-control" type="text" id="Address" placeholder="Enter Your Address">
                    <div class="valid-feedback">
                        <i class="bx bx-radio-circle"></i>
                        This is Your Address.
                    </div>
                </div>
                <br>
                <div class="col-sm-12">
                    <label for="mno">Mobile No</label>
                    <input value="{{$data->number}}" name="mnumber" class="form-control" type="text" id="mno" placeholder="Enter Your Mobile No">
                    <div class="valid-feedback">
                        <i class="bx bx-radio-circle"></i>
                        This is Your Mobile No.
                    </div>
                </div>
                <br>
                <div class="col-sm-12">
                    <label for="em">Email Address </label>
                    <input value="{{$data->email}}" name="email" class="form-control" type="text" id="em" placeholder="Enter Your Email Address">
                    <div class="valid-feedback">
                        <i class="bx bx-radio-circle"></i>
                        This is Your Email Address.
                    </div>
                </div>
                <br>
                <div class="col-sm-12">
                    <label for="fb">FaceBook Address </label>
                    <input value="{{$data->fb}}" name="fb" class="form-control" type="text" id="fb" placeholder="Enter Your FaceBook Address">
                    <div class="valid-feedback">
                        <i class="bx bx-radio-circle"></i>
                        This is Your FaceBook Address.
                    </div>
                </div>
                <br>
                <div class="col-sm-12">
                    <label for="tw">Twiter Address </label>
                    <input value="{{$data->tw}}" name="tw" class="form-control" type="text" id="tw" placeholder="Enter Your Twiter Address">
                    <div class="valid-feedback">
                        <i class="bx bx-radio-circle"></i>
                        This is Your Twiter Address.
                    </div>
                </div>
                <br>
                <div class="col-sm-12">
                    <label for="yt">Youtube Address </label>
                    <input value="{{$data->yt}}" name="yt" class="form-control" type="text" id="yt" placeholder="Enter Your Youtube Address">
                    <div class="valid-feedback">
                        <i class="bx bx-radio-circle"></i>
                        This is Your Youtube Address.
                    </div>
                </div>
                <br>
                <input type="submit" class="btn btn-success" value="Update Contact">
            </form>
        </div><!-- end col-->
    </div>
</div>
<!-- end ro w-->
@endsection