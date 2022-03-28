    <!-- header section -->
    <!-- navbar -->
    @include('Frontend.layouts.header')
    <!--end of navbar -->
    <!-- slider -->
    @yield('headerFooter')
    {{-- @include('Frontend.layouts.slides') --}}
    <!-- end of slider -->
    <!-- end of header section -->
    
    @include('Frontend.layouts.footer')
    <!-- modal -->
    <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
        aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Video Example</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <div class="embed-responsive embed-responsive-16by9">
                        <iframe width="560" height="315" src="https://www.youtube-nocookie.com/embed/Mn_GKVcupUc"
                            frameborder="0"
                            allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture"
                            allowfullscreen></iframe>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                </div>
            </div>
        </div>
    </div>


    <!-- Optional JavaScript -->
    <!-- jQuery -->
    <script src="{{url('Frontend/js/jquery-3.6.0.min.js')}}"></script>
    <!-- bootstrap Popper.js -->
    <script src="{{url('Frontend/js/popper.min.js')}}"></script>
    <!-- isotope js -->
    <script src="{{url('Frontend/js/isotope.pkgd.min.js')}}"></script>
    <!-- bootstrap JS -->
    <script src="{{url('Frontend/js/bootstrap.js')}}"></script>
    <!-- custom js -->
    <script>
        $(document).ready(function () {
            // init Isotope
            let $grid = $('.grid').isotope({
                // options
            });
            // filter items on button click
            $('.filter-button-group').on('click', 'button', function () {
                let filterValue = $(this).attr('data-filter');
                $grid.isotope({
                    filter: filterValue
                });
            });
        });

    </script>

</body>

</html>
