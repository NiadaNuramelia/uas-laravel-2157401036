<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <link href="https://fonts.googleapis.com/css2?family=Pacifico&display=swap" rel="stylesheet">
    <title>Selamat Datang</title>
    <style>
        body {
            background: url('/img.jpg') no-repeat;
            background-size: 100%;
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            color: #fff;
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

        .vh-100 {
            min-height: 100vh;
            display: flex;
            align-items: center;
        }

        .container {
            max-width: 400px;
        }

        .card {
            border: none;
            border-radius: 10px;
            box-shadow: 0 0 20px rgba(0,0,0,0.1);
            background-color: rgba(255, 255, 255, 0.9);
        }

        .card-body {
            padding: 40px;
        }

        h3 {
            color: #343a40;
            font-family: 'Dancing Script', cursive;
            font-size: 30px;
            font-weight: bold;
        }

        .btn-primary {
            background-color: #007bff;
            color: #ffffff;
            border: none;
            padding: 10px;
            font-size: 18px;
            border-radius: 5px;
            margin-top: 20px;
        }

        .btn-primary:hover {
            background-color: #0056b3;
        }
    </style>
</head>
<body>

<section class="vh-100">
    <div class="container">
        <div class="card">
            <div class="card-body text-center">
                <h3 class="mb-5">SELAMAT DATANG</h3>
                <a href="/register" class="btn btn-primary btn-lg btn-block">Daftar</a>
                <a href="/login" class="btn btn-primary btn-lg btn-block">Login</a>
            </div>
        </div>
    </div>
</section>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
</body>
</html>