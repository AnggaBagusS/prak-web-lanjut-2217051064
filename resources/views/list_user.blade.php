@extends('layouts.app')
@section('content')
    <h1 style="font-size: 2rem; margin-bottom: 20px;">Daftar User</h1>
    
    <table style="width: 100%; border-collapse: collapse;">
        <thead>
            <tr style="background-color: #222; color: white; text-align: left;">
                <th style="padding: 10px;">ID</th>
                <th style="padding: 10px;">Nama</th>
                <th style="padding: 10px;">NPM</th>
                <th style="padding: 10px;">Kelas</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($users as $user)
                <tr style="border-bottom: 1px solid #ddd;">
                    <td style="padding: 10px;">{{ $user['id'] }}</td>
                    <td style="padding: 10px;">{{ $user['nama'] }}</td>
                    <td style="padding: 10px;">{{ $user['npm'] }}</td>
                    <td style="padding: 10px;">{{ $user['nama_kelas'] }}</td>
                </tr>
            @endforeach
        </tbody>
    </table>
@endsection