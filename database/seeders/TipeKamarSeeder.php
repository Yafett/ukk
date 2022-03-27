<?php

namespace Database\Seeders;

use App\Models\TipeKamar;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class TipeKamarSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        TipeKamar::create([
            'id_kamar' => 1,
            'tipe_kamar' => 'Superior',
            'jumlah_kamar' => 0,
            'updated_at' => date("Y-m-d H:i:s"),
            'created_at' => date("Y-m-d H:i:s")
        ]);

        TipeKamar::create([
            'id_kamar' => 2,
            'tipe_kamar' => 'Deluxe',
            'jumlah_kamar' => 0,
            'updated_at' => date("Y-m-d H:i:s"),
            'created_at' => date("Y-m-d H:i:s")
        ]);
    }
}
