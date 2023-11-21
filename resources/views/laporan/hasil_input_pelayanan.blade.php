@extends('kerangka.master')

@section('title', 'Hasil Input Pelayanan')

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
							<h3>Hasil Input Pelayanan</h3>
							<!-- <div aria-label="breadcrumb">
							<ol class="breadcrumb">
								<li class="breadcrumb-item"><a href="#">Beranda</a></li>
								<li class="breadcrumb-item"><a href="#">Laporan</a></li>
								<li class="breadcrumb-item active" aria-current="page">Hasil Input Pelayanan</li>
							</ol>
							</div> -->
                            <div class=" p-0 d-flex align-items-start" style="--bs-breadcrumb-divider: '>';" aria-label="breadcrumb">
                                <ol class="breadcrumb">
                                    <li class="breadcrumb-item"><a href="#">Beranda</a></li>
                                    <li class="breadcrumb-item"><a href="#">Laporan</a></li>
                                    <li class="breadcrumb-item active" aria-current="page">Hasil Input Pelayanan</li>
                                </ol>
                            </div>
						</div>
						
                        <div class="filterBox">
                            <form method="POST" action="{{ route('provinsi.store') }}" enctype="multipart/form-data" class="row g-4 p-3">
                                @csrf
                                <div class="col-md-6 ">
                                    <label for="NOP" class="form-label">NOP</label>
                                    <input type="text" class="form-control" id="NOP" name="NOP" >
                                </div>
                                <div class="col-md-6">
                                    <label for="NoPelayanan" class="form-label">No Pelayanan</label>
                                    <input type="text" class="form-control" id="NoPelayanan" name="NoPelayanan">
                                </div>
                                <div class="col-md-12">
                                    <label for="Tahun" class="form-label">Tahun</label>
                                    <input type="text" class="form-control" id="Tahun" name="Tahun" >
                                </div>
                            
                                <div class="col-md-6 d-flex justify-content-end ms-auto">
                                    <button type="submit" class="btn btn-primary" style="width:150px;">Batal</button>
                                </div>
                                <div class="col-md-6 d-flex justify-content-start me-auto">
                                    <button type="submit" class="btn btn-primary" style="width:150px;">Lihat</button>
                                </div>
                            </form>
                        </div>

                        <div class="dataBox" style="overflow-x: auto;">

                        <div class="pencarian d-flex justify-content-between align-items-end">
							<p class="m-0">Menampilkan <b>2</b> data dari total <b>2</b> </p>
							<button type="button">Cetak</button>
						</div>

                            <table>
                                <thead>
                                    <tr>
                                        <td>No</td>
                                        <td>Kecamatan</td>
                                        <td>Kelurahan</td>
                                        <td>Pokok</td>
                                        <td>Pokok Dibayar</td>
                                        <td>Denda Dibayar</td>
                                        <td>Total Dibayar</td>
                                        <td>Kurang Bayar</td>
                                        <td>Lebih Banyak</td>
                                        <td>%</td>
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
                            <!-- <div class="d-flex justify-content-center">
                               
                            </div> -->
                        </div>

					</div>
				</div>
			</div>
@endsection