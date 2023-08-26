<?php

namespace App\Http\Controllers;

use App\Models\product;
use Illuminate\Http\Request;

class productController extends Controller
{
    public function tampil(Request $request)
    {
        if($request->keyword) {
            $product = product::search($request->keyword)->get();
        }
        else{
            $product = product::all();
        }
        return view('product', ['product' => $product]);
    }

    public function tambah()
    {
        return view('product_tambah');
    }

    public function simpan(Request $request)
    {
        $this->validate($request,[
            'id_product'  => 'required',
            'id_kategori'  => 'required',
            'id_admin'  => 'required',
            'nama_product'  => 'required',
            'harga'  => 'required',
            'stok'  => 'required',
            'warna'  => 'required',
            'deskripsi'  => 'required'
        ]);

        product::create([
            'id_product'  => $request->id_product,
            'id_kategori'  => $request->id_kategori,
            'id_admin'  => $request->id_admin,
            'nama_product'  => $request->nama_product,
            'harga'  => $request->harga,
            'stok'  => $request->stok,
            'warna'  => $request->warna,
            'deskripsi'  => $request->deskripsi
        ]);

        return redirect('/product');
    }

    public function edit($id_product)
    {
        $product = product::find($id_product);
        return view('product_edit', ['product' => $product]);
    }

    public function baru($id_product, Request $request)
    {
        $this->validate($request, [
            'id_product'  => 'required',
            'id_kategori'  => 'required',
            'id_admin'  => 'required',
            'nama_product'  => 'required',
            'harga'  => 'required',
            'stok'  => 'required',
            'warna'  => 'required',
            'deskripsi'  => 'required'
        ]);

            $product = product::find($id_product);
            $product->id_product  = $request->id_product;
            $product->id_kategori = $request->id_kategori;
            $product->id_admin  = $request->id_admin;
            $product->nama_product = $request->nama_product;
            $product->harga = $request->harga;
            $product->stok  = $request->stok;
            $product->warna = $request->warna;
            $product->deskripsi = $request->deskripsi;
            $product->save();
            return redirect('/product');
        }

    public function hapus($id_product)
    {
        $product = product::find($id_product);
        $product->delete();
        return redirect('/product');
    }
}
