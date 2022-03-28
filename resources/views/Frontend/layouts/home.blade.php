@extends('Frontend.layouts.master')
@section('headerFooter')
@include('Frontend.layouts.slides')
<!-- skills & video section -->
@include('Frontend.layouts.skills')    
<!-- end of skills & video section -->
@include('Frontend.layouts.about')    

<!-- projects section -->
@include('Frontend.layouts.projects')    
<!-- end of projects section -->
<!-- current projects -->
@include('Frontend.layouts.cprojects')
<!-- end of current projects -->

<!-- latest posts & contact section -->
@include('Frontend.layouts.post')
<!-- end of latest posts & contact section -->

<!-- values & comrades section -->
@include('Frontend.layouts.values')
{{-- @include('Frontend.layouts.slides2') --}}
@include('Frontend.layouts.contact')
@endsection