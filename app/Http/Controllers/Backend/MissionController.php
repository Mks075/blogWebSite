<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Auth;
use App\Model\MissionModel;

class MissionController extends Controller
{
    public function Lview(){
        $data['countSlide'] = MissionModel::count();
        $data['allData'] = MissionModel::all();
        return view('Backend.mission.missionView',$data);
    }
    public function LAdd(){
        return view('Backend.Mission.missionAdd');
    }
    public function LStore(Request $req){
        $data = new MissionModel();
        $data->title = $req->title;
        $data->longTitle = $req->ltitle;
        $data->createdBy = Auth::user()->id;
        if ($req->file('image')) {
            $file = $req->file('image');
            $fileName = date('YmdHi').$file->getClientOriginalName();
            $file->move(public_path('Backend/assets/missionimg/'),$fileName);
            $data['image'] = $fileName;
        }
        $data->save();
        return redirect()->route('mission.view');
    }
    public function LEdit($id){
        $data = MissionModel::find($id);
        return view('Backend.Mission.missionEdit',compact('data'))->with('success','Data Inserted Successfully');
    }
    public function LUpdate(Request $req , $id){
        $data = MissionModel::find($id);
        $data->title = $req->title;
        $data->longTitle = $req->ltitle;
        $data->createdBy = Auth::user()->id;
        if ($req->file('image')) {
            $file = $req->file('image');
            @unlink(public_path('Backend/assets/missionimg/'.$data->image));
            $fileName = date('YmdHi').$file->getClientOriginalName();
            $file->move(public_path('Backend/assets/missionimg/'),$fileName);
            $data['image'] = $fileName;
        }
        $data->save();
        return redirect()->route('mission.view')->with('success','Data Updated successfully');
    }
    public function LDelete($id){
        $mission = MissionModel::find($id);
        if (file_exists('Backend/assets/missionimg/'.$mission->image) AND !empty($mission->image)) {
            unlink(public_path('Backend/assets/missionimg/'.$mission->image));
        }
        $mission->delete();
        return redirect()->route('mission.view')->with('success','Data Deletd Successfully');
    }
}
