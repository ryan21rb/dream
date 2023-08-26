<?php

namespace App\Http\Controllers;

use App\Models\admin;
use Illuminate\Http\Request;

class adminController extends Controller
{
    public function tampil(Request $request)
    {
        if($request->keyword) {
            $admin = admin::search($request->keyword)->get();
        }
        else {
            $admin = admin::all();
        }
    
        return view('admin', ['admin' => $admin]);
    }

    public function tambah()
    {
        return view('admin_tambah');
    }

    public function simpan(Request $request)
    {
        $this->validate($request,[
            'username'  => 'required',
            'nama_lengkap'  => 'required',
            'jenkel'  => 'required',
            'tgl_lahir'  => 'required',
            'alamat'  => 'required',
            'no_telp'  => 'required',
            'password'  => 'required',
            'email'  => 'required'
        ]);

        admin::create([
            'username'  => $request->username,
            'nama_lengkap'  => $request->nama_lengkap,
            'jenkel'  => $request->jenkel,
            'tgl_lahir'  => $request->tgl_lahir,
            'alamat'  => $request->alamat,
            'no_telp'  => $request->no_telp,
            'password'  => $request->password,
            'email'  => $request->email
        ]);

        return redirect('/admin');
    }

    public function edit($id_admin)
    {
        $admin = Admin::find($id_admin);
        return view('admin_edit', ['admin' => $admin]);
    }

    public function baru($id_admin, Request $request)
    {
        $this->validate($request, [
            'username'  => 'required',
            'nama_lengkap'  => 'required',
            'jenkel'  => 'required',
            'tgl_lahir'  => 'required',
            'alamat'  => 'required',
            'no_telp'  => 'required',
            'password'  => 'required',
            'email'  => 'required'

        ]);

            $admin = admin::find($id_admin);
            $admin->username = $request->username;
            $admin->nama_lengkap = $request->nama_lengkap;
            $admin->jenkel = $request->jenkel;
            $admin->tgl_lahir = $request->tgl_lahir;
            $admin->alamat = $request->alamat;
            $admin->no_telp = $request->no_telp;
            $admin->password = $request->password;
            $admin->email = $request->email;
            $admin->save();
            return redirect('/admin');
        }

    public function hapus($id_admin)
    {
        $admin = admin::find($id_admin);
        $admin->delete();
        return redirect('/admin');
    }
}
