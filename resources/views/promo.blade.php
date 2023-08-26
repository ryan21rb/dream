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
                    <h2> Promotion </h2>
                    <a href="/promo/tambah" class="btn btn-primary">Input Promotion Baru</a>
                </center>
            </div>
            <div>
                <br/>
                <br/>
                <table align="center" border="1">
                    <thead>
                        <tr>
                            <th>Kode Promo</th>
                            <th>Id Product</th>
                            <th>Potongan Harga</th>
                            <th>Aksi</th>
                
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($promo as $p)
                        <tr>
                            <td>{{$p->kd_promo}}</td>
                            <td>{{$p->id_product}}</td>
                            <td>{{$p->potongan_harga}}</td>
                            <td>
                                <a href="/promo/edit/{{ $p->kd_promo}}" class="btn-warning">Edit</a>
                                <a href="/promo/hapus/{{ $p->kd_promo}}" class="btn-danger">Hapus</a>
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