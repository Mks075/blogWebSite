@extends('Backend.layouts.master')
@section('dashboardDefaultContent')
<!-- Start Content-->
<div class="row my-2">
    <div class="col-12">
        <div class="card">
            <div class="card-body">
                <h1 class="header-title">All User List </h1>
                <a class="btn btn-success float-end btn-md" href="{{route('users.add')}}">
                    <i class="mdi mdi-plus-circle"></i> Add User
                </a>
                <div class="active">
                    <table id="datatable-buttons" class="table table-striped dt-responsive nowrap w-100">
                        <thead>
                            <tr>
                                <th>SL.</th>
                                <th>Role</th>
                                <th>Name</th>
                                <th>Email</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($allData as $key => $user)
                            <tr>
                                <td>{{$key+1}}</td>
                                <td>{{$user->userType}}</td>
                                <td>{{$user->name}}</td>
                                <td>{{$user->email}}</td>
                                <td class="table-action" style="width: 90px;">
                                    <a title="Edit" href="{{route('users.edit',$user->id)}}" class="action-icon"> 
                                        <i class="mdi mdi-pencil"></i></a>
                                    <a title="Delete" href="{{route('users.delete',$user->id)}}" class="action-icon"> 
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
