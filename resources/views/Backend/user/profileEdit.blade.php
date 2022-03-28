@extends('Backend.layouts.master')
@section('dashboardDefaultContent')
<!-- Start Content-->
<div class="container-fluid">
    <div class="row my-3">
        <div class="col-sm-12">
            <!-- Profile -->
            <div class="card bg-primary">
                <div class="card-body profile-user-box">
                    <div class="row">
                        <div class="col-sm-8">
                            <div class="row align-items-center">
                                <div class="col-3">
                                    <div class="avatar-lg">
                                        <style>
                                            .imgP{
                                                width: 200px;
                                                height: 110px;
                                                border-radius: 5%;
                                                /* object-fit: cover */
                                            }
                                        </style>
                                        <img src="{{(!empty($editData->image))?asset('upload_img/'.$editData->image):asset('upload_img/no_img.png')}}" class="imgP">
                                    </div>
                                </div>
                                <div class="col">
                                    <div>
                                        <h4 class="font-20 mt-1 mb-1 text-white">{{$editData->name}}</h4>
                                        <p class="font-16  text-white"> {{$editData->email}}</p>

                                        <ul class="mb-0 list-inline text-light">
                                            <li class="list-inline-item me-3">
                                                <h5 class="mb-1">$ 0</h5>
                                                <p class="mb-0 font-13 text-white-50">Total Revenue</p>
                                            </li>
                                            <li class="list-inline-item">
                                                <h5 class="mb-1">0</h5>
                                                <p class="mb-0 font-13 text-white-50">Number of Orders</p>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div> <!-- end col-->

                        <div class="col-sm-4">
                            <div class="text-center mt-sm-0 mt-3 text-sm-end">
                                <a href="{{route('profile.view')}}" class="btn btn-light">
                                    <i class="mdi mdi-account-edit me-1"></i> View Profile
                                </a>
                            </div>
                        </div> <!-- end col-->
                    </div> <!-- end row -->
                </div> <!-- end card-body/ profile-user-box-->
            </div>
            <!--end profile/ card -->
        </div> <!-- end col-->
    </div>
    <!-- end row -->
</div> <!-- container -->

<!-- Start Content-->
<div class="container-fluid">

    <div class="card col-4">
        <div class="card-body">
            <h1 class="header-title">Edit Profile </h1>
            <form id="myForm" action="{{route('profile.update',$editData->id)}}" method="post" enctype="multipart/form-data" class="needs-validation mx-auto">
                {{csrf_field()}}
                <div class="col-sm-12">
                    <label for="gender">Gender</label>
                    <select class="form-select form-control" name="gender" id="gender" required>
                        <option {{($editData->gender == "Male")?"selected":""}} value="Male">Male</option>
                        <option {{($editData->gender == "Female")?"selected":""}} value="Female">Female</option>
                    </select>
                    <div class="invalid-feedback">
                        <i class="bx bx-radio-circle"></i>
                        This is Gender.
                    </div>
                </div>
                <div class="col-sm-12">
                    <label for="Mobile">Mobile Number</label>
                    <input type="number" value="{{$editData->mobile}}" class="form-control" name="mobile" id="Mobile" placeholder="Mobile Number" required>
                    <div class="valid-feedback">
                        <i class="bx bx-radio-circle"></i>
                        This is Mobile Number.
                    </div>
                </div>
                <div class="col-sm-12">
                    <label for="addr">Address </label>
                    <textarea value="{{$editData->address}}" class="form-control" name="address" id="addr" rows="4" placeholder="Enter Your Address..." required></textarea>
                    <div class="valid-feedback">
                        <i class="bx bx-radio-circle"></i>
                        This is Your Address.
                    </div>
                </div>
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
                        height:150px;
                        border: 1px dashed #000;
                    }
                </style>
                <br>
                <div class="col-sm-12 mx-5">
                    <img id="iMg" src="{{(!empty($editData->image))?asset('upload_img/'.$editData->image):asset('upload_img/no_img.png')}}" class="liveImg"  alt="">
                </div>
                <br>
                <input type="submit" class="btn btn-success" value="Update Profile">
            </form>
        </div><!-- end col-->
    </div>
</div>
<!-- end ro w-->
@endsection
