<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <meta http-equiv="X-UA-Compatible" content="ie=edge"><link rel="icon" href="{{ asset('assets/img/bps.svg') }}" />

    <!-- Custom fonts for this template-->
    <link href="{{ asset('assets/vendor/fontawesome-free/css/all.min.css') }}" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">

    <!-- Custom styles for this template-->
    <link href="{{ asset('assets/css/sb-admin-2.min.css') }}" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/css/surat.css') }}">

    <!-- Custom styles for this page -->
    <link href="{{ asset('assets/vendor/datatables/dataTables.bootstrap4.min.css') }}" rel="stylesheet">

    <title>BPS DIP</title>
</head>
<body class="document">
    <div class="page">
        <div class="row">
            <div class="col-3 mt-2">
                <img src="{{ asset('assets/img/bps.svg') }}" style="width: 100px;" alt="">
            </div>
            <div class="col-6">
                <div class="row justify-content-center">
                    <h5><b>BADAN PUSAT STATISTIK</b></h5>
                </div>
                <div class="row justify-content-center">
                    <h6><b>PROVINSI ACEH</b></h6>
                </div>
                <div class="row justify-content-center">
                    <h4><b><u>LEMBARAN DISPOSISI</u></b></h4>
                </div>
            </div>
            <div class="col-3">
                <img src="{{ asset('assets/img/sensus.jpeg') }}" style="width: 100px;" alt="">
            </div>
        </div>

        <div class="row">
            <p><b>1. SURAT DARI</b></p>
        </div>
        <div class="row ml-1">
            <div class="col-3">
                <p2>Instansi</p2>
            </div>
            <p2>:</p2>
        </div>
        <div class="row ml-1">
            <div class="col-3">
                <p2>Nomor/Tanggal</p2>
            </div>
            <p2>:</p2>
        </div>
        <div class="row ml-1">
            <div class="col-3">
                <p2>Perihal</p2>
            </div>
            <p2>:</p2>
        </div>

        <div class="row mt-1">
            <p><b>2. KODE INDEK UMUM</b></p>
        </div>
        <div class="row ml-1">
            <div class="col-3">
                <p2>Nomor</p2>
            </div>
            <p2>:</p2>
        </div>
        <div class="row ml-1">
            <div class="col-3">
                <p2>Tanggal Surat</p2>
            </div>
            <p2>:</p2>
            <div class="col">

            </div>
            <div class="col-5">
                <div class="border border-dark">
                    <p2 class="ml-1">Paraf Petugas :</p2>
                </div>
            </div>
        </div>

        <div class="row mt-1">
            <p><b>3. DISPOSISI KEPALA KEPADA :</b></p>
        </div>
        <div class="row">
            <div class="col-4">
                <div class="row ml-1">
                    <p2>KABAG UMUM</p2>
                </div>
                <div class="row ml-1">
                    <p2>KOOR STAT. SOSIAL</p2>
                </div>
                <div class="row ml-1">
                    <p2>KOOR STAT. PRODUKSI</p2>
                </div>
                <div class="row ml-1">
                    <p2>KOOR DTAT. DISTRIBUSI</p2>
                </div>
                <div class="row ml-1">
                    <p2>KOOR CAWILIS</p2>
                </div>
                <div class="row ml-1">
                    <p2>KOOR IPDS</p2>
                </div>
                <div class="row ml-1">
                    <p2>KORPRI</p2>
                </div>
            </div>
            <div class="col">
                <div class="row">
                    <div class="col-1">
                        <div class="row mt-1">
                            <input type="checkbox" id="disposisi" name="disposisi" value="kabagUmum"/>
                        </div>
                        <div class="row mt-1">
                            <input type="checkbox" id="disposisi" name="disposisi" value="koorSosial"/>
                        </div>
                        <div class="row mt-1">
                            <input type="checkbox" id="disposisi" name="disposisi" value="koorProduksi"/>
                        </div>
                        <div class="row mt-1">
                            <input type="checkbox" id="disposisi" name="disposisi" value="koorDistribusi"/>
                        </div>
                        <div class="row mt-1">
                            <input type="checkbox" id="disposisi" name="disposisi" value="koorCawilis"/>
                        </div>
                        <div class="row mt-1">
                            <input type="checkbox" id="disposisi" name="disposisi" value="koorIpds"/>
                        </div>
                        <div class="row mt-1">
                            <input type="checkbox" id="disposisi" name="disposisi" value="korpri"/>
                        </div>
                    </div>
                    <div class="col">
                        <div class="border border-dark">
                            <div class="row ml-1">
                                <div class="col-6">
                                    <div class="row">
                                        <input type="checkbox" class="mt-1 mr-1" id="ketDisposisi" name="ketDisposisi" value="hp"/>
                                        <p2>Harap diproses</p2>
                                    </div>
                                    <div class="row">
                                        <input type="checkbox" class="mt-1 mr-1" id="ketDisposisi" name="ketDisposisi" value="pms"/>
                                        <p2>Penuhi maksud surat</p2>
                                    </div>
                                    <div class="row">
                                        <input type="checkbox" class="mt-1 mr-1" id="ketDisposisi" name="ketDisposisi" value="hj"/>
                                        <p2>Harap dijawab</p2>
                                    </div>
                                </div>
                                <div class="col">
                                    <div class="row">
                                        <input type="checkbox" class="mt-1 mr-1" id="ketDisposisi" name="ketDisposisi" value="pk"/>
                                        <p2>Periksa kebenarannya</p2>
                                    </div>
                                    <div class="row">
                                        <input type="checkbox" class="mt-1 mr-1" id="ketDisposisi" name="ketDisposisi" value="tpy"/>
                                        <p2>Teruskan pada ybs.</p2>
                                    </div>
                                    <div class="row">
                                        <input type="checkbox" class="mt-1 mr-1" id="ketDisposisi" name="ketDisposisi" value="um"/>
                                        <p2>Untuk dimaklumi</p2>
                                    </div>
                                </div>
                            </div>
                            <p2 class="ml-2">Catatan :</p2>
                            <div class="mt-4 d-flex flex-row-reverse mr-5">
                                <p2>Paraf/Tgl</p2>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="row mt-1">
            <p><b>4. DISPOSISI KABAG/KOOR</b></p>
        </div>
        <P2 class="ml-1">KEPADA</P2>
        <div class="border border-dark ml-1">
            <p2 class="ml-2">Catatan :</p2>
            <div class="mt-3 d-flex flex-row-reverse mr-5">
                <p2>Paraf/Tgl</p2>
            </div>
        </div>

        <div class="row mt-1">
            <p><b>5. DISPOSISI KASUBAG/KOOR</b></p>
        </div>
        <div class="border border-dark ml-1">
            <p2 class="ml-2">Catatan :</p2>
            <div class="mt-3 d-flex flex-row-reverse mr-5">
                <p2>Paraf/Tgl</p2>
            </div>
        </div>

        <div class="row mt-1">
            <div class="col-3">
                <p2><b>KODE INDEK</b></p2>
            </div>
            <p2><b>:</b></p2>
        </div>
        <div class="row">
            <div class="col-3">
                <p2>Nomor</p2>
            </div>
            <p2>:</p2>
        </div>
        <div class="row">
            <div class="col-3">
                <p2>Tanggal</p2>
            </div>
            <p2>:</p2>
            <div class="col">

            </div>
            <div class="col-5">
                <div class="border border-dark">
                    <p2 class="ml-1">Paraf Petugas :</p2>
                </div>
            </div>
        </div>

        <div class="row mt-1">
            <p2>Jl. Tgk. H. M. Daud Beureueh No. 50 Telp. (0651) 23005 fax. 33632</p2>
        </div>
        <div class="row">
            <p2>e-mail : bps1100@bps.go.id</p2>
        </div>

        <div class="row justify-content-center mt-1">
            <p3><i>Bersama kita tunjukan integritas !!</i></p3>
        </div>
        <div class="row justify-content-center">
            <p3><i>No Korupsi !! No Gratifikasi !!</i></p3>
        </div>
    </div>
</body>
</html>
