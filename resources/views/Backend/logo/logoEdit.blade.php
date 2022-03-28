@extends('Backend.layouts.master')
@section('dashboardDefaultContent')
<!-- Start Content-->
<div class="container-fluid my-3">
    <div class="card col-4">
        <div class="card-body">
            <div class="float-end container-fluid">
            <h1 class="header-title float-start col-6 mx-0">Update Logo </h1>
                    <a href="{{route('logos.view')}}" class="col-6 btn btn-light">
                        <i class="mdi mdi-account-edit me-1"></i> View Logo List
                    </a>
            </div> <!-- end col-->
            <form id="myForm" action="{{route('logos.update',$data->id)}}" method="post" enctype="multipart/form-data" class="needs-validation mx-auto">
                {{csrf_field()}}
                <div class="col-sm-12">
                    <label for="addr">Image </label>
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
                    <img id="iMg" src="{{(!empty($data->image))?asset('logoImg/'.$data->image):asset('upload_img/no_img.png')}}" class="liveImg"  alt="">
                </div>
                <br>
                <input type="submit" class="btn btn-success" value="Update Logo">
            </form>
        </div><!-- end col-->
    </div>
</div>
<!-- end ro w-->
@endsection