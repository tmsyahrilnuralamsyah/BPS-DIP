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
    <div class="container">
        <div class="card o-hidden border-0 shadow-lg my-4">
            <form class="form user m-5" method="POST" action="">
                {{ csrf_field() }}
                <div class="alert alert-success" role="alert">
                    Data telah tersimpan
                </div>

                <div class="form-group">
                    <label>Nomor Terturut</label>
                    <input type="text" name="noT" class="form-control" disabled>
                    @if($errors->has('noT'))
                        <div class="text-danger">
                            {{ $errors->first('noT')}}
                        </div>
                    @endif
                </div>

                <div class="form-group">
                    <label>Pengirim</label>
                    <input type="text" name="pengirim" class="form-control" disabled>
                    @if($errors->has('pengirim'))
                        <div class="text-danger">
                            {{ $errors->first('pengirim')}}
                        </div>
                    @endif
                </div>

                <div class="form-group">
                    <label>Nomor</label>
                    <input type="text" name="no" class="form-control" disabled>
                    @if($errors->has('no'))
                        <div class="text-danger">
                            {{ $errors->first('no')}}
                        </div>
                    @endif
                </div>

                <div class="form-group">
                    <label>Tanggal</label>
                    <input type="date" name="tanggal" class="form-control" disabled>
                    @if($errors->has('tanggal'))
                        <div class="text-danger">
                            {{ $errors->first('tanggal')}}
                        </div>
                    @endif
                </div>

                <div class="form-group">
                    <label>Isi Ringkas</label>
                    <textarea type="textarea" name="ringkas" class="form-control" disabled></textarea>
                    @if($errors->has('ringkas'))
                        <div class="text-danger">
                            {{ $errors->first('ringkas')}}
                        </div>
                    @endif
                </div>

                <div class="form-group">
                    <label>Tanggal Diterima</label>
                    <input type="date" name="tanggalDiterima" class="form-control" disabled>
                    @if($errors->has('tanggalDiterima'))
                        <div class="text-danger">
                            {{ $errors->first('tanggalDiterima')}}
                        </div>
                    @endif
                </div>

                <div class="form-group">
                    <div class="row">
                        <div class="col-xl-4 col-lg-12 col-md-12">
                            <label>Disposisi</label><br>
                            <div class="ml-3">
                                <input type="checkbox" id="disposisi" name="disposisi" value="kabagUmum"/> KABAG UMUM <br>
                                <input type="checkbox" id="disposisi" name="disposisi" value="koorSosial"/> Koordinator Fungsi STAT. SOSIAL <br>
                                <input type="checkbox" id="disposisi" name="disposisi" value="koorProduksi"/> Koordinator Fungsi STAT. PRODUKSI <br>
                                <input type="checkbox" id="disposisi" name="disposisi" value="koorDistribusi"/> Koordinator Fungsi DTAT. DISTRIBUSI <br>
                                <input type="checkbox" id="disposisi" name="disposisi" value="koorCawilis"/> Koordinator Fungsi CAWILIS <br>
                                <input type="checkbox" id="disposisi" name="disposisi" value="koorIpds"/> Koordinator Fungsi IPDS <br>
                                <input type="checkbox" id="disposisi" name="disposisi" value="korpri"/> KORPRI <br>
                            </div>
                            @if($errors->has('disposisi'))
                                <div class="text-danger">
                                    {{ $errors->first('disposisi')}}
                                </div>
                            @endif
                        </div>
                        <div class="col-xl-3 col-lg-12 col-md-12">
                            <label>Keterangan Disposisi</label><br>
                            <div class="ml-3">
                                <input type="checkbox" id="ketDisposisi" name="ketDisposisi" value="hp"/> Harap diproses <br>
                                <input type="checkbox" id="ketDisposisi" name="ketDisposisi" value="pms"/> Penuhi maksud surat <br>
                                <input type="checkbox" id="ketDisposisi" name="ketDisposisi" value="hj"/> Harap dijawab <br>
                                <input type="checkbox" id="ketDisposisi" name="ketDisposisi" value="pk"/> Periksa kebenarannya <br>
                                <input type="checkbox" id="ketDisposisi" name="ketDisposisi" value="tpy"/> Teruskan pada ybs. <br>
                                <input type="checkbox" id="ketDisposisi" name="ketDisposisi" value="um"/> Untuk dimaklumi <br>
                            </div>
                            @if($errors->has('ketDisposisi'))
                                <div class="text-danger">
                                    {{ $errors->first('disposisi')}}
                                </div>
                            @endif
                        </div>
                    </div>
                </div>

                <div class="form-group">
                    <label>Disposisi KABAG/Koordinator Fungsi</label>
                    <textarea type="textarea" name="catDisposisi" class="form-control"></textarea>
                    @if($errors->has('catDisposisi'))
                        <div class="text-danger">
                            {{ $errors->first('catDisposisi')}}
                        </div>
                    @endif
                </div>

                <div class="form-group">
                    <label>Disposisi KASUBAG/Koordinator Fungsi</label>
                    <textarea type="textarea" name="catDisposisi2" class="form-control" disabled></textarea>
                    @if($errors->has('catDisposisi2'))
                        <div class="text-danger">
                            {{ $errors->first('catDisposisi2')}}
                        </div>
                    @endif
                </div>

                <div class="d-flex flex-row-reverse mt-3">
                    <button type="submit" class="btn btn-primary col-xl-2">Simpan</button>
                </div>
            </form>
        </div>
    </div>
</body>
</html>
