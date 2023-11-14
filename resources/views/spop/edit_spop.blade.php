@extends('kerangka.master')
@section('title', 'Edit Data SPOP')
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
							<h3>Edit Data SPOP</h3>
							<div aria-label="breadcrumb">
							<ol class="breadcrumb">
								<li class="breadcrumb-item"><a href="#">Beranda</a></li>
								<li class="breadcrumb-item"><a href="#">Laporan</a></li>
								<li class="breadcrumb-item"><a href="#">SPOP</a></li>
								<li class="breadcrumb-item active" aria-current="page">Edit Data SPOP</li>
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
                                <input type="text" class="form-control" id="sbj_pajak" name="sbj_pajak">
                            </div>
                            <div class="col-md-6">
                                <label for="jalan_op" class="form-label">Jalan Op</label>
                                <input type="text" class="form-control" id="jalan_op" name="jalan_op">
                            </div>
                            <div class="col-md-6">
                                <label for="blok_kav" class="form-label">Blok Kav No Op</label>
                                <input type="text" class="form-control" id="blok_kav" name="blok_kav">
                            </div>
                            <div class="col-md-6">
                                <label for="kel_op" class="form-label">Kelurahan Op</label>
                                <input type="text" class="form-control" id="kel_op" name="kel_op">
                            </div>
                            <div class="col-md-6">
                                <label for="rw_op" class="form-label">RW Op</label>
                                <input type="text" class="form-control" id="rw_op" name="rw_op">
                            </div>
                            <div class="col-md-6">
                                <label for="rt_op" class="form-label">RT Op</label>
                                <input type="text" class="form-control" id="rt_op" name="rt_op  ">
                            </div>
                            <div class="col-md-6">
                                <label for="kd_statusWp" class="form-label">Kode Status Wp</label>
                                <input type="text" class="form-control" id="kd_statusWp" name="kd_statusWp">
                            </div>
                            <div class="col-md-6">
                                <label for="luas_bumi" class="form-label">Luas Bumi</label>
                                <input type="text" class="form-control" id="luas_bumi" name="luas_bumi" >
                            </div>
                            <div class="col-md-6">
                                <label for="kd_znt" class="form-label">Kode Znt</label>
                                <input type="text" class="form-control" id="kd_znt" name="kd_znt">
                            </div>
                            <div class="col-md-6">
                                <label for="jns_bumi" class="form-label">Jenis Bumi</label>
                                <input type="text" class="form-control" id="jns_bumi" name="jns_bumi">
                            </div>
                            <div class="col-md-6">
                                <label for="hsl_stmBumi" class="form-label">Nilai Sistem Bumi</label>
                                <input type="text" class="form-control" id="hsl_stmBumi" name="hsl_stmBumi">
                            </div>
                            <div class="col-md-6">
                                <label for="kd_provBersama" class="form-label">Kode Provinsi Bersama</label>
                                <input type="text" class="form-control" id="kd_provBersama" name="kd_provBersama">
                            </div>
                            <div class="col-md-6">
                                <label for="kd_datiBersama" class="form-label">Kode Dati 2 Bersama</label>
                                <input type="text" class="form-control" id="kd_datiBersama" name="kd_datiBersama">
                            </div>
                            <div class="col-md-6">
                                <label for="kd_kecBersama" class="form-label">Kode Kecamatan Bersama</label>
                                <input type="text" class="form-control" id="kd_kecBersama" name="kd_kecBersama">
                            </div>
                            <div class="col-md-6">
                                <label for="kd_kelBersama" class="form-label">Kode Kelurahan Bersama</label>
                                <input type="text" class="form-control" id="kd_kelBersama" name="kd_kelBersama">
                            </div>
                            <div class="col-md-6">
                                <label for="kd_blokBersama" class="form-label">Kode Blok Bersama</label>
                                <input type="text" class="form-control" id="kd_blokBersama" name="kd_blokBersama" >
                            </div>
                            <div class="col-md-6">
                                <label for="no_urutBersama" class="form-label">No Urut Bersama</label>
                                <input type="text" class="form-control" id="no_urutBersama" name="no_urutBersama">
                            </div>
                            <div class="col-md-6">
                                <label for="kd_jnsOpBersama" class="form-label">Kode Jenis Op Bersama</label>
                                <input type="text" class="form-control" id="kd_jnsOpBersama" name="kd_jnsOpBersama">
                            </div>
                            <div class="col-md-6">
                                <label for="kd_provAsal" class="form-label">Kode Provinsi Asal</label>
                                <input type="text" class="form-control" id="kd_provAsal" name="kd_provAsal">
                            </div>
                            <div class="col-md-6">
                                <label for="kd_datiAsal" class="form-label">Kode Dati 2 Asal</label>
                                <input type="text" class="form-control" id="kd_datiAsal" name="kd_datiAsal">
                            </div>
                            <div class="col-md-6">
                                <label for="kd_kecAsal" class="form-label">Kode Kecamatan Asal</label>
                                <input type="text" class="form-control" id="kd_kecAsal" name="kd_kecAsal">
                            </div>
                            <div class="col-md-6">
                                <label for="kd_kelAsal" class="form-label">Kode Kelurahan Asal</label>
                                <input type="text" class="form-control" id="kd_kelAsal" name="kd_kelAsal">
                            </div>
                            <div class="col-md-6">
                                <label for="kd_blokAsal" class="form-label">Kode Blok Asal</label>
                                <input type="text" class="form-control" id="kd_blokAsal" name="kd_blokAsal">
                            </div>
                            <div class="col-md-6">
                                <label for="no_urutAsal" class="form-label">No Urut Asal</label>
                                <input type="text" class="form-control" id="no_urutAsal" name="no_urutAsal">
                            </div>
                            <div class="col-md-6">
                                <label for="Kd_jenisOpAsal" class="form-label">Kode Jenis Op Asal</label>
                                <input type="text" class="form-control" id="Kd_jenisOpAsal" name="Kd_jenisOpAsal" >
                            </div>
                            <div class="col-md-6">
                                <label for="tgl_pendataanOp" class="form-label">Tanggal Pendataan Op</label>
                                <input type="text" class="form-control" id="tgl_pendataanOp" name="tgl_pendataanOp">
                            </div>
                            <div class="col-md-6">
                                <label for="nm_pendataOp" class="form-label">Nama Pendata Op</label>
                                <input type="text" class="form-control" id="nm_pendataOp" name="nm_pendataOp">
                            </div>
                            <div class="col-md-6">
                                <label for="nip_pendata" class="form-label">NIP Pendata</label>
                                <input type="text" class="form-control" id="nip_pendata" name="nip_pendata">
                            </div>
                            <div class="col-md-6">
                                <label for="tgl_pemeriksaanOp" class="form-label">Tanggal Pemeriksaan Op</label>
                                <input type="text" class="form-control" id="tgl_pemeriksaanOp" name="tgl_pemeriksaanOp">
                            </div>
                            <div class="col-md-6">
                                <label for="nm_pemeriksaOp" class="form-label">Nama Pemeriksa Op</label>
                                <input type="text" class="form-control" id="nm_pemeriksaOp" name="nm_pemeriksaOp">
                            </div>
                            <div class="col-md-6">
                                <label for="nip_pemeriksaOp" class="form-label">NIP Pemeriksa Op</label>
                                <input type="text" class="form-control" id="nip_pemeriksaOp" name="nip_pemeriksaOp">
                            </div>
                            <div class="col-md-6">
                                <label for="no_persil" class="form-label">No Persil</label>
                                <input type="text" class="form-control" id="no_persil" name="no_persil">
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