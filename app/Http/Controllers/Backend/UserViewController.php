<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\User;

class UserViewController extends Controller
{
    // all user view
    public function userview(){
        // $allData User::all();
        // return view('Backend.user.viewUser',compact('allData',''));
        $data['allData'] = User::all();
        // dd($allData->toArray());
        // dd($allData);
        return view('Backend.user.viewUser',$data);
    }
    public function userAdd(){
        // dd('ok');
        return view('Backend.user.addUser');
    }
    public function userStore(Request $req){
        $this->validate($req,[
            'userType'=>'required',
            'UserName'=>'required',
            'UserEmail'=>'required|unique:users,email',
            'UserPass'=>'required',
        ]);
        $data = new User();
        $data->userType = $req->userType;
        $data->name = $req->UserName;
        $data->email = $req->UserEmail;
        $data->password = bcsqrt($req->UserPass);
        $data->save();
        return redirect()->route('users.view');
    }
    public function userEdit($id){
        $editData = User::find($id);
        if ($req->file('image')) {
            $file = $req->file('image');
            @unlink(public_path('upload_img'.$data->image));
            $fileName = date('YmdHi').$file->getClientOriginalName();
            $file->move(public_path('upload_img'),$fileName);
            $data['image'] = $fileName;
        }
        return view('Backend.user.editUser',compact('editData'))->with('success','Data Inserted Successfully');
    }
    public function userUpdate(Request $req , $id){
        $data = User::find($id);
        $data->userType = $req->userType;
        $data->name = $req->Name;
        $data->email = $req->Email;
        $data->save();
        return redirect()->route('users.view')->with('success','Data Updated successfully');
    }
    public function userDelete($id){
        $data = User::find($id);
        $data->delete();
        return redirect()->route('users.view')->with('success','Data Deletd Successfully');
    }
}
