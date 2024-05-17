<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dokumentasi</title>
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
</head>
<body class="bg-gray-100 text-gray-800">
    <div class="container mx-auto p-10">
        <header class="mb-6">
            <h1 class="text-3xl font-bold text-center">Dokumentasi Penggunaan API</h1>
        </header>
        <main>
            <section class="mb-6">
                <p class="text-lg text-center">
                    API ini memungkinkan pengguna untuk mendapatkan data geospasial di kecamatan Singkawang Selatan dalam bentuk GeoJSON. API ini menyediakan data geospasial untuk 9 bidang yang berbeda (9 id yang berbeda, harap periksa link pertama). Berikut adalah tabel URL yang dapat diakses beserta kegunaannya.
                </p>
            </section>
            <section>
                <table class="min-w-full bg-white border border-gray-300">
                    <thead>
                        <tr>
                            <th class="px-4 py-2 border-b border-gray-300 text-left">URL</th>
                            <th class="px-4 py-2 border-b border-gray-300 text-left">Kegunaan</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td class="px-4 py-2 border-b border-gray-300">
                                <a href="http://singkawangselatan.pspig.online/api/geojsons">http://singkawangselatan.pspig.online/api/geojsons</a>
                            </td>
                            <td class="px-4 py-2 border-b border-gray-300">Return metadata GeoJSON tanpa konten dari GeoJSON</td>
                        </tr>
                        <tr>
                            <td class="px-4 py-2 border-b border-gray-300">
                                <a href="http://singkawangselatan.pspig.online/api/geojsons?withContent=True">http://singkawangselatan.pspig.online/api/geojsons?withContent=True</a>
                            </td>
                            <td class="px-4 py-2 border-b border-gray-300">Return metadata dan konten GeoJSON</td>
                        </tr>
                        <tr>
                            <td class="px-4 py-2 border-b border-gray-300">
                                <a href="http://singkawangselatan.pspig.online/api/geojsons/1">http://singkawangselatan.pspig.online/api/geojsons/1</a>
                            </td>
                            <td class="px-4 py-2 border-b border-gray-300">Return metadata GeoJSON untuk bidang dengan id 1 tanpa konten dari GeoJSON</td>
                        </tr>
                        <tr>
                            <td class="px-4 py-2 border-b border-gray-300">
                                <a href="http://singkawangselatan.pspig.online/api/geojsons/1?withContent=true">http://singkawangselatan.pspig.online/api/geojsons/1?withContent=true</a>
                            </td>
                            <td class="px-4 py-2 border-b border-gray-300">Return metadata dan konten GeoJSON untuk bidang dengan id 1</td>
                        </tr>
                        <tr>
                            <td class="px-4 py-2 border-b border-gray-300">
                                http://singkawangselatan.pspig.online/api/geojsons/{id}
                            </td>
                            <td class="px-4 py-2 border-b border-gray-300">Return metadata GeoJSON untuk bidang dengan id {id} tanpa konten dari GeoJSON</td>
                        </tr>
                        <tr>
                            <td class="px-4 py-2 border-b border-gray-300">
                                http://singkawangselatan.pspig.online/api/geojsons/{id}?withContent=true
                            </td>
                            <td class="px-4 py-2 border-b border-gray-300">Return metadata dan konten GeoJSON untuk bidang dengan id {id}</td>
                        </tr>
                    </tbody>
                </table>
            </section>
        </main>
    </div>
</body>
</html>
