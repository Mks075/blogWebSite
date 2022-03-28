@extends('Backend.layouts.master')
@section('dashboardDefaultContent')
<!-- Start Content-->
<div class="row my-2">
    <div class="col-12">
        <div class="card">
            <div class="card-body">
                <h1 class="header-title">Manage News POST </h1>
                {{-- @if ($countSlide < 10) --}}
                <a class="btn btn-success float-end btn-md" href="{{route('postNews.add')}}">
                    <i class="mdi mdi-plus-circle"></i> Add News POST
                </a>
                {{-- @endif --}}
                <div class="active">
                    <table id="datatable-buttons" class="table table-striped dt-responsive nowrap w-100">
                        <thead>
                            <tr>
                                <th>SL.</th>
                                <th>News Post Time</th>
                                <th>Image</th>
                                <th>Title</th>
                                <th>Long Title</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($allData as $key => $postnews)
                            <tr>
                                <td>{{$key+1}}</td>
                                <td>{{date('d-m-Y',strtotime($postnews->date))}}</td>
                                <td><img width="200px" height="100px" src="{{(!empty($postnews->image))?asset('Backend/assets/postNewsimg/'.$postnews->image):asset('upload_img/no_img.png')}}" alt=""></td>
                                <td>{{$postnews->shortTitle}}</td>
                                <td><textarea disabled name="" id="" cols="60" rows="5">{{$postnews->longTitle}}</textarea></td>
                                <td class="table-action" style="width: 90px;">
                                    <a title="Edit" href="{{route('postNews.edit',$postnews->id)}}" class="action-icon"> 
                                        <i class="mdi mdi-pencil"></i></a>
                                    <a title="Delete" href="{{route('postNews.delete',$postnews->id)}}" class="action-icon">
                                        <i id="delete" class="mdi mdi-delete"></i></a>
                                </td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div> <!-- end preview-->
            </div> <!-- end card body-->
        </div> <!-- end card -->
    </div><!-- end col-->
</div>
<!-- end row-->

@endsection
