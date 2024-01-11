@extends('kerangka.master')

@section('title', 'Laporan')

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
							<h3>Laporan</h3>
                            <div class=" p-0 d-flex align-items-start" style="--bs-breadcrumb-divider: '>';" aria-label="breadcrumb">
                                <ol class="breadcrumb">
                                    <li class="breadcrumb-item"><a href="#">Beranda</a></li>
                                    <li class="breadcrumb-item"><a href="#">Laporan</a></li>
                                    <li class="breadcrumb-item"><a href="#">Validasi</a></li>
                                    <li class="breadcrumb-item active" aria-current="page">Laporan</li>
                                </ol>
                            </div>
						</div>
						
                            <form method="POST" action="{{ route('provinsi.store') }}" enctype="multipart/form-data" class="row g-4 p-5">
                                @csrf
                                <div class="col-md-4">
                                    <label for="kd_statusWp" class="form-label">KECAMATAN</label>
                                    <!-- <input type="text" class="form-control" id="kd_statusWp" name="kd_statusWp" required> -->
                                    <select class="form-select" id="kd_statusWp" name="KD_STATUS_WP" required>
                                        <!-- <option selected disabled value="">Choose...</option> -->
                                        <option value="1">WAKANDA SELATAN</option>
                                        <option value="2">WAKANDA TIMUR</option>
                                    </select>
                                    <div class="invalid-feedback">
                                        Isi kolom ini terlebih dahulu!
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <label for="kd_statusWp" class="form-label">KELURAHAN</label>
                                    <!-- <input type="text" class="form-control" id="kd_statusWp" name="kd_statusWp" required> -->
                                    <select class="form-select" id="kd_statusWp" name="KD_STATUS_WP" required  disabled>
                                        <option selected disabled value=""> </option>
                                        <option value="1">PEMILIK</option>
                                        <option value="2">PENYEWA</option>
                                        <option value="3">PENGELOLA</option>
                                        <option value="4">PEMAKAI</option>
                                        <option value="5">SENGKETA</option>
                                    </select>
                                    <div class="invalid-feedback">
                                        Isi kolom ini terlebih dahulu!
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <label for="kd_statusWp" class="form-label">BLOK</label>
                                    <!-- <input type="text" class="form-control" id="kd_statusWp" name="kd_statusWp" required> -->
                                    <select class="form-select" id="kd_statusWp" name="KD_STATUS_WP" required  disabled>
                                        <option selected disabled value=""> </option>
                                        <option value="1">PEMILIK</option>
                                        <option value="2">PENYEWA</option>
                                        <option value="3">PENGELOLA</option>
                                        <option value="4">PEMAKAI</option>
                                        <option value="5">SENGKETA</option>
                                    </select>
                                    <div class="invalid-feedback">
                                        Isi kolom ini terlebih dahulu!
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <label for="PerTanggalBayar" class="form-label">Tahun Minimal</label>
                                    <input type="number" class="form-control" id="PerTanggalBayar" name="PerTanggalBayar" value="{{ date('Y')-10 }}" >
                                </div>
                                <div class="col-md-6 ">
                                    <label for="TahunAwal" class="form-label">Tahun Maksimal</label>
                                    <input type="number" class="form-control" id="TahunAwal" name="TahunAwal" value="{{ date('Y') }}">
                                </div>
                                <div class="col-md-6">
                                    <label for="TahunAkhir" class="form-label">PBB Minimal</label>
                                    <input type="number" class="form-control" id="TahunAkhir" name="TahunAkhir" value="0">
                                </div>
                                <div class="col-md-6">
                                    <label for="TahunAkhir" class="form-label">PBB Maksimal</label>
                                    <input type="number" class="form-control" id="TahunAkhir" name="TahunAkhir" value="1000000000">
                                </div>
                                <div class="col-md-3">
                                    <label for="PerTanggalBayar" class="form-label">Validasi Ke</label>
                                    <input type="text" class="form-control" id="PerTanggalBayar" name="PerTanggalBayar" placeholder="Semua" >
                                </div>
                                <div class="col-md-3">
                                    <label for="TahunAwal" class="form-label">Is Cetak</label>
                                    <!-- <input type="number" class="form-control" id="TahunAwal" name="TahunAwal" value="{{ date('Y') }}"> -->
                                    <select class="form-select" id="kd_statusWp" name="KD_STATUS_WP" required>
                                        <option value="1">Semua</option>
                                        <option value="2">Belum</option>
                                        <option value="3">Sudah</option>
                                    </select>
                                    <div class="invalid-feedback">
                                        Isi kolom ini terlebih dahulu!
                                    </div>
                                </div>
                                <div class="col-md-3">
                                    <label for="TahunAkhir" class="form-label">Is Validated</label>
                                    <!-- <input type="number" class="form-control" id="TahunAkhir" name="TahunAkhir" value="{{ date('Y') }}"> -->
                                    <select class="form-select" id="kd_statusWp" name="KD_STATUS_WP" required>
                                        <option value="1">Semua</option>
                                        <option value="2">Belum</option>
                                        <option value="3">Sudah</option>
                                    </select>
                                    <div class="invalid-feedback">
                                        Isi kolom ini terlebih dahulu!
                                    </div>
                                </div>
                                <div class="col-md-3">
                                    <label for="TahunAkhir" class="form-label">Kelompok</label>
                                    <input type="text" class="form-control" id="PerTanggalBayar" name="PerTanggalBayar" placeholder="Semua" >
                                </div>
                                <div class="col-md-6">
                                    <label for="PerTanggalBayar" class="form-label">Kategori</label>
                                    <!-- <input type="date" class="form-control" id="PerTanggalBayar" name="PerTanggalBayar" value="{{ date('Y').'-12-31' }}" > -->
                                    <select class="form-select" id="kd_statusWp" name="KD_STATUS_WP" required>
                                        <option value="1">Semua</option>
                                        <option value="2">Objek Pajak tidak dapat ditemukan lokasinya di lapangan</option>
                                        <option value="3">Objek Pajak memiliki dua atau lebih NOP untuk lokasi yang sama</option>
                                        <option value="3">Objek Pajak yang subjek pajaknya tidak dapat teridentifikasi dengan jelas atau objek pajak sudah terjual</option>
                                        <option value="3">Objek Pajak dan subjek pajaknya teridentifikasi dengan jelas</option>
                                        <option value="3">Objek Pajak dan subjek pajaknya teridentifikasi tetapi data tidak sesuai</option>
                                        <option value="3">(tanpa kategori)</option>
                                    </select>
                                    <div class="invalid-feedback">
                                        Isi kolom ini terlebih dahulu!
                                    </div>
                                </div>
                                <div class="col-md-2">
                                    <label for="TahunAkhir" class="form-label">Cut-Off Tanggal</label>
                                    <input type="date" class="form-control" id="PerTanggalBayar" name="PerTanggalBayar" value="{{ date('Y').'-12-31' }}" >
                                </div>
                                <div class="col-md-4">
                                    <label for="kd_kec" class="form-label">Jenis</label>
                                    <!-- <input type="text" class="form-control" id="kd_jenisTransaksi" name="kd_jenisTransaksi" required> -->
                                    <select class="form-select" id="kd_kec" name="KD_KECAMATAN" required>
                                        <option selected disabled value="">Pilih Jenis</option>
                                        <option value="1">PIUTANG KPP</option>
                                        <option value="2">PIUTANG KPP 2013/2015 TIDAK TERCETAK</option>
                                    </select>
                                </div>
                                <div class="col-md-4">
                                    <label for="PerTanggalBayar" class="form-label">Status Pembayaran</label>
                                    <!-- <input type="date" class="form-control" id="PerTanggalBayar" name="PerTanggalBayar" value="{{ date('Y').'-12-31' }}" > -->
                                    <select class="form-select" id="kd_statusWp" name="KD_STATUS_WP" required>
                                        <option value="1">SEMUA</option>
                                        <option value="2">LUNAS</option>
                                        <option value="3">BELUM LUNAS</option>
                                    </select>
                                    <div class="invalid-feedback">
                                        Isi kolom ini terlebih dahulu!
                                    </div>
                                </div>

                                <div class="tombolAksi row p-3">
                                    <div class="col-md-6 d-flex justify-content-end ms-auto">
                                        <button type="submit" class="btn btn-primary" style="width:300px;">Expor Excel Per NOP Per Tahun</button>
                                    </div>
                                    <div class="col-md-6 d-flex justify-content-start me-auto">
                                        <button type="submit" class="btn btn-primary" style="width:200px;">Expor Excel Per NOP</button>
                                    </div>
                                </div>
                            </form>
					</div>
				</div>
			</div>
@endsection