<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Models\Product;
use App\Traits\ImageUploadTrait;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Http\Response;

class ProductController extends Controller
{
    use ImageUploadTrait;
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $products = Product::orderBy('id', 'desc')->get();
        return view('admin.product.index', compact('products'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.product.addproduct');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'image'=>'required',
            'title' => 'required',
            'description' => 'nullable',
            'price' => 'required|integer',
            'sale_price' => 'required|integer',
        ]);

        $input=array();
        $input['title']=$request->title;
        $input['description']=$request->description;
        $input['price']=$request->price;
        $input['sale_price']=$request->sale_price;

        if(isset($request->image)){
            $image_response=$this->store_image($request);
            if(isset($image_response['image'])){
                $input['image']=$image_response['image'];
            }
        }

        Product::create($input);
        return redirect()->route('admin.product.index')->with('success', 'Product Successfully added');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $product = Product::find($id);
        return view('admin.product.viewproduct', compact('product'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        return view('admin.product.editproduct');
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id): RedirectResponse
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id): RedirectResponse
    {
        //
    }

    public function visibility(Request $request){
        $product = Product::find($request->id);

        if($product->is_visible == 1){
            $product->update([
                'is_visible' => null
            ]);
        }elseif($product->is_visible == null){
            $product->update([
                'is_visible' => 1
            ]);
        }
    }
}
