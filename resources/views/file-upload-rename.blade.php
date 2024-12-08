<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <link href="{{ asset('css/bootstrap.min.css') }}" rel="stylesheet">
  <title>Unggah Foto Profil Anda</title>
  <style>
    body {
      background-color: #e9ecef;
      font-family: 'Arial', sans-serif;
    }
    .card {
      box-shadow: 0 6px 12px rgba(0, 0, 0, 0.1);
      border-radius: 10px;
    }
    .form-label {
      font-weight: 600;
      color: #495057;
    }
    .btn-primary {
      background: linear-gradient(45deg, #007bff, #0056b3);
      border: none;
      font-weight: 600;
    }
    .btn-primary:hover {
      background: linear-gradient(45deg, #0056b3, #003d80);
    }
    .container {
      min-height: 100vh;
      display: flex;
      justify-content: center;
      align-items: center;
      padding: 20px;
    }
    h3 {
      font-size: 1.8rem;
      font-weight: 700;
      color: #007bff;
    }
    p {
      font-size: 1rem;
      color: #6c757d;
    }
    .form-control, .btn {
      border-radius: 8px;
    }
    small {
      font-size: 0.9rem;
    }
    .text-danger {
      font-size: 0.875rem;
    }
  </style>
</head>
<body>

<div class="container">
  <div class="card p-4" style="max-width: 500px; width: 100%;">
    <h3 class="text-center">Unggah Foto Profil Anda</h3>
    <p class="text-center">Tunjukkan citra profesional Anda dengan gambar profil terbaik!</p>
    <hr>

    <form action="{{ url('/file-upload-rename') }}" method="POST" enctype="multipart/form-data">
      @csrf

      <!-- Input Nama Gambar -->
      <div class="mb-3">
        <label for="nama_gambar" class="form-label">Nama Gambar</label>
        <input type="text" class="form-control" id="nama_gambar" name="nama_gambar" value="{{ old('nama_gambar') }}" placeholder="Masukkan nama gambar">
        @error('nama_gambar')
          <div class="text-danger small mt-1">{{ $message }}</div>
        @enderror
      </div>

      <!-- Input File -->
      <div class="mb-3">
        <label for="gambar_profile" class="form-label">Unggah Gambar</label>
        <input type="file" class="form-control" id="gambar_profile" name="gambar_profile">
        <small class="text-muted">Format yang didukung: JPG, PNG. Maksimal ukuran: 2MB.</small>
        @error('gambar_profile')
          <div class="text-danger small mt-1">{{ $message }}</div>
        @enderror
      </div>

      <!-- Submit Button -->
      <button type="submit" class="btn btn-primary w-100 mt-3">Unggah Gambar</button>
    </form>
  </div>
</div>

<script src="{{ asset('js/bootstrap.bundle.min.js') }}"></script>
</body>
</html>
