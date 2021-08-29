<?php

namespace App\Http\Controllers;

use App\Models\Orders;
use Illuminate\Http\Request;
use App\Models\Items;

class OrdersController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    Public function SalesDemoPage()
    {
        return view('Pages.Sales.SalesDemoPage');
    }
    public function index()
    {
        $order=Orders::orderBy('id', 'DESC')->paginate(5);
        return view('Pages.Sales.view',compact('order'));
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
        $data=$request->all();

        $lastid=Orders::create($data)->id;
        // $roles = Items::find()->roles()->orderBy('id')->get();
        if(count($request->product_name) > 0)
        {
        foreach($request->product_name as $item=>$v){
            $data2=array(
                'orders_id'=>$lastid,
                'product_name'=>$request->product_name[$item],
                'quantity'=>$request->quantity[$item],
                'budget'=>$request->budget[$item],
                // 'amount'=>$request->amount[$item]
            );
        Items::insert($data2);
      }
        }

        return redirect('order')->with('success','data insert successfully');
    }

    public function items($id)
    {
        $items=Items::where('orders_id','=',$id)->get();
        return view('Pages.Sales.items',compact('items'));
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Orders  $orders
     * @return \Illuminate\Http\Response
     */
    public function show(Orders $orders)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Orders  $orders
     * @return \Illuminate\Http\Response
     */
    public function edit(Orders $orders)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Orders  $orders
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Orders $orders)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Orders  $orders
     * @return \Illuminate\Http\Response
     */
    public function destroy(Orders $orders)
    {
        //
    }
}
