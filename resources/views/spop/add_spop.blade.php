@extends('kerangka.master')
@section('title', 'SPOP')
@section('content')

			<div class="bgn">
				<h1 class="title">Selamat Datang, Arviansyah Eka!</h1>
				<p class="greet">Selamat Datang di Sistem Informasi Pajak Bumi Bangunan</p>
			</div>

			<div class="data">
				<div class="box-container">
				<div class="detail">
					<div class="recentOrders">
						<div class="cardHeader">
							<h3>SPOP</h3>
							<div aria-label="breadcrumb">
							<ol class="breadcrumb">
								<li class="breadcrumb-item"><a href="#">Beranda</a></li>
								<li class="breadcrumb-item"><a href="#">Laporan</a></li>
								<li class="breadcrumb-item"><a href="#">SPOP</a></li>
								<li class="breadcrumb-item active" aria-current="page">Tambah Data</li>
							</ol>
							</div>
						</div>
						
                        <form class="row g-4 p-5">
                            <div class="col-md-6">
                                <label for="inputNamaKecamatan" class="form-label">Nama Kecamatan</label>
                                <input type="text" class="form-control" id="inputNamaKecamatan" >
                            </div>
                            <div class="col-md-6">
                                <label for="inputDendaDibayar" class="form-label">Denda Yang Dibayar</label>
                                <input type="text" class="form-control" id="inputDendaDibayar">
                            </div>
                            <div class="col-md-6">
                                <label for="inputNamaKelurahan" class="form-label">Nama Kelurahan</label>
                                <input type="text" class="form-control" id="inputNamaKelurahan">
                            </div>
                            <div class="col-md-6">
                                <label for="inputTotalPembayaran" class="form-label">Total Pembayaran</label>
                                <input type="text" class="form-control" id="inputTotalPembayaran">
                            </div>
                            <div class="col-md-6">
                                <label for="inputPokok" class="form-label">Pokok</label>
                                <input type="text" class="form-control" id="inputPokok">
                            </div>
                            <div class="col-md-6">
                                <label for="inputKurangDibayar" class="form-label">Kurang Dibayar</label>
                                <input type="text" class="form-control" id="inputKurangDibayar">
                            </div>
                            <div class="col-md-6">
                                <label for="inputPokokDibayar" class="form-label">Pokok yang dibayar</label>
                                <input type="text" class="form-control" id="inputPokokDibayar">
                            </div>
                            <div class="col-md-6">
                                <label for="inputLebihDibayar" class="form-label">Lebih Dibayar</label>
                                <input type="text" class="form-control" id="inputLebihDibayar">
                            </div>

                            <div class="col-md-12 text-center">
                                <button type="submit" class="btn btn-primary" style="width:150px;">Tambah</button>
                            </div>
                        </form>

					</div>
				</div>
			</div>
@endsection