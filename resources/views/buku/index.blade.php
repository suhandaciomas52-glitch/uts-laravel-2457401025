<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Daftar Buku</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-slate-100 text-slate-800">
    <div class="max-w-5xl mx-auto py-10 px-4">
        <div class="flex items-center justify-between mb-6">
            <div>
                <h1 class="text-3xl font-bold">Daftar Buku</h1>
            </div>
            <a href="{{ route('buku.create') }}" class="bg-blue-600 text-white px-4 py-2 rounded hover:bg-blue-700">Tambah Buku</a>
        </div>

        @if (session('success'))
            <div class="mb-4 rounded border border-green-200 bg-green-100 px-4 py-3 text-green-700">
                {{ session('success') }}
            </div>
        @endif

        <div class="overflow-hidden rounded-lg shadow bg-white">
            <table class="min-w-full divide-y divide-slate-200">
                <thead class="bg-slate-50">
                    <tr>
                        <th class="px-4 py-3 text-left text-sm font-semibold">Judul</th>
                        <th class="px-4 py-3 text-left text-sm font-semibold">Penulis</th>
                        <th class="px-4 py-3 text-left text-sm font-semibold">Stok</th>
                        <th class="px-4 py-3 text-right text-sm font-semibold">Aksi</th>
                    </tr>
                </thead>
                <tbody class="divide-y divide-slate-200">
                    @forelse ($bukus as $buku)
                        <tr>
                            <td class="px-4 py-3">{{ $buku->judul }}</td>
                            <td class="px-4 py-3">{{ $buku->penulis }}</td>
                            <td class="px-4 py-3">{{ $buku->stok }}</td>
                            <td class="px-4 py-3 text-right space-x-2">
                                <a href="{{ route('buku.show', $buku) }}" class="text-sky-600 hover:underline">Detail</a>
                                <a href="{{ route('buku.edit', $buku) }}" class="text-amber-600 hover:underline">Edit</a>
                                <form action="{{ route('buku.destroy', $buku) }}" method="POST" class="inline">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="text-red-600 hover:underline" onclick="return confirm('Yakin ingin menghapus buku ini?')">Hapus</button>
                                </form>
                            </td>
                        </tr>
                    @empty
                        <tr>
                            <td colspan="4" class="px-4 py-8 text-center text-slate-500">Belum ada data buku.</td>
                        </tr>
                    @endforelse
                </tbody>
            </table>
        </div>
    </div>
</body>
</html>
