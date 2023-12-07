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
                                    <button class="btn btn-secondary" style="width:150px;">Batal</button>
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
                                            <td width="50px">No</td>
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
                                            <td width="100px">Opsi</td>
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
                                                    <li class="list-inline-item"><a class="active" id="showModalButton"><i class='bx bx-show' ></i></a></li>
                                                    <li class="list-inline-item"><a href="#" class="active" id="delete"><i class='bx bx-trash' ></i></a></li>
                                                    <li class="list-inline-item"><a href="#" class="active" id="info"><i class='bx bxs-printer' ></i></a></li>
                                                </ul>

                                                <div class="modal fade " id="staticBackdrop" aria-hidden="true" aria-labelledby="staticBackdropLabel" tabindex="-1" data-bs-backdrop="static" data-bs-keyboard="false">
                                                <div class="modal-dialog modal-dialog-centered">
                                                    <div class="modal-content">
                                                    <div class="modal-header">
                                                        <h5 class="modal-title fs-5" id="staticBackdropLabel">Detail Data</h5>
                                                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                                    </div>
                                                    <div class="modal-body">
                                                        <div class="no-detail text-center mb-3">
                                                            <b class="fs-5 ">-- 1 --</b>
                                                        </div>
                                                        <table class="table table-striped table-hover table-bordered">
                                                            <tbody>
                                                                <tr>
                                                                    <th scope="row" class="align-middle">PR</th>
                                                                    <td class="align-middle">Mark</td>
                                                                </tr>
                                                                <tr>
                                                                    <th scope="row" class="align-middle">DT</th>
                                                                    <td class="align-middle">Jacob</td>
                                                                </tr>
                                                                <tr>
                                                                    <th scope="row" class="align-middle">KECAMATAN</th>
                                                                    <td class="align-middle">Larry the Bird</td>
                                                                </tr>
                                                                <tr>
                                                                    <th scope="row" class="align-middle">KELURAHAN</th>
                                                                    <td class="align-middle">Mark</td>
                                                                </tr>
                                                                <tr>
                                                                    <th scope="row" class="align-middle">BLOK</th>
                                                                    <td class="align-middle">Jacob</td>
                                                                </tr>
                                                                <tr>
                                                                    <th scope="row" class="align-middle">NO URUT</th>
                                                                    <td class="align-middle">Larry the Bird</td>
                                                                </tr>
                                                                <tr>
                                                                    <th scope="row" class="align-middle">KD</th>
                                                                    <td class="align-middle">Mark</td>
                                                                </tr>
                                                                <tr>
                                                                    <th scope="row" class="align-middle">Keterangan</th>
                                                                    <td class="align-middle">Jacondjfndjfndjdnkgdsngkdfjn</td>
                                                                </tr>
                                                                <tr>
                                                                    <th scope="row" class="align-middle">Is Cetak</th>
                                                                    <td class="align-middle">Larry the Bird</td>
                                                                </tr>
                                                                <tr>
                                                                    <th scope="row" class="align-middle">Is Validated</th>
                                                                    <td class="align-middle">Larry the Bird</td>
                                                                </tr>
                                                                <tr>
                                                                    <th scope="row" class="align-middle">Kelompok</th>
                                                                    <td class="align-middle">Larry the Bird</td>
                                                                </tr>
                                                                <tr>
                                                                    <th scope="row" class="align-middle">Modified</th>
                                                                    <td class="align-middle">Larry the Bird</td>
                                                                </tr>
                                                            </tbody>
                                                        </table>
                                                    </div>
                                                    <div class="modal-footer">
                                                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                                                        <button type="button" class="btn btn-primary" id="editButton">Edit</button>
                                                    </div>
                                                    </div>
                                                </div>
                                                </div>

                                                <div class="modal fade" id="staticBackdrop2" aria-hidden="true" aria-labelledby="staticBackdropLabel2" tabindex="-1" data-bs-backdrop="static" data-bs-keyboard="false">
                                                <div class="modal-dialog modal-dialog-centered">
                                                    <div class="modal-content">
                                                    <div class="modal-header">
                                                        <h1 class="modal-title fs-5" id="staticBackdropLabel2">Edit Data</h1>
                                                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                                    </div>
                                                    <div class="modal-body">
                                                        <form method="POST" action="" enctype="multipart/form-data" class="row g-4 p-1 needs-validation" novalidate>
                                                            @csrf
                                                            @method('PUT')
                                                            <div class="col-md-6">
                                                                <label for="username" class="form-label">PR</label>
                                                                <input type="text" class="form-control" id="username" name="username" value="">
                                                                <div class="invalid-feedback">
                                                                    Isi kolom ini terlebih dahulu!
                                                                </div>
                                                            </div>
                                                            <div class="col-md-6">
                                                                <label for="fullname" class="form-label">DT</label>
                                                                <input type="text" class="form-control" id="fullname" name="fullname" value="">
                                                                <div class="invalid-feedback">
                                                                    Isi kolom ini terlebih dahulu!
                                                                </div>
                                                            </div>
                                                            <div class="col-md-6">
                                                                <label for="email" class="form-label">KECAMATAN</label>
                                                                <input type="text" class="form-control" id="email" name="email" value="" >
                                                                <div class="invalid-feedback">
                                                                    Isi kolom ini terlebih dahulu!
                                                                </div>
                                                            </div>
                                                            <div class="col-md-6">
                                                                <label for="status" class="form-label">KELURAHAN</label>
                                                                <input type="text" class="form-control" id="status" name="status" value="">
                                                                <div class="invalid-feedback">
                                                                    Isi kolom ini terlebih dahulu!
                                                                </div>
                                                            </div>
                                                            <div class="col-md-6">
                                                                <label for="jabatan" class="form-label">BLOK</label>
                                                                <input type="text" class="form-control" id="jabatan" name="jabatan" value="">
                                                                <div class="invalid-feedback">
                                                                    Isi kolom ini terlebih dahulu!
                                                                </div>
                                                            </div>
                                                            <div class="col-md-6">
                                                                <label for="role" class="form-label">NO URUT</label>
                                                                <input type="text" class="form-control" id="role" name="role" value="">
                                                                <div class="invalid-feedback">
                                                                    Isi kolom ini terlebih dahulu!
                                                                </div>
                                                            </div>
                                                            <div class="col-md-6">
                                                                <label for="nip" class="form-label">KD</label>
                                                                <input type="text" class="form-control" id="nip" name="nip" value="">
                                                                <div class="invalid-feedback">
                                                                    Isi kolom ini terlebih dahulu!
                                                                </div>
                                                            </div>
                                                            <div class="col-md-6">
                                                                <label for="nomorponsel" class="form-label">Keterangan</label>
                                                                <input type="text" class="form-control" id="nomorponsel" name="nomor_ponsel" value="">
                                                                <div class="invalid-feedback">
                                                                    Isi kolom ini terlebih dahulu!
                                                                </div>
                                                            </div>
                                                            <div class="col-md-6">
                                                                <label for="nomorponsel" class="form-label">Is Cetak</label>
                                                                <input type="text" class="form-control" id="nomorponsel" name="nomor_ponsel" value="">
                                                                <div class="invalid-feedback">
                                                                    Isi kolom ini terlebih dahulu!
                                                                </div>
                                                            </div>
                                                            <div class="col-md-6">
                                                                <label for="nomorponsel" class="form-label">Is Validated</label>
                                                                <input type="text" class="form-control" id="nomorponsel" name="nomor_ponsel" value="">
                                                                <div class="invalid-feedback">
                                                                    Isi kolom ini terlebih dahulu!
                                                                </div>
                                                            </div>
                                                            <div class="col-md-6">
                                                                <label for="nomorponsel" class="form-label">Kelompok</label>
                                                                <input type="text" class="form-control" id="nomorponsel" name="nomor_ponsel" value="">
                                                                <div class="invalid-feedback">
                                                                    Isi kolom ini terlebih dahulu!
                                                                </div>
                                                            </div>
                                                            <div class="col-md-6">
                                                                <label for="nomorponsel" class="form-label">Modified</label>
                                                                <input type="text" class="form-control" id="nomorponsel" name="nomor_ponsel" value="">
                                                                <div class="invalid-feedback">
                                                                    Isi kolom ini terlebih dahulu!
                                                                </div>
                                                            </div>
                                                        </form>
                                                    </div>
                                                    <div class="modal-footer">
                                                        <button class="btn btn-secondary" id="cancelButton">Cancel</button>
                                                        <button type="button" class="btn btn-primary" id="editButton">Simpan</button>
                                                    </div>
                                                    </div>
                                                </div>
                                                </div>
                                            </td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                            
                        </div>

					</div>
				</div>
			</div>

            <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js"></script>
            <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js"></script>

            <script>
                // Mendeklarasikan variabel global untuk modal
                var staticBackdrop = new bootstrap.Modal(document.getElementById('staticBackdrop'));
                var staticBackdrop2 = new bootstrap.Modal(document.getElementById('staticBackdrop2'));

                document.addEventListener('DOMContentLoaded', function () {
                    // Mengaktifkan modal saat ikon "Show" diklik
                    document.getElementById('showModalButton').addEventListener('click', function () {
                        staticBackdrop.show();
                    });

                    // Menambahkan event listener untuk tombol "Edit" pada modal staticBackdrop
                    document.getElementById('editButton').addEventListener('click', function () {
                        // Menyembunyikan modal staticBackdrop
                        staticBackdrop.hide();
                        
                        // Menampilkan modal staticBackdrop2
                        staticBackdrop2.show();
                    });

                    // Menambahkan event listener untuk tombol "Cancel" pada modal staticBackdrop2
                    document.getElementById('cancelButton').addEventListener('click', function () {
                        // Menyembunyikan modal staticBackdrop2
                        staticBackdrop2.hide();
                        
                        // Menampilkan kembali modal staticBackdrop
                        staticBackdrop.show();
                    });
                });
            </script>
@endsection