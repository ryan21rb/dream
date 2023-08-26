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
        <center><strong>Tambah Promo</strong></center>
</div>
<div>
    <a href="/promo"><center>Kembali</center></a>
    <br/>
    <br/>

    <form method="post" action="/promo/simpan">

        {{csrf_field()}}
        <center>
           <div>
                <label>Id product</label>
                <input type="text" name="id_product" placeholder="...">

            @if($errors->has('id_product'))
                <div class="text-danger">
                {{ $errors->first('id_product')}}
                </div>
            @endif
           </div>
           <br/>
           
           
           <div>
                <label>Potongan Harga</label>
                <input type="text" name="potongan_harga" placeholder="...">

            @if($errors->has('potongan_harga'))
                <div class="text-danger">
                {{ $errors->first('potongan_harga')}}
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