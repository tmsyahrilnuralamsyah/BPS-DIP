<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="{{ asset('assets/img/bps.svg') }}" />

    <!-- Custom fonts for this template-->
    <link href="{{ asset('assets/vendor/fontawesome-free/css/all.min.css') }}" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">

    <!-- Custom styles for this template-->
    <link href="{{ asset('assets/css/sb-admin-2.min.css') }}" rel="stylesheet">

    <title>BPS DIP</title>
</head>
<body style="background-color: #00004d; background: linear-gradient(90deg, rgba(2,0,36,1) 0%, rgba(9,9,121,1) 35%, rgb(38, 38, 168) 100%);">
    <div class="container mt-4">
        <!-- Outer Row -->
        <div class="row justify-content-center">
            <div class="col-xl-10 col-lg-12 col-md-9">
                <div class="card o-hidden border-0 shadow-lg my-5">
                    <div class="card-body p-0">
                        <div class="text-center mx-5">
                            <img src="{{ asset('assets/img/bps.svg') }}" style="width: 100px;" class="mt-5" alt="">
                            <h2 class="text-gray-900 font-weight-bold mb-4 mt-2">Selamat Datang di BPS DIP</h2>
                            <p>BPS DIP merupakan sebuah website yang bertujuan untuk mendata proses surat masuk dan surat keluar pada BPS Provinsi Aceh</p>
                        </div>
                        <div class="text-center p-5">
                            <h4 style="color: rgb(112, 106, 106)">Masuk sebagai :</h4>
                            <a href="{{ route("adminlogin") }}" class="btn btn-primary btn-user btn-block mt-2 mr-3">ADMIN</a>
                            <a href="{{ route("userlogin") }}" class="btn btn-success btn-user btn-block mt-2">USER</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>
</html>
