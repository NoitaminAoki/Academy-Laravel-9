<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CustomerSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $date_now = now();
        DB::table('customers')->insert(
            array (
                0 => 
                array (
                    'No_Identitas' => 'CR001',
                    'Jenis_Identitas' => 'SIM',
                    'Nama' => 'Fattan Firdaus',
                    'Alamat' => 'Jl. Pitara 2, Depok',
                    'created_at' => $date_now,
                    'updated_at' => $date_now
                ),
                1 => 
                array (
                    'No_Identitas' => 'CR002',
                    'Jenis_Identitas' => 'SIM',
                    'Nama' => 'Gavin Razabuwono',
                    'Alamat' => 'Jl. Pisangan 12, Depok',
                    'created_at' => $date_now,
                    'updated_at' => $date_now
                ),
                2 => 
                array (
                    'No_Identitas' => 'CR003',
                    'Jenis_Identitas' => 'KTP',
                    'Nama' => 'Muhammad Zaky',
                    'Alamat' => 'Jl. Mampang 10A, Depok',
                    'created_at' => $date_now,
                    'updated_at' => $date_now
                ),
                3 => 
                array (
                    'No_Identitas' => 'CR004',
                    'Jenis_Identitas' => 'SIM',
                    'Nama' => 'Najwa Maulida',
                    'Alamat' => 'Jl. Bubulak 16, Bogor',
                    'created_at' => $date_now,
                    'updated_at' => $date_now
                ),
                4 => 
                array (
                    'No_Identitas' => 'CR005',
                    'Jenis_Identitas' => 'KTP',
                    'Nama' => 'Alwinda Setianingrum',
                    'Alamat' => 'Jl. Merdeka 22, Bogor',
                    'created_at' => $date_now,
                    'updated_at' => $date_now
                ),
                )
        );
    }
}
