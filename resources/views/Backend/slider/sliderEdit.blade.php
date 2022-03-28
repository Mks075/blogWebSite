@extends('Backend.layouts.master')
@section('dashboardDefaultContent')
<!-- Start Content-->
<div class="container-fluid my-3">
    <div class="card col-6">
        <div class="card-body">
            <div class="container-fluid">
            <h1 class="header-title float-start col-9 mx-0">Manage Slider </h1>
            <a href="{{route('sliders.view')}}" class="col-3 btn btn-light">
                        <i class="mdi mdi-account-edit me-1"></i> View Slider</a>
            </div> <!-- end col-->
            <form id="myForm" action="{{route('sliders.update',$data->id)}}" method="post" enctype="multipart/form-data" class="needs-validation mx-auto">
                {{csrf_field()}}
                <div class="col-sm-12">
                    <label for="shortTitle">Short Title </label>
                    <input  value="{{$data->shortTitle}}" name="stitle" class="form-control" type="text" id="shortTitle" placeholder="Enter Slider Short Title">
                    <div class="valid-feedback">
                        <i class="bx bx-radio-circle"></i>
                        This is Your Short Title.
                    </div>
                </div>
                <br>
                <div class="col-sm-12">
                    <label for="longTitle">Long Title </label>
                    <input  value="{{$data->longTitle}}" name="ltitle" class="form-control" type="text" id="longTitle" placeholder="Enter Slider Long Title">
                    <div class="valid-feedback">
                        <i class="bx bx-radio-circle"></i>
                        This is Your Long Title.
                    </div>
                </div>
                <br>
                <div class="col-sm-12">
                    <label for="">Image </label>
                    <input  value="{{$data->image}}" name="image" class="form-control" type="file" id="showImage" placeholder="Enter Your Image">
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
                    <img id="iMg" src="{{(!empty($data->image))?asset('Backend/assets/slider1/'.$data->image):asset('upload_img/no_img.png')}}" class="liveImg"  alt="">
                </div>
                <br>
                <input type="submit" class="btn btn-success" value="Update Slide">
            </form>
        </div><!-- end col-->
    </div>
</div>
<!-- end ro w-->
@endsection