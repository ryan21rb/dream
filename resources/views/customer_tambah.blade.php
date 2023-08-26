<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tambah Customer</title>
</head>
<body>
    <div>
    <div>
    <div>
        <center><strong>Tambah data Customer</strong></center>
</div>
<div>
    <a href="/customer"><center>Kembali</center></a>
    <br/>
    <br/>

    <form method="post" action="/customer/simpan">

        {{ csrf_field() }}
        <center>
            <div>
                <label>Nama</label>
                <input type="text" name="nama_customer" placeholder="...">

            @if($errors->has('nama_customer'))
                <div class="text-danger">
                {{$errors->first('nama_customer')}}
                </div>
            @endif
           </div>
           <br/>
           <div>
                <label>No Telepon</label>
                <input type="text" name="no_telp" placeholder="...">

            @if($errors->has('no_telp'))
                <div class="text-danger">
                {{$errors->first('no_telp')}}
                </div>
            @endif
           </div>
           <br/>
           <div>
                <label>Jenis Kelamin</label>
                <select name="jenkel">
                    <option value="Laki-laki">Laki-laki</option>
                    <option value="Perempuan">Perempuan</option>
                </select>
            @if($errors->has('jenkel'))
                <div class="text-danger">
                {{$errors->first('jenkel')}}
                </div>
            @endif
           </div>
           <br/>
           <div>
                <label>Alamat</label>
                <textarea name="alamat" placeholder="..." value="required"></textarea>
                @if($errors->has('alamat'))
                <div class="text-danger">
                {{$errors->first('alamat')}}
                @endif
           </div>
           <br/>
           <div>
                <label>Username</label>
                <input type="text" name="username" placeholder="...">

            @if($errors->has('username'))
                <div class="text-danger">
                {{$errors->first('username')}}
                </div>
            @endif
           </div>
           <br/>
           <div>
                <label>Password</label>
                <input type="password" name="password" placeholder="...">

            @if($errors->has('password'))
                <div class="text-danger">
                {{$errors->first('password')}}
                </div>
            @endif
           </div>
           <br/>
           <div>
                <label>Email</label>
                <input type="text" name="email" placeholder="...">

            @if($errors->has('email'))
                <div class="text-danger">
                {{$errors->first('email')}}
                </div>
            @endif
           </div>
           <br/>
           <br/>
           <div>
            <input type="submit" value="Simpan">
           </div>
        </center>
        </form>
        </div>
    </div>
</div>
</body>
</html>