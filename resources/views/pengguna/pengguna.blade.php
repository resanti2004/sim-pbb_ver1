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
				<div class="pencarian d-flex justify-content-between align-items-end">
					<!-- <p class="m-0">Menampilkan <b>{{ $data_users->count() }}</b> data dari total <b>{{ $data_users->total() }}</b> </p> -->
					<a href="{{ route('user.create') }}"><button type="button">+ Buat Baru</button></a>
				</div>

				<table id="example" class="table table-striped" style="width:100%">
					<thead>
						<tr>
							<td width="30px">No</td>
							<td>Username</td>
							<td>Nama Lengkap</td>
							<td width="60px" class="text-center">Opsi</td>
						</tr>
					</thead>
					<tbody>
						@foreach($data_users as $user)
						<tr>
							<td class="text-center">{{ $no++ }}</td>
							<td>{{ $user->username }}</td>
							<td>{{ $user->fullname }}</td>
							<td>
								<ul class="list-inline">
									<li class="list-inline-item"><a href="{{ route('user.show', [
										'user' => $user->id,
										'no' => $no-1
									]) }}" class="active"><i class='bx bx-show'></i></a></li>

									<li class="list-inline-item"><a href="{{ route('user.edit', [
										'user' => $user->id,
									]) }}" class="active"><i class='bx bxs-edit'></i></a></li>
									
									<li class="list-inline-item">
									<form id="deleteForm_{{ $user->id }}" action="{{ route('user.destroy', ['user' => $user->id]) }}" method="POST">
											@csrf
											@method('DELETE')
										</form>

										<a href="#" onclick="deleteConfirmation('{{ $user->id }}')">
											<i class='bx bx-trash'></i>
										</a>

										<script>
											function deleteConfirmation( user_id ) {
												if (confirm('Anda yakin untuk menghapus?')) {
													document.getElementById('deleteForm_' + user_id).submit();
												}
											}
										</script>
									</li>
								</ul>
							</td>
						</tr>
						@endforeach
					</tbody>
				</table>
			</div>
		</div>
	</div>
</div>
@endsection