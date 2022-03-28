<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Auth;
use App\Model\contactModel;

class contactController extends Controller
{
    public function Lview(){
        // $data['countSlide'] = contactModel::count();
        $data['allData'] = contactModel::all();
        return view('Backend.contact_pages.contactView',$data);
    }
    public function LAdd(){
        return view('Backend.contact_pages.contactAdd');
    }
    public function LStore(Request $req){
        $data = new contactModel();
        $data->address = $req->Address;
        $data->number = $req->mnumber;
        $data->email = $req->email;
        $data->fb = $req->fb;
        $data->tw = $req->tw;
        $data->yt = $req->yt;
        $data->save();
        return redirect()->route('contacts.view');
    }
    
    public function LEdit($id){
        $data = contactModel::find($id);
        return view('Backend.contact_pages.contactEdit',compact('data'))->with('success','Data Inserted Successfully');
    }
    public function LUpdate(Request $req , $id){
        $data = contactModel::find($id);
        $data->address = $req->Address;
        $data->number = $req->mnumber;
        $data->email = $req->email;
        $data->fb = $req->fb;
        $data->tw = $req->tw;
        $data->yt = $req->yt;
        $data->save();
        return redirect()->route('contacts.view')->with('success','Data Updated successfully');
    }
    public function LDelete($id){
        $newsPost = contactModel::find($id);
        $newsPost->delete();
        return redirect()->route('contacts.view')->with('success','Data Deletd Successfully');
    }
}
