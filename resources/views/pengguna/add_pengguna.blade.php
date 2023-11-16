@extends('kerangka.master')

@section('title', 'Tambah Data Provinsi')

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
							<h3>Tambah Data Pengguna</h3>
							<div aria-label="breadcrumb">
							<ol class="breadcrumb">
								<li class="breadcrumb-item"><a href="#">Beranda</a></li>
								<li class="breadcrumb-item"><a href="#">Pengguna</a></li>
								<li class="breadcrumb-item active" aria-current="page">Tambah Data Pengguna</li>
							</ol>
							</div>
						</div>
						
                        <form method="POST" action="{{ route('provinsi.store') }}" enctype="multipart/form-data" class="row g-4 p-5">
							@csrf
                            <div class="col-md-6">
                                <label for="username" class="form-label">Username</label>
                                <input type="text" class="form-control" id="username" name="username" >
                            </div>
                            <div class="col-md-6">
                                <label for="fullname" class="form-label">Fullname</label>
                                <input type="text" class="form-control" id="fullname" name="fullname">
                            </div>

                            <div class="col-md-12 text-center">
                                <button type="submit" class="btn btn-primary" style="width:150px;">Tambah</button>
                            </div>
                        </form>

					</div>
				</div>
			</div>
@endsection