<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Create User</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-gray-100 flex items-center justify-center min-h-screen">

    <div class="bg-white p-8 rounded-lg shadow-lg w-full max-w-md">
        <h2 class="text-2xl font-semibold text-gray-800 mb-6 text-center">Create User</h2>

        <!-- Form Start -->
        <form action="{{ route('user.store') }}" method="POST" class="space-y-4">
            @csrf
            
            <!-- Nama Field -->
            <div>
                <label for="nama" class="block text-sm font-medium text-gray-700">Nama</label>
                <input type="text" id="nama" name="nama" class="mt-1 block w-full px-3 py-2 border border-gray-300 rounded-lg shadow-sm focus:outline-none focus:ring-2 focus:ring-indigo-500" placeholder="Masukkan nama">
                @foreach ($errors->get('nama') as $msg)
                    <p class="text-red-500">{{$msg}}</p>
                @endforeach
            </div>
            
            <!-- NPM Field -->
            <div>
                <label for="npm" class="block text-sm font-medium text-gray-700">NPM</label>
                <input type="text" id="npm" name="npm" class="mt-1 block w-full px-3 py-2 border border-gray-300 rounded-lg shadow-sm focus:outline-none focus:ring-2 focus:ring-indigo-500" placeholder="Masukkan NPM">
                @foreach ($errors->get('npm') as $msg)
                    <p class="text-red-500">{{$msg}}</p>
                @endforeach
            </div>
            
            <!-- Kelas Field -->
            <div>
                <label for="id_kelas" class="block text-sm font-medium text-gray-700">Kelas</label>
                <select name="kelas_id" id="kelas_id" required>
                    @foreach ($kelas as $kelasItem)
                    <option value="{{$kelasItem->id}}">{{$kelasItem->nama_kelas}}</option>
                    @endforeach
                </select>
                @foreach ($errors->get('kelas_id') as $msg)
                    <p class="text-red-500">{{$msg}}</p>
                @endforeach
            </div>
            
            <!-- Submit Button -->
            <div class="flex justify-center">
                <button type="submit" class="w-full py-2 px-4 bg-indigo-500 hover:bg-indigo-600 text-white rounded-lg shadow-md focus:outline-none focus:ring-2 focus:ring-indigo-500 focus:ring-opacity-75">Submit</button>
            </div>
        </form>
        <!-- Form End -->
    </div>

</body>
</html>
