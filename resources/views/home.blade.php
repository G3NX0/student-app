@extends('layouts.app')

@section('title', 'Student App - Home')

@section('content')
<div class="container my-5">
    <!-- Hero Section -->
    <div class="row justify-content-center mb-5">
        <div class="col-md-12">
            <div class="card" style="background: linear-gradient(135deg, #0f172a 0%, #1e293b 100%); border: none; border-radius: 25px; box-shadow: 0 20px 40px rgba(0,0,0,0.3); border: 2px solid rgba(59, 130, 246, 0.2); overflow: hidden;">
                <div class="card-body p-0">
                    <div class="row align-items-center">
                        <!-- Left Side - Visual -->
                        <div class="col-md-5 text-center p-5">
                            <div class="mb-4" style="background: rgba(59, 130, 246, 0.1); width: 150px; height: 150px; border-radius: 50%; display: flex; align-items: center; justify-content: center; margin: 0 auto; border: 3px solid rgba(59, 130, 246, 0.3); box-shadow: 0 10px 30px rgba(59, 130, 246, 0.2);">
                                <i class="fas fa-graduation-cap" style="font-size: 5rem; color: #60a5fa;"></i>
                            </div>
                            <!-- Additional Visual Elements -->
                            <div class="row g-2 mt-4">
                                <div class="col-4">
                                    <div style="background: rgba(16, 185, 129, 0.1); padding: 1rem; border-radius: 12px; border: 2px solid rgba(16, 185, 129, 0.2);">
                                        <i class="fas fa-laptop-code" style="color: #10b981; font-size: 1.5rem;"></i>
                                        <small style="color: #cbd5e1; display: block; margin-top: 0.5rem;">RPL</small>
                                    </div>
                                </div>
                                <div class="col-4">
                                    <div style="background: rgba(6, 182, 212, 0.1); padding: 1rem; border-radius: 12px; border: 2px solid rgba(6, 182, 212, 0.2);">
                                        <i class="fas fa-network-wired" style="color: #06b6d4; font-size: 1.5rem;"></i>
                                        <small style="color: #cbd5e1; display: block; margin-top: 0.5rem;">TKJ</small>
                                    </div>
                                </div>
                                <div class="col-4">
                                    <div style="background: rgba(107, 114, 128, 0.1); padding: 1rem; border-radius: 12px; border: 2px solid rgba(107, 114, 128, 0.2);">
                                        <i class="fas fa-photo-video" style="color: #9ca3af; font-size: 1.5rem;"></i>
                                        <small style="color: #cbd5e1; display: block; margin-top: 0.5rem;">MM</small>
                                    </div>
                                </div>
                            </div>
                        </div>
                        
                        <!-- Right Side - Content -->
                        <div class="col-md-7 p-5">
                            <h1 class="display-5 fw-bold mb-4" style="color: #ffffff; text-shadow: 0 2px 10px rgba(0,0,0,0.3);">
                                Student Management System
                            </h1>
                            <p class="lead mb-4" style="color: #cbd5e1; line-height: 1.8; font-size: 1.1rem;">
                                Selamat datang di platform manajemen siswa terdepan yang dirancang khusus untuk institusi pendidikan modern. Dengan teknologi Laravel terbaru dan antarmuka yang intuitif.
                            </p>
                            
                            <!-- Feature Highlights -->
                            <div class="mb-4">
                                <div class="d-flex align-items-center mb-2">
                                    <i class="fas fa-check-circle me-3" style="color: #10b981; font-size: 1.2rem;"></i>
                                    <span style="color: #e2e8f0; font-weight: 500;">Manajemen data siswa yang komprehensif</span>
                                </div>
                                <div class="d-flex align-items-center mb-2">
                                    <i class="fas fa-check-circle me-3" style="color: #10b981; font-size: 1.2rem;"></i>
                                    <span style="color: #e2e8f0; font-weight: 500;">Interface responsif dan user-friendly</span>
                                </div>
                                <div class="d-flex align-items-center mb-2">
                                    <i class="fas fa-check-circle me-3" style="color: #10b981; font-size: 1.2rem;"></i>
                                    <span style="color: #e2e8f0; font-weight: 500;">Sistem keamanan data yang terjamin</span>
                                </div>
                            </div>

                            <div class="row g-3">
                                <div class="col-md-6">
                                    <a href="{{ route('students.index') }}" class="btn btn-lg w-100" style="background: linear-gradient(135deg, #1e40af, #3b82f6); color: white; border: none; border-radius: 15px; padding: 1rem 2rem; font-weight: 600; transition: all 0.2s ease; text-decoration: none;" onmouseover="this.style.background='linear-gradient(135deg, #3b82f6, #60a5fa)'; this.style.transform='translateY(-1px)'; this.style.boxShadow='0 6px 15px rgba(59, 130, 246, 0.3)'" onmouseout="this.style.background='linear-gradient(135deg, #1e40af, #3b82f6)'; this.style.transform='translateY(0)'; this.style.boxShadow='none'">
                                        <i class="fas fa-users me-2"></i>Lihat Data Siswa
                                    </a>
                                </div>
                                <div class="col-md-6">
                                    <a href="{{ route('about') }}" class="btn btn-lg w-100" style="background: transparent; color: #60a5fa; border: 2px solid #3b82f6; border-radius: 15px; padding: 1rem 2rem; font-weight: 600; transition: all 0.2s ease; text-decoration: none;" onmouseover="this.style.background='rgba(59, 130, 246, 0.1)'; this.style.transform='translateY(-1px)'; this.style.color='#ffffff'" onmouseout="this.style.background='transparent'; this.style.transform='translateY(0)'; this.style.color='#60a5fa'">
                                        <i class="fas fa-info-circle me-2"></i>Tentang Aplikasi
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Features Section -->
    <div class="row mb-5">
        <div class="col-md-12">
            <div class="card" style="background: linear-gradient(135deg, #0f172a 0%, #1e293b 100%); border: none; border-radius: 20px; box-shadow: 0 20px 40px rgba(0,0,0,0.3); border: 2px solid rgba(59, 130, 246, 0.2);">
                <div class="card-body p-4">
                    <div style="background: white; border-radius: 15px; padding: 2rem;">
                        <h2 class="text-center mb-4" style="color: #1e40af; font-weight: 700;">
                            <i class="fas fa-star me-2" style="color: #f59e0b;"></i>Mengapa Memilih Student App?
                        </h2>
                        
                        <div class="row g-4">
                            <div class="col-md-4">
                                <div class="text-center">
                                    <div style="background: linear-gradient(135deg, #dbeafe 0%, #bfdbfe 100%); width: 80px; height: 80px; border-radius: 50%; display: flex; align-items: center; justify-content: center; margin: 0 auto 1rem; border: 2px solid rgba(59, 130, 246, 0.2);">
                                        <i class="fas fa-shield-alt" style="font-size: 2rem; color: #3b82f6;"></i>
                                    </div>
                                    <h5 style="color: #1e40af; font-weight: 600; margin-bottom: 1rem;">Keamanan Terjamin</h5>
                                    <p style="color: #6b7280; line-height: 1.6;">Data siswa dilindungi dengan sistem keamanan berlapis dan enkripsi tingkat enterprise untuk menjamin privasi informasi.</p>
                                </div>
                            </div>
                            
                            <div class="col-md-4">
                                <div class="text-center">
                                    <div style="background: linear-gradient(135deg, #f0fdf4 0%, #dcfce7 100%); width: 80px; height: 80px; border-radius: 50%; display: flex; align-items: center; justify-content: center; margin: 0 auto 1rem; border: 2px solid rgba(16, 185, 129, 0.2);">
                                        <i class="fas fa-rocket" style="font-size: 2rem; color: #10b981;"></i>
                                    </div>
                                    <h5 style="color: #1e40af; font-weight: 600; margin-bottom: 1rem;">Performa Cepat</h5>
                                    <p style="color: #6b7280; line-height: 1.6;">Dibangun dengan Laravel 11 dan teknologi modern untuk memberikan pengalaman yang responsif dan loading yang cepat.</p>
                                </div>
                            </div>
                            
                            <div class="col-md-4">
                                <div class="text-center">
                                    <div style="background: linear-gradient(135deg, #fef3c7 0%, #fde68a 100%); width: 80px; height: 80px; border-radius: 50%; display: flex; align-items: center; justify-content: center; margin: 0 auto 1rem; border: 2px solid rgba(245, 158, 11, 0.2);">
                                        <i class="fas fa-users-cog" style="font-size: 2rem; color: #f59e0b;"></i>
                                    </div>
                                    <h5 style="color: #1e40af; font-weight: 600; margin-bottom: 1rem;">Mudah Digunakan</h5>
                                    <p style="color: #6b7280; line-height: 1.6;">Interface yang intuitif dan user-friendly memungkinkan pengguna dari berbagai tingkat keahlian untuk mengoperasikan dengan mudah.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Statistics Section -->
    <div class="row">
        <div class="col-md-12">
            <div class="card" style="background: linear-gradient(135deg, #0f172a 0%, #1e293b 100%); border: none; border-radius: 20px; box-shadow: 0 20px 40px rgba(0,0,0,0.3); border: 2px solid rgba(59, 130, 246, 0.2);">
                <div class="card-body p-4">
                    <div style="background: white; border-radius: 15px; padding: 2rem;">
                        <h2 class="text-center mb-4" style="color: #1e40af; font-weight: 700;">
                            <i class="fas fa-chart-line me-2" style="color: #10b981;"></i>Statistik Platform
                        </h2>
                        
                        <div class="row g-4 text-center">
                            <div class="col-md-3">
                                <div style="background: linear-gradient(135deg, #f0fdf4 0%, #dcfce7 100%); padding: 2rem 1rem; border-radius: 15px; border: 2px solid rgba(16, 185, 129, 0.2);">
                                    <h3 style="color: #10b981; font-weight: 700; font-size: 2.5rem; margin-bottom: 0.5rem;">3</h3>
                                    <p style="color: #374151; font-weight: 600; margin: 0;">Jurusan Tersedia</p>
                                    <small style="color: #6b7280;">RPL, TKJ, MM</small>
                                </div>
                            </div>
                            
                            <div class="col-md-3">
                                <div style="background: linear-gradient(135deg, #dbeafe 0%, #bfdbfe 100%); padding: 2rem 1rem; border-radius: 15px; border: 2px solid rgba(59, 130, 246, 0.2);">
                                    <h3 style="color: #3b82f6; font-weight: 700; font-size: 2.5rem; margin-bottom: 0.5rem;">100%</h3>
                                    <p style="color: #374151; font-weight: 600; margin: 0;">Responsif</p>
                                    <small style="color: #6b7280;">Semua Device</small>
                                </div>
                            </div>
                            
                            <div class="col-md-3">
                                <div style="background: linear-gradient(135deg, #fef3c7 0%, #fde68a 100%); padding: 2rem 1rem; border-radius: 15px; border: 2px solid rgba(245, 158, 11, 0.2);">
                                    <h3 style="color: #f59e0b; font-weight: 700; font-size: 2.5rem; margin-bottom: 0.5rem;">24/7</h3>
                                    <p style="color: #374151; font-weight: 600; margin: 0;">Akses Online</p>
                                    <small style="color: #6b7280;">Kapan Saja</small>
                                </div>
                            </div>
                            
                            <div class="col-md-3">
                                <div style="background: linear-gradient(135deg, #fef2f2 0%, #fee2e2 100%); padding: 2rem 1rem; border-radius: 15px; border: 2px solid rgba(239, 68, 68, 0.2);">
                                    <h3 style="color: #ef4444; font-weight: 700; font-size: 2.5rem; margin-bottom: 0.5rem;">∞</h3>
                                    <p style="color: #374151; font-weight: 600; margin: 0;">Data Capacity</p>
                                    <small style="color: #6b7280;">Unlimited</small>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection