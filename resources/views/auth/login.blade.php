<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <title>Login</title>
    <style>
   body {
            background: url('/img.jpg') no-repeat;
            background-size: 100%;
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            color: #fff;
        }


        .custom-form {
            max-width: 400px;
            margin: auto;
        }

        .custom-btn-group {
            display: flex;
            flex-direction: column;
            align-items: center;
            margin-top: 20px;
        }

        .btn {
            width: 100%;
            margin-bottom: 10px;
        }
    </style>
</head>
<body>

<section class="vh-100 d-flex align-items-center justify-content-center">
    <div class="container custom-form">
        <div class="card p-4">
            <h2 class="fw-bold mb-3 text-uppercase text-center">Login</h2>

            @if (session()->has('error'))
                <div class="alert alert-danger">{{ session('error') }}</div>
            @endif

            @if (session()->has('success'))
                <div class="alert alert-success">{{ session('success') }}</div>
            @endif

            <form method="post">
                @csrf

                <div class="mb-3">
                    <label for="email" class="form-label">Email address</label>
                    <input type="email" name="email" id="email" class="form-control" />
                </div>

                <div class="mb-3">
                    <label for="password" class="form-label">Password</label>
                    <input type="password" name="password" id="password" class="form-control" />
                </div>

                <div class="custom-btn-group">
                    <button class="btn btn-primary btn-lg" type="submit">Login</button>
                    <a href="/" class="btn btn-secondary btn-lg">Kembali</a>
                </div>
            </form>
        </div>
    </div>
</section>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>

</body>
</html>