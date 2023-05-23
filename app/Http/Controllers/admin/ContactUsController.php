<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Models\Contactus;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Validator;
use Illuminate\Validation\Rule;

class ContactUsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $records=Contactus::select('id','name','email','phone','message','status','updated_at','created_at');
        if(isset($request->search)) {
            $records=$records->where('name','LIKE','%'.$request->search.'%')
                ->orWhere('email','LIKE','%'.$request->search.'%');
        }
        if(isset($request->status)) {
            $records=$records->where('status',$request->status);
        }

        $records=$records->orderBy('id','DESC');
        $records=$records->paginate(isset($request->limit)?$request->limit:10);
        $Sr=$records->perPage() * ($records->currentPage() - 1)+1;
        return  view('admin.contact.contactus',compact('records','Sr'));
    }



    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

        Log::info($request);
        $validator= Validator::make($request->all(),[
            'name' => 'required|max:255',
            'email'=>'required',
            'message'=>'required',
        ]);
        #IF VALIDATION FAIL SEND RESPONSE
        if($validator->fails()){
            return response()->json([
                'success'=>false,
                'message'=>$validator->messages()->first()
            ],400);
        }
        Contactus::create($request->except('_token'));
//    $record=new Contactus;
//    $record->name=$request->name;
//    $record->email=$request->email;
//    $record->phone=$request->phone;
//    $record->message=$request->message;
//    $record->save();
        return response()->json([
            'success'=>true,
            'message'=>"Message Send Successfully"
        ],200);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $item=Contactus::find($id);
        if($item){
            return response()->json([
                'success'=>true,
                'data'=>$item
            ],200);
        }else {
            return response()->json([
                'success'=>false,
            ],404);
        }
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $item=Contactus::find($id);

        if(!$item){
            return response()->json([
                'success'=>false,
                'error'=>'invalid'
            ],404);
        }

        $validator= Validator::make($request->all(),[
            'status' => ['required', Rule::in(['open', 'resolved'])]
        ]);
        #IF VALIDATION FAIL SEND RESPONSE
        if($validator->fails()){
            return response()->json([
                'success'=>false,
                'message'=>$validator->messages()->first()
            ],400);
        }

        $input =array();
        isset($request->status) ? $input["status"]=$request->status : NULL;
        $status=Contactus::find($id)->update($input);
        if($status){
            return response()->json([
                'success'=>true,
                'message'=>'Updated successfully',
                'data'=>$input
            ],200);
        }

        return response()->json([
            'success'=>false,
        ],400);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $item=Contactus::find($id);
        if($item){
            $item->delete();
            return  redirect()->back()->with('success', 'Contact-us deleted');
        }else {
            return  redirect()->back()->with('error', 'Unable to deleted');
        }
    }
}
