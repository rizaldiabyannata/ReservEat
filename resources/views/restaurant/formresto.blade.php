<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Add Menu</title>
    @vite('resources/css/app.css')
</head>
<body class="bg-gray-100">
    <div class="max-w-4xl mx-auto p-6 bg-white shadow-md rounded-lg mt-10">
        <h2 class="text-2xl font-bold mb-6">informasi menu</h2>

        <!-- Foto Produknya disini -->
        <div class="mb-4">
            <label class="block text-gray-700 font-bold mb-2">Foto menu</label>
            <div class="flex items-center space-x-4">
                <label class="inline-flex items-center">
                    <input type="radio" class="form-radio text-indigo-600" name="foto-produk" value="1:1">
                    <span class="ml-2">Foto 1:1</span>
                </label>
                <label class="inline-flex items-center">
                    <input type="radio" class="form-radio text-indigo-600" name="foto-produk" value="3:4">
                    <span class="ml-2">Foto 3:4</span>
                </label>
                <a href="#" class="text-indigo-600">Lihat Contoh</a>
            </div>
        </div>
        <!-- sampe sini foto produk -->

        <!-- Foto Produk Promosi -->
        <div class="mb-4">
            <label class="block text-gray-700 font-bold mb-2">Foto Produk Promosi</label>
            <div class="border-2 border-dashed border-gray-300 p-4 flex justify-center items-center cursor-pointer">
                <span class="text-gray-500">Tambahkan Foto (0/9)</span>
            </div>
            <p class="text-sm text-gray-500 mt-2">Upload Foto 1:1. Foto Produk Promosi akan digunakan di halaman promosi, hasil pencarian, rekomendasi, dll. Meng-upload foto produk promosi, akan meningkatkan minat belanja Pembeli.</p>
        </div>

        <!-- Video Produk -->
        <div class="mb-4">
            <label class="block text-gray-700 font-bold mb-2">Video Produk</label>
            <div class="border-2 border-dashed border-gray-300 p-4 flex justify-center items-center cursor-pointer">
                <span class="text-gray-500">Tambahkan Video (0/1)</span>
            </div>
            <p class="text-sm text-gray-500 mt-2">Size: Max 30MB, resolution should not exceed 1280x1280px. Format: MP4. Catatan: Kamu dapat menampilkan produk saat video sedang diproses. Video akan muncul setelah berhasil diproses.</p>
        </div>

        <!-- Nama Produk -->
        <div class="mb-4">
            <label class="block text-gray-700 font-bold mb-2">Nama menu</label>
            <input type="text" class="w-full p-2 border border-gray-300 rounded-md" placeholder="Nama Merek + Tipe Produk + Fitur Produk (Bahan, Warna, Ukuran, Varian)">
        </div>

        <!-- Kategori -->
        <div class="mb-4">
            <label class="block text-gray-700 font-bold mb-2">Kategori</label>
            <select class="w-full p-2 border border-gray-300 rounded-md">
                <option>Pilih kategori</option>
                <!-- Tambahkan opsi kategori di sini belum tau kategorinya -->
            </select>
        </div>

        <!-- Deskripsi Produk -->
        <div class="mb-6">
            <label class="block text-gray-700 font-bold mb-2">Deskripsi Produk</label>
            <textarea class="w-full p-2 border border-gray-300 rounded-md" rows="5" placeholder="Deskripsi Produk"></textarea>
        </div>

        <!-- Tombol -->
        <div class="flex justify-between">
            <button class="bg-gray-300 text-gray-700 p-2 rounded-md">Kembali</button>
            <div>
                <button class="bg-gray-300 text-gray-700 p-2 rounded-md mr-2">Simpan & Arsipkan</button>
                <button class="bg-orange-500 text-white p-2 rounded-md">Simpan & Tampilkan</button>
            </div>
        </div>
    </div>
</body>
</html>
