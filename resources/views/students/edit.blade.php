@extends('layouts.app')

@section('title', 'Edit Siswa - ' . $student['nama'])

@section('content')
<div class="container my-5">
    <div class="row justify-content-center">
        <div class="col-md-9">
            <div class="card" style="background: linear-gradient(135deg, #0f172a 0%, #1e293b 100%); border: none; border-radius: 20px; box-shadow: 0 20px 40px rgba(0,0,0,0.3); border: 2px solid rgba(59, 130, 246, 0.2); overflow: hidden;">
                
                <!-- Card Header -->
                <div class="card-header" style="background: linear-gradient(135deg, #d97706 0%, #f59e0b 100%); border: none; padding: 1.5rem 2rem;">
                    <h3 class="card-title mb-0" style="color: white; font-weight: 700; font-size: 1.5rem;">
                        <div style="background: rgba(255,255,255,0.2); width: 45px; height: 45px; border-radius: 12px; display: inline-flex; align-items: center; justify-content: center; margin-right: 1rem; vertical-align: middle;">
                            <i class="fas fa-edit" style="color: white; font-size: 1.2rem;"></i>
                        </div>
                        Edit Data Siswa
                    </h3>
                </div>

                <!-- Card Body -->
                <div class="card-body" style="padding: 2rem;">
                    <div style="background: white; border-radius: 15px; padding: 2rem; box-shadow: 0 10px 25px rgba(0,0,0,0.1);">
                        <form action="{{ route('students.update', $student['id']) }}" method="POST">
                            @csrf
                            @method('PUT')
                            
                            <div class="mb-4">
                                <label for="nama" class="form-label" style="color: #374151; font-weight: 600; font-size: 1rem; margin-bottom: 0.75rem;">Nama Lengkap</label>
                                <input type="text" class="form-control @error('nama') is-invalid @enderror" 
                                       id="nama" name="nama" value="{{ old('nama', $student['nama']) }}" required
                                       style="border: 2px solid #e5e7eb; border-radius: 12px; padding: 0.75rem 1rem; font-size: 1rem; transition: all 0.3s ease;"
                                       onfocus="this.style.borderColor='#3b82f6'; this.style.boxShadow='0 0 0 3px rgba(59, 130, 246, 0.1)'"
                                       onblur="this.style.borderColor='#e5e7eb'; this.style.boxShadow='none'">
                                @error('nama')
                                    <div class="invalid-feedback">{{ $message }}</div>
                                @enderror
                            </div>

                            <div class="mb-4">
                                <label for="jurusan" class="form-label" style="color: #374151; font-weight: 600; font-size: 1rem; margin-bottom: 0.75rem;">Jurusan</label>
                                <select class="form-select @error('jurusan') is-invalid @enderror" 
                                        id="jurusan" name="jurusan" required
                                        style="border: 2px solid #e5e7eb; border-radius: 12px; padding: 0.75rem 1rem; font-size: 1rem; transition: all 0.3s ease;"
                                        onfocus="this.style.borderColor='#3b82f6'; this.style.boxShadow='0 0 0 3px rgba(59, 130, 246, 0.1)'"
                                        onblur="this.style.borderColor='#e5e7eb'; this.style.boxShadow='none'">
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

                            <div class="alert mb-4" style="background: linear-gradient(135deg, #dbeafe 0%, #bfdbfe 100%); color: #1e40af; border: 2px solid rgba(59, 130, 246, 0.2); border-radius: 12px; padding: 1.25rem;">
                                <div style="background: #3b82f6; width: 30px; height: 30px; border-radius: 50%; display: inline-flex; align-items: center; justify-content: center; margin-right: 0.75rem; vertical-align: middle;">
                                    <i class="fas fa-info-circle" style="color: white; font-size: 0.9rem;"></i>
                                </div>
                                <strong>Info:</strong> Perubahan jurusan akan mempengaruhi status siswa (Unggulan/Reguler).
                            </div>

                            <div class="d-flex gap-3 flex-wrap">
                                <button type="submit" class="btn" style="background: linear-gradient(135deg, #d97706, #f59e0b); color: white; border: none; border-radius: 12px; padding: 0.75rem 1.5rem; font-weight: 600; transition: all 0.2s ease;" onmouseover="this.style.background='linear-gradient(135deg, #f59e0b, #fbbf24)'; this.style.transform='translateY(-1px)'; this.style.boxShadow='0 6px 15px rgba(245, 158, 11, 0.3)'" onmouseout="this.style.background='linear-gradient(135deg, #d97706, #f59e0b)'; this.style.transform='translateY(0)'; this.style.boxShadow='none'">
                                    <i class="fas fa-save me-2"></i>Update
                                </button>
                                <a href="{{ route('students.show', $student['id']) }}" class="btn" style="background: linear-gradient(135deg, #0891b2, #06b6d4); color: white; border: none; border-radius: 12px; padding: 0.75rem 1.5rem; font-weight: 600; text-decoration: none; transition: all 0.2s ease;" onmouseover="this.style.background='linear-gradient(135deg, #06b6d4, #22d3ee)'; this.style.transform='translateY(-1px)'; this.style.boxShadow='0 6px 15px rgba(6, 182, 212, 0.3)'" onmouseout="this.style.background='linear-gradient(135deg, #0891b2, #06b6d4)'; this.style.transform='translateY(0)'; this.style.boxShadow='none'">
                                    <i class="fas fa-eye me-2"></i>Lihat Detail
                                </a>
                                <a href="{{ route('students.index') }}" class="btn" style="background: linear-gradient(135deg, #6b7280, #4b5563); color: white; border: none; border-radius: 12px; padding: 0.75rem 1.5rem; font-weight: 600; text-decoration: none; transition: all 0.2s ease;" onmouseover="this.style.background='linear-gradient(135deg, #9ca3af, #6b7280)'; this.style.transform='translateY(-1px)'; this.style.boxShadow='0 6px 15px rgba(107, 114, 128, 0.3)'" onmouseout="this.style.background='linear-gradient(135deg, #6b7280, #4b5563)'; this.style.transform='translateY(0)'; this.style.boxShadow='none'">
                                    <i class="fas fa-arrow-left me-2"></i>Kembali
                                </a>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection