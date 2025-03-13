<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Dashboard</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body class="bg-gray-100">

<!-- Sidebar -->
<div class="flex">
    <aside class="w-64 bg-gray-900 min-h-screen text-white p-5">
        <h2 class="text-2xl font-bold mb-6">Admin Panel</h2>
        <ul>
            <li class="mb-4">
                <a href="{{ route('admin.dashboard') }}" class="block py-2 px-4 rounded-lg hover:bg-gray-700">
                    <i class="fas fa-home mr-2"></i> Dashboard
                </a>
            </li>
            <li class="mb-4">
                <a href="{{ route('admin.profil-desa') }}" class="block py-2 px-4 rounded-lg hover:bg-gray-700">
                    <i class="fas fa-users mr-2"></i> Profil Desa
                </a>
            </li>
            <li>
                <a href="#" class="block py-2 px-4 rounded-lg hover:bg-gray-700">
                    <i class="fas fa-cog mr-2"></i> Settings
                </a>
            </li>
        </ul>
    </aside>

    <!-- Content -->
    <main class="flex-1 p-6">
        <nav class="flex justify-between items-center bg-white p-4 rounded-lg shadow-md mb-6">
            <h1 class="text-xl font-bold">Dashboard</h1>
            <div>
                <span class="text-gray-600">Admin</span>
                <button class="ml-4 px-4 py-2 bg-red-500 text-white rounded-lg">Logout</button>
            </div>
        </nav>

        <div class="grid grid-cols-3 gap-6">
            <!-- Card 1 -->
            <div class="bg-white p-6 rounded-lg shadow-md">
                <h3 class="text-xl font-bold">Total Penduduk</h3>
                <p class="text-gray-600 mt-2">5,120 Jiwa</p>
            </div>

            <!-- Card 2 -->
            <div class="bg-white p-6 rounded-lg shadow-md">
                <h3 class="text-xl font-bold">Laporan Masuk</h3>
                <p class="text-gray-600 mt-2">12 Laporan</p>
            </div>

            <!-- Card 3 -->
            <div class="bg-white p-6 rounded-lg shadow-md">
                <h3 class="text-xl font-bold">Event Desa</h3>
                <p class="text-gray-600 mt-2">3 Kegiatan</p>
            </div>
        </div>

        <div class="mt-6 bg-white p-6 rounded-lg shadow-md">
            <h2 class="text-xl font-bold mb-4">Pengumuman</h2>
            <p class="text-gray-600">Tidak ada pengumuman terbaru saat ini.</p>
        </div>
    </main>
</div>

</body>
</html>
