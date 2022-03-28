@extends('Backend.layouts.master')
@section('dashboardDefaultContent')
<!-- Start Content-->
<div class="container-fluid my-3">
    <div class="card col-12">
        <div class="card-body">
            <div class="container-fluid">
            <h1 class="header-title float-start col-10 mx-0">Edit Post </h1>
            <a href="{{route('postNews.view')}}" class="col-2 btn btn-light">
                        <i class="mdi mdi-account-edit me-1"></i> View Post List</a>
            </div> 
            <!-- end col-->
            <form id="myForm" action="{{route('postNews.update',$data->id)}}" method="post" enctype="multipart/form-data" class="needs-validation mx-auto">
                {{csrf_field()}}
                <div class="col-sm-12">
                    <label for="date">Date </label>
                    <input value="{{$data->date}}" name="date" class="form-control" type="text" id="date" placeholder="Enter Slider Short Title">
                    <div class="valid-feedback">
                        <i class="bx bx-radio-circle"></i>
                        This is Your Short Title.
                    </div>
                </div>
                <div class="col-sm-12">
                    <label for="shortTitle">Short Title </label>
                    <input value="{{$data->shortTitle}}" name="shortTitle" class="form-control" type="text" id="shortTitle" placeholder="Enter Slider Short Title">
                    <div class="valid-feedback">
                        <i class="bx bx-radio-circle"></i>
                        This is Your Short Title.
                    </div>
                </div>
                <br>
                <div class="col-sm-12">
                    <label for="longTitle">Long Title </label>
                    <textarea name="longTitle" id="longTitle" class="form-control" cols="30" rows="10" placeholder="Enter Slider Long Title">{{$data->longTitle}}</textarea>
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
                    <img id="iMg" src="{{(!empty($data->image))?asset('Backend/assets/postNewsimg/'.$data->image):asset('upload_img/no_img.png')}}" class="liveImg"  alt="">
                </div>
                <br>
                <input type="submit" class="btn btn-success" value="Update POST">
            </form>
        </div><!-- end col-->
    </div>
</div>
<!-- end ro w-->
@endsection