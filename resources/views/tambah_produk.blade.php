<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <div>
    <div>
    <div>
        <center><strong>Tambah Produk</strong></center>
</div>
<div>
    <a href="/produk"><center>Kembali</center></a>
    <br/>
    <br/>

    <form method="post" action="/tambah_produk/simpan">

        {{csrf_field()}}
        <!-- @if (count($errors) > 0)
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
        @endif -->
        <center>
            <!-- <div>
                <label>Kode_Produk</label>
                <input type="text" name="kode_produk" placeholder="...">

            @if($errors->has('kode_produk'))
                <div class="text-danger">
                {{ $errors->first('kode_produk')}}
                </div>
            @endif
           </div>
           <br/> -->

            <div>
                <label>Nama Produk</label>
                <input type="text" name="nama_produk" placeholder="...">

            @if($errors->has('nama_produk'))
                <div class="text-danger">
                {{ $errors->first('nama_produk')}}
                </div>
            @endif
           </div>
           <br/>

            <div>
                <label>Gambar</label>
                <input type="file" name="gambar">

            @if($errors->has('gambar'))
                <div class="text-danger">
                {{ $errors->first('gambar')}}
                </div>
            @endif
           </div>
           <br/>
           
           
           <div>
                <label>Jenis produk</label>
                <select name="jenis_produk" size="1">
                <option value="1">Sepatu Wanita</option>
                <option value="2">Sepatu Laki-Laki</option>
                </select>

            @if($errors->has('jenis_produk'))
                <div class="text-danger">
                {{ $errors->first('jenis_produk')}}
                </div>
            @endif
           </div>
           <br/>

           <div>
                <label>Warna</label>
                <input type="text" name="warna" placeholder="...">

            @if($errors->has('warna'))
                <div class="text-danger">
                {{ $errors->first('warna')}}
                </div>
            @endif
           </div>
           <br/>

           <div>
                <label>Stok</label>
                <input type="number" name="stok" placeholder="...">
                @if($errors->has('stok'))
                <div class="text-danger">
                {{ $errors->first('stok')}}
                @endif
           </div>
           <br/>
           <div>
                <label>harga</label>
                <input type="text" name="harga" placeholder="...">
                @if($errors->has('harga'))
                <div class="text-danger">
                {{$errors->first('harga')}}
                @endif
                </div>
           <br/>
           <div>
                <label>Deskripsi</label>
                <textarea name="deskripsi" placeholder="..." value="required"></textarea>

            @if($errors->has('deskripsi'))
                <div class="text-danger">
                {{$errors->first('deskripsi')}}
                </div>
              @endif
           
            </div>
           
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