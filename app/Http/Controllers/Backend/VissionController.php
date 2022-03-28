<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Auth;
use App\Model\VissionModel;

class VissionController extends Controller
{
    public function Lview(){
        // $data['countSlide'] = VissionModel::count();
        $data['allData'] = VissionModel::all();
        return view('Backend.vission.vissionView',$data);
    }
    public function LAdd(){
        return view('Backend.vission.vissionAdd');
    }
    public function LStore(Request $req){
        $data = new VissionModel();
        $data->title = $req->title;
        $data->longTitle = $req->ltitle;
        $data->createdBy = Auth::user()->id;
        if ($req->file('image')) {
            $file = $req->file('image');
            $fileName = date('YmdHi').$file->getClientOriginalName();
            $file->move(public_path('Backend/assets/vissionimg/'),$fileName);
            $data['image'] = $fileName;
        }
        $data->save();
        return redirect()->route('vissions.view');
    }

    public function LEdit($id){
        $data = VissionModel::find($id);
        return view('Backend.vission.vissionEdit',compact('data'))->with('success','Data Inserted Successfully');
    }
    public function LUpdate(Request $req , $id){
        $data = VissionModel::find($id);
        $data->title = $req->title;
        $data->longTitle = $req->ltitle;
        $data->createdBy = Auth::user()->id;
        if ($req->file('image')) {
            $file = $req->file('image');
            @unlink(public_path('Backend/assets/vissionimg/'.$data->image));
            $fileName = date('YmdHi').$file->getClientOriginalName();
            $file->move(public_path('Backend/assets/vissionimg/'),$fileName);
            $data['image'] = $fileName;
        }
        $data->save();
        return redirect()->route('vissions.view')->with('success','Data Updated successfully');
    }
    public function LDelete($id){
        $vission = VissionModel::find($id);
        if (file_exists('Backend/assets/vissionimg/'.$vission->image) AND !empty($vission->image)) {
            unlink(public_path('Backend/assets/vissionimg/'.$vission->image));
        }
        $vission->delete();
        return redirect()->route('vissions.view')->with('success','Data Deletd Successfully');
    }
}
