<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <title>Pendaftaran</title>
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

        section {
            padding: 4rem 0;
        }

        .container {
            max-width: 450px;
            margin: auto;
        }

        .form-outline {
            margin-bottom: 1.5rem;
        }

        .btn-primary {
            width: 100%;
            margin-top: 1rem;
        }

        .btn-secondary {
            background-color: #808080;
            color: #fff;
            width: 100%;
            margin-top: 1rem;
        }

        .card {
            border: 1px solid #ced4da;
            border-radius: 10px;
            box-shadow: 0 0 10px rgba(0,0,0,0.1);
        }
    </style>
</head>
<body>

<section>
    <div class="container">
        <div class="card p-4">
            <h2 class="fw-bold mb-4 text-uppercase text-center">Form Pendaftaran</h2>

            <form method="post">
                @csrf

                <div class="form-outline">
                    <label class="form-label" for="name">Nama</label>
                    <input type="text" name="name" id="name" class="form-control" />
                </div>

                <div class="form-outline">
                    <label class="form-label" for="email">Email</label>
                    <input type="email" name="email" id="email" class="form-control" />
                </div>

                <div class="form-outline">
                    <label class="form-label" for="password">Password</label>
                    <input type="password" name="password" id="password" class="form-control" />
                </div>

                <button class="btn btn-primary btn-lg" type="submit">Daftar</button>
                <a href="/" class="btn btn-secondary btn-lg">Kembali</a>
            </form>
        </div>
    </div>
</section>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>

</body>
</html>