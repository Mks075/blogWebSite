<!-- video section -->
<section id="about" class="about pb-5">
    <!-- video modal -->
    <article id="modal-filler" class="d-flex align-items-center justify-content-center">
        <!-- modal -->
        <a href="#" data-toggle="modal" data-target="#exampleModal">
            <i class="fas fa-play-circle"></i>
        </a>
    </article>
    <div class="container">
        <!-- section title -->
        <div class="row title my-5">
            <div class="col text-center">
                <h1 class="text-uppercase">
                    about me
                </h1>
                <h3 class="text-capitalize">
                    Lorem ipsum dolor sit amet.
                </h3>
                <a href="#" class="mb-0">
                    <i class="fas fa-globe"></i>
                </a>
                <div class="title-underline"></div>
            </div>
        </div>
        <!-- end of section title -->
        <div class="row mb-5">
            <!-- about progress -->
            <div class="col-md-6 d-flex justify-content-center about-progress mb-5 flex-column">
                <div class="progress-bars">
                    <div class="bar my-3">
                        <h5 class="text-light d-flex justify-content-between text-uppercase">
                            html
                            <span>90%</span>
                        </h5>
                        <div class="progress">
                            <div class="progress-bar" role="progressbar" style="width: 90%;" aria-valuenow="90"
                                aria-valuemin="0" aria-valuemax="100">90%</div>
                        </div>
                    </div>
                    <div class="bar my-3">
                        <h5 class="text-light d-flex justify-content-between text-uppercase">
                            css
                            <span>70%</span>
                        </h5>
                        <div class="progress">
                            <div class="progress-bar" role="progressbar" style="width: 70%;" aria-valuenow="70"
                                aria-valuemin="0" aria-valuemax="100">70%</div>
                        </div>
                    </div>
                    <div class="bar my-3">
                        <h5 class="text-light d-flex justify-content-between text-uppercase">
                            bootstrap
                            <span>80%</span>
                        </h5>
                        <div class="progress">
                            <div class="progress-bar" role="progressbar" style="width: 80%;" aria-valuenow="80"
                                aria-valuemin="0" aria-valuemax="100">80%</div>
                        </div>
                    </div>
                    <div class="bar my-3">
                        <h5 class="text-light d-flex justify-content-between text-uppercase">
                            javascript
                            <span>60%</span>
                        </h5>
                        <div class="progress">
                            <div class="progress-bar" role="progressbar" style="width: 60%;" aria-valuenow="60"
                                aria-valuemin="0" aria-valuemax="100">60%</div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- about text -->
            <div class="col-md-6 text-center py-5 about-text">
                <h2 class="text-uppercase">
                    {{$Vission->title}}
                </h2>
                <p class="text-light lead">
                    {{$Vission->longTitle}}
                </p>
                <a href="#" class="btn btn-lg btn-block text-uppercase banner-btn w-75 text-center mx-auto">
                    download resume
                </a>
            </div>
        </div>
    </div>
</section>