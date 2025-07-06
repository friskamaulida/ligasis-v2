@extends('layout.layout')
@section('content')

<div class="container py-5">
    <h2 class="mb-4">Formulir PPDB</h2>

    @if(session('success'))
        <div class="alert alert-success">{{ session('success') }}</div>
    @endif
    @if(session('success'))
        <div class="alert alert-success">
            {{ session('success') }}

            @if(session('ppdb_id'))
                <div class="mt-2">
                    <a href="{{ route('ppdb.download', session('ppdb_id')) }}" class="btn btn-outline-primary">
                        Download Lembar Pendaftaran
                    </a>
                </div>
            @endif
        </div>
    @endif

    <form action="{{ route('ppdb.store') }}" method="POST" enctype="multipart/form-data">
        @csrf
        <div class="mb-3">
            <label>Nama Lengkap</label>
            <input type="text" name="nama" class="form-control" required>
        </div>
        <div class="mb-3">
            <label>NISN</label>
            <input type="text" name="nisn" class="form-control" required>
        </div>
        <div class="mb-3">
            <label>Jenis Kelamin</label>
            <select name="jenis_kelamin" class="form-control">
                <option value="Laki-laki">Laki-laki</option>
                <option value="Perempuan">Perempuan</option>
            </select>
        </div>
        <div class="mb-3">
            <label>Tanggal Lahir</label>
            <input type="date" name="tanggal_lahir" class="form-control" required>
        </div>
        <div class="mb-3">
            <label>Alamat</label>
            <textarea name="alamat" class="form-control"></textarea>
        </div>
        <div class="mb-3">
            <label>Nama Ayah</label>
            <input type="text" name="nama_ayah" class="form-control">
        </div>
        <div class="mb-3">
            <label>Nama Ibu</label>
            <input type="text" name="nama_ibu" class="form-control">
        </div>
        <div class="mb-3">
            <label>Asal Sekolah</label>
            <input type="text" name="asal_sekolah" class="form-control">
        </div>
        <div class="mb-3">
            <label>Nomor HP</label>
            <input type="text" name="no_hp" class="form-control">
        </div>
        <div class="mb-3">
            <label>Foto</label>
            <input type="file" name="foto" class="form-control">
        </div>

        <button class="btn btn-primary">Kirim</button>
    </form>
</div>

@endsection
