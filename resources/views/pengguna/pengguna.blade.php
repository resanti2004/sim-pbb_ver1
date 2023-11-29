@extends('kerangka.master')
@section('title', 'Pengguna')
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
					<a href="">
						<h3>Pengguna</h3>
					</a>
					<div aria-label="breadcrumb">
						<ol class="breadcrumb">
							<li class="breadcrumb-item"><a href="#">Beranda</a></li>
							<li class="breadcrumb-item active" aria-current="page">Pengguna</li>
						</ol>
					</div>
				</div>
				<!-- <form action="#">
								<div class="form-group">
									<input type="text" placeholder="Search...">
									<i class='bx bx-search icon' ></i>
								</div>
						</form> -->
				<div class="pencarian">
					<a href="{{ route('user.create') }}"><button type="button">+ Buat Baru</button></a>
				</div>
				<table>
					<thead>
						<tr>
							<td>No</td>
							<td>Username</td>
							<td>Fullname</td>
							<td>Opsi</td>
						</tr>
					</thead>

					<tbody>
						@foreach($data_users as $user)
						<tr>
							<td>{{ $no++ }}</td>
							<td>{{ $user->username }}</td>
							<td>{{ $user->fullname }}</td>
							<td>
								<ul class="list-inline">
									<li class="list-inline-item"><a href="{{ route('user.show', [
										'user' => $user->id,
										'no' => $no-1
									]) }}" class="active"><i class='bx bxs-show'></i></a></li>

									<li class="list-inline-item"><a href="{{ route('user.edit', [
										'user' => $user->id,
										'no' => $no-1
									]) }}" class="active"><i class='bx bxs-edit'></i></a></li>
									
									<li class="list-inline-item"><a href="#" class="active"><i class='bx bxs-trash'></i></a></li>
								</ul>
							</td>
						</tr>
						@endforeach
					</tbody>
				</table>
				<div class="d-flex justify-content-center">
					{{ $data_users->links() }}
				</div>

			</div>
		</div>
	</div>
	@endsection