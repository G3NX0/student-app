@extends('layouts.app')

@section('title', 'Tambah Siswa - Student App')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card card-custom">
                <div class="card-header bg-success text-white">
                    <h3 class="card-title mb-0">
                        <i class="fas fa-user-plus me-2"></i>Tambah Siswa Baru
                    </h3>
                </div>
                <div class="card-body">
                    <form action="{{ route('students.store') }}" method="POST">
                        @csrf
                        
                        <div class="mb-3">
                            <label for="nama" class="form-label">Nama Lengkap</label>
                            <input type="text" class="form-control @error('nama') is-invalid @enderror" 
                                   id="nama" name="nama" value="{{ old('nama') }}" required>
                            @error('nama')
                                <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                        </div>

                        <div class="mb-3">
                            <label for="jurusan" class="form-label">Jurusan</label>
                            <select class="form-select @error('jurusan') is-invalid @enderror" 
                                    id="jurusan" name="jurusan" required>
                                <option value="">Pilih Jurusan</option>
                                <option value="RPL" {{ old('jurusan') == 'RPL' ? 'selected' : '' }}>
                                    RPL - Rekayasa Perangkat Lunak
                                </option>
                                <option value="TKJ" {{ old('jurusan') == 'TKJ' ? 'selected' : '' }}>
                                    TKJ - Teknik Komputer Jaringan
                                </option>
                                <option value="MM" {{ old('jurusan') == 'MM' ? 'selected' : '' }}>
                                    MM - Multimedia
                                </option>
                            </select>
                            @error('jurusan')
                                <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                        </div>

                        <div class="alert alert-info">
                            <i class="fas fa-info-circle me-2"></i>
                            <strong>Info:</strong> Siswa jurusan RPL akan mendapat status "Unggulan" secara otomatis.
                        </div>

                        <div class="d-flex gap-2">
                            <button type="submit" class="btn btn-success">
                                <i class="fas fa-save me-2"></i>Simpan
                            </button>
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