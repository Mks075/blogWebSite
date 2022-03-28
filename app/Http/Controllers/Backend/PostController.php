<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Auth;
use App\Model\postNewsModel;

class PostController extends Controller
{
    public function Lview(){
    //     // $data['countSlide'] = postNewsModel::count();
        $data['allData'] = postNewsModel::all();
        return view('Backend.postNews.postNewsView',$data);
    }
    public function LAdd(){
        return view('Backend.postNews.postNewsAdd');
    }
    public function LStore(Request $req){
        $data = new postNewsModel();
        $data->date = date('Y-m-d',strtotime($req->dateTime));
        $data->shortTitle = $req->shortTitle;
        $data->longTitle = $req->ltitle;
        $data->createdBy = Auth::user()->id;
        if ($req->file('image')) {
            $file = $req->file('image');
            $fileName = date('YmdHi').$file->getClientOriginalName();
            $file->move(public_path('Backend/assets/postNewsimg/'),$fileName);
            $data['image'] = $fileName;
        }
        $data->save();
        return redirect()->route('postNews.view');
    }

    public function LEdit($id){
        $data = postNewsModel::find($id);
        return view('Backend.postNews.postNewsEdit',compact('data'))->with('success','Data Inserted Successfully');
    }
    public function LUpdate(Request $req , $id){
        $data = postNewsModel::find($id);
        $data->date = $req->date;
        $data->shortTitle = $req->shortTitle;
        $data->longTitle = $req->longTitle;
        $data->createdBy = Auth::user()->id;
        if ($req->file('image')) {
            $file = $req->file('image');
            @unlink(public_path('Backend/assets/postNewsimg/'.$data->image));
            $fileName = date('YmdHi').$file->getClientOriginalName();
            $file->move(public_path('Backend/assets/postNewsimg/'),$fileName);
            $data['image'] = $fileName;
        }
        $data->save();
        return redirect()->route('postNews.view')->with('success','Data Updated successfully');
    }
    public function LDelete($id){
        $newsPost = postNewsModel::find($id);
        if (file_exists('Backend/assets/postNewsimg/'.$newsPost->image) AND !empty($newsPost->image)) {
            unlink(public_path('Backend/assets/postNewsimg/'.$newsPost->image));
        }
        $newsPost->delete();
        return redirect()->route('postNews.view')->with('success','Data Deletd Successfully');
    }
}
