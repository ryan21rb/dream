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
        <strong><center>Edit Promo </center></strong>
    </div>
    <div>
        <a href="/promo"><center>Kembali</center></a>
        <br/>
        <br/>
    <form method="post" action="/promo/update/{{ $promo->kd_promo }}">
        {{csrf_field()}}
        {{method_field('put')}}
        <center>
            <div class="form-group">
                <label>id_product</label>
                <input type="text" name="id_product" placeholder="..." value=" {{$promo->id_product}}">

                @if($errors->has('id_product'))
                <div>
                    {{ $errors->first('id_product')}}
                </div>
                @endif
            </div>
            <br/>
            <div class="form-group">
                <label>Potongan Harga</label>
                <input type="text" name="potongan_harga" placeholder="..." value=" {{$promo->potongan_harga}}">

                @if($errors->has('potongan_harga'))
                <div>
                    {{ $errors->first('potongan_harga')}}
                </div>
                @endif
            </div>
            <div>
                <input type="submit" value="edit">
            </div>
        </center>
    </form>
</body>
</html>