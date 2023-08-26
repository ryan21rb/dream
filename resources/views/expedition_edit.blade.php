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
        <strong><center>Edit Ekspedisi </center></strong>
    </div>
    <div>
        <a href="/ekspedition"><center>Kembali</center></a>
        <br/>
        <br/>
    <form method="post" action="/expedition/update/{{ $expedition->kd_ekspedisi }}">
        {{csrf_field()}}
        {{method_field('put')}}
        <center>
            <div class="form-group">
                <label>Nama Ekspedisi :</label>
                <input type="text" name="nama_ekspedisi" placeholder="..." value=" {{$expedition->nama_ekspedisi}}">

                @if($errors->has('nama_ekspedisi'))
                <div>
                    {{ $errors->first('nama_ekspedisi')}}
                </div>
                @endif
            </div>
            <div class="form-group">
                <label>Harga :</label>
                <input type="text" name="harga" placeholder="..." value=" {{$expedition->harga}}">

                @if($errors->has('harga'))
                <div>
                    {{ $errors->first('harga')}}
                </div>
                @endif
            </div>
            <br/>
            <div class="form-group">
                <label>Tanggal Terima :</label>
                <input type="date" name="tgl_terima" placeholder="..." value=" {{$expedition->tgl_terima}}">

                @if($errors->has('tgl_terima'))
                <div>
                    {{ $errors->first('tgl_terima')}}
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