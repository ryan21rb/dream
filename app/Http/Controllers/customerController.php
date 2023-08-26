<?php

namespace App\Http\Controllers;

use App\Models\customer;
use Illuminate\Http\Request;

class customerController extends Controller
{
    public function tampil()
    {
        $customer = customer::all();
        return view('customer', ['customer' => $customer]);
    }

    public function tambah()
    {
        return view('customer_tambah');
    }

    public function simpan(Request $request)
    {
        $this->validate($request,[
            'nama_customer'  => 'required',
            'no_telp'  => 'required',
            'jenkel'  => 'required',
            'alamat'  => 'required',
            'username'  => 'required',
            'password'  => 'required',
            'email'  => 'required'
        ]);

        customer::create([
            'nama_customer' => $request->nama_customer,
            'no_telp'  => $request->no_telp,
            'jenkel'  => $request->jenkel,
            'alamat'  => $request->alamat,
            'username'  => $request->username,
            'password'  => $request->password,
            'email'  => $request->email
        ]);

        return redirect('/customer');
    }

    public function edit($id_customer)
    {
        $customer = customer::find($id_customer);
        return view('customer_edit', ['customer' => $customer]);
    }

    public function baru($id_customer, Request $request)
    {
        $this->validate($request, [
            'nama_customer'  => 'required',
            'no_telp'  => 'required',
            'jenkel'  => 'required',
            'alamat'  => 'required',
            'username'  => 'required',
            'password'  => 'required',
            'email'  => 'required'

        ]);

            $customer = customer::find($id_customer);
            $customer->nama_customer = $request->nama_customer;
            $customer->no_telp = $request->no_telp;
            $customer->jenkel = $request->jenkel;
            $customer->alamat = $request->alamat;
            $customer->username = $request->username;
            $customer->password = $request->password;
            $customer->email = $request->email;
            $customer->save();
            return redirect('/customer');
        }

    public function hapus($id_customer)
    {
        $customer = customer::find($id_customer);
        $customer->delete();
        return redirect('/customer');
    }
}
