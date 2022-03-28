@extends('Backend.layouts.master')
@section('dashboardDefaultContent')
<!-- Start Content-->
<div class="container-fluid my-3">
    <div class="card col-12">
        <div class="card-body">
            <div class="container-fluid">
            <h1 class="header-title float-start col-10 mx-0">Edit Vission </h1>
            <a href="{{route('vissions.view')}}" class="col-2 btn btn-light">
                        <i class="mdi mdi-account-edit me-1"></i> View Vission List</a>
            </div> 
            <!-- end col-->
            <form id="myForm" action="{{route('vissions.update',$data->id)}}" method="post" enctype="multipart/form-data" class="needs-validation mx-auto">
                {{csrf_field()}}
                <div class="col-sm-12">
                    <label for="title">Title </label>
                    <input value="{{$data->title}}" name="title" class="form-control" type="text" id="title" placeholder="Enter Slider Short Title">
                    <div class="valid-feedback">
                        <i class="bx bx-radio-circle"></i>
                        This is Your Short Title.
                    </div>
                </div>
                <br>
                <div class="col-sm-12">
                    <label for="longTitle">Long Title </label>
                    <textarea name="ltitle" id="longTitle" class="form-control" cols="30" rows="10" placeholder="Enter Slider Long Title">{{$data->longTitle}}</textarea>
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
                    <img id="iMg" src="{{(!empty($data->image))?asset('Backend/assets/vissionimg/'.$data->image):asset('upload_img/no_img.png')}}" class="liveImg"  alt="">
                </div>
                <br>
                <input type="submit" class="btn btn-success" value="Update Vission">
            </form>
        </div><!-- end col-->
    </div>
</div>
<!-- end ro w-->
@endsection