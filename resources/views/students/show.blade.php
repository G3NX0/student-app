@extends('layouts.app')

@section('title', 'Detail Siswa - ' . $student['nama'])

@section('content')
<div class="container my-5">
    <div class="row justify-content-center">
        <div class="col-md-10">
            <div class="card" 
                style="background: linear-gradient(135deg, #0f172a 0%, #1e293b 100%);
                       border: none; border-radius: 20px; 
                       box-shadow: 0 20px 40px rgba(0,0,0,0.3); 
                       border: 2px solid rgba(59, 130, 246, 0.2); 
                       overflow: hidden;">

                <!-- Card Header -->
                <div class="card-header" 
                    style="background: linear-gradient(135deg, #1e40af 0%, #3b82f6 100%);
                           border: none; padding: 1.5rem 2rem;">
                    <h3 class="card-title mb-0" 
                        style="color: white; font-weight: 700; font-size: 1.5rem;">
                        <div style="background: rgba(255,255,255,0.2); width: 45px; height: 45px;
                                    border-radius: 12px; display: inline-flex; align-items: center;
                                    justify-content: center; margin-right: 1rem; vertical-align: middle;">
                            <i class="fas fa-user" style="color: white; font-size: 1.2rem;"></i>
                        </div>
                        Detail Siswa
                    </h3>
                </div>

                <!-- Card Body -->
                <div class="card-body" style="padding: 2rem;">
                    <div class="row">
                        <!-- Profile Section -->
                        <div class="col-md-4 text-center">
                            <div class="mb-4" 
                                style="background: rgba(59, 130, 246, 0.1); width: 150px; height: 150px;
                                       border-radius: 50%; display: flex; align-items: center; justify-content: center;
                                       margin: 0 auto; border: 3px solid rgba(59, 130, 246, 0.3);
                                       box-shadow: 0 10px 30px rgba(59, 130, 246, 0.2);">
                                <i class="fas fa-user-circle" style="font-size: 6rem; color: #60a5fa;"></i>
                            </div>
                            @if($student['jurusan'] == 'RPL')
                                <span class="badge" 
                                    style="background: linear-gradient(135deg, #f59e0b, #d97706);
                                           color: white; padding: 0.75rem 1.5rem; border-radius: 25px;
                                           font-weight: 600; font-size: 1rem;">
                                    <i class="fas fa-star me-2"></i>Siswa Unggulan
                                </span>
                            @endif
                        </div>

                        <!-- Details Section -->
                        <div class="col-md-8">
                            <div style="background: white; border-radius: 15px; padding: 1.5rem; 
                                        box-shadow: 0 10px 25px rgba(0,0,0,0.1);">
                                <table class="table table-borderless mb-0">
                                    <tr>
                                        <td style="padding: 0.75rem 0; font-weight: 600; color: #374151; width: 40%;">ID Siswa:</td>
                                        <td style="padding: 0.75rem 0; color: #1e40af; font-weight: 700; font-size: 1.1rem;">
                                            {{ $student['id'] }}
                                        </td>
                                    </tr>
                                    <tr>
                                        <td style="padding: 0.75rem 0; font-weight: 600; color: #374151;">Nama Lengkap:</td>
                                        <td style="padding: 0.75rem 0; color: #1f2937; font-weight: 600; font-size: 1.1rem;">
                                            {{ $student['nama'] }}
                                        </td>
                                    </tr>
                                    <tr>
                                        <td style="padding: 0.75rem 0; font-weight: 600; color: #374151;">Jurusan:</td>
                                        <td style="padding: 0.75rem 0;">
                                            @if($student['jurusan'] == 'RPL')
                                                <span class="badge" 
                                                    style="background: linear-gradient(135deg, #10b981, #059669);
                                                           color: white; padding: 0.5rem 1rem; border-radius: 20px;
                                                           font-weight: 500; font-size: 0.9rem;">
                                                    Rekayasa Perangkat Lunak
                                                </span>
                                            @elseif($student['jurusan'] == 'TKJ')
                                                <span class="badge" 
                                                    style="background: linear-gradient(135deg, #3b82f6, #1e40af);
                                                           color: white; padding: 0.5rem 1rem; border-radius: 20px;
                                                           font-weight: 500; font-size: 0.9rem;">
                                                    Teknik Komputer Jaringan
                                                </span>
                                            @else
                                                <span class="badge" 
                                                    style="background: linear-gradient(135deg, #6b7280, #4b5563);
                                                           color: white; padding: 0.5rem 1rem; border-radius: 20px;
                                                           font-weight: 500; font-size: 0.9rem;">
                                                    Multimedia
                                                </span>
                                            @endif
                                        </td>
                                    </tr>
                                    <tr>
                                        <td style="padding: 0.75rem 0; font-weight: 600; color: #374151;">Status:</td>
                                        <td style="padding: 0.75rem 0;">
                                            <span class="badge" 
                                                style="background: linear-gradient(135deg, #10b981, #059669);
                                                       color: white; padding: 0.5rem 1rem; border-radius: 20px;
                                                       font-weight: 500; font-size: 0.9rem;">
                                                Aktif
                                            </span>
                                        </td>
                                    </tr>
                                </table>
                            </div>
                        </div>
                    </div>

                    <!-- Extra Info -->
                    @if($student['jurusan'] == 'RPL')
                        <div class="alert mt-4" 
                            style="background: linear-gradient(135deg, #dbeafe 0%, #bfdbfe 100%);
                                   color: #1e40af; border: 2px solid rgba(59, 130, 246, 0.2);
                                   border-radius: 15px; padding: 1.5rem;">
                            <h5 style="color: #1e40af; font-weight: 700; margin-bottom: 1rem;">
                                <div style="background: #3b82f6; width: 35px; height: 35px; border-radius: 50%;
                                            display: inline-flex; align-items: center; justify-content: center;
                                            margin-right: 1rem; vertical-align: middle;">
                                    <i class="fas fa-trophy" style="color: white; font-size: 1rem;"></i>
                                </div>
                                Informasi Khusus
                            </h5>
                            <p class="mb-0" style="color: #1e40af; font-weight: 500; line-height: 1.6;">
                                Siswa jurusan RPL mendapat program pelatihan coding intensif 
                                dan sertifikasi internasional.
                            </p>
                        </div>
                    @endif

                    <!-- Action Buttons -->
                    <div class="mt-4 d-flex gap-3 flex-wrap">
                        <a href="{{ route('students.edit', $student['id']) }}" class="btn" 
                            style="background: linear-gradient(135deg, #f59e0b, #d97706); color: white;
                                   border: none; border-radius: 12px; padding: 0.75rem 1.5rem;
                                   font-weight: 600; text-decoration: none; transition: all 0.3s ease;" 
                            onmouseover="this.style.background='linear-gradient(135deg, #fbbf24, #f59e0b)';
                                         this.style.transform='translateY(-2px)';
                                         this.style.boxShadow='0 6px 12px rgba(245, 158, 11, 0.3)'" 
                            onmouseout="this.style.background='linear-gradient(135deg, #f59e0b, #d97706)';
                                        this.style.transform='translateY(0)';
                                        this.style.boxShadow='none'">
                            <i class="fas fa-edit me-2"></i>Edit Data
                        </a>

                        <button type="button" class="btn" 
                            onclick="confirmDelete({{ $student['id'] }}, '{{ $student['nama'] }}')" 
                            style="background: linear-gradient(135deg, #dc2626, #b91c1c); color: white;
                                   border: none; border-radius: 12px; padding: 0.75rem 1.5rem;
                                   font-weight: 600; transition: all 0.3s ease;" 
                            onmouseover="this.style.background='linear-gradient(135deg, #ef4444, #dc2626)';
                                         this.style.transform='translateY(-2px)';
                                         this.style.boxShadow='0 6px 12px rgba(220, 38, 38, 0.3)'" 
                            onmouseout="this.style.background='linear-gradient(135deg, #dc2626, #b91c1c)';
                                        this.style.transform='translateY(0)';
                                        this.style.boxShadow='none'">
                            <i class="fas fa-trash me-2"></i>Hapus
                        </button>

                        <a href="{{ route('students.index') }}" class="btn" 
                            style="background: linear-gradient(135deg, #6b7280, #4b5563); color: white;
                                   border: none; border-radius: 12px; padding: 0.75rem 1.5rem;
                                   font-weight: 600; text-decoration: none; transition: all 0.3s ease;" 
                            onmouseover="this.style.background='linear-gradient(135deg, #9ca3af, #6b7280)';
                                         this.style.transform='translateY(-2px)';
                                         this.style.boxShadow='0 6px 12px rgba(107, 114, 128, 0.3)'" 
                            onmouseout="this.style.background='linear-gradient(135deg, #6b7280, #4b5563)';
                                        this.style.transform='translateY(0)';
                                        this.style.boxShadow='none'">
                            <i class="fas fa-arrow-left me-2"></i>Kembali ke Daftar
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Delete Modal -->
<div class="modal fade" id="deleteModal" tabindex="-1">
    <div class="modal-dialog">
        <div class="modal-content" style="background: linear-gradient(135deg, #0f172a 0%, #1e293b 100%); border: none; border-radius: 20px; box-shadow: 0 20px 40px rgba(0,0,0,0.5); border: 2px solid rgba(220, 38, 38, 0.3); overflow: hidden;">
            
            <!-- Modal Header -->
            <div class="modal-header" style="background: linear-gradient(135deg, #b91c1c 0%, #dc2626 100%); border: none; padding: 1.5rem 2rem;">
                <h5 class="modal-title" style="color: white; font-weight: 700; font-size: 1.3rem;">
                    <div style="background: rgba(255,255,255,0.2); width: 40px; height: 40px; border-radius: 10px; display: inline-flex; align-items: center; justify-content: center; margin-right: 1rem; vertical-align: middle;">
                        <i class="fas fa-exclamation-triangle" style="color: white; font-size: 1.1rem;"></i>
                    </div>
                    Konfirmasi Hapus
                </h5>
                <button type="button" class="btn-close btn-close-white" data-bs-dismiss="modal" style="filter: brightness(0) invert(1);"></button>
            </div>

            <!-- Modal Body -->
            <div class="modal-body" style="padding: 2rem;">
                <div style="background: white; border-radius: 15px; padding: 1.5rem; box-shadow: 0 10px 25px rgba(0,0,0,0.1);">
                    <p style="color: #374151; font-size: 1.1rem; font-weight: 500; margin-bottom: 1rem;">
                        Apakah Anda yakin ingin menghapus siswa <strong id="studentName" style="color: #1e40af;"></strong>?
                    </p>
                    <div style="background: linear-gradient(135deg, #fef2f2 0%, #fee2e2 100%); color: #dc2626; border: 2px solid rgba(220, 38, 38, 0.2); border-radius: 12px; padding: 1rem;">
                        <div style="background: #dc2626; width: 30px; height: 30px; border-radius: 50%; display: inline-flex; align-items: center; justify-content: center; margin-right: 0.75rem; vertical-align: middle;">
                            <i class="fas fa-exclamation-triangle" style="color: white; font-size: 0.9rem;"></i>
                        </div>
                        <strong>Tindakan ini tidak dapat dibatalkan!</strong>
                    </div>
                </div>
            </div>

            <!-- Modal Footer -->
            <div class="modal-footer" style="background: rgba(255,255,255,0.05); border: none; padding: 1.5rem 2rem;">
                <button type="button" class="btn" data-bs-dismiss="modal" style="background: linear-gradient(135deg, #6b7280, #4b5563); color: white; border: none; border-radius: 12px; padding: 0.75rem 1.5rem; font-weight: 600; transition: all 0.2s ease;" onmouseover="this.style.background='linear-gradient(135deg, #9ca3af, #6b7280)'; this.style.transform='translateY(-1px)'; this.style.boxShadow='0 6px 15px rgba(107, 114, 128, 0.3)'" onmouseout="this.style.background='linear-gradient(135deg, #6b7280, #4b5563)'; this.style.transform='translateY(0)'; this.style.boxShadow='none'">
                    Batal
                </button>
                <form id="deleteForm" method="POST" style="display: inline;">
                    @csrf
                    @method('DELETE')
                    <button type="submit" class="btn" style="background: linear-gradient(135deg, #b91c1c, #dc2626); color: white; border: none; border-radius: 12px; padding: 0.75rem 1.5rem; font-weight: 600; transition: all 0.2s ease;" onmouseover="this.style.background='linear-gradient(135deg, #dc2626, #ef4444)'; this.style.transform='translateY(-1px)'; this.style.boxShadow='0 6px 15px rgba(220, 38, 38, 0.4)'" onmouseout="this.style.background='linear-gradient(135deg, #b91c1c, #dc2626)'; this.style.transform='translateY(0)'; this.style.boxShadow='none'">
                        <i class="fas fa-trash me-2"></i>Hapus
                    </button>
                </form>
            </div>
        </div>
    </div>
</div>

@endsection

@section('scripts')
<script>
    function confirmDelete(id, name) {
        document.getElementById('studentName').textContent = name;
        document.getElementById('deleteForm').action = `/students/${id}`;
        new bootstrap.Modal(document.getElementById('deleteModal')).show();
    }
</script>
@endsection
