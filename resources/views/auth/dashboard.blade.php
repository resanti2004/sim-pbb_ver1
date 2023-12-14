@extends('kerangka.master')
@section('title', 'Dashboard')
@section('content')
			<div class="bgn">
				<h1 class="title">Selamat Datang, {{$fullname}}!</h1>
				<p class="greet">Selamat Datang di Sistem Informasi Pajak Bumi Bangunan</p>
			</div>


			<div class="data">
				<div class="box-container">
					<div class="content-data">
						<div class="grafik-harga-tanah">
							<div class="head">
								<h3>Sales Report</h3>
								<div class="menu">
									<i class='bx bx-dots-horizontal-rounded icon'></i>
									<ul class="menu-link">
										<li><a href="#">Edit</a></li>
										<li><a href="#">Save</a></li>
										<li><a href="#">Remove</a></li>
									</ul>
								</div>
							</div>
							<!-- <div class="chart">
								<div id="chart"></div>
							</div> -->
						</div>
					</div>
				</div>
				<div class="info-data">
					<div class="card">
						<div class="head">
							<!-- <div class="progress">
								<svg width='55' height='55'>
									<circle cx='28' cy='28' r='26'></circle>
								</svg>
							</div> -->
							<div>
								<p>Wajib Pajak Terdaftar</p>
								<h2>Rp3.500.000</h2>
							</div>
						</div>
					</div>
					<div class="card">
						<div class="head">
							<!-- <div class="progress">
								<svg width='55' height='55'>
									<circle cx='28' cy='28' r='26'></circle>
								</svg>
							</div> -->
							<div>
								<p>Object Pajak Terdaftar</p>
								<h2>Rp3.500.000</h2>
							</div>
						</div>
					</div>
				</div>
				<div class="box-container3">
					<div class="detail">
						<div class="recentOrders">
							<div class="cardHeader">
								<h3>Daftar Klien</h3>
								<a href="#" class="btn">View All</a>
							</div>

							<table>
								<thead>
									<tr>
										<td>Name</td>
										<td>Alamat</td>
										<td>NOP</td>
										<td>Status</td>
									</tr>
								</thead>

								<tbody>
									<tr>
										<td>Star Refrigerator</td>
										<td>$1200</td>
										<td>Paid</td>
										<td><span class="status delivered">Delivered</span></td>
									</tr>

									<tr>
										<td>Dell Laptop</td>
										<td>$110</td>
										<td>Due</td>
										<td><span class="status pending">Pending</span></td>
									</tr>

									<tr>
										<td>Apple Watch</td>
										<td>$1200</td>
										<td>Paid</td>
										<td><span class="status return">Return</span></td>
									</tr>

									<tr>
										<td>Addidas Shoes</td>
										<td>$620</td>
										<td>Due</td>
										<td><span class="status inProgress">In Progress</span></td>
									</tr>

									<tr>
										<td>Star Refrigerator</td>
										<td>$1200</td>
										<td>Paid</td>
										<td><span class="status delivered">Delivered</span></td>
									</tr>
								</tbody>
							</table>
						</div>
					</div>
				</div>
				<div class="box-container2">
					<div class="content-data">
							<div class="atur-akun">
								<div class="head">
									<h3>Atur Akun Anda</h3>
									<div class="menu">
										<i class='bx bx-dots-horizontal-rounded icon'></i>
										<ul class="menu-link">
											<li><a href="#">Edit</a></li>
											<li><a href="#">Save</a></li>
											<li><a href="#">Remove</a></li>
										</ul>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
@endsection