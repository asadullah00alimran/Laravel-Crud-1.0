<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Frontend\Product;

class ProductController extends Controller
{
    public function welcome(){
        return view('frontend.welcome');
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function addproduct()
    {
        return view('frontend.addproduct');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function showproduct()
    {
        $product = Product::all();
        return view('frontend.showproduct',compact('product'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function productStore(Request $request)
    {
        $product = new Product();

        $product->pname = $request->pname;
        $product->pdes = $request->pdes;
        $product->pcat = $request->pcat;
        $product->subcat = $request->subcat;
        $product->price = $request->price;
        $product->status = $request->status;
        $product->save();
        return redirect()->route('showproduct'); 
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function editproduct($id)
    {
        $product = Product::find($id);
        return view("frontend.editproduct",compact("product"));
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
        $product = Product::find($id);
        $product->pname = $request->pname;
        $product->pdes = $request->pdes;
        $product->pcat = $request->pcat;
        $product->subcat = $request->subcat;
        $product->price = $request->price;
        $product->status = $request->status;
        $product->update();
        return redirect()->route('showproduct'); 
    }


    public function delete($id)
    {
        $product = Product::find($id);
        $product->delete();
        return redirect()->route('showproduct'); 
    }   

    public function statusupdate($id)
    {
        $product = Product::find($id);
        if($product->status == 1){
            $product->status = 0;
        }
        else{
            $product->status = 1;
        }
        $product->update();
        return redirect()->route('showproduct'); 
    } 
    
    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
