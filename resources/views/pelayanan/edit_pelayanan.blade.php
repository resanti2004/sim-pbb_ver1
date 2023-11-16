@extends('kerangka.master')
@section('title', 'Edit Data Pelayanan')
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
							<h3>Edit Data Pelayanan</h3>
							<div aria-label="breadcrumb">
							<ol class="breadcrumb">
								<li class="breadcrumb-item"><a href="#">Beranda</a></li>
								<li class="breadcrumb-item"><a href="#">Pelayanan</a></li>
								<li class="breadcrumb-item active" aria-current="page">Edit Data Pelayanan</li>
							</ol>
							</div>
						</div>
						
                        <form class="row g-4 p-5">
                            <div class="col-md-6">
                                <label for="inputNamaKecamatan" class="form-label">ID</label>
                                <input type="text" class="form-control" style=" background-color: var(--light);" id="inputNamaKecamatan" >
                            </div>
                            <div class="col-md-6">
                                <label for="inputDendaDibayar" class="form-label">Keterangan</label>
                                <input type="text" class="form-control" id="inputDendaDibayar">
                            </div>
                            <div class="col-md-6">
                                <label for="inputNamaKelurahan" class="form-label">Nama Pemohon</label>
                                <input type="text" class="form-control" id="inputNamaKelurahan">
                            </div>
                            <div class="col-md-6">
                                <label for="inputTotalPembayaran" class="form-label">Tanggal Masuk Penilai</label>
                                <input type="text" class="form-control" id="inputTotalPembayaran">
                            </div>
                            <div class="col-md-6">
                                <label for="inputPokok" class="form-label">Alamat Pemohon</label>
                                <input type="text" class="form-control" id="inputPokok">
                            </div>
                            <div class="col-md-6">
                                <label for="inputKurangDibayar" class="form-label">Nip Masuk Penilai</label>
                                <input type="text" class="form-control" id="inputKurangDibayar">
                            </div>
                            <div class="col-md-6">
                                <label for="inputPokokDibayar" class="form-label">No Pelayanan</label>
                                <input type="text" class="form-control" id="inputPokokDibayar">
                            </div>
                            <div class="col-md-6">
                                <label for="inputLebihDibayar" class="form-label">Tanggal Selesai</label>
                                <input type="text" class="form-control" id="inputLebihDibayar">
                            </div>
                            <div class="col-md-6">
                                <label for="inputNamaKecamatan" class="form-label">Tanggal Pelayanan</label>
                                <input type="text" class="form-control" id="inputNamaKecamatan" >
                            </div>
                            <div class="col-md-6">
                                <label for="inputDendaDibayar" class="form-label">NIP Selesai</label>
                                <input type="text" class="form-control" id="inputDendaDibayar">
                            </div>
                            <div class="col-md-6">
                                <label for="inputNamaKelurahan" class="form-label">Kode Provinsi</label>
                                <input type="text" class="form-control" id="inputNamaKelurahan">
                            </div>
                            <div class="col-md-6">
                                <label for="inputTotalPembayaran" class="form-label">Tanggal Konfirmasi Wp</label>
                                <input type="text" class="form-control" id="inputTotalPembayaran">
                            </div>
                            <div class="col-md-6">
                                <label for="inputPokok" class="form-label">Kode Dati</label>
                                <input type="text" class="form-control" id="inputPokok">
                            </div>
                            <div class="col-md-6">
                                <label for="inputKurangDibayar" class="form-label">NIP Terkonfirmasi Wp</label>
                                <input type="text" class="form-control" id="inputKurangDibayar">
                            </div>
                            <div class="col-md-6">
                                <label for="inputPokokDibayar" class="form-label">Kecamatan</label>
                                <input type="text" class="form-control" id="inputPokokDibayar">
                            </div>
                            <div class="col-md-6">
                                <label for="inputLebihDibayar" class="form-label">Tanda Tangan Jabatan Kiri</label>
                                <input type="text" class="form-control" id="inputLebihDibayar">
                            </div>
                            <div class="col-md-6">
                                <label for="inputNamaKecamatan" class="form-label">Kelurahan</label>
                                <input type="text" class="form-control" id="inputNamaKecamatan" >
                            </div>
                            <div class="col-md-6">
                                <label for="inputDendaDibayar" class="form-label">Tanda Tangan Nama Kiri</label>
                                <input type="text" class="form-control" id="inputDendaDibayar">
                            </div>
                            <div class="col-md-6">
                                <label for="inputNamaKelurahan" class="form-label">BLK</label>
                                <input type="text" class="form-control" id="inputNamaKelurahan">
                            </div>
                            <div class="col-md-6">
                                <label for="inputTotalPembayaran" class="form-label">Tanda Tangan NIP Kiri</label>
                                <input type="text" class="form-control" id="inputTotalPembayaran">
                            </div>
                            <div class="col-md-6">
                                <label for="inputPokok" class="form-label">URUT</label>
                                <input type="text" class="form-control" id="inputPokok">
                            </div>
                            <div class="col-md-6">
                                <label for="inputKurangDibayar" class="form-label">Tanda Tangan Jabatan Kanan</label>
                                <input type="text" class="form-control" id="inputKurangDibayar">
                            </div>
                            <div class="col-md-6">
                                <label for="inputPokokDibayar" class="form-label">No Pelayanan</label>
                                <input type="text" class="form-control" id="inputPokokDibayar">
                            </div>
                            <div class="col-md-6">
                                <label for="inputLebihDibayar" class="form-label">Tanggal Selesai</label>
                                <input type="text" class="form-control" id="inputLebihDibayar">
                            </div>

                            <div class="col-md-12 col-md-12 text-center">
                                <button type="submit" class="btn btn-primary " style="width:150px;">Edit</button>
                                <button type="submit" class="btn btn-danger " style="width:150px;">Hapus</button>
                            </div>
                        </form>

					</div>
				</div>
			</div>
@endsection