@extends('layouts.app')

@section('content')
<div class="container d-flex justify-content-center align-items-center" style="min-height: 85vh; font-family: 'Poppins', sans-serif;">
    <div class="card shadow-lg border-0 rounded-3" style="width: 650px; background-color: #f5f5f5;">

        <div class="card-header text-center text-white" style="background-color: #6c757d;">
            <h3 class="mb-0 fw-semibold">Edit Mata Kuliah</h3>
        </div>

        <div class="card-body p-5">
            <form action="{{ route('matakuliah.update', $mk->id) }}" method="POST">
                @csrf
                @method('PUT')

                <div class="mb-4">
                    <label for="nama_mk" class="form-label fw-semibold">Nama Mata Kuliah</label>
                    <input 
                        type="text" 
                        id="nama_mk" 
                        name="nama_mk" 
                        value="{{ old('nama_mk', $mk->nama_mk) }}" 
                        class="form-control form-control-lg" 
                        required
                    >
                </div>

                <div class="mb-4">
                    <label for="sks" class="form-label fw-semibold">SKS</label>
                    <input 
                        type="number" 
                        id="sks" 
                        name="sks" 
                        value="{{ old('sks', $mk->sks) }}" 
                        class="form-control form-control-lg" 
                        required
                    >
                </div>

                <div class="text-center mt-4">
                    <button type="submit" class="btn btn-success btn-lg px-5">
                        Update
                    </button>
                </div>
            </form>
        </div>
    </div>
</div>
@endsection
