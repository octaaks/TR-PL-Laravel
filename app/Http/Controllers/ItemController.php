<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Item;
use App\Cart;
use Session;

class ItemController extends Controller
{
    public function view(Request $request){
        if($request->has('cari')){
            $data_item = \App\Item::where('nama', 'LIKE','%'.$request->cari.'%')->get();
        }else{

            $data_item = \App\Item::all();
        }

    	return view('item.view',['data_item' => $data_item]);
    }

    function add(Request $request){
        \App\Item::create($request->all());
        return redirect('/viewitem')->with('sukses','Data Berhasil Ditambahkan');
    }

    function edit($id){

        $item = \App\Item::find($id);
        return view('item/edit',['item' => $item]);
    }

    function update(Request $request,$id){

        $item = \App\Item::find($id);
        $item->update($request->all());
        return redirect('/viewitem')->with('sukses','Data Berhasil Disimpan');
    }

    function delete(Request $request,$id){

        $item = \App\Item::find($id);
        $item->delete($request);
        return redirect('/viewitem')->with('sukses','Data Berhasil Dihapus');
    }
    
    public function loadmenu(Request $request){
        if($request->has('cari')){
            $data_item = \App\Item::where('jenis', 'LIKE','%'.$request->cari.'%')->get();
        }else{

            $data_item = \App\Item::all();
        }
    	return view('/daftarmenu',['data_item' => $data_item]);
    }
    
    public function GetAddToCart(Request $request, $id){
        $item = Item::find($id);
        $oldCart = Session::has('cart')? Session::get('cart'):null;
        $cart = new Cart($oldCart);
        $cart->add($item, $item->id);

        $request->session()->put('cart',$cart);
        //dd($request->session()->get('cart'));
        return redirect()->route('item.index');
    }
    
    public function GetCart(){
        if(!Session::has('cart')){
            return view('shoppingcart');
        }
        $oldCart = Session::get('cart');
        $cart = new Cart($oldCart);
        return view('shoppingcart',['data_item' => $cart->items,'totalPrice' => $cart -> totalPrice]);
    }
    
    public function GetCheckout(){
        if(!Session::has('cart')){
            return view('shoppingcart');
        }
        $oldCart = Session::get('cart');
        $cart = new Cart($oldCart);
        $total = $cart -> totalPrice;
        return view('checkout',['total' => $total]);
    }
}
