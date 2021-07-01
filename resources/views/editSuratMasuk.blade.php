@extends('layout.admin')

@section('content')
<!-- Page Heading -->
<div class="d-sm-flex align-items-center justify-content-between mb-4">
    <h1 class="h3 mb-0 text-gray-800">Edit Surat Masuk</h1>
</div>

<div class="card o-hidden border-0 shadow-lg">
    <form class="form user m-5" method="POST" action="">
        {{ csrf_field() }}
        <div class="alert alert-success" role="alert">
            Data telah tersimpan
        </div>

        <div class="form-group">
            <label>Nomor Terturut</label>
            <input type="text" name="noT" class="form-control">
            @if($errors->has('noT'))
                <div class="text-danger">
                    {{ $errors->first('noT')}}
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
            <input type="text" name="no" class="form-control">
            @if($errors->has('no'))
                <div class="text-danger">
                    {{ $errors->first('no')}}
                </div>
            @endif
        </div>

        <div class="form-group">
            <label>Tanggal</label>
            <input type="date" name="tanggal" class="form-control">
            @if($errors->has('tanggal'))
                <div class="text-danger">
                    {{ $errors->first('tanggal')}}
                </div>
            @endif
        </div>

        <div class="form-group">
            <label>Isi Ringkas</label>
            <textarea type="textarea" name="ringkas" class="form-control"></textarea>
            @if($errors->has('ringkas'))
                <div class="text-danger">
                    {{ $errors->first('ringkas')}}
                </div>
            @endif
        </div>

        <div class="form-group">
            <label>Disposisi</label><br>
            <div class="ml-3">
                <input type="radio" id="disposisi" name="disposisi" value="kabagUmum"/> KABAG UMUM <br>
                <input type="radio" id="disposisi" name="disposisi" value="koorSosial"/> Koordinator Fungsi STAT. SOSIAL <br>
                <input type="radio" id="disposisi" name="disposisi" value="koorProduksi"/> Koordinator Fungsi STAT. PRODUKSI <br>
                <input type="radio" id="disposisi" name="disposisi" value="koorDistribusi"/> Koordinator Fungsi DTAT. DISTRIBUSI <br>
                <input type="radio" id="disposisi" name="disposisi" value="koorCawilis"/> Koordinator Fungsi CAWILIS <br>
                <input type="radio" id="disposisi" name="disposisi" value="koorIpds"/> Koordinator Fungsi IPDS <br>
                <input type="radio" id="disposisi" name="disposisi" value="korpri"/> KORPRI <br>
            </div>
            @if($errors->has('disposisi'))
                <div class="text-danger">
                    {{ $errors->first('disposisi')}}
                </div>
            @endif
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
