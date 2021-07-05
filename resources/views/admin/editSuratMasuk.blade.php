@extends('layout.admin')

@section('content')
<!-- Page Heading -->
<div class="d-sm-flex align-items-center justify-content-between mb-4">
    <h1 class="h3 mb-0 text-gray-800">Edit Surat Masuk</h1>
</div>

<div class="card o-hidden border-0 shadow-lg mb-4">
    <form class="form user m-5" method="post" action="/admin/editSuratMasuk/{{ $books->id }}">
        {{ csrf_field() }}
        {{ method_field('PUT') }}
        <div class="alert alert-success" role="alert">
            Data telah tersimpan
        </div>

        <div class="form-group">
            <label>Nomor Terturut</label>
            <input type="text" name="noTm" class="form-control" value="{{ $books -> noTm }}">
            @if($errors->has('noTm'))
                <div class="text-danger">
                    {{ $errors->first('noTm')}}
                </div>
            @endif
        </div>

        <div class="form-group">
            <label>Pengirim</label>
            <input type="text" name="pengirim" class="form-control" value="{{ $books -> pengirim }}">
            @if($errors->has('pengirim'))
                <div class="text-danger">
                    {{ $errors->first('pengirim')}}
                </div>
            @endif
        </div>

        <div class="form-group">
            <label>Nomor</label>
            <input type="text" name="noSm" class="form-control" value="{{ $books -> noSm }}">
            @if($errors->has('noSm'))
                <div class="text-danger">
                    {{ $errors->first('noSm')}}
                </div>
            @endif
        </div>

        <div class="form-group">
            <label>Tanggal</label>
            <input type="date" name="tanggalSm" class="form-control" value="{{ $books -> tanggalSm }}">
            @if($errors->has('tanggalSm'))
                <div class="text-danger">
                    {{ $errors->first('tanggalSm')}}
                </div>
            @endif
        </div>

        <div class="form-group">
            <label>Isi Ringkas</label>
            <textarea type="textarea" name="ringkasM" class="form-control" value="{{ $books -> ringkasM }}"></textarea>
            @if($errors->has('ringkasM'))
                <div class="text-danger">
                    {{ $errors->first('ringkasM')}}
                </div>
            @endif
        </div>

        <div class="form-group">
            <label>Tanggal Diterima</label>
            <input type="date" name="tanggalDiterima" class="form-control" value="{{ $books -> tanggalDiterima }}">
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
                <div class="col-xl-5 col-lg-12 col-md-12">
                    <label>Keterangan Disposisi</label><br>
                    <div class="border border-dark ml-3 p-2">
                        <input type="checkbox" id="ketDisposisi" name="ketDisposisi" value="hp"/> Harap diproses <br>
                        <input type="checkbox" id="ketDisposisi" name="ketDisposisi" value="pms"/> Penuhi maksud surat <br>
                        <input type="checkbox" id="ketDisposisi" name="ketDisposisi" value="hj"/> Harap dijawab <br>
                        <input type="checkbox" id="ketDisposisi" name="ketDisposisi" value="pk"/> Periksa kebenarannya <br>
                        <input type="checkbox" id="ketDisposisi" name="ketDisposisi" value="tpy"/> Teruskan pada ybs. <br>
                        <input type="checkbox" id="ketDisposisi" name="ketDisposisi" value="um"/> Untuk dimaklumi <br>
                    </div>
                </div>
            </div>
        </div>

        <div class="form-group">
            <label>Disposisi KABAG/Koordinator Fungsi</label>
            <textarea type="textarea" name="catDisposisi" class="form-control" value="{{ $books -> catDisposisi }}"></textarea>
        </div>

        <div class="form-group">
            <label>Disposisi KASUBAG/Koordinator Fungsi</label>
            <textarea type="textarea" name="catDisposisi2" class="form-control" value="{{ $books -> catDisposisi2 }}"></textarea>
        </div>

        <div class="form-group">
            <label>Kode Admin</label>
            <input type="text" name="kode" class="form-control" value="{{ $books -> kode }}">
            @if($errors->has('kode'))
                <div class="text-danger">
                    {{ $errors->first('kode')}}
                </div>
            @endif
        </div>

        <div class="d-flex flex-row-reverse mt-3">
            <button type="submit" class="btn btn-primary col-xl-2">Simpan</button>
        </div>
    </form>
</div>
@endsection
