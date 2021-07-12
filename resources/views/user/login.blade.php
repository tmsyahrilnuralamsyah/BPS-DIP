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
    <div class="container mt-3">
        <!-- Outer Row -->
        <div class="row justify-content-center">
            <div class="col-xl-10 col-lg-12 col-md-9 my-4">
                <div class="card o-hidden border-0 shadow-lg my-5">
                    <div class="card-body p-0">
                        <!-- Nested Row within Card Body -->
                        <div class="row">
                            <div class="col-lg-6 d-none d-lg-block bg-login-image" style="background-image: url({{ asset('assets/img/login2.jpg') }});"></div>
                            <div class="col-lg-6">
                                <div class="p-5">
                                    <div class="text-center mt-3">
                                        <h1 class="h4 text-gray-900 font-weight-bold mb-4">Login BPS DIP!</h1>
                                    </div>

                                    <form class="form user my-5" method="post" action="{{ route("userlogin") }}">
                                        {{ csrf_field() }}
                                        @if(session('message'))
                                            <p style="color: red;">
                                                {{ session('message') }}
                                            </p>
                                        @endif
                                        <div class="form-group">
                                            <input type="text" class="form-control form-control-user"
                                                id="exampleInputEmail" name="noTm" aria-describedby="emailHelp"
                                                placeholder="Nomor Surat">
                                        </div>
                                        <div class="form-group">
                                            <input type="password" class="form-control form-control-user"
                                                id="exampleInputPassword" name="kode" placeholder="Kode Admin">
                                        </div>
                                        <button type="submit" class="btn btn-primary btn-user btn-block my-5">Login</button>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>
</html>
