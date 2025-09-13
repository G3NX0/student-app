@extends('layouts.app')

@section('title', 'Daftar Siswa - Student App')



@section('content')
<style>
    table thead {
        background-color: #000 !important;
        color: #fff !important;
    }
    table thead th {
        color: #fff !important;
    }
    .badge-kelas {
        display: inline-flex;
        align-items: center;
        justify-content: center;
        min-width: 90px;       /* biar semua rata */
        padding: 0.45rem 0.8rem;
        border-radius: 20px;
        font-weight: 600;
        font-size: 0.8rem;
    }
    .badge-kelas i {
        font-size: 0.9rem;
    }
</style>

<div class="container my-5">
    <div class="row justify-content-center">
        <div class="col-12 col-xl-11">
            @if(session('success'))
            <div class="alert alert-dismissible fade show mb-4" role="alert" style="background: linear-gradient(135deg, #10b981 0%, #059669 100%); color: white; border: none; border-radius: 15px; box-shadow: 0 8px 25px rgba(16, 185, 129, 0.3);">
                <i class="fas fa-check-circle me-2"></i>{{ session('success') }}
                <button type="button" class="btn-close btn-close-white" data-bs-dismiss="alert"></button>
            </div>
            @endif

            <div class="card" style="background: linear-gradient(135deg, #0f172a 0%, #1e293b 100%); border: none; border-radius: 20px; box-shadow: 0 20px 40px rgba(0,0,0,0.3); border: 2px solid rgba(59, 130, 246, 0.2); overflow: hidden;">
                
                <!-- Card Header -->
                <div class="card-header d-flex justify-content-between align-items-center" style="background: linear-gradient(135deg, #1e40af 0%, #3b82f6 100%); border: none; padding: 1.5rem 2rem;">
                    <h3 class="card-title mb-0" style="color: white; font-weight: 700; font-size: 1.5rem;">
                        <div style="background: rgba(255,255,255,0.2); width: 45px; height: 45px; border-radius: 12px; display: inline-flex; align-items: center; justify-content: center; margin-right: 1rem; vertical-align: middle;">
                            <i class="fas fa-users" style="color: white; font-size: 1.2rem;"></i>
                        </div>
                        Daftar Siswa
                    </h3>
                    <a href="{{ route('students.create') }}" class="btn" style="background: white; color: #1e40af; border: none; border-radius: 12px; padding: 0.75rem 1.5rem; font-weight: 600; transition: all 0.3s ease; text-decoration: none;" onmouseover="this.style.background='#f8fafc'; this.style.transform='translateY(-2px)'; this.style.boxShadow='0 8px 20px rgba(255,255,255,0.2)'" onmouseout="this.style.background='white'; this.style.transform='translateY(0)'; this.style.boxShadow='none'">
                        <i class="fas fa-plus me-2"></i>Tambah Siswa
                    </a>
                </div>

                <!-- Card Body -->
                <div class="card-body" style="padding: 1.5rem;">
                    <div class="table-responsive">
                        <table class="table table-striped" style="border-radius: 15px; overflow: hidden; box-shadow: 0 10px 25px rgba(0,0,0,0.1); background: white;">
                            <thead style="background: #000; color: #fff; border-bottom: 2px solid rgba(59, 130, 246, 0.2); box-shadow: 0 4px 15px rgba(0,0,0,0.1);" class="table-dark"> 
                                <tr>
                                    <th style="color: #ffffff; font-weight: 600; padding: 1rem 0.75rem; border: none; font-size: 0.95rem;">ID</th>
                                    <th style="color: #ffffff; font-weight: 600; padding: 1rem 0.75rem; border: none; font-size: 0.95rem;">Nama</th>
                                    <th style="color: #ffffff; font-weight: 600; padding: 1rem 0.75rem; border: none; font-size: 0.95rem;">Jurusan</th>
                                    <th style="color: #ffffff; font-weight: 600; padding: 1rem 0.75rem; border: none; font-size: 0.95rem;">Kelas</th>
                                    <th style="color: #ffffff; font-weight: 600; padding: 1rem 0.75rem; border: none; font-size: 0.95rem;">Aksi</th>
                                </tr>
                            </thead>
                            <tbody>
                            @foreach($students as $index => $student)
                                <tr>
                                    <td style="padding: 0.75rem; font-weight: 700; color: #212529;">{{ $index + 1 }}</td>
                                    <td style="padding: 0.75rem; color: #212529; font-weight: 500;">{{ $student['nama'] }}</td>
                                    <td style="padding: 0.75rem;">
                                        @if($student['jurusan'] == 'RPL')
                                        <span class="badge bg-success" style="padding: 0.4rem 0.8rem; border-radius: 20px; font-weight: 500; font-size: 0.8rem;">{{ $student['jurusan'] }}</span>
                                        @elseif($student['jurusan'] == 'TKJ')
                                        <span class="badge bg-primary" style="padding: 0.4rem 0.8rem; border-radius: 20px; font-weight: 500; font-size: 0.8rem;">{{ $student['jurusan'] }}</span>
                                        @else
                                        <span class="badge bg-secondary" style="padding: 0.4rem 0.8rem; border-radius: 20px; font-weight: 500; font-size: 0.8rem;">{{ $student['jurusan'] }}</span>
                                        @endif
                                    </td>
                                    <td style="padding: 0.75rem;">
    @if($student['kelas'] == 'X')
        <span class="badge badge-kelas bg-warning text-dark">
            <i class="fas fa-school me-1"></i>Kelas X
        </span>
    @elseif($student['kelas'] == 'XI')
        <span class="badge badge-kelas bg-info text-dark">
            <i class="fas fa-school me-1"></i>Kelas XI
        </span>
    @else
        <span class="badge badge-kelas bg-success">
            <i class="fas fa-school me-1"></i>Kelas XII
        </span>
    @endif
</td>
                                    <td style="padding: 0.75rem;">
                                        <a href="{{ route('students.show', $student['id']) }}" class="btn btn-sm btn-outline-primary" style="border-radius: 8px; padding: 0.4rem 0.8rem; font-weight: 500; text-decoration: none; font-size: 0.85rem;">
                                            <i class="fas fa-eye me-1"></i> Detail
                                        </a>
                                    </td>
                                </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>

                    <!-- Total Info -->
                    <div class="mt-3">
                        <div class="alert" style="background: linear-gradient(135deg, #dbeafe 0%, #bfdbfe 100%); color: #1e40af; border: 2px solid rgba(59, 130, 246, 0.2); border-radius: 12px; padding: 1rem;">
                            <div style="background: #3b82f6; width: 30px; height: 30px; border-radius: 50%; display: inline-flex; align-items: center; justify-content: center; margin-right: 0.75rem; vertical-align: middle;">
                                <i class="fas fa-info-circle" style="color: white; font-size: 0.9rem;"></i>
                            </div>
                            <strong>Total siswa: {{ count($students) }} orang</strong>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>


<!-- Delete Modal -->
<div class="modal fade" id="deleteModal" tabindex="-1">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">Konfirmasi Hapus</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
            </div>
            <div class="modal-body">
                <p>Apakah Anda yakin ingin menghapus siswa <strong id="studentName"></strong>?</p>
                <p class="text-danger"><i class="fas fa-exclamation-triangle me-2"></i>Tindakan ini tidak dapat dibatalkan!</p>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Batal</button>
                <form id="deleteForm" method="POST" style="display: inline;">
                    @csrf
                    @method('DELETE')
                    <button type="submit" class="btn btn-danger">
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