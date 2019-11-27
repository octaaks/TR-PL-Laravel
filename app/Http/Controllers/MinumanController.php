<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MinumanController extends Controller
{
    public function view(Request $request){
        if($request->has('cari')){
            $data_minuman = \App\Minuman::where('nama', 'LIKE','%'.$request->cari.'%')->get();
        }else{

            $data_minuman = \App\Minuman::all();
        }
    	return view('minuman.view',['data_minuman' => $data_minuman]);
    }

    function add(Request $request){
        \App\Minuman::create($request->all());
        return redirect('/viewminuman')->with('sukses','Data Berhasil Ditambahkan');
    }

    function edit($id){

        $minuman = \App\Minuman::find($id);
        return view('minuman/edit',['minuman' => $minuman]);
    }

    function update(Request $request,$id){

        $minuman = \App\Minuman::find($id);
        $minuman->update($request->all());
        return redirect('/viewminuman')->with('sukses','Data Berhasil Disimpan');
    }

    function delete(Request $request,$id){

        $minuman = \App\Minuman::find($id);
        $minuman->delete($request);
        return redirect('/viewminuman')->with('sukses','Data Berhasil Dihapus');
    }

    public function loadmenu(){
        $data_minuman = \App\Minuman::all();
    	return view('/daftarmenu',['data_minuman' => $data_minuman]);
    }
}
