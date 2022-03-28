@extends('Backend.layouts.master')
@section('dashboardDefaultContent')
<!-- Start Content-->
<div class="container-fluid my-3">
    <div class="card col-6">
        <div class="card-body">
            <div class="container-fluid">
            <h1 class="header-title float-start col-9 mx-0">Manage Slider </h1>
            <a href="{{route('sliders.view')}}" class="col-3 btn btn-light">
                        <i class="mdi mdi-account-edit me-1"></i> View Slider List</a>
            </div> <!-- end col-->
            <form id="myForm" action="{{route('sliders.store')}}" method="post" enctype="multipart/form-data" class="needs-validation mx-auto">
                {{csrf_field()}}
                <div class="col-sm-12">
                    <label for="shortTitle">Short Title </label>
                    <input name="stitle" class="form-control" type="text" id="shortTitle" placeholder="Enter Slider Short Title">
                    <div class="valid-feedback">
                        <i class="bx bx-radio-circle"></i>
                        This is Your Short Title.
                    </div>
                </div>
                <br>
                <div class="col-sm-12">
                    <label for="longTitle">Long Title </label>
                    <input name="ltitle" class="form-control" type="text" id="longTitle" placeholder="Enter Slider Long Title">
                    <div class="valid-feedback">
                        <i class="bx bx-radio-circle"></i>
                        This is Your Long Title.
                    </div>
                </div>
                <br>
                <div class="col-sm-12">
                    <label for="">Image </label>
                    <input name="image" class="form-control" type="file" id="showImage" placeholder="Enter Your Image">
                    <div class="valid-feedback">
                        <i class="bx bx-radio-circle"></i>
                        This is Your Image.
                    </div>
                </div>
                <style>
                    .liveImg{
                        width: 250px;
                        height:170px;
                        border: 1px dashed #000;
                    }
                </style>
                <br>
                <div class="col-sm-12 mx-5">
                    <img id="iMg" src="{{(!empty($editData->image))?asset('upload_img/'.$editData->image):asset('upload_img/no_img.png')}}" class="liveImg"  alt="">
                </div>
                <br>
                <input type="submit" class="btn btn-success" value="Submit Slide">
            </form>
        </div><!-- end col-->
    </div>
</div>
<!-- end ro w-->
@endsection