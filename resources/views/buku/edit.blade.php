<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Buku</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-slate-100 text-slate-800">
    <div class="max-w-xl mx-auto py-10 px-4">
        <div class="mb-6 flex items-center justify-between">
            <h1 class="text-3xl font-bold">Edit Buku</h1>
            <a href="{{ route('buku.index') }}" class="text-blue-600 hover:underline">Kembali</a>
        </div>

        <div class="bg-white rounded-lg shadow p-6">
            <form action="{{ route('buku.update', $buku) }}" method="POST">
                @csrf
                @method('PUT')

                <div class="mb-4">
                    <label for="judul" class="block text-sm font-medium mb-1">Judul</label>
                    <input id="judul" type="text" name="judul" value="{{ old('judul', $buku->judul) }}" class="w-full border border-slate-300 rounded px-3 py-2 focus:outline-none focus:ring-2 focus:ring-blue-500" required>
                    @error('judul')
                        <p class="mt-1 text-sm text-red-600">{{ $message }}</p>
                    @enderror
                </div>

                <div class="mb-4">
                    <label for="penulis" class="block text-sm font-medium mb-1">Penulis</label>
                    <input id="penulis" type="text" name="penulis" value="{{ old('penulis', $buku->penulis) }}" class="w-full border border-slate-300 rounded px-3 py-2 focus:outline-none focus:ring-2 focus:ring-blue-500" required>
                    @error('penulis')
                        <p class="mt-1 text-sm text-red-600">{{ $message }}</p>
                    @enderror
                </div>

                <div class="mb-6">
                    <label for="stok" class="block text-sm font-medium mb-1">Stok</label>
                    <input id="stok" type="number" name="stok" value="{{ old('stok', $buku->stok) }}" min="0" class="w-full border border-slate-300 rounded px-3 py-2 focus:outline-none focus:ring-2 focus:ring-blue-500" required>
                    @error('stok')
                        <p class="mt-1 text-sm text-red-600">{{ $message }}</p>
                    @enderror
                </div>

                <button type="submit" class="bg-blue-600 text-white px-4 py-2 rounded hover:bg-blue-700">Perbarui</button>
            </form>
        </div>
    </div>
</body>
</html>
