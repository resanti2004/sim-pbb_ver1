@extends('kerangka.master')

@section('title', 'Detail Data Pengguna')

@section('content')

			<div class="bgn">
				<h1 class="title">Selamat Datang</h1>
				<p class="greet">Selamat Datang di Sistem Informasi Pajak Bumi Bangunan</p>
			</div>

			<div class="data">
				<div class="box-container">
				<div class="detail">
					<div class="recentOrders">
						<div class="cardHeader">
							<h3>Detail Data Pengguna</h3>
							<!-- <div aria-label="breadcrumb">
							<ol class="breadcrumb">
								<li class="breadcrumb-item"><a href="#">Beranda</a></li>
								<li class="breadcrumb-item"><a href="#">Daerah</a></li>
								<li class="breadcrumb-item"><a href=" {{ route('provinsi.index') }}">Provinsi</a></li>
								<li class="breadcrumb-item active" aria-current="page">Tambah Data Provinsi</li>
							</ol>
							</div> -->
							<div class=" p-0 d-flex align-items-start" style="--bs-breadcrumb-divider: '>';" aria-label="breadcrumb">
                                <ol class="breadcrumb">
                                    <li class="breadcrumb-item"><a href="#">Beranda</a></li>
                                    <li class="breadcrumb-item"><a href="#">Daerah</a></li>
									<li class="breadcrumb-item"><a href=" {{ route('provinsi.index') }}">Pengguna</a></li>
                                    <li class="breadcrumb-item active" aria-current="page">Detail Data Pengguna</li>
                                </ol>
                            </div>
						</div>
						
						<div class="table-detail d-flex flex-column align-items-center justify-content-center">
							<div class="no-detail">
								<b class="fs-3">-- 1 --</b>
							</div>
							<table class="table table-borderless custom-table">
								<tbody>
									<tr class="mb-3">
										<th width="200" class="align-middle table-primary border-bottom border-top-left ">ID</th>
										<td class="border-top-right">12</td>
									</tr>
									<tr class="mb-3">
										<th width="200" class="align-middle table-primary border-bottom">Username</th>
										<td>12</td>
									</tr>
									<tr class="mb-3">
										<th width="200" class="align-middle table-primary border-bottom">Auth Key</th>
										<td>12</td>
									</tr>
									<tr class="mb-3">
										<th width="200" class="align-middle table-primary border-bottom">Password Hash</th>
										<td>12</td>
									</tr>
									<tr class="mb-3">
										<th width="200" class="align-middle table-primary border-bottom">Password Reset Token</th>
										<td>12</td>
									</tr>
									<tr class="mb-3">
										<th width="200" class="align-middle table-primary border-bottom">Email</th>
										<td>12</td>
									</tr>
									<tr class="mb-3">
										<th width="200" class="align-middle table-primary border-bottom">Status</th>
										<td>12</td>
									</tr>
									<tr class="mb-3">
										<th width="200" class="align-middle table-primary border-bottom">Jabatan</th>
										<td>12</td>
									</tr>
									<tr class="mb-3">
										<th width="200" class="align-middle table-primary border-bottom">Role</th>
										<td>12</td>
									</tr>
									<tr class="mb-3">
										<th width="200" class="align-middle table-primary border-bottom">Nama Lengkap</th>
										<td>12</td>
									</tr>
									<tr class="mb-3">
										<th width="200" class="align-middle table-primary border-bottom">NIP</th>
										<td>12</td>
									</tr>
									<tr class="mb-3">
										<th width="200" class="align-middle table-primary border-bottom">Nomor Ponsel</th>
										<td>12</td>
									</tr>
									<tr class="mb-3">
										<th width="200" class="align-middle table-primary border-bottom">Created At</th>
										<td>12</td>
									</tr>
									<tr>
										<th  class="align-middle table-primary border-bottom-left">Updated At</th>
										<td class="border-bottom-right">12</td>
									</tr>
									</tr>
								</tbody>
							</table>
							<div class="tombol d-flex justify-content-center align-items-center gap-2">
								<a href="#"><button type="button">update</button></a>
								<a href="#"><button type="button" class="bg-danger">delete</button></a>
							</div>
						</div>

					</div>
				</div>
			</div>
@endsection