@extends('kerangka.master')
@section('title', 'SPOP')
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
							<h3>SPOP</h3>
							<a href="#" class="btr">Beranda/Laporan/SPOP</a>
						</div>

						<div class="pencarian">
							<button type="button">Buat Baru</button>
						</div>

						<table>
							<thead>
								<tr>
									<td>No</td>
									<td>NOP</td>
									<td>Nomor Bangunan</td>
									<td>Luas Bangunan(ha)</td>
									<td>Jumlah Lantai Bangunan</td>
									<td>Opsi</td>
								</tr>
							</thead>

							<tbody>
								<tr>
									<td>1</td>
									<td>5172349874904856</td>
									<td>01</td>
									<td>600m</td>
									<td>1</td>
									<td>opsi</td>
									<!-- <td>
										<ul>									
											<li><a href="#" class="active"><i class='bx bxs-trash' ></i></a></li>
											<li><a href="#" class="active"><i class='bx bxs-trash' ></i></a></li>
											<li><a href="#" class="active"><i class='bx bxs-trash' ></i></a></li>
										</ul>
									</td> -->
								</tr>

								<tr>
									<td>2</td>
									<td>5172349874904856</td>
									<td>02</td>
									<td>800m</td>
									<td>2</td>
                                    <td>opsi</td>
								</tr>

								<tr>
									<td>3</td>
									<td>5172349874904856</td>
									<td>03</td>
									<td>700m</td>
									<td>3</td>
                                    <td>opsi</td>
								</tr>

								<tr>
									<td>4</td>
									<td>5172349874904856</td>
									<td>04</td>
									<td>200m</td>
									<td>1</td>
                                    <td>opsi</td>
								</tr>

								<tr>
									<td>5</td>
									<td>5172349874904856</td>
									<td>05</td>
									<td>300m</td>
									<td>2</td>
                                    <td>opsi</td>
								</tr>

								<tr>
									<td>6</td>
									<td>5172349874904856</td>
									<td>06</td>
									<td>600m</td>
									<td>1</td>
                                    <td>opsi</td>
								</tr>
							</tbody>
						</table>

						<div class="container">
							<button class="button" id="startBtn" disabled>
								<i class="fa-solid fa-angles-left"></i>
							</button>
							<button class="button prevNext" id="prev" disabled>
								<i class="fa-solid fa-angle-left"></i>
							</button>

							<div class="links">
								<a href="#" class="link active">1</a>
								<a href="#" class="link">2</a>
								<a href="#" class="link">3</a>
								<a href="#" class="link">4</a>
								<a href="#" class="link">5</a>
							</div>

							<button class="button prevNext" id="next">
								<i class="fa-solid fa-angle-right"></i>
							</button>
							<button class="button" id="endBtn">
								<i class="fa-solid fa-angles-right"></i>
							</button>
						</div>
					</div>
				</div>
			</div>
@endsection