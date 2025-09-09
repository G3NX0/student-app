<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class StudentController extends Controller
{
    private function getStudents()
    {
        return session('students', [
            ['id' => 1, 'nama' => 'Ahmad Rizki', 'jurusan' => 'RPL'],
            ['id' => 2, 'nama' => 'Siti Nurhaliza', 'jurusan' => 'TKJ'],
            ['id' => 3, 'nama' => 'Budi Santoso', 'jurusan' => 'RPL'],
            ['id' => 4, 'nama' => 'Maya Sari', 'jurusan' => 'MM'],
            ['id' => 5, 'nama' => 'Doni Pratama', 'jurusan' => 'TKJ'],
            ['id' => 6, 'nama' => 'Rina Wati', 'jurusan' => 'RPL'],
        ]);
    }

    private function saveStudents($students)
    {
        session(['students' => $students]);
    }

    public function index()
    {
        $students = $this->getStudents();
        return view('students.index', compact('students'));
    }

    public function create()
    {
        return view('students.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'nama' => 'required|string|max:255',
            'jurusan' => 'required|in:RPL,TKJ,MM'
        ]);

        $students = $this->getStudents();
        $newId = count($students) > 0 ? max(array_column($students, 'id')) + 1 : 1;
        
        $students[] = [
            'id' => $newId,
            'nama' => $request->nama,
            'jurusan' => $request->jurusan
        ];

        $this->saveStudents($students);

        return redirect()->route('students.index')->with('success', 'Siswa berhasil ditambahkan!');
    }

    public function show($id)
    {
        $students = $this->getStudents();
        $student = collect($students)->firstWhere('id', (int)$id);
        
        if (!$student) {
            abort(404, 'Siswa tidak ditemukan');
        }

        return view('students.show', compact('student'));
    }

    public function edit($id)
    {
        $students = $this->getStudents();
        $student = collect($students)->firstWhere('id', (int)$id);
        
        if (!$student) {
            abort(404, 'Siswa tidak ditemukan');
        }

        return view('students.edit', compact('student'));
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'nama' => 'required|string|max:255',
            'jurusan' => 'required|in:RPL,TKJ,MM'
        ]);

        $students = $this->getStudents();
        $index = array_search((int)$id, array_column($students, 'id'));
        
        if ($index === false) {
            abort(404, 'Siswa tidak ditemukan');
        }

        $students[$index] = [
            'id' => (int)$id,
            'nama' => $request->nama,
            'jurusan' => $request->jurusan
        ];

        $this->saveStudents($students);

        return redirect()->route('students.index')->with('success', 'Data siswa berhasil diperbarui!');
    }

    public function destroy($id)
    {
        $students = $this->getStudents();
        $students = array_filter($students, function($student) use ($id) {
            return $student['id'] != (int)$id;
        });

        $this->saveStudents(array_values($students));

        return redirect()->route('students.index')->with('success', 'Siswa berhasil dihapus!');
    }
}