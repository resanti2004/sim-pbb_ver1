@extends('kerangka.master')
@section('title', 'SPOP')
@section('content')

<div class="bgn">
	<h1 class="title">Selamat Datang, {{ $fullname }}!</h1>
	<p class="greet">Selamat Datang di Sistem Informasi Pajak Bumi Bangunan</p>
</div>

<div class="data">
	<div class="box-container">
		<div class="detail">
			<div class="recentOrders">
				<div class="cardHeader">
					<h3>SPOP</h3>
					<!-- <div aria-label="breadcrumb">
						<ol class="breadcrumb">
							<li class="breadcrumb-item"><a href="#">Beranda</a></li>
							<li class="breadcrumb-item"><a href="#">Laporan</a></li>
							<li class="breadcrumb-item active" aria-current="page">SPOP</li>
						</ol>
					</div> -->
					<div class=" p-0 d-flex align-items-start" style="--bs-breadcrumb-divider: '>';" aria-label="breadcrumb">
						<ol class="breadcrumb">
							<li class="breadcrumb-item"><a href="#">Beranda</a></li>
							<li class="breadcrumb-item"><a href="#">Dokumen</a></li>
							<li class="breadcrumb-item active" aria-current="page">SPOP</li>
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
					<p class="m-0">Menampilkan <b>{{ $data_spop->count() }}</b> data dari total <b>{{ $data_spop->total() }}</b> </p>
					<a href="{{ route('spop.create') }}"><button type="button">Buat Baru</button></a>

				</div>

				<table>
					<thead>
						<tr>
							<td>No</td>
							<td>NOP</td>
							<td>Subjek Pajak ID</td>
							<td>Jalan Objek Pajak</td>
							<td>Luas Bumi</td>
							<td>Opsi</td>
						</tr>
					</thead>

					<tbody>
						@foreach($data_spop as $spop)
						<tr>
							<td>{{ $no++ }}</td>
							<td>{{ $spop->nop }}</td>
							<td>{{ $spop->SUBJEK_PAJAK_ID }}</td>
							<td>{{ $spop->JALAN_OP }}</td>
							<td>{{ $spop->LUAS_BUMI }}</td>
							<td>
								<ul class="list-inline">
									<li class="list-inline-item"><a href="{{ route('spop.show', ['NOP' => $spop->nop]) }}" class="active"><i class='bx bxs-show'></i></a></li>
									<li class="list-inline-item"><a href="{{ route('spop.edit', ['spop' => $spop->nop]) }}" class="active"><i class='bx bxs-edit'></i></a></li>
									<li class="list-inline-item">
										<form id="deleteForm_{{ $spop->KD_PROPINSI }}_{{ $spop->KD_DATI2 }}_{{ $spop->KD_KECAMATAN }}_{{ $spop->KD_KELURAHAN }}_{{ $spop->KD_BLOK }}_{{ $spop->NO_URUT }}_{{ $spop->KD_JNS_OP }}" action="{{ route('spop.destroy', ['spop' => $spop->nop]) }}" method="POST">
											@csrf
											@method('DELETE')
										</form>

										<a href="#" onclick="deleteConfirmation('{{ $spop->KD_PROPINSI }}', '{{ $spop->KD_DATI2 }}', '{{ $spop->KD_KECAMATAN }}', '{{ $spop->KD_KELURAHAN }}', '{{ $spop->KD_BLOK }}', '{{ $spop->NO_URUT }}', '{{ $spop->KD_JNS_OP }}')">
											<i class='bx bxs-trash'></i>
										</a>

										<script>
											function deleteConfirmation(KD_PROPINSI, KD_DATI2, KD_KECAMATAN, KD_KELURAHAN, KD_BLOK, NO_URUT, KD_JNS_OP) {
												if (confirm('Anda yakin untuk menghapus?')) {
													document.getElementById('deleteForm_' + KD_PROPINSI + '_' + KD_DATI2 + '_' + KD_KECAMATAN + '_' + KD_KELURAHAN + '_' + KD_BLOK + '_' + NO_URUT + '_' + KD_JNS_OP).submit();
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
				<div class="d-flex justify-content-center">
					<div class="pagination">
						{{ $data_spop->links() }}
					</div>
				</div>

			</div>
		</div>
	</div>
	@endsection