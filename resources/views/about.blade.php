@extends('layouts.app')

@section('title', 'Tentang - Student App')

@section('content')
<div class="container my-5">
    <div class="row justify-content-center">
        <div class="col-md-11">
            <div class="card" style="background: linear-gradient(135deg, #0f172a 0%, #1e293b 100%); border: none; border-radius: 20px; box-shadow: 0 20px 40px rgba(0,0,0,0.3); border: 2px solid rgba(59, 130, 246, 0.2); overflow: hidden;">
                
                <!-- Card Header -->
                <div class="card-header" style="background: linear-gradient(135deg, #0891b2 0%, #06b6d4 100%); border: none; padding: 1.5rem 2rem;">
                    <h3 class="card-title mb-0" style="color: white; font-weight: 700; font-size: 1.5rem;">
                        <div style="background: rgba(255,255,255,0.2); width: 45px; height: 45px; border-radius: 12px; display: inline-flex; align-items: center; justify-content: center; margin-right: 1rem; vertical-align: middle;">
                            <i class="fas fa-info-circle" style="color: white; font-size: 1.2rem;"></i>
                        </div>
                        Tentang Student App
                    </h3>
                </div>

                <!-- Card Body -->
                <div class="card-body" style="padding: 2rem;">
                    <div style="background: white; border-radius: 15px; padding: 2rem; box-shadow: 0 10px 25px rgba(0,0,0,0.1);">
                        
                        <div class="row">
                            <div class="col-md-6">
                                <h4 style="color: #1e40af; font-weight: 700; margin-bottom: 1rem;">
                                    <i class="fas fa-graduation-cap me-2" style="color: #3b82f6;"></i>Tentang Aplikasi
                                </h4>
                                <p style="color: #374151; line-height: 1.6; margin-bottom: 1.5rem;">Student App adalah sistem manajemen data siswa yang dikembangkan menggunakan Laravel 11 dan Bootstrap 5. Aplikasi ini dirancang untuk memudahkan pengelolaan informasi siswa dengan antarmuka yang modern dan responsif.</p>
                                
                                <h5 style="color: #1e40af; font-weight: 600; margin-bottom: 1rem;">
                                    Fitur Utama:
                                </h5>
                                <ul class="list-unstyled">
                                    <li style="margin-bottom: 0.5rem;"><i class="fas fa-check me-2" style="color: #10b981;"></i>Tampilan daftar siswa dalam tabel</li>
                                    <li style="margin-bottom: 0.5rem;"><i class="fas fa-check me-2" style="color: #10b981;"></i>Detail informasi setiap siswa</li>
                                    <li style="margin-bottom: 0.5rem;"><i class="fas fa-check me-2" style="color: #10b981;"></i>Badge khusus untuk jurusan RPL</li>
                                    <li style="margin-bottom: 0.5rem;"><i class="fas fa-check me-2" style="color: #10b981;"></i>Design responsif dengan Bootstrap</li>
                                    <li style="margin-bottom: 0.5rem;"><i class="fas fa-check me-2" style="color: #10b981;"></i>Navigasi yang user-friendly</li>
                                </ul>
                            </div>

                            <div class="col-md-6">
                                <h4 style="color: #1e40af; font-weight: 700; margin-bottom: 1rem;">
                                    <i class="fas fa-code me-2" style="color: #3b82f6;"></i>Teknologi yang Digunakan
                                </h4>
                                <div class="row g-3">
                                    <div class="col-6">
                                        <div style="background: linear-gradient(135deg, #f8fafc 0%, #f1f5f9 100%); border-radius: 12px; padding: 1.5rem; text-align: center; border: 2px solid rgba(59, 130, 246, 0.1);">
                                            <i class="fab fa-laravel" style="font-size: 2rem; color: #dc2626;"></i>
                                            <h6 style="margin-top: 0.5rem; color: #374151; font-weight: 600;">Laravel 11</h6>
                                        </div>
                                    </div>
                                    <div class="col-6">
                                        <div style="background: linear-gradient(135deg, #f8fafc 0%, #f1f5f9 100%); border-radius: 12px; padding: 1.5rem; text-align: center; border: 2px solid rgba(59, 130, 246, 0.1);">
                                            <i class="fab fa-bootstrap" style="font-size: 2rem; color: #3b82f6;"></i>
                                            <h6 style="margin-top: 0.5rem; color: #374151; font-weight: 600;">Bootstrap 5</h6>
                                        </div>
                                    </div>
                                    <div class="col-6">
                                        <div style="background: linear-gradient(135deg, #f8fafc 0%, #f1f5f9 100%); border-radius: 12px; padding: 1.5rem; text-align: center; border: 2px solid rgba(59, 130, 246, 0.1);">
                                            <i class="fab fa-php" style="font-size: 2rem; color: #06b6d4;"></i>
                                            <h6 style="margin-top: 0.5rem; color: #374151; font-weight: 600;">PHP 8.2+</h6>
                                        </div>
                                    </div>
                                    <div class="col-6">
                                        <div style="background: linear-gradient(135deg, #f8fafc 0%, #f1f5f9 100%); border-radius: 12px; padding: 1.5rem; text-align: center; border: 2px solid rgba(59, 130, 246, 0.1);">
                                            <i class="fas fa-leaf" style="font-size: 2rem; color: #10b981;"></i>
                                            <h6 style="margin-top: 0.5rem; color: #374151; font-weight: 600;">Blade Template</h6>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <hr style="margin: 2rem 0; border-color: #e5e7eb;">

                        <div class="row">
                            <div class="col-md-12">
                                <h4 style="color: #1e40af; font-weight: 700; margin-bottom: 1rem;">
                                    <i class="fas fa-users me-2" style="color: #3b82f6;"></i>Data Siswa
                                </h4>
                                <p style="color: #374151; line-height: 1.6; margin-bottom: 1.5rem;">Aplikasi ini mengelola data siswa dari berbagai jurusan:</p>
                                
                                <div class="row g-3">
                                    <div class="col-md-4">
                                        <div style="background: linear-gradient(135deg, #f0fdf4 0%, #dcfce7 100%); border: 2px solid rgba(16, 185, 129, 0.2); border-radius: 15px; padding: 1.5rem; text-align: center;">
                                            <i class="fas fa-laptop-code" style="font-size: 2rem; color: #10b981;"></i>
                                            <h5 style="margin-top: 1rem; color: #374151; font-weight: 700;">RPL</h5>
                                            <p style="color: #6b7280; margin-bottom: 1rem;">Rekayasa Perangkat Lunak</p>
                                            <span style="background: linear-gradient(135deg, #f59e0b, #d97706); color: white; padding: 0.5rem 1rem; border-radius: 20px; font-weight: 500; font-size: 0.9rem;">Program Unggulan</span>
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div style="background: linear-gradient(135deg, #f0f9ff 0%, #e0f2fe 100%); border: 2px solid rgba(6, 182, 212, 0.2); border-radius: 15px; padding: 1.5rem; text-align: center;">
                                            <i class="fas fa-network-wired" style="font-size: 2rem; color: #06b6d4;"></i>
                                            <h5 style="margin-top: 1rem; color: #374151; font-weight: 700;">TKJ</h5>
                                            <p style="color: #6b7280; margin-bottom: 1rem;">Teknik Komputer Jaringan</p>
                                            <span style="background: linear-gradient(135deg, #6b7280, #4b5563); color: white; padding: 0.5rem 1rem; border-radius: 20px; font-weight: 500; font-size: 0.9rem;">Program Reguler</span>
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div style="background: linear-gradient(135deg, #fafafa 0%, #f4f4f5 100%); border: 2px solid rgba(107, 114, 128, 0.2); border-radius: 15px; padding: 1.5rem; text-align: center;">
                                            <i class="fas fa-photo-video" style="font-size: 2rem; color: #6b7280;"></i>
                                            <h5 style="margin-top: 1rem; color: #374151; font-weight: 700;">MM</h5>
                                            <p style="color: #6b7280; margin-bottom: 1rem;">Multimedia</p>
                                            <span style="background: linear-gradient(135deg, #6b7280, #4b5563); color: white; padding: 0.5rem 1rem; border-radius: 20px; font-weight: 500; font-size: 0.9rem;">Program Reguler</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="text-center mt-4">
                            <a href="{{ route('students.index') }}" class="btn" style="background: linear-gradient(135deg, #1e40af, #3b82f6); color: white; border: none; border-radius: 12px; padding: 1rem 2rem; font-weight: 600; text-decoration: none; font-size: 1.1rem; transition: all 0.2s ease;" onmouseover="this.style.background='linear-gradient(135deg, #3b82f6, #60a5fa)'; this.style.transform='translateY(-1px)'; this.style.boxShadow='0 6px 15px rgba(59, 130, 246, 0.3)'" onmouseout="this.style.background='linear-gradient(135deg, #1e40af, #3b82f6)'; this.style.transform='translateY(0)'; this.style.boxShadow='none'">
                                <i class="fas fa-users me-2"></i>Lihat Data Siswa
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection