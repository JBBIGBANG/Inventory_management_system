<?php

namespace App\Http\Controllers;

use App\Models\Sale;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class SaleController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
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
    //    $res = new Sale;
    //    $res -> c_name = $request->input('c_name');
    //    $res -> c_contact = $request->input('c_contact');
    //    $res -> payment= $request->input('payment');
    //    $res -> due_payment= $request->input('due_payment');
    //    $res -> save();


       $p_name      = $request -> p_name;
       $p_price     = $request -> p_price;
       $quantiny    = $request -> quantity;
       for($i=0; $i< count(array($p_name)); $i++)
       {
           $datasave =
           [

               'p_name'     => $p_name[$i],
               'p_price'    => $p_price[$i],
               'quantiny'   => $quantiny[$i],

           ];
           DB::table('sales')->insert($datasave);


       }

    //    dd($request->all());



    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Sale  $sale
     * @return \Illuminate\Http\Response
     */
    public function show(Sale $sale)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Sale  $sale
     * @return \Illuminate\Http\Response
     */
    public function edit(Sale $sale)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Sale  $sale
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Sale $sale)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Sale  $sale
     * @return \Illuminate\Http\Response
     */
    public function destroy(Sale $sale)
    {
        //
    }
}
