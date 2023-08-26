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
        <center><strong>Tambah Category</strong></center>
</div>
<div>
    <a href="/category"><center>Kembali</center></a>
    <br/>
    <br/>

    <form method="post" action="/category/simpan">

        {{csrf_field()}}
        <center>
           <div>
                <label>Nama Kategori :</label>
                <input type="text" name="nama_kategori" placeholder="...">

            @if($errors->has('nama_kategori'))
                <div class="text-danger">
                {{ $errors->first('nama_kategori')}}
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