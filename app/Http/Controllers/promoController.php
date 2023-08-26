<?php

namespace App\Http\Controllers;

use App\Models\promo;
use Illuminate\Http\Request;

class promoController extends Controller
{
    public function index()
    {
        $promo = promo::all();
        return view('/promo',['promo' => $promo]);
    }

    public function tambah()
    {
        return view('promo_tambah');
    }

    public function simpan(Request $request)
    {
        $this->validate($request,[
          'id_product' => 'required',
          'potongan_harga' => 'required'
        ]);

        promo::create([
            'id_product' => $request->id_product,
            'potongan_harga' => $request->potongan_harga
           
        ]);
              return redirect('/promo');
    }

    public function delete($kd_promo)
    {
        $promo = promo::find($kd_promo);
        $promo->delete();
        return redirect('/promo');
    }

    public function edit($kd_promo)
    {
        $promo = promo::find($kd_promo);
        return view('promo_edit', ['promo' => $promo]);
    }

    public function update($kd_promo, Request $request)
    {
        $this->validate($request, [
            'id_product'  => 'required',
            'potongan_harga'  => 'required',
          

        ]);

        $promo = promo::find($kd_promo);
        $promo->id_product = $request->id_product;
        $promo->potongan_harga = $request->potongan_harga;
        $promo->save();
        return redirect('/promo');
    }
}
