<html>
    <head>
        <title>Data Customer</title>
    </head>
    <body>
      <di>
        <div>
            <div>
                <center>
                    <H2>BIODATA Customer</H2>
                    <a href="/customer/tambah" class="btn btn-primary">Input Data Baru</a>
                </center>
            </div>
            <div>
                <br/>
                <br/>
                <table align="center" border="1">
                    <thead>
                        <tr>
                            <th>Nama</th>
                            <th>No Telepon</th>
                            <th>Jenis Kelamin</th>
                            <th>Alamat</th>
                            <th>Username</th>
                            <th>Password</th>
                            <th>Email</th>
                            <th>Aksi</th>
                        </tr>
                    </thead>
                    <body>
                        @foreach($customer as $a)
                        <tr>
                            <td>{{ $a->nama_customer }}</td>
                            <td>{{ $a->no_telp }}</td>
                            <td>{{ $a->jenkel }}</td>
                            <td>{{ $a->alamat }}</td>
                            <td>{{ $a->username }}</td>
                            <td>{{ $a->password }}</td>
                            <td>{{ $a->email }}</td>
                            <td>
                                <a href="/customer/edit/{{ $a->id_customer}}" class="btn-warning">Edit</a>
                                <a href="/customer/hapus/{{ $a->id_customer}}" class="btn-danger">Hapus</a>
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