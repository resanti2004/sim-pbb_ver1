@extends('kerangka.master')
@section('title', 'Detail Data SPOP')
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
							<h3>Detail Data SPOP</h3>
                            <div class=" p-0 d-flex align-items-start" style="--bs-breadcrumb-divider: '>';" aria-label="breadcrumb">
                                <ol class="breadcrumb">
                                    <li class="breadcrumb-item"><a href="#">Beranda</a></li>
                                    <li class="breadcrumb-item"><a href="#">Laporan</a></li>
                                    <li class="breadcrumb-item"><a href="{{ route('spop.index') }}">SPOP</a></li>
                                    <li class="breadcrumb-item active" aria-current="page">Detail Data SPOP</li>
                                </ol>
                            </div>
						</div>

                        <div class="no-detail d-flex justify-content-center">
								<b class="fs-3">-- 1 --</b>
							</div>

                        <div class="BoxUtama">
                            <div class="Box1">
                                <form method="POST" action="{{ route('provinsi.store') }}" enctype="multipart/form-data" class="row g-4 p-3">
                                    @csrf
                                    <div class="col-md-12 d-flex justify-content-center">
                                        <b>DETAIL</b>
                                    </div>

                                    <div class="col-md-12">
                                        <label for="kd_prov" class="form-label">Kode Provinsi</label>
                                        <input type="text" class="form-control" id="kd_prov" name="kd_prov" >
                                    </div>
                                    <div class="col-md-12">
                                        <label for="kd_dati" class="form-label">Kode Dati 2</label>
                                        <input type="text" class="form-control" id="kd_dati" name="kd_dati" >
                                    </div>
                                    <div class="col-md-12">
                                        <label for="kd_kec" class="form-label">Kode Kecamatan</label>
                                        <input type="text" class="form-control" id="kd_kec" name="kd_kec" >
                                    </div>
                                    <div class="col-md-12">
                                        <label for="kd_kel" class="form-label">Kode Kelurahan</label>
                                        <input type="text" class="form-control" id="kd_kel" name="kd_kel" >
                                    </div>
                                    <div class="col-md-12">
                                        <label for="kd_blok" class="form-label">Kode Blok</label>
                                        <input type="text" class="form-control" id="kd_blok" name="kd_blok" >
                                    </div>
                                    <div class="col-md-12">
                                        <label for="no_urut" class="form-label">No Urut</label>
                                        <input type="text" class="form-control" id="no_urut" name="no_urut" >
                                    </div>
                                    <div class="col-md-12">
                                        <label for="kd_jenisOp" class="form-label">Kode Jenis Op</label>
                                        <input type="text" class="form-control" id="kd_jenis" name="kd_jenis" >
                                    </div>
                                    <div class="col-md-12">
                                        <label for="kd_jenisTransaksi" class="form-label">Jenis Transaksi Op</label>
                                        <input type="text" class="form-control" id="kd_jenisTransaksi" name="kd_jenisTransaksi" >
                                    </div>
                                    <div class="col-md-12">
                                        <label for="no_spptLama" class="form-label">No Sppt Lama</label>
                                        <input type="text" class="form-control" id="no_spptLama" name="no_spptLama" >
                                    </div>
                                    <div class="col-md-12">
                                        <label for="sbj_pajak" class="form-label">Subjek Pajak ID</label>
                                        <input type="text" class="form-control" id="sbj_pajak" name="sbj_pajak" >
                                    </div>
                                </form>
                            </div>
                            <div class="Box2">
                                <form method="POST" action="{{ route('provinsi.store') }}" enctype="multipart/form-data" class="row g-4 p-3">
                                    @csrf
                                    <div class="col-md-12 d-flex justify-content-center">
                                        <b>DATA LETAK OBJEK PAJAK</b>
                                    </div>

                                    <div class="col-md-12 ">
                                        <label for="NOP" class="form-label">NOP</label>
                                        <input type="text" class="form-control" id="NOP" name="NOP" >
                                    </div>
                                    <div class="col-md-12">
                                        <label for="NoPelayanan" class="form-label">No Pelayanan</label>
                                        <input type="text" class="form-control" id="NoPelayanan" name="NoPelayanan">
                                    </div>
                                    <div class="col-md-12">
                                        <label for="Tahun" class="form-label">Tahun</label>
                                        <input type="text" class="form-control" id="Tahun" name="Tahun" >
                                    </div>
                                    <div class="col-md-12 ">
                                        <label for="NOP" class="form-label">NOP</label>
                                        <input type="text" class="form-control" id="NOP" name="NOP" >
                                    </div>
                                    <div class="col-md-12">
                                        <label for="NoPelayanan" class="form-label">No Pelayanan</label>
                                        <input type="text" class="form-control" id="NoPelayanan" name="NoPelayanan">
                                    </div>
                                    <div class="col-md-12">
                                        <label for="Tahun" class="form-label">Tahun</label>
                                        <input type="text" class="form-control" id="Tahun" name="Tahun" >
                                    </div>
                                    <div class="col-md-12 ">
                                        <label for="NOP" class="form-label">NOP</label>
                                        <input type="text" class="form-control" id="NOP" name="NOP" >
                                    </div>
                                    <div class="col-md-12">
                                        <label for="NoPelayanan" class="form-label">No Pelayanan</label>
                                        <input type="text" class="form-control" id="NoPelayanan" name="NoPelayanan">
                                    </div>
                                    <div class="col-md-12">
                                        <label for="Tahun" class="form-label">Tahun</label>
                                        <input type="text" class="form-control" id="Tahun" name="Tahun" >
                                    </div>
                                    <div class="col-md-12">
                                        <label for="Tahun" class="form-label">Tahun</label>
                                        <input type="text" class="form-control" id="Tahun" name="Tahun" >
                                    </div>
                                </form>
                            </div>
                            <div class="Box3">
                                <form method="POST" action="{{ route('provinsi.store') }}" enctype="multipart/form-data" class="row g-4 p-3">
                                    @csrf
                                    <div class="col-md-12 d-flex justify-content-center">
                                        <b>DATA BERSAMA</b>
                                    </div>

                                    <div class="col-md-12 ">
                                        <label for="NOP" class="form-label">NOP</label>
                                        <input type="text" class="form-control" id="NOP" name="NOP" >
                                    </div>
                                    <div class="col-md-12">
                                        <label for="NoPelayanan" class="form-label">No Pelayanan</label>
                                        <input type="text" class="form-control" id="NoPelayanan" name="NoPelayanan">
                                    </div>
                                    <div class="col-md-12">
                                        <label for="Tahun" class="form-label">Tahun</label>
                                        <input type="text" class="form-control" id="Tahun" name="Tahun" >
                                    </div>
                                    <div class="col-md-12 ">
                                        <label for="NOP" class="form-label">NOP</label>
                                        <input type="text" class="form-control" id="NOP" name="NOP" >
                                    </div>
                                    <div class="col-md-12">
                                        <label for="NoPelayanan" class="form-label">No Pelayanan</label>
                                        <input type="text" class="form-control" id="NoPelayanan" name="NoPelayanan">
                                    </div>
                                    <div class="col-md-12">
                                        <label for="Tahun" class="form-label">Tahun</label>
                                        <input type="text" class="form-control" id="Tahun" name="Tahun" >
                                    </div>
                                    <div class="col-md-12">
                                        <label for="Tahun" class="form-label">Tahun</label>
                                        <input type="text" class="form-control" id="Tahun" name="Tahun" >
                                    </div>
                                </form>
                            </div>
                        </div>

                        <div class="BoxUtama">
                            <div class="Box1">
                                <form method="POST" action="{{ route('provinsi.store') }}" enctype="multipart/form-data" class="row g-4 p-3">
                                    @csrf
                                    <div class="col-md-12 d-flex justify-content-center">
                                        <b>DATA ASAL</b>
                                    </div>

                                    <div class="col-md-12 ">
                                        <label for="NOP" class="form-label">NOP</label>
                                        <input type="text" class="form-control" id="NOP" name="NOP" >
                                    </div>
                                    <div class="col-md-12">
                                        <label for="NoPelayanan" class="form-label">No Pelayanan</label>
                                        <input type="text" class="form-control" id="NoPelayanan" name="NoPelayanan">
                                    </div>
                                    <div class="col-md-12">
                                        <label for="Tahun" class="form-label">Tahun</label>
                                        <input type="text" class="form-control" id="Tahun" name="Tahun" >
                                    </div>
                                    <div class="col-md-12 ">
                                        <label for="NOP" class="form-label">NOP</label>
                                        <input type="text" class="form-control" id="NOP" name="NOP" >
                                    </div>
                                    <div class="col-md-12">
                                        <label for="NoPelayanan" class="form-label">No Pelayanan</label>
                                        <input type="text" class="form-control" id="NoPelayanan" name="NoPelayanan">
                                    </div>
                                    <div class="col-md-12">
                                        <label for="Tahun" class="form-label">Tahun</label>
                                        <input type="text" class="form-control" id="Tahun" name="Tahun" >
                                    </div>
                                    <div class="col-md-12 ">
                                        <label for="NOP" class="form-label">NOP</label>
                                        <input type="text" class="form-control" id="NOP" name="NOP" >
                                    </div>
                                </form>
                            </div>
                            <div class="Box2">
                                <form method="POST" action="{{ route('provinsi.store') }}" enctype="multipart/form-data" class="row g-4 p-3">
                                    @csrf
                                    <div class="col-md-12 d-flex justify-content-center">
                                        <b>DETAIL PENDATAAN OP</b>
                                    </div>

                                    <div class="col-md-12 ">
                                        <label for="NOP" class="form-label">NOP</label>
                                        <input type="text" class="form-control" id="NOP" name="NOP" >
                                    </div>
                                    <div class="col-md-12">
                                        <label for="NoPelayanan" class="form-label">No Pelayanan</label>
                                        <input type="text" class="form-control" id="NoPelayanan" name="NoPelayanan">
                                    </div>
                                    <div class="col-md-12">
                                        <label for="Tahun" class="form-label">Tahun</label>
                                        <input type="text" class="form-control" id="Tahun" name="Tahun" >
                                    </div>
                                </form>
                            </div>
                            <div class="Box3">
                                <form method="POST" action="{{ route('provinsi.store') }}" enctype="multipart/form-data" class="row g-4 p-3">
                                    @csrf
                                    <div class="col-md-12 d-flex justify-content-center">
                                        <b>DETAIL PEMERIKSAAN OP</b>
                                    </div>

                                    <div class="col-md-12 ">
                                        <label for="NOP" class="form-label">NOP</label>
                                        <input type="text" class="form-control" id="NOP" name="NOP" >
                                    </div>
                                    <div class="col-md-12">
                                        <label for="NoPelayanan" class="form-label">No Pelayanan</label>
                                        <input type="text" class="form-control" id="NoPelayanan" name="NoPelayanan">
                                    </div>
                                    <div class="col-md-12">
                                        <label for="Tahun" class="form-label">Tahun</label>
                                        <input type="text" class="form-control" id="Tahun" name="Tahun" >
                                    </div>
                                    <div class="col-md-12 ">
                                        <label for="NOP" class="form-label">NOP</label>
                                        <input type="text" class="form-control" id="NOP" name="NOP" >
                                    </div>
                                </form>
                            </div>
                        </div>
						
                        <div class="tombol d-flex justify-content-center align-items-center gap-2">
								<a href="#"><button type="button">Update</button></a>
								<a href="#"><button type="button" class="bg-danger">Delete</button></a>
						</div>

					</div>
				</div>
			</div>
@endsection