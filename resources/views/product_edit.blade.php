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
        <strong><center>Edit Data Product </center></strong>
    </div>
    <div>
        <a href="/product"><center>Kembali</center></a>
        <br/>
        <br/>
    <form method="post" action="/product/baru/{{ $product->id_product }}">
        {{csrf_field()}}
        {{method_field('put')}}
        <center>
            <div class="form-group">
                <label>Id Product</label>
                <input type="text" name="id_product" placeholder="..." value=" {{ $product->id_product}}">

                @if($errors->has('id_product'))
                <div>
                    {{ $errors->first('id_product')}}
                </div>
                @endif
            </div>
            <br/>
            <div class="form-group">
                <label>Id Category</label>
                <input type="text" name="id_kategori" placeholder="..." value=" {{$product->id_kategori}}">

                @if($errors->has('id_kategori'))
                <div>
                    {{ $errors->first('id_kategori')}}
                </div>
                @endif
            </div>
            <br/>
            <div class="form-group">
                <label>Id Admin</label>
                <input type="text" name="id_admin" placeholder="..." value=" {{$product->id_admin}}">

                @if($errors->has('id_admin'))
                <div>
                    {{ $errors->first('id_admin')}}
                </div>
                @endif
            </div>
            <br/>
            <div class="form-group">
                <label>Nama Product</label>
                <input type="text" name="nama_product" value=" {{$product->nama_product}}">

                @if($errors->has('nama_product'))
                <div>
                    {{ $errors->first('nama_product')}}
                </div>
                @endif
            </div>
            <br/>
            <div class="form-group">
                <label>Harga</label>
                <input type="text" name="harga" placeholder="..." value=" {{$product->harga}}">

                @if($errors->has('harga'))
                <div>
                    {{ $errors->first('harga')}}
                </div>
                @endif
            </div>
            <br/>
            <div class="form-group">
                <label>Stok</label>
                <input type="text" name="stok" placeholder="..." value=" {{$product->stok}}">

                @if($errors->has('stok'))
                <div>
                    {{ $errors->first('stok')}}
                </div>
                @endif
            </div>
            <br/>
            <div class="form-group">
                <label>Warna</label>
                <input type="text" name="warna" placeholder="..." value=" {{$product->warna}}">

                @if($errors->has('warna'))
                <div>
                    {{ $errors->first('warna')}}
                </div>
                @endif
            </div>
            <br/>
            <div class="form-group">
                <label>Deskripsi</label>
                <textarea name="deskripsi" placeholder="..." >{{$product->deskripsi}}</textarea>

                @if($errors->has('deskripsi'))
                <div>
                    {{ $errors->first('deskripsi')}}
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