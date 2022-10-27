@extends('layout')
@section('content')
<title>Home</title>
<div class="container mt-4">
    <div class="header text-center fst-italic">
        <h3>Daftar Karyawan</h3>
        <p>PT. Bisa Artifisial Indonesia</p>
    </div>
    <div>
        <a class="btn btn-primary mb-2" href="addEmployee">Tambah</a>
    </div>
    <table class="table">
        <thead class="table-light">
            <tr>
                <th scope="col">#</th>
                <th scope="col">Nama</th>
                <th scope="col">Update At</th>
                <th scope="col">Gender</th>
                <th scope="col">Usia</th>
                <th scope="col">Aksi</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($employees as $employee)
            <tr>
                <td>{{ $loop->iteration . '.' }}</td>
                <td>{{ $employee->firstName . ' ' . $employee->lastName }}</td>
                <td>{{ $employee->updated_at }}</td>
                <td>{{ $employee->gender }}</td>
                <td>{{ $employee->age }}</td>
                <td>
                    <a class="btn btn-warning" href="editEmployee/{{ $employee->id }}">Edit</a>
                    <a class="btn btn-danger" href="deleteEmployee/{{ $employee->id }}" 
                        onclick="return confirm('Yakin ingin menghapus data ini?')">Delete</a>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>
@endsection






