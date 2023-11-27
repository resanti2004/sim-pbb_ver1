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
                                    <li class="breadcrumb-item"><a href="#">Pelayanan</a></li>
                                    <li class="breadcrumb-item active" aria-current="page">Laporan Pelayanan</li>
                                </ol>
                            </div>
						</div>
						
                        <div class="filterBox">
                            <form method="POST" action="{{ route('provinsi.store') }}" enctype="multipart/form-data" class="row g-4 p-3">
                                @csrf
                                <div class="col-md-6">
                                    <label for="TahunAwal" class="form-label">Tahun Awal</label>
                                    <div class="input-group">
                                        <input type="text" class="datepicker_input form-control" placeholder="DD/MM/YYYY" required aria-label="Date input 3 (using aria-label)">
                                        <span class="input-group-text">
                                            <i class='bx bxs-calendar'></i>
                                        </span>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <label for="TahunAkhir" class="form-label">Tahun Akhir</label>
                                    <div class="input-group">
                                        <input type="text" class="datepicker_input form-control" placeholder="DD/MM/YYYY" required aria-label="Date input 3 (using aria-label)">
                                        <span class="input-group-text">
                                            <i class='bx bxs-calendar'></i>
                                        </span>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <label for="TahunAkhir" class="form-label">Tahun Akhir</label>
                                    <input type="text" class="form-control" id="TahunAkhir" name="TahunAkhir">
                                </div>
                                <div class="col-md-12">
                                    <label for="JenisPelayanan" class="form-label">Jenis Pelayanan</label>
                                    <select class="form-select" id="JenisPelayanan" name="JenisPelayanan" required>
                                        <option selected disabled value="">Choose...</option>
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
                                    <button type="submit" class="btn btn-primary" style="width:150px;">Export Excel</button>
                                </div>
                            </form>
                        </div>
					</div>
				</div>
			</div>
@endsection