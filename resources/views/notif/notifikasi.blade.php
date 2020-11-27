<!doctype html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>notif</title>
    <link rel="stylesheet" type="text/css" href="{{ asset('/css/app.css') }}">

</head>

<body>

    <div class="container mt-5">
        <div class="row">
            <div class="col-md-12">

                <center>
                    <h2>Notifikasi Dengan Session Laravel</h2>
                </center>

                @if ($message = Session::get('sukses'))
                    <div class="alert alert-success alert-block">
                        <button type="button" class="close" data-dismiss="alert">×</button>
                        <strong>{{ $message }}</strong>
                    </div>
                @endif

                @if ($message = Session::get('gagal'))
                    <div class="alert alert-danger alert-block">
                        <button type="button" class="close" data-dismiss="alert">×</button>
                        <strong>{{ $message }}</strong>
                    </div>
                @endif

                @if ($message = Session::get('peringatan'))
                    <div class="alert alert-warning alert-block">
                        <button type="button" class="close" data-dismiss="alert">×</button>
                        <strong>{{ $message }}</strong>
                    </div>
                @endif


                <center>
                    <a href="/pesan/sukses" class="btn btn-success">NOTIFIKASI SUKSES</a>
                    <a href="/pesan/gagal" class="btn btn-danger">NOTIFIKASI GAGAL</a>
                    <a href="/pesan/peringatan" class="btn btn-warning">NOTIFIKASI PERINGATAN</a>
                </center>
            </div>
        </div>
    </div>

    <script src="https://code.jquery.com/jquery-3.3.1.js"></script>
    <script src="{{ asset('/js/app.js') }}">
    </script>
</body>

</html>
