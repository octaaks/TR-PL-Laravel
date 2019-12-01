<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

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
}
