<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Auth;
use App\Model\SliderModel;

class SlidersController extends Controller
{
    public function Lview(){
        $data['countSlide'] = SliderModel::count();
        $data['allData'] = SliderModel::all();
        return view('Backend.slider.slideView',$data);
    }
    public function LAdd(){
        return view('Backend.slider.slideadd');
    }
    public function LStore(Request $req){
        $data = new SliderModel();
        $data->shortTitle = $req->stitle;
        $data->longTitle = $req->ltitle;
        $data->createdBy = Auth::user()->id;
        if ($req->file('image')) {
            $file = $req->file('image');
            $fileName = date('YmdHi').$file->getClientOriginalName();
            $file->move(public_path('Backend\assets\slider1'),$fileName);
            $data['image'] = $fileName;
        }
        $data->save();
        return redirect()->route('sliders.view');
    }
    public function LEdit($id){
        $data = SliderModel::find($id);
        return view('Backend.slider.sliderEdit',compact('data'))->with('success','Data Inserted Successfully');
    }
    public function LUpdate(Request $req , $id){
        $data = SliderModel::find($id);
        $data->shortTitle = $req->stitle;
        $data->longTitle = $req->ltitle;
        $data->UpdatedBy = Auth::user()->id;
        if ($req->file('image')) {
            $file = $req->file('image');
            @unlink(public_path('Backend\assets\slider1'.$data->image));
            $fileName = date('YmdHi').$file->getClientOriginalName();
            $file->move(public_path('Backend\assets\slider1'),$fileName);
            $data['image'] = $fileName;
        }
        $data->save();
        return redirect()->route('sliders.view')->with('success','Data Updated successfully');
    }
    public function LDelete($id){
        $slider = SliderModel::find($id);
        if (file_exists('Backend\assets\slider1'.$slider->image) AND !empty($slider->image)) {
            unlink(public_path('Backend\assets\slider1'.$slider->image));
        }
        $slider->delete();
        return redirect()->route('sliders.view')->with('success','Data Deletd Successfully');
    }
}
