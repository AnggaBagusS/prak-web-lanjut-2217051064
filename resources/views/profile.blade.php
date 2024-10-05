<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Profile</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-gray-100 flex items-center justify-center h-screen">

<div class="bg-white p-8 rounded-lg shadow-lg max-w-sm text-center">
    <div class="w-24 h-24 mx-auto rounded-full bg-gray-300 flex items-center justify-center mb-4">
        <span class="text-gray-600 text-4xl">👤</span>
    </div>
    <h2 class="text-xl font-semibold mb-2">Profil Mahasiswa</h2>
    <p class="text-gray-500 text-sm mb-6">Informasi dasar mahasiswa</p>
    <table class="w-full text-left">
        <tr class="border-b">
            <td class="py-2 font-semibold text-gray-600">Nama</td>
            <td class="py-2">:</td>
            <td class="py-2"><?= $nama ?></td>
        </tr>
        <tr class="border-b">
            <td class="py-2 font-semibold text-gray-600">Kelas</td>
            <td class="py-2">:</td>
            <td class="py-2"><?= $kelas ?></td>
        </tr>
        <tr class="border-b">
            <td class="py-2 font-semibold text-gray-600">NPM</td>
            <td class="py-2">:</td>
            <td class="py-2"><?= $npm ?></td>
        </tr>
    </table>
</div>

</body>
</html>
