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
        <center><strong>Tambah Ekspedisi</strong></center>
</div>
<div>
    <a href="/expedition"><center>Kembali</center></a>
    <br/>
    <br/>

    <form method="post" action="/expedition/simpan">

        {{csrf_field()}}
        <center>
           <div>
                <label>Nama Ekspedisi :</label>
                <input type="text" name="nama_ekspedisi" placeholder="...">

            @if($errors->has('nama_ekspedisi'))
                <div class="text-danger">
                {{ $errors->first('nama_ekspedisi')}}
                </div>
            @endif
           </div>
           <br/>
           <div>
                <label>Harga :</label>
                <input type="text" name="harga" placeholder="...">

            @if($errors->has('harga'))
                <div class="text-danger">
                {{ $errors->first('harga')}}
                </div>
            @endif
           </div>
           <br/>
           <div>
                <label>Tanggal Terima :</label>
                <input type="date" name="tgl_terima" placeholder="...">

            @if($errors->has('tgl_terima'))
                <div class="text-danger">
                {{ $errors->first('tgl_terima')}}
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