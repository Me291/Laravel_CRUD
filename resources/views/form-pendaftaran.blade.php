<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
  <title>Tambah Data Mahasiswa</title>
  <style>
    body {
      background-color: #608BC1;  /* Light grey background for the entire page */
    }
    .form-container {
      max-width: 700px;
      margin: auto;
      padding: 30px;
      background-color: #f8f9fa;
      border-radius: 10px;
      box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
    }
    .form-title {
      font-size: 2rem;
      font-weight: bold;
      color: #495057;
    }
    .form-subtitle {
      font-size: 1.1rem;
      color: #6c757d;
    }
    .btn-primary {
      background-color: #007bff;
      border-color: #007bff;
    }
    .btn-primary:hover {
      background-color: #0056b3;
      border-color: #0056b3;
    }
    .lead {
      font-size: 1.2rem;
      font-weight: 400;
    }
    .mb-3 label {
      font-weight: 500;
    }
  </style>
</head>
<body>

<div class="container mt-5">
  <div class="form-container shadow-lg">
    <h1 class="form-title">{{ __('form.judul') }}</h1>
    <p class="form-subtitle">{{ __('form.nama_kampus') }}</p>
    <hr>

    <form action="{{ url('/proses-form') }}" method="POST">
      @csrf
      <input type="hidden" name="locale" value="{{ $locale }}">

      <div class="mb-3">
        <label class="form-label" for="nim">{{ __('form.input.nim') }}</label>
        <input type="text" id="nim" name="nim" value="{{ old('nim') }}" class="form-control @error('nim') is-invalid @enderror">
        @error('nim') <div class="text-danger">{{ $message }}</div> @enderror
      </div>

      <div class="mb-3">
        <label class="form-label" for="nama">{{ __('form.input.nama_lengkap') }}</label>
        <input type="text" id="nama" name="nama" value="{{ old('nama') }}" class="form-control @error('nama') is-invalid @enderror">
        @error('nama') <div class="text-danger">{{ $message }}</div> @enderror
      </div>

      <div class="mb-3">
        <label class="form-label" for="email">{{ __('form.input.email') }}</label>
        <input type="email" id="email" name="email" value="{{ old('email') }}" class="form-control @error('email') is-invalid @enderror">
        @error('email') <div class="text-danger">{{ $message }}</div> @enderror
      </div>

      <div class="mb-3">
        <label class="form-label">{{ __('form.input.jenis_kelamin') }}</label>
        <div class="d-flex">
          <div class="form-check me-3">
            <input class="form-check-input" type="radio" name="jenis_kelamin" id="laki_laki" value="L" {{ old('jenis_kelamin')=='L' ? 'checked' : '' }}>
            <label class="form-check-label" for="laki_laki">{{ __('form.input.pilihan_jenis_kelamin.laki_laki') }}</label>
          </div>
          <div class="form-check">
            <input class="form-check-input" type="radio" name="jenis_kelamin" id="perempuan" value="P" {{ old('jenis_kelamin')=='P' ? 'checked' : '' }}>
            <label class="form-check-label" for="perempuan">{{ __('form.input.pilihan_jenis_kelamin.perempuan') }}</label>
          </div>
        </div>
        @error('jenis_kelamin') <div class="text-danger">{{ $message }}</div> @enderror
      </div>

      <div class="mb-3">
        <label class="form-label" for="jurusan">{{ __('form.input.jurusan') }}</label>
        <select class="form-select" name="jurusan" id="jurusan">
          <option value="Teknik Informatika" {{ old('jurusan')=='Teknik Informatika' ? 'selected' : '' }}>Teknik Informatika</option>
          <option value="Sistem Informasi" {{ old('jurusan')=='Sistem Informasi' ? 'selected' : '' }}>Sistem Informasi</option>
          <option value="Ilmu Komputer" {{ old('jurusan')=='Ilmu Komputer' ? 'selected' : '' }}>Ilmu Komputer</option>
          <option value="Teknik Komputer" {{ old('jurusan')=='Teknik Komputer' ? 'selected' : '' }}>Teknik Komputer</option>
          <option value="Teknik Telekomunikasi" {{ old('jurusan')=='Teknik Telekomunikasi' ? 'selected' : '' }}>Teknik Telekomunikasi</option>
        </select>
        @error('jurusan') <div class="text-danger">{{ $message }}</div> @enderror
      </div>

      <div class="mb-3">
        <label class="form-label" for="alamat">{{ __('form.input.alamat') }}</label>
        <textarea class="form-control" name="alamat" id="alamat" rows="5">{{ old('alamat') }}</textarea>
        @error('alamat') <div class="text-danger">{{ $message }}</div> @enderror
      </div>

      <button type="submit" class="btn btn-primary w-100">{{ __('form.input.tombol_daftar') }}</button>
      <a href="{{ url('/mahasiswas') }}" class="btn btn-secondary w-100 mt-2">Lihat Data</a>

    </form>
  </div>
</div>

<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.min.js"></script>
</body>
</html>
