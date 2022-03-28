{{-- @include('Frontend.layouts.header')

@include('Frontend.layouts.about')
@include('Frontend.layouts.footer') --}}

@extends('Frontend.layouts.master')
@section('headerFooter')
@include('Frontend.layouts.about')
@include('Frontend.layouts.slides2')

@endsection