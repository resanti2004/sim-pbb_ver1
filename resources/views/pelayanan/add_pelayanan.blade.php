@extends('kerangka.master')
@section('title', 'Tambah Data Pelayanan')
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
							<h3>Pelayanan</h3>
							<!-- <div aria-label="breadcrumb">
							<ol class="breadcrumb">
								<li class="breadcrumb-item"><a href="#">Beranda</a></li>
								<li class="breadcrumb-item"><a href="{{ route('pelayanan.index') }}">Pelayanan</a></li>
								<li class="breadcrumb-item active" aria-current="page">Tambah Data Pelayanan</li>
							</ol>
							</div> -->
                            <div class=" p-0 d-flex align-items-start" style="--bs-breadcrumb-divider: '>';" aria-label="breadcrumb">
                                <ol class="breadcrumb">
                                    <li class="breadcrumb-item"><a href="#">Beranda</a></li>
                                    <li class="breadcrumb-item"><a href="{{ route('pelayanan.index') }}">Pelayanan</a></li>
                                    <li class="breadcrumb-item active" aria-current="page">Tambah Data Pelayanan</li>
                                </ol>
                            </div>
						</div>
						
                        <form class="row g-4 p-5 needs-validation" novalidate>
                            <div class="col-md-6">
                                <label for="id" class="form-label">ID</label>
                                <input type="text" class="form-control" id="id" name="id" required>
                                <div class="invalid-feedback">
									Isi kolom ini terlebih dahulu!
								</div>
                            </div>
                            <div class="col-md-6">
                                <label for="keterangan" class="form-label">Keterangan</label>
                                <input type="text" class="form-control" id="keterangan" name="keterangan" required>
                                <div class="invalid-feedback">
									Isi kolom ini terlebih dahulu!
								</div>
                            </div>
                            <div class="col-md-6">
                                <label for="nm_pemohon" class="form-label">Nama Pemohon</label>
                                <input type="text" class="form-control" id="nm_pemohon" name="nm_pemohon" required>
                                <div class="invalid-feedback">
									Isi kolom ini terlebih dahulu!
								</div>
                            </div>
                            <div class="col-md-6">
                                <label for="tgl_masukPenilai" class="form-label">Tanggal Masuk Penilai</label>
                                <input type="text" class="form-control" id="tgl_masukPenilai" name="tgl_masukPenilai" required>
                                <div class="invalid-feedback">
									Isi kolom ini terlebih dahulu!
								</div>
                            </div>
                            <div class="col-md-6">
                                <label for="alamat_pemohon" class="form-label">Alamat Pemohon</label>
                                <input type="text" class="form-control" id="alamat_pemohon" name="alamat_pemohon" required>
                                <div class="invalid-feedback">
									Isi kolom ini terlebih dahulu!
								</div>
                            </div>
                            <div class="col-md-6">
                                <label for="nip_masukPenilai" class="form-label">Nip Masuk Penilai</label>
                                <input type="text" class="form-control" id="nip_masukPenilai" name="nip_masukPenilai" required>
                                <div class="invalid-feedback">
									Isi kolom ini terlebih dahulu!
								</div>
                            </div>
                            <div class="col-md-6">
                                <label for="no_pelayanan" class="form-label">No Pelayanan</label>
                                <input type="text" class="form-control" id="no_pelayanan" name="no_pelayanan" required>
                                <div class="invalid-feedback">
									Isi kolom ini terlebih dahulu!
								</div>
                            </div>
                            <div class="col-md-6">
                                <label for="tgl_selesai" class="form-label">Tanggal Selesai</label>
                                <input type="text" class="form-control" id="tgl_selesai" name="tgl_selesai" required>
                                <div class="invalid-feedback">
									Isi kolom ini terlebih dahulu!
								</div>
                            </div>
                            <div class="col-md-6">
                                <label for="tgl_pelayanan" class="form-label">Tanggal Pelayanan</label>
                                <input type="text" class="form-control" id="tgl_pelayanan" name="tgl_pelayanan" required>
                                <div class="invalid-feedback">
									Isi kolom ini terlebih dahulu!
								</div>
                            </div>
                            <div class="col-md-6">
                                <label for="nip_selesai" class="form-label">NIP Selesai</label>
                                <input type="text" class="form-control" id="nip_selesai" name="nip_selesai" required>
                                <div class="invalid-feedback">
									Isi kolom ini terlebih dahulu!
								</div>
                            </div>
                            <div class="col-md-6">
                                <label for="kd_prov" class="form-label">Kode Provinsi</label>
                                <input type="text" class="form-control" id="kd_prov" name="kd_prov" required>
                                <div class="invalid-feedback">
									Isi kolom ini terlebih dahulu!
								</div>
                            </div>
                            <div class="col-md-6">
                                <label for="tgl_konfirmasiWp" class="form-label">Tanggal Konfirmasi Wp</label>
                                <input type="text" class="form-control" id="tgl_konfirmasiWp" name="tgl_konfirmasiWp" required>
                                <div class="invalid-feedback">
									Isi kolom ini terlebih dahulu!
								</div>
                            </div>
                            <div class="col-md-6">
                                <label for="kd_dati" class="form-label">Kode Dati</label>
                                <input type="text" class="form-control" id="kd_dati" name="kd_dati" required>
                                <div class="invalid-feedback">
									Isi kolom ini terlebih dahulu!
								</div>
                            </div>
                            <div class="col-md-6">
                                <label for="nip_terkonfirmasiWp" class="form-label">NIP Terkonfirmasi Wp</label>
                                <input type="text" class="form-control" id="nip_terkonfirmasiWp" name="nip_terkonfirmasiWp" required>
                                <div class="invalid-feedback">
									Isi kolom ini terlebih dahulu!
								</div>
                            </div>
                            <div class="col-md-6">
                                <label for="Kecamatan" class="form-label">Kecamatan</label>
                                <input type="text" class="form-control" id="Kecamatan" name="Kecamatan" required>
                                <div class="invalid-feedback">
									Isi kolom ini terlebih dahulu!
								</div>
                            </div>
                            <div class="col-md-6">
                                <label for="ttd_jabatanKiri" class="form-label">Tanda Tangan Jabatan Kiri</label>
                                <input type="text" class="form-control" id="ttd_jabatanKiri" name="ttd_jabatanKiri" required>
                                <div class="invalid-feedback">
									Isi kolom ini terlebih dahulu!
								</div>
                            </div>
                            <div class="col-md-6">
                                <label for="kelurahan" class="form-label">Kelurahan</label>
                                <input type="text" class="form-control" id="kelurahan" name="kelurahan" required>
                                <div class="invalid-feedback">
									Isi kolom ini terlebih dahulu!
								</div>
                            </div>
                            <div class="col-md-6">
                                <label for="ttd_namaKiri" class="form-label">Tanda Tangan Nama Kiri</label>
                                <input type="text" class="form-control" id="ttd_namaKiri" name="ttd_namaKiri" required>
                                <div class="invalid-feedback">
									Isi kolom ini terlebih dahulu!
								</div>
                            </div>
                            <div class="col-md-6">
                                <label for="blk" class="form-label">BLK</label>
                                <input type="text" class="form-control" id="blk" name="blk" required>
                                <div class="invalid-feedback">
									Isi kolom ini terlebih dahulu!
								</div>
                            </div>
                            <div class="col-md-6">
                                <label for="ttd_nipKiri" class="form-label">Tanda Tangan NIP Kiri</label>
                                <input type="text" class="form-control" id="ttd_nipKiri" name="ttd_nipKiri" required>
                                <div class="invalid-feedback">
									Isi kolom ini terlebih dahulu!
								</div>
                            </div>
                            <div class="col-md-6">
                                <label for="urut" class="form-label">URUT</label>
                                <input type="text" class="form-control" id="urut" name="urut" required>
                                <div class="invalid-feedback">
									Isi kolom ini terlebih dahulu!
								</div>
                            </div>
                            <div class="col-md-6">
                                <label for="ttd_jabatanKanan" class="form-label">Tanda Tangan Jabatan Kanan</label>
                                <input type="text" class="form-control" id="ttd_jabatanKanan" name="ttd_jabatanKanan" required>
                                <div class="invalid-feedback">
									Isi kolom ini terlebih dahulu!
								</div>
                            </div>
                            <div class="col-md-6">
                                <label for="no_pelayanan" class="form-label">No Pelayanan</label>
                                <input type="text" class="form-control" id="no_pelayanan" name="no_pelayanan" required>
                                <div class="invalid-feedback">
									Isi kolom ini terlebih dahulu!
								</div>
                            </div>
                            <div class="col-md-6">
                                <label for="Tgl_selesai" class="form-label">Tanggal Selesai</label>
                                <input type="text" class="form-control" id="Tgl_selesai" name="Tgl_selesai" required>
                                <div class="invalid-feedback">
									Isi kolom ini terlebih dahulu!
								</div>
                            </div>

                            <div class="col-md-12 text-center">
                                <button type="submit" class="btn btn-primary" style="width:150px;">Tambah</button>
                            </div>
                        </form>

					</div>
				</div>
			</div>
@endsection