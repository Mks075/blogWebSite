{{-- @include('Frontend.layouts.header')

@include('Frontend.layouts.about')
@include('Frontend.layouts.footer') --}}

@extends('Frontend.layouts.master')
@section('headerFooter')
<!-- values section -->
<section id="values" class="values py-5">
    <div class="container">
        <!-- section title -->
        <div class="row title mb-5  mx-0">
            <div class="col text-center">
                <h1 class="text-uppercase">
                    {{$postM->shortTitle}}
                </h1>
                <a href="#" class="mb-0">
                    <i class="fas fa-rocket"></i>
                </a>
                <div class="title-underline"></div>
                <br><br>
                <h3 class="text-capitalize">
                    <p class="text-muted lead">
                        {{$postM->longTitle}}
                    </p>
                </h3>
                
            </div>
            <div class="col-5 mx-5">
                <img height="300px" src="{{url('Backend/assets/postNewsimg/'.$postM->image)}}" class="card-img-top" alt="">
            </div>
        </div>
    </div>
</section>
@endsection