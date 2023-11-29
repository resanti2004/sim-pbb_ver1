@extends('kerangka.master')

@section('title', 'Catatan Pembayaran')

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
							<h3>Catatan Pembayaran</h3>
							<!-- <div aria-label="breadcrumb">
							<ol class="breadcrumb">
								<li class="breadcrumb-item"><a href="#">Beranda</a></li>
								<li class="breadcrumb-item active" aria-current="page">Tunggakan</li>
							</ol>
							</div> -->
                            <div class=" p-0 d-flex align-items-start" style="--bs-breadcrumb-divider: '>';" aria-label="breadcrumb">
                                <ol class="breadcrumb">
                                    <li class="breadcrumb-item"><a href="#">Beranda</a></li>
                                    <li class="breadcrumb-item active" aria-current="page">Tunggakan</li>
                                </ol>
                            </div>
						</div>
						
                        <div class="filterBox">
                            <form method="POST" action="{{ route('provinsi.store') }}" enctype="multipart/form-data" class="row g-4 p-3">
                                @csrf
                                <div class="col-md-6">
                                    <label for="NOP" class="form-label">NOP</label>
                                    <input type="text" class="form-control" id="NOP" name="NOP" data-inputmask="'mask': '99.99.999.999.999.9999.9'">
                                    <script>
                                        $(document).ready(function() {
                                            $('#NOP').inputmask();
                                        });
                                    </script>
                                </div>
                                <div class="col-md-6">
                                    <label for="TanggalRealisasi" class="form-label">Tanggal Awal</label>
                                    <input type="date" class="form-control" id="TanggalRealisasi" name="TGL_REALISASI" value="{{ date('Y').'-12-31' }}">
                                </div>
                                <div class="col-md-6">
                                    <label for="TanggalRealisasi" class="form-label">Tanggal Akhir</label>
                                    <input type="date" class="form-control" id="TanggalRealisasi" name="TGL_REALISASI" value="{{ date('Y').'-12-31' }}">
                                </div>
                                <div class="col-md-12 d-flex ">
                                    <div class="me-2">
                                        <input class="form-check-input border border-primary " type="checkbox" name="baru" id="baru" />
                                    </div>
                                    <label for="baru" class="form-label">Hanya yang belum lunas</label>
                                </div>
                                <div class="col-md-12 d-flex mt-1">
                                    <div class="me-2">
                                        <input class="form-check-input border border-primary" type="checkbox" name="ttd" id="ttd" />
                                    </div>
                                    <label for="ttd" class="form-label">Tanda Tangan</label>
                                </div>
                            
                                <div class="col-md-12 text-center">
                                    <button type="submit" class="btn btn-primary" style="width:200px;">Lihat Tunggakan</button>
                                </div>
                            </form>
                        </div>
					</div>
				</div>
			</div>
@endsection