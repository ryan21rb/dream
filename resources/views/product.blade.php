<html>
    <head>
        <title>Data Product</title>
    </head>
    <body>
      <di>
        <div>
            <div>
                <center>
                    <H2>PRODUCT</H2>
                    <a href="/product/tambah" class="btn btn-primary">Masukan Product Baru</a>
                </center>
            </div>
            <br/>
            <div style="display: flex; justify-content: center; margin-bottom: 10px;">
                <form action="" method="get">
                    <input type="text" name="keyword">
                    <input type="submit" name="Submit" value="Cari">
                </form>
            </div>
            <div>
                <br/>
                <br/>
                <table align="center" border="1">
                    <thead>
                        <tr>
                            <th>id product</th>
                            <th>id Category</th>
                            <th>Id Admin</th>
                            <th>Nama Product</th>
                            <th>Harga</th>
                            <th>Stok</th>
                            <th>Warna</th>
                            <th>Deskripsi</th>
                            <th>Aksi</th>
                        </tr>
                    </thead>
                    <body>
                        @foreach($product as $p)
                        <tr>
                            <td>{{ $p->id_product }}</td>
                            <td>{{ $p->id_kategori }}</td>
                            <td>{{ $p->id_admin }}</td>
                            <td>{{ $p->nama_product }}</td>
                            <td>{{ $p->harga }}</td>
                            <td>{{ $p->stok }}</td>
                            <td>{{ $p->warna }}</td>
                            <td>{{ $p->deskripsi }}</td>
                            <td>
                                <a href="/product/edit/{{ $p->id_product}}" class="btn-warning">Edit</a>
                                <a href="/product/hapus/{{ $p->id_product}}" onclick="return confirm('Apakah anda yakin akan menghapus product {{ $p -> nama_product }} ?')"class="btn-danger">Hapus</a>
                            </td>
                        </tr>
                        @endforeach
                    </body>
                </table>
            </div>
        </div>
      </di>
    
    </body>
</html>