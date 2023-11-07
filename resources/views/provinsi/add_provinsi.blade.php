@extends('kerangka.master')
@section('title', 'Tambah Data Provinsi')
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
							<h3>Tambah Data Provinsi</h3>
							<div aria-label="breadcrumb">
							<ol class="breadcrumb">
								<li class="breadcrumb-item"><a href="#">Beranda</a></li>
								<li class="breadcrumb-item"><a href="#">Daerah</a></li>
								<li class="breadcrumb-item"><a href="#">Provinsi</a></li>
								<li class="breadcrumb-item active" aria-current="page">Tambah Data Provinsi</li>
							</ol>
							</div>
						</div>
						
                        <form class="row g-4 p-5">
                            <div class="col-md-6">
                                <label for="inputKodeProvinsi" class="form-label">Kode Provinsi</label>
                                <input type="text" class="form-control" id="inputKodeProvinsi" >
                            </div>
                            <div class="col-md-6">
                                <label for="inputNamaProvinsi" class="form-label">Nama Provinsi</label>
                                <input type="text" class="form-control" id="inputNamaProvinsi">
                            </div>

                            <div class="col-md-12 text-center">
                                <button type="submit" class="btn btn-primary" style="width:150px;">Tambah</button>
                            </div>
                        </form>

					</div>
				</div>
			</div>
@endsection