<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Auth;
use App\user;

class profileViewController extends Controller
{
    public function view(){
        $id = Auth::user()->id;
        $user = User::find($id);
        // dd($user);
        
        return view('Backend.user.profileView',compact('user'));
    }
    public function edit(){
        $id = Auth::user()->id;
        $editData = User::find($id);
        return view('Backend.user.profileEdit',compact('editData'));
    }
    public function update(Request $req){
        $id = Auth::user()->id;
        $data = User::find($id);
        $data->gender = $req->gender;
        $data->mobile = $req->mobile;
        $data->address = $req->address;
        $data->image = $req->image;
        if ($req->file('image')) {
            $file = $req->file('image');
            @unlink(public_path('upload_img'.$data->image));
            $fileName = date('YmdHi').$file->getClientOriginalName();
            $file->move(public_path('upload_img'),$fileName);
            $data['image'] = $fileName;
        }
        $data->save();
        return redirect()->route('profile.view')->with('success','Profile Updated successfully');
    }
    public function passView(){
        
        return view('Backend.user.profilePassView');
    }
    public function passUpdate(Request $req){
        if (Auth::attempt(['id'=>Auth::user()->id,'password'=>$req->currentPass])) {
            $user = User::find(Auth::user()->id);
            $user->password = bcrypt($req->newPass);
            $user->save();
            return redirect()->route('profile.view')->with('success','Successfully Password Update');
        }else{
            return redirect()->back()->with('error','sorry ! Current Password Does not Match');
        }
        return view('Backend.user.profileView');
    }
}
