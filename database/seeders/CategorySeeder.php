<?php

namespace Database\Seeders;

use App\Models\Category;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $kategori = [
            'Pemberian Hak Milik Perorangan',
            'Roya',
            'Pemisahan/Pemecahan',
            'Peralihan Hak/Balik Nama',
            'Waris',
            'Izin Perubahan Penggunaan Tanah',
            'Sertifikat Pengganti (Karena Hilang/Rusak/Blangko Lama)'

        ];

        foreach ($kategori as $c) {
            Category::create([
                'category_name' => $c,
            ]);
        }
    }
}
