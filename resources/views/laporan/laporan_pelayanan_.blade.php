@extends('kerangka.master')

@section('title', 'Laporan Pelayanan')

@section('content')

<div class="bgn">
    <h1 class="title">Selamat Datang, {{$fullname}}!</h1>
    <p class="greet">Selamat Datang di Sistem Informasi Pajak Bumi Bangunan</p>
</div>

<div class="data">
    <div class="box-container">
        <div class="detail">
            <div class="recentOrders">
                <div class="cardHeader">
                    <h3>Laporan Pelayanan</h3>
                    <!-- <div aria-label="breadcrumb">
							<ol class="breadcrumb">
								<li class="breadcrumb-item"><a href="#">Beranda</a></li>
								<li class="breadcrumb-item"><a href="#">Pelayanan</a></li>
								<li class="breadcrumb-item active" aria-current="page">Laporan Pelayanan</li>
							</ol>
							</div> -->
                    <div class=" p-0 d-flex align-items-start" style="--bs-breadcrumb-divider: '>';" aria-label="breadcrumb">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="#">Beranda</a></li>
                            <li class="breadcrumb-item"><a href=" {{ route('pelayanan.index') }}">Pelayanan</a></li>
                            <li class="breadcrumb-item active" aria-current="page">Laporan Pelayanan</li>
                        </ol>
                    </div>
                </div>

                <div class="filterBox">
                    <form method="POST" action="{{ route('pelayananLap.cetak') }}" enctype="multipart/form-data" class="row g-4 p-3">
                        @csrf
                        <div class="col-md-6">
                            <label for="TanggalRealisasi" class="form-label">Tanggal Awal</label>
                            <input type="date" class="form-control" id="TanggalRealisasi" name="TGL_REALISASI" value="{{ date('Y').'-12-31' }}">
                        </div>
                        <div class="col-md-6">
                            <label for="TanggalRealisasi" class="form-label">Tanggal Akhir</label>
                            <input type="date" class="form-control" id="TanggalRealisasi" name="TGL_REALISASI" value="{{ date('Y').'-12-31' }}">
                        </div>
                        <div class="col-md-12">
                            <label for="select2Multiple">Jenis Pelayanan</label>
                            <select class="select2-multiple form-control" name="jns_pelayanan[]" multiple="multiple" id="select2Multiple">
                                <option>PENDAFTARAN DATA BARU</option>
                                <option>MUTASI OBJEK/SUBJEK</option>
                                <option>PEMBETULAN SPPT/SKP/STP</option>
                                <option>PEMBATALAN SPPT/SKP</option>
                                <option>SALINAN SPPT/SKP</option>
                                <option>KEBERATAN PENUNJUKAN WAJIB PAJAK</option>
                                <option>PENGURANGAN ATAS BESARNYA PAJAK TERHUBUNG</option>
                                <option>RESTITUSI DAN KOMPENSASI</option>
                                <option>PENGURANGAN DENDA ADMINISTRASI</option>
                                <option>PENENTUAN KEMBALI TANGGAL JATUH TEMPO</option>
                                <option>VERIFIKASI NOP BPHTB</option>
                                <option>PEMBERIAN INFORMASI PBB</option>
                                <option>PEMBETULAN SK KEBERATAN</option>
                                <option>MUTASI PEMECAHAN</option>
                            </select>

                            <div class="invalid-feedback">
                                Isi kolom ini terlebih dahulu!
                            </div>
                        </div>



                        <div class="col-md-12">
                            <label for="StatusPelayanan" class="form-label">Status Pelayanan</label>
                            <select class="form-select" id="StatusPelayanan" name="StatusPelayanan" required>
                                <option selected disabled value="">Choose...</option>
                                <option>Berkas Masuk</option>
                                <option>BAP/LHP Kasubid & Kabid</option>
                                <option>Pemetaan</option>
                                <option>Permohonan Ditolak</option>
                                <option>Update spop</option>
                                <option>Pengesahan SPOP</option>
                                <option>Berkas Selesai</option>
                                <option>Diterima WP</option>
                            </select>
                            <div class="invalid-feedback">
                                Isi kolom ini terlebih dahulu!
                            </div>
                        </div>

                        <div class="col-md-12 text-center">
                            <button type="submit" class="btn btn-primary" style="width:150px;">Lihat Laporan Pelayanan</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>


    <script src="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/js/select2.min.js"></script>

    <script>
        $(document).ready(function() {
            // Select2 Multiple
            $('.select2-multiple').select2({
                placeholder: "Select",
                allowClear: true
            });

        });
    </script>

    @endsection