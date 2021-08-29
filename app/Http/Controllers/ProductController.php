<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function addproductform()
    {
        return view('Pages/Product/AddProductForm');
    }
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

        $res = new Product;

        $res -> supplier_name = $request->input('name');
        $res -> supplier_contact = $request->input('contact');
        $res -> product_name = $request->input('p_name');
        $res -> quantity = $request->input('quantity');
        $res -> buying_price = $request->input('b_price');
        $res -> selling_price = $request->input('s_price');
        // $res -> total_price = $request->input('t_price');
        $res -> save();

        $request->session()->flash('msg', 'data submitted');
        return redirect('productviewtable');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function show(Product $product)
    {
        $data = Product::get();
        return view('Pages/Product/ProductViewTable',compact('data'));

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function edit(Product $product,$id)
    {
        $finddata = Product::find($id);
        return view("Pages/Product/EditProduct",compact('finddata'));
    }
    public function some()
    {
        // $finddata = Product::find($id);
        // return view("Pages.EditProduct",compact('finddata'));
        return view('Pages.EditProduct');
    }




    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function update(Request $res)
    {
        $get =  Product::find($res->id);

        $get -> supplier_name = $res->input('name');
        $get -> supplier_contact = $res->input('contact');
        $get -> product_name = $res->input('p_name');
        $get -> quantity = $res->input('quantity');
        $get -> buying_price = $res->input('b_price');
        $get -> selling_price = $res->input('s_price');
        // $res -> total_price = $request->input('t_price');
        $get -> save();

        // $res->session()->flash('msg', 'data submitted');
        return redirect('productviewtable');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function destroy(Product $product,$id)
    {
        Product::destroy(array('id',$id));
        return redirect('productviewtable');

    }
}
