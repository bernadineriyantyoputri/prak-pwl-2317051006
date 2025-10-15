@extends('layouts.app')

@section('content')
<div class="container py-4" style="font-family: 'Poppins', sans-serif;">

    <div class="card shadow-sm border-0 mb-4">
        <div class="card-header text-white fw-bold" style="background-color: #6c757d;">
            Edit Pengguna
        </div>
    </div>

    <div class="card shadow-sm border-0 rounded-3 p-4">
        <form action="{{ route('user.update', $user->id) }}" method="POST">
            @csrf
            @method('PUT')

            <div class="mb-3">
                <label for="nama" class="form-label fw-semibold">Nama Lengkap</label>
                <input type="text" 
                       name="nama" 
                       id="nama" 
                       class="form-control"
                       value="{{ old('nama', $user->nama) }}" 
                       required>
            </div>

            <div class="mb-3">
                <label for="nim" class="form-label fw-semibold">NIM</label>
                <input type="text" 
                       name="nim" 
                       id="nim" 
                       class="form-control"
                       value="{{ old('nim', $user->nim) }}" 
                       required>
            </div>

            <div class="mb-3">
                <label for="kelas_id" class="form-label fw-semibold">Kelas</label>
                <select name="kelas_id" id="kelas_id" class="form-select" required>
                    <option value="">-- Pilih Kelas --</option>
                    @foreach($kelas as $k)
                        <option value="{{ $k->id }}" 
                                {{ $user->kelas_id == $k->id ? 'selected' : '' }}>
                            {{ $k->nama_kelas }}
                        </option>
                    @endforeach
                </select>
            </div>

            <div class="d-flex justify-content-end">
                <button type="submit" class="btn btn-primary px-4">
                    Simpan Perubahan
                </button>
            </div>
        </form>
    </div>

</div>
@endsection
