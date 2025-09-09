@extends('layouts.app')

@section('title', 'Edit Siswa - ' . $student['nama'])

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card card-custom">
                <div class="card-header bg-warning text-dark">
                    <h3 class="card-title mb-0">
                        <i class="fas fa-edit me-2"></i>Edit Data Siswa
                    </h3>
                </div>
                <div class="card-body">
                    <form action="{{ route('students.update', $student['id']) }}" method="POST">
                        @csrf
                        @method('PUT')
                        
                        <div class="mb-3">
                            <label for="nama" class="form-label">Nama Lengkap</label>
                            <input type="text" class="form-control @error('nama') is-invalid @enderror" 
                                   id="nama" name="nama" value="{{ old('nama', $student['nama']) }}" required>
                            @error('nama')
                                <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                        </div>

                        <div class="mb-3">
                            <label for="jurusan" class="form-label">Jurusan</label>
                            <select class="form-select @error('jurusan') is-invalid @enderror" 
                                    id="jurusan" name="jurusan" required>
                                <option value="">Pilih Jurusan</option>
                                <option value="RPL" {{ old('jurusan', $student['jurusan']) == 'RPL' ? 'selected' : '' }}>
                                    RPL - Rekayasa Perangkat Lunak
                                </option>
                                <option value="TKJ" {{ old('jurusan', $student['jurusan']) == 'TKJ' ? 'selected' : '' }}>
                                    TKJ - Teknik Komputer Jaringan
                                </option>
                                <option value="MM" {{ old('jurusan', $student['jurusan']) == 'MM' ? 'selected' : '' }}>
                                    MM - Multimedia
                                </option>
                            </select>
                            @error('jurusan')
                                <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                        </div>

                        <div class="alert alert-info">
                            <i class="fas fa-info-circle me-2"></i>
                            <strong>Info:</strong> Perubahan jurusan akan mempengaruhi status siswa (Unggulan/Reguler).
                        </div>

                        <div class="d-flex gap-2">
                            <button type="submit" class="btn btn-warning text-dark">
                                <i class="fas fa-save me-2"></i>Update
                            </button>
                            <a href="{{ route('students.show', $student['id']) }}" class="btn btn-info">
                                <i class="fas fa-eye me-2"></i>Lihat Detail
                            </a>
                            <a href="{{ route('students.index') }}" class="btn btn-secondary">
                                <i class="fas fa-arrow-left me-2"></i>Kembali
                            </a>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection