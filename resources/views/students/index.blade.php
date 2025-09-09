@extends('layouts.app')

@section('title', 'Daftar Siswa - Student App')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-12">
            <!-- Alert Messages -->
            @if(session('success'))
            <div class="alert alert-success alert-dismissible fade show" role="alert">
                <i class="fas fa-check-circle me-2"></i>{{ session('success') }}
                <button type="button" class="btn-close" data-bs-dismiss="alert"></button>
            </div>
            @endif

            <div class="card card-custom">
                <div class="card-header bg-primary text-white d-flex justify-content-between align-items-center">
                    <h3 class="card-title mb-0">
                        <i class="fas fa-users me-2"></i>Daftar Siswa
                    </h3>
                    <a href="{{ route('students.create') }}" class="btn btn-light btn-sm">
                        <i class="fas fa-plus me-2"></i>Tambah Siswa
                    </a>
                </div>
                <div class="card-body">
                    <div class="table-responsive">
                        <table class="table table-hover">
                            <thead class="table-dark">
                                <tr>
                                    <th>ID</th>
                                    <th>Nama</th>
                                    <th>Jurusan</th>
                                    <th>Status</th>
                                    <th>Aksi</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach($students as $student)
                                <tr>
                                    <td><strong>{{ $student['id'] }}</strong></td>
                                    <td>{{ $student['nama'] }}</td>
                                    <td>
                                        @if($student['jurusan'] == 'RPL')
                                            <span class="badge bg-success">{{ $student['jurusan'] }}</span>
                                        @elseif($student['jurusan'] == 'TKJ')
                                            <span class="badge bg-info">{{ $student['jurusan'] }}</span>
                                        @else
                                            <span class="badge bg-secondary">{{ $student['jurusan'] }}</span>
                                        @endif
                                    </td>
                                    <td>
                                        @if($student['jurusan'] == 'RPL')
                                            <span class="badge bg-warning text-dark">
                                                <i class="fas fa-star me-1"></i>Unggulan
                                            </span>
                                        @else
                                            <span class="badge bg-light text-dark">Reguler</span>
                                        @endif
                                    </td>
                                    <td>
                                        <div class="btn-group" role="group">
                                            <a href="{{ route('students.show', $student['id']) }}" class="btn btn-sm btn-outline-info">
                                                <i class="fas fa-eye"></i> Detail
                                            </a>
                                            
                                        </div>
                                    </td>
                                </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                    
                    <div class="mt-3">
                        <div class="alert alert-info">
                            <i class="fas fa-info-circle me-2"></i>
                            Total siswa: <strong>{{ count($students) }}</strong> orang
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