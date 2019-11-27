<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MakananController extends Controller
{
    public function view(Request $request){
        if($request->has('cari')){
            $data_makanan = \App\Makanan::where('nama', 'LIKE','%'.$request->cari.'%')->get();
        }else{

            $data_makanan = \App\Makanan::all();
        }

    	return view('makanan.view',['data_makanan' => $data_makanan]);
    }

    function add(Request $request){
        \App\Makanan::create($request->all());
        return redirect('/viewmakanan')->with('sukses','Data Berhasil Ditambahkan');
    }

    function edit($id){

        $makanan = \App\Makanan::find($id);
        return view('makanan/edit',['makanan' => $makanan]);
    }

    function update(Request $request,$id){

        $makanan = \App\Makanan::find($id);
        $makanan->update($request->all());
        return redirect('/viewmakanan')->with('sukses','Data Berhasil Disimpan');
    }

    function delete(Request $request,$id){

        $makanan = \App\Makanan::find($id);
        $makanan->delete($request);
        return redirect('/viewmakanan')->with('sukses','Data Berhasil Dihapus');
    }
    
    public function loadmenu(){
        $data_makanan = \App\Makanan::all();
    	return view('/daftarmenu',['data_makanan' => $data_makanan]);
    }
}
