@extends('layouts.app')
@section('content')
    <a href="{{ route('user.create') }}" class="btn btn-primary mb-3">Tambah Pengguna Baru</a>

    <h1 style="font-size: 2rem; margin-bottom: 20px;">Daftar User</h1>

    <div class="row">
        @foreach ($users as $user)
            <div class="col-md-4 mb-4">
                <div class="card" style="width: 18rem;">
                    <img class="card-img-top" src="{{asset('upload/img/'. $user->foto)}}" alt="Foto User" style="height: 180px; object-fit: cover;">
                    <div class="card-body">
                        <h5 class="card-title">{{ $user['nama'] }}</h5>
                        <p class="card-text">
                            NPM: {{ $user['npm'] }}<br>
                            Kelas: {{ $user['nama_kelas'] }}<br>
                            Jurusan: {{ $user['jurusan'] }}<br>
                            Semester: {{ $user['semester'] }}
                        </p>
                        <a href="{{ route('user.show', $user->id) }}" class="btn btn-primary btn-sm">View</a>
                        <a href="{{route('user.edit', $user['id']) }}" class="btn btn-warning btn-sm">Edit</a>
                        <form action="{{route('user.destroy', $user['id']) }}" method="POST" style="display: inline-block;">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-danger btn-sm" 
                            onclick="return confirm('Apakah anda yakin ingin menghapus user ini?')">Delete</button>
                        </form>
                    </div>
                </div>
            </div>
        @endforeach
    </div>
@endsection
