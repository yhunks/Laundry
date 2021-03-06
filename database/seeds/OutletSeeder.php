<?php

use Illuminate\Database\Seeder;

class OutletSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $outlet = new \App\Outlet;
        $outlet->nama = "Toko Luandry SBR";
        $outlet->alamat = "Jl. SBR, No. 10";
        $outlet->no_telp = "086255362638";

        $outlet->save();

        $this->command->info("Seeder berhasil!");
    }
}
