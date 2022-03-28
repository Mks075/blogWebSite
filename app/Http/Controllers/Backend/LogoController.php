<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Auth;
use App\Model\Logo;

class LogoController extends Controller
{
    public function Lview(){
        $data['countLogo'] = Logo::count();
        
        $data['allData'] = Logo::all();
        return view('Backend.logo.logoView',$data);
    }
    public function LAdd(){
        return view('Backend.logo.logoadd');
    }
    public function LStore(Request $req){
        $data = new Logo();
        $data->createdBy = Auth::user()->id;
        if ($req->file('image')) {
            $file = $req->file('image');
            $fileName = date('YmdHi').$file->getClientOriginalName();
            $file->move(public_path('logoImg'),$fileName);
            $data['image'] = $fileName;
        }
        $data->save();
        return redirect()->route('logos.view');
    }
    public function LEdit($id){
        $data = Logo::find($id);
        return view('Backend.logo.logoEdit',compact('data'))->with('success','Data Inserted Successfully');
    }
    public function LUpdate(Request $req , $id){
        $data = Logo::find($id);
        $data->UpdatedBy = Auth::user()->id;
        if ($req->file('image')) {
            $file = $req->file('image');
            @unlink(public_path('logoImg/'.$data->image));
            $fileName = date('YmdHi').$file->getClientOriginalName();
            $file->move(public_path('logoImg'),$fileName);
            $data['image'] = $fileName;
        }
        $data->save();
        return redirect()->route('logos.view')->with('success','Data Updated successfully');
    }
    public function LDelete($id){
        $logo = Logo::find($id);
        if (file_exists('logoImg'.$logo->image) AND !empty($logo->image)) {
            unlink(public_path('logoImg/'.$logo->image));
        }
        $logo->delete();
        return redirect()->route('logos.view')->with('success','Data Deletd Successfully');
    }
}
