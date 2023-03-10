<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\tabel_penjualan;

class PenjualanSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        table_penjualan::create([
            'id_jual' => '1',
            'plat' => 'G36-PML',
            'jumlah_orang' => '2',
            'harga' => '5000',
            'total_harga' => '10000'
        ]);
    }
}
