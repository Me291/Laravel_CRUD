<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CRUD Mahasiswa - Laravel</title>
    <!-- Link ke Bootstrap CSS dari CDN -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;600&display=swap" rel="stylesheet">
    <style>
        /* Latar belakang gradien dengan animasi */
        body {
            margin: 0;
            padding: 0;
            background: linear-gradient(135deg, #6e7dff, #56c8ff);
            background-size: 300% 300%;
            animation: gradient 8s ease infinite;
            font-family: 'Poppins', sans-serif;
            color: #fff;
            height: 100vh;
            display: flex;
            flex-direction: column;
            justify-content: center;
            align-items: center;
            text-align: center;
        }

        @keyframes gradient {
            0% {
                background-position: 0% 50%;
            }
            50% {
                background-position: 100% 50%;
            }
            100% {
                background-position: 0% 50%;
            }
        }

        h1 {
            font-size: 4.5rem;
            font-weight: 600;
            text-shadow: 0 6px 12px rgba(0, 0, 0, 0.4);
        }

        p {
            font-size: 1.2rem;
            margin-top: 1rem;
            margin-bottom: 2rem;
            line-height: 1.8;
            max-width: 600px;
            margin-left: auto;
            margin-right: auto;
        }

        ul {
            text-align: left;
            font-size: 1.2rem;
            line-height: 1.8;
            max-width: 600px;
            margin-left: auto;
            margin-right: auto;
        }

        .btn {
            text-decoration: none;
            color: #fff;
            background: linear-gradient(45deg, #ff6b6b, #fbc531);
            padding: 15px 40px;
            font-size: 1.2rem;
            font-weight: 600;
            border-radius: 50px;
            transition: all 0.3s ease-in-out;
            box-shadow: 0 8px 20px rgba(0, 0, 0, 0.25);
            margin-bottom: 20px;
        }

        .btn:hover {
            transform: translateY(-5px);
            box-shadow: 0 12px 25px rgba(0, 0, 0, 0.3);
        }

        .file-upload-btn {
            display: inline-block;
            padding: 12px 30px;
            margin-top: 20px;
            background-color: #FF6F61;
            border-radius: 50px;
            font-size: 1.2rem;
            color: #fff;
            font-weight: bold;
            text-transform: uppercase;
            transition: background-color 0.3s ease;
        }

        .file-upload-btn:hover {
            background-color: #e55b4c;
        }

        footer {
            margin-top: auto;
            font-size: 0.9rem;
            color: #ddd;
            text-shadow: 0 2px 5px rgba(0, 0, 0, 0.3);
        }

        .wave {
            position: absolute;
            bottom: 0;
            width: 100%;
            height: 100px;
            background: url('https://www.svgbackgrounds.com/wp-content/uploads/wave.svg') no-repeat;
            background-size: cover;
        }
    </style>
</head>
<body>
    <div>
        <h1>CRUD Data Mahasiswa</h1>
        <p>Kelola data mahasiswa Anda dengan mudah menggunakan aplikasi berbasis Laravel. Fitur CRUD berikut ini memungkinkan Anda untuk:</p>
        <ul>
            <li><strong>Create:</strong> Menambahkan data mahasiswa baru</li>
            <li><strong>Read:</strong> Melihat daftar mahasiswa yang terdaftar</li>
            <li><strong>Update:</strong> Mengubah data mahasiswa</li>
            <li><strong>Delete:</strong> Menghapus data mahasiswa</li>
        </ul>
        <p>Mulailah dengan mengelola data mahasiswa Anda di sistem ini.</p>
        <a href="http://127.0.0.1:8000/mahasiswas" class="btn">Lihat Data Mahasiswa</a>
        <a href="http://127.0.0.1:8000/file-upload-rename" class="btn">Upload File</a>
    </div>
    <div class="wave"></div>

    <!-- Script Bootstrap JS dari CDN -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
