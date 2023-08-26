<?php

namespace App\Http\Controllers;

use App\Models\category;
use Illuminate\Http\Request;

class categoryController extends Controller
{
    public function index()
    {
        $category = category::all();
        return view('/category',['category' => $category]);
    }

    public function tambah()
    {
        return view('category_tambah');
    }

    public function simpan(Request $request)
    {
        $this->validate($request,[
          'nama_kategori' => 'required'
        ]);

        category::create([
            'nama_kategori' => $request->nama_kategori
           
        ]);
              return redirect('/category');
    }

    public function delete($id_kategori)
    {
        $category = category::find($id_kategori);
        $category->delete();
        return redirect('/category');
    }

    public function edit($id_kategori)
    {
        $category = category::find($id_kategori);
        return view('category_edit', ['category' => $category]);
    }

    public function update($id_kategori, Request $request)
    {
        $this->validate($request, [
            'nama_kategori'  => 'required'
          

        ]);

        $category = category::find($id_kategori);
        $category->nama_kategori = $request->nama_kategori;
        $category->save();
        return redirect('/category');
    }
}
