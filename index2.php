<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login Admin / petugas - Aplikasi Pembayaran SPP.</title>
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <style>
        body {
            background-image: url('smkpp.jpg'); /* Ganti dengan path gambar latar belakang */
            background-size: cover;
            background-repeat: no-repeat;
            background-position: center center;
            background-attachment: fixed;
            margin: 0; /* Menghapus margin default */
            padding: 0; /* Menghapus padding default */
            height: 100%;
            font-family: 'Arial', sans-serif; /* Ganti font sesuai kebutuhan */
        }

        .container {
            height: 100%;
            display: flex;
            align-items: center;
            justify-content: center;
        }

        .card {
            width: 100%;
            max-width: 400px;
        }

        .card-header img {
            width: 100%;
        }

        .card-body {
            padding: 20px;
        }

        .form-group {
            margin-bottom: 1.5rem;
        }

        .btn-primary {
            width: 100%;
        }
    </style>
</head>
<body>
 <div class="container mt-5">
    <div class="row justify-content-md-center">
        <div class="col-md-10">
        <style>
        .custom-text {
        font-weight: bold; /* Membuat teks menjadi tebal */
        font-size: 24px; /* Ukuran font */
        font-family: 'Brush Script MT', cursive; /* Jenis font */
        color: #333; /* Warna teks */
        /*Tambahkan properti CSS lainnya sesuai kebutuhan Anda */
        }
        </style>
            <h4 class="text-center custom-text">LOGIN ADMIN / PETUGAS</h4>
            <div class="card">
                <div class="card-header">
                    <img src="logo-apkspp.png" width="100%">

                </div>
                <div class="card-body">
                    <form action="proses-login-petugas.php" method="post">
                        <div class="form-group mb-2">
                            <label>Username</label>
                            <input type="text" name="username" class="form-control" placeholder="Masukan Username anda.." required>
                        </div>
                        <div class="form-group mb-2">
                            <label>Password</label>
                            <input type="password" name="password" class="form-control" placeholder="Masukan Password anda.." required>
                        </div>
                        <div class="form-group mb-2">
                            <button type="submit" class="btn btn-primary"> LOGIN </button>
                        </div>
                        <a href="index.php"> Login Sebagai Siswa </a>
                    </form>
                </div>
            </div>
        </div>
    </div>
 </div>   

<script src="js/bootstrap.bundle.min.js"></script>
</body>
</html>