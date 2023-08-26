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
        <strong><center>Edit Category </center></strong>
    </div>
    <div>
        <a href="/category"><center>Kembali</center></a>
        <br/>
        <br/>
    <form method="post" action="/category/update/{{ $category->id_kategori }}">
        {{csrf_field()}}
        {{method_field('put')}}
        <center>
            <div class="form-group">
                <label>Nama Kategori :</label>
                <input type="text" name="nama_kategori" placeholder="..." value=" {{$category->nama_kategori}}">

                @if($errors->has('nama_kategori'))
                <div>
                    {{ $errors->first('nama_kategori')}}
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