@extends('layouts.app')

@section('content')
<div class="container py-4" style="font-family: 'Poppins', sans-serif;">

    <div class="card shadow-sm border-0 mb-4">
        <div class="card-header text-white fw-bold" style="background-color: #6c757d;">
             Daftar User
        </div>
    </div>

    <div class="mb-3 text-start">
        <a href="{{ route('user.create') }}" class="btn btn-success btn-sm px-3 py-2 shadow-sm">
            + Tambah User
        </a>
    </div>

    <div class="card shadow-sm border-0 rounded-3">
        <div class="card-body p-0">
            <table class="table table-bordered table-hover align-middle mb-0">
                <thead class="text-white text-center" style="background-color: #6c757d;">
                    <tr>
                        <th style="width: 120px;">ID</th>
                        <th style="width: 200px;">Nama</th>
                        <th style="width: 150px;">NIM</th>
                        <th style="width: 150px;">Kelas</th>
                        <th style="width: 180px;">Aksi</th>
                    </tr>
                </thead>
                <tbody>
                    @forelse ($users as $user)
                        <tr>
                            <td class="text-center text-muted">{{ $user->id }}</td>
                            <td>{{ $user->nama }}</td>
                            <td>{{ $user->nim }}</td>
                            <td class="text-center">{{ $user->kelas->nama_kelas ?? '-' }}</td>
                            <td class="text-center">
                                <div class="d-flex justify-content-center gap-2">
                                    <a href="{{ route('user.edit', $user->id) }}" 
                                       class="btn btn-sm btn-primary px-3">
                                        Edit
                                    </a>

                                    <form action="{{ route('user.destroy', $user->id) }}" 
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
                            <td colspan="5" class="text-center text-muted py-3">
                                Belum ada data pengguna.
                            </td>
                        </tr>
                    @endforelse
                </tbody>
            </table>
        </div>
    </div>

</div>
@endsection
