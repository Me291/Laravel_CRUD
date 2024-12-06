<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Mahasiswa</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        body {
            background-color: #608BC1;  /* Background color for the page */
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
        .form-label {
            font-weight: 500;
        }
        .btn-primary {
            background-color: #007bff;
            border-color: #007bff;
        }
        .btn-primary:hover {
            background-color: #0056b3;
            border-color: #0056b3;
        }
        .btn-secondary {
            background-color: #6c757d;
            border-color: #6c757d;
        }
        .btn-secondary:hover {
            background-color: #495057;
            border-color: #495057;
        }
        .mb-3 label {
            font-weight: 500;
        }
    </style>
</head>
<body>

<div class="container mt-5">
    <div class="form-container shadow-lg">
        <h1 class="form-title">Edit Mahasiswa</h1>
        <p class="form-subtitle">Perbarui informasi mahasiswa di bawah ini</p>
        <hr>

        <form action="{{ route('mahasiswas.update', $mahasiswa->id) }}" method="POST">
            @csrf
            @method('PUT')

            <div class="mb-3">
                <label class="form-label" for="nim">NIM</label>
                <input type="text" id="nim" name="nim" value="{{ old('nim', $mahasiswa->nim) }}" class="form-control @error('nim') is-invalid @enderror">
                @error('nim') <div class="text-danger">{{ $message }}</div> @enderror
            </div>

            <div class="mb-3">
                <label class="form-label" for="nama">Nama Lengkap</label>
                <input type="text" id="nama" name="nama" value="{{ old('nama', $mahasiswa->nama) }}" class="form-control @error('nama') is-invalid @enderror">
                @error('nama') <div class="text-danger">{{ $message }}</div> @enderror
            </div>

            <div class="mb-3">
                <label class="form-label" for="email">Email</label>
                <input type="email" id="email" name="email" value="{{ old('email', $mahasiswa->email) }}" class="form-control @error('email') is-invalid @enderror">
                @error('email') <div class="text-danger">{{ $message }}</div> @enderror
            </div>

            <div class="mb-3">
                <label class="form-label">Jenis Kelamin</label>
                <div class="d-flex">
                    <div class="form-check me-3">
                        <input class="form-check-input" type="radio" name="jenis_kelamin" id="laki_laki" value="L" {{ old('jenis_kelamin', $mahasiswa->jenis_kelamin) == 'L' ? 'checked' : '' }}>
                        <label class="form-check-label" for="laki_laki">Laki-laki</label>
                    </div>
                    <div class="form-check">
                        <input class="form-check-input" type="radio" name="jenis_kelamin" id="perempuan" value="P" {{ old('jenis_kelamin', $mahasiswa->jenis_kelamin) == 'P' ? 'checked' : '' }}>
                        <label class="form-check-label" for="perempuan">Perempuan</label>
                    </div>
                </div>
                @error('jenis_kelamin') <div class="text-danger">{{ $message }}</div> @enderror
            </div>

            <div class="mb-3">
                <label class="form-label" for="jurusan">Jurusan</label>
                <select class="form-select" name="jurusan" id="jurusan">
                    <option value="Teknik Informatika" {{ old('jurusan', $mahasiswa->jurusan) == 'Teknik Informatika' ? 'selected' : '' }}>Teknik Informatika</option>
                    <option value="Sistem Informasi" {{ old('jurusan', $mahasiswa->jurusan) == 'Sistem Informasi' ? 'selected' : '' }}>Sistem Informasi</option>
                    <option value="Ilmu Komputer" {{ old('jurusan', $mahasiswa->jurusan) == 'Ilmu Komputer' ? 'selected' : '' }}>Ilmu Komputer</option>
                    <option value="Teknik Komputer" {{ old('jurusan', $mahasiswa->jurusan) == 'Teknik Komputer' ? 'selected' : '' }}>Teknik Komputer</option>
                    <option value="Teknik Telekomunikasi" {{ old('jurusan', $mahasiswa->jurusan) == 'Teknik Telekomunikasi' ? 'selected' : '' }}>Teknik Telekomunikasi</option>
                </select>
                @error('jurusan') <div class="text-danger">{{ $message }}</div> @enderror
            </div>

            <div class="mb-3">
                <label class="form-label" for="alamat">Alamat</label>
                <textarea class="form-control" name="alamat" id="alamat" rows="5">{{ old('alamat', $mahasiswa->alamat) }}</textarea>
                @error('alamat') <div class="text-danger">{{ $message }}</div> @enderror
            </div>

            <button type="submit" class="btn btn-primary w-100">Update Data</button>
            <a href="{{ route('mahasiswas.index') }}" class="btn btn-secondary w-100 mt-2">Kembali ke Daftar Mahasiswa</a>
        </form>
    </div>
</div>

<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.min.js"></script>
</body>
</html>
