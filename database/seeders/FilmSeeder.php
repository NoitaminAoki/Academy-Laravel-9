<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class FilmSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $date_now = now();

        DB::table('films')->insert([
            [
                'Kd_Film' => 'FL001',
                'Jenis' => 'Action',
                'Judul' => 'Terminator 6',
                'Jml_Keping' => '30',
                'created_at' => $date_now,
                'updated_at' => $date_now,
            ],
            [
                'Kd_Film' => 'FL002',
                'Jenis' => 'Action',
                'Judul' => 'Avengers: Endgame',
                'Jml_Keping' => '30',
                'created_at' => $date_now,
                'updated_at' => $date_now,
            ],
            [
                'Kd_Film' => 'FL003',
                'Jenis' => 'Cartoon',
                'Judul' => 'Aladdin',
                'Jml_Keping' => '26',
                'created_at' => $date_now,
                'updated_at' => $date_now,
            ],
            [
                'Kd_Film' => 'FL004',
                'Jenis' => 'Cartoon',
                'Judul' => 'Frozen 2',
                'Jml_Keping' => '12',
                'created_at' => $date_now,
                'updated_at' => $date_now,
            ],
            [
                'Kd_Film' => 'FL005',
                'Jenis' => 'Cartoon',
                'Judul' => 'POKÉMON Detective Pikachu',
                'Jml_Keping' => '16',
                'created_at' => $date_now,
                'updated_at' => $date_now,
            ],
            [
                'Kd_Film' => 'FL006',
                'Jenis' => 'Cartoon',
                'Judul' => 'Drama Dilan 1991',
                'Jml_Keping' => '20',
                'created_at' => $date_now,
                'updated_at' => $date_now,
            ],
            [
                'Kd_Film' => 'FL007',
                'Jenis' => 'Cartoon',
                'Judul' => 'Drama Keluarga Cemara',
                'Jml_Keping' => '20',
                'created_at' => $date_now,
                'updated_at' => $date_now,
            ],
            [
                'Kd_Film' => 'FL008',
                'Jenis' => 'Cartoon',
                'Judul' => 'Horor Annabelle 3',
                'Jml_Keping' => '24',
                'created_at' => $date_now,
                'updated_at' => $date_now,
            ],
            [
                'Kd_Film' => 'FL009',
                'Jenis' => 'Cartoon',
                'Judul' => 'Horor IT: Chapter Two',
                'Jml_Keping' => '24',
                'created_at' => $date_now,
                'updated_at' => $date_now,
            ],
            [
                'Kd_Film' => 'FL010',
                'Jenis' => 'Cartoon',
                'Judul' => 'Komedi Knives Out',
                'Jml_Keping' => '32',
                'created_at' => $date_now,
                'updated_at' => $date_now,
            ],
        ]);
    }
}
