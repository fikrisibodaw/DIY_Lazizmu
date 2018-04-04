<?php

use Database\traits\TruncateTable;
use Database\traits\DisableForeignKeys;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class RolesSeeder extends Seeder
{
    use DisableForeignKeys, TruncateTable;

    /**
     * Run the database seed.
     *
     * @return void
     */
    public function run()
    {
        $this->disableForeignKeys();
        $this->truncate('roles');

        $roles = [
         ['name' => 'administrator'], 
         ['name' => 'wilayah_penyaluran'],
         ['name' => 'wilayah_penghimpunan'],
         ['name' => 'daerah_administrator'], 
         ['name' => 'daerah_penyaluran'],
         ['name' => 'daerah_penghimpunan'],
         ['name' => 'layanan_administrator'], 
         ['name' => 'layanan_penyaluran'],
         ['name' => 'layanan_penghimpunan'],
        ];

        DB::table('roles')->insert($roles);

        $this->enableForeignKeys();
    }
}