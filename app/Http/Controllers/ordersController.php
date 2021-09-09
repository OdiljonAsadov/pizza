<?php

namespace App\Http\Controllers;

use App\Orders;
use App\Product;
use Illuminate\Http\Request;
use Session;
use Illuminate\Validation\Rules\Exists;
use Illuminate\Support\Facades\Auth;

class ordersController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $orders = Orders::all();

        return view('orders.index', compact('orders'));
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
        $orders = new Orders();
        $orders->user_id = $request->user_id;
        $orders->product_id = $request->product_id;
        $orders->product_name = $request->product_name;
        $orders->count = $request->count;
        $orders->all_price = $request->all_price;
        $orders->save();

        return redirect('/orders/index');
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
    public function edit($id)
    {
        $orders = Orders::where('id', $id)->get();
        return view('orders.edit', compact('orders'));
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
        $orders = Orders::findOrFail($id);
        $orders->user_id = $request->user_id;
        $orders->product_id = $request->product_id;
        $orders->product_name = $request->product_name;
        $orders->count = $request->count;
        $orders->all_price = $request->all_price;
        $orders->save();

        return redirect('/orders');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $orders = orders::find($id);
        $orders->delete();

        return redirect()->back()->with('success', 'Order delete syccessfully');
    }




    public function addProduct(Request $request)
    {

        $prod_id = $request->input('prod_id');

        if(Session::has('loginId'))
        {
            $prod_check = Product::where('id', $prod_id)->first();

            if($prod_check)
            {
                if(Orders::where('product_id', $prod_id)->where('user_id', Session::get('loginId')))
                {
                    return response()->json(['status' => $prod_check->name." Already added to cart"]);
                }
                else
                {
                    $cartItem = new Orders();
                    $cartItem->product_id = $prod_id;
                    $cartItem->user_id = Session::get('loginId');
                    $cartItem->product_name = $prod_id;
                    $cartItem->count = $prod_id;
                    $cartItem->all_price = $prod_id;
                    $cartItem->save();

                    return response()->json(['status' => $prod_check->name."Added to cart"]);
                }
            }
        }
        else
        {
            return response()->json(['status' => "Login to continue"]);
        }
    }

    public function viewCart()
    {
        $orders = Orders::where('user_id', Session::get('loginId'))->get();
        return view('main.shopping-card', compact('orders'));
        
    }
}
