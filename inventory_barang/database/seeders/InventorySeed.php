<?php

namespace Database\Seeders;

use App\Models\Inventory;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class InventorySeed extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $barang = [
            [
                'id' => '1',
                'nama_barang' => 'Helm',
                'jumlah_barang' => 69,
                'deskripsi_barang' => 'helm ini sangat kuat dan nyaman',
                'category_id' => '1',
                'member_id' => '1'
            ],
            [
                'id' => '2',
                'nama_barang' => 'Sepatu',
                'jumlah_barang' => 13,
                'deskripsi_barang' => 'sepatu sangat hangat dan enak',
                'category_id' => '3',
                'member_id' => '7'
            ],
            [
                'id' => '3',
                'nama_barang' => 'Ikat Pinggang',
                'jumlah_barang' => 21,
                'deskripsi_barang' => 'Ikat pinggang ini sangat nyaman dan kuat dalam mengikat',
                'category_id' => '3',
                'member_id' => '5'
            ],
            [
                'id' => '4',
                'nama_barang' => 'Lemari',
                'jumlah_barang' => 2,
                'deskripsi_barang' => 'berpintu 2',
                'category_id' => '2',
                'member_id' => '4'
            ],
            [
                'id' => '5',
                'nama_barang' => 'Sofa',
                'jumlah_barang' => 5,
                'deskripsi_barang' => 'sofa ini sangat empuk dan nyaman',
                'category_id' => '2',
                'member_id' => '2'
            ],
        ];

        foreach ($barang as $brg) {
            Inventory::create([
                'nama_barang' => $brg["nama_barang"],
                'jumlah_barang' => $brg["jumlah_barang"],
                'deskripsi_barang' => $brg["deskripsi_barang"],
                'category_id' => $brg["category_id"],
                'member_id' => $brg["member_id"]
                ]);
        }
    }
}
