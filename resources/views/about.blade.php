@extends('layouts.app')

@section('title', 'Tentang - Student App')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-10">
            <div class="card card-custom">
                <div class="card-header bg-info text-white">
                    <h3 class="card-title mb-0">
                        <i class="fas fa-info-circle me-2"></i>Tentang Student App
                    </h3>
                </div>
                <div class="card-body">
                    <div class="row">
                        <div class="col-md-6">
                            <h4><i class="fas fa-graduation-cap me-2 text-primary"></i>Tentang Aplikasi</h4>
                            <p>Student App adalah sistem manajemen data siswa yang dikembangkan menggunakan Laravel 11 dan Bootstrap 5. Aplikasi ini dirancang untuk memudahkan pengelolaan informasi siswa dengan antarmuka yang modern dan responsif.</p>
                            
                            <h5><i class="fas fa-star me-2 text-warning"></i>Fitur Utama:</h5>
                            <ul class="list-unstyled">
                                <li><i class="fas fa-check text-success me-2"></i>Tampilan daftar siswa dalam tabel</li>
                                <li><i class="fas fa-check text-success me-2"></i>Detail informasi setiap siswa</li>
                                <li><i class="fas fa-check text-success me-2"></i>Badge khusus untuk jurusan RPL</li>
                                <li><i class="fas fa-check text-success me-2"></i>Design responsif dengan Bootstrap</li>
                                <li><i class="fas fa-check text-success me-2"></i>Navigasi yang user-friendly</li>
                            </ul>
                        </div>
                        <div class="col-md-6">
                            <h4><i class="fas fa-code me-2 text-primary"></i>Teknologi yang Digunakan</h4>
                            <div class="row g-3">
                                <div class="col-6">
                                    <div class="card bg-light">
                                        <div class="card-body text-center">
                                            <i class="fab fa-laravel text-danger" style="font-size: 2rem;"></i>
                                            <h6 class="mt-2">Laravel 11</h6>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-6">
                                    <div class="card bg-light">
                                        <div class="card-body text-center">
                                            <i class="fab fa-bootstrap text-primary" style="font-size: 2rem;"></i>
                                            <h6 class="mt-2">Bootstrap 5</h6>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-6">
                                    <div class="card bg-light">
                                        <div class="card-body text-center">
                                            <i class="fab fa-php text-info" style="font-size: 2rem;"></i>
                                            <h6 class="mt-2">PHP 8.2+</h6>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-6">
                                    <div class="card bg-light">
                                        <div class="card-body text-center">
                                            <i class="fas fa-leaf text-success" style="font-size: 2rem;"></i>
                                            <h6 class="mt-2">Blade Template</h6>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    
                    <hr class="my-4">
                    
                    <div class="row">
                        <div class="col-md-12">
                            <h4><i class="fas fa-users me-2 text-primary"></i>Data Siswa</h4>
                            <p>Aplikasi ini mengelola data siswa dari berbagai jurusan:</p>
                            <div class="row g-3">
                                <div class="col-md-4">
                                    <div class="card border-success">
                                        <div class="card-body text-center">
                                            <i class="fas fa-laptop-code text-success" style="font-size: 2rem;"></i>
                                            <h5 class="mt-2">RPL</h5>
                                            <p class="text-muted">Rekayasa Perangkat Lunak</p>
                                            <span class="badge bg-warning text-dark">Program Unggulan</span>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="card border-info">
                                        <div class="card-body text-center">
                                            <i class="fas fa-network-wired text-info" style="font-size: 2rem;"></i>
                                            <h5 class="mt-2">TKJ</h5>
                                            <p class="text-muted">Teknik Komputer Jaringan</p>
                                            <span class="badge bg-light text-dark">Program Reguler</span>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="card border-secondary">
                                        <div class="card-body text-center">
                                            <i class="fas fa-photo-video text-secondary" style="font-size: 2rem;"></i>
                                            <h5 class="mt-2">MM</h5>
                                            <p class="text-muted">Multimedia</p>
                                            <span class="badge bg-light text-dark">Program Reguler</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    
                    <div class="text-center mt-4">
                        <a href="{{ route('students.index') }}" class="btn btn-primary btn-lg">
                            <i class="fas fa-users me-2"></i>Lihat Data Siswa
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection