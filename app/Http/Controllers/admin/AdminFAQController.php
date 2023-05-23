<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Models\Faq;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class AdminFAQController extends Controller
{
    public function index(Request $request)
    {
        $records= Faq::orderBy('id', 'DESC')
            ->paginate(isset($request->pagesize)?$request->pagesize:10);

        return  view('admin.faq.faq',compact('records'));

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
         return view('admin.faq.faqadd');
    }


    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

        $request->validate([
            'title' => 'required|max:255',
            'description'=>'required',
        ]);

        $record=new Faq();
        $record->title=$request->title;
        $record->description=$request->description;
        $record->save();
       return redirect()->route('admin.Faqlisting');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $item=Faq::find($id);
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
        $item=Faq::find($id);

        if(!isset($item))
            abort(404);
        return view('admin.faq.faqedit',compact('item'));
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
        $item=Faq::find($id);

        if(!$item){
            return response()->json([
                'success'=>false,
                'error'=>'invalid'
            ],404);
        }
        $input =array();
        isset($request->title) ? $input["title"]=$request->title : NULL;
        isset($request->description) ? $input["description"]=$request->description : NULL;
        $status=Faq::find($id)->update($input);
        if($status){
          return  redirect()->back();

        }
        return redirect()->back();
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $item=Faq::find($id);
        if($item){
            $item->delete();
            return  redirect()->back();
        }else {
            return  redirect()->back();
        }
    }
}
