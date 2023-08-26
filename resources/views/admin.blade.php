<html>
    <head>
        <title>Data Admin</title>
    </head>
    <body>
      <di>
        <div>
            <div>
                <center>
                    <H2>BIODATA Admin</H2>
                    <a href="/admin/tambah" class="btn btn-primary">Input admin</a>
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
                        <div class="tabel1">
                            <th>Username</th>
                            <th>Nama</th>
                            <th>Jenis Kelamin</th>
                            <th>Tanggal Lahir</th>
                            <th>Alamat</th>
                            <th>No Telepon</th>
                            <th>Password</th>
                            <th>Email</th>
                            <th>Aksi</th>
                            </div>
                    </thead>
                    <body>
                        @foreach($admin as $a)
                        <tr>
                            <td>{{ $a->username }}</td>
                            <td>{{ $a->nama_lengkap }}</td>
                            <td>{{ $a->jenkel }}</td>
                            <td>{{ $a->tgl_lahir }}</td>
                            <td>{{ $a->alamat }}</td>
                            <td>{{ $a->no_telp }}</td>
                            <td>{{ $a->password }}</td>
                            <td>{{ $a->email }}</td>
                            <td>
                                <a href="/admin/edit/{{ $a->id_admin}}" class="btn-warning">Edit</a>
                                <a href="/admin/hapus/{{ $a->id_admin}}" onclick="return confirm('Apakah anda yakin akan menghapus data {{ $a -> nama_lengkap }} ?')" class="btn-danger">Hapus</a>
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