@extends('layouts.app')
@section('content')
    <a href="{{ route('user.create') }}" class="btn btn-primary mb-3">Tambah Pengguna Baru</a>

    <h1 style="font-size: 2rem; margin-bottom: 20px;">Daftar User</h1>
    
    <table style="width: 100%; border-collapse: collapse;">
        <thead>
            <tr style="background-color: #222; color: white; text-align: left;">
                <th style="padding: 10px;">ID</th>
                <th style="padding: 10px;">Nama</th>
                <th style="padding: 10px;">NPM</th>
                <th style="padding: 10px;">Kelas</th>
                <th style="padding: 10px;">Foto</th>
                <th style="padding: 10px;">Aksi</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($users as $user)
                <tr style="border-bottom: 1px solid #ddd;">
                    <td style="padding: 10px;">{{ $user['id'] }}</td>
                    <td style="padding: 10px;">{{ $user['nama'] }}</td>
                    <td style="padding: 10px;">{{ $user['npm'] }}</td>
                    <td style="padding: 10px;">{{ $user['nama_kelas'] }}</td>
                    <td style="padding: 10px;">
                        <img src="{{asset('upload/img/'. $user->foto)}}" alt="Foto User" width="100">
                    </td>
                    <td style="padding: 10px;">
                        <a href="{{ route('user.show', $user->id) }}" class="btn btn-primary btn-sm">View</a>
                        <a href="{{route('user.edit', $user['id']) }}" class="btn btn-warning btn-sm">Edit</a>
                        <form action="{{route('user.destroy', $user['id']) }}" method="POST" style="display: inline-block;">
                            @csrf
                            @method('DELETE')
                            <button type = "submit" class = "btn btn-danger btn-sm" 
                            onclick= "return confirm('Apakah anda yakin ingin menghpus user ini?')">Delete</button> 
                        </form>

                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
@endsection