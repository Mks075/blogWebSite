<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Model\Logo;
use App\Model\SliderModel;
use App\Model\contactModel;
use App\Model\MissionModel;
use App\Model\VissionModel;
use App\Model\postNewsModel;
use App\Model\CommunicateModel;
use Mail;

class FrontedController extends Controller
{
    public function index(){
        $data['logo'] = Logo::first();
        $data['slider1'] = SliderModel::all();
        $data['Mission'] = MissionModel::all();
        $data['Vission'] = VissionModel::first();
        $data['contact'] = contactModel::first();
        $data['postNews'] = postNewsModel::all();
        return view('Frontend.layouts.home',$data);
    }
    public function aboutUs(){
        $data['logo'] = Logo::first();
        $data['Vission'] = VissionModel::first();
        $data['contact'] = contactModel::first();
        return view('Frontend.page.about',$data);
    }
    public function contactUs(){
        $data['logo'] = Logo::first();
        $data['contact'] = contactModel::first();
        return view('Frontend.page.contact',$data);
    }
    public function postNews($id){
        $data['logo'] = Logo::first();
        $data['postM'] = postNewsModel::find($id);
        $data['contact'] = contactModel::first();
        // dd($postId);
        return view('Frontend.page.postDetails',$data);
    }

    public function contactUsStore(Request $req){
        $data = new CommunicateModel();
        $data->name = $req->Username;
        $data->phone = $req->Number;
        $data->email = $req->Email;
        $data->ref = $req->User;
        $data->save();
        $data = array(
            'name' => $req->Username,
            'phone' => $req->Number,
            'email' => $req->Email,
            'ref' => $req->User,
        );
        Mail::send('Frontend.email.contact',$data,function($msg) use($data){
            $msg->from('mdkhaledsaifullah75@gmail.com','Laravel Projects');
            $msg->to($data['email']);
            $msg->subject('Thanks For Contact Us');
        });
        return redirect()->back();
    }
}