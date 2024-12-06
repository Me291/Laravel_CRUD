<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="/css/bootstrap.min.css" rel="stylesheet">
    <title>File Upload Success</title>
</head>

<body>

    <div class="container mt-3">
        <h2>File Upload Success</h2>
        <hr>

        @if(session('success'))
        <div class="alert alert-success">
            {{ session('success') }}
        </div>
        @endif

        <p>Gambar berhasil diupload dengan nama file: <strong>{{ $namaFile }}</strong></p>
        <p><a href="{{ $pathPublic }}" target="_blank">Klik di sini untuk melihat gambar</a></p>
        <img src="{{ $pathPublic }}" width="200px" alt="Uploaded Image">

        <hr>

        <h4>Rename Image</h4>
        <form action="{{ url('/rename-file') }}" method="POST">
            @csrf
            <div class="mb-3">
                <label for="new_name" class="form-label">New File Name</label>
                <input type="text" class="form-control" id="new_name" name="new_name" value="{{ $namaFile }}" required>
            </div>
            <input type="hidden" name="old_name" value="{{ $namaFile }}">
            <button type="submit" class="btn btn-warning">Rename</button>
        </form>

    </div>

</body>

</html>
