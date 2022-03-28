@extends('Backend.layouts.master')
@section('dashboardDefaultContent')
<!-- Start Content-->
<div class="row my-2">
    <div class="col-12">
        <div class="card">
            <div class="card-body">
                <h1 class="header-title">Edit User </h1>
                <a class="btn btn-success float-end btn-sm" href="{{route('users.view')}}"><i class="fa fa-list"></i>
                    All User List</a>
                <div class="active row my-4">
                    <form id="myForm" action="{{route('users.update',$editData->id)}}" method="post" class="needs-validation d-flex align-items-end">
                        {{csrf_field()}}
                        <div class="m-3 form-group">
                            <span class="text-danger">{{($errors->has('userType'))?($errors->first('userType')):''}}</span>
                            <br>
                            <label for="userType" class="form-label">User Role</label>
                            <select class="form-select form-control" name="userType" id="userType">
                                <option {{($editData->userType == "normal")?"selected":""}} value="normal">Normal User</option>
                                <option {{($editData->userType == "manager")?"selected":""}}  value="manager">User Manager</option>
                                <optgroup label="Root">
                                    <option {{($editData->userType == "admin")?"selected":""}}  value="admin">admin</option>
                                    <option {{($editData->userType == "SAdmin")?"selected":""}}  value="SAdmin">Supper Admin</option>
                                </optgroup>
                            </select>
                        </div>
                        <div class="m-3 form-group">
                            <span class="text-danger">{{($errors->has('Name'))?($errors->first('Name')):''}}</span>
                            <br>
                            <label for="name" class="form-label">User Name</label>
                            <input value="{{$editData->name}}" type="text" name="Name" id="name" class="form-control" placeholder="User Name">
                        </div>
                        
                        <div class="m-3 form-group">
                            <span class="text-danger">{{($errors->has('Email'))?($errors->first('Email')):''}}</span>
                            <br>
                            <label for="email" class="form-label">User Email</label>
                            <input value="{{$editData->email}}" type="email" id="email" name="Email" class="form-control" placeholder="Email">
                        </div>
                        <div class="m-3 form-group">
                            <input type="submit" class="btn btn-success btn-sm" value="Update">
                        </div>

                    </form>
                </div> <!-- end preview-->
            </div> <!-- end card body-->
        </div> <!-- end card -->
    </div><!-- end col-->
</div>
<!-- end ro w-->
<script src="{{asset('Frontend/js/jquery-3.6.0.min.js')}}"></script>
<script src="{{asset('Frontend/js/jquery.validate.min.js')}}"></script>
<script src="{{asset('Frontend/js/additional-methods.min.js')}}"></script>
<script type="text/javascript">
$(document).ready(function(){
    $('#myForm').validate({
        rules:{
            userType:{
                required: true,
            },
            name:{
                required: true,
                text: true,
            },
            email:{
                required: true,
                email: true,
            },
            password:{
                required: true,
                minlength: 6,
            },
            password1:{
                required: true,
                equalTo: '#password',
            }
        },
        messages:{
            userType:{
                required:'Please Select User Role',
            },
            name:{
                required:'Please Enter User Name',
            },
            email:{
                required:'Please Enter Email Address',
                email:'Enter Valid Email Address',
            },
            password:{
                required:'Please Enter Password',
                minlength:'Password Will be minimum 6 characters or number',
            },
            password1:{
                required:'Please Enter Confirm Password',
                equalTo:'Confirm Password Does not match',
            }
        },
        errorElement: 'span',
        errorPlacement: function(error,element){
            error.addClass('invalid-feedback')
            element.closest('.form-group').append(error)
        },
        highlight: function(element,errorClass,validClass){
            $(element).addClass('is-invalid')
        },
        unhighlight: function(element,errorClass,validClass){
            $(element).removeClass('is-invalid')
        },
    })
})
</script>
@endsection
