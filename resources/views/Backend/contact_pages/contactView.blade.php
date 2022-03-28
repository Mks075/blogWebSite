@extends('Backend.layouts.master')
@section('dashboardDefaultContent')
<!-- Start Content-->
<div class="row my-2">
    <div class="col-12">
        <div class="card">
            <div class="card-body">
                <h1 class="header-title">Manage Contact </h1>
                {{-- @if ($countSlide < 10) --}}
                <a class="btn btn-success float-end btn-md" href="{{route('contacts.add')}}">
                    <i class="mdi mdi-plus-circle"></i>Add Contact
                </a>
                {{-- @endif --}}
                <div class="active">
                    <table id="datatable-buttons" class="table table-striped dt-responsive nowrap w-100">
                        <thead>
                            <tr>
                                <th> SL.</th>
                                <th> Address</th>
                                <th> Number</th>
                                <th> Email</th>
                                <th> Facebook</th>
                                <th> Twiter</th>
                                <th> Youtube</th>
                                <th> Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($allData as $key => $vission)
                            <tr>
                                <td>{{$key+1}}</td>
                                <td>{{$vission->address}}</td>
                                <td>{{$vission->number}}</td>
                                <td>{{$vission->email}}</td>
                                <td>{{$vission->fb}}</td>
                                <td>{{$vission->tw}}</td>
                                <td>{{$vission->yt}}</td>
                                <td class="table-action" style="width: 90px;">
                                    <a title="Edit" href="{{route('contacts.edit',$vission->id)}}" class="action-icon"> 
                                        <i class="mdi mdi-pencil"></i></a>
                                    <a title="Delete" href="{{route('contacts.delete',$vission->id)}}" class="action-icon"> 
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
