@extends('Backend.layouts.master')
@section('dashboardDefaultContent')
<!-- Start Content-->
<div class="container-fluid">
    <div class="row">
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
                                        <img src="{{(!empty($user->image))?asset('upload_img/'.$user->image):asset('upload_img/no_img.png')}}" alt="" class="imgP">
                                    </div>
                                </div>
                                <div class="col">
                                    <div>
                                        <h4 class="font-20 mt-1 mb-1 text-white">{{$user->name}}</h4>
                                        <p class="font-16  text-white"> {{$user->email}}</p>

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
                                <a href="{{route('profile.edit')}}" class="btn btn-light">
                                    <i class="mdi mdi-account-edit me-1"></i> Edit Profile
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


    <div class="row">
        <div class="col-xl-4">
            <!-- Personal-Information -->
            <div class="card">
                <div class="card-body">
                    <h4 class="header-title mt-0 mb-3">Seller Information</h4>
                    <p class="text-muted font-13">
                        Hye, I’m Michael Franklin residing in this beautiful world. I create websites and mobile apps
                        with great UX and UI design. I have done work with big companies like Nokia, Google and Yahoo.
                        Meet me or Contact me for any queries. One Extra line for filling space. Fill as many you want.
                    </p>

                    <hr>

                    <div class="text-start">
                        <p class="text-muted"><strong>Full Name :</strong> <span class="ms-2">Michael A. Franklin</span>
                        </p>

                        <p class="text-muted"><strong>Mobile :</strong><span class="ms-2">(+12) 123 1234 567</span></p>

                        <p class="text-muted"><strong>Email :</strong> <span class="ms-2">coderthemes@gmail.com</span>
                        </p>

                        <p class="text-muted"><strong>Location :</strong> <span class="ms-2">USA</span></p>

                        <p class="text-muted"><strong>Languages :</strong>
                            <span class="ms-2"> English, German, Spanish </span>
                        </p>
                        <p class="text-muted mb-0" id="tooltip-container"><strong>Elsewhere :</strong>
                            <a class="d-inline-block ms-2 text-muted" data-bs-container="#tooltip-container"
                                data-bs-placement="top" data-bs-toggle="tooltip" href="" title="Facebook"><i
                                    class="mdi mdi-facebook"></i></a>
                            <a class="d-inline-block ms-2 text-muted" data-bs-container="#tooltip-container"
                                data-bs-placement="top" data-bs-toggle="tooltip" href="" title="Twitter"><i
                                    class="mdi mdi-twitter"></i></a>
                            <a class="d-inline-block ms-2 text-muted" data-bs-container="#tooltip-container"
                                data-bs-placement="top" data-bs-toggle="tooltip" href="" title="Skype"><i
                                    class="mdi mdi-skype"></i></a>
                        </p>

                    </div>
                </div>
            </div>
        </div> <!-- end col-->
        <div class="col-xl-8">
            <div class="card">
                <div class="card-body">
                    <h4 class="header-title mb-3">My Products</h4>

                    <div class="table-responsive">
                        <table class="table table-hover table-centered mb-0">
                            <thead>
                                <tr>
                                    <th>Product</th>
                                    <th>Price</th>
                                    <th>Stock</th>
                                    <th>Amount</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>ASOS Ridley High Waist</td>
                                    <td>$79.49</td>
                                    <td><span class="badge bg-primary">82 Pcs</span></td>
                                    <td>$6,518.18</td>
                                </tr>
                                <tr>
                                    <td>Marco Lightweight Shirt</td>
                                    <td>$128.50</td>
                                    <td><span class="badge bg-primary">37 Pcs</span></td>
                                    <td>$4,754.50</td>
                                </tr>
                                <tr>
                                    <td>Half Sleeve Shirt</td>
                                    <td>$39.99</td>
                                    <td><span class="badge bg-primary">64 Pcs</span></td>
                                    <td>$2,559.36</td>
                                </tr>
                                <tr>
                                    <td>Lightweight Jacket</td>
                                    <td>$20.00</td>
                                    <td><span class="badge bg-primary">184 Pcs</span></td>
                                    <td>$3,680.00</td>
                                </tr>
                                <tr>
                                    <td>Marco Shoes</td>
                                    <td>$28.49</td>
                                    <td><span class="badge bg-primary">69 Pcs</span></td>
                                    <td>$1,965.81</td>
                                </tr>
                            </tbody>
                        </table>
                    </div> <!-- end table responsive-->
                </div> <!-- end col-->
            </div> <!-- end row-->

        </div>
        <!-- end col -->
    </div>
    <!-- end row -->

</div> <!-- container -->

@endsection
