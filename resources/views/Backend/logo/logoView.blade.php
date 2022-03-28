@extends('Backend.layouts.master')
@section('dashboardDefaultContent')
<!-- Start Content-->
<div class="row my-2">
    <div class="col-12">
        <div class="card">
            <div class="card-body">
                <h1 class="header-title">Manage Logo </h1>
                @if ($countLogo<1) <a class="btn btn-success float-end btn-md" href="{{route('logos.add')}}">
                    <i class="mdi mdi-plus-circle"></i> Add Logo
                    </a>
                    @endif
                    <div class="active">
                        <table id="datatable-buttons" class="table table-striped dt-responsive nowrap w-100">
                            <thead>
                                <tr>
                                    <th>SL.</th>
                                    <th>img</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($allData as $key => $logo)
                                <tr>
                                    <td>{{$key+1}}</td>
                                    <td><img width="200" height="100px" id="EI"
                                            src="{{(!empty($logo->image))?asset('logoImg/'.$logo->image):asset('upload_img/no_img.png')}}"
                                            alt=""></td>
                                    <td class="table-action" style="width: 90px;">
                                        <a title="Edit" href="{{route('logos.edit',$logo->id)}}" class="action-icon">
                                            <i class="mdi mdi-pencil"></i></a>
                                        <a title="Delete" href="{{route('logos.delete',$logo->id)}}"
                                            class="action-icon">
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
