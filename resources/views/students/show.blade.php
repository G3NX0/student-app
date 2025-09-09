@extends('layouts.app')

@section('title', 'Detail Siswa - ' . $student['nama'])

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card card-custom">
                <div class="card-header bg-primary text-white">
                    <h3 class="card-title mb-0">
                        <i class="fas fa-user me-2"></i>Detail Siswa
                    </h3>
                </div>
                <div class="card-body">
                    <div class="row">
                        <div class="col-md-4 text-center">
                            <div class="mb-3">
                                <i class="fas fa-user-circle" style="font-size: 6rem; color: #667eea;"></i>
                            </div>
                            @if($student['jurusan'] == 'RPL')
                                <span class="badge bg-warning text-dark fs-6">
                                    <i class="fas fa-star me-1"></i>Siswa Unggulan
                                </span>
                            @endif
                        </div>
                        <div class="col-md-8">
                            <table class="table table-borderless">
                                <tr>
                                    <td><strong>ID Siswa:</strong></td>
                                    <td>{{ $student['id'] }}</td>
                                </tr>
                                <tr>
                                    <td><strong>Nama Lengkap:</strong></td>
                                    <td>{{ $student['nama'] }}</td>
                                </tr>
                                <tr>
                                    <td><strong>Jurusan:</strong></td>
                                    <td>
                                        @if($student['jurusan'] == 'RPL')
                                            <span class="badge bg-success fs-6">Rekayasa Perangkat Lunak</span>
                                        @elseif($student['jurusan'] == 'TKJ')
                                            <span class="badge bg-info fs-6">Teknik Komputer Jaringan</span>
                                        @else
                                            <span class="badge bg-secondary fs-6">Multimedia</span>
                                        @endif
                                    </td>
                                </tr>
                                <tr>
                                    <td><strong>Status:</strong></td>
                                    <td>
                                        <span class="badge bg-success">Aktif</span>
                                    </td>
                                </tr>
                            </table>
                        </div>
                    </div>
                    
                    @if($student['jurusan'] == 'RPL')
                    <div class="alert alert-success mt-4">
                        <h5><i class="fas fa-trophy me-2"></i>Informasi Khusus</h5>
                        <p class="mb-0">Siswa jurusan RPL mendapat program pelatihan coding intensif dan sertifikasi internasional.</p>
                    </div>
                    @endif
                    
                    <div class="mt-4 d-flex gap-2">
                        <a href="{{ route('students.edit', $student['id']) }}" class="btn btn-warning">
                            <i class="fas fa-edit me-2"></i>Edit Data
                        </a>
                        <button type="button" class="btn btn-danger" onclick="confirmDelete({{ $student['id'] }}, '{{ $student['nama'] }}')">
                            <i class="fas fa-trash me-2"></i>Hapus
                        </button>
                        <a href="{{ route('students.index') }}" class="btn btn-secondary">
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