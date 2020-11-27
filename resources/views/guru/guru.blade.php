<!DOCTYPE html>
<html>

<head>
    <title>Soft Deletes Laravel</title>
    <link rel="stylesheet" type="text/css" href="{{ asset('/css/app.css') }}">
</head>

<body>

    <div class="container">

        <div class="card mt-5">
            <div class="card-header text-center">
                Data Guru
            </div>
            <div class="card-body">

                <a href="/guru" class="btn btn-sm btn-primary">Data Guru</a>

                <a href="/guru/trash" class="btn btn-sm btn-secondary">Tong Sampah</a>

                <br />
                <br />

                <table class="table table-bordered">
                    <thead>
                        <tr>
                            <th>Nama</th>
                            <th>Umur</th>
                            <th width="1%">OPSI</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($guru as $g)
                            <tr>
                                <td>{{ $g->nama }}</td>
                                <td>{{ $g->umur }}</td>
                                <td><a href="/guru/hapus/{{ $g->id }}" class="btn btn-danger btn-sm">Hapus</a></td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
                <br />
                Halaman : {{ $guru->currentPage() }} <br />
                Jumlah Data : {{ $guru->total() }} <br />
                Data Per Halaman : {{ $guru->perPage() }} <br />
                <br />

                {{ $guru->links() }}
            </div>
        </div>
    </div>

</body>

</html>
