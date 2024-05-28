<?php

namespace Database\Seeders;

use App\Models\Bidang;
use App\Models\Geojson;
use App\Models\Kecamatan;
use App\Models\Subbidang;
use App\Models\User;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    private function seedKecamatan($directory) {
        Kecamatan::create([
            'kode_kecamatan' => 'skwkec_001',
            'nama_kecamatan' => 'Singkawang Selatan',
            'geojson_id' => 10
        ]);
    }

    private function seedBidang() {
        Bidang::insert([
            ['nama_bidang' => 'Pendidikan'],
            ['nama_bidang' => 'Fasilitas Kesehatan'],
            ['nama_bidang' => 'Rumah Ibadah'],
            ['nama_bidang' => 'Batas Administrasi']
        ]);
    }

    private function seedSubbidang() {
        Subbidang::insert([
            [
                'bidang_id' => 1,
                'nama_subbidang' => 'TK'
            ],
            [
                'bidang_id' => 1,
                'nama_subbidang' => 'SD'
            ],
            [
                'bidang_id' => 1,
                'nama_subbidang' => 'SMP'
            ],
            [
                'bidang_id' => 1,
                'nama_subbidang' => 'SMA'
            ],
            [
                'bidang_id' => 1,
                'nama_subbidang' => 'SMK'
            ],
            [
                'bidang_id' => 2,
                'nama_subbidang' => 'Puskesmas'
            ],
            [
                'bidang_id' => 3,
                'nama_subbidang' => 'Gereja'
            ],
            [
                'bidang_id' => 3,
                'nama_subbidang' => 'Masjid'
            ],
            [
                'bidang_id' => 3,
                'nama_subbidang' => 'Vihara'
            ],
            [
                'bidang_id' => 4,
                'nama_subbidang' => 'Batas Administrasi Kecamatan'
            ]
        ]);
    }

    private function seedGeojson($directory) {
        Geojson::insert([
            [
                'subbidang_id' => 1,
                'kecamatan_id' => 1,
                'nama' => 'Taman Kanak-Kanak (TK)',
                'file_geojson' => $directory . 'taman_kanak_kanak_TK.geojson'
            ],
            [
                'subbidang_id' => 2,
                'kecamatan_id' => 1,
                'nama' => 'Sekolah Dasar (SD)',
                'file_geojson' => $directory . 'sekolah_dasar_SD.geojson'
            ],
            [
                'subbidang_id' => 3,
                'kecamatan_id' => 1,
                'nama' => 'Sekolah Menengah Pertama (SMP)',
                'file_geojson' => $directory . 'sekolah_menengah_pertama_SMP.geojson'
            ],
            [
                'subbidang_id' => 4,
                'kecamatan_id' => 1,
                'nama' => 'Sekolah Menengah Atas (SMA)',
                'file_geojson' => $directory . 'sekolah_menengah_atas_SMA.geojson'
            ],
            [
                'subbidang_id' => 5,
                'kecamatan_id' => 1,
                'nama' => 'Sekolah Menengah Kejuruan (SMK)',
                'file_geojson' => $directory . 'sekolah_menengah_kejuruan_SMK.geojson'
            ],
            [
                'subbidang_id' => 6,
                'kecamatan_id' => 1,
                'nama' => 'Puskesmas',
                'file_geojson' => $directory . 'puskesmas.geojson'
            ],
            [
                'subbidang_id' => 7,
                'kecamatan_id' => 1,
                'nama' => 'Gereja',
                'file_geojson' => $directory . 'gereja.geojson'
            ],
            [
                'subbidang_id' => 8,
                'kecamatan_id' => 1,
                'nama' => 'Masjid',
                'file_geojson' => $directory . 'masjid.geojson'
            ],
            [
                'subbidang_id' => 9,
                'kecamatan_id' => 1,
                'nama' => 'Vihara',
                'file_geojson' => $directory . 'vihara.geojson'
            ],
            [
                'subbidang_id' => 10,
                'kecamatan_id' => 1,
                'nama' => 'Batas Administrasi Kecamatan Singkawang Selatan',
                'file_geojson' => $directory . 'kecamatan_singkawang_selatan_adm.geojson'
            ]
        ]);
    }

    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // User::factory(10)->create();

        $directory = '';

        $this->seedKecamatan($directory);
        $this->seedBidang();
        $this->seedSubbidang();
        $this->seedGeojson($directory);
    }
}
