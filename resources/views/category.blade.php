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
                <center>
                    <h2> Category </h2>
                    <a href="/category/tambah" class="btn btn-primary">Input Category Baru</a>
                </center>
                </div>
                <div>
                    <br/>
                    <br/>
                    <table align="center" border="1">
                        <thead>
                            <tr>
                                <th>Id Kategori</th>
                                <th>Nama Kategori</th>
                                <th>Aksi</th>
    
                        </tr>
                        </thead>
                    <tbody>
                        @foreach($category as $c)
                        <tr>
                            <td>{{$c->id_kategori}}</td>
                            <td>{{$c->nama_kategori}}</td>
                            <td>
                                <a href="/category/edit/{{ $c->id_kategori}}" class="btn-warning">Edit</a>
                                <a href="/category/hapus/{{ $c->id_kategori}}" class="btn-danger">Hapus</a>
                            </td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
        </div>
    </body>
</html>