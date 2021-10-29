<?php

namespace App\Http\Controllers\Admin;

use App\Product;
use App\Http\Requests\ProductFormRequest;
use App\Http\Controllers\Controller;
//use Illuminate\Http\Request;



class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $products = Product::latest()->SimplePaginate(10);
        //$products = Product::all();
        //return $products;
        return view('admin.products.index' , compact('products'));
        //return view('admin.products.index');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.products.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(ProductFormRequest $request)
    {
        if($request->hasFile('image')){
            $filename = $request->image->getClientOriginalName();
            $request->image->storeAs('images',$filename,'public');
            Product::create([
                'image' => $filename,
                'name' => $request->name,
                'description' => $request->description,
                'price' => $request->price,              
                ]);
        }else{
            Product::create([
                'name' => $request->name,
                'description' => $request->description,
                'price' => $request->price,                 
                ]);
        }
        return redirect()->route('admin.products.create')->with('message','Product created successfully.');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Product $product)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Product $product)
    {
        return view('admin.products.edit',compact('product'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(ProductFormRequest $request, Product $product)
    {
        if($request->hasFile('image')){
            $filename = $request->image->getClientOriginalName();
            $request->image->storeAs('images',$filename,'public');
            $product->update([
                'image' => $filename,
                'name' => $request->name,
                'description' => $request->description,
                'price' => $request->price,                
                ]);
        }else{
            $product->update([
                'name' => $request->name,
                'description' => $request->description,
                'price' => $request->price,                
                ]);
        }
        return redirect()->route('admin.products.index')->with('message','Product updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Product $product)
    {
        $product->delete();
        return redirect()->route('admin.products.index')->with('message','Product deleted successfully');
    }
}
