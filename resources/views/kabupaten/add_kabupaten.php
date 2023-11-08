@extends('kerangka.master')

@section('title', 'Tambah Data Kabupaten')

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
							<h3>Tambah Data Dati 2</h3>
							<div aria-label="breadcrumb">
							<ol class="breadcrumb">
								<li class="breadcrumb-item"><a href="#">Beranda</a></li>
								<li class="breadcrumb-item"><a href="#">Daerah</a></li>
								<li class="breadcrumb-item"><a href="#">Kabupaten</a></li>
								<li class="breadcrumb-item active" aria-current="page">Tambah Data Dati 2</li>
							</ol>
							</div>
						</div>
						
                        <form method="POST" action="{{ route('kabupaten.store') }}" enctype="multipart/form-data" class="row g-4 p-5">
							@csrf
                            <div class="col-md-6">
                                <label for="inputKodeProvinsi" class="form-label">Kode Provinsi</label>
                                <input type="text" class="form-control" id="inputKodeProvinsi" name="inputKodeProvinsi">
                            </div>
                            <div class="col-md-6">
                                <label for="inputKodeDati2" class="form-label">Kode Dati 2</label>
                                <input type="text" class="form-control" id="inputKodeDati2" name="inputKodeDati2">
                            </div>
                            <div class="col-md-6">
                                <label for="inputNamaDati2" class="form-label">Nama Dati 2</label>
                                <input type="text" class="form-control" id="inputNamaDati2" name="inputNamaDati2"> 
                            </div>

                            <div class="col-md-12 text-center">
                                <button type="submit" class="btn btn-primary" style="width:150px;">Tambah</button>
                            </div>
                        </form>

					</div>
				</div>
			</div>
@endsection