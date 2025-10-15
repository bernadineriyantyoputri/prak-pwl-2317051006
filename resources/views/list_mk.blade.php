@extends('layouts.app')

@section('content')
<div class="container py-4" style="font-family: 'Poppins', sans-serif;">

    <div class="card shadow-sm border-0 mb-4">
        <div class="card-header text-white fw-bold" style="background-color: #6c757d;">
            Daftar Mata Kuliah
        </div>
    </div>

    <div class="mb-3 text-start">
        <a href="{{ route('matakuliah.create') }}" class="btn btn-success btn-sm px-3 py-2 shadow-sm">
            + Tambah Mata Kuliah
        </a>
    </div>

    <div class="card shadow-sm border-0 rounded-3">
        <div class="card-body p-0">
            <table class="table table-bordered table-hover align-middle mb-0">
                <thead class="text-white text-center" style="background-color: #6c757d;">
                    <tr>
                        <th style="width: 250px;">ID</th>
                        <th style="width: 150px;">Nama Mata Kuliah</th>
                        <th style="width: 80px;">SKS</th>
                        <th style="width: 160px;">Aksi</th>
                    </tr>
                </thead>
                <tbody>
                    @forelse ($mks as $mk)
                        <tr>
                            <td class="text-center text-muted">{{ $mk->id }}</td>
                            <td>{{ $mk->nama_mk }}</td>
                            <td class="text-center">{{ $mk->sks }}</td>
                            <td class="text-center">
                                <div class="d-flex justify-content-center gap-2">
                                    <a href="{{ route('matakuliah.edit', $mk->id) }}" 
                                       class="btn btn-sm btn-primary px-3">
                                        Edit
                                    </a>
                                    <form action="{{ route('matakuliah.destroy', $mk->id) }}" 
                                          method="POST" 
                                          class="d-inline">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit" 
                                                onclick="return confirm('Yakin ingin menghapus data ini?')" 
                                                class="btn btn-sm btn-danger px-3">
                                            Delete
                                        </button>
                                    </form>
                                </div>
                            </td>
                        </tr>
                    @empty
                        <tr>
                            <td colspan="4" class="text-center text-muted py-3">
                                Tidak ada data mata kuliah.
                            </td>
                        </tr>
                    @endforelse
                </tbody>
            </table>
        </div>
    </div>
</div>
@endsection
