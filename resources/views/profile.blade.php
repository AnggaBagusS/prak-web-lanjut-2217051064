<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Profil User</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-gray-100 flex items-center justify-center min-h-screen">
    <div class="bg-white p-8 rounded-lg shadow-md w-full max-w-sm">
        <h1 class="text-2xl font-bold text-center text-gray-800 mb-6">Profil User</h1>
        
        <!-- Display Foto if available -->
        @if ($user->foto)
            <div class="mb-4 flex justify-center">
                <img src="{{ asset($user->foto) }}" alt="Foto Profil" class="w-32 h-32 rounded-full">
            </div>
        @else
            <div class="mb-4 flex justify-center">
                <img src="{{ asset('upload/img/default.jpg') }}" alt="Foto Default" class="w-32 h-32 rounded-full">
            </div>
        @endif

        <p class="text-lg text-gray-700 mb-4">Nama: <span class="font-medium text-gray-900">{{ $user->nama }}</span></p>
        <p class="text-lg text-gray-700 mb-4">NPM: <span class="font-medium text-gray-900">{{ $user->npm }}</span></p>
        <p class="text-lg text-gray-700">Kelas: <span class="font-medium text-gray-900">{{ $user->nama_kelas ?? 'Kelas tidak ditemukan' }}</span></p>
    </div>
</body>
</html>
