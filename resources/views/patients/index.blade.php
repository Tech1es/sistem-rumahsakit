@extends('layouts.app')

@section('content')
<div class="container">
    <h1>Daftar Pasien</h1>
    <a href="{{ route('patients.create') }}" class="btn btn-primary mb-3">Tambah Pasien</a>
    <table class="table border-left border-bottom border-right">
        <thead>
            <tr>
                <th style="text-align: center">Nama</th>
                <th style="text-align: center">Email</th>
                <th style="text-align: center">Tanggal Lahir</th>
                <th style="text-align: center">Alamat</th>
                <th style="text-align: center">Nomor Telepon</th>
                <th style="text-align: center">Aksi</th>
            </tr>
        </thead>
        <tbody>
            @foreach($patients as $patient)
            <tr style="text-align: center">
                <td>{{ $patient->name }}</td>
                <td>{{ $patient->email }}</td>
                <td>{{ $patient->date_of_birth }}</td>
                <td>{{ $patient->address }}</td>
                <td>{{ $patient->phone_number }}</td>
                <td>
                    <a href="{{ route('patients.show', $patient->id) }}" class="btn btn-info mb-2 ml-1">Rincian</a>
                    <a href="{{ route('patients.edit', $patient->id) }}" class="btn btn-warning mb-2 ml-1">Edit</a>
                    <form action="{{ route('patients.destroy', $patient->id) }}" method="POST" style="display:inline;">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="btn btn-danger">Hapus</button>
                    </form>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
	Halaman : {{ $patients->currentPage() }} <br/>
	Jumlah Data : {{ $patients->total() }} <br/>
	Data Per Halaman : {{ $patients->perPage() }} <br/>
    <div class="mt-2">
        {{ $patients->links() }}
    </div>
</div>
@endsection