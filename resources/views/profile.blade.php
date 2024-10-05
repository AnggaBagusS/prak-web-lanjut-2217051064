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
        <p class="text-lg text-gray-700 mb-4">Nama: <span class="font-medium text-gray-900">{{ $nama }}</span></p>
        <p class="text-lg text-gray-700 mb-4">NPM: <span class="font-medium text-gray-900">{{ $npm }}</span></p>
        <p class="text-lg text-gray-700">Kelas: <span class="font-medium text-gray-900">{{ $nama_kelas ?? 'Kelas tidak ditemukan' }}</span></p>
    </div>
</body>
</html>
