<!doctype html>
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
                CRUD Data Pegawai - <strong>EDIT DATA</strong>
            </div>
            <div class="card-body">
                <a href="/pegawais" class="btn btn-primary">Kembali</a>
                <br />
                <br />


                <form method="post" action="/pegawais/update/{{ $pegawais->id }}">

                    {{ csrf_field() }}
                    {{ method_field('PUT') }}

                    <div class="form-group">
                        <label>Nama</label>
                        <input type="text" name="nama" class="form-control" placeholder="Nama pegawai .."
                            value=" {{ $pegawais->nama }}">

                        @if ($errors->has('nama'))
                            <div class="text-danger">
                                {{ $errors->first('nama') }}
                            </div>
                        @endif

                    </div>

                    <div class="form-group">
                        <label>Alamat</label>
                        <textarea name="alamat" class="form-control" placeholder="Alamat pegawai ..">
                        {{ $pegawais->alamat }} </textarea>

                        @if ($errors->has('alamat'))
                            <div class="text-danger">
                                {{ $errors->first('alamat') }}
                            </div>
                        @endif

                    </div>

                    <div class="form-group">
                        <input type="submit" class="btn btn-success" value="Simpan">
                    </div>

                </form>

            </div>
        </div>
    </div>
</body>

</html>
