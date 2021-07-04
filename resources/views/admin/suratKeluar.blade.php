@extends('layout.admin')

@section('content')
<!-- Page Heading -->
<div class="d-sm-flex align-items-center justify-content-between mb-4">
    <h1 class="h3 mb-0 text-gray-800">Surat Keluar</h1>
</div>

<div class="card o-hidden border-0 shadow-lg mb-4">
    <form class="form user m-5" method="POST" action="">
        {{ csrf_field() }}
        <div class="alert alert-success" role="alert">
            Data telah tersimpan
        </div>

        <div class="form-group">
            <label>Nomor Terturut</label>
            <input type="text" name="noTk" class="form-control">
            @if($errors->has('noTk'))
                <div class="text-danger">
                    {{ $errors->first('noTk')}}
                </div>
            @endif
        </div>

        <div class="form-group">
            <label>Isi Ringkas</label>
            <textarea type="textarea" name="ringkasK" class="form-control"></textarea>
            @if($errors->has('ringkasK'))
                <div class="text-danger">
                    {{ $errors->first('ringkasK')}}
                </div>
            @endif
        </div>

        <div class="form-group">
            <label>Alamat</label>
            <input type="text" name="alamatK" class="form-control">
            @if($errors->has('alamatK'))
                <div class="text-danger">
                    {{ $errors->first('alamatK')}}
                </div>
            @endif
        </div>

        <div class="form-group">
            <label>Tanggal</label>
            <input type="date" name="tanggalK" class="form-control">
            @if($errors->has('tanggalK'))
                <div class="text-danger">
                    {{ $errors->first('tanggalK')}}
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
