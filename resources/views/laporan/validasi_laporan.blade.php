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
                                <div class="col-md-4 ">
                                    <label for="TahunAwal" class="form-label">KECAMATAN</label>
                                    <input type="number" class="form-control" id="TahunAwal" name="TahunAwal" value="{{ date('Y') }}">
                                </div>
                                <div class="col-md-4">
                                    <label for="TahunAkhir" class="form-label">KELURAHAN</label>
                                    <input type="number" class="form-control" id="TahunAkhir" name="TahunAkhir" value="{{ date('Y') }}">
                                </div>
                                <div class="col-md-4">
                                    <label for="TahunAkhir" class="form-label">BLOK</label>
                                    <input type="number" class="form-control" id="TahunAkhir" name="TahunAkhir" value="{{ date('Y') }}">
                                </div>
                                <div class="col-md-6">
                                    <label for="PerTanggalBayar" class="form-label">Tahun Minimal</label>
                                    <input type="date" class="form-control" id="PerTanggalBayar" name="PerTanggalBayar" value="{{ date('Y').'-12-31' }}" >
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
                                    <input type="date" class="form-control" id="PerTanggalBayar" name="PerTanggalBayar" value="{{ date('Y').'-12-31' }}" >
                                </div>
                                <div class="col-md-3">
                                    <label for="TahunAwal" class="form-label">Is Cetak</label>
                                    <input type="number" class="form-control" id="TahunAwal" name="TahunAwal" value="{{ date('Y') }}">
                                </div>
                                <div class="col-md-3">
                                    <label for="TahunAkhir" class="form-label">Is Validated</label>
                                    <input type="number" class="form-control" id="TahunAkhir" name="TahunAkhir" value="{{ date('Y') }}">
                                </div>
                                <div class="col-md-3">
                                    <label for="TahunAkhir" class="form-label">Kelompok</label>
                                    <input type="number" class="form-control" id="TahunAkhir" name="TahunAkhir" value="{{ date('Y') }}">
                                </div>
                                <div class="col-md-6">
                                    <label for="PerTanggalBayar" class="form-label">Kategori</label>
                                    <input type="date" class="form-control" id="PerTanggalBayar" name="PerTanggalBayar" value="{{ date('Y').'-12-31' }}" >
                                </div>
                                <div class="col-md-2">
                                    <label for="TahunAkhir" class="form-label">Cut-Off Tanggal</label>
                                    <input type="number" class="form-control" id="TahunAkhir" name="TahunAkhir" value="{{ date('Y') }}">
                                </div>
                                <div class="col-md-4">
                                    <label for="TahunAkhir" class="form-label">Jenis</label>
                                    <input type="number" class="form-control" id="TahunAkhir" name="TahunAkhir" value="{{ date('Y') }}">
                                </div>
                                <div class="col-md-4">
                                    <label for="PerTanggalBayar" class="form-label">Status Pembayaran</label>
                                    <input type="date" class="form-control" id="PerTanggalBayar" name="PerTanggalBayar" value="{{ date('Y').'-12-31' }}" >
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