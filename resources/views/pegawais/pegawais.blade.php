<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" href="{{ asset('/css/app.css') }}">
    <title>CRUD Eloquent Laravel</title>
</head>

<body>
    <div class="container">
        <div class="card mt-5">
            <div class="card-header text-center">
                CRUD Data Pegawai
            </div>
            <div class="card-body">
                <a href="/pegawais/tambah" class="btn btn-primary">Input Pegawai Baru</a>
                <br />
                <br />
                <table class="table table-bordered table-hover table-striped">
                    <thead>
                        <tr>
                            <th>Nama</th>
                            <th>Alamat</th>
                            <th>OPSI</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($pegawais as $p)
                            <tr>
                                <td>{{ $p->nama }}</td>
                                <td>{{ $p->alamat }}</td>
                                <td>
                                    <a href="/pegawais/edit/{{ $p->id }}" class="btn btn-warning">Edit</a>
                                    <a href="/pegawais/hapus/{{ $p->id }}" class="btn btn-danger">Hapus</a>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>

                <br />
                Halaman : {{ $pegawais->currentPage() }} <br />
                Jumlah Data : {{ $pegawais->total() }} <br />
                Data Per Halaman : {{ $pegawais->perPage() }} <br />
                <br />

                {{ $pegawais->links() }}
            </div>
        </div>
    </div>
</body>

</html>
