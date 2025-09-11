@extends('layouts.app')

@section('title', 'Student App - Home')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card mt-5" style="background: linear-gradient(135deg, #0f172a 0%, #1e293b 100%); border: none; border-radius: 25px; box-shadow: 0 20px 40px rgba(0,0,0,0.3); border: 2px solid rgba(59, 130, 246, 0.2);">
                <div class="card-body text-center p-5">
                    <div class="mb-4" style="background: rgba(59, 130, 246, 0.1); width: 120px; height: 120px; border-radius: 50%; display: flex; align-items: center; justify-content: center; margin: 0 auto; border: 3px solid rgba(59, 130, 246, 0.3); box-shadow: 0 10px 30px rgba(59, 130, 246, 0.2);">
                        <i class="fas fa-graduation-cap" style="font-size: 4rem; color: #60a5fa;"></i>
                    </div>
                    <h1 class="display-4 fw-bold mb-4" style="color: #ffffff; text-shadow: 0 2px 10px rgba(0,0,0,0.3);">Selamat Datang di Student App</h1>
                    <p class="lead mb-4" style="color: #cbd5e1; line-height: 1.8; font-size: 1.2rem;">
                        Sistem manajemen data siswa yang mudah dan efisien. 
                        Kelola informasi siswa dengan antarmuka yang user-friendly.
                    </p>
                    <div class="row g-3 mt-4">
                        <div class="col-md-6">
                            <a href="{{ route('students.index') }}" class="btn btn-lg w-100" style="background: #1e40af; color: white; border: 2px solid #3b82f6; border-radius: 15px; padding: 1rem 2rem; font-weight: 600; transition: all 0.3s ease; text-decoration: none;" onmouseover="this.style.background='#2563eb'; this.style.transform='translateY(-2px)'; this.style.boxShadow='0 10px 25px rgba(37, 99, 235, 0.4)'" onmouseout="this.style.background='#1e40af'; this.style.transform='translateY(0)'; this.style.boxShadow='none'">
                                <i class="fas fa-users me-2"></i>Lihat Data Siswa
                            </a>
                        </div>
                        <div class="col-md-6">
                            <a href="{{ route('about') }}" class="btn btn-lg w-100" style="background: transparent; color: #60a5fa; border: 2px solid #3b82f6; border-radius: 15px; padding: 1rem 2rem; font-weight: 600; transition: all 0.3s ease; text-decoration: none;" onmouseover="this.style.background='rgba(59, 130, 246, 0.1)'; this.style.transform='translateY(-2px)'; this.style.color='#ffffff'" onmouseout="this.style.background='transparent'; this.style.transform='translateY(0)'; this.style.color='#60a5fa'">
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