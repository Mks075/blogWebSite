    <!-- contact section -->
    <section id="contact-form" class="contact-form py-5">
        <div class="container">
            <div class="row height-70 justify-content-baseline">
                <div class="col-lg-6 col-sm-10 mx-auto my-3 pt-4">
                    <div class="card text-center text-uppercase">
                        <div class="card-header">
                            <h1>
                                contact form
                            </h1>
                        </div>
                        <div class="card-body">
                            <form action="{{route('communicats.store')}}" method="post" >
                                @csrf
                                <div class="input-group flex-nowrap mb-3">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text" id="addon-wrapping"><i
                                                class="fas fa-user"></i></span>
                                    </div>
                                    <input name="Username" type="text" class="form-control" placeholder="Enter Your Username Here"
                                        aria-label="Username" aria-describedby="addon-wrapping">
                                </div>
                                <div class="input-group flex-nowrap mb-3">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text" id="addon-wrapping"><i
                                                class="fas fa-phone"></i></span>
                                    </div>
                                    <input name="Number" type="tel" class="form-control" placeholder="Enter Your Phone Number Here" aria-describedby="addon-wrapping">
                                </div>
                                <div class="input-group flex-nowrap mb-3">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text" id="addon-wrapping"><i
                                                class="fas fa-envelope"></i></span>
                                    </div>
                                    <input name="Email" type="email" class="form-control" placeholder="Enter Your Email Here" aria-describedby="addon-wrapping">
                                </div>
                                <div class="input-group flex-nowrap mb-3">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text" id="addon-wrapping"><i
                                                class="fas fa-users"></i></span>
                                    </div>
                                    <input name="User" type="text" class="form-control" placeholder="Enter Your User Here" aria-describedby="addon-wrapping">
                                </div>
                                <button type="submit" class="btn btn-block btn-lg btn-secondary"> <i
                                        class="fas fa-hand-point-right mr-2"></i> Click Here</button>
                            </form>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 align-self-center d-none d-lg-block mb-5">
                    <img src="{{url('Frontend/img/b5img/banner-1.jpeg')}}" class="img-fluid rounded" alt="">
                </div>
            </div>
        </div>
    </section>
    <!-- end of contact section -->