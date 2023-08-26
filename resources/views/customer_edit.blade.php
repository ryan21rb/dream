<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit</title>
</head>
<body>
    <div>
    <div>
    <div>
        <strong><center>Edit Data Customer </center></strong>
    </div>
    <div>
        <a href="/customer"><center>Kembali</center></a>
        <br/>
        <br/>
    <form method="post" action="/customer/baru/{{ $customer->id_customer }}">
        {{csrf_field()}}
        {{method_field('put')}}
        <center>
            <div class="form-group">
                <label>Nama</label>
                <input type="text" name="nama_customer" placeholder="..." value=" {{$customer->nama_customer}}">

                @if($errors->has('nama_customer'))
                <div>
                    {{ $errors->first('nama_customer')}}
                </div>
                @endif
            </div>
            <br/>
            <div class="form-group">
                <label>No Telepon</label>
                <input type="tel" name="no_telp" placeholder="..." value=" {{$customer->no_telp}}">

                @if($errors->has('no_telp'))
                <div>
                    {{ $errors->first('no_telp')}}
                </div>
                @endif
            </div>
            <br/>
            <div class="form-group">
                <label>Jenis Kelamin</label>
                <select name="jenkel" name="jenkel" value=" {{$customer->jenkel}}">
                    <option value="Laki-Laki">Laki-Laki</option>
                    <option value="Perempuan">Perempuan</option>
                </select>
                @if($errors->has('jenkel'))
                <div>
                    {{ $errors->first('jenkel')}}
                </div>
                @endif
            </div>
            <br/>
            <div class="form-group">
                <label>alamat</label>
                <textarea name="alamat" placeholder="..." value="required">{{$customer->alamat}}</textarea>

                @if($errors->has('alamat'))
                <div>
                    {{ $errors->first('alamat')}}
                </div>
                @endif
            </div>
            <br/>
            <div class="form-group">
                <label>Username</label>
                <input type="text" name="username" placeholder="..." value="{{$customer->username}}">

                @if($errors->has('username'))
                <div>
                    {{ $errors->first('username')}}
                </div>
                @endif
            </div>
            <br/>
            <div class="form-group">
                <label>Password</label>
                <input type="password" name="password" placeholder="..." value=" {{$customer->password}}">

                @if($errors->has('password'))
                <div>
                    {{ $errors->first('password')}}
                </div>
                @endif
            </div>
            <br/>
            <div class="form-group">
                <label>Email</label>
                <input type="text" name="email" placeholder="..." value=" {{$customer->email}}">

                @if($errors->has('email'))
                <div>
                    {{ $errors->first('email')}}
                </div>
                @endif
            </div>
            <br/>
            <br/>
            <div>
                <input type="submit" value="edit">
            </div>
        </center>
    </form>
</body>
</html>