<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class SewaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $date_now = now();
        DB::table('sewas')->insert(array (
            0 => 
            array (
              'Kd_Sewa' => 'SW001',
              'No_Identitas' => 'CR003',
              'Kd_Film' => 'FL002',
              'Tgl_Pinjam' => '2019-03-20',
              'Tgl_Kembali' => '2019-03-23',
              'Harga_Sewa' => '25000',
              'created_at' => $date_now,
              'updated_at' => $date_now,
            ),
            1 => 
            array (
              'Kd_Sewa' => 'SW001',
              'No_Identitas' => 'CR003',
              'Kd_Film' => 'FL001',
              'Tgl_Pinjam' => '2019-03-20',
              'Tgl_Kembali' => '2019-03-23',
              'Harga_Sewa' => '25000',
              'created_at' => $date_now,
              'updated_at' => $date_now
            ),
            2 => 
            array (
              'Kd_Sewa' => 'SW002',
              'No_Identitas' => 'CR001',
              'Kd_Film' => 'FL005',
              'Tgl_Pinjam' => '2019-03-21',
              'Tgl_Kembali' => '2019-03-24',
              'Harga_Sewa' => '20000',
              'created_at' => $date_now,
              'updated_at' => $date_now
            ),
            3 => 
            array (
              'Kd_Sewa' => 'SW003',
              'No_Identitas' => 'CR002',
              'Kd_Film' => 'FL009',
              'Tgl_Pinjam' => '2019-03-22',
              'Tgl_Kembali' => '2019-03-25',
              'Harga_Sewa' => '25000',
              'created_at' => $date_now,
              'updated_at' => $date_now
            ),
            4 => 
            array (
              'Kd_Sewa' => 'SW004',
              'No_Identitas' => 'CR005',
              'Kd_Film' => 'FL003',
              'Tgl_Pinjam' => '2019-03-23',
              'Tgl_Kembali' => '2019-03-26',
              'Harga_Sewa' => '20000',
              'created_at' => $date_now,
              'updated_at' => $date_now
            ),
            5 => 
            array (
              'Kd_Sewa' => 'SW005',
              'No_Identitas' => 'CR003',
              'Kd_Film' => 'FL007',
              'Tgl_Pinjam' => '2019-03-24',
              'Tgl_Kembali' => '2019-03-27',
              'Harga_Sewa' => '20000',
              'created_at' => $date_now,
              'updated_at' => $date_now
            ),
            6 => 
            array (
              'Kd_Sewa' => 'SW006',
              'No_Identitas' => 'CR004',
              'Kd_Film' => 'FL008',
              'Tgl_Pinjam' => '2019-03-25',
              'Tgl_Kembali' => '2019-03-28',
              'Harga_Sewa' => '25000',
              'created_at' => $date_now,
              'updated_at' => $date_now
            ),
            7 => 
            array (
              'Kd_Sewa' => 'SW006',
              'No_Identitas' => 'CR004',
              'Kd_Film' => 'FL010',
              'Tgl_Pinjam' => '2019-03-25',
              'Tgl_Kembali' => '2019-03-28',
              'Harga_Sewa' => '25000',
              'created_at' => $date_now,
              'updated_at' => $date_now
            ),
          ));


    }
}
