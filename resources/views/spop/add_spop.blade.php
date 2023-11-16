@extends('kerangka.master')
@section('title', 'Tambah Data SPOP')
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
							<h3>Tambah Data SPOP</h3>
							<div aria-label="breadcrumb">
							<ol class="breadcrumb">
								<li class="breadcrumb-item"><a href="#">Beranda</a></li>
								<li class="breadcrumb-item"><a href="#">Laporan</a></li>
								<li class="breadcrumb-item"><a href="{{ route('spop.index') }}">SPOP</a></li>
								<li class="breadcrumb-item active" aria-current="page">Tambah Data SPOP</li>
							</ol>
							</div>
						</div>
						
                        <form class="row g-4 p-5">
                            <div class="col-md-6">
                                <label for="kd_prov" class="form-label">Kode Provinsi</label>
                                <input type="text" class="form-control" id="kd_prov" name="kd_prov">
                            </div>
                            <div class="col-md-6">
                                <label for="kd_dati" class="form-label">Kode Dati 2</label>
                                <input type="text" class="form-control" id="kd_dati" name="kd_dati">
                            </div>
                            <div class="col-md-6">
                                <label for="kd_kec" class="form-label">Kode Kecamatan</label>
                                <input type="text" class="form-control" id="kd_kec" name="kd_kec">
                            </div>
                            <div class="col-md-6">
                                <label for="kd_kel" class="form-label">Kode Kelurahan</label>
                                <input type="text" class="form-control" id="kd_kel" name="kd_kel">
                            </div>
                            <div class="col-md-6">
                                <label for="kd_blok" class="form-label">Kode Blok</label>
                                <input type="text" class="form-control" id="kd_blok" name="kd_blok">
                            </div>
                            <div class="col-md-6">
                                <label for="no_urut" class="form-label">No Urut</label>
                                <input type="text" class="form-control" id="no_urut" name="no_urut">
                            </div>
                            <div class="col-md-6">
                                <label for="kd_jenisOp" class="form-label">Kode Jenis Op</label>
                                <input type="text" class="form-control" id="kd_jenis" name="kd_jenis">
                            </div>
                            <div class="col-md-6">
                                <label for="kd_jenisTransaksi" class="form-label">Jenis Transaksi Op</label>
                                <input type="text" class="form-control" id="kd_jenisTransaksi" name="kd_jenisTransaksi">
                            </div>
                            <div class="col-md-6">
                                <label for="no_spptLama" class="form-label">No Sppt Lama</label>
                                <input type="text" class="form-control" id="no_spptLama" name="no_spptLama" >
                            </div>
                            <div class="col-md-6">
                                <label for="sbj_pajak" class="form-label">Subjek Pajak ID</label>
                                <input type="text" class="form-control" id="inputDendaDibayar">
                            </div>
                            <div class="col-md-6">
                                <label for="inputNamaKelurahan" class="form-label">Jalan Op</label>
                                <input type="text" class="form-control" id="inputNamaKelurahan">
                            </div>
                            <div class="col-md-6">
                                <label for="inputTotalPembayaran" class="form-label">Blok Kav No Op</label>
                                <input type="text" class="form-control" id="inputTotalPembayaran">
                            </div>
                            <div class="col-md-6">
                                <label for="inputPokok" class="form-label">Kelurahan Op</label>
                                <input type="text" class="form-control" id="inputPokok">
                            </div>
                            <div class="col-md-6">
                                <label for="inputKurangDibayar" class="form-label">RW Op</label>
                                <input type="text" class="form-control" id="inputKurangDibayar">
                            </div>
                            <div class="col-md-6">
                                <label for="inputPokokDibayar" class="form-label">RT Op</label>
                                <input type="text" class="form-control" id="inputPokokDibayar">
                            </div>
                            <div class="col-md-6">
                                <label for="inputLebihDibayar" class="form-label">Kode Status Wp</label>
                                <input type="text" class="form-control" id="inputLebihDibayar">
                            </div>
                            <div class="col-md-6">
                                <label for="inputNamaKecamatan" class="form-label">Luas Bumi</label>
                                <input type="text" class="form-control" id="inputNamaKecamatan" >
                            </div>
                            <div class="col-md-6">
                                <label for="inputDendaDibayar" class="form-label">Kode Znt</label>
                                <input type="text" class="form-control" id="inputDendaDibayar">
                            </div>
                            <div class="col-md-6">
                                <label for="inputNamaKelurahan" class="form-label">Jenis Bumi</label>
                                <input type="text" class="form-control" id="inputNamaKelurahan">
                            </div>
                            <div class="col-md-6">
                                <label for="inputTotalPembayaran" class="form-label">Nilai Sistem Bumi</label>
                                <input type="text" class="form-control" id="inputTotalPembayaran">
                            </div>
                            <div class="col-md-6">
                                <label for="inputPokok" class="form-label">Kode Provinsi Bersama</label>
                                <input type="text" class="form-control" id="inputPokok">
                            </div>
                            <div class="col-md-6">
                                <label for="inputKurangDibayar" class="form-label">Kode Dati 2 Bersama</label>
                                <input type="text" class="form-control" id="inputKurangDibayar">
                            </div>
                            <div class="col-md-6">
                                <label for="inputPokokDibayar" class="form-label">Kode Kecamatan Bersama</label>
                                <input type="text" class="form-control" id="inputPokokDibayar">
                            </div>
                            <div class="col-md-6">
                                <label for="inputLebihDibayar" class="form-label">Kode Kelurahan Bersama</label>
                                <input type="text" class="form-control" id="inputLebihDibayar">
                            </div>
                            <div class="col-md-6">
                                <label for="inputNamaKecamatan" class="form-label">Kode Blok Bersama</label>
                                <input type="text" class="form-control" id="inputNamaKecamatan" >
                            </div>
                            <div class="col-md-6">
                                <label for="inputDendaDibayar" class="form-label">No Urut Bersama</label>
                                <input type="text" class="form-control" id="inputDendaDibayar">
                            </div>
                            <div class="col-md-6">
                                <label for="inputNamaKelurahan" class="form-label">Kode Jenis Op Bersama</label>
                                <input type="text" class="form-control" id="inputNamaKelurahan">
                            </div>
                            <div class="col-md-6">
                                <label for="inputTotalPembayaran" class="form-label">Kode Provinsi Asal</label>
                                <input type="text" class="form-control" id="inputTotalPembayaran">
                            </div>
                            <div class="col-md-6">
                                <label for="inputPokok" class="form-label">Kode Dati 2 Asal</label>
                                <input type="text" class="form-control" id="inputPokok">
                            </div>
                            <div class="col-md-6">
                                <label for="inputKurangDibayar" class="form-label">Kode Kecamatan Asal</label>
                                <input type="text" class="form-control" id="inputKurangDibayar">
                            </div>
                            <div class="col-md-6">
                                <label for="inputPokokDibayar" class="form-label">Kode Kelurahan Asal</label>
                                <input type="text" class="form-control" id="inputPokokDibayar">
                            </div>
                            <div class="col-md-6">
                                <label for="inputLebihDibayar" class="form-label">Kode Blok Asal</label>
                                <input type="text" class="form-control" id="inputLebihDibayar">
                            </div>
                            <div class="col-md-6">
                                <label for="inputLebihDibayar" class="form-label">No Urut Asal</label>
                                <input type="text" class="form-control" id="inputLebihDibayar">
                            </div>
                            <div class="col-md-6">
                                <label for="inputNamaKecamatan" class="form-label">Kode Jenis Op Asal</label>
                                <input type="text" class="form-control" id="inputNamaKecamatan" >
                            </div>
                            <div class="col-md-6">
                                <label for="inputDendaDibayar" class="form-label">Tanggal Pendataan Op</label>
                                <input type="text" class="form-control" id="inputDendaDibayar">
                            </div>
                            <div class="col-md-6">
                                <label for="inputNamaKelurahan" class="form-label">Nama Pendata Op</label>
                                <input type="text" class="form-control" id="inputNamaKelurahan">
                            </div>
                            <div class="col-md-6">
                                <label for="inputTotalPembayaran" class="form-label">NIP Pendata</label>
                                <input type="text" class="form-control" id="inputTotalPembayaran">
                            </div>
                            <div class="col-md-6">
                                <label for="inputPokok" class="form-label">Tanggal Pemeriksaan Op</label>
                                <input type="text" class="form-control" id="inputPokok">
                            </div>
                            <div class="col-md-6">
                                <label for="inputKurangDibayar" class="form-label">Nama Pemeriksa Op</label>
                                <input type="text" class="form-control" id="inputKurangDibayar">
                            </div>
                            <div class="col-md-6">
                                <label for="inputPokokDibayar" class="form-label">NIP Pemeriksa Op</label>
                                <input type="text" class="form-control" id="inputPokokDibayar">
                            </div>
                            <div class="col-md-6">
                                <label for="inputLebihDibayar" class="form-label">No Persil</label>
                                <input type="text" class="form-control" id="inputLebihDibayar">
                            </div>

                            <div class="col-md-12 text-center">
                                <button type="submit" class="btn btn-primary" style="width:150px;">Simpan</button>
                            </div>
                        </form>

					</div>
				</div>
			</div>
@endsection