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
        <strong><center>Edit Data Admin </center></strong>
    </div>
    <div>
        <a href="/admin"><center>Kembali</center></a>
        <br/>
        <br/>
    <form method="post" action="/admin/baru/{{ $admin->id_admin }}">
        {{csrf_field()}}
        {{method_field('put')}}
        <center>
            <div class="form-group">
                <label>Username</label>
                <input type="text" name="username" placeholder="..." value=" {{$admin->username}}">

                @if($errors->has('username'))
                <div>
                    {{ $errors->first('username')}}
                </div>
                @endif
            </div>
            <br/>
            <div class="form-group">
                <label>Nama Lengkap</label>
                <input type="text" name="nama_lengkap" placeholder="..." value=" {{$admin->nama_lengkap}}">

                @if($errors->has('nama_lengkap'))
                <div>
                    {{ $errors->first('nama_lengkap')}}
                </div>
                @endif
            </div>
            <br/>
            <div class="form-group">
                <label>Jenis Kelamin</label>
                <select name="jenkel" name="jenkel" value=" {{$admin->jenkel}}">
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
                <label>tgl_lahir</label>
                <input type="date" name="tgl_lahir" value=" {{$admin->tgl_lahir}}">

                @if($errors->has('tgl_lahir'))
                <div>
                    {{ $errors->first('tgl_lahir')}}
                </div>
                @endif
            </div>
            <br/>
            <div class="form-group">
                <label>alamat</label>
                <textarea name="alamat" placeholder="..." value="required">{{$admin->alamat}}</textarea>

                @if($errors->has('alamat'))
                <div>
                    {{ $errors->first('alamat')}}
                </div>
                @endif
            </div>
            <br/>
            <div class="form-group">
                <label>no_telp</label>
                <input type="text" name="no_telp" placeholder="..." value=" {{$admin->no_telp}}">

                @if($errors->has('no_telp'))
                <div>
                    {{ $errors->first('no_telp')}}
                </div>
                @endif
            </div>
            <br/>
            <div class="form-group">
                <label>status</label>
                <input type="text" name="password" placeholder="..." value=" {{$admin->password}}">

                @if($errors->has('password'))
                <div>
                    {{ $errors->first('password')}}
                </div>
                @endif
            </div>
            <br/>
            <div class="form-group">
                <label>email</label>
                <input type="text" name="email" placeholder="..." value=" {{$admin->email}}">

                @if($errors->has('email'))
                <div>
                    {{ $errors->first('email')}}
                </div>
                @endif
            </div>
            <br/>
            <div>
                <input type="submit" value="edit">
            </div>
        </center>
    </form>
</body>
</html>