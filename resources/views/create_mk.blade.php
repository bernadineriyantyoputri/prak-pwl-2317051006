@extends('layouts.app')

@section('content')
<div class="card shadow-lg">
    <div class="card-header bg-secondary text-white">
        <h4 class="mb-0"><i class="bi bi-book"></i> Tambah Mata Kuliah Baru</h4>
    </div>
    <div class="card-body">
        <p class="text-muted">Silahkan Isi Data Mata Kuliah Anda</p>

        <form action="{{ route('matakuliah.store') }}" method="POST">
            @csrf

            <label for="nama_mk" class="form-label">Nama Mata Kuliah:</label>
            <input 
                type="text" 
                id="nama_mk" 
                name="nama_mk" 
                class="form-control" 
                required
            >

            <label for="sks" class="form-label mt-3">SKS:</label>
            <input 
                type="number" 
                id="sks" 
                name="sks" 
                class="form-control" 
                required
            >

            <br>
            <button type="submit" class="btn btn-success">
                <i class="bi bi-save"></i> Simpan
            </button>
        </form>
    </div>
</div>
@endsection
