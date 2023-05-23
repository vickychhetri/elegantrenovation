<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Models\BannerImage;
use App\Traits\ImageUploadTrait;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class BannerImageController extends Controller
{
    use ImageUploadTrait;
    public function index_customer(Request $request){
        $records=BannerImage::orderBy('order', 'DESC')->get();
        return response()->json([
            'success'=>true,
            'data'=>$records
        ],200);
    }

    public function index(Request $request){
        $banners=BannerImage::orderBy('order', 'DESC')->get();
        return  view('admin.homepage.index',compact('banners'));
    }

    public function create(){
        return  view('admin.homepage.addhomepage');

    }
    public function edit($id){
        $item=BannerImage::find($id);

        if(!$item){
           abort(404);
        }
        return  view('admin.homepage.edithomepage',compact('item'));
    }

    public function store(Request $request){
        $validator= Validator::make($request->all(),[
            'image' => 'required',
        ]);
        #IF VALIDATION FAIL SEND RESPONSE
        if($validator->fails()){
            return response()->json([
                'success'=>false,
                'message'=>$validator->messages()->first()
            ],400);

        }

        $record= new BannerImage();
        if(isset($request->image)){
            $image_response=$this->store_image($request);
            if(isset($image_response['image'])){
                $record->image=$image_response['image'];
            }
        }
        $record->order=$request->order;
        $record->save();
        $record->order=$record->id;
        $record->save();

        return redirect()->route('admin.homepage_listing')->with('success', 'Image added successfully.');
    }

    public function update(Request $request, $id)
    {
        $item=BannerImage::find($id);

        if(!$item){
            return response()->json([
                'success'=>false,
                'error'=>'invalid'
            ],404);
        }
        $input =array();
        if(isset($request->image)){
            $image_response=$this->store_image($request);
            if(isset($image_response['image'])){
                $input['image']=$image_response['image'];
            }
        }
        isset($request->order) ? $input["order"]=$request->order : NULL;


        if(isset($request->replace_id)){
            $im1=BannerImage::find($request->replace_id);
            $input["order"]=$im1->order;
            $im1->order=$item->order;
            $im1->save();
        }
        $status=BannerImage::find($id)->update($input);
        if($status){
            return redirect()->route('admin.homepage_listing')->with('success', 'Image updated successfully.');
        }

        return response()->json([
            'success'=>false,
        ],400);
    }
    public function destroy($id)
    {
        $item=BannerImage::find($id);
        if(isset($item)){
            $item->delete();
            return redirect()->route('admin.homepage_listing')->with('success', 'Image deleted successfully.');
        }else {
            return redirect()->back()->with('error', 'Unable to delete image');
        }
    }
}
