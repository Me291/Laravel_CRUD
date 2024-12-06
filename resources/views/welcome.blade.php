<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Welcome to Laravel</title>
    <!-- Link ke Bootstrap CSS dari CDN -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        /* Latar belakang gradien dengan animasi */
        body {
            margin: 0;
            padding: 0;
            background: linear-gradient(45deg, #0078FF, #00C6FF);
            background-size: 300% 300%;
            animation: gradient 8s ease infinite;
            font-family: 'Roboto', sans-serif;
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
            font-size: 4rem;
            font-weight: bold;
            text-shadow: 0 4px 8px rgba(0, 0, 0, 0.3);
        }

        p {
            font-size: 1.5rem;
            margin-top: 1rem;
            margin-bottom: 2rem;
            line-height: 1.6;
        }

        .btn {
            text-decoration: none;
            color: #fff;
            background: linear-gradient(45deg, #ff6b6b, #fbc531);
            padding: 15px 40px;
            font-size: 1.2rem;
            font-weight: 600;
            border-radius: 30px;
            transition: all 0.3s ease-in-out;
            box-shadow: 0 6px 15px rgba(0, 0, 0, 0.2);
        }

        .btn:hover {
            transform: translateY(-5px);
            box-shadow: 0 10px 20px rgba(0, 0, 0, 0.3);
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
        <h1>Welcome to Laravel</h1>
        <p>Start building powerful and modern web applications with the world's most popular PHP framework.</p>
        <a href="http://127.0.0.1:8000/mahasiswas" class="btn">Get Started</a>
    </div>

    <footer>
        <p>Crafted with ❤️ using Laravel Framework</p>
    </footer>

    <div class="wave"></div>

    <!-- Script Bootstrap JS dari CDN -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
