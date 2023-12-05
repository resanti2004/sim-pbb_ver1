@extends('kerangka.master')

@section('title', 'Validasi')

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
							<h3>Validasi</h3>
							<!-- <div aria-label="breadcrumb">
							<ol class="breadcrumb">
								<li class="breadcrumb-item"><a href="#">Beranda</a></li>
								<li class="breadcrumb-item"><a href="#">Laporan</a></li>
								<li class="breadcrumb-item active" aria-current="page">Summary Neraca BPK</li>
							</ol>
							</div> -->
                            <div class=" p-0 d-flex align-items-start" style="--bs-breadcrumb-divider: '>';" aria-label="breadcrumb">
                                <ol class="breadcrumb">
                                    <li class="breadcrumb-item"><a href="#">Beranda</a></li>
                                    <li class="breadcrumb-item"><a href="#">Laporan</a></li>
                                    <li class="breadcrumb-item active" aria-current="page">Validasi</li>
                                </ol>
                            </div>
						</div>
						
                        <div class="filterBox">
                            <form method="POST" action="" enctype="multipart/form-data" class="row g-4 p-3">
                                @csrf
                                <div class="col-md-5 me-0">
                                    <label for="TahunAwal" class="form-label">Range PBB</label>
                                    <input type="number"  class="form-control" id="TahunAwal" name="tahun_awal" style="border-top-right-radius: 0; border-bottom-right-radius: 0;">
                                </div>
                                <!-- <div class="col-md-2 g-0 mt-auto ">
                                    <input type="number" class="form-control rounded-0" id="TahunAkhir" name="tahun_akhir">
                                </div> -->
                                <div class="col-md-2 g-0 mt-auto custom-arrow  d-flex justify-content-center ">
                                    <i class='bx bxs-left-arrow-alt arrow-icon mb-1 fs-3'></i>
                                    <span class="text-muted ">to</span>
                                    <i class='bx bxs-right-arrow-alt arrow-icon mb-1 fs-3'></i>
                                </div>
                                <div class="col-md-5 g-0 mt-auto">
                                    <!-- <label for="TahunAkhir" class="form-label"></label> -->
                                    <input type="number" class="form-control" id="TahunAkhir" name="tahun_akhir" style="border-top-left-radius: 0; border-bottom-left-radius: 0;">
                                </div>
                                <div class="col-md-12">
                                    <label for="kd_kec" class="form-label">Is Validate</label>
                                    <!-- <input type="text" class="form-control" id="kd_jenisTransaksi" name="kd_jenisTransaksi" required> -->
                                    <select class="form-select" id="kd_kec" name="KD_KECAMATAN" required>
                                        <option selected disabled value="">Choose...</option>
                                        <option value="1">SUDAH</option>
                                        <option value="2">BELUM</option>
                                    </select>
                                </div>
                                <div class="col-md-12">
                                    <label for="kd_kec" class="form-label">Jenis</label>
                                    <!-- <input type="text" class="form-control" id="kd_jenisTransaksi" name="kd_jenisTransaksi" required> -->
                                    <select class="form-select" id="kd_kec" name="KD_KECAMATAN" required>
                                        <option selected disabled value="">Choose...</option>
                                        <option value="1">PIUTANG KPP</option>
                                        <option value="2">PIUTANG KPP 2013/2015 TIDAK TERCETAK</option>
                                    </select>
                                </div>
                            
                                <div class="col-md-6 d-flex justify-content-end ms-auto">
                                    <button class="btn btn-primary" style="width:150px;">Batal</button>
                                </div>
                                <div class="col-md-6 d-flex justify-content-start me-auto">
                                    <button type="submit" class="btn btn-primary" style="width:150px;">Lihat</button>
                                </div>
                            </form>
                        </div>

                        <div class="dataBox" >
                            <div class="pencarian d-flex justify-content-between align-items-end">
                                <p class="m-0">Menampilkan <b>2</b> data dari total <b>2</b> </p>
                                <div class="tombol">
                                    <a href="{{ route('validasi.assign') }}"><button class="bg-success" type="button">Assign NOP</button></a>
                                    <a href="{{ route('validasi.laporan') }}"><button class="bg-warning" type="button">Laporan</button></a>
                                </div>
                            </div>
                            
                            <div class="dataTable" style="overflow-x: auto;">
                                <table>
                                    <thead>
                                        <tr>
                                            <td>No</td>
                                            <td>Validasi Ke</td>
                                            <td>Kecamatan</td>
                                            <td>Kelurahan</td>
                                            <td>Blok</td>
                                            <td>No Urut</td>
                                            <td>KD</td>
                                            <td>Nama WP SPPT</td>
                                            <td>PBB</td>
                                            <td>Keterangan</td>
                                            <td>Tindak Lanjut</td>
                                            <td>Is Cetak</td>
                                            <td>Is Validated</td>
                                            <td>Kelompok</td>
                                            <td>Kategori</td>
                                            <td>Modified</td>
                                            <td>Opsi</td>
                                        </tr>
                                    </thead>

                                    <tbody>

                                        <tr>
                                            <td>No</td>
                                            <td>Wates</td>
                                            <td>Bendungan</td>
                                            <td>20</td>
                                            <td>20</td>
                                            <td>20</td>
                                            <td>20</td>
                                            <td>20</td>
                                            <td>20</td>
                                            <td>20</td>
                                            <td>20</td>
                                            <td>20</td>
                                            <td>20</td>
                                            <td>20</td>
                                            <td>20</td>
                                            <td>20</td>
                                            <td>
                                                <ul class="list-inline">									
                                                    <li class="list-inline-item"><a href="#" class="active"><i class='bx bxs-show' ></i></a></li>
                                                    <li class="list-inline-item"><a href="#" class="active"><i class='bx bxs-edit' ></i></a></li>
                                                    <li class="list-inline-item"><a href="#" class="active"><i class='bx bxs-trash' ></i></a></li>
                                                </ul>
                                            </td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                            
                        </div>

					</div>
				</div>
			</div>
@endsection