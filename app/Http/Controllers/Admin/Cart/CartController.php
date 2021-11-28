<?php

namespace App\Http\Controllers\Admin\Cart;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Cart;
use App\Models\Product;

class CartController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $user = User::find(auth()->user()->id);
        $products = Product::all();
        // dd($products,'ss');
        // foreach($products as $pro)
        // echo ($pro->price);
        return view('guest.cart',compact('user','products'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        // return "Dada";

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // dd($request->all());
        $data = $request->all();
        $data['user_id'] = auth()->user()->id;
        $pro = Cart::where(['user_id'=>$data['user_id'],'product_id'=>$request->product_id])->first();
            if($pro){
                // dd($pro);
                $pro->quantity = $pro->quantity+$request->quantity;
                $pro->save();
                // $pro->
            }else{
                Cart::create($data);
            }
        return redirect()->back()->with('success','Cart added successfully !!');
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
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Cart::find($id)->delete();
        return redirect('/cart')->with('success','Product has been removed from cart');
    }
}
