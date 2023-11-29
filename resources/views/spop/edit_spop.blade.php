@extends('kerangka.master')
@section('title', 'Edit Data SPOP')
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
							<h3>Edit Data SPOP</h3>
                            <div class=" p-0 d-flex align-items-start" style="--bs-breadcrumb-divider: '>';" aria-label="breadcrumb">
                                <ol class="breadcrumb">
                                    <li class="breadcrumb-item"><a href="#">Beranda</a></li>
                                    <li class="breadcrumb-item"><a href="#">Laporan</a></li>
                                    <li class="breadcrumb-item"><a href="{{ route('spop.index') }}">SPOP</a></li>
                                    <li class="breadcrumb-item active" aria-current="page">Edit Data SPOP</li>
                                </ol>
                            </div>
						</div>
						
                        <form method="POST" action="{{ route('spop.store') }}" class="row g-4 p-5 needs-validation" novalidate>
                            @csrf
                            <div class="col-md-6">
                                <label for="kd_prov" class="form-label">Kode Provinsi</label>
                                <input type="text" class="form-control" id="kd_prov" name="KD_PROPINSI" required>
                                <div class="invalid-feedback">
									Isi kolom ini terlebih dahulu!
								</div>
                            </div>
                            <div class="col-md-6">
                                <label for="kd_dati" class="form-label">Kode Dati 2</label>
                                <input type="text" class="form-control" id="kd_dati" name="KD_DATI2" required>
                                <div class="invalid-feedback">
									Isi kolom ini terlebih dahulu!
								</div>
                            </div>
                            <div class="col-md-6">
                                <label for="kd_kec" class="form-label">Kode Kecamatan</label>
                                <!-- <input type="text" class="form-control" id="kd_jenisTransaksi" name="kd_jenisTransaksi" required> -->
                                <select class="form-select" id="kd_kec" name="KD_KECAMATAN" required>
                                    <option selected disabled value="">Choose...</option>
                                    <option value="1">[010] WAKANDA SELATAN</option>
                                    <option value="2">[020] WAKANDA TIMUR </option>
                                </select>
                                <div class="invalid-feedback">
									Isi kolom ini terlebih dahulu!
								</div>
                            </div>
                            <div class="col-md-6">
                                <label for="kd_kel" class="form-label">Kode Kelurahan</label>
                                <input type="text" class="form-control" id="kd_kel" name="KD_KELURAHAN" required>
                                <div class="invalid-feedback">
									Isi kolom ini terlebih dahulu!
								</div>
                            </div>
                            <div class="col-md-6">
                                <label for="kd_blok" class="form-label">Kode Blok</label>
                                <input type="text" class="form-control" id="kd_blok" name="KD_BLOK" required>
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
                                <input type="text" class="form-control" id="kd_jenis" name="KD_JNS_OP" required>
                                <div class="invalid-feedback">
									Isi kolom ini terlebih dahulu!
								</div>
                            </div>
                            <div class="col-md-6">
                                <label for="kd_jenisTransaksi" class="form-label">Jenis Transaksi Op</label>
                                <!-- <input type="text" class="form-control" id="kd_jenisTransaksi" name="kd_jenisTransaksi" required> -->
                                <select class="form-select" id="kd_jenisTransaksi" name="JNS_TRANSAKSI_OP" required>
                                    <option selected disabled value="">Choose...</option>
                                    <option value="1">Perekaman Data</option>
                                    <option value="2">Pemutakhiran Data</option>
                                    <option value="3">Penghapusan Data</option>
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
                                <label for="no_formulir_spop" class="form-label">NO Formulir SPOP</label>
                                <input type="text" class="form-control" id="no_formulir_spop" name="NO_FORMULIR_SPOP" required>
                                <div class="invalid-feedback">
									Isi kolom ini terlebih dahulu!
								</div>
                            </div>
                            <div class="col-md-6">
                                <label for="nop_asal" class="form-label">NOP Asal</label>
                                <input type="text" class="form-control" id="nop_asal" name="NOP_ASAL" required>
                                <div class="invalid-feedback">
									Isi kolom ini terlebih dahulu!
								</div>
                            </div>
                            <div class="col-md-6">
                                <label for="no_spptLama" class="form-label">No Sppt Lama</label>
                                <input type="text" class="form-control" id="no_spptLama" name="NO_SPPT_LAMA" required>
                                <div class="invalid-feedback">
									Isi kolom ini terlebih dahulu!
								</div>
                            </div>
                            <div class="col-md-6">
                                <label for="jalan_op" class="form-label">Jalan Op</label>
                                <input type="text" class="form-control" id="jalan_op" name="JALAN_OP" required>
                                <div class="invalid-feedback">
									Isi kolom ini terlebih dahulu!
								</div>
                            </div>
                            <div class="col-md-6">
                                <label for="blok_kav" class="form-label">Blok Kav No Op</label>
                                <input type="text" class="form-control" id="blok_kav" name="BLOK_KAV_NO_OP" required>
                                <div class="invalid-feedback">
									Isi kolom ini terlebih dahulu!
								</div>
                            </div>
                            <div class="col-md-6">
                                <label for="rw_op" class="form-label">RW Op</label>
                                <input type="text" class="form-control" id="rw_op" name="RW_OP" required>
                                <div class="invalid-feedback">
									Isi kolom ini terlebih dahulu!
								</div>
                            </div>
                            <div class="col-md-6">
                                <label for="rt_op" class="form-label">RT Op</label>
                                <input type="text" class="form-control" id="rt_op" name="RT_OP" required>
                                <div class="invalid-feedback">
									Isi kolom ini terlebih dahulu!
								</div>
                            </div>
                            <div class="col-md-6">
                                <label for="kd_statusWp" class="form-label">Kode Status Wp</label>
                                <!-- <input type="text" class="form-control" id="kd_statusWp" name="kd_statusWp" required> -->
                                <select class="form-select" id="kd_statusWp" name="KD_STATUS_WP" required>
                                    <option selected disabled value="">Choose...</option>
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
                                <label for="sbj_pajak" class="form-label">Subjek Pajak ID</label>
                                <input type="text" class="form-control" id="sbj_pajak" name="SUBJEK_PAJAK_ID" required>
                                <div class="invalid-feedback">
									Isi kolom ini terlebih dahulu!
								</div>
                            </div>
                            <div class="col-md-6">
                                <label for="nama_wp" class="form-label">Nama Wajib Pajak</label>
                                <input type="text" class="form-control" id="nama_wp" name="NAMA_WP" required>
                                <div class="invalid-feedback">
									Isi kolom ini terlebih dahulu!
								</div>
                            </div>
                            <div class="col-md-6">
                                <label for="jln_wp" class="form-label">Jalan Wajib Pajak</label>
                                <input type="text" class="form-control" id="jln_wp" name="JLN_WP" required>
                                <div class="invalid-feedback">
									Isi kolom ini terlebih dahulu!
								</div>
                            </div>
                            <div class="col-md-6">
                                <label for="blok_kav_wp" class="form-label">Blok Kav No Wajib Pajak</label>
                                <input type="text" class="form-control" id="blok_kav_wp" name="BLOK_KAV_WP" required>
                                <div class="invalid-feedback">
									Isi kolom ini terlebih dahulu!
								</div>
                            </div>
                            <div class="col-md-6">
                                <label for="rw_wp" class="form-label">RW Wajib Pajak</label>
                                <input type="text" class="form-control" id="rw_wp" name="RW_WP" required>
                                <div class="invalid-feedback">
									Isi kolom ini terlebih dahulu!
								</div>
                            </div>
                            <div class="col-md-6">
                                <label for="rt_wp" class="form-label">RT Wajib Pajak</label>
                                <input type="text" class="form-control" id="rt_wp" name="RT_WP" required>
                                <div class="invalid-feedback">
									Isi kolom ini terlebih dahulu!
								</div>
                            </div>
                            <div class="col-md-6">
                                <label for="kelurahan_wp" class="form-label">Kelurahan Wajib Pajak</label>
                                <input type="text" class="form-control" id="kelurahan_wp" name="KELURAHAN_WP" required>
                                <div class="invalid-feedback">
									Isi kolom ini terlebih dahulu!
								</div>
                            </div>
                            <div class="col-md-6">
                                <label for="kota_wp" class="form-label">Kota Wajib Pajak</label>
                                <input type="text" class="form-control" id="kota_wp" name="KOTA_WP" required>
                                <div class="invalid-feedback">
									Isi kolom ini terlebih dahulu!
								</div>
                            </div>
                            <div class="col-md-6">
                                <label for="kd_pos_wp" class="form-label">Kode Pos Wajib Pajak</label>
                                <input type="text" class="form-control" id="kd_pos_wp" name="KD_POS_WP" required>
                                <div class="invalid-feedback">
									Isi kolom ini terlebih dahulu!
								</div>
                            </div>
                            <div class="col-md-6">
                                <label for="tlp_wp" class="form-label">Telepon Wajib Pajak</label>
                                <input type="text" class="form-control" id="tlp_wp" name="TELEPON_WP" required>
                                <div class="invalid-feedback">
									Isi kolom ini terlebih dahulu!
								</div>
                            </div>
                            <div class="col-md-6">
                                <label for="npwp" class="form-label">NPWP</label>
                                <input type="text" class="form-control" id="npwp" name="NPWP" required>
                                <div class="invalid-feedback">
									Isi kolom ini terlebih dahulu!
								</div>
                            </div>
                            <div class="col-md-6">
                                <label for="status_pekerjaan_wp" class="form-label">Status Pekerjaan Wajib Pajak</label>
                                <!-- <input type="text" class="form-control" id="kd_statusWp" name="kd_statusWp" required> -->
                                <select class="form-select" id="status_pekerjaan_wp" name="STATUS_PEKERJAAN_WP" required>
                                    <option selected disabled value="">Choose...</option>
                                    <option value="1">PNS</option>
                                    <option value="2">ABRI</option>
                                    <option value="3">PENSIUNAN</option>
                                    <option value="4">Badan</option>
                                    <option value="5">Lainnya..</option>
                                </select>
                                <div class="invalid-feedback">
									Isi kolom ini terlebih dahulu!
								</div>
                            </div>
                            <div class="col-md-6">
                                <label for="luas_bumi" class="form-label">Luas Bumi</label>
                                <input type="text" class="form-control" id="luas_bumi" name="LUAS_BUMI" required>
                                <div class="invalid-feedback">
									Isi kolom ini terlebih dahulu!
								</div>
                            </div>
                            <div class="col-md-6">
                                <label for="kd_znt" class="form-label">Kode Znt</label>
                                <input type="text" class="form-control" id="kd_znt" name="KD_ZNT" required>
                                <div class="invalid-feedback">
									Isi kolom ini terlebih dahulu!
								</div>
                            </div>
                            <div class="col-md-6">
                                <label for="jns_bumi" class="form-label">Jenis Bumi</label>
                                <!-- <input type="text" class="form-control" id="kd_statusWp" name="kd_statusWp" required> -->
                                <select class="form-select" id="jns_bumi" name="JENIS_WP" required>
                                    <option selected disabled value="">Choose...</option>
                                    <option value="1">Tanah + Bangunan</option>
                                    <option value="2">Kavling Siap Bangun</option>
                                    <option value="3">Tanah Kosong</option>
                                    <option value="4">Fasilitas Umum</option>
                                </select>
                                <div class="invalid-feedback">
									Isi kolom ini terlebih dahulu!
								</div>
                            </div>
                            <div class="col-md-6">
                                <label for="hsl_stmBumi" class="form-label">Nilai Sistem Bumi</label>
                                <input type="text" class="form-control" id="hsl_stmBumi" name="NILAI_SISTEM_BUMI" required>
                                <div class="invalid-feedback">
									Isi kolom ini terlebih dahulu!
								</div>
                            </div>
                            <div class="col-md-6">
                                <label for="tgl_pendataanOp" class="form-label">Tanggal Pendataan Op</label>
                                <input type="text" class="form-control" id="tgl_pendataanOp" name="TGL_PENDATAAN_OP" required>
                                <div class="invalid-feedback">
									Isi kolom ini terlebih dahulu!
								</div>
                            </div>
                            <div class="col-md-6">
                                <label for="nip_pendata" class="form-label">NIP Pendata</label>
                                <input type="text" class="form-control" id="nip_pendata" name="NIP_PENDATA" required>
                                <div class="invalid-feedback">
									Isi kolom ini terlebih dahulu!
								</div>
                            </div>
                            <div class="col-md-6">
                                <label for="tgl_pemeriksaanOp" class="form-label">Tanggal Pemeriksaan Op</label>
                                <input type="text" class="form-control" id="tgl_pemeriksaanOp" name="TGL_PEMERIKSAAN_OP" required>
                                <div class="invalid-feedback">
									Isi kolom ini terlebih dahulu!
								</div>
                            </div>
                            <div class="col-md-6">
                                <label for="nip_pemeriksaOp" class="form-label">NIP Pemeriksa Op</label>
                                <input type="text" class="form-control" id="nip_pemeriksaOp" name="NIP_PEMERIKSA_OP" required>
                                <div class="invalid-feedback">
									Isi kolom ini terlebih dahulu!
								</div>
                            </div>
                            <div class="col-md-6">
                                <label for="no_persil" class="form-label">No Persil</label>
                                <input type="text" class="form-control" id="no_persil" name="NO_PERSIL" required>
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