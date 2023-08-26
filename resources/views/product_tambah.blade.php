<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tambah product</title>
</head>
<body>
    <div>
    <div>
    <div>
        <center><strong>Tambah data product</strong></center>
</div>
<div>
    <a href="/product"><center>Kembali</center></a>
    <br/>
    <br/>

    <form method="post" action="/product/simpan">

        {{ csrf_field() }}
        <center>
            <div>
                <label>Id Product</label>
                <input type="text" name="id_product" placeholder="...">

            @if($errors->has('id_product'))
                <div class="text-danger">
                {{$errors->first('id_product')}}
                </div>
            @endif
           </div>
           <br/>
           <div>
                <label>Id Category</label>
                <input type="text" name="id_kategori" placeholder="...">

            @if($errors->has('id_kategori'))
                <div class="text-danger">
                {{$errors->first('id_kategori')}}
                </div>
            @endif
           </div>
           <br/>
           <div>
                <label>Id Admin</label>
                <input type="text" name="id_admin" placeholder="...">

            @if($errors->has('id_admin'))
                <div class="text-danger">
                {{$errors->first('id_admin')}}
                </div>
            @endif
           </div>
           <br/>
           <div>
                <label>Nama Product</label>
                <input type="text" name="nama_product" placeholder="...">

            @if($errors->has('nama_product'))
                <div class="text-danger">
                {{$errors->first('nama_product')}}
                </div>
            @endif
           </div>
           <br/>
           <div>
                <label>Harga</label>
                <input type="text" name="harga" placeholder="...">

            @if($errors->has('harga'))
                <div class="text-danger">
                {{$errors->first('harga')}}
                </div>
            @endif
           </div>
           <br/>
           <div>
                <label>Stok</label>
                <input type="text" name="stok" placeholder="...">

            @if($errors->has('stok'))
                <div class="text-danger">
                {{$errors->first('stok')}}
                </div>
            @endif
           </div>
           <br/>
           <div>
                <label>warna</label>
                <input type="text" name="warna" placeholder="...">

            @if($errors->has('warna'))
                <div class="text-danger">
                {{$errors->first('warna')}}
                </div>
            @endif
           </div>
           <br/>
           <div>
               <div>
                    <label>deskripsi</label>
                    <textarea name="deskripsi" placeholder="..."></textarea>
    
                @if($errors->has('deskripsi'))
                    <div class="text-danger">
                    {{$errors->first('deskripsi')}}
                    </div>
                @endif
               </div>
               <br/>
            <input type="submit" value="Simpan">
           </div>
        </center>
        </form>
        </div>
    </div>
</div>
</body>
</html>