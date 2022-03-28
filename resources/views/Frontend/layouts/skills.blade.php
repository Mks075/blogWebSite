<!-- skills section -->
<section id="skills" class="skills py-5">
    <div class="container">
        <!-- section title -->
        <div class="row title mb-5">
            <div class="col text-center">
                <h1 class="text-uppercase">
                    my skills
                </h1>
                <h3 class="text-capitalize">
                    Lorem ipsum dolor sit amet.
                </h3>
                <a href="#" class="mb-0">
                    <i class="far fa-check-square"></i>
                </a>
                <div class="title-underline"></div>
            </div>
        </div>
        <!-- end of section title -->
        <div class="row">
            <!-- single item -->
            @foreach ($Mission as $item)
                
            <div class="col-lg-6 my-5">
                <div class="row">
                    <div class="col-6 d-flex align-items-center skills-icon">
                        <span><i class="fa fa-code"></i></span>
                    </div>
                    <div class="col-6">
                        <h3 class="text-uppercase">
                            {{$item->title}}
                        </h3>
                        <p class="text-muted">
                            {{$item->longTitle}}
                        </p>
                    </div>
                </div>
            </div>
            @endforeach
        </div>
    </div>
</section>
<!-- end of skills section -->