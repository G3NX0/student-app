@extends('layouts.app')

@section('title', 'Student App - Home')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card card-custom">
                <div class="card-body text-center p-5">
                    <div class="mb-4">
                        <i class="fas fa-graduation-cap" style="font-size: 4rem; color: #667eea;"></i>
                    </div>
                    <h1 class="display-4 fw-bold text-primary mb-4">Selamat Datang di Student App</h1>
                    <p class="lead text-muted mb-4">
                        Sistem manajemen data siswa yang mudah dan efisien. 
                        Kelola informasi siswa dengan antarmuka yang user-friendly.
                    </p>
                    <div class="row g-3 mt-4">
                        <div class="col-md-6">
                            <a href="{{ route('students.index') }}" class="btn btn-primary btn-lg w-100">
                                <i class="fas fa-users me-2"></i>Lihat Data Siswa
                            </a>
                        </div>
                        <div class="col-md-6">
                            <a href="{{ route('about') }}" class="btn btn-outline-primary btn-lg w-100">
                                <i class="fas fa-info-circle me-2"></i>Tentang Aplikasi
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection