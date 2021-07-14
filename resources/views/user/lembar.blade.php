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
<body>
    <nav class="navbar navbar-expand navbar-dark bg-dark topbar static-top shadow">
        <ul class="navbar-nav ml-auto">
            <li class="nav-item dropdown no-arrow">
                <a href="{{ route("userlogin") }}" class="btn btn-primary px-5 mr-5">Logout</a>
            </li>
        </ul>
    </nav>

    <div class="container">
        <div class="card o-hidden border-0 shadow-lg my-4">
            <form class="form user m-5" method="post" action="{{ route("userlembar", $books->id) }}">
                {{ csrf_field() }}
                {{ method_field('PUT') }}

                @if(session('alert'))
                    <div class="alert alert-success" role="alert">
                        {{ session('alert') }}
                    </div>
                @endif

                <div class="form-group">
                    <label>Nomor Terturut</label>
                    <input type="text" name="noTm" class="form-control" value="{{ $books -> noTm }}" disabled>
                    @if($errors->has('noTm'))
                        <div class="text-danger">
                            {{ $errors->first('noTm')}}
                        </div>
                    @endif
                </div>

                <div class="form-group">
                    <label>Pengirim</label>
                    <input type="text" name="pengirim" class="form-control" value="{{ $books -> pengirim }}" disabled>
                    @if($errors->has('pengirim'))
                        <div class="text-danger">
                            {{ $errors->first('pengirim')}}
                        </div>
                    @endif
                </div>

                <div class="form-group">
                    <label>Nomor</label>
                    <input type="text" name="noSm" class="form-control" value="{{ $books -> noSm }}" disabled>
                    @if($errors->has('noSm'))
                        <div class="text-danger">
                            {{ $errors->first('noSm')}}
                        </div>
                    @endif
                </div>

                <div class="form-group">
                    <label>Tanggal</label>
                    <input type="date" name="tanggalSm" class="form-control" value="{{ $books -> tanggalSm }}" disabled>
                    @if($errors->has('tanggalSm'))
                        <div class="text-danger">
                            {{ $errors->first('tanggalSm')}}
                        </div>
                    @endif
                </div>

                <div class="form-group">
                    <label>Isi Ringkas</label>
                    <textarea type="textarea" name="ringkasM" class="form-control" disabled>{{ $books -> ringkasM }}</textarea>
                    @if($errors->has('ringkasM'))
                        <div class="text-danger">
                            {{ $errors->first('ringkasM')}}
                        </div>
                    @endif
                </div>

                <div class="form-group">
                    <label>Tanggal Diterima</label>
                    <input type="date" name="tanggalDiterima" class="form-control" value="{{ $books -> tanggalDiterima }}" disabled>
                    @if($errors->has('tanggalDiterima'))
                        <div class="text-danger">
                            {{ $errors->first('tanggalDiterima')}}
                        </div>
                    @endif
                </div>

                <div class="form-group">
                    <div class="row">
                        <div class="col-xl-5 col-lg-12 col-md-12">
                            <label>Disposisi</label><br>
                            <div class="border border-dark ml-3 p-2">
                                <input type="checkbox" id="disposisi" name="disposisi[]" value="KABAG UMUM"/> KABAG UMUM <br>
                                <input type="checkbox" id="disposisi" name="disposisi[]" value="Koordinator Fungsi STAT. SOSIAL"/> Koordinator Fungsi STAT. SOSIAL <br>
                                <input type="checkbox" id="disposisi" name="disposisi[]" value="Koordinator Fungsi STAT. PRODUKSI"/> Koordinator Fungsi STAT. PRODUKSI <br>
                                <input type="checkbox" id="disposisi" name="disposisi[]" value="Koordinator Fungsi DTAT. DISTRIBUSI"/> Koordinator Fungsi DTAT. DISTRIBUSI <br>
                                <input type="checkbox" id="disposisi" name="disposisi[]" value="Koordinator Fungsi CAWILIS"/> Koordinator Fungsi CAWILIS <br>
                                <input type="checkbox" id="disposisi" name="disposisi[]" value="Koordinator Fungsi IPDS"/> Koordinator Fungsi IPDS <br>
                                <input type="checkbox" id="disposisi" name="disposisi[]" value="KORPRI"/> KORPRI <br>
                            </div>
                            @if($errors->has('disposisi'))
                                <div class="text-danger">
                                    {{ $errors->first('disposisi')}}
                                </div>
                            @endif
                        </div>
                        <div class="col-xl-5 col-lg-12 col-md-12">
                            <label>Keterangan Disposisi</label><br>
                            <div class="border border-dark ml-3 p-2">
                                <input type="checkbox" id="ketDisposisi" name="ketDisposisi[]" value="hp"/> Harap diproses <br>
                                <input type="checkbox" id="ketDisposisi" name="ketDisposisi[]" value="pms"/> Penuhi maksud surat <br>
                                <input type="checkbox" id="ketDisposisi" name="ketDisposisi[]" value="hj"/> Harap dijawab <br>
                                <input type="checkbox" id="ketDisposisi" name="ketDisposisi[]" value="pk"/> Periksa kebenarannya <br>
                                <input type="checkbox" id="ketDisposisi" name="ketDisposisi[]" value="tpy"/> Teruskan pada ybs. <br>
                                <input type="checkbox" id="ketDisposisi" name="ketDisposisi[]" value="um"/> Untuk dimaklumi <br>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="form-group">
                    <label>Catatan</label>
                    <textarea type="textarea" name="noteDisposisi" class="form-control">{{ $books -> noteDisposisi }}</textarea>
                </div>

                <div class="form-group">
                    <label>Disposisi KABAG/Koordinator Fungsi</label>
                    <textarea type="textarea" name="catDisposisi" class="form-control">{{ $books -> catDisposisi }}</textarea>
                </div>

                <div class="form-group">
                    <label>Disposisi KASUBAG/Koordinator Fungsi</label>
                    <textarea type="textarea" name="catDisposisi2" class="form-control">{{ $books -> catDisposisi2 }}</textarea>
                </div>

                <div class="d-flex flex-row-reverse mt-3">
                    <button type="submit" class="btn btn-primary col-xl-2">Simpan</button>
                </div>
            </form>
        </div>
    </div>
</body>
</html>
