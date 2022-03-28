    <!-- footer -->
    <footer class="container-fluid py-2 px-3">
        <div class="row">
            <div class="col d-flex justify-content-between align-items-baseline">
                <div class="col-md-4 text-white">
                    Address : {{$contact->address }},
                    Number : {{$contact->number }},
                    Email : {{$contact->email }}
                </div>
                <div class="col-md-4 footer-icons">
                    <a href="{{$contact->fb }}" class="mx-2"><i class="fab fa-facebook"></i></a>
                    <a href="{{$contact->tw }}" class="mx-2"><i class="fab fa-twitter"></i></a>
                    <a href="{{$contact->yt }}" class="mx-2"><i class="fab fa-youtube"></i></a>
                </div>
                <h5 class="text-capitalize">
                    &COPY; copyright 2020
                </h5>
            </div>
        </div>
    </footer>
    <!-- end of footer -->