@extends('layout.admin')

@section('content')
<!-- Page Heading -->
<div class="d-sm-flex align-items-center justify-content-between mb-4">
    <h1 class="h3 mb-0 text-gray-800">Surat Masuk</h1>
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

        <div class="d-flex flex-row-reverse mt-3">
            <button type="submit" class="btn btn-primary col-xl-2">Simpan</button>
        </div>
    </form>
</div>
@endsection
