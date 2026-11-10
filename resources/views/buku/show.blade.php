<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Detail Buku</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-slate-100 text-slate-800">
    <div class="max-w-xl mx-auto py-10 px-4">
        <div class="mb-6 flex items-center justify-between">
            <h1 class="text-3xl font-bold">Detail Buku</h1>
            <a href="{{ route('buku.index') }}" class="text-blue-600 hover:underline">Kembali</a>
        </div>

        <div class="bg-white rounded-lg shadow p-6 space-y-4">
            <div>
                <p class="text-sm text-slate-500">Judul</p>
                <p class="text-xl font-semibold">{{ $buku->judul }}</p>
            </div>
            <div>
                <p class="text-sm text-slate-500">Penulis</p>
                <p class="text-xl font-semibold">{{ $buku->penulis }}</p>
            </div>
            <div>
                <p class="text-sm text-slate-500">Stok</p>
                <p class="text-xl font-semibold">{{ $buku->stok }}</p>
            </div>
        </div>
    </div>
</body>
</html>
