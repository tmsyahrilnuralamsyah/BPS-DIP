@extends('layout.admin')

@section('content')
<!-- Page Heading -->
<div class="d-sm-flex align-items-center justify-content-between mb-4">
    <h1 class="h3 mb-0 text-gray-800">Daftar Surat Masuk</h1>
</div>

<!-- DataTales -->
<div class="card shadow mb-4">
    <div class="card-header py-2">
        <!-- Topbar Search -->
        <form class="d-none d-sm-inline-block form-inline mr-auto ml-md-3 my-2 my-md-0 mw-100 navbar-search">
            <div class="input-group">
                <input type="text" class="form-control bg-white border-0 small" placeholder="Search..."
                    aria-label="Search" aria-describedby="basic-addon2">
                <div class="input-group-append">
                    <button class="btn btn-primary" type="button">
                        <i class="fas fa-search fa-sm"></i>
                    </button>
                </div>
            </div>
        </form>
    </div>

    <div class="card-body">
        <div class="table-responsive" style="overflow-x: scroll;">
            <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                <thead>
                    <tr class="text-center">
                        <th class="px-5">Aksi</th>
                        <th class="px-5">Nomor Terturut</th>
                        <th class="px-5">Pengirim</th>
                        <th class="px-5">Nomor</th>
                        <th class="px-4">Tanggal Surat</th>
                        <th class="px-5">Isi Ringkas</th>
                        <th class="px-4">Tanggal Diterima</th>
                        <th class="px-5">Disposisi</th>
                        <th class="px-5">Keterangan Disposisi</th>
                        <th class="px-5">Disposisi KABAG/KOOR</th>
                        <th class="px-5">Disposisi KASUBAG/KOOR</th>
                        <th class="px-4">Kode Admin</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td class="text-center">
                            <a href="/admin/editSuratMasuk" class="btn btn-warning my-1">Ubah</a>
                            <a href="#" class="btn btn-danger my-1">Hapus</a>
                        </td>
                        <td><a href="/cetak" style="color: blue" download>111111111</a></td>
                        <td>BPS Kota Langsa</td>
                        <td>1111111111</td>
                        <td>11-11-21</td>
                        <td>permintaan data</td>
                        <td>15-11-21</td>
                        <td>KABAG UMUM</td>
                        <td>alalalalalala</td>
                        <td>dajahfaka</td>
                        <td>kahfkafaka</td>
                        <td>kKAnda2</td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>
</div>
<!-- /.container-fluid -->
@endsection
