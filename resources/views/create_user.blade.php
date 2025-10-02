@extends('layouts.app')

@section('content')
<div class="card shadow-lg">
    <div class="card-header bg-secondary text-white">
        <h4 class="mb-0"><i class="bi bi-person-plus"></i> Tambah Pengguna Baru</h4>
    </div>
    <div class="card-body">
        <p class="text-muted">Silahkan Isi Data Pengguna Anda</p>
        
        <form action="{{ route('user.store') }}" method="POST">
             @csrf

            <label for="nama" class="form-label">Nama:</label>
            <input type="text" id="nama" name="nama" class="form-control">

            <label for="nim" class="form-label">NIM:</label>
            <input type="text" id="nim" name="nim" class="form-control">
      
            <label for="kelas_id" class="form-label">Kelas:</label>
            <select name="kelas_id" id="kelas_id" class="form-select">
                @foreach ($kelas as $kelasItem)
                    <option value="{{ $kelasItem->id }}">{{ $kelasItem->nama_kelas }}</option>
                @endforeach
            </select><br><br>
            
            <button type="submit" class="btn btn-success">
                <i class="bi bi-save"></i> Simpan
            </button>
        </form>
    </div>
</div>
@endsection
