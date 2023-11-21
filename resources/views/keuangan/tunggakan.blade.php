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
                                    <input type="text" class="form-control" id="NOP" name="NOP" >
                                </div>
                                <div class="col-md-6 ">
                                    <label for="TahunAwal" class="form-label">Tahun Awal</label>
                                    <input type="text" class="form-control" id="TahunAwal" name="TahunAwal" >
                                </div>
                                <div class="col-md-6">
                                    <label for="TahunAkhir" class="form-label">Tahun Akhir</label>
                                    <input type="text" class="form-control" id="TahunAkhir" name="TahunAkhir">
                                </div>
                                <div class="form-check col-md-12">
                                    <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
                                    <label class="form-check-label" for="flexCheckDefault">
                                        Hanya yang belum lunas
                                    </label>
                                </div>
                                <div class="form-check col-md-12">
                                    <input class="form-check-input" type="checkbox" value="" id="flexCheckChecked">
                                    <label class="form-check-label" for="flexCheckChecked">
                                        Tanda tangan
                                    </label>
                                </div>
                            
                                <div class="col-md-12 text-center">
                                    <button type="submit" class="btn btn-primary" style="width:150px;">Lihat Tunggakan</button>
                                </div>
                            </form>
                        </div>
					</div>
				</div>
			</div>
@endsection