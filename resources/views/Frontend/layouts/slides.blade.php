@php
    $count = 0;
@endphp
<style>
    #caro{
        width: 100%;
        height: 700px;
    }
</style>
<!-- slider -->
<div class="container-fluid no-padding">
    <div class="row">
        <div class="col-lg-12">
            <div class="col-lg-12">
                <div class="card">
                    <div class="card-body no-padding">
                        <div class="tab-content">
                            <div class="tab-pane show @if($count == 0){ active } @endif" id="with-captions-preview">
                                <div id="carouselExampleCaption" class="carousel slide" data-bs-ride="carousel">
                                    <div class="carousel-inner" role="listbox">
                                        @foreach ($slider1 as $item)
                                            
                                        <div class="carousel-item @if($count == 0){ active } @endif">
                                            <img id="caro" src="{{asset('Backend/assets/slider1/'.$item->image)}}" alt="..."
                                            class="d-block img-fluid">
                                            <div class="carousel-caption d-none d-md-block text-capitalize text-dark">
                                                <h3 class="display-1">{{$item->shortTitle}}</h3>
                                                <p class="display-6">{{$item->longTitle}}</p>
                                            </div>
                                        </div>
                                        @php
                                            $count++;
                                        @endphp
                                        @endforeach
                                    </div>
                                    <a class="carousel-control-prev" href="#carouselExampleCaption" role="button"
                                        data-bs-slide="prev">
                                        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                        <span class="visually-hidden">Previous</span>
                                    </a>
                                    <a class="carousel-control-next" href="#carouselExampleCaption" role="button"
                                        data-bs-slide="next">
                                        <span class="carousel-control-next-icon" aria-hidden="true"></span>
                                        <span class="visually-hidden">Next</span>
                                    </a>
                                </div>
                            </div> <!-- end preview-->
                        </div> <!-- end tab-content-->
                    </div>
                </div>
            </div> <!-- end col -->            
        </div>
    </div>
</div>
<!-- end of slider -->
