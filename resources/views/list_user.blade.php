@extends('layouts.app')

@section('content')
<div class="card shadow-lg">
    <div class="card-header bg-secondary text-white">
        <h4 class="mb-0"><i class="bi bi-people-fill"></i> Daftar Pengguna</h4>
    </div>
    <div class="card-body">
        @if(session('success'))
            <div class="alert alert-success">{{ session('success') }}</div>
        @endif

        <table class="table table-striped table-bordered align-middle">
            <thead class="table-secondary"> {{-- warna abu-abu --}}
                <tr class="text-center">
                    <th>ID</th>
                    <th>Nama</th>
                    <th>NIM</th>
                    <th>Kelas</th>
                </tr>
            </thead>
            <tbody>
                @forelse ($users as $user)
                    <tr>
                        <td class="text-center">{{ $user->id }}</td>
                        <td>{{ $user->nama }}</td>
                        <td>{{ $user->nim }}</td>
                        <td class="text-center">{{ $user->kelas->nama_kelas ?? '-' }}</td>
                    </tr>
                @empty
                    <tr>
                        <td colspan="4" class="text-center text-muted">Belum ada data pengguna</td>
                    </tr>
                @endforelse
            </tbody>
        </table>
    </div>
</div>
@endsection