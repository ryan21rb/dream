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
                    <h2> Expedition </h2>
                    <a href="/expedition/tambah" class="btn btn-primary">Input Ekspedisi Baru</a>
                </center>
                </div>
                <div>
                    <br/>
                    <br/>
                    <table align="center" border="1">
                        <thead>
                            <tr>
                                <th>Kode Ekspedisi</th>
                                <th>Nama Ekspedisi</th>
                                <th>Harga</th>
                                <th>Tanggal Terima</th>
                                <th>Aksi</th>
    
                            </tr>
                        </thead>
                    <tbody>
                            @foreach($expedition as $e)
                            <tr>
                                <td>{{$e->kd_ekspedisi}}</td>
                                <td>{{$e->nama_ekspedisi}}</td>
                                <td>{{$e->harga}}</td>
                                <td>{{$e->tgl_terima}}</td>
                                <td>
                                    <a href="/expedition/edit/{{$e->kd_ekspedisi}}" class="btn-warning">Edit</a>
                                    <a href="/expedition/hapus/{{$e->kd_ekspedisi}}" class="btn-danger">Hapus</a>
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