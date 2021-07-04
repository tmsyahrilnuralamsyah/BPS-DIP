@extends('layout.admin')

@section('content')
<!-- Page Heading -->
<div class="d-sm-flex align-items-center justify-content-between mb-4">
    <h1 class="h3 mb-0 text-gray-800">Daftar Surat Keluar</h1>
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
        <div class="table-responsive">
            <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                <thead>
                    <tr class="text-center">
                        <th>Ubah/Hapus</th>
                        <th>Nomor Terturut</th>
                        <th>Isi Ringkas</th>
                        <th>Alamat</th>
                        <th>Tanggal</th>
                        <th>Keterangan</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td class="text-center">
                            <a href="/admin/editSuratKeluar" class="btn btn-warning my-1">Ubah</a>
                            <a href="#" class="btn btn-danger my-1">Hapus</a>
                        </td>
                        <td>111111111</td>
                        <td>permintaan data</td>
                        <td>BPS Kota Langsa</td>
                        <td>11-11-21</td>
                        <td>Arsip Keuangan</td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>
</div>
<!-- /.container-fluid -->
@endsection
