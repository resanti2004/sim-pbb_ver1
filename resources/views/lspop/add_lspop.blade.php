@extends('kerangka.master')

@section('title', 'Tambah Data LSPOP')

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
                    <h3>Tambah Data LSPOP</h3>
                    <!-- <div aria-label="breadcrumb">
							<ol class="breadcrumb">
								<li class="breadcrumb-item"><a href="#">Beranda</a></li>
								<li class="breadcrumb-item"><a href="#">Dokumen</a></li>
								<li class="breadcrumb-item"><a href="{{ route('kelurahan.index') }}">LSPOP</a></li>
								<li class="breadcrumb-item active" aria-current="page">Tambah Data LSPOP</li>
							</ol>
							</div> -->
                    <div class=" p-0 d-flex align-items-start" style="--bs-breadcrumb-divider: '>';" aria-label="breadcrumb">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="#">Beranda</a></li>
                            <li class="breadcrumb-item"><a href="#">Laporan</a></li>
                            <li class="breadcrumb-item"><a href="{{ route('lspop.index') }}">LSPOP</a></li>
                            <li class="breadcrumb-item active" aria-current="page">Tambah Data LSPOP</li>
                        </ol>
                    </div>
                </div>

                <form id="addlspop" method="POST" action="{{ route('lspop.store') }}" enctype="multipart/form-data" class="row g-4 p-5 needs-validation" novalidate>
                    @csrf
                    <div class="row m-5 ">
                            <div class="col-md-4 ">
                                <div class="col-md-12">
                                    <label for="KodeProvinsi" class="form-label">Kode Provinsi</label>
                                    <input type="text" class="form-control @error('KodeProvinsi') is-invalid @enderror" id="KodeProvinsi" name="KD_PROPINSI" value="51" required disabled>
                                    @error('KodeProvinsi')
                                    <div class="invalid-feedback">
                                        {{ $message }}
                                    </div>
                                    @enderror
                                </div>
                                <div class="col-md-12">
                                    <label for="KodeDati2" class="form-label">Kode Dati 2</label>
                                    <input type="text" class="form-control @error('KodeDati2') is-invalid @enderror" id="KodeDati2" name="KD_DATI2" value="71" required disabled>
                                    @error('KodeDati2')
                                    <div class="invalid-feedback">
                                        {{ $message }}
                                    </div>
                                    @enderror
                                </div>
                                <div class="col-md-12">
                                    <label for="KodeKecamatan" class="form-label">Kode Kecamatan</label>
                                    <!-- <input type="text" class="form-control @error('KodeKecamatan') is-invalid @enderror" id="KodeKecamatan" name="KodeKecamatan" required> -->
                                    <select class="form-select" id="KodeKecamatan" name="KD_KECAMATAN" required>
                                            <option value="1">PEMILIK</option>
                                            <option value="2">PENYEWA</option>
                                            <option value="3">PENGELOLA</option>
                                            <option value="4">PEMAKAI</option>
                                            <option value="5">SENGKETA</option>
                                        </select>
                                    @error('KodeKecamatan')
                                    <div class="invalid-feedback">
                                        {{ $message }}
                                    </div>
                                    @enderror
                                </div>
                                <div class="col-md-12">
                                    <label for="KodeKelurahan" class="form-label">Kode Kelurahan</label>
                                    <!-- <input type="text" class="form-control @error('KodeKelurahan') is-invalid @enderror" id="KodeKelurahan" name="KodeKelurahan" required> -->
                                    <select class="form-select" id="KodeKelurahan" name="KD_KELURAHAN" required disabled>
                                            <option value="1">PEMILIK</option>
                                            <option value="2">PENYEWA</option>
                                            <option value="3">PENGELOLA</option>
                                            <option value="4">PEMAKAI</option>
                                            <option value="5">SENGKETA</option>
                                        </select>
                                    @error('KodeKelurahan')
                                    <div class="invalid-feedback">
                                        {{ $message }}
                                    </div>
                                    @enderror
                                </div>
                                <div class="col-md-12">
                                    <label for="KodeBlok" class="form-label">Kode Blok</label>
                                    <!-- <input type="text" class="form-control @error('KodeBlok') is-invalid @enderror" id="KodeBlok" name="KodeBlok" required> -->
                                    <select class="form-select" id="KodeBlok" name="KD_BLOK" required disabled>
                                            <option value="1">PEMILIK</option>
                                            <option value="2">PENYEWA</option>
                                            <option value="3">PENGELOLA</option>
                                            <option value="4">PEMAKAI</option>
                                            <option value="5">SENGKETA</option>
                                        </select>
                                    @error('KodeBlok')
                                    <div class="invalid-feedback">
                                        {{ $message }}
                                    </div>
                                    @enderror
                                </div>
                                <div class="col-md-12">
                                    <label for="NoUrut" class="form-label">No Urut</label>
                                    <input type="text" class="form-control @error('NoUrut') is-invalid @enderror" id="NoUrut" name="NO_URUT" required>
                                    @error('NoUrut')
                                    <div class="invalid-feedback">
                                        {{ $message }}
                                    </div>
                                    @enderror
                                </div>
                                <div class="col-md-12">
                                    <label for="KodeJenisOp" class="form-label">Kode Jenis Op</label>
                                    <input type="text" class="form-control @error('KodeJenisOp') is-invalid @enderror" id="KodeJenisOp" name="KD_JNS_OP" value="0" required>
                                    @error('KodeJenisOp')
                                    <div class="invalid-feedback">
                                        {{ $message }}
                                    </div>
                                    @enderror
                                </div>
                                <div class="col-md-12">
                                    <label for="JenisTransaksiBangunan" class="form-label">Jenis Transaksi Bangunan</label>
                                    <!-- <input type="text" class="form-control @error('JenisTransaksiKelurahan') is-invalid @enderror" id="JenisTransaksiKelurahan" name="JenisTransaksiKelurahan" required> -->
                                    <select class="form-select" id="JenisTransaksiBangungan" name="JNS_TRANSAKSI_BNG" required>
                                            <option value="1">PEMILIK</option>
                                            <option value="2">PENYEWA</option>
                                            <option value="3">PENGELOLA</option>
                                            <option value="4">PEMAKAI</option>
                                            <option value="5">SENGKETA</option>
                                        </select>
                                    @error('JenisTransaksiKelurahan')
                                    <div class="invalid-feedback">
                                        {{ $message }}
                                    </div>
                                    @enderror
                                </div>
                            </div>

                            <div class="col-md-4">
                                <div class="col-md-12">
                                    <label for="NoBangunan" class="form-label">No Bangunan</label>
                                    <input type="text" class="form-control @error('NoBangunan') is-invalid @enderror" id="NoBangunan" name="NO_BNG" value="1" required>
                                    @error('NoBangunan')
                                    <div class="invalid-feedback">
                                        {{ $message }}
                                    </div>
                                    @enderror
                                </div>
                                <div class="col-md-12">
                                    <label for="NoFormulirLspop" class="form-label">No Formulir Lspop</label>
                                    <input type="text" class="form-control @error('NoFormulirLspop') is-invalid @enderror" id="NoFormulirLspop" name="NO_FORMULIR_LSPOP" required>
                                    @error('NoFormulirLspop')
                                    <div class="invalid-feedback">
                                        {{ $message }}
                                    </div>
                                    @enderror
                                </div>
                            </div>

                            <div class="col-md-4">

                            </div>

                            <div class="col-md-4 mt-5">
                                <div class="col-md-12">
                                    <label for="KodeJpb" class="form-label">Kode Jpb</label>
                                    <!-- <input type="text" class="form-control @error('KodeJpb') is-invalid @enderror" id="KodeJpb" name="KodeJpb" required> -->
                                    <select class="form-select" id="KodeJpb" name="KD_JPB" required>
                                            <option value="1">PEMILIK</option>
                                            <option value="2">PENYEWA</option>
                                            <option value="3">PENGELOLA</option>
                                            <option value="4">PEMAKAI</option>
                                            <option value="5">SENGKETA</option>
                                        </select>
                                    @error('KodeJpb')
                                    <div class="invalid-feedback">
                                        {{ $message }}
                                    </div>
                                    @enderror
                                </div>
                                <div class="col-md-12">
                                    <label for="TahunDibangunBangunan" class="form-label">Tahun Dibangun Bangunan</label>
                                    <input type="text" class="form-control @error('TahunDibangunBangunan') is-invalid @enderror" id="TahunDibangunBangunan" name="THN_DIBANGUN_BNG" required>
                                    @error('TahunDibangunBangunan')
                                    <div class="invalid-feedback">
                                        {{ $message }}
                                    </div>
                                    @enderror
                                </div>
                                <div class="col-md-12">
                                    <label for="TahunRenovasiBangunan" class="form-label">Tahun Renovasi Bangunan</label>
                                    <input type="text" class="form-control @error('TahunRenovasiBangunan') is-invalid @enderror" id="TahunRenovasiBangunan" name="TahunRenovasiBangunan" required>
                                    @error('TahunRenovasiBangunan')
                                    <div class="invalid-feedback">
                                        {{ $message }}
                                    </div>
                                    @enderror
                                </div>
                                <div class="col-md-12">
                                    <label for="LuasBangunan" class="form-label">Luas Bangunan</label>
                                    <input type="text" class="form-control @error('LuasBangunan') is-invalid @enderror" id="LuasBangunan" name="LUAS_BNG" value="0" required>
                                    @error('LuasBangunan')
                                    <div class="invalid-feedback">
                                        {{ $message }}
                                    </div>
                                    @enderror
                                </div>
                                <div class="col-md-12">
                                    <label for="JumlahLantaiBangunan" class="form-label">Jumlah Lantai Bangunan</label>
                                    <input type="text" class="form-control @error('JumlahLantaiBangunan') is-invalid @enderror" id="JumlahLantaiBangunan" name="JML_LANTAI_BNG" value="1" required>
                                    @error('JumlahLantaiBangunan')
                                    <div class="invalid-feedback">
                                        {{ $message }}
                                    </div>
                                    @enderror
                                </div>
                                <div class="col-md-12">
                                    <label for="KondisiBangunan" class="form-label">Kondisi Bangunan</label>
                                    <!-- <input type="text" class="form-control @error('KondisiBangunan') is-invalid @enderror" id="KondisiBangunan" name="KondisiBangunan" required> -->
                                    <select class="form-select" id="KondisiBangunan" name="KONDISI_BNG" required>
                                            <option value="1">PEMILIK</option>
                                            <option value="2">PENYEWA</option>
                                            <option value="3">PENGELOLA</option>
                                            <option value="4">PEMAKAI</option>
                                            <option value="5">SENGKETA</option>
                                        </select>
                                    @error('KondisiBangunan')
                                    <div class="invalid-feedback">
                                        {{ $message }}
                                    </div>
                                    @enderror
                                </div>
                                <div class="col-md-12">
                                    <label for="JenisKonstruksiBangunan" class="form-label">Jenis Konstruksi Bangunan</label>
                                    <!-- <input type="text" class="form-control @error('JenisKonstruksiBangunan') is-invalid @enderror" id="JenisKonstruksiBangunan" name="JenisKonstruksiBangunan" required> -->
                                    <select class="form-select" id="JenisKonstruksiBangunan" name="JNS_KONSTRUKSI_BNG" required>
                                            <option value="1">PEMILIK</option>
                                            <option value="2">PENYEWA</option>
                                            <option value="3">PENGELOLA</option>
                                            <option value="4">PEMAKAI</option>
                                            <option value="5">SENGKETA</option>
                                        </select>
                                    @error('JenisKonstruksiBangunan')
                                    <div class="invalid-feedback">
                                        {{ $message }}
                                    </div>
                                    @enderror
                                </div>
                                <div class="col-md-12">
                                    <label for="JenisAtapBangunan" class="form-label">Jenis Atap Bangunan</label>
                                    <!-- <input type="text" class="form-control @error('JenisAtapBangunan') is-invalid @enderror" id="JenisAtapBangunan" name="JenisAtapBangunan" required> -->
                                    <select class="form-select" id="JenisAtapBangunan" name="JNS_ATAP_BNG" required>
                                            <option value="1">PEMILIK</option>
                                            <option value="2">PENYEWA</option>
                                            <option value="3">PENGELOLA</option>
                                            <option value="4">PEMAKAI</option>
                                            <option value="5">SENGKETA</option>
                                        </select>
                                    @error('JenisAtapBangunan')
                                    <div class="invalid-feedback">
                                        {{ $message }}
                                    </div>
                                    @enderror
                                </div>
                                <div class="col-md-12">
                                    <label for="KdDinding" class="form-label">Kd Dinding</label>
                                    <!-- <input type="text" class="form-control @error('KdDinding') is-invalid @enderror" id="KdDinding" name="KdDinding" required> -->
                                    <select class="form-select" id="KdDinding" name="KD_DINDING" required>
                                            <option value="1">PEMILIK</option>
                                            <option value="2">PENYEWA</option>
                                            <option value="3">PENGELOLA</option>
                                            <option value="4">PEMAKAI</option>
                                            <option value="5">SENGKETA</option>
                                        </select>
                                    @error('KdDinding')
                                    <div class="invalid-feedback">
                                        {{ $message }}
                                    </div>
                                    @enderror
                                </div>
                                <div class="col-md-12">
                                    <label for="KdLantai" class="form-label">Kd Lantai</label>
                                    <!-- <input type="text" class="form-control @error('KdLantai') is-invalid @enderror" id="KdLantai" name="KdLantai" required> -->
                                    <select class="form-select" id="KdLantai" name="KD_LANTAI" required>
                                            <option value="1">PEMILIK</option>
                                            <option value="2">PENYEWA</option>
                                            <option value="3">PENGELOLA</option>
                                            <option value="4">PEMAKAI</option>
                                            <option value="5">SENGKETA</option>
                                        </select>
                                    @error('KdLantai')
                                    <div class="invalid-feedback">
                                        {{ $message }}
                                    </div>
                                    @enderror
                                </div>
                                <div class="col-md-12">
                                    <label for="KdLangitLangit" class="form-label">Kd Langit-Langit</label>
                                    <!-- <input type="text" class="form-control @error('KdLangitLangit') is-invalid @enderror" id="KdLangitLangit" name="KdLangit_Langit" required> -->
                                    <select class="form-select" id="KdLangitLangit" name="KD_LANGIT_LANGIT" required>
                                            <option value="1">PEMILIK</option>
                                            <option value="2">PENYEWA</option>
                                            <option value="3">PENGELOLA</option>
                                            <option value="4">PEMAKAI</option>
                                            <option value="5">SENGKETA</option>
                                        </select>
                                    @error('KdLangitLangit')
                                    <div class="invalid-feedback">
                                        {{ $message }}
                                    </div>
                                    @enderror
                                </div>
                            </div>

                            <div class="col-md-4 mt-5">
                                <div class="col-md-12">
                                    <label for="AcSplit" class="form-label">AC SPLIT</label>
                                    <input type="text" class="form-control @error('Aktif') is-invalid @enderror" id="AcSplit" name="AC_SPLIT" value="0" required>
                                    @error('Aktif')
                                    <div class="invalid-feedback">
                                        {{ $message }}
                                    </div>
                                    @enderror
                                </div>
                                <div class="col-md-12">
                                    <label for="AcWindows" class="form-label">AC WINDOWS</label>
                                    <input type="text" class="form-control @error('Aktif') is-invalid @enderror" id="AcWindows" name="AC_WINDOWS" value="0" required>
                                    @error('Aktif')
                                    <div class="invalid-feedback">
                                        {{ $message }}
                                    </div>
                                    @enderror
                                </div>                                
                                <div class="col-md-12">
                                    <label for="AcCentral" class="form-label">AC CENTRAL</label>
                                    <!-- <input type="text" class="form-control @error('Aktif') is-invalid @enderror" id="Aktif" name="Aktif" value="0" required> -->
                                    <div class="col-md-12 d-flex ">
                                        <div class="me-2">
                                            <input class="form-check-input border border-primary" type="checkbox" name="AC_CENTRAL" id="AcCentral" />
                                        </div>
                                        <label for="baru" class="form-label">Baru</label>
                                    </div>
                                    @error('AcCentral')
                                    <div class="invalid-feedback">
                                        {{ $message }}
                                    </div>
                                    @enderror
                                </div>
                                <div class="col-md-12">
                                    <label for="KolamRenangDiplester" class="form-label">KOLAM RENANG DIPLESTER</label>
                                    <input type="text" class="form-control @error('KolamRenangDiplester') is-invalid @enderror" id="KolamRenangDiplester" name="KLM_RENANG_DIPLESTER" value="0" required>
                                    @error('KolamRenangDiplester')
                                    <div class="invalid-feedback">
                                        {{ $message }}
                                    </div>
                                    @enderror
                                </div>
                                <div class="col-md-12">
                                    <label for="KolamRenangDgnPelapis" class="form-label">KOLAM RENANG DENGAN PELAPIS</label>
                                    <input type="text" class="form-control @error('KolamRenangDgnPelapis') is-invalid @enderror" id="KolamRenangDgnPelapis" name="KLM_RENANG_DGN_PELAPIS" value="0" required>
                                    @error('KolamRenangDgnPelapis')
                                    <div class="invalid-feedback">
                                        {{ $message }}
                                    </div>
                                    @enderror
                                </div>
                                <div class="col-md-12">
                                    <label for="PerkerasanKonstruksiRingan" class="form-label">PERKERASAN KONSTRUKSI RINGAN</label>
                                    <input type="text" class="form-control @error('PerkerasanKonstruksiRingan') is-invalid @enderror" id="PerkerasanKonstruksiRingan" name="PERKERASAN_KONSTRUKSI_RINGAN" value="0" required>
                                    @error('PerkerasanKonstruksiRingan')
                                    <div class="invalid-feedback">
                                        {{ $message }}
                                    </div>
                                    @enderror
                                </div>
                                <div class="col-md-12">
                                    <label for="PerkerasanKonstruksiSedang" class="form-label">PERKERASAN KONSTRUKSI SEDANG</label>
                                    <input type="text" class="form-control @error('PerkerasanKonstruksiSedang') is-invalid @enderror" id="PerkerasanKonstruksiSedang" name="PERKERASAN_KONSTRUKSI_SEDANG" value="0" required>
                                    @error('PerkerasanKonstruksiSedang')
                                    <div class="invalid-feedback">
                                        {{ $message }}
                                    </div>
                                    @enderror
                                </div>
                                <div class="col-md-12">
                                    <label for="PerkerasanKonstruksiBerat" class="form-label">PERKERASAN KONSTRUKSI BERAT</label>
                                    <input type="text" class="form-control @error('PerkerasanKonstruksiBerat') is-invalid @enderror" id="PerkerasanKonstruksiBerat" name="PERKERASAN_KONSTRUKSI_BERAT" value="0" required>
                                    @error('PerkerasanKonstruksiBerat')
                                    <div class="invalid-feedback">
                                        {{ $message }}
                                    </div>
                                    @enderror
                                </div>
                                <div class="col-md-12">
                                    <label for="PenutupanPerkerasan" class="form-label">PENUTUPAN PERKERASAN</label>
                                    <input type="text" class="form-control @error('PenutupanPerkerasan') is-invalid @enderror" id="PenutupanPerkerasan" name="PNTP_PERKERASAN" value="0" required>
                                    @error('PenutupanPerkerasan')
                                    <div class="invalid-feedback">
                                        {{ $message }}
                                    </div>
                                    @enderror  
                                </div>
                                <div class="col-md-12">
                                    <label for="Aktif" class="form-label">LAP TENIS 1 BAN BETON DG LAMPU</label>
                                    <input type="text" class="form-control @error('Aktif') is-invalid @enderror" id="Aktif" name="Aktif" value="0" required>
                                    @error('Aktif')
                                    <div class="invalid-feedback">
                                        {{ $message }}
                                    </div>
                                    @enderror
                                </div>
                                <div class="col-md-12">
                                    <label for="Aktif" class="form-label">LAP TENIS 1 BAN ASPAL DG LAMPU</label>
                                    <input type="text" class="form-control @error('Aktif') is-invalid @enderror" id="Aktif" name="Aktif" value="0" required>
                                    @error('Aktif')
                                    <div class="invalid-feedback">
                                        {{ $message }}
                                    </div>
                                    @enderror
                                </div>
                                <div class="col-md-12">
                                    <label for="Aktif" class="form-label">LAP TENIS 1 BAN TANAH LIAT DG LAMPU</label>
                                    <input type="text" class="form-control @error('Aktif') is-invalid @enderror" id="Aktif" name="Aktif" value="0" required>
                                    @error('Aktif')
                                    <div class="invalid-feedback">
                                        {{ $message }}
                                    </div>
                                    @enderror
                                </div>
                                <div class="col-md-12">
                                    <label for="Aktif" class="form-label">LAP TENIS 1 BAN BETON TANPA LAMPU</label>
                                    <input type="text" class="form-control @error('Aktif') is-invalid @enderror" id="Aktif" name="Aktif" value="0" required>
                                    @error('Aktif')
                                    <div class="invalid-feedback">
                                        {{ $message }}
                                    </div>
                                    @enderror
                                </div>
                                <div class="col-md-12">
                                    <label for="Aktif" class="form-label">LAP TENIS 1 BAN ASPAL TANPA LAMPU</label>
                                    <input type="text" class="form-control @error('Aktif') is-invalid @enderror" id="Aktif" name="Aktif" value="0" required>
                                    @error('Aktif')
                                    <div class="invalid-feedback">
                                        {{ $message }}
                                    </div>
                                    @enderror
                                </div>
                                <div class="col-md-12">
                                    <label for="Aktif" class="form-label">LAP TENIS 1 BAN TANAH LIAT TANPA LAMPU</label>
                                    <input type="text" class="form-control @error('Aktif') is-invalid @enderror" id="Aktif" name="Aktif" value="0" required>
                                    @error('Aktif')
                                    <div class="invalid-feedback">
                                        {{ $message }}
                                    </div>
                                    @enderror
                                </div>
                                <div class="col-md-12">
                                    <label for="Aktif" class="form-label">LAP TENIS> 1 BAN BETON DG LAMPU</label>
                                    <input type="text" class="form-control @error('Aktif') is-invalid @enderror" id="Aktif" name="Aktif" value="0" required>
                                    @error('Aktif')
                                    <div class="invalid-feedback">
                                        {{ $message }}
                                    </div>
                                    @enderror
                                </div>
                                <div class="col-md-12">
                                    <label for="Aktif" class="form-label">LAP TENIS> 1 BAN ASPAL DG LAMPU</label>
                                    <input type="text" class="form-control @error('Aktif') is-invalid @enderror" id="Aktif" name="Aktif" value="0" required>
                                    @error('Aktif')
                                    <div class="invalid-feedback">
                                        {{ $message }}
                                    </div>
                                    @enderror
                                </div>
                                <div class="col-md-12">
                                    <label for="Aktif" class="form-label">LAP TENIS> 1 BAN TANAH LIAT DG LAMPU</label>
                                    <input type="text" class="form-control @error('Aktif') is-invalid @enderror" id="Aktif" name="Aktif" value="0" required>
                                    @error('Aktif')
                                    <div class="invalid-feedback">
                                        {{ $message }}
                                    </div>
                                    @enderror
                                </div>
                                <div class="col-md-12">
                                    <label for="Aktif" class="form-label">LAP TENIS> 1 BAN BETON TANPA LAMPU</label>
                                    <input type="text" class="form-control @error('Aktif') is-invalid @enderror" id="Aktif" name="Aktif" value="0" required>
                                    @error('Aktif')
                                    <div class="invalid-feedback">
                                        {{ $message }}
                                    </div>
                                    @enderror
                                </div>
                                <div class="col-md-12">
                                    <label for="Aktif" class="form-label">LAP TENIS> 1 BAN ASPAL TANPA LAMPU</label>
                                    <input type="text" class="form-control @error('Aktif') is-invalid @enderror" id="Aktif" name="Aktif" value="0" required>
                                    @error('Aktif')
                                    <div class="invalid-feedback">
                                        {{ $message }}
                                    </div>
                                    @enderror
                                </div>
                                <div class="col-md-12">
                                    <label for="Aktif" class="form-label">LAP TENIS> 1 BAN TANAH LIAT TANPA LAMPU</label>
                                    <input type="text" class="form-control @error('Aktif') is-invalid @enderror" id="Aktif" name="Aktif" value="0" required>
                                    @error('Aktif')
                                    <div class="invalid-feedback">
                                        {{ $message }}
                                    </div>
                                    @enderror
                                </div>
                                <div class="col-md-12">
                                    <label for="Aktif" class="form-label">LIFT PENUMPANG BIASA</label>
                                    <input type="text" class="form-control @error('Aktif') is-invalid @enderror" id="Aktif" name="Aktif" value="0" required>
                                    @error('Aktif')
                                    <div class="invalid-feedback">
                                        {{ $message }}
                                    </div>
                                    @enderror
                                </div>
                                <div class="col-md-12">
                                    <label for="Aktif" class="form-label">LIFT KAPSUL</label>
                                    <input type="text" class="form-control @error('Aktif') is-invalid @enderror" id="Aktif" name="Aktif" value="0" required>
                                    @error('Aktif')
                                    <div class="invalid-feedback">
                                        {{ $message }}
                                    </div>
                                    @enderror
                                </div>
                                <div class="col-md-12">
                                    <label for="Aktif" class="form-label">LIST BARANG</label>
                                    <input type="text" class="form-control @error('Aktif') is-invalid @enderror" id="Aktif" name="Aktif" value="0" required>
                                    @error('Aktif')
                                    <div class="invalid-feedback">
                                        {{ $message }}
                                    </div>
                                    @enderror
                                </div>
                                <div class="col-md-12">
                                    <label for="Aktif" class="form-label">TANGGA BERJALAN (ESCALATOR) <= 0.80 M</label>
                                    <input type="text" class="form-control @error('Aktif') is-invalid @enderror" id="Aktif" name="Aktif" value="0" required>
                                    @error('Aktif')
                                    <div class="invalid-feedback">
                                        {{ $message }}
                                    </div>
                                    @enderror
                                </div>
                                <div class="col-md-12">
                                    <label for="Aktif" class="form-label">TANGGA BERJALAN (ESCALATOR) < 0.80 M</label>
                                    <input type="text" class="form-control @error('Aktif') is-invalid @enderror" id="Aktif" name="Aktif" value="0" required>
                                    @error('Aktif')
                                    <div class="invalid-feedback">
                                        {{ $message }}
                                    </div>
                                    @enderror
                                </div>
                                <div class="col-md-12">
                                    <label for="Aktif" class="form-label">PAGAR BAJA/BESI</label>
                                    <input type="text" class="form-control @error('Aktif') is-invalid @enderror" id="Aktif" name="Aktif" value="0" required>
                                    @error('Aktif')
                                    <div class="invalid-feedback">
                                        {{ $message }}
                                    </div>
                                    @enderror
                                </div>
                                <div class="col-md-12">
                                    <label for="Aktif" class="form-label">PAGAR BATA/BATAKO</label>
                                    <input type="text" class="form-control @error('Aktif') is-invalid @enderror" id="Aktif" name="Aktif" value="0" required>
                                    @error('Aktif')
                                    <div class="invalid-feedback">
                                        {{ $message }}
                                    </div>
                                    @enderror
                                </div>
                                <div class="col-md-12">
                                    <label for="Aktif" class="form-label">PROTEKSI API</label>
                                    <!-- <input type="text" class="form-control @error('Aktif') is-invalid @enderror" id="Aktif" name="Aktif" value="0" required> -->
                                    <div class="col-md-12 d-flex ">
                                        <div class="me-2">
                                            <input class="form-check-input border border-primary" type="checkbox" name="baru" id="baru" />
                                        </div>
                                        <label for="baru" class="form-label">HYDRANT</label>
                                    </div>
                                    <div class="col-md-12 d-flex ">
                                        <div class="me-2">
                                            <input class="form-check-input border border-primary" type="checkbox" name="baru" id="baru" />
                                        </div>
                                        <label for="baru" class="form-label">FIRE ALARM</label>
                                    </div>
                                    <div class="col-md-12 d-flex ">
                                        <div class="me-2">
                                            <input class="form-check-input border border-primary" type="checkbox" name="baru" id="baru" />
                                        </div>
                                        <label for="baru" class="form-label">SPLINKLER</label>
                                    </div>
                                    @error('Aktif')
                                    <div class="invalid-feedback">
                                        {{ $message }}
                                    </div>
                                    @enderror
                                </div>
                                <div class="col-md-12">
                                    <label for="Aktif" class="form-label">GENSET</label>
                                    <input type="text" class="form-control @error('Aktif') is-invalid @enderror" id="Aktif" name="Aktif" value="0" required>
                                    @error('Aktif')
                                    <div class="invalid-feedback">
                                        {{ $message }}
                                    </div>
                                    @enderror
                                </div>
                                <div class="col-md-12">
                                    <label for="Aktif" class="form-label">SALURAN PESAWAT PABX</label>
                                    <input type="text" class="form-control @error('Aktif') is-invalid @enderror" id="Aktif" name="Aktif" value="0" required>
                                    @error('Aktif')
                                    <div class="invalid-feedback">
                                        {{ $message }}
                                    </div>
                                    @enderror
                                </div>
                                <div class="col-md-12">
                                    <label for="Aktif" class="form-label">SUMUR ARTESIS</label>
                                    <input type="text" class="form-control @error('Aktif') is-invalid @enderror" id="Aktif" name="Aktif" value="0" required>
                                    @error('Aktif')
                                    <div class="invalid-feedback">
                                        {{ $message }}
                                    </div>
                                    @enderror
                                </div>
                                <div class="col-md-12">
                                    <label for="Aktif" class="form-label">BOILER HOTEL</label>
                                    <input type="text" class="form-control @error('Aktif') is-invalid @enderror" id="Aktif" name="Aktif" value="0" required>
                                    @error('Aktif')
                                    <div class="invalid-feedback">
                                        {{ $message }}
                                    </div>
                                    @enderror
                                </div>
                                <div class="col-md-12">
                                    <label for="Aktif" class="form-label">LISTRIK</label>
                                    <input type="text" class="form-control @error('Aktif') is-invalid @enderror" id="Aktif" name="Aktif" value="0" required>
                                    @error('Aktif')
                                    <div class="invalid-feedback">
                                        {{ $message }}
                                    </div>
                                    @enderror
                                </div>
                                <div class="col-md-12">
                                    <label for="Aktif" class="form-label">BOILER APARTEMEN</label>
                                    <input type="text" class="form-control @error('Aktif') is-invalid @enderror" id="Aktif" name="Aktif" value="0" required>
                                    @error('Aktif')
                                    <div class="invalid-feedback">
                                        {{ $message }}
                                    </div>
                                    @enderror
                                </div>
                            </div>

                            <div class="col-md-4 mt-5">
                                <div class="col-md-12">
                                    <label for="NilaiSistemBangunan" class="form-label">Nilai Sistem Bangunan</label>
                                    <input type="text" class="form-control @error('NilaiSistemBangunan') is-invalid @enderror" id="NilaiSistemBangunan" name="NilaiSistemBangunan" value="0" required disabled>
                                    @error('NilaiSistemBangunan')
                                    <div class="invalid-feedback">
                                        {{ $message }}
                                    </div>
                                    @enderror
                                </div>
                                <div class="col-md-12">
                                    <label for="TanggalPendataanBangunan" class="form-label">Tanggal Pendataan Bangunan</label>
                                    <input type="date" class="form-control @error('TanggalPendataanBangunan') is-invalid @enderror" id="TanggalPendataanBangunan" name="TanggalPendataanBangunan" value="{{ date('Y').'-12-31' }}"  required disabled>
                                    @error('TanggalPendataanBangunan')
                                    <div class="invalid-feedback">
                                        {{ $message }}
                                    </div>
                                    @enderror
                                </div>
                                <div class="col-md-12">
                                    <label for="NIPPendataBangunan" class="form-label">NIP Pendata Bangunan</label>
                                    <input type="text" class="form-control @error('NIPPendataBangunan') is-invalid @enderror" id="NIPPendataBangunan" name="NIPPendataBangunan" value="33012321313" required disabled>
                                    @error('NIPPendataBangunan')
                                    <div class="invalid-feedback">
                                        {{ $message }}
                                    </div>
                                    @enderror
                                </div>
                                <div class="col-md-12">
                                    <label for="TanggalPemeriksaanBangunan" class="form-label">Tanggal Pemeriksaan Bangunan</label>
                                    <input type="date" class="form-control @error('TanggalPemeriksaanBangunan') is-invalid @enderror" id="TanggalPemeriksaanBangunan" name="TanggalPemeriksaanBangunan" value="{{ date('Y').'-12-31' }}"  required>
                                    @error('TanggalPemeriksaanBangunan')
                                    <div class="invalid-feedback">
                                        {{ $message }}
                                    </div>
                                    @enderror
                                </div>
                                <div class="col-md-12">
                                    <label for="NIPPemeriksaBangunan" class="form-label">NIP Pemeriksa Bangunan</label>
                                    <input type="text" class="form-control @error('NIPPemeriksaBangunan') is-invalid @enderror" id="NIPPemeriksaBangunan" name="NIPPemeriksaBangunan" value="33012321313" required>
                                    @error('NIPPemeriksaBangunan')
                                    <div class="invalid-feedback">
                                        {{ $message }}
                                    </div>
                                    @enderror
                                </div>
                                <div class="col-md-12">
                                    <label for="TanggalPerekamanBangunan" class="form-label">Tanggal Perekaman Bangunan</label>
                                    <input type="date" class="form-control @error('TanggalPerekamanBangunan') is-invalid @enderror" id="TanggalPerekamanBangunan" name="TanggalPerekamanBangunan" value="{{ date('Y').'-12-31' }}" required disabled>
                                    @error('TanggalPerekamanBangunan')
                                    <div class="invalid-feedback">
                                        {{ $message }}
                                    </div>
                                    @enderror
                                </div>
                                <div class="col-md-12">
                                    <label for="NIPPerekamBangunan" class="form-label">NIP Perekam Bangunan</label>
                                    <input type="text" class="form-control @error('NIPPerekamBangunan') is-invalid @enderror" id="NIPPerekamBangunan" name="NIPPerekamBangunan" value="33012321313" required disabled>
                                    @error('NIPPerekamBangunan')
                                    <div class="invalid-feedback">
                                        {{ $message }}
                                    </div>
                                    @enderror
                                </div>
                                <div class="col-md-12">
                                    <label for="TanggalKunjunganKembali" class="form-label">Tanggal Kunjungan Kembali</label>
                                    <input type="date" class="form-control @error('TanggalKunjunganKembali') is-invalid @enderror" id="TanggalKunjunganKembali" name="TanggalKunjunganKembali" value="{{ date('Y').'-12-31' }}" required>
                                    @error('TanggalKunjunganKembali')
                                    <div class="invalid-feedback">
                                        {{ $message }}
                                    </div>
                                    @enderror
                                </div>
                                <div class="col-md-12">
                                    <label for="NilaiIndividu" class="form-label">Nilai Individu</label>
                                    <input type="text" class="form-control @error('NilaiIndividu') is-invalid @enderror" id="NilaiIndividu" name="NilaiIndividu" value="0" required>
                                    @error('NilaiIndividu')
                                    <div class="invalid-feedback">
                                        {{ $message }}
                                    </div>
                                    @enderror
                                </div>
                                <div class="col-md-12">
                                    <label for="Aktif" class="form-label">Aktif</label>
                                    <input type="text" class="form-control @error('Aktif') is-invalid @enderror" id="Aktif" name="Aktif" value="1" required>
                                    @error('Aktif')
                                    <div class="invalid-feedback">
                                        {{ $message }}
                                    </div>
                                    @enderror
                                </div>
                            </div>

                                <div class="col-md-12 text-center">
                                    <button type="submit" class="btn btn-primary" style="width:150px;">Tambah</button>
                                </div>
                </form>

            </div>
        </div>
    </div>



    <script>
        document.addEventListener('DOMContentLoaded', function() {
            const form = document.getElementById('addlspop'); // Ganti 'yourFormId' dengan ID formulir Anda

            form.addEventListener('input', function(event) {
                const inputElement = event.target;

                // Hanya lakukan validasi jika input memiliki class 'form-control'
                if (inputElement.classList.contains('form-control')) {
                    const fieldName = inputElement.name;
                    const fieldValue = inputElement.value.trim();
                    const errorContainer = document.getElementById(fieldName + 'Error'); // Sesuaikan dengan nama field

                    // Bersihkan pesan kesalahan sebelumnya
                    errorContainer.textContent = '';

                    // Validasi sesuai kebutuhan Anda
                    if (fieldName === 'KodeProvinsi' && fieldValue.length === 0) {
                        errorContainer.textContent = 'Kode Provinsi is required';
                    }
                    // Tambahkan validasi untuk kolom lain sesuai kebutuhan

                    // Anda juga dapat melakukan validasi dengan AJAX jika diperlukan
                    // Contoh: panggil endpoint Laravel untuk validasi data
                }
            });
        });
    </script>
    @endsection