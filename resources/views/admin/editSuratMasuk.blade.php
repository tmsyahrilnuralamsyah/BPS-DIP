@extends('layout.admin')

@section('content')
<!-- Page Heading -->
<div class="d-sm-flex align-items-center justify-content-between mb-4">
    <h1 class="h3 mb-0 text-gray-800">Edit Surat Masuk</h1>
</div>

<div class="card o-hidden border-0 shadow-lg mb-4">
    <form class="form user m-5" method="POST" action="">
        {{ csrf_field() }}
        <div class="alert alert-success" role="alert">
            Data telah tersimpan
        </div>

        <div class="form-group">
            <label>Nomor Terturut</label>
            <input type="text" name="noTm" class="form-control">
            @if($errors->has('noTm'))
                <div class="text-danger">
                    {{ $errors->first('noTm')}}
                </div>
            @endif
        </div>

        <div class="form-group">
            <label>Pengirim</label>
            <input type="text" name="pengirim" class="form-control">
            @if($errors->has('pengirim'))
                <div class="text-danger">
                    {{ $errors->first('pengirim')}}
                </div>
            @endif
        </div>

        <div class="form-group">
            <label>Nomor</label>
            <input type="text" name="noSm" class="form-control">
            @if($errors->has('noSm'))
                <div class="text-danger">
                    {{ $errors->first('noSm')}}
                </div>
            @endif
        </div>

        <div class="form-group">
            <label>Tanggal</label>
            <input type="date" name="tanggalSm" class="form-control">
            @if($errors->has('tanggalSm'))
                <div class="text-danger">
                    {{ $errors->first('tanggalSm')}}
                </div>
            @endif
        </div>

        <div class="form-group">
            <label>Isi Ringkas</label>
            <textarea type="textarea" name="ringkasM" class="form-control"></textarea>
            @if($errors->has('ringkasM'))
                <div class="text-danger">
                    {{ $errors->first('ringkasM')}}
                </div>
            @endif
        </div>

        <div class="form-group">
            <label>Tanggal Diterima</label>
            <input type="date" name="tanggalDiterima" class="form-control">
            @if($errors->has('tanggalDiterima'))
                <div class="text-danger">
                    {{ $errors->first('tanggalDiterima')}}
                </div>
            @endif
        </div>

        <div class="form-group">
            <div class="row">
                <div class="col-4">
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
                <div class="col-3">
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
                            {{ $errors->first('ketDisposisi')}}
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
            <textarea type="textarea" name="catDisposisi2" class="form-control"></textarea>
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
@endsection
