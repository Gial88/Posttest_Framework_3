<?php

namespace Database\Seeders;

use App\Models\Category;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class KategoriSeed extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $kategori = [
            [
                'id' => '1',
                'kategori' => 'Pecah Belah'
            ],
            [
                'id' => '2',
                'kategori' => 'Furnitur'
            ],
            [
                'id' => '3',
                'kategori' => 'Pakaian'
            ],
            [
                'id' => '4',
                'kategori' => 'Alat Musik'
            ],
        ];

        foreach ($kategori as $ctg) {
            Category::create([
                'kategori' => $ctg["kategori"],
                ]);
        }
    }
}
