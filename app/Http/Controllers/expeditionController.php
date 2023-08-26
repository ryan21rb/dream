<?php

namespace App\Http\Controllers;

use App\Models\expedition;
use Illuminate\Http\Request;

class expeditionController extends Controller
{
    public function index()
    {
        $expedition = expedition::all();
        return view('/expedition',['expedition' => $expedition]);
    }

    public function tambah()
    {
        return view('expedition_tambah');
    }

    public function simpan(Request $request)
    {
        $this->validate($request,[
          'nama_ekspedisi' => 'required',
          'harga' => 'required',
          'tgl_terima' => 'required'
        ]);

        expedition::create([
            'nama_ekspedisi' => $request->nama_ekspedisi,
            'harga' => $request->harga,
            'tgl_terima' => $request->tgl_terima,
           
        ]);
              return redirect('/expedition');
    }

    public function delete($kd_ekspedisi)
    {
        $expedition = expedition::find($kd_ekspedisi);
        $expedition->delete();
        return redirect('/expedition');
    }

    public function edit($kd_ekspedisi)
    {
        $expedition = expedition::find($kd_ekspedisi);
        return view('expedition_edit', ['expedition' => $expedition]);
    }

    public function update($kd_ekspedisi, Request $request)
    {
        $this->validate($request, [
            'nama_ekspedisi'  => 'required',
            'harga'  => 'required',
          

        ]);

        $expedition = expedition::find($kd_ekspedisi);
        $expedition->nama_ekspedisi = $request->nama_ekspedisi;
        $expedition->harga = $request->harga;
        $expedition->save();
        return redirect('/expedition');
    }
}
