@extends('layout.admin')

@section('content')
<!-- Page Heading -->
<div class="d-sm-flex align-items-center justify-content-between mb-4">
    <h1 class="h3 mb-0 text-gray-800">Edit Surat Keluar</h1>
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
            <label>Isi Ringkas</label>
            <textarea type="textarea" name="ringkas" class="form-control"></textarea>
            @if($errors->has('ringkas'))
                <div class="text-danger">
                    {{ $errors->first('ringkas')}}
                </div>
            @endif
        </div>

        <div class="form-group">
            <label>Alamat</label>
            <input type="text" name="alamat" class="form-control">
            @if($errors->has('alamat'))
                <div class="text-danger">
                    {{ $errors->first('alamat')}}
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
            <label>Keterangan</label>
            <textarea type="textarea" name="ketKeluar" class="form-control"></textarea>
            @if($errors->has('ketKeluar'))
                <div class="text-danger">
                    {{ $errors->first('ketKeluar')}}
                </div>
            @endif
        </div>

        <div class="d-flex flex-row-reverse mt-3">
            <button type="submit" class="btn btn-primary col-xl-2">Simpan</button>
        </div>
    </form>
</div>
@endsection
