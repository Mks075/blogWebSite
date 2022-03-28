<section id="posts" class="posts py-5">
    <div class="container-fluid">
        <!-- section title -->
        <div class="row title mb-5">
            <div class="col text-center">
                <h1 class="text-uppercase">
                    latest posts
                </h1>
                <h3 class="text-capitalize">
                    Lorem ipsum dolor sit amet.
                </h3>
                <a href="#" class="mb-0">
                    <i class="far fa-edit"></i>
                </a>
                <div class="title-underline"></div>
            </div>
        </div>
        <!-- end of section title -->
        <div class="row">
            <!-- single post -->
            @foreach ($postNews as $item)

            <div class="col-md-6 col-lg-3 mx-5">
                <div class="card">
                    <img height="300px" src="{{url('Backend/assets/postNewsimg/'.$item->image)}}" class="card-img-top" alt="">
                    <h1 class="text-capitalize my-2">
                        {{$item->shortTitle}}
                    </h1>
                    <p class="text-muted lead">
                        {{-- {{$item->longTitle}} --}}
                    </p>

                    <div class="card-footer d-flex justify-content-between px-0">
                        <a href="{{route('post.news',$item->id)}}" class="text-capitalize post-link h4">read more...</a>
                        <h4>
                            {{date('d-m-Y',strtotime($item->date))}}
                        </h4>
                    </div>
                </div>
            </div>
            @endforeach
        </div>
    </div>
</section>


<!-- contact section -->
<section id="contact" class="contact py-5">
    <div class="container">
        <div class="row height-40 align-items-center">
            <div class="col-md-8 mx-auto text-center">
                <h1 class="display-3 text-capitalize">
                    contact me
                </h1>
                <form action="" class="form align-items-baseline d-flex">
                    <input type="email" class="form-control form-control-lg m-2" placeholder="Your Email Here...">
                    <button type="submit" class="btn btn-lg">Submit</button>
                </form>
            </div>
        </div>
    </div>
</section>
<!-- end of contact section -->
