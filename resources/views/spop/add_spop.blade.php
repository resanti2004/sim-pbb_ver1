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
                            <div class=" p-0 d-flex align-items-start" style="--bs-breadcrumb-divider: '>';" aria-label="breadcrumb">
                                <ol class="breadcrumb">
                                    <li class="breadcrumb-item"><a href="#">Beranda</a></li>
                                    <li class="breadcrumb-item"><a href="#">Laporan</a></li>
                                    <li class="breadcrumb-item"><a href="{{ route('spop.index') }}">SPOP</a></li>
                                    <li class="breadcrumb-item active" aria-current="page">Tambah Data SPOP</li>
                                </ol>
                            </div>
						</div>
						
                        <form method="POST" action="{{ route('spop.store') }}" class="row g-4 p-5 needs-validation" novalidate>
                            @csrf
                            <div class="col-md-6">
                                <label for="kd_prov" class="form-label">Kode Provinsi</label>
                                <input type="text" class="form-control" id="kd_prov" name="kd_prov" required>
                                <div class="invalid-feedback">
									Isi kolom ini terlebih dahulu!
								</div>
                            </div>
                            <div class="col-md-6">
                                <label for="kd_dati" class="form-label">Kode Dati 2</label>
                                <input type="text" class="form-control" id="kd_dati" name="kd_dati" required>
                                <div class="invalid-feedback">
									Isi kolom ini terlebih dahulu!
								</div>
                            </div>
                            <div class="col-md-6">
                                <label for="kd_kec" class="form-label">Kode Kecamatan</label>
                                <input type="text" class="form-control" id="kd_kec" name="kd_kec" required>
                                <div class="invalid-feedback">
									Isi kolom ini terlebih dahulu!
								</div>
                            </div>
                            <div class="col-md-6">
                                <label for="kd_kel" class="form-label">Kode Kelurahan</label>
                                <input type="text" class="form-control" id="kd_kel" name="kd_kel" required>
                                <div class="invalid-feedback">
									Isi kolom ini terlebih dahulu!
								</div>
                            </div>
                            <div class="col-md-6">
                                <label for="kd_blok" class="form-label">Kode Blok</label>
                                <input type="text" class="form-control" id="kd_blok" name="kd_blok" required>
                                <div class="invalid-feedback">
									Isi kolom ini terlebih dahulu!
								</div>
                            </div>
                            <div class="col-md-6">
                                <label for="no_urut" class="form-label">No Urut</label>
                                <input type="text" class="form-control" id="no_urut" name="NO_URUT" required>
                                <div class="invalid-feedback">
									Isi kolom ini terlebih dahulu!
								</div>
                            </div>
                            <div class="col-md-6">
                                <label for="kd_jenisOp" class="form-label">Kode Jenis Op</label>
                                <input type="text" class="form-control" id="kd_jenis" name="kd_jenis" required>
                                <div class="invalid-feedback">
									Isi kolom ini terlebih dahulu!
								</div>
                            </div>
                            <div class="col-md-6">
                                <label for="kd_jenisTransaksi" class="form-label">Jenis Transaksi Op</label>
                                <!-- <input type="text" class="form-control" id="kd_jenisTransaksi" name="kd_jenisTransaksi" required> -->
                                <select class="form-select" id="kd_jenisTransaksi" name="kd_jenisTransaksi" required>
                                    <option selected disabled value="">Choose...</option>
                                    <option>Perekaman Data</option>
                                    <option>Pemutakhiran Data</option>
                                    <option>Penghapusan Data</option>
                                </select>
                                <div class="invalid-feedback">
									Isi kolom ini terlebih dahulu!
								</div>
                            </div>
                            <div class="col-md-6">
                                <label for="nop_bersama" class="form-label">NOP Bersama</label>
                                <input type="text" class="form-control" id="nop_bersama" name="nop_bersama" required>
                                <div class="invalid-feedback">
									Isi kolom ini terlebih dahulu!
								</div>
                            </div>
                            <div class="col-md-6">
                                <label for="no_spptLama" class="form-label">No Sppt Lama</label>
                                <input type="text" class="form-control" id="no_spptLama" name="no_spptLama" required>
                                <div class="invalid-feedback">
									Isi kolom ini terlebih dahulu!
								</div>
                            </div>
                            <div class="col-md-6">
                                <label for="sbj_pajak" class="form-label">Subjek Pajak ID</label>
                                <input type="text" class="form-control" id="sbj_pajak" name="sbj_pajak" required>
                                <div class="invalid-feedback">
									Isi kolom ini terlebih dahulu!
								</div>
                            </div>
                            <div class="col-md-6">
                                <label for="jalan_op" class="form-label">Jalan Op</label>
                                <input type="text" class="form-control" id="jalan_op" name="jalan_op" required>
                                <div class="invalid-feedback">
									Isi kolom ini terlebih dahulu!
								</div>
                            </div>
                            <div class="col-md-6">
                                <label for="blok_kav" class="form-label">Blok Kav No Op</label>
                                <input type="text" class="form-control" id="blok_kav" name="blok_kav" required>
                                <div class="invalid-feedback">
									Isi kolom ini terlebih dahulu!
								</div>
                            </div>
                            <div class="col-md-6">
                                <label for="kel_op" class="form-label">Kelurahan Op</label>
                                <input type="text" class="form-control" id="kel_op" name="kel_op" required>
                                <div class="invalid-feedback">
									Isi kolom ini terlebih dahulu!
								</div>
                            </div>
                            <div class="col-md-6">
                                <label for="rw_op" class="form-label">RW Op</label>
                                <input type="text" class="form-control" id="rw_op" name="rw_op" required>
                                <div class="invalid-feedback">
									Isi kolom ini terlebih dahulu!
								</div>
                            </div>
                            <div class="col-md-6">
                                <label for="rt_op" class="form-label">RT Op</label>
                                <input type="text" class="form-control" id="rt_op" name="rt_op" required>
                                <div class="invalid-feedback">
									Isi kolom ini terlebih dahulu!
								</div>
                            </div>
                            <div class="col-md-6">
                                <label for="kd_statusWp" class="form-label">Kode Status Wp</label>
                                <!-- <input type="text" class="form-control" id="kd_statusWp" name="kd_statusWp" required> -->
                                <select class="form-select" id="kd_statusWp" name="kd_statusWp" required>
                                    <option selected disabled value="">Choose...</option>
                                    <option>PEMILIK</option>
                                    <option>PENYEWA</option>
                                    <option>PENGELOLA</option>
                                    <option>PEMAKAI</option>
                                    <option>SENGKETA</option>
                                </select>
                                <div class="invalid-feedback">
									Isi kolom ini terlebih dahulu!
								</div>
                            </div>
                            <div class="col-md-6">
                                <label for="luas_bumi" class="form-label">Luas Bumi</label>
                                <input type="text" class="form-control" id="luas_bumi" name="luas_bumi" required>
                                <div class="invalid-feedback">
									Isi kolom ini terlebih dahulu!
								</div>
                            </div>
                            <div class="col-md-6">
                                <label for="kd_znt" class="form-label">Kode Znt</label>
                                <input type="text" class="form-control" id="kd_znt" name="kd_znt" required>
                                <div class="invalid-feedback">
									Isi kolom ini terlebih dahulu!
								</div>
                            </div>
                            <div class="col-md-6">
                                <label for="jns_bumi" class="form-label">Jenis Bumi</label>
                                <input type="text" class="form-control" id="jns_bumi" name="jns_bumi" required>
                                <div class="invalid-feedback">
									Isi kolom ini terlebih dahulu!
								</div>
                            </div>
                            <div class="col-md-6">
                                <label for="hsl_stmBumi" class="form-label">Nilai Sistem Bumi</label>
                                <input type="text" class="form-control" id="hsl_stmBumi" name="hsl_stmBumi" required>
                                <div class="invalid-feedback">
									Isi kolom ini terlebih dahulu!
								</div>
                            </div>
                            <div class="col-md-6">
                                <label for="kd_provBersama" class="form-label">Kode Provinsi Bersama</label>
                                <input type="text" class="form-control" id="kd_provBersama" name="kd_provBersama" required>
                                <div class="invalid-feedback">
									Isi kolom ini terlebih dahulu!
								</div>
                            </div>
                            <div class="col-md-6">
                                <label for="kd_datiBersama" class="form-label">Kode Dati 2 Bersama</label>
                                <input type="text" class="form-control" id="kd_datiBersama" name="kd_datiBersama" required>
                                <div class="invalid-feedback">
									Isi kolom ini terlebih dahulu!
								</div>
                            </div>
                            <div class="col-md-6">
                                <label for="kd_kecBersama" class="form-label">Kode Kecamatan Bersama</label>
                                <input type="text" class="form-control" id="kd_kecBersama" name="kd_kecBersama" required>
                                <div class="invalid-feedback">
									Isi kolom ini terlebih dahulu!
								</div>
                            </div>
                            <div class="col-md-6">
                                <label for="kd_kelBersama" class="form-label">Kode Kelurahan Bersama</label>
                                <input type="text" class="form-control" id="kd_kelBersama" name="kd_kelBersama" required>
                                <div class="invalid-feedback">
									Isi kolom ini terlebih dahulu!
								</div>
                            </div>
                            <div class="col-md-6">
                                <label for="kd_blokBersama" class="form-label">Kode Blok Bersama</label>
                                <input type="text" class="form-control" id="kd_blokBersama" name="kd_blokBersama" required>
                                <div class="invalid-feedback">
									Isi kolom ini terlebih dahulu!
								</div>
                            </div>
                            <div class="col-md-6">
                                <label for="no_urutBersama" class="form-label">No Urut Bersama</label>
                                <input type="text" class="form-control" id="no_urutBersama" name="no_urutBersama" required>
                                <div class="invalid-feedback">
									Isi kolom ini terlebih dahulu!
								</div>
                            </div>
                            <div class="col-md-6">
                                <label for="kd_jnsOpBersama" class="form-label">Kode Jenis Op Bersama</label>
                                <input type="text" class="form-control" id="kd_jnsOpBersama" name="kd_jnsOpBersama" required>
                                <div class="invalid-feedback">
									Isi kolom ini terlebih dahulu!
								</div>
                            </div>
                            <div class="col-md-6">
                                <label for="kd_provAsal" class="form-label">Kode Provinsi Asal</label>
                                <input type="text" class="form-control" id="kd_provAsal" name="kd_provAsal" required>
                                <div class="invalid-feedback">
									Isi kolom ini terlebih dahulu!
								</div>
                            </div>
                            <div class="col-md-6">
                                <label for="kd_datiAsal" class="form-label">Kode Dati 2 Asal</label>
                                <input type="text" class="form-control" id="kd_datiAsal" name="kd_datiAsal" required>
                                <div class="invalid-feedback">
									Isi kolom ini terlebih dahulu!
								</div>
                            </div>
                            <div class="col-md-6">
                                <label for="kd_kecAsal" class="form-label">Kode Kecamatan Asal</label>
                                <input type="text" class="form-control" id="kd_kecAsal" name="kd_kecAsal" required>
                                <div class="invalid-feedback">
									Isi kolom ini terlebih dahulu!
								</div>
                            </div>
                            <div class="col-md-6">
                                <label for="kd_kelAsal" class="form-label">Kode Kelurahan Asal</label>
                                <input type="text" class="form-control" id="kd_kelAsal" name="kd_kelAsal" required> 
                                <div class="invalid-feedback">
									Isi kolom ini terlebih dahulu!
								</div>
                            </div>
                            <div class="col-md-6">
                                <label for="kd_blokAsal" class="form-label">Kode Blok Asal</label>
                                <input type="text" class="form-control" id="kd_blokAsal" name="kd_blokAsal" required>
                                <div class="invalid-feedback">
									Isi kolom ini terlebih dahulu!
								</div>
                            </div>
                            <div class="col-md-6">
                                <label for="no_urutAsal" class="form-label">No Urut Asal</label>
                                <input type="text" class="form-control" id="no_urutAsal" name="no_urutAsal" required>
                                <div class="invalid-feedback">
									Isi kolom ini terlebih dahulu!
								</div>
                            </div>
                            <div class="col-md-6">
                                <label for="Kd_jenisOpAsal" class="form-label">Kode Jenis Op Asal</label>
                                <input type="text" class="form-control" id="Kd_jenisOpAsal" name="Kd_jenisOpAsal" required>
                                <div class="invalid-feedback">
									Isi kolom ini terlebih dahulu!
								</div>
                            </div>
                            <div class="col-md-6">
                                <label for="tgl_pendataanOp" class="form-label">Tanggal Pendataan Op</label>
                                <input type="text" class="form-control" id="tgl_pendataanOp" name="tgl_pendataanOp" required>
                                <div class="invalid-feedback">
									Isi kolom ini terlebih dahulu!
								</div>
                            </div>
                            <div class="col-md-6">
                                <label for="nm_pendataOp" class="form-label">Nama Pendata Op</label>
                                <input type="text" class="form-control" id="nm_pendataOp" name="nm_pendataOp" required>
                                <div class="invalid-feedback">
									Isi kolom ini terlebih dahulu!
								</div>
                            </div>
                            <div class="col-md-6">
                                <label for="nip_pendata" class="form-label">NIP Pendata</label>
                                <input type="text" class="form-control" id="nip_pendata" name="nip_pendata" required>
                                <div class="invalid-feedback">
									Isi kolom ini terlebih dahulu!
								</div>
                            </div>
                            <div class="col-md-6">
                                <label for="tgl_pemeriksaanOp" class="form-label">Tanggal Pemeriksaan Op</label>
                                <input type="text" class="form-control" id="tgl_pemeriksaanOp" name="tgl_pemeriksaanOp" required>
                                <div class="invalid-feedback">
									Isi kolom ini terlebih dahulu!
								</div>
                            </div>
                            <div class="col-md-6">
                                <label for="nm_pemeriksaOp" class="form-label">Nama Pemeriksa Op</label>
                                <input type="text" class="form-control" id="nm_pemeriksaOp" name="nm_pemeriksaOp" required>
                                <div class="invalid-feedback">
									Isi kolom ini terlebih dahulu!
								</div>
                            </div>
                            <div class="col-md-6">
                                <label for="nip_pemeriksaOp" class="form-label">NIP Pemeriksa Op</label>
                                <input type="text" class="form-control" id="nip_pemeriksaOp" name="nip_pemeriksaOp" required>
                                <div class="invalid-feedback">
									Isi kolom ini terlebih dahulu!
								</div>
                            </div>
                            <div class="col-md-6">
                                <label for="no_persil" class="form-label">No Persil</label>
                                <input type="text" class="form-control" id="no_persil" name="no_persil" required>
                                <div class="invalid-feedback">
									Isi kolom ini terlebih dahulu!
								</div>
                            </div>

                            <div class="col-md-12 text-center">
                                <button type="submit" class="btn btn-primary" style="width:150px;">Simpan</button>
                            </div>
                        </form>

					</div>
				</div>
			</div>
@endsection